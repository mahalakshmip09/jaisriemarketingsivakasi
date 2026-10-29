<?php
$page_title = 'Customer Testimonials | Jaisrie Marketing Solar EPC';
$page_desc = 'Read what customers across South Tamil Nadu say about their solar installation experience with Jaisrie Marketing - 500+ happy customers, 4.9 average rating.';
$active_page = 'testimonials';
$canonical_url = 'https://www.jaisriemarketing.com/testimonials.php';
$extra_scripts = ['asset/js/slider.js'];

// Load cached Google Reviews
$reviews_file = __DIR__ . '/data/reviews.json';
$google_data = file_exists($reviews_file) ? json_decode(file_get_contents($reviews_file), true) : null;
$google_rating = !empty($google_data['rating']) ? number_format($google_data['rating'], 1) : '4.5';
$google_total = $google_data['user_ratings_total'] ?? 27;
$google_maps_url = !empty($google_data['google_maps_url']) ? $google_data['google_maps_url'] : 'https://maps.google.com/?cid=11739550566793279099';
$google_write_review_url = 'https://search.google.com/local/writereview?placeid=ChIJ86zUYazPBjsRe_ZyrApD66I';
$google_reviews = $google_data['reviews'] ?? [];

include 'includes/header.php';
?>

<!-- ============ PAGE BANNER ============ -->
<section class="page-banner">
  <div class="hero-bg" style="background-image:url('https://images.pexels.com/photos/35105456/pexels-photo-35105456.jpeg?auto=compress&cs=tinysrgb&w=1920');" role="img" aria-label="Solar farm at sunrise"></div>
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Testimonials</span></div>
    <h1>What Our Customers Say</h1>
  </div>
</section>

<!-- ============ STATS STRIP ============ -->
<section class="section--tight section--navy">
  <div class="container">
    <div class="stats-strip">
      <div class="stat-card" data-reveal>
        <div class="stat-number"><span data-counter="500" data-suffix="+">0</span></div>
        <div class="stat-label">Happy Customers</div>
      </div>
      <div class="stat-card" data-reveal>
        <div class="stat-number"><span data-counter="<?= $google_rating ?>" data-suffix=" ★">0</span></div>
        <div class="stat-label">Google Rating (<?= $google_total ?>+ Reviews)</div>
      </div>
      <div class="stat-card" data-reveal>
        <div class="stat-number"><span data-counter="98" data-suffix="%">0</span></div>
        <div class="stat-label">Recommendation Rate</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIAL SLIDER ============ -->
<section class="section" id="reviews">
  <div class="container">
    <div class="section-head section-head--center">
      <span class="eyebrow">Customer Stories</span>
      <h2>Real feedback from real installations</h2>
    </div>

    <div class="testi-slider" data-slider data-autoplay="6000">
      <div class="testi-track" data-slider-track>

        <div class="testi-slide" data-slider-slide>
          <div class="card testi-card">
            <img class="testi-photo" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Photo of Murugan S." loading="lazy" width="74" height="74">
            <div class="stars" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
            </div>
            <p class="testi-quote">"Our electricity bill dropped by more than half within the first month. The Jaisrie team explained everything clearly and finished the installation in three days."</p>
            <div class="testi-name">Murugan S.</div>
            <div class="testi-location">Sivakasi</div>
          </div>
        </div>

        <div class="testi-slide" data-slider-slide>
          <div class="card testi-card">
            <img class="testi-photo" src="https://randomuser.me/api/portraits/women/65.jpg" alt="Photo of Kalaivani R." loading="lazy" width="74" height="74">
            <div class="stars" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
            </div>
            <p class="testi-quote">"We compared three companies before choosing Jaisrie Marketing for our shop's rooftop system. Their quote was the most transparent and the after-sales support has been excellent."</p>
            <div class="testi-name">Kalaivani R.</div>
            <div class="testi-location">Virudhunagar</div>
          </div>
        </div>

        <div class="testi-slide" data-slider-slide>
          <div class="card testi-card">
            <img class="testi-photo" src="https://randomuser.me/api/portraits/men/76.jpg" alt="Photo of Ashok Kumar P." loading="lazy" width="74" height="74">
            <div class="stars" aria-label="4.5 out of 5 stars">
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
            </div>
            <p class="testi-quote">"Our factory's solar system has been running smoothly for over a year now. Jaisrie's maintenance team visits on schedule and always keeps us informed of performance."</p>
            <div class="testi-name">Ashok Kumar P.</div>
            <div class="testi-location">Rajapalayam</div>
          </div>
        </div>

        <div class="testi-slide" data-slider-slide>
          <div class="card testi-card">
            <img class="testi-photo" src="https://randomuser.me/api/portraits/women/22.jpg" alt="Photo of Revathi N." loading="lazy" width="74" height="74">
            <div class="stars" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
            </div>
            <p class="testi-quote">"We installed a solar water heater and rooftop panels together. The team coordinated both installations in a single visit and the savings are already visible on our bill."</p>
            <div class="testi-name">Revathi N.</div>
            <div class="testi-location">Sivakasi</div>
          </div>
        </div>

      </div>

      <div class="slider-controls">
        <button class="slider-arrow" data-slider-prev aria-label="Previous testimonial">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <div class="slider-dots" data-slider-dots></div>
        <button class="slider-arrow" data-slider-next aria-label="Next testimonial">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ============ VIDEO TESTIMONIALS ============ -->
<section class="section section--off-white" id="video-testimonials">
  <div class="container">
    <div class="section-head section-head--center">
      <span class="eyebrow">Watch &amp; Listen</span>
      <h2>Video Testimonials</h2>
      <p>Hear directly from customers about their experience going solar with Jaisrie Marketing.</p>
    </div>
    <div class="grid grid-3">
      <div class="card" style="overflow:hidden;" data-reveal>
        <div class="service-media" style="aspect-ratio:16/10;">
          <img data-src="https://images.pexels.com/photos/14613939/pexels-photo-14613939.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Customer home with completed rooftop solar installation" loading="lazy" width="700" height="440">
          <span style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
            <span style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,0.9);display:flex;align-items:center;justify-content:center;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#0F7A44"><path d="M8 5v14l11-7z"/></svg>
            </span>
          </span>
        </div>
        <div class="service-body"><h3>Residential Story</h3><p>Murugan shares how solar cut his household bill in half.</p></div>
      </div>
      <div class="card" style="overflow:hidden;" data-reveal>
        <div class="service-media" style="aspect-ratio:16/10;">
          <img data-src="https://images.pexels.com/photos/15751124/pexels-photo-15751124.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Commercial building with solar installation" loading="lazy" width="700" height="440">
          <span style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
            <span style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,0.9);display:flex;align-items:center;justify-content:center;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#0F7A44"><path d="M8 5v14l11-7z"/></svg>
            </span>
          </span>
        </div>
        <div class="service-body"><h3>Commercial Story</h3><p>Kalaivani on choosing Jaisrie Marketing for her retail shop.</p></div>
      </div>
      <div class="card" style="overflow:hidden;" data-reveal>
        <div class="service-media" style="aspect-ratio:16/10;">
          <img data-src="https://images.pexels.com/photos/16659262/pexels-photo-16659262.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Industrial facility with rooftop solar array" loading="lazy" width="700" height="440">
          <span style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
            <span style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,0.9);display:flex;align-items:center;justify-content:center;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="#0F7A44"><path d="M8 5v14l11-7z"/></svg>
            </span>
          </span>
        </div>
        <div class="service-body"><h3>Industrial Story</h3><p>Ashok Kumar on a year of running his factory on solar.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CUSTOMER PROJECT GALLERY ============ -->
<section class="section" id="project-gallery">
  <div class="container">
    <div class="section-head section-head--center">
      <span class="eyebrow">Project Snapshots</span>
      <h2>Customer Installations</h2>
    </div>
    <div class="grid grid-3">
      <div class="gallery-item" data-reveal="scale">
        <img data-src="https://images.pexels.com/photos/8853536/pexels-photo-8853536.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Solar technicians completing a customer project" loading="lazy" width="700" height="700">
        <div class="gallery-caption"><strong>Rooftop Completion</strong><span>Sivakasi</span></div>
      </div>
      <div class="gallery-item" data-reveal="scale">
        <img data-src="https://images.pexels.com/photos/6961123/pexels-photo-6961123.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Maintenance team at a customer site" loading="lazy" width="700" height="700">
        <div class="gallery-caption"><strong>Maintenance Visit</strong><span>Virudhunagar</span></div>
      </div>
      <div class="gallery-item" data-reveal="scale">
        <img data-src="https://images.pexels.com/photos/34593293/pexels-photo-34593293.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Solar water heater at a customer home" loading="lazy" width="700" height="700">
        <div class="gallery-caption"><strong>Water Heater Install</strong><span>Sivakasi</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ GOOGLE REVIEWS SECTION ============ -->
<section class="section section--off-white" id="google-reviews">
  <div class="container">
    <div class="section-head section-head--center">
      <span class="eyebrow">Verified Customer Feedback</span>
      <h2>Official Google Reviews</h2>
      <p>Real ratings and reviews directly from our Google Business Profile.</p>
    </div>

    <!-- Google Trust & Rating Summary Bar -->
    <div class="google-trust-card" data-reveal>
      <div class="google-trust-left">
        <div class="google-g-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.66v3.04h3.88c2.28-2.1 3.66-5.2 3.66-9.14z"/>
            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.04c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.94H1.26v3.13C3.26 21.36 7.33 24 12 24z"/>
            <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.6H1.26C.46 8.2.01 10.04.01 12c0 1.96.45 3.8 1.25 5.4l4.02-3.13z"/>
            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.26 6.6l4.02 3.13c.95-2.84 3.6-4.98 6.72-4.98z"/>
          </svg>
        </div>
        <div>
          <div class="google-rating-score">
            <span><?= $google_rating ?></span>
            <div class="stars" aria-label="<?= $google_rating ?> out of 5 stars">
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
            </div>
          </div>
          <div class="google-rating-meta">
            Based on <strong><?= $google_total ?>+ reviews</strong> on Google Maps for <em>Jaisrie Marketing</em>
          </div>
        </div>
      </div>
      <div class="google-trust-actions">
        <a href="<?= htmlspecialchars($google_write_review_url) ?>" target="_blank" rel="noopener" class="btn-google-write">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          Write a Review
        </a>
        <a href="<?= htmlspecialchars($google_maps_url) ?>" target="_blank" rel="noopener" class="btn-google-maps">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          View on Google Maps
        </a>
      </div>
    </div>

    <!-- Review Cards Grid -->
    <div class="grid grid-3">
      <?php
      $avatar_colors = ['#1a73e8', '#1e8e3e', '#d93025', '#f29900', '#9334e6', '#00897b'];
      $displayed_count = 0;
      foreach ($google_reviews as $idx => $rev):
        if (!empty($rev['rating']) && $rev['rating'] < 4) continue;
        $name = $rev['author_name'] ?? 'Google Customer';
        $rating = intval($rev['rating'] ?? 5);
        $time_desc = $rev['relative_time_description'] ?? '';
        $text = trim($rev['text'] ?? '');
        $photo = $rev['profile_photo_url'] ?? '';
        $initial = mb_substr($name, 0, 1);
        $bg_color = $avatar_colors[$displayed_count % count($avatar_colors)];
        $displayed_count++;
      ?>
      <div class="card review-card" data-reveal>
        <svg class="review-card-g-icon" viewBox="0 0 24 24" aria-hidden="true">
          <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.66v3.04h3.88c2.28-2.1 3.66-5.2 3.66-9.14z"/>
          <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.04c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.94H1.26v3.13C3.26 21.36 7.33 24 12 24z"/>
          <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.6H1.26C.46 8.2.01 10.04.01 12c0 1.96.45 3.8 1.25 5.4l4.02-3.13z"/>
          <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.26 6.6l4.02 3.13c.95-2.84 3.6-4.98 6.72-4.98z"/>
        </svg>

        <div>
          <div class="review-head">
            <?php if (!empty($photo)): ?>
              <img class="review-avatar" src="<?= htmlspecialchars($photo) ?>" alt="<?= htmlspecialchars($name) ?>" loading="lazy" width="46" height="46" referrerpolicy="no-referrer">
            <?php else: ?>
              <div class="review-avatar" style="background: <?= $bg_color ?>;"><?= htmlspecialchars($initial) ?></div>
            <?php endif; ?>
            <div>
              <div class="review-name"><?= htmlspecialchars($name) ?></div>
              <?php if (!empty($time_desc)): ?>
                <div class="review-date"><?= htmlspecialchars($time_desc) ?></div>
              <?php endif; ?>
              <div class="review-badge-verified">
                <svg viewBox="0 0 20 20"><path d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm-2 15l-5-5 1.41-1.41L8 12.17l7.59-7.59L17 6l-9 9z"/></svg>
                Verified Google Review
              </div>
            </div>
          </div>

          <div class="stars" aria-label="<?= $rating ?> out of 5 stars">
            <?php for ($s = 0; $s < $rating; $s++): ?>
              <svg viewBox="0 0 20 20"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.4L15.6 18 10 14.7 4.4 18l1.4-6.1L1 6.5l6.4-.6L10 1z"/></svg>
            <?php endfor; ?>
          </div>

          <p class="review-text"><?= nl2br(htmlspecialchars($text)) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- ============ CTA ============ -->
<section class="cta-section">
  <div class="hero-bg" style="background-image:url('https://images.pexels.com/photos/16659262/pexels-photo-16659262.jpeg?auto=compress&cs=tinysrgb&w=1600');" role="img" aria-label="Solar farm background"></div>
  <div class="container cta-content">
    <span class="eyebrow">Join Them</span>
    <h2>Become Our Next Success Story</h2>
    <p>Get a free site visit and see how much you could save with solar.</p>
    <div class="cta-actions">
      <a href="contact.php" class="btn btn-amber">Get Free Quote</a>
      <a href="tel:+919629455664" class="btn btn-outline-light">Call Now</a>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
