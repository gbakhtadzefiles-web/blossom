<?php
// Template 3: Gradient Glass
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Amaryllis — Flowers</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body class="t3">

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="#">
      <img src="assets/Logo.png" alt="Amaryllis Logo" class="logo" />
      <div class="brand-stack">
        <span class="name">Amaryllis</span>
        <span class="tag">Bright • Minimal • Fresh</span>
      </div>
    </a>

    <nav class="nav">
      <a href="#about">About</a>
      <a href="#gallery">Gallery</a>
      <a href="#video">Video</a>
      <a href="#visit">Map</a>
      <a href="#contact" class="pill">Contact</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container hero-inner glass">
    <div class="hero-left">
      <h1>Flowers that feel like sunshine.</h1>
      <p>Create a bouquet with bright accents, clean lines, and premium finish.</p>
      <div class="cta">
        <a class="pill primary" href="#contact">Contact us</a>
        <a class="pill" href="#gallery">Browse gallery</a>
      </div>
      <div class="notes">
        <div class="note"><strong>Gift ready</strong><span>minimal wrapping</span></div>
        <div class="note"><strong>Events</strong><span>weddings & business</span></div>
        <div class="note"><strong>Delivery</strong><span>fast options</span></div>
      </div>
    </div>

    <div class="hero-right" aria-hidden="true">
      <div class="blob b1"></div>
      <div class="blob b2"></div>
      <div class="blob b3"></div>
      <div class="hero-frame">Your bouquet photo</div>
    </div>
  </div>
</section>

<section id="about" class="section">
  <div class="container glass">
    <div class="section-head">
      <h2>About</h2>
      <p>Modern floral compositions with bright, happy colors and clean structure.</p>
    </div>
    <div class="row">
      <div class="panel">
        <h3>Signature look</h3>
        <p>Light, airy bouquets with balanced palette and premium wrapping.</p>
      </div>
      <div class="panel">
        <h3>Fresh workflow</h3>
        <p>Daily sourcing, careful hydration, and quality control before delivery.</p>
      </div>
      <div class="panel">
        <h3>Custom orders</h3>
        <p>Tell us color, budget, and mood — we’ll propose options quickly.</p>
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="section">
  <div class="container glass">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>Replace placeholders with your real images anytime.</p>
    </div>

    <div class="masonry">
      <div class="shot s1">01</div>
      <div class="shot s2">02</div>
      <div class="shot s3">03</div>
      <div class="shot s4">04</div>
      <div class="shot s5">05</div>
      <div class="shot s6">06</div>
      <div class="shot s7">07</div>
      <div class="shot s8">08</div>
    </div>
  </div>
</section>

<section id="video" class="section">
  <div class="container glass">
    <div class="section-head">
      <h2>Video</h2>
      <p>Swap the YouTube VIDEO_ID.</p>
    </div>
    <div class="video">
      <iframe
        src="https://www.youtube.com/embed/VIDEO_ID"
        title="Amaryllis video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>
</section>

<section id="visit" class="section">
  <div class="container glass">
    <div class="section-head">
      <h2>Map & Contact</h2>
      <p>Location, details, and a simple form.</p>
    </div>

    <div class="layout">
      <div class="map">
        <iframe
          src="https://www.google.com/maps?q=Tbilisi&output=embed"
          loading="lazy"></iframe>
      </div>

      <div class="contact" id="contact">
        <div class="contact-top">
          <div class="line"><strong>Phone:</strong> +995 XXX XX XX XX</div>
          <div class="line"><strong>Address:</strong> Your address</div>
          <div class="line"><strong>Email:</strong> hello@amaryllis.ge</div>
        </div>

        <form class="form" method="post" action="#">
          <div class="two">
            <input type="text" name="name" placeholder="Name" required />
            <input type="text" name="contact" placeholder="Phone / Email" required />
          </div>
          <textarea name="message" rows="5" placeholder="Message" required></textarea>
          <button class="pill primary" type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container footer-inner">
    <span>© <?php echo date('Y'); ?> Amaryllis</span>
    <span class="muted">Instagram · Facebook · TikTok</span>
  </div>
</footer>

</body>
</html>
