<?php
// Template 1: Soft Pastel — External Gallery (Imgur)

$gallery = [
  "https://i.imgur.com/LRNoCR9.jpeg",
  "https://i.imgur.com/tRpkGaP.jpeg",
  "https://i.imgur.com/DZNhyp3.jpeg",
  "https://i.imgur.com/CkFXKui.jpeg",
  "https://i.imgur.com/gTHFrAs.jpeg",
  "https://i.imgur.com/tsfz8xV.jpeg",
  "https://i.imgur.com/601UUzN.jpeg",
  "https://i.imgur.com/NMvHLQE.jpeg",
  "https://i.imgur.com/uQMmdeK.jpeg",
  "https://i.imgur.com/Pbieus0.jpeg",
  "https://i.imgur.com/3NOtctG.jpeg",
  "https://i.imgur.com/dPOvcZA.jpeg",
  "https://i.imgur.com/rnL55Re.jpeg",
  "https://i.imgur.com/5VCqiDm.jpeg",
  "https://i.imgur.com/Rrv3Vuq.jpeg",
  "https://i.imgur.com/hstOkEd.jpeg",
  "https://i.imgur.com/dS6f7YS.jpeg",
  "https://i.imgur.com/5DghSgN.jpeg",
  "https://i.imgur.com/GRt4yYv.jpeg",
  "https://i.imgur.com/WlkCfZ9.jpeg",
  "https://i.imgur.com/fueXVal.jpeg",
  "https://i.imgur.com/EgpW1vS.jpeg",
  "https://i.imgur.com/sT5PHvI.jpeg",
  "https://i.imgur.com/AJKJpLB.jpeg",
  "https://i.imgur.com/sYtBxnG.jpeg"
];

// use first 4 for hero mini grid
$mini = array_slice($gallery, 0, 4);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Amaryllis — Flower Boutique</title>
  <link rel="stylesheet" href="assets/styles.css">
</head>
<body class="t1">

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="#">
      <img src="assets/logo.png" class="logo" alt="Amaryllis Logo">
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

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">

    <div class="hero-copy">
      <h1>Bright flowers. Simple elegance.</h1>
      <p>Seasonal bouquets, curated gifts, and same-day delivery.</p>

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
        <p>Ask for “Amaryllis Signature” bouquet.</p>
      </div>

      <div class="hero-card-bottom">
        <div class="mini-grid">
          <?php foreach ($mini as $img): ?>
            <img src="<?= $img ?>" alt="Bouquet" loading="lazy" class="mini">
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
  <div class="container">
    <div class="section-head">
      <h2>About</h2>
      <p>Modern floral compositions with bright accents and natural textures.</p>
    </div>

    <div class="cards">
      <article class="card">
        <h3>Style</h3>
        <p>Clean, airy, minimal bouquets.</p>
      </article>
      <article class="card">
        <h3>Quality</h3>
        <p>Fresh flowers, handled with care.</p>
      </article>
      <article class="card">
        <h3>Service</h3>
        <p>Custom requests & fast delivery.</p>
      </article>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section id="gallery" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>Selected works from our collection.</p>
    </div>

    <div class="gallery">
      <?php foreach ($gallery as $img): ?>
        <figure class="ph">
          <img src="<?= $img ?>" alt="Bouquet" loading="lazy">
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- VIDEO -->
<section id="video" class="section">
  <div class="container">
    <div class="section-head">
      <h2>Video</h2>
      <p>Behind the scenes at Amaryllis.</p>
    </div>

    <div class="media">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- MAP + CONTACT -->
<section id="visit" class="section alt">
  <div class="container">
    <div class="split">

      <div class="map">
        <iframe src="https://www.google.com/maps?q=Tbilisi&output=embed"></iframe>
      </div>

      <div class="contact-card" id="contact">
        <h3>Contact</h3>
        <p class="muted">
          Phone: <strong>+995 XXX XX XX XX</strong><br>
          Address: <strong>Your address</strong>
        </p>

        <form class="form">
          <input type="text" placeholder="Name" required>
          <input type="text" placeholder="Phone / Email" required>
          <textarea rows="4" placeholder="Message" required></textarea>
          <button class="btn">Send</button>
        </form>
      </div>

    </div>
  </div>
</section>

<footer class="footer">
  <div class="container footer-inner">
    <strong>Amaryllis</strong>
    <small class="muted">© <?= date('Y') ?></small>
  </div>
</footer>

</body>
</html>
