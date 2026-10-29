<?php
/**
 * Google Reviews Fetcher for Jaisrie Marketing
 * Fetches reviews via Google Places API and caches them into data/reviews.json
 */

$place_id = 'ChIJ86zUYazPBjsRe_ZyrApD66I';
$api_key  = 'AIzaSyAQcis3IxsMR2T_IonNIwXnhjkcIz_bZ70';

// Ensure data directory exists
$data_dir = __DIR__ . '/../data';
if (!is_dir($data_dir)) {
    mkdir($data_dir, 0755, true);
}
$cache_file = $data_dir . '/reviews.json';

echo "Attempting to fetch reviews for Place ID: $place_id\n";

// Function to make HTTP request with cURL
function fetch_url($url, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $output = curl_exec($ch);
    $err = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ['body' => $output, 'error' => $err, 'status' => $code];
}

// 1. Try Places API (Classic)
$classic_url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=" . urlencode($place_id) . "&fields=name,rating,reviews,user_ratings_total,url&key=" . urlencode($api_key);
$res = fetch_url($classic_url);

$data = json_decode($res['body'] ?? '', true);

if (!empty($data['result']['reviews'])) {
    $result = [
        'source' => 'google_places_api_classic',
        'fetched_at' => date('Y-m-d H:i:s'),
        'business_name' => $data['result']['name'] ?? 'Jaisrie Marketing',
        'rating' => $data['result']['rating'] ?? 5.0,
        'user_ratings_total' => $data['result']['user_ratings_total'] ?? count($data['result']['reviews']),
        'google_maps_url' => $data['result']['url'] ?? '',
        'reviews' => $data['result']['reviews']
    ];
    file_put_contents($cache_file, json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo "SUCCESS: Fetched and cached " . count($data['result']['reviews']) . " reviews via Places API Classic.\n";
    print_r($result);
    exit(0);
}

echo "Places API Classic response: " . ($res['body'] ?: $res['error']) . "\n";

// 2. Try Places API (New)
echo "Trying Places API (New)...\n";
$new_url = "https://places.googleapis.com/v1/places/" . urlencode($place_id) . "?fields=displayName,rating,userRatingCount,reviews,googleMapsUri&key=" . urlencode($api_key);
$res2 = fetch_url($new_url);
$data2 = json_decode($res2['body'] ?? '', true);

if (!empty($data2['reviews'])) {
    $normalized_reviews = [];
    foreach ($data2['reviews'] as $rev) {
        $normalized_reviews[] = [
            'author_name' => $rev['authorAttribution']['displayName'] ?? 'Google User',
            'author_url' => $rev['authorAttribution']['uri'] ?? '',
            'profile_photo_url' => $rev['authorAttribution']['photoUri'] ?? '',
            'rating' => $rev['rating'] ?? 5,
            'relative_time_description' => $rev['relativePublishTimeDescription'] ?? '',
            'text' => $rev['text']['text'] ?? '',
            'time' => strtotime($rev['publishTime'] ?? 'now')
        ];
    }
    $result = [
        'source' => 'google_places_api_new',
        'fetched_at' => date('Y-m-d H:i:s'),
        'business_name' => $data2['displayName']['text'] ?? 'Jaisrie Marketing',
        'rating' => $data2['rating'] ?? 5.0,
        'user_ratings_total' => $data2['userRatingCount'] ?? count($normalized_reviews),
        'google_maps_url' => $data2['googleMapsUri'] ?? '',
        'reviews' => $normalized_reviews
    ];
    file_put_contents($cache_file, json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo "SUCCESS: Fetched and cached " . count($normalized_reviews) . " reviews via Places API New.\n";
    print_r($result);
    exit(0);
}

echo "Places API New response: " . ($res2['body'] ?: $res2['error']) . "\n";
echo "ERROR: Unable to fetch reviews with current credentials.\n";
exit(1);
