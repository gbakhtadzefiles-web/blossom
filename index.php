<?php
// Template 1: Soft Pastel
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Amaryllis — Flower Boutique</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body class="t1">

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="#">
      <img src="Logo.png" alt="Amaryllis Logo" class="logo" />
      <span class="brand-text">
        <strong>Amaryllis</strong>
        <small>Flower Boutique</small>
      </span>
    </a>

    <nav class="nav">
      <a href="#about">About</a>
      <a href="#gallery">Gallery</a>
      <a href="#video">Video</a>
      <a href="#visit">Visit</a>
      <a class="btn" href="#contact">Contact</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container hero-inner">
    <div class="hero-copy">
      <h1>Bright flowers. Simple elegance.</h1>
      <p>Seasonal bouquets, curated gifts, and same-day delivery in your city.</p>
      <div class="hero-actions">
        <a class="btn" href="#gallery">View Gallery</a>
        <a class="btn ghost" href="#contact">Order / Ask</a>
      </div>
      <div class="hero-badges">
        <span>Fresh daily</span>
        <span>Minimal wrapping</span>
        <span>Custom bouquets</span>
      </div>
    </div>

    <div class="hero-card">
      <div class="hero-card-top">
        <h3>Today’s Highlight</h3>
        <p>Ask for “Amaryllis Signature” bouquet — light, joyful, modern.</p>
      </div>
      <div class="hero-card-bottom">
        <div class="mini-grid">
          <div class="mini" aria-hidden="true"></div>
          <div class="mini" aria-hidden="true"></div>
          <div class="mini" aria-hidden="true"></div>
          <div class="mini" aria-hidden="true"></div>
        </div>
        <small class="muted">Replace placeholders with real photos anytime.</small>
      </div>
    </div>
  </div>
</section>

<section id="about" class="section">
  <div class="container">
    <div class="section-head">
      <h2>About</h2>
      <p>We create clean, modern floral compositions with bright accents and natural textures.</p>
    </div>

    <div class="cards">
      <article class="card">
        <h3>Style</h3>
        <p>Minimalistic bouquets with space, balance, and uplifting colors.</p>
      </article>
      <article class="card">
        <h3>Quality</h3>
        <p>Fresh flowers, careful storage, and consistent craftsmanship.</p>
      </article>
      <article class="card">
        <h3>Service</h3>
        <p>Custom requests, gift notes, and fast delivery.</p>
      </article>
    </div>
  </div>
</section>

<section id="gallery" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>Use your bouquet photos here (replace the placeholder blocks).</p>
    </div>

    <div class="gallery">
      <div class="ph tall">Bouquet 1</div>
      <div class="ph">Bouquet 2</div>
      <div class="ph">Bouquet 3</div>
      <div class="ph wide">Bouquet 4</div>
      <div class="ph">Bouquet 5</div>
      <div class="ph">Bouquet 6</div>
    </div>
  </div>
</section>

<section id="video" class="section">
  <div class="container">
    <div class="section-head">
      <h2>Video</h2>
      <p>Embed your YouTube video (replace the URL).</p>
    </div>

    <div class="media">
      <iframe
        src="https://www.youtube.com/embed/VIDEO_ID"
        title="Amaryllis video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>
</section>

<section id="visit" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Map & Visit</h2>
      <p>Show your location and make it easy to reach you.</p>
    </div>

    <div class="split">
      <div class="map">
        <iframe
          src="https://www.google.com/maps?q=Tbilisi&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="contact-card" id="contact">
        <h3>Contact</h3>
        <p class="muted">Phone: <strong>+995 XXX XX XX XX</strong><br/>Address: <strong>Your address</strong></p>

        <form class="form" method="post" action="#">
          <label>
            Name
            <input type="text" name="name" required />
          </label>
          <label>
            Phone / Email
            <input type="text" name="contact" required />
          </label>
          <label>
            Message
            <textarea name="message" rows="4" required></textarea>
          </label>
          <button class="btn" type="submit">Send</button>
          <small class="muted">Hook this form to email/CRM later if needed.</small>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container footer-inner">
    <div>
      <strong>Amaryllis</strong>
      <small class="muted">© <?php echo date('Y'); ?></small>
    </div>
    <div class="footer-links">
      <a href="#">Instagram</a>
      <a href="#">Facebook</a>
      <a href="#">TikTok</a>
    </div>
  </div>
</footer>

</body>
</html>
