<?php
// gallery.php — 12 thumbnail grid (3 rows x 4 columns, full width section)
// Uses your Imgur links. Adjust order if needed.

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
  "https://i.imgur.com/dPOvcZA.jpeg"
];

// show exactly 12 thumbnails
$thumbs = array_slice($gallery, 0, 12);
?>

<section id="gallery" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>Our latest bouquets and compositions.</p>
    </div>

    <div class="gallery-grid">
      <?php foreach ($thumbs as $i => $img): ?>
        <a class="gallery-item" href="<?= htmlspecialchars($img) ?>" target="_blank" rel="noopener">
          <img
            src="<?= htmlspecialchars($img) ?>"
            alt="Bouquet <?= $i + 1 ?>"
            loading="lazy"
            decoding="async"
            referrerpolicy="no-referrer"
          />
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
