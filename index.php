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
        <a href="#shop">Shop</a>
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

    <section id="shop" class="container section shop">
      <h2 class="section-title">Featured Bouquets</h2>
      <div class="grid">
        <article class="card">
          <div class="card-media">💐</div>
          <h3>Spring Bliss</h3>
          <p class="price">$39</p>
          <p class="muted">Roses, tulips & seasonal greens — bright and cheerful.</p>
          <p><a class="btn-primary" href="hello.php">Add to Cart</a></p>
        </article>

        <article class="card">
          <div class="card-media">🌷</div>
          <h3>Pink Delight</h3>
          <p class="price">$45</p>
          <p class="muted">Blush roses and peonies for a romantic touch.</p>
          <p><a class="btn-primary" href="hello.php">Add to Cart</a></p>
        </article>

        <article class="card">
          <div class="card-media">🌻</div>
          <h3>Sunny Day</h3>
          <p class="price">$34</p>
          <p class="muted">Sunflowers & daisies — perfect for cheering someone up.</p>
          <p><a class="btn-primary" href="hello.php">Add to Cart</a></p>
        </article>
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
