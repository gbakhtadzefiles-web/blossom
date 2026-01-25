<?php
/**
 * gallery.php — 4x3 thumbnails + Lightbox popup with captions + prev/next + counter + keyboard
 * FIXED: button clicks now work (no stopPropagation blocking).
 */

$items = [
  ["url"=>"https://i.imgur.com/LRNoCR9.jpeg", "title"=>"Bouquet 01 — Soft Pink Mix"],
  ["url"=>"https://i.imgur.com/tRpkGaP.jpeg", "title"=>"Bouquet 02 — Pastel Harmony"],
  ["url"=>"https://i.imgur.com/DZNhyp3.jpeg", "title"=>"Bouquet 03 — Sunny Accent"],
  ["url"=>"https://i.imgur.com/CkFXKui.jpeg", "title"=>"Bouquet 04 — Lavender Dream"],
  ["url"=>"https://i.imgur.com/gTHFrAs.jpeg", "title"=>"Bouquet 05 — Classic White"],
  ["url"=>"https://i.imgur.com/tsfz8xV.jpeg", "title"=>"Bouquet 06 — Modern Minimal"],
  ["url"=>"https://i.imgur.com/601UUzN.jpeg", "title"=>"Bouquet 07 — Garden Fresh"],
  ["url"=>"https://i.imgur.com/NMvHLQE.jpeg", "title"=>"Bouquet 08 — Blush & Green"],
  ["url"=>"https://i.imgur.com/uQMmdeK.jpeg", "title"=>"Bouquet 09 — Elegant Contrast"],
  ["url"=>"https://i.imgur.com/Pbieus0.jpeg", "title"=>"Bouquet 10 — Romantic Tone"],
  ["url"=>"https://i.imgur.com/3NOtctG.jpeg", "title"=>"Bouquet 11 — Bright Celebration"],
  ["url"=>"https://i.imgur.com/dPOvcZA.jpeg", "title"=>"Bouquet 12 — Signature Wrap"],
  ["url"=>"https://i.imgur.com/rnL55Re.jpeg", "title"=>"Bouquet 13 — Soft Spring"],
  ["url"=>"https://i.imgur.com/5VCqiDm.jpeg", "title"=>"Bouquet 14 — Pastel Charm"],
  ["url"=>"https://i.imgur.com/Rrv3Vuq.jpeg", "title"=>"Bouquet 15 — Clean & Crisp"],
  ["url"=>"https://i.imgur.com/hstOkEd.jpeg", "title"=>"Bouquet 16 — Pink Delight"],
  ["url"=>"https://i.imgur.com/dS6f7YS.jpeg", "title"=>"Bouquet 17 — Blooming Mood"],
  ["url"=>"https://i.imgur.com/5DghSgN.jpeg", "title"=>"Bouquet 18 — Fresh Morning"],
  ["url"=>"https://i.imgur.com/GRt4yYv.jpeg", "title"=>"Bouquet 19 — Color Pop"],
  ["url"=>"https://i.imgur.com/WlkCfZ9.jpeg", "title"=>"Bouquet 20 — Minimal Love"],
  ["url"=>"https://i.imgur.com/fueXVal.jpeg", "title"=>"Bouquet 21 — Soft Luxury"],
  ["url"=>"https://i.imgur.com/EgpW1vS.jpeg", "title"=>"Bouquet 22 — Elegant Bloom"],
  ["url"=>"https://i.imgur.com/sT5PHvI.jpeg", "title"=>"Bouquet 23 — Light & Airy"],
  ["url"=>"https://i.imgur.com/AJKJpLB.jpeg", "title"=>"Bouquet 24 — Weekend Gift"],
  ["url"=>"https://i.imgur.com/sYtBxnG.jpeg", "title"=>"Bouquet 25 — Amaryllis Special"],
];

$thumbs = array_slice($items, 0, 12);
$total  = count($items);
?>

<style>
/* Grid */
#gallery .am-gallery-grid{display:grid!important;grid-template-columns:repeat(4,minmax(0,1fr))!important;gap:12px!important;}
#gallery .am-gallery-card{border-radius:16px!important;overflow:hidden!important;border:1px solid rgba(16,24,40,.10)!important;background:rgba(16,24,40,.03)!important;box-shadow:0 10px 24px rgba(16,24,40,.05)!important;}
#gallery .am-gallery-item{display:block!important;width:100%!important;height:140px!important;overflow:hidden!important;cursor:zoom-in!important;}
#gallery .am-gallery-item img{width:100%!important;height:100%!important;object-fit:cover!important;object-position:center!important;display:block!important;transition:transform .25s ease!important;}
#gallery .am-gallery-item:hover img{transform:scale(1.05)!important;}
#gallery .am-caption{padding:10px 12px!important;background:rgba(255,255,255,.78)!important;border-top:1px solid rgba(16,24,40,.08)!important;font-weight:800!important;color:rgba(18,32,38,.80)!important;font-size:13px!important;white-space:nowrap!important;overflow:hidden!important;text-overflow:ellipsis!important;}

@media (max-width: 980px){#gallery .am-gallery-grid{grid-template-columns:repeat(3,minmax(0,1fr))!important;}#gallery .am-gallery-item{height:130px!important;}}
@media (max-width: 640px){#gallery .am-gallery-grid{grid-template-columns:repeat(2,minmax(0,1fr))!important;}#gallery .am-gallery-item{height:120px!important;}}

/* Lightbox */
.am-lightbox{position:fixed;inset:0;z-index:9999;display:none;}
.am-lightbox.is-open{display:block;}
.am-lightbox .backdrop{position:absolute;inset:0;background:rgba(10,18,28,.72);backdrop-filter:blur(6px);}
.am-lightbox .panel{position:relative;max-width:980px;width:calc(100% - 28px);margin:5vh auto;background:rgba(255,255,255,.92);border:1px solid rgba(255,255,255,.35);border-radius:18px;overflow:hidden;box-shadow:0 26px 90px rgba(0,0,0,.30);}
.am-lightbox .stage{background:#111;display:flex;align-items:center;justify-content:center;height:min(70vh,640px);position:relative;}
.am-lightbox .stage img{max-width:100%;max-height:100%;object-fit:contain;display:block;}
.am-lightbox .img-title{padding:12px 14px;background:rgba(255,255,255,.92);border-top:1px solid rgba(16,24,40,.10);font-weight:900;color:rgba(18,32,38,.85);}
.am-lightbox .bar{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:12px;border-top:1px solid rgba(16,24,40,.10);background:rgba(255,255,255,.92);}
.am-lightbox .counter{font-weight:800;color:rgba(18,32,38,.75);padding:8px 10px;border-radius:999px;border:1px solid rgba(16,24,40,.10);background:rgba(16,24,40,.02);}
.am-lightbox .controls{display:flex;gap:8px;align-items:center;}
.am-lightbox button{border:1px solid rgba(16,24,40,.12);background:rgba(255,255,255,.90);padding:10px 12px;border-radius:12px;font-weight:800;cursor:pointer;}
.am-lightbox .close{position:absolute;top:10px;right:10px;border-radius:999px;padding:8px 10px;z-index:6;}
.am-lightbox .navSide{position:absolute;top:0;bottom:0;width:18%;min-width:80px;background:transparent;border:0;cursor:pointer;z-index:5;}
.am-lightbox .navPrev{left:0;} .am-lightbox .navNext{right:0;}
.am-lightbox .hint{position:absolute;bottom:10px;left:50%;transform:translateX(-50%);color:rgba(255,255,255,.75);font-size:12px;font-weight:700;background:rgba(0,0,0,.25);padding:6px 10px;border-radius:999px;user-select:none;z-index:4;}
</style>

<section id="gallery" class="section alt">
  <div class="container">
    <div class="section-head">
      <h2>Picture Gallery</h2>
      <p>Click any photo to view larger (<?= $total ?> photos).</p>
    </div>

    <div class="am-gallery-grid">
      <?php foreach ($thumbs as $i => $it): ?>
        <div class="am-gallery-card">
          <a class="am-gallery-item" href="#" data-index="<?= $i ?>">
            <img src="<?= htmlspecialchars($it['url']) ?>" alt="<?= htmlspecialchars($it['title']) ?>" loading="lazy" decoding="async" referrerpolicy="no-referrer">
          </a>
          <div class="am-caption"><?= htmlspecialchars($it['title']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="am-lightbox" id="amLightbox" aria-hidden="true" tabindex="-1">
  <div class="backdrop" data-close="1"></div>

  <div class="panel" role="dialog" aria-modal="true">
    <button class="close" type="button" data-close="1" aria-label="Close">✕</button>

    <div class="stage">
      <button class="navSide navPrev" type="button" data-prev="1" aria-label="Previous"></button>
      <img id="amLightboxImg" alt="">
      <button class="navSide navNext" type="button" data-next="1" aria-label="Next"></button>
      <div class="hint">Use ← → keys • Esc to close</div>
    </div>

    <div class="img-title" id="amTitle"></div>

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
  const ITEMS = <?php echo json_encode(array_values($items), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;

  const lb = document.getElementById('amLightbox');
  const imgEl = document.getElementById('amLightboxImg');
  const titleEl = document.getElementById('amTitle');
  const counterEl = document.getElementById('amCounter');

  let index = 0;

  function render(){
    const item = ITEMS[index];
    imgEl.src = item.url;
    imgEl.alt = item.title;
    titleEl.textContent = item.title;
    counterEl.textContent = (index + 1) + " / " + ITEMS.length;
  }

  function openAt(i){
    index = (i + ITEMS.length) % ITEMS.length;
    render();
    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden','false');
    document.documentElement.style.overflow='hidden';
    document.body.style.overflow='hidden';
    lb.focus();
  }

  function close(){
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden','true');
    imgEl.removeAttribute('src');
    document.documentElement.style.overflow='';
    document.body.style.overflow='';
  }

  function next(){ index = (index + 1) % ITEMS.length; render(); }
  function prev(){ index = (index - 1 + ITEMS.length) % ITEMS.length; render(); }

  // open thumbnail
  document.addEventListener('click', (e) => {
    const thumb = e.target.closest('#gallery .am-gallery-item');
    if (!thumb) return;
    e.preventDefault();
    openAt(parseInt(thumb.getAttribute('data-index') || '0', 10));
  });

  // lightbox click controls
  lb.addEventListener('click', (e) => {
    if (!lb.classList.contains('is-open')) return;

    if (e.target.classList.contains('backdrop') || e.target.closest('[data-close="1"]')) { close(); return; }
    if (e.target.closest('[data-next="1"]')) { next(); return; }
    if (e.target.closest('[data-prev="1"]')) { prev(); return; }
  });

  // keyboard controls
  window.addEventListener('keydown', (e) => {
    if (!lb.classList.contains('is-open')) return;
    if (e.key === 'Escape') { e.preventDefault(); close(); }
    if (e.key === 'ArrowRight') { e.preventDefault(); next(); }
    if (e.key === 'ArrowLeft') { e.preventDefault(); prev(); }
  }, true);
})();
</script>
