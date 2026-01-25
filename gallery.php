<?php
/**
 * gallery.php — Professional fixed-grid gallery (4 columns x 3 rows)
 * - Forces SAME thumbnail size/shape (cropped nicely) regardless of source image dimensions.
 * - Uses your Imgur links.
 * - Includes a small INLINE CSS block with high specificity so it overrides any old .gallery/.ph rules.
 */

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
  // keep extra links here if you want later…
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
  "https://i.imgur.com/sYtBxnG.jpeg",
];

$thumbs = array_slice($images, 0, 12); // EXACTLY 12 items (3 rows x 4 columns)
?>
<style>
/* Force override (so old .gallery/.ph CSS cannot break the layout) */
#gallery .am-gallery-grid{
  display:grid !important;
  grid-template-columns:repeat(4, minmax(0, 1fr)) !important;
  gap:12px !important;
  align-items:stretch !important;
}
#gallery .am-gallery-item{
  display:block !important;
  width:100% !important;
  height:140px !important;           /* uniform size */
  border-radius:16px !important;
  overflow:hidden !important;
  border:1px solid rgba(16,24,40,.10) !important;
  background: rgba(16,24,40,.03) !important;
  box-shadow: 0 10px 24px rgba(16,24,40,.05) !important;
  position:relative !important;
}
#gallery .am-gallery-item img{
  width:100% !important;
  height:100% !important;
  object-fit:cover !important;        /* crop to same shape */
  object-position:center !important;
  display:block !important;
  transform:scale(1) !important;
  transition:transform .25s ease !important;
}
#gallery .am-gallery-item:hover img{ transform:scale(1.05) !important; }

@media (max-width: 980px){
  #gallery .am-gallery-grid{ grid-template-columns:repeat(3, minmax(0,1fr)) !important; }
  #gallery .am-gallery-item{ height:130px !important; }
}
@media (max-width: 640px){
  #gallery .am-gallery-grid{ grid-template-columns:repeat(2, minmax(0,1fr)) !important; }
  #gallery .am-gallery-item{ height:120px !important; }
}
</style>

<section id="gallery" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>12 selected bouquets (uniform thumbnails).</p>
    </div>

    <div class="am-gallery-grid">
      <?php foreach ($thumbs as $i => $url): ?>
        <a class="am-gallery-item" href="<?= htmlspecialchars($url) ?>" target="_blank" rel="noopener">
          <img
            src="<?= htmlspecialchars($url) ?>"
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
