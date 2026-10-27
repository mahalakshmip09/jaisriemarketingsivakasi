<?php
$page_title = 'Contact Us | Jaisrie Marketing Solar Sivakasi, Tamil Nadu';
$page_desc = 'Get in touch with Jaisrie Marketing for a free solar quote. Call, WhatsApp or fill our contact form - serving all of South Tamil Nadu from our Sivakasi office.';
$active_page = 'contact';
$canonical_url = 'https://www.jaisriemarketing.com/contact.php';
$extra_scripts = ['asset/js/contact.js'];

include 'includes/header.php';
?>

<!-- ============ PAGE BANNER ============ -->
<section class="page-banner">
  <div class="hero-bg" style="background-image:url('https://images.pexels.com/photos/16659262/pexels-photo-16659262.jpeg?auto=compress&cs=tinysrgb&w=1920');" role="img" aria-label="Solar installation background"></div>
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Contact</span></div>
    <h1>Get In Touch</h1>
  </div>
</section>



<!-- ============ CONTACT FORM + MAP ============ -->
<section class="section section--off-white" id="contact-form">
  <div class="container">
    <div class="grid grid-2" style="align-items:start;">

      <div class="card" style="padding:44px;" data-reveal="left">
        <span class="eyebrow">Request A Quote</span>
        <h2>Tell us about your solar requirement</h2>
        <p class="mt-24">Fill in your details and our team will call you back within one business day with a free, no-obligation quote.</p>

        <form class="mt-24" data-contact-form novalidate>
          <div class="form-grid">
            <div class="form-group full">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Your full name" required>
              <span class="field-error"></span>
            </div>
            <div class="form-group">
              <label for="mobile">Mobile Number</label>
              <input type="tel" id="mobile" name="mobile" placeholder="10-digit mobile number" required>
              <span class="field-error"></span>
            </div>
            <div class="form-group">
              <label for="email">Email (optional)</label>
              <input type="email" id="email" name="email" placeholder="you@example.com">
              <span class="field-error"></span>
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" id="city" name="city" placeholder="Your city" required>
              <span class="field-error"></span>
            </div>
            <div class="form-group">
              <label for="service">Service Required</label>
              <select id="service" name="service" required>
                <option value="">Select a service</option>
                <option value="residential">Residential Solar</option>
                <option value="commercial">Commercial Solar</option>
                <option value="industrial">Industrial Solar</option>
                <option value="water-heater">Solar Water Heater</option>
                <option value="street-light">Solar Street Light</option>
                <option value="maintenance">Solar Maintenance</option>
              </select>
              <span class="field-error"></span>
            </div>
            <div class="form-group full">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell us a bit about your requirement (roof size, monthly bill, etc.)" required></textarea>
              <span class="field-error"></span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-24">Send Enquiry</button>
          <div class="form-status" data-form-status></div>
        </form>
      </div>

      <div data-reveal="right">
        <div class="card" style="overflow:hidden;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.604575211578!2d77.78458897375756!3d9.45602848216105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cfac61d4acf3%3A0xa2eb430aac72f67b!2sJAISRIE%20MARKETING%20(SIVAKASI%20SOLAR)!5e0!3m2!1sen!2sin!4v1783944500026!5m2!1sen!2sin" width="600" height="450" title="Jaisrie Marketing office location map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="card mt-24" style="padding:32px;">
          <div style="display:flex;gap:16px;align-items:center;">
            <span class="feature-icon" style="background:#25D36622;margin-bottom:0;">
              <svg viewBox="0 0 32 32" width="26" height="26" fill="#25D366"><path d="M16 3C9.373 3 4 8.373 4 15c0 2.42.71 4.67 1.93 6.56L4 29l7.64-1.9A11.94 11.94 0 0 0 16 27c6.627 0 12-5.373 12-12S22.627 3 16 3zm0 21.7c-1.98 0-3.83-.55-5.4-1.5l-.39-.23-4.53 1.13 1.16-4.42-.25-.4A9.65 9.65 0 0 1 5.3 15c0-5.9 4.8-10.7 10.7-10.7S26.7 9.1 26.7 15 21.9 24.7 16 24.7zm5.86-8.02c-.32-.16-1.9-.94-2.2-1.05-.3-.11-.51-.16-.73.16-.21.32-.83 1.05-1.02 1.26-.19.21-.38.24-.7.08-.32-.16-1.34-.49-2.55-1.57-.94-.84-1.58-1.87-1.76-2.19-.19-.32-.02-.49.14-.65.14-.14.32-.38.48-.57.16-.19.21-.32.32-.54.11-.21.05-.4-.03-.56-.08-.16-.73-1.75-1-2.4-.26-.62-.53-.54-.73-.55h-.62c-.21 0-.56.08-.86.4-.29.32-1.12 1.1-1.12 2.68 0 1.58 1.15 3.1 1.31 3.32.16.21 2.26 3.45 5.48 4.84.77.33 1.36.53 1.83.68.77.24 1.47.21 2.02.13.62-.09 1.9-.78 2.17-1.53.27-.75.27-1.4.19-1.53-.08-.13-.29-.21-.6-.37z"/></svg>
            </span>
            <div>
              <h3>Chat with us on WhatsApp</h3>
              <p style="font-size:0.92rem;">Get a quick response for quotes, site visits and support.</p>
            </div>
          </div>
          <a href="https://wa.me/919629455664" target="_blank" rel="noopener" class="btn btn-primary btn-block mt-24">Start WhatsApp Chat</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ SOCIAL MEDIA ============ -->
<section class="section section--off-white text-center" id="social">
  <div class="container">
    <span class="eyebrow">Stay Connected</span>
    <h2>Follow Jaisrie Marketing</h2>
    <p class="mt-24" style="max-width:560px;margin-inline:auto;">Follow us for project updates, solar savings tips and customer stories from across South Tamil Nadu.</p>
    <div class="social-row" style="justify-content:center;margin-top:24px;">
      <a href="https://www.facebook.com/jaisriemarketing" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/></svg></a>
      <a href="https://www.instagram.com/kani_jaisrie/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 2 .3 2.5.5.6.2 1 .5 1.5 1 .5.5.8.9 1 1.5.2.5.4 1.3.5 2.5.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1-1 1.5-.5.5-.9.8-1.5 1-.5.2-1.3.4-2.5.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1-.5-1.5-1-.5-.5-.8-.9-1-1.5-.2-.5-.4-1.3-.5-2.5-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.2.3-2 .5-2.5.2-.6.5-1 1-1.5.5-.5.9-.8 1.5-1 .5-.2 1.3-.4 2.5-.5 1.3-.1 1.7-.1 4.9-.1zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4zm5.2-8.4a1.2 1.2 0 1 1 0-2.4 1.2 1.2 0 0 1 0 2.4z"/></svg></a>
      <a href="https://www.youtube.com/@jaisriemarketing5050" aria-label="YouTube" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.5 6.2a2.8 2.8 0 0 0-2-2C18.9 3.7 12 3.7 12 3.7s-6.9 0-8.5.5a2.8 2.8 0 0 0-2 2A29 29 0 0 0 1 12a29 29 0 0 0 .5 5.8 2.8 2.8 0 0 0 2 2c1.6.5 8.5.5 8.5.5s6.9 0 8.5-.5a2.8 2.8 0 0 0 2-2A29 29 0 0 0 23 12a29 29 0 0 0-.5-5.8zM9.8 15.5V8.5l6 3.5-6 3.5z"/></svg></a>
      <a href="https://www.linkedin.com/company/jaisriemarketing" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.4 20.4h-3.5v-5.6c0-1.3 0-3-1.9-3s-2.2 1.5-2.2 3v5.6H9.4V9h3.4v1.6h.1c.5-.9 1.6-1.8 3.4-1.8 3.6 0 4.3 2.4 4.3 5.5v6.1zM5.3 7.4a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM7 20.4H3.6V9H7v11.4z"/></svg></a>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
