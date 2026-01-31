<?php
// index.php — Template 1 (Soft Pastel) with 12-thumbnail gallery (4 cols x 3 rows)

// Full list (you can keep more for future pages)
$images = [
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

$mini   = array_slice($images, 0, 4);
$thumbs = array_slice($images, 0, 12); // 12 thumbnails (3 rows x 4 cols)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Amaryllis — Flower Boutique</title>
  <link rel="icon" type="image/png" href="https://i.imgur.com/a5sZSlN.png">
  <link rel="apple-touch-icon" href="https://i.imgur.com/a5sZSlN.png">
  <link rel="stylesheet" href="https://blossom.ge/assets/styles.css" />
</head>
<body class="t1">

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="#">
      <img src="https://i.imgur.com/a5sZSlN.png" alt="Amaryllis Logo" class="logo" />
      <span class="brand-text">
        <strong>ამარილისი</strong>
        <small>ყვავილების მაღაზია</small>
      </span>
    </a>

    <nav class="nav">
      <a href="#about">ჩვენს შესახებ</a>
      <a href="#gallery">გალერეა</a>
        <a href="#video">ვიდეო</a>
      <a class="btn" href="#contact">კონტაქტი</a>
    </nav>
  </div>
</header>
<section id="about" class="section">
  <div class="container">
    <div class="about-grid">
      <article class="card about-main">
        <div class="section-head">
          <h3>ჩვენს შესახებ</h3>
          <p>ჩვენ ვიყენებთ მხოლოდ საუკეთესო, სათუთად შერჩეულ და ყოველთვის ახალ ყვავილებს, რომლებიც დიდხანს ინარჩუნებენ პირვანდელ სილამაზესა და არომატს.</p>
          <p>ჩვენი ფლორისტები არ მიჰყვებიან შაბლონებს. ყოველი თაიგული და კომპოზიცია ექსკლუზიური ნამუშევარია, შექმნილი ინდივიდუალური ხედვითა და არტისტული მიდგომით.</p>
       
        </div>
      
      </article>

      <div class="about-social">
        <h3>შემოგვიერთდით</h3>
        <div class="social-links">
          <a href="https://www.tiktok.com/@.amaryllis43?_r=1&_t=ZS-93X48j50Jrs" class="btn-social">TikTok</a>
          <a href="https://www.instagram.com/amaryllis__flowers__shop?igsh=aWZyNGYxODdvanZp" class="btn-social">Instagram</a>
          <a href="https://www.facebook.com/share/1Dgt5X5Jhi/" class="btn-social">Facebook</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'gallery.php'; ?>

<section id="video" class="section">
  <div class="container">
    <div class="section-head">
      <h3>შემოქმედება</h3>
      
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
      <h3>ლოკაცია</h3>
      
    </div>

    <div class="split">
      <div class="map">
<iframe
  src="https://www.google.com/maps?q=41.7320978,44.7339606&z=17&output=embed"
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

      <div class="contact-card" id="contact">
        <h3>დაგვიკავშირდით</h3>
        <p class="muted">ტელეფონი: <strong>598 67 19 59</strong><br/>ელ. ფოსტა: <strong>info@amaryllis.com.ge</strong><br/>მისამართი: <strong>პ. დათუაშვილის 3</strong></p>
 <h3>დატოვეთ შეტყობინება</h3>
        <form class="form" method="post" action="#">
          <label>
            სახელი
            <input type="text" name="name" required />
          </label>
          <label>
            ტელეფონი
            <input type="text" name="contact" required />
          </label>
          <label>
            შეტყობინება
            <textarea name="message" rows="4" required></textarea>
          </label>
          <button class="btn" type="submit">გაგზავნა</button>
         
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
      <a href="https://www.instagram.com/amaryllis__flowers__shop?igsh=aWZyNGYxODdvanZp">Instagram</a>
      <a href="https://www.facebook.com/share/1Dgt5X5Jhi/">Facebook</a>
      <a href="https://www.tiktok.com/@.amaryllis43?_r=1&_t=ZS-93X48j50Jrs">TikTok</a>
    </div>
  </div>
</footer>
<script>
  // Remove any hash like #visit on load, keep page clean
  if (window.location.hash) {
    history.replaceState(null, "", window.location.pathname + window.location.search);
  }
</script>
</body>
</html>
