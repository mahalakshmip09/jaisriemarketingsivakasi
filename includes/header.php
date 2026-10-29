<?php
if (!isset($page_title)) {
    $page_title = 'Jaisrie Marketing | Solar Company in Sivakasi, Tamil Nadu';
}
if (!isset($page_desc)) {
    $page_desc = 'Jaisrie Marketing is a trusted Solar company in Sivakasi, Tamil Nadu offering rooftop, residential, commercial and industrial solar installation, solar water heaters and solar street lights across South Tamil Nadu.';
}
if (!isset($active_page)) {
    $active_page = 'home';
}
if (!isset($canonical_url)) {
    $canonical_url = 'https://www.jaisriemarketing.com/';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
<meta name="keywords" content="solar company Sivakasi, rooftop solar Tamil Nadu, residential solar installation, commercial solar, solar water heater, solar street light, industrial solar projects South Tamil Nadu">
<meta name="author" content="Jaisrie Marketing">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
<!-- Open Graph -->
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="asset/image/logo.png">
<link rel="icon" type="image/png" href="asset/image/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="asset/css/style.css">
<link rel="stylesheet" href="asset/css/responsive.css">
<link rel="stylesheet" href="asset/css/animations.css">
</head>
<body>

<!-- ============ HEADER ============ -->
<header class="site-header">
  <div class="container header-inner">
    <a href="index.php" class="brand" aria-label="Jaisrie Marketing home">
      <img src="asset/image/logo.png" alt="Jaisrie Marketing Logo" class="brand-logo">
    </a>

    <nav class="main-nav" aria-label="Primary navigation">
      <a href="index.php" class="<?php echo ($active_page === 'home') ? 'active' : ''; ?>">Home</a>
      <a href="about.php" class="<?php echo ($active_page === 'about') ? 'active' : ''; ?>">About</a>
      <a href="testimonials.php" class="<?php echo ($active_page === 'testimonials') ? 'active' : ''; ?>">Testimonials</a>
      <a href="contact.php" class="<?php echo ($active_page === 'contact') ? 'active' : ''; ?>">Contact</a>
    </nav>

    <div class="header-actions">
      <a href="tel:+919629455664" class="icon-btn icon-btn--call" aria-label="Call Jaisrie Marketing">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <span>Call Now</span>
      </a>
      <a href="https://wa.me/919629455664" target="_blank" rel="noopener" class="icon-btn icon-btn--whatsapp" aria-label="Chat with Jaisrie Marketing on WhatsApp">
        <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"><path d="M16 3C9.373 3 4 8.373 4 15c0 2.42.71 4.67 1.93 6.56L4 29l7.64-1.9A11.94 11.94 0 0 0 16 27c6.627 0 12-5.373 12-12S22.627 3 16 3zm0 21.7c-1.98 0-3.83-.55-5.4-1.5l-.39-.23-4.53 1.13 1.16-4.42-.25-.4A9.65 9.65 0 0 1 5.3 15c0-5.9 4.8-10.7 10.7-10.7S26.7 9.1 26.7 15 21.9 24.7 16 24.7zm5.86-8.02c-.32-.16-1.9-.94-2.2-1.05-.3-.11-.51-.16-.73.16-.21.32-.83 1.05-1.02 1.26-.19.21-.38.24-.7.08-.32-.16-1.34-.49-2.55-1.57-.94-.84-1.58-1.87-1.76-2.19-.19-.32-.02-.49.14-.65.14-.14.32-.38.48-.57.16-.19.21-.32.32-.54.11-.21.05-.4-.03-.56-.08-.16-.73-1.75-1-2.4-.26-.62-.53-.54-.73-.55h-.62c-.21 0-.56.08-.86.4-.29.32-1.12 1.1-1.12 2.68 0 1.58 1.15 3.1 1.31 3.32.16.21 2.26 3.45 5.48 4.84.77.33 1.36.53 1.83.68.77.24 1.47.21 2.02.13.62-.09 1.9-.78 2.17-1.53.27-.75.27-1.4.19-1.53-.08-.13-.29-.21-.6-.37z"/></svg>
        <span>WhatsApp</span>
      </a>
      <button class="menu-toggle" aria-label="Open menu" aria-expanded="false">
        <span></span>
      </button>
    </div>
  </div>

  <nav class="mobile-nav" aria-label="Mobile navigation">
    <a href="index.php" class="<?php echo ($active_page === 'home') ? 'active' : ''; ?>">Home</a>
    <a href="about.php" class="<?php echo ($active_page === 'about') ? 'active' : ''; ?>">About</a>
    <a href="testimonials.php" class="<?php echo ($active_page === 'testimonials') ? 'active' : ''; ?>">Testimonials</a>
    <a href="contact.php" class="<?php echo ($active_page === 'contact') ? 'active' : ''; ?>">Contact</a>
    <div class="header-actions">
      <a href="tel:+919629455664" class="icon-btn icon-btn--call" aria-label="Call Jaisrie Marketing"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></a>
      <a href="https://wa.me/919629455664" target="_blank" rel="noopener" class="icon-btn icon-btn--whatsapp" aria-label="WhatsApp"><svg viewBox="0 0 32 32" fill="currentColor"><path d="M16 3C9.373 3 4 8.373 4 15c0 2.42.71 4.67 1.93 6.56L4 29l7.64-1.9A11.94 11.94 0 0 0 16 27c6.627 0 12-5.373 12-12S22.627 3 16 3zm0 21.7c-1.98 0-3.83-.55-5.4-1.5l-.39-.23-4.53 1.13 1.16-4.42-.25-.4A9.65 9.65 0 0 1 5.3 15c0-5.9 4.8-10.7 10.7-10.7S26.7 9.1 26.7 15 21.9 24.7 16 24.7zm5.86-8.02c-.32-.16-1.9-.94-2.2-1.05-.3-.11-.51-.16-.73.16-.21.32-.83 1.05-1.02 1.26-.19.21-.38.24-.7.08-.32-.16-1.34-.49-2.55-1.57-.94-.84-1.58-1.87-1.76-2.19-.19-.32-.02-.49.14-.65.14-.14.32-.38.48-.57.16-.19.21-.32.32-.54.11-.21.05-.4-.03-.56-.08-.16-.73-1.75-1-2.4-.26-.62-.53-.54-.73-.55h-.62c-.21 0-.56.08-.86.4-.29.32-1.12 1.1-1.12 2.68 0 1.58 1.15 3.1 1.31 3.32.16.21 2.26 3.45 5.48 4.84.77.33 1.36.53 1.83.68.77.24 1.47.21 2.02.13.62-.09 1.9-.78 2.17-1.53.27-.75.27-1.4.19-1.53-.08-.13-.29-.21-.6-.37z"/></svg></a>
    </div>
  </nav>
</header>
