<?php
// Template 2: Crisp Minimal
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Amaryllis — Flowers & Gifts</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body class="t2">

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="#">
      <img src="assets/Logo.png" alt="Amaryllis Logo" class="logo" />
      <span class="brand-name">Amaryllis</span>
    </a>
    <nav class="nav">
      <a href="#about">About</a>
      <a href="#gallery">Gallery</a>
      <a href="#video">Video</a>
      <a href="#visit">Map</a>
      <a class="chip" href="#contact">Contact</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container hero-inner">
    <div>
      <p class="kicker">FLOWER BOUTIQUE</p>
      <h1>Minimal bouquets.<br/>Maximum joy.</h1>
      <p class="lead">Clean design, bright colors, and fast service for gifts and events.</p>
      <div class="actions">
        <a class="btn" href="#contact">Request a bouquet</a>
        <a class="btn outline" href="#gallery">See arrangements</a>
      </div>
    </div>

    <div class="hero-panel" aria-hidden="true">
      <div class="panel-top"></div>
      <div class="panel-mid"></div>
      <div class="panel-bot"></div>
      <span class="panel-label">Gallery preview</span>
    </div>
  </div>
</section>

<section id="about" class="section">
  <div class="container">
    <div class="two">
      <div>
        <h2>About</h2>
        <p class="muted">
          Amaryllis focuses on modern compositions: airy structure, controlled palette,
          and premium finishing.
        </p>
      </div>
      <div class="about-metrics">
        <div class="metric"><strong>Daily</strong><span>fresh arrivals</span></div>
        <div class="metric"><strong>Fast</strong><span>delivery options</span></div>
        <div class="metric"><strong>Custom</strong><span>event orders</span></div>
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="section alt">
  <div class="container">
    <div class="head">
      <h2>Picture Gallery</h2>
      <p class="muted">Replace each placeholder with a real image later.</p>
    </div>

    <div class="grid">
      <figure class="tile a">01</figure>
      <figure class="tile b">02</figure>
      <figure class="tile c">03</figure>
      <figure class="tile d">04</figure>
      <figure class="tile e">05</figure>
      <figure class="tile f">06</figure>
    </div>
  </div>
</section>

<section id="video" class="section">
  <div class="container">
    <div class="head">
      <h2>Video</h2>
      <p class="muted">YouTube embed (swap VIDEO_ID).</p>
    </div>
    <div class="frame">
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
    <div class="head">
      <h2>Map & Contact</h2>
      <p class="muted">Add your exact address, phone, and email.</p>
    </div>

    <div class="cols">
      <div class="map">
        <iframe
          src="https://www.google.com/maps?q=Tbilisi&output=embed"
          loading="lazy"></iframe>
      </div>

      <div class="formbox" id="contact">
        <div class="info">
          <p><strong>Phone:</strong> +995 XXX XX XX XX</p>
          <p><strong>Address:</strong> Your address</p>
          <p><strong>Email:</strong> hello@amaryllis.ge</p>
        </div>

        <form method="post" action="#" class="form">
          <input type="text" name="name" placeholder="Name" required />
          <input type="text" name="contact" placeholder="Phone / Email" required />
          <textarea name="message" rows="5" placeholder="Message" required></textarea>
          <button class="btn" type="submit">Send message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container foot">
    <span>© <?php echo date('Y'); ?> Amaryllis</span>
    <span class="muted">Instagram · Facebook · TikTok</span>
  </div>
</footer>

</body>
</html>
