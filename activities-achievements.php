<?php include("includes/html_a.php"); include("includes/header.php"); ?>

<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --forest:       #1a2e1a;
    --forest-mid:   #2d5a27;
    --forest-light: #4a8c42;
    --gold:         #c8973a;
    --gold-light:   #e8b96a;
    --terracotta:   #c0522a;
    --terra-light:  #e07048;
    --cream:        #faf7f2;
    --cream-dark:   #f0ebe0;
    --warm-white:   #fdfaf6;
    --teal:         #2a7a7a;
    --ink:          #1a1a1a;
    --ink-faint:    #666;
    --radius-xl:    1.25rem;
    --radius-lg:    0.875rem;
    --section-pad:  5rem;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--ink);
    line-height: 1.7;
    overflow-x: hidden;
  }

  /* ── HERO ─────────────────────────────────────── */
  .page-hero {
    position: relative;
    min-height: 54vh;
    display: flex; align-items: flex-end;
    padding-top: 72px;
    overflow: hidden;
  }
  .page-hero-bg {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, #0e1f0e 0%, #1e3a1e 40%, #2d5a27 75%, #c8973a22 100%);
  }
  .page-hero-bg::before {
    content: '';
    position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c8973a' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
  .hero-ring {
    position: absolute; right: -8rem; top: 50%;
    transform: translateY(-50%);
    width: 55vw; max-width: 700px; aspect-ratio: 1;
    border-radius: 50%;
    border: 1px solid rgba(200,151,58,0.12);
    pointer-events: none;
  }
  .hero-ring::before {
    content: '';
    position: absolute; inset: 3rem;
    border-radius: 50%;
    border: 1px solid rgba(200,151,58,0.08);
  }
  .hero-ring::after {
    content: '';
    position: absolute; inset: 6rem;
    border-radius: 50%;
    border: 1px solid rgba(200,151,58,0.06);
  }
  .hero-content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    width: 100%; padding: 4rem 2rem 4.5rem;
  }
  .hero-breadcrumb {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.78rem; letter-spacing: 0.08em; text-transform: uppercase;
    color: rgba(250,247,242,0.45);
    margin-bottom: 1.5rem;
  }
  .hero-breadcrumb a { color: inherit; text-decoration: none; }
  .hero-breadcrumb a:hover { color: var(--gold-light); }
  .hero-breadcrumb span { color: var(--gold-light); }
  .hero-eyebrow { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; }
  .eyebrow-line { width: 2.5rem; height: 2px; background: var(--gold); }
  .eyebrow-text { font-size: 0.78rem; font-weight: 500; letter-spacing: 0.15em; text-transform: uppercase; color: var(--gold); }
  .hero-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(3rem, 7vw, 5.5rem);
    font-weight: 700; line-height: 1.05;
    color: var(--cream); margin-bottom: 1.25rem;
  }
  .hero-title em { color: var(--gold-light); font-style: italic; }
  .hero-desc { font-size: 1.1rem; color: rgba(250,247,242,0.65); max-width: 560px; margin-bottom: 2.5rem; }
  .hero-stats { display: flex; gap: 2.5rem; flex-wrap: wrap; }
  .h-stat { text-align: left; }
  .h-stat-num { font-family: 'Cormorant Garamond', serif; font-size: 2.2rem; font-weight: 700; color: var(--gold-light); line-height: 1; }
  .h-stat-lbl { font-size: 0.78rem; color: rgba(250,247,242,0.5); text-transform: uppercase; letter-spacing: 0.06em; margin-top: 0.2rem; }

  /* ── FILTER TABS ─────────────────────────────── */
  .filter-bar {
    background: var(--forest);
    position: sticky; top: 72px; z-index: 800;
    border-bottom: 1px solid rgba(200,151,58,0.12);
  }
  .filter-inner {
    max-width: 1200px; margin: 0 auto;
    padding: 0 2rem;
    display: flex; gap: 0; overflow-x: auto;
    scrollbar-width: none;
  }
  .filter-inner::-webkit-scrollbar { display: none; }
  .filter-tab {
    padding: 1.1rem 1.4rem;
    font-size: 0.85rem; font-weight: 500;
    color: rgba(250,247,242,0.5);
    cursor: pointer; white-space: nowrap;
    border-bottom: 2px solid transparent;
    transition: color 0.2s, border-color 0.2s;
    background: none; border-top: none; border-left: none; border-right: none;
    font-family: 'DM Sans', sans-serif;
  }
  .filter-tab:hover { color: var(--cream); }
  .filter-tab.active { color: var(--gold-light); border-bottom-color: var(--gold); }

  /* ── SECTION WRAPPER ─────────────────────────── */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }
  .section-pad { padding: var(--section-pad) 0; }

  /* ── SECTION LABELS ──────────────────────────── */
  .section-label {
    display: inline-flex; align-items: center; gap: 0.6rem;
    font-size: 0.78rem; font-weight: 600;
    letter-spacing: 0.12em; text-transform: uppercase;
    color: var(--terracotta); margin-bottom: 0.75rem;
  }
  .section-label::before { content: ''; width: 1.5rem; height: 2px; background: currentColor; flex-shrink: 0; }
  .section-title { color: var(--terracotta); }

  /* ── ACADEMICS ───────────────────────────────── */
  #academics { background: var(--warm-white); }
  .result-hero { display: grid; grid-template-columns: 1.2fr 1fr; gap: 3rem; align-items: center; margin-bottom: 3rem; }
  .result-visual { border-radius: var(--radius-xl); overflow: hidden; position: relative; aspect-ratio: 4/3; }
  .result-visual img { width: 100%; height: 100%; object-fit: cover; }
  .result-visual-overlay { position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,46,26,0.6) 0%, transparent 60%); display: flex; align-items: flex-end; padding: 1.75rem; }
  .result-badge-big { background: var(--gold); color: var(--forest); font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 800; line-height: 1; padding: 1.25rem 1.5rem; border-radius: 1rem; display: flex; flex-direction: column; align-items: flex-start; }
  .result-badge-big small { font-size: 0.8rem; font-family: 'DM Sans', sans-serif; font-weight: 500; margin-top: 0.25rem; }
  .result-info h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.8rem); font-weight: 700; line-height: 1.2; margin-bottom: 1rem; }
  .result-info p { color: var(--ink-faint); margin-bottom: 1.5rem; }
  .grade-bars { display: flex; flex-direction: column; gap: 0.75rem; }
  .grade-bar-row { display: flex; align-items: center; gap: 1rem; }
  .grade-label { font-size: 0.8rem; font-weight: 600; width: 2.5rem; color: var(--forest-mid); }
  .grade-track { flex: 1; height: 8px; background: var(--cream-dark); border-radius: 999px; overflow: hidden; }
  .grade-fill { height: 100%; border-radius: 999px; transition: width 1.2s cubic-bezier(.23,1,.32,1); }
  .grade-pct { font-size: 0.78rem; color: var(--ink-faint); width: 3rem; text-align: right; }
  .award-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 2.5rem; }
  .award-card { background: var(--cream-dark); border-radius: var(--radius-lg); padding: 1.5rem; border-left: 3px solid var(--gold); transition: transform 0.25s, box-shadow 0.25s; }
  .award-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
  .award-icon { font-size: 1.75rem; margin-bottom: 0.75rem; }
  .award-card h4 { font-size: 0.92rem; font-weight: 600; margin-bottom: 0.35rem; }
  .award-card p { font-size: 0.8rem; color: var(--ink-faint); }

  /* ── SPORTS ──────────────────────────────────── */
  #sports { background: var(--forest); }
  .sports-header { margin-bottom: 3.5rem; }
  .sports-header h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2.2rem, 4vw, 3.5rem); font-weight: 700; color: var(--cream); margin-bottom: 0.75rem; }
  .sports-header p { color: rgba(250,247,242,0.55); max-width: 540px; }
  .sports-grid { display: grid; grid-template-columns: repeat(12, 1fr); grid-template-rows: 280px 220px; gap: 0.75rem; }
  .sport-tile { position: relative; border-radius: var(--radius-xl); overflow: hidden; cursor: pointer; }
  .sport-tile img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
  .sport-tile:hover img { transform: scale(1.04); }
  .sport-tile-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(15,30,15,0.88) 0%, transparent 55%); transition: opacity 0.3s; }
  .sport-tile:hover .sport-tile-overlay { opacity: 0.95; }
  .sport-tile-body { position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; }
  .sport-tile-body .badge { display: inline-block; padding: 0.25rem 0.7rem; border-radius: 999px; font-size: 0.72rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.5rem; }
  .badge-gold { background: var(--gold); color: var(--forest); }
  .badge-terra { background: var(--terracotta); color: #fff; }
  .badge-teal { background: var(--teal); color: #fff; }
  .badge-forest { background: var(--forest-light); color: #fff; }
  .badge-blue { background: #2563eb; color: #fff; }
  .sport-tile-body h3 { color: var(--cream); font-size: 1.15rem; line-height: 1.3; }
  .sport-tile-body h4 { color: var(--cream); font-size: 0.95rem; line-height: 1.3; }
  .sport-tile-body p { color: rgba(250,247,242,0.65); font-size: 0.82rem; margin-top: 0.35rem; }
  .st-1 { grid-column: span 5; } .st-2 { grid-column: span 4; } .st-3 { grid-column: span 3; }
  .st-4 { grid-column: span 4; } .st-5 { grid-column: span 4; } .st-6 { grid-column: span 4; }
  .trophies-strip { display: flex; gap: 1.25rem; flex-wrap: wrap; margin-top: 3rem; }
  .trophy-pill { display: flex; align-items: center; gap: 0.6rem; background: rgba(250,247,242,0.06); border: 1px solid rgba(200,151,58,0.2); border-radius: 999px; padding: 0.6rem 1.2rem; color: var(--cream); font-size: 0.85rem; }
  .trophy-pill .icon { font-size: 1.1rem; }

  /* ── ARTS ────────────────────────────────────── */
  #arts { background: var(--cream-dark); }
  .arts-layout { display: grid; grid-template-columns: 1fr 1.5fr; gap: 4rem; align-items: start; }
  .arts-text h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 700; margin-bottom: 1rem; }
  .arts-text p { color: var(--ink-faint); margin-bottom: 2rem; }
  .arts-programmes { display: flex; flex-direction: column; gap: 1rem; }
  .arts-prog-item { display: flex; align-items: flex-start; gap: 1rem; padding: 1.25rem; background: var(--warm-white); border-radius: var(--radius-lg); transition: transform 0.25s; }
  .arts-prog-item:hover { transform: translateX(6px); }
  .prog-icon { font-size: 1.6rem; flex-shrink: 0; margin-top: 0.1rem; }
  .prog-info h5 { font-size: 0.95rem; font-weight: 600; margin-bottom: 0.25rem; }
  .prog-info p { font-size: 0.82rem; color: var(--ink-faint); }
  .arts-gallery { display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 240px 180px; gap: 0.75rem; }
  .arts-img { border-radius: var(--radius-lg); overflow: hidden; position: relative; }
  .arts-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
  .arts-img:hover img { transform: scale(1.04); }
  .arts-img-label { position: absolute; bottom: 0.75rem; left: 0.75rem; background: rgba(26,46,26,0.8); color: var(--cream); font-size: 0.75rem; font-weight: 500; padding: 0.3rem 0.75rem; border-radius: 999px; backdrop-filter: blur(6px); }
  .arts-img-wide { grid-column: span 2; }

  /* ── INNOVATION ──────────────────────────────── */
  #innovation { background: var(--forest); }
  .inno-header { text-align: center; margin-bottom: 3.5rem; }
  .inno-header h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2.2rem, 4vw, 3.5rem); font-weight: 700; color: var(--cream); margin-bottom: 0.75rem; }
  .inno-header p { color: rgba(250,247,242,0.55); max-width: 540px; margin: 0 auto; }
  .inno-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 3rem; }
  .inno-card { background: rgba(250,247,242,0.04); border: 1px solid rgba(200,151,58,0.15); border-radius: var(--radius-xl); padding: 2rem; transition: background 0.3s, border-color 0.3s, transform 0.3s; }
  .inno-card:hover { background: rgba(250,247,242,0.08); border-color: rgba(200,151,58,0.35); transform: translateY(-4px); }
  .inno-number { font-family: 'Cormorant Garamond', serif; font-size: 3.5rem; font-weight: 700; color: var(--gold); line-height: 1; margin-bottom: 0.75rem; }
  .inno-card h4 { color: var(--cream); font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; }
  .inno-card p { color: rgba(250,247,242,0.5); font-size: 0.85rem; }
  .inno-feature { display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; align-items: center; background: rgba(250,247,242,0.04); border: 1px solid rgba(200,151,58,0.12); border-radius: var(--radius-xl); overflow: hidden; }
  .inno-feature-img { aspect-ratio: 4/3; }
  .inno-feature-img img { width: 100%; height: 100%; object-fit: cover; }
  .inno-feature-text { padding: 2.5rem 2.5rem 2.5rem 0; }
  .inno-feature-text h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.9rem; font-weight: 700; color: var(--cream); margin-bottom: 1rem; }
  .inno-feature-text p { color: rgba(250,247,242,0.6); font-size: 0.9rem; margin-bottom: 1.25rem; }
  .inno-tags { display: flex; gap: 0.5rem; flex-wrap: wrap; }
  .inno-tag { background: rgba(200,151,58,0.15); color: var(--gold-light); font-size: 0.75rem; font-weight: 500; padding: 0.3rem 0.75rem; border-radius: 999px; }

  /* ── COMMUNITY ───────────────────────────────── */
  #community { background: var(--warm-white); }
  .community-layout { display: grid; grid-template-columns: 1.4fr 1fr; gap: 4rem; align-items: center; }
  .community-img-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
  .community-img { border-radius: var(--radius-lg); overflow: hidden; }
  .community-img img { width: 100%; height: 220px; object-fit: cover; display: block; transition: transform 0.4s; }
  .community-img:hover img { transform: scale(1.04); }
  .community-img-tall { grid-row: span 2; }
  .community-img-tall img { height: 100%; }
  .community-text h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 700; margin-bottom: 1rem; }
  .community-text p { color: var(--ink-faint); margin-bottom: 1.75rem; }
  .impact-items { display: flex; flex-direction: column; gap: 1rem; }
  .impact-item { display: flex; gap: 1rem; align-items: flex-start; padding: 1rem 1.25rem; border-left: 3px solid var(--gold); background: var(--cream-dark); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; }
  .impact-item .icon { font-size: 1.4rem; flex-shrink: 0; }
  .impact-item h5 { font-size: 0.9rem; font-weight: 600; margin-bottom: 0.2rem; }
  .impact-item p { font-size: 0.8rem; color: var(--ink-faint); }

  /* ── SCHOLARSHIPS ────────────────────────────── */
  #scholarships { background: var(--cream-dark); }
  .schol-intro { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start; margin-bottom: 3.5rem; }
  .schol-intro h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 700; }
  .schol-intro p { color: var(--ink-faint); }
  .schol-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; }
  .schol-card { border-radius: var(--radius-xl); overflow: hidden; position: relative; background: var(--forest); padding: 2rem; transition: transform 0.3s; }
  .schol-card:hover { transform: translateY(-5px); }
  .schol-card-accent { position: absolute; top: 0; left: 0; right: 0; height: 4px; }
  .schol-card-num { font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 700; color: var(--gold); margin-bottom: 0.5rem; line-height: 1; }
  .schol-card h4 { color: var(--cream); font-size: 0.95rem; font-weight: 600; margin-bottom: 0.5rem; }
  .schol-card p { color: rgba(250,247,242,0.5); font-size: 0.82rem; }
  .uni-logos { display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center; margin-top: 3rem; padding: 2rem; background: var(--warm-white); border-radius: var(--radius-xl); }
  .uni-logos-label { font-size: 0.78rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: var(--ink-faint); margin-right: 0.5rem; white-space: nowrap; }
  .uni-tag { background: var(--cream-dark); color: var(--forest-mid); font-size: 0.82rem; font-weight: 600; padding: 0.4rem 1rem; border-radius: 999px; }

  /* ── CTA ─────────────────────────────────────── */
  .page-cta { background: var(--forest); padding: var(--section-pad) 0; position: relative; overflow: hidden; text-align: center; }
  .page-cta::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse at center top, rgba(200,151,58,0.15) 0%, transparent 60%); }
  .page-cta-inner { position: relative; z-index: 1; max-width: 620px; margin: 0 auto; padding: 0 2rem; }
  .page-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 700; color: var(--cream); margin-bottom: 1rem; }
  .page-cta h2 em { color: var(--gold-light); font-style: italic; }
  .page-cta p { color: rgba(250,247,242,0.6); margin-bottom: 2.5rem; }
  .cta-btns { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }

  /* ── BUTTONS ─────────────────────────────────── */
  .btn { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.85rem 2rem; border-radius: 999px; font-size: 0.9rem; font-weight: 600; text-decoration: none; transition: transform 0.2s, box-shadow 0.2s; cursor: pointer; border: none; }
  .btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.15); }
  .btn-primary { background: var(--gold); color: var(--forest); }
  .btn-primary:hover { background: var(--gold-light); }
  .btn-outline-light { background: transparent; border: 1.5px solid rgba(250,247,242,0.35); color: var(--cream); }
  .btn-outline-light:hover { border-color: var(--gold-light); color: var(--gold-light); }

  /* ── ANIMATIONS ──────────────────────────────── */
  .anim { opacity: 0; transform: translateY(24px); transition: opacity 0.7s, transform 0.7s; }
  .anim.visible { opacity: 1; transform: none; }
  .anim-left { opacity: 0; transform: translateX(-30px); transition: opacity 0.7s, transform 0.7s; }
  .anim-left.visible { opacity: 1; transform: none; }
  .anim-right { opacity: 0; transform: translateX(30px); transition: opacity 0.7s, transform 0.7s; }
  .anim-right.visible { opacity: 1; transform: none; }

  /* ── RESPONSIVE ──────────────────────────────── */
  @media (max-width: 900px) {
    .result-hero, .arts-layout, .community-layout, .schol-intro { grid-template-columns: 1fr; gap: 2rem; }
    .sports-grid { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
    .st-1,.st-2,.st-3,.st-4,.st-5,.st-6 { grid-column: span 1; }
    .inno-grid, .schol-cards { grid-template-columns: 1fr 1fr; }
    .award-grid { grid-template-columns: 1fr 1fr; }
    .inno-feature { grid-template-columns: 1fr; }
    .inno-feature-text { padding: 2rem; }
  }
  @media (max-width: 600px) {
    :root { --section-pad: 3.5rem; }
    .inno-grid, .schol-cards, .award-grid { grid-template-columns: 1fr; }
    .sports-grid { grid-template-columns: 1fr; }
    .arts-gallery { grid-template-columns: 1fr; }
    .arts-img-wide { grid-column: span 1; }
    .community-img-tall { grid-row: span 1; }
    .community-img img, .community-img-tall img { height: 200px; }
  }
</style>

<!-- ═══ HERO ═══ -->
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="hero-ring"></div>
  <div class="hero-content">
    <div class="hero-breadcrumb">
      <a href="index.php">Home</a> ›
      <span>Activities &amp; Achievements</span>
    </div>
    <div class="hero-eyebrow">
      <span class="eyebrow-line"></span>
      <span class="eyebrow-text">Student Life</span>
    </div>
    <h1 class="hero-title">Activities &amp;<br /><em>Achievements</em></h1>
    <p class="hero-desc">From championship trophies to scholarship halls — our students pursue excellence in every arena, every single day.</p>
    <div class="hero-stats">
      <div class="h-stat">
        <div class="h-stat-num">96%</div>
        <div class="h-stat-lbl">A*–B at IGCSE</div>
      </div>
      <div class="h-stat">
        <div class="h-stat-num">35+</div>
        <div class="h-stat-lbl">Co-curricular Clubs</div>
      </div>
      <div class="h-stat">
        <div class="h-stat-num">15</div>
        <div class="h-stat-lbl">Int'l Scholarships</div>
      </div>
      <div class="h-stat">
        <div class="h-stat-num">KSh 2M</div>
        <div class="h-stat-lbl">Charity Impact 2025</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FILTER BAR ═══ -->
<div class="filter-bar">
  <div class="filter-inner">
    <button class="filter-tab active" data-target="academics">Academic</button>
    <button class="filter-tab" data-target="sports"><i class="fa-solid fa-futbol" aria-hidden="true"></i> Sports</button>
    <button class="filter-tab" data-target="arts"><i class="fa-solid fa-masks-theater" aria-hidden="true"></i> Arts</button>
    <button class="filter-tab" data-target="innovation"><i class="fa-solid fa-robot" aria-hidden="true"></i> Innovation</button>
    <button class="filter-tab" data-target="community"><i class="fa-solid fa-heart" aria-hidden="true"></i> Community</button>
    <button class="filter-tab" data-target="scholarships"><i class="fa-solid fa-globe" aria-hidden="true"></i> Scholarships</button>
  </div>
</div>


<!-- ═══ ACADEMIC EXCELLENCE ═══ -->
<section class="section-pad" id="academics">
  <div class="container">
    <span class="section-label anim">Academic Excellence</span>

    <div class="result-hero">
      <div class="result-visual anim-left">
        <picture><source srcset="images/optimized/campus-building.avif" type="image/avif"/><img src="images/optimized/campus-building.jpg" alt="Students studying" loading="lazy"/></picture>
        <div class="result-visual-overlay">
          <div class="result-badge-big">
            96%
            <small>A*–B Grades · IGCSE 2025</small>
          </div>
        </div>
      </div>
      <div class="result-info anim-right">
        <h2>Class of 2025 Sets a <span class="section-title">New Record</span></h2>
        <p>Our Class of 2025 outperformed international Cambridge benchmarks in every major subject, with 96% of students earning A*–B grades — the highest in the school's 25-year history.</p>

        <div class="grade-bars">
          <div class="grade-bar-row">
            <span class="grade-label">A*</span>
            <div class="grade-track"><div class="grade-fill" style="width:62%;background:var(--gold);"></div></div>
            <span class="grade-pct">62%</span>
          </div>
          <div class="grade-bar-row">
            <span class="grade-label">A</span>
            <div class="grade-track"><div class="grade-fill" style="width:22%;background:var(--terracotta);"></div></div>
            <span class="grade-pct">22%</span>
          </div>
          <div class="grade-bar-row">
            <span class="grade-label">B</span>
            <div class="grade-track"><div class="grade-fill" style="width:12%;background:var(--teal);"></div></div>
            <span class="grade-pct">12%</span>
          </div>
          <div class="grade-bar-row">
            <span class="grade-label">C</span>
            <div class="grade-track"><div class="grade-fill" style="width:4%;background:var(--forest-light);"></div></div>
            <span class="grade-pct">4%</span>
          </div>
        </div>
      </div>
    </div>

    <div class="award-grid anim">
      <div class="award-card">
        <div class="award-icon"><i class="fa-solid fa-ranking-star" aria-hidden="true"></i></div>
        <h4>Cambridge Top in Kenya</h4>
        <p>4 students achieved the highest marks in Kenya for Mathematics, Sciences, and Humanities in 2025.</p>
      </div>
      <div class="award-card">
        <div class="award-icon"><i class="fa-solid fa-brain" aria-hidden="true"></i></div>
        <h4>National Debate Champions</h4>
        <p>Our Senior debating team won the Kenya National Schools Debate Championship for the third consecutive year.</p>
      </div>
      <div class="award-card">
        <div class="award-icon"><i class="fa-solid fa-square-root-variable" aria-hidden="true"></i></div>
        <h4>East Africa Math Olympiad</h4>
        <p>Three students placed in the Top 10 at the 2025 East Africa Mathematics Olympiad held in Kampala.</p>
      </div>
      <div class="award-card">
        <div class="award-icon"><i class="fa-solid fa-flask" aria-hidden="true"></i></div>
        <h4>Young Scientists Award</h4>
        <p>Our Junior School science team won Gold at the 2025 Kenya Young Scientists and Innovators Award.</p>
      </div>
      <div class="award-card">
        <div class="award-icon"><i class="fa-solid fa-star" aria-hidden="true"></i></div>
        <h4>IB Score Achievement</h4>
        <p>Two students achieved perfect IB scores of 45/45, placing them among fewer than 300 students worldwide.</p>
      </div>
      <div class="award-card">
        <div class="award-icon"><i class="fa-solid fa-pen-fancy" aria-hidden="true"></i></div>
        <h4>Commonwealth Essay Prize</h4>
        <p>Nova Heights students won 3 Commonwealth Essay Competition prizes across different age categories.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══ SPORTS ═══ -->
<section class="section-pad" id="sports">
  <div class="container">
    <div class="sports-header anim">
      <span class="section-label" style="color:var(--gold-light);">
        <span style="background:var(--gold-light);width:24px;height:2px;display:inline-block;margin-right:0.5rem;"></span>
        Sports & Athletics
      </span>
      <h2 class="sports-header">Champions on Every <em style="color:var(--gold-light);font-style:italic;">Field</em></h2>
      <p>Our students compete at regional, national, and international levels — bringing home trophies and forging unbreakable team spirit.</p>
    </div>

    <div class="sports-grid anim">
      <div class="sport-tile st-1">
        <picture><source srcset="images/sports3.avif" type="image/avif"/><img src="images/sports3.avif" alt="Football" loading="lazy"/></picture>
        <div class="sport-tile-overlay"></div>
        <div class="sport-tile-body">
          <span class="badge badge-gold">Champions</span>
          <h3>East Africa Schools Football Championship 2025</h3>
          <p>Undefeated across 12 matches · Regional title secured</p>
        </div>
      </div>
      <div class="sport-tile st-2">
        <picture><source srcset="images/optimized/sports-track.avif" type="image/avif"/><img src="images/optimized/sports-track.jpg" alt="Athletics" loading="lazy"/></picture>
        <div class="sport-tile-overlay"></div>
        <div class="sport-tile-body">
          <span class="badge badge-terra">Athletics</span>
          <h4>National Schools Athletics — 8 Gold Medals</h4>
        </div>
      </div>
      <div class="sport-tile st-3">
        <picture><source srcset="images/sports2.avif" type="image/avif"/><img src="images/sports2.avif" alt="Basketball" loading="lazy"/></picture>
        <div class="sport-tile-overlay"></div>
        <div class="sport-tile-body">
          <span class="badge badge-teal">Basketball</span>
          <h4>Nairobi Invitational Champions</h4>
        </div>
      </div>
      <div class="sport-tile st-4">
        <picture><source srcset="images/sports6.avif" type="image/avif"/><img src="images/sports6.avif" alt="Swimming" loading="lazy"/></picture>
        <div class="sport-tile-overlay"></div>
        <div class="sport-tile-body">
          <span class="badge badge-blue">Swimming</span>
          <h4>Kenya Schools Swimming — 5 National Records</h4>
        </div>
      </div>
      <div class="sport-tile st-5">
        <img src="images/sports5.avif" alt="Netball" loading="lazy"/>
        <div class="sport-tile-overlay"></div>
        <div class="sport-tile-body">
          <span class="badge badge-terra">Netball</span>
          <h4>Girls' Netball — Nairobi County Champions</h4>
        </div>
      </div>
      <div class="sport-tile st-6">
        <picture><source srcset="images/sports4.avif" type="image/avif"/><img src="images/sports4.avif" alt="Tennis" loading="lazy"/></picture>
        <div class="sport-tile-overlay"></div>
        <div class="sport-tile-body">
          <span class="badge badge-gold">Tennis</span>
          <h4>East Africa Junior Tennis Runners-Up</h4>
        </div>
      </div>
    </div>

    <div class="trophies-strip anim">
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-trophy" aria-hidden="true"></i></span>Football</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-medal" aria-hidden="true"></i></span>Athletics</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-basketball" aria-hidden="true"></i></span>Basketball</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-person-swimming" aria-hidden="true"></i></span>Swimming</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-table-tennis-paddle-ball" aria-hidden="true"></i></span>Tennis</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-volleyball" aria-hidden="true"></i></span>Volleyball</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-circle-dot" aria-hidden="true"></i></span>Badminton</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-shield" aria-hidden="true"></i></span>Fencing</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-hockey-puck" aria-hidden="true"></i></span>Hockey</div>
      <div class="trophy-pill"><span class="icon"><i class="fa-solid fa-hand-fist" aria-hidden="true"></i></span>Taekwondo</div>
    </div>
  </div>
</section>


<!-- ═══ ARTS ═══ -->
<section class="section-pad" id="arts">
  <div class="container">
    <span class="section-label anim">Performing &amp; Creative Arts</span>
    <div class="arts-layout">
      <div class="arts-text anim-left">
        <h2>Where <span class="section-title">Creativity</span> Takes Centre Stage</h2>
        <p>From a world-class Performing Arts Centre to internationally exhibited student artwork, Nova Heights nurtures every form of artistic expression. Our students have graced stages across East Africa and beyond.</p>
        <div class="arts-programmes">
          <div class="arts-prog-item">
            <span class="prog-icon"><i class="fa-solid fa-masks-theater" aria-hidden="true"></i></span>
            <div class="prog-info">
              <h5>Drama &amp; Theatre</h5>
              <p>Annual productions performed at the Kenya National Theatre. Two students shortlisted for the Edinburgh Youth Theatre Festival 2025.</p>
            </div>
          </div>
          <div class="arts-prog-item">
            <span class="prog-icon"><i class="fa-solid fa-music" aria-hidden="true"></i></span>
            <div class="prog-info">
              <h5>Music Programme</h5>
              <p>65-piece student orchestra, jazz band, Afro-fusion ensemble. Five Grade 8 ABRSM distinctions achieved in 2025.</p>
            </div>
          </div>
          <div class="arts-prog-item">
            <span class="prog-icon"><i class="fa-solid fa-palette" aria-hidden="true"></i></span>
            <div class="prog-info">
              <h5>Visual Arts &amp; Design</h5>
              <p>Student artworks selected for the Nairobi Contemporary Art Fair 2025. IB Art programme with 100% distinction rate.</p>
            </div>
          </div>
          <div class="arts-prog-item">
            <span class="prog-icon"><i class="fa-solid fa-person-dancing" aria-hidden="true"></i></span>
            <div class="prog-info">
              <h5>Dance &amp; Movement</h5>
              <p>Contemporary, ballet, and traditional African dance. National Schools Dance Festival Champions 2024 &amp; 2025.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="arts-gallery anim-right">
        <div class="arts-img arts-img-wide">
          <picture><source srcset="images/optimized/art-painting.avif" type="image/avif"/><img src="images/optimized/art-painting.jpg" alt="Arts programme" loading="lazy"/></picture>
          <div class="arts-img-label">Annual Arts Showcase</div>
        </div>
        <div class="arts-img">
          <picture><source srcset="images/optimized/drama-stage.avif" type="image/avif"/><img src="images/optimized/drama-stage.jpg" alt="Music performance" loading="lazy"/></picture>
          <div class="arts-img-label">Symphony Orchestra</div>
        </div>
        <div class="arts-img">
          <picture><source srcset="images/optimized/science-experiment.avif" type="image/avif"/><img src="images/optimized/science-experiment.jpg" alt="Drama performance" loading="lazy"/></picture>
          <div class="arts-img-label">Drama Production</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ INNOVATION ═══ -->
<section class="section-pad" id="innovation">
  <div class="container">
    <div class="inno-header anim">
      <span class="section-label" style="color:var(--gold-light);justify-content:center;">
        <span style="background:var(--gold-light);width:24px;height:2px;display:inline-block;margin-right:0.5rem;"></span>
        STEM &amp; Innovation
      </span>
      <h2>Building <em style="color:var(--gold-light);font-style:italic;">Tomorrow's</em> Problem-Solvers</h2>
      <p>Our STEM ecosystem spans robotics, AI, coding, and environmental research — giving students the skills to lead in a rapidly changing world.</p>
    </div>

    <div class="inno-grid anim">
      <div class="inno-card">
        <div class="inno-number">3rd</div>
        <h4>Africa Robotics Championship</h4>
        <p>Our Junior Robotics team placed 3rd at the 2025 African Robotics Championship held in Cape Town.</p>
      </div>
      <div class="inno-card">
        <div class="inno-number">12</div>
        <h4>Student-Built Apps</h4>
        <p>Twelve student-developed applications have been published on app stores in the last two academic years.</p>
      </div>
      <div class="inno-card">
        <div class="inno-number">₁st</div>
        <h4>Kenya Science Fair</h4>
        <p>First place at the Kenya National Science Fair for a student-designed water purification system using solar nano-filtration.</p>
      </div>
    </div>

    <div class="inno-feature anim">
      <div class="inno-feature-img">
        <picture><source srcset="images/optimized/tech-lab.avif" type="image/avif"/><img src="images/optimized/tech-lab.jpg" alt="AI and Robotics lab" loading="lazy"/></picture>
      </div>
      <div class="inno-feature-text">
        <h3>AI &amp; Robotics Programme</h3>
        <p>Launched in 2023, our flagship AI &amp; Robotics Programme gives students from Grade 6 upward hands-on experience with machine learning, drone engineering, and autonomous systems — all within a specially designed innovation lab.</p>
        <p>Students work on real-world challenges: from precision agriculture drones to AI-powered accessibility tools — and have represented Kenya at global STEM competitions.</p>
        <div class="inno-tags">
          <span class="inno-tag">Machine Learning</span>
          <span class="inno-tag">Drone Engineering</span>
          <span class="inno-tag">3D Printing</span>
          <span class="inno-tag">IoT Systems</span>
          <span class="inno-tag">Environmental Tech</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ COMMUNITY ═══ -->
<section class="section-pad" id="community">
  <div class="container">
    <span class="section-label anim">Community &amp; Service</span>
    <div class="community-layout">
      <div class="community-img-grid anim-left">
        <div class="community-img community-img-tall">
          <picture><source srcset="images/optimized/creative-arts.avif" type="image/avif"/><img src="images/optimized/creative-arts.jpg" alt="Community service" loading="lazy"/></picture>
        </div>
        <div class="community-img">
          <picture><source srcset="images/optimized/group-project.avif" type="image/avif"/><img src="images/optimized/group-project.jpg" alt="Student collaboration" loading="lazy"/></picture>
        </div>
        <div class="community-img">
          <picture><source srcset="images/optimized/music-class.avif" type="image/avif"/><img src="images/optimized/music-class.jpg" alt="Outreach" loading="lazy"/></picture>
        </div>
      </div>
      <div class="community-text anim-right">
        <h2>Impact <span class="section-title">Beyond</span> the Classroom</h2>
        <p>Service to community is woven into our school's DNA. Through organised programmes, student-led initiatives, and partnerships with NGOs across Kenya, our students create measurable, lasting change.</p>
        <div class="impact-items">
          <div class="impact-item">
            <span class="icon"><i class="fa-solid fa-hand-holding-dollar" aria-hidden="true"></i></span>
            <div>
              <h5>KSh 2M Charity Drive 2025</h5>
              <p>Students fundraised over KSh 2 million for flood relief efforts in western Kenya — entirely student-organised.</p>
            </div>
          </div>
          <div class="impact-item">
            <span class="icon"></span>
            <div>
              <h5>50,000 Trees Initiative</h5>
              <p>In partnership with Kenya Forest Service, students have planted 50,000+ trees across three counties since 2022.</p>
            </div>
          </div>
          <div class="impact-item">
            <span class="icon"><i class="fa-solid fa-book-open" aria-hidden="true"></i></span>
            <div>
              <h5>Literacy Outreach</h5>
              <p>Our students teach literacy skills to 400+ children in Mukuru every Saturday, led entirely by student volunteers.</p>
            </div>
          </div>
          <div class="impact-item">
            <span class="icon"><i class="fa-solid fa-stethoscope" aria-hidden="true"></i></span>
            <div>
              <h5>Health &amp; Wellness Camps</h5>
              <p>Annual medical outreach camps providing free screenings to rural communities, co-organised with local hospitals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ SCHOLARSHIPS ═══ -->
<section class="section-pad" id="scholarships">
  <div class="container">
    <span class="section-label anim">Global University Placements</span>
    <div class="schol-intro anim">
      <h2>From Nova Heights to the <span class="section-title">World's Best</span> Universities</h2>
      <p>In 2025, 15 Nova Heights graduates secured full-ride scholarships to leading universities across the globe — the highest number in our school's history. Our students go on to shape medicine, policy, technology, and the arts worldwide.</p>
    </div>

    <div class="schol-cards anim">
      <div class="schol-card">
        <div class="schol-card-accent" style="background:var(--gold);"></div>
        <div class="schol-card-num">15</div>
        <h4>Full International Scholarships — Class of 2025</h4>
        <p>Covering tuition, accommodation, and living expenses at universities in UK, USA, Canada, and Australia.</p>
      </div>
      <div class="schol-card">
        <div class="schol-card-accent" style="background:var(--terracotta);"></div>
        <div class="schol-card-num">98%</div>
        <h4>University Placement Rate</h4>
        <p>Virtually all graduates proceeding to university earn places at their first or second choice institution globally.</p>
      </div>
      <div class="schol-card">
        <div class="schol-card-accent" style="background:var(--teal);"></div>
        <div class="schol-card-num">40+</div>
        <h4>Universities Represented</h4>
        <p>Nova Heights alumni currently study at over 40 universities across 18 countries on six continents.</p>
      </div>
    </div>

    <div class="uni-logos anim">
      <span class="uni-logos-label">Recent destinations include</span>
      <span class="uni-tag">University of Edinburgh</span>
      <span class="uni-tag">UCL London</span>
      <span class="uni-tag">MIT</span>
      <span class="uni-tag">University of Toronto</span>
      <span class="uni-tag">University of Melbourne</span>
      <span class="uni-tag">Sciences Po Paris</span>
      <span class="uni-tag">Yale University</span>
      <span class="uni-tag">Makerere University</span>
      <span class="uni-tag">University of Cape Town</span>
    </div>
  </div>
</section>


<!-- ═══ CTA ═══ -->
<section class="page-cta">
  <div class="page-cta-inner">
    <h2>Ready for Your Child to <em>Write Their Own Story?</em></h2>
    <p>Join a community where every child is challenged, celebrated, and equipped to lead. Applications for 2026–27 are open now.</p>
    <div class="cta-btns">
      <a href="admissions.php" class="btn btn-primary">Apply for Admission</a>
      <a href="contact.php" class="btn btn-outline-light">Book a School Tour</a>
    </div>
  </div>
</section>

<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.12 });
  document.querySelectorAll('.anim, .anim-left, .anim-right').forEach(el => observer.observe(el));

  document.querySelectorAll('.filter-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const target = document.getElementById(tab.dataset.target);
      if (target) {
        const offset = 72 + 48;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  const gradeObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('.grade-fill').forEach(bar => {
          const w = bar.style.width;
          bar.style.width = '0';
          setTimeout(() => { bar.style.width = w; }, 200);
        });
        gradeObserver.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });
  document.querySelectorAll('.grade-bars').forEach(el => gradeObserver.observe(el));
</script>

<?php include("includes/footer.php"); include("includes/html_z.php"); ?>
