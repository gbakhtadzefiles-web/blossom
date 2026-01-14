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
        <a class="social-card facebook" href="https://www.facebook.com/" target="_blank" rel="noopener">Facebook
          <div class="social-handle">/BlossomFlowers</div>
        </a>

        <a class="social-card tiktok" href="https://www.tiktok.com/" target="_blank" rel="noopener">TikTok
          <div class="social-handle">@blossom_flowers</div>
        </a>

        <a class="social-card instagram" href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram
          <div class="social-handle">@blossom_flowers</div>
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
