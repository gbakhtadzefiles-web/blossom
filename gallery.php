<?php
/**
 * gallery.php — 4x3 grid + lightbox popup (prev/next + counter)
 * Paste this file as-is and include it from index.php:
 *   <?php include __DIR__ . '/gallery.php'; ?>
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

// Show 12 thumbs in the grid, but lightbox will include ALL images
$thumbs = array_slice($images, 0, 12);
$total  = count($images);
?>
<style>
/* Grid (high specificity override) */
#gallery .am-gallery-grid{
  display:grid !important;
  grid-template-columns:repeat(4, minmax(0, 1fr)) !important;
  gap:12px !important;
}
#gallery .am-gallery-item{
  display:block !important;
  width:100% !important;
  height:140px !important;
  border-radius:16px !important;
  overflow:hidden !important;
  border:1px solid rgba(16,24,40,.10) !important;
  background: rgba(16,24,40,.03) !important;
  box-shadow: 0 10px 24px rgba(16,24,40,.05) !important;
}
#gallery .am-gallery-item img{
  width:100% !important;
  height:100% !important;
  object-fit:cover !important;
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

/* Lightbox */
.am-lightbox{
  position:fixed;
  inset:0;
  z-index:9999;
  display:none;
}
.am-lightbox.is-open{ display:block; }
.am-lightbox .backdrop{
  position:absolute;
  inset:0;
  background: rgba(10,18,28,.72);
  backdrop-filter: blur(6px);
}
.am-lightbox .panel{
  position:relative;
  max-width: 980px;
  width: calc(100% - 28px);
  margin: 5vh auto;
  background: rgba(255,255,255,.92);
  border:1px solid rgba(255,255,255,.35);
  border-radius: 18px;
  overflow:hidden;
  box-shadow: 0 26px 90px rgba(0,0,0,.30);
}
.am-lightbox .stage{
  background:#111;
  display:flex;
  align-items:center;
  justify-content:center;
  height: min(70vh, 640px);
}
.am-lightbox .stage img{
  max-width:100%;
  max-height:100%;
  object-fit:contain;
  display:block;
}
.am-lightbox .bar{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:10px;
  padding:12px 12px;
  border-top: 1px solid rgba(16,24,40,.10);
  background: rgba(255,255,255,.92);
}
.am-lightbox .counter{
  font-weight:800;
  color: rgba(18,32,38,.75);
  padding:8px 10px;
  border-radius: 999px;
  border:1px solid rgba(16,24,40,.10);
  background: rgba(16,24,40,.02);
  white-space:nowrap;
}
.am-lightbox .controls{
  display:flex;
  gap:8px;
  align-items:center;
}
.am-lightbox button{
  border:1px solid rgba(16,24,40,.12);
  background: rgba(255,255,255,.90);
  padding:10px 12px;
  border-radius: 12px;
  font-weight:800;
  cursor:pointer;
}
.am-lightbox button:hover{ transform: translateY(-1px); }
.am-lightbox button:active{ transform: translateY(0); }
.am-lightbox .close{
  position:absolute;
  top:10px;
  right:10px;
  border-radius: 999px;
  padding:8px 10px;
}
.am-lightbox .navSide{
  position:absolute;
  top:0; bottom:0;
  width:18%;
  min-width:80px;
  background: transparent;
  border:0;
  cursor:pointer;
}
.am-lightbox .navPrev{ left:0; }
.am-lightbox .navNext{ right:0; }
.am-lightbox .hint{
  position:absolute;
  bottom:58px;
  left:50%;
  transform:translateX(-50%);
  color: rgba(255,255,255,.75);
  font-size:12px;
  font-weight:700;
  background: rgba(0,0,0,.25);
  padding:6px 10px;
  border-radius: 999px;
  user-select:none;
}

@media (max-width: 520px){
  .am-lightbox .stage{ height: 58vh; }
  .am-lightbox .counter{ font-size:13px; }
  .am-lightbox button{ padding:10px; }
}
</style>

<section id="gallery" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>Click any photo to view larger (<?= $total ?> photos).</p>
    </div>

    <div class="am-gallery-grid">
      <?php foreach ($thumbs as $i => $url): ?>
        <a
          class="am-gallery-item"
          href="#"
          data-index="<?= $i ?>"
          data-full="<?= htmlspecialchars($url) ?>"
          aria-label="Open photo <?= $i + 1 ?>"
        >
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

<!-- Lightbox markup -->
<div class="am-lightbox" id="amLightbox" aria-hidden="true">
  <div class="backdrop" data-close="1"></div>

  <div class="panel" role="dialog" aria-modal="true" aria-label="Image viewer">
    <button class="close" type="button" data-close="1" aria-label="Close">✕</button>

    <div class="stage">
      <button class="navSide navPrev" type="button" data-prev="1" aria-label="Previous"></button>
      <img id="amLightboxImg" alt="Selected bouquet">
      <button class="navSide navNext" type="button" data-next="1" aria-label="Next"></button>

      <div class="hint">Use ← → keys • Esc to close</div>
    </div>

    <div class="bar">
      <div class="counter" id="amCounter">1 / <?= $total ?></div>
      <div class="controls">
        <button type="button" data-prev="1">◀ Prev</button>
        <button type="button" data-next="1">Next ▶</button>
      </div>
    </div>
  </div>
</div>

<script>
(() => {
  const IMAGES = <?php echo json_encode(array_values($images), JSON_UNESCAPED_SLASHES); ?>;

  const lb = document.getElementById('amLightbox');
  const imgEl = document.getElementById('amLightboxImg');
  const counterEl = document.getElementById('amCounter');

  let index = 0;

  function openAt(i){
    index = (i + IMAGES.length) % IMAGES.length;
    imgEl.src = IMAGES[index];
    counterEl.textContent = (index + 1) + " / " + IMAGES.length;

    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden', 'false');

    // prevent background scroll
    document.documentElement.style.overflow = 'hidden';
    document.body.style.overflow = 'hidden';
  }

  function close(){
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden', 'true');
    imgEl.removeAttribute('src');

    document.documentElement.style.overflow = '';
    document.body.style.overflow = '';
  }

  function next(){ openAt(index + 1); }
  function prev(){ openAt(index - 1); }

  // Thumbnail click -> open
  document.addEventListener('click', (e) => {
    const a = e.target.closest('.am-gallery-item');
    if (a){
      e.preventDefault();
      const i = parseInt(a.getAttribute('data-index') || '0', 10);
      openAt(i);
      return;
    }

    if (e.target.closest('[data-close="1"]')) close();
    if (e.target.closest('[data-next="1"]')) next();
    if (e.target.closest('[data-prev="1"]')) prev();
  });

  // Keyboard controls
  document.addEventListener('keydown', (e) => {
    if (!lb.classList.contains('is-open')) return;
    if (e.key === 'Escape') close();
    if (e.key === 'ArrowRight') next();
    if (e.key === 'ArrowLeft') prev();
  });

  // Basic safety: if image fails to load, still show counter and allow navigation
  imgEl.addEventListener('error', () => {
    // keep UI usable even if one link fails
  });
})();
</script>
