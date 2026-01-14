<?php
$year = date('Y');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blossom — Fresh Flowers Delivered</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <div class="logo">Blossom</div>
      <nav class="nav">
        <a href="#socials">Socials</a>
        <a href="#about">About</a>
        <a href="#contact" class="btn-outline">Contact</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container hero-inner">
        <div class="hero-copy">
          <h1>Brighten someone's day with fresh flowers</h1>
          <p class="tagline">Hand-picked bouquets, same-day delivery in the local area.</p>
          <p>
            <a class="btn-primary" href="#shop">Shop Bestsellers</a>
            <a class="btn-ghost" href="#contact">Custom Orders</a>
          </p>
        </div>
        <div class="hero-art">
          <div class="vase">
            <div class="flower">🌸</div>
          </div>
        </div>
      </div>
    </section>

    <section class="container section video">
      <div class="section-inner">
        <h2 class="section-title">Watch Our Arrangement Demo</h2>
        <div class="video-wrapper">
          <iframe src="https://www.youtube.com/embed/fSKQRDq3RkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <section id="socials" class="container section socials">
      <h2 class="section-title">Follow Us</h2>
      <div class="social-grid">
        <a class="social-card facebook" href="https://www.facebook.com/" target="_blank" rel="noopener">
          <span class="icon">
            <!-- Facebook SVG -->
            <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#1877F2" d="M22 12a10 10 0 10-11.5 9.9v-7H8.9v-3h1.6V9.5c0-1.6.95-2.5 2.4-2.5.7 0 1.4.05 2 .1v2.3h-1.1c-.9 0-1.2.6-1.2 1.2v1.5h2.2l-.35 3h-1.85v7A10 10 0 0022 12z"/></svg>
          </span>
          <span class="social-body">Facebook<div class="social-handle">/BlossomFlowers</div></span>
        </a>

        <a class="social-card tiktok" href="https://www.tiktok.com/" target="_blank" rel="noopener">
          <span class="icon">
            <!-- TikTok SVG -->
            <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#000" d="M12 2v8.2A4.8 4.8 0 0014.8 15c2.65 0 4.8-2.15 4.8-4.8V8.5h1.9A7.7 7.7 0 0112 21.7 7.7 7.7 0 014.3 14 7.7 7.7 0 0112 6.3V2z"/></svg>
          </span>
          <span class="social-body">TikTok<div class="social-handle">@blossom_flowers</div></span>
        </a>

        <a class="social-card instagram" href="https://www.instagram.com/" target="_blank" rel="noopener">
          <span class="icon">
            <!-- Instagram SVG -->
            <svg viewBox="0 0 24 24" aria-hidden="true"><linearGradient id="g" x1="0" x2="1"><stop offset="0" stop-color="#f58529"/><stop offset="0.5" stop-color="#dd2a7b"/><stop offset="1" stop-color="#8134af"/></linearGradient><path fill="url(#g)" d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 6.4A4.6 4.6 0 1016.6 13 4.6 4.6 0 0012 8.4zm6.8-3.9a1.1 1.1 0 11-1.1-1.1 1.1 1.1 0 011.1 1.1z"/></svg>
          </span>
          <span class="social-body">Instagram<div class="social-handle">@blossom_flowers</div></span>
        </a>
      </div>
    </section>

    <section id="about" class="container section about">
      <h2 class="section-title">About Blossom</h2>
      <p>Family-owned flower shop creating thoughtfully arranged bouquets using locally sourced blooms. We offer same-day delivery and custom arrangements for events.</p>
    </section>

    <section id="contact" class="container section contact">
      <h2 class="section-title">Contact & Orders</h2>
      <form class="contact-form" action="#" method="post">
        <label for="name">Name</label>
        <input id="name" name="name" placeholder="Your name" />

        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" />

        <label for="message">Message / Request</label>
        <textarea id="message" name="message" rows="4" placeholder="Tell us about your order or delivery"></textarea>

        <p><button class="btn-primary" type="submit">Send Request</button></p>
      </form>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div>© <?php echo $year ?> Blossom • Fresh local flowers</div>
      <div class="muted">Delivered with love</div>
    </div>
  </footer>

</body>
</html>
