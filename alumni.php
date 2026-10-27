<?php include("includes/html_a.php");
 include("includes/header.php");
  ?>

<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Outfit:wght@300;400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet"/>

<style>
  :root{--a-violet:#7C3AED;--a-purple:#9D4EDD;--a-lilac:#C77DFF;--a-gold:#E8B84B;--a-pink:#F72585;}
  body{background:#06040f;}
  .al-hero{min-height:100vh;background:#06040f;position:relative;display:flex;align-items:center;overflow:hidden;padding-top:72px;}
  .stars{position:absolute;inset:0;background-image:radial-gradient(1px 1px at 20% 30%, rgba(255,255,255,0.6) 0%, transparent 100%),radial-gradient(1px 1px at 70% 20%, rgba(255,255,255,0.4) 0%, transparent 100%),radial-gradient(2px 2px at 40% 70%, rgba(255,255,255,0.3) 0%, transparent 100%),radial-gradient(1px 1px at 90% 60%, rgba(255,255,255,0.5) 0%, transparent 100%),radial-gradient(1px 1px at 15% 85%, rgba(255,255,255,0.3) 0%, transparent 100%);pointer-events:none;}
  .al-orb{position:absolute;border-radius:50%;filter:blur(120px);opacity:0.15;pointer-events:none;}
  .al-orb.o1{width:700px;height:700px;background:radial-gradient(circle,#7C3AED,transparent);top:-200px;right:-200px;}
  .al-orb.o2{width:500px;height:500px;background:radial-gradient(circle,#F72585,transparent);bottom:-100px;left:-100px;opacity:0.1;}
  .al-hero-title{font-family:var(--font-display);font-size:clamp(3rem,7vw,6.5rem);font-weight:800;line-height:1.0;color:#fff;margin-bottom:1.5rem;letter-spacing:-0.02em;}
  .al-hero-title .violet{color:var(--a-lilac);text-shadow:0 0 60px rgba(124,58,237,0.6);}
  .alumni-card-body{padding:1.5rem;}
  .alumni-card-body h4{color:#fff;margin-bottom:0.2rem;font-size:1rem;}
  .alumni-card-body .class{color:var(--a-lilac);font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:0.5rem;}
  .alumni-card-body .role{color:rgba(255,255,255,0.45);font-size:0.82rem;line-height:1.5;}
  .alumni-card-badge{position:absolute;top:1rem;right:1rem;background:rgba(6,4,15,0.8);backdrop-filter:blur(10px);border:1px solid rgba(124,58,237,0.3);color:var(--a-lilac);font-size:0.7rem;font-weight:700;padding:0.25rem 0.6rem;border-radius:100px;}
  .impact-card{background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.06);border-radius:20px;padding:2rem;text-align:center;position:relative;overflow:hidden;}
  .impact-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--a-violet),var(--a-lilac),var(--a-pink));}
  .impact-card .big{font-family:var(--font-display);font-size:3rem;font-weight:800;background:linear-gradient(135deg,var(--a-lilac),var(--a-gold));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1;}
  .impact-card .label{font-size:0.78rem;color:rgba(255,255,255,0.35);text-transform:uppercase;letter-spacing:0.1em;margin-top:0.5rem;}
  .industry-chip{display:inline-flex;align-items:center;gap:0.4rem;padding:0.45rem 1rem;border-radius:100px;font-size:0.78rem;font-weight:600;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);color:rgba(255,255,255,0.5);cursor:pointer;transition:all 0.2s;}
  .industry-chip:hover,.industry-chip.active{background:rgba(124,58,237,0.15);border-color:rgba(124,58,237,0.35);color:var(--a-lilac);}
  .story-body{padding:2.5rem;display:flex;flex-direction:column;justify-content:center;}
  .story-body blockquote{font-family:var(--font-display);font-style:italic;color:rgba(255,255,255,0.8);font-size:1.1rem;line-height:1.65;margin-bottom:1.5rem;}
  .story-body .author{color:var(--a-lilac);font-weight:700;font-size:0.9rem;}
  .story-body .details{color:rgba(255,255,255,0.35);font-size:0.78rem;margin-top:0.2rem;}
  .world-band{background:linear-gradient(135deg,#09061a,#06040f);border-top:1px solid rgba(124,58,237,0.1);border-bottom:1px solid rgba(124,58,237,0.1);padding:3rem 0;text-align:center;}
  .al-cta{background:linear-gradient(135deg,#0d0820,#06040f);padding:var(--section-pad) 0;position:relative;overflow:hidden;}
  @media(max-width:768px){.story-card{grid-template-columns:1fr!important;}.story-card img{height:240px;}.al-hero-grid{grid-template-columns:1fr!important;}}
</style>
<style>
.nav-svg-icon { display: inline-block; vertical-align: text-bottom; margin-right: 0.35rem; }
@media (max-width: 768px) {
  [style*="grid-template-columns: 1fr 1fr"],[style*="grid-template-columns:1fr 1fr"],
  [style*="grid-template-columns: repeat(2, 1fr)"],[style*="grid-template-columns:repeat(2,1fr)"],
  [style*="grid-template-columns: 1.2fr 1fr"],[style*="grid-template-columns:1.2fr 1fr"],
  [style*="grid-template-columns: 1fr 1.2fr"],[style*="grid-template-columns:1fr 1.2fr"],
  [style*="grid-template-columns: 1.5fr 1fr"],[style*="grid-template-columns:1.5fr 1fr"],
  [style*="grid-template-columns: 1fr 1.5fr"],[style*="grid-template-columns:1fr 1.5fr"],
  [style*="grid-template-columns: repeat(3, 1fr)"],[style*="grid-template-columns:repeat(3,1fr)"],
  [style*="grid-template-columns: 1.5fr 1fr 1fr"],[style*="grid-template-columns:1.5fr 1fr 1fr"],
  [style*="grid-template-columns: 1.1fr 1fr"],[style*="grid-template-columns:1.1fr 1fr"],
  [style*="grid-template-columns: 1fr 1fr 1.5fr"],[style*="grid-template-columns:1fr 1fr 1.5fr"] {
    grid-template-columns: 1fr !important;
  }
  [style*="display:flex"][style*="gap:"],[style*="display: flex"][style*="gap:"] { flex-wrap: wrap !important; }
  h1, h2, h3, h4, p { word-break: break-word; overflow-wrap: break-word; max-width: 100%; }
}
</style>
<style>
/* ═══════════════════════════════════════════
   NOVA HEIGHTS — NOTABLE ALUMNI
   Aesthetic: Dark Luxury Editorial · Cinematic
   ═══════════════════════════════════════════ */
:root {
  --void: #05030D; --deep: #09061A; --surface: #0F0B20; --panel: #140F28;
  --glass: rgba(255,255,255,0.03); --glass-border: rgba(255,255,255,0.07); --glass-hover: rgba(255,255,255,0.06);
  --violet: #7C3AED; --violet-light: #9D4EDD; --lilac: #C77DFF; --lilac-dim: rgba(199,125,255,0.6);
  --gold: #E8B84B; --gold-dim: rgba(232,184,75,0.7); --pink: #F72585; --teal: #06D6A0; --sky: #4CC9F0;
  --text: rgba(255,255,255,0.88); --text-mid: rgba(255,255,255,0.55); --text-dim: rgba(255,255,255,0.3);
  --font-display: 'Cormorant Garamond', Georgia, serif;
  --font-serif: 'DM Serif Display', Georgia, serif;
  --font-body: 'Outfit', sans-serif;
  --ease-out: cubic-bezier(0.16, 1, 0.3, 1);
  --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
}
body::before {
  content: ''; position: fixed; inset: 0; z-index: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px; opacity: 0.35; pointer-events: none;
}
.filter-section {
  padding: 2.5rem 0 0; position: sticky; top: 72px; z-index: 100;
  background: linear-gradient(to bottom, var(--void) 70%, transparent);
}
.filter-inner { display: flex; align-items: center; gap: 0.6rem; flex-wrap: wrap; padding-bottom: 2rem; }
.filter-label { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--text-dim); margin-right: 0.5rem; }
.chip {
  display: inline-flex; align-items: center; gap: 0.4rem;
  padding: 0.45rem 1.1rem; border-radius: 100px;
  font-size: 0.77rem; font-weight: 500;
  background: var(--glass); border: 1px solid var(--glass-border);
  color: var(--text-mid); cursor: pointer; transition: all 0.25s var(--ease-out);
  position: relative; overflow: hidden;
}
.chip::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(120deg, var(--violet), var(--lilac));
  opacity: 0; transition: opacity 0.25s; border-radius: 100px;
}
.chip span { position: relative; z-index: 1; }
.chip:hover { border-color: rgba(199,125,255,0.3); color: var(--lilac); transform: translateY(-1px); }
.chip.active { border-color: var(--violet); color: #fff; box-shadow: 0 0 20px rgba(124,58,237,0.3); }
.chip.active::before { opacity: 1; }
.chip-dot { width: 6px; height: 6px; border-radius: 50%; background: currentColor; position: relative; z-index: 1; display: none; }
.chip.active .chip-dot { display: block; }
.alumni-grid-section { padding: 1rem 0 6rem; }
.results-meta {
  display: flex; align-items: center; justify-content: space-between;
  margin-bottom: 2rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--glass-border);
}
.results-count { font-size: 0.8rem; color: var(--text-dim); }
.results-count strong { color: var(--lilac); font-weight: 600; }
.view-toggle { display: flex; gap: 0.3rem; }
.view-btn {
  width: 34px; height: 34px; border-radius: 8px;
  display: flex; align-items: center; justify-content: center;
  background: var(--glass); border: 1px solid var(--glass-border);
  color: var(--text-dim); cursor: pointer; transition: all 0.2s; font-size: 0.9rem;
}
.view-btn.active, .view-btn:hover { background: rgba(124,58,237,0.15); border-color: rgba(124,58,237,0.3); color: var(--lilac); }
.alumni-grid {
  display: grid; grid-template-columns: repeat(4, 1fr);
  gap: 1.25rem; transition: all 0.4s var(--ease-out);
}
.alumni-grid.list-view { grid-template-columns: 1fr; gap: 0.75rem; }
.alumni-card {
  background: var(--glass); border: 1px solid var(--glass-border);
  border-radius: 20px; overflow: hidden; cursor: pointer;
  transition: all 0.4s var(--ease-out); position: relative;
  animation: cardIn 0.6s var(--ease-out) both;
}
@keyframes cardIn {
  from { opacity: 0; transform: translateY(20px) scale(0.97); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}
.alumni-card:hover {
  transform: translateY(-10px); border-color: rgba(124,58,237,0.35);
  box-shadow: 0 30px 80px rgba(124,58,237,0.2), 0 0 0 1px rgba(199,125,255,0.1);
}
.alumni-card.hidden { display: none; }
.alumni-card::after {
  content: ''; position: absolute; inset: 0; border-radius: 20px;
  background: radial-gradient(circle at 50% 0%, rgba(124,58,237,0.15), transparent 70%);
  opacity: 0; transition: opacity 0.4s; pointer-events: none;
}
.alumni-card:hover::after { opacity: 1; }
.card-img-wrap { position: relative; overflow: hidden; aspect-ratio: 0.9; }
.card-img-wrap img {
  width: 100%; height: 100%; object-fit: cover; object-position: top;
  transition: transform 0.6s var(--ease-out), filter 0.4s;
  filter: grayscale(15%) brightness(0.9);
}
.alumni-card:hover .card-img-wrap img { transform: scale(1.07); filter: grayscale(0%) brightness(1.0); }
.card-img-overlay {
  position: absolute; bottom: 0; left: 0; right: 0; height: 60%;
  background: linear-gradient(to top, rgba(5,3,13,0.95) 0%, rgba(5,3,13,0.5) 50%, transparent 100%);
}
.card-badge {
  position: absolute; top: 0.875rem; right: 0.875rem;
  background: rgba(5,3,13,0.85); backdrop-filter: blur(12px);
  border: 1px solid rgba(124,58,237,0.3); color: var(--lilac);
  font-size: 0.65rem; font-weight: 700; padding: 0.22rem 0.65rem;
  border-radius: 100px; letter-spacing: 0.04em;
}
.card-industry-badge {
  position: absolute; top: 0.875rem; left: 0.875rem;
  background: rgba(5,3,13,0.85); backdrop-filter: blur(12px);
  font-size: 0.62rem; font-weight: 600; padding: 0.22rem 0.65rem;
  border-radius: 100px; letter-spacing: 0.04em; border: 1px solid;
}
.card-industry-badge[data-industry="Technology"]     { color: #4CC9F0; border-color: rgba(76,201,240,0.3); }
.card-industry-badge[data-industry="Medicine"]       { color: #06D6A0; border-color: rgba(6,214,160,0.3); }
.card-industry-badge[data-industry="Business"]       { color: var(--gold); border-color: rgba(232,184,75,0.3); }
.card-industry-badge[data-industry="Arts & Culture"] { color: #FF6B9D; border-color: rgba(255,107,157,0.3); }
.card-industry-badge[data-industry="Public Service"] { color: #E85D04; border-color: rgba(232,93,4,0.3); }
.card-industry-badge[data-industry="Academia"]       { color: var(--lilac); border-color: rgba(199,125,255,0.3); }
.card-read-btn {
  position: absolute; bottom: 4.5rem; left: 50%; transform: translateX(-50%) translateY(8px);
  background: linear-gradient(135deg, var(--violet), var(--violet-light));
  color: #fff; font-size: 0.72rem; font-weight: 600; padding: 0.5rem 1.2rem;
  border-radius: 100px; letter-spacing: 0.04em; white-space: nowrap;
  opacity: 0; transition: all 0.3s var(--ease-out);
  box-shadow: 0 8px 24px rgba(124,58,237,0.4); pointer-events: none;
  display: flex; align-items: center; gap: 0.4rem;
}
.alumni-card:hover .card-read-btn { opacity: 1; transform: translateX(-50%) translateY(0); }
.card-body { padding: 1.25rem 1.25rem 1.5rem; }
.card-body .industry { font-size: 0.65rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.4rem; }
.card-body[data-industry="Technology"]     .industry { color: #4CC9F0; }
.card-body[data-industry="Medicine"]       .industry { color: #06D6A0; }
.card-body[data-industry="Business"]       .industry { color: var(--gold); }
.card-body[data-industry="Arts & Culture"] .industry { color: #FF6B9D; }
.card-body[data-industry="Public Service"] .industry { color: #E85D04; }
.card-body[data-industry="Academia"]       .industry { color: var(--lilac); }
.card-body h3 { font-family: var(--font-display); font-size: 1.15rem; font-weight: 600; color: #fff; line-height: 1.2; margin-bottom: 0.4rem; }
.card-body .role-short { font-size: 0.78rem; color: var(--text-mid); line-height: 1.55; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden; }
.card-arrow { display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.72rem; font-weight: 600; color: var(--text-dim); margin-top: 0.875rem; transition: all 0.25s; }
.alumni-card:hover .card-arrow { color: var(--lilac); gap: 0.55rem; }
.alumni-grid.list-view .alumni-card { display: grid; grid-template-columns: 100px 1fr; border-radius: 16px; }
.alumni-grid.list-view .card-img-wrap { aspect-ratio: 1; border-radius: 0; }
.alumni-grid.list-view .card-read-btn { display: none; }
.alumni-grid.list-view .alumni-card:hover { transform: translateX(6px) translateY(-2px); }
.empty-state { grid-column: 1 / -1; text-align: center; padding: 5rem 2rem; }
.empty-state h3 { font-family: var(--font-display); font-size: 1.8rem; color: var(--text-mid); margin-bottom: 0.75rem; }
.empty-state p { color: var(--text-dim); }
.profile-overlay {
  position: fixed; inset: 0; z-index: 2000;
  background: rgba(5,3,13,0.85); backdrop-filter: blur(16px) saturate(0.8);
  display: flex; align-items: flex-start; justify-content: center;
  padding: 2rem 1rem; overflow-y: auto;
  opacity: 0; visibility: hidden; transition: all 0.4s var(--ease-out);
}
.profile-overlay.open { opacity: 1; visibility: visible; }
.profile-overlay.open .profile-panel { transform: translateY(0); opacity: 1; }
.profile-panel {
  width: 100%; max-width: 960px; background: var(--deep);
  border: 1px solid rgba(199,125,255,0.12); border-radius: 28px; overflow: hidden;
  transform: translateY(40px); opacity: 0; transition: all 0.5s var(--ease-out);
  position: relative; margin: auto;
}
.profile-header { position: relative; overflow: hidden; background: var(--surface); }
.profile-header-bg {
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(124,58,237,0.25) 0%, rgba(247,37,133,0.1) 50%, rgba(6,214,160,0.08) 100%);
  pointer-events: none;
}
.profile-header-grid { display: grid; grid-template-columns: 280px 1fr; gap: 0; position: relative; z-index: 1; }
.profile-portrait { position: relative; overflow: hidden; aspect-ratio: 0.85; min-height: 360px; }
.profile-portrait img { width: 100%; height: 100%; object-fit: cover; object-position: top; filter: brightness(0.9); }
.profile-portrait-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to right, transparent 60%, var(--surface) 100%), linear-gradient(to top, rgba(5,3,13,0.4), transparent 30%);
}
.profile-header-content { padding: 3rem 2.5rem 2.5rem; display: flex; flex-direction: column; justify-content: flex-end; }
.profile-industry-tag {
  display: inline-flex; align-items: center; gap: 0.4rem;
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase;
  padding: 0.35rem 0.9rem; border-radius: 100px; border: 1px solid; margin-bottom: 1.25rem; width: fit-content;
}
.profile-name { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 600; color: #fff; line-height: 1.1; margin-bottom: 0.75rem; }
.profile-tagline { font-size: 1rem; color: var(--text-mid); margin-bottom: 1.5rem; line-height: 1.6; }
.profile-meta-chips { display: flex; gap: 0.5rem; flex-wrap: wrap; }
.meta-chip { display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.72rem; font-weight: 500; padding: 0.3rem 0.75rem; border-radius: 100px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); color: var(--text-mid); }
.meta-chip .icon { font-size: 0.85rem; }
.profile-body { padding: 3rem; }
.chapter { display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem; margin-top: 2.75rem; }
.chapter:first-child { margin-top: 0; }
.chapter-num { font-family: var(--font-display); font-size: 0.75rem; font-weight: 400; color: var(--lilac); letter-spacing: 0.08em; opacity: 0.7; white-space: nowrap; }
.chapter-line { flex: 1; height: 1px; background: linear-gradient(90deg, rgba(199,125,255,0.3), transparent); }
.chapter h2 { font-family: var(--font-display); font-size: clamp(1.3rem, 2.5vw, 1.7rem); font-weight: 600; color: #fff; letter-spacing: -0.01em; }
.profile-body p { font-size: 0.95rem; line-height: 1.85; color: var(--text-mid); margin-bottom: 1.1rem; }
.profile-body p strong { color: var(--text); font-weight: 600; }
.profile-body p em { color: var(--lilac); font-style: italic; }
.pull-quote { border-left: 3px solid var(--violet); margin: 2.5rem 0; padding: 1.5rem 2rem; background: rgba(124,58,237,0.06); border-radius: 0 16px 16px 0; }
.pull-quote blockquote { font-family: var(--font-display); font-size: clamp(1.1rem, 2vw, 1.4rem); font-style: italic; font-weight: 400; color: rgba(255,255,255,0.85); line-height: 1.6; margin-bottom: 0.75rem; }
.pull-quote .quote-attr { font-size: 0.78rem; color: var(--lilac); font-weight: 600; }
.timeline { position: relative; margin: 2rem 0; }
.timeline::before { content: ''; position: absolute; left: 18px; top: 8px; bottom: 8px; width: 1px; background: linear-gradient(to bottom, var(--violet), transparent); }
.timeline-item { display: flex; gap: 1.5rem; margin-bottom: 1.5rem; align-items: flex-start; }
.timeline-dot { flex-shrink: 0; width: 36px; height: 36px; border-radius: 50%; background: rgba(124,58,237,0.15); border: 1px solid rgba(124,58,237,0.4); display: flex; align-items: center; justify-content: center; font-size: 0.9rem; margin-top: 2px; position: relative; z-index: 1; }
.timeline-year { font-size: 0.68rem; font-weight: 700; letter-spacing: 0.1em; color: var(--lilac); text-transform: uppercase; }
.timeline-title { font-size: 0.95rem; font-weight: 600; color: #fff; margin: 0.15rem 0; }
.timeline-desc { font-size: 0.83rem; color: var(--text-dim); line-height: 1.6; }
.achievements-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.875rem; margin: 2rem 0; }
.achievement-card { background: var(--glass); border: 1px solid var(--glass-border); border-radius: 14px; padding: 1.25rem; display: flex; align-items: flex-start; gap: 0.875rem; transition: all 0.25s; }
.achievement-card:hover { border-color: rgba(199,125,255,0.2); background: var(--glass-hover); }
.achievement-icon { width: 40px; height: 40px; border-radius: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; background: rgba(124,58,237,0.12); border: 1px solid rgba(124,58,237,0.2); }
.achievement-title { font-size: 0.85rem; font-weight: 600; color: #fff; margin-bottom: 0.2rem; }
.achievement-desc { font-size: 0.75rem; color: var(--text-dim); line-height: 1.5; }
.nova-connection { background: linear-gradient(135deg, rgba(124,58,237,0.1), rgba(247,37,133,0.05)); border: 1px solid rgba(124,58,237,0.2); border-radius: 20px; padding: 2rem; margin: 2.5rem 0; }
.nova-connection .heading { font-family: var(--font-display); font-size: 0.7rem; font-weight: 400; letter-spacing: 0.16em; text-transform: uppercase; color: var(--lilac); margin-bottom: 0.75rem; }
.nova-connection p { font-size: 0.92rem; color: var(--text-mid); margin: 0; }
.profile-close-btn { position: absolute; top: 1.5rem; right: 1.5rem; z-index: 10; width: 42px; height: 42px; border-radius: 50%; background: rgba(5,3,13,0.8); border: 1px solid rgba(255,255,255,0.1); color: var(--text-mid); font-size: 1.1rem; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s; backdrop-filter: blur(8px); }
.profile-close-btn:hover { background: rgba(196,92,58,0.2); color: #fff; border-color: rgba(196,92,58,0.4); }
.profile-nav { display: flex; align-items: center; justify-content: space-between; padding: 1.5rem 3rem 2.5rem; border-top: 1px solid var(--glass-border); gap: 1rem; }
.profile-nav-btn { display: flex; align-items: center; gap: 0.6rem; font-size: 0.8rem; color: var(--text-mid); font-weight: 500; padding: 0.6rem 1.25rem; border-radius: 100px; border: 1px solid var(--glass-border); background: var(--glass); cursor: pointer; transition: all 0.25s; }
.profile-nav-btn:hover { color: var(--lilac); border-color: rgba(199,125,255,0.25); }
.profile-nav-btn:disabled { opacity: 0.3; cursor: default; }
.profile-nav-center { font-size: 0.72rem; color: var(--text-dim); letter-spacing: 0.08em; }
.stories-section { padding: 4rem 0 6rem; border-top: 1px solid var(--glass-border); position: relative; }
.stories-section::before { content: ''; position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 600px; height: 400px; background: radial-gradient(circle, rgba(124,58,237,0.08), transparent 70%); pointer-events: none; }
.section-header { text-align: center; margin-bottom: 3rem; }
.section-eyebrow { display: inline-flex; align-items: center; gap: 0.6rem; margin-bottom: 1rem; }
.section-eyebrow .eyebrow-line { width: 24px; height: 1px; background: var(--lilac); }
.section-eyebrow span { font-size: 0.68rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--lilac); }
.section-title { font-family: var(--font-display); font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 300; color: #fff; }
.section-title strong { font-weight: 700; color: var(--lilac); }
.stories-list { display: flex; flex-direction: column; gap: 1.25rem; }
.story-card { display: grid; grid-template-columns: 300px 1fr; background: var(--glass); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden; transition: all 0.4s var(--ease-out); cursor: pointer; }
.story-card:hover { border-color: rgba(124,58,237,0.3); box-shadow: 0 20px 60px rgba(124,58,237,0.12); transform: translateY(-4px); }
.story-card:nth-child(even) { direction: rtl; }
.story-card:nth-child(even) > * { direction: ltr; }
.story-card-img { position: relative; overflow: hidden; min-height: 280px; }
.story-card-img img { width: 100%; height: 100%; object-fit: cover; object-position: top; transition: transform 0.6s var(--ease-out); filter: grayscale(10%); }
.story-card:hover .story-card-img img { transform: scale(1.05); filter: grayscale(0%); }
.story-card-body { padding: 2.5rem; display: flex; flex-direction: column; justify-content: center; }
.story-card-industry { font-size: 0.65rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; margin-bottom: 0.6rem; }
.story-card-body blockquote { font-family: var(--font-display); font-style: italic; font-size: clamp(1rem, 1.5vw, 1.25rem); line-height: 1.65; color: rgba(255,255,255,0.8); margin-bottom: 1.5rem; }
.story-card-body blockquote::before { content: '\201C'; font-family: var(--font-display); font-size: 3rem; color: var(--violet); line-height: 0; vertical-align: -0.5em; margin-right: 0.1em; opacity: 0.7; }
.story-author { font-weight: 600; color: var(--lilac); font-size: 0.9rem; }
.story-details { color: var(--text-dim); font-size: 0.75rem; margin-top: 0.2rem; }
.story-read-link { display: inline-flex; align-items: center; gap: 0.4rem; margin-top: 1.25rem; font-size: 0.78rem; font-weight: 600; color: var(--violet-light); transition: all 0.2s; }
.story-read-link svg { transition: transform 0.2s; }
.story-card:hover .story-read-link { color: var(--lilac); }
.story-card:hover .story-read-link svg { transform: translateX(4px); }
#scroll-top { position: fixed; bottom: 2rem; right: 2rem; z-index: 900; width: 44px; height: 44px; border-radius: 50%; background: var(--violet); color: #fff; font-size: 1rem; box-shadow: 0 4px 20px rgba(124,58,237,0.4); opacity: 0; visibility: hidden; transition: all 0.3s; display: flex; align-items: center; justify-content: center; cursor: pointer; }
#scroll-top.visible { opacity: 1; visibility: visible; }
#scroll-top:hover { background: var(--violet-light); transform: translateY(-3px); }
.hero { position: relative; min-height: 60vh; display: flex; align-items: center; padding: 120px 0 80px; overflow: hidden; }
.hero-orb { position: absolute; border-radius: 50%; filter: blur(120px); pointer-events: none; }
.hero-orb-1 { width: 800px; height: 800px; background: radial-gradient(circle, rgba(124,58,237,0.18), transparent 70%); top: -300px; right: -200px; }
.hero-orb-2 { width: 500px; height: 500px; background: radial-gradient(circle, rgba(247,37,133,0.12), transparent 70%); bottom: -100px; left: -100px; }
.hero-orb-3 { width: 400px; height: 400px; background: radial-gradient(circle, rgba(232,184,75,0.08), transparent 70%); top: 50%; left: 50%; transform: translate(-50%, -50%); }
.hero-content { position: relative; z-index: 2; max-width: 780px; }
.hero-eyebrow { display: inline-flex; align-items: center; gap: 0.6rem; margin-bottom: 1.5rem; opacity: 0; animation: fadeUp 0.8s var(--ease-out) 0.1s forwards; }
.eyebrow-line { width: 28px; height: 1.5px; background: linear-gradient(90deg, var(--lilac), var(--gold)); border-radius: 2px; }
.eyebrow-text { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.18em; text-transform: uppercase; color: var(--lilac); }
.hero-title { font-family: var(--font-display); font-size: clamp(3.5rem, 7vw, 7rem); font-weight: 300; line-height: 1.0; color: #fff; margin-bottom: 1.5rem; letter-spacing: -0.01em; opacity: 0; animation: fadeUp 0.9s var(--ease-out) 0.2s forwards; }
.hero-title em { font-style: italic; font-weight: 700; background: linear-gradient(120deg, var(--lilac), var(--gold) 60%, var(--pink) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; display: block; }
.hero-desc { font-size: clamp(1rem, 1.3vw, 1.15rem); color: var(--text-mid); line-height: 1.8; max-width: 560px; margin-bottom: 2.5rem; opacity: 0; animation: fadeUp 0.9s var(--ease-out) 0.35s forwards; }
.hero-stats { display: flex; gap: 3rem; flex-wrap: wrap; opacity: 0; animation: fadeUp 0.9s var(--ease-out) 0.5s forwards; padding-top: 2rem; border-top: 1px solid var(--glass-border); }
.hero-stat .num { font-family: var(--font-display); font-size: 2.4rem; font-weight: 600; background: linear-gradient(120deg, #fff, var(--lilac)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; line-height: 1; display: block; }
.hero-stat .label { font-size: 0.72rem; color: var(--text-dim); letter-spacing: 0.1em; text-transform: uppercase; margin-top: 0.25rem; }
@keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
@media (max-width: 1100px) { .alumni-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 900px) {
  .al-hero-grid { grid-template-columns: 1fr !important; gap: 2.5rem !important; }
  .impact-stats-grid { grid-template-columns: repeat(2, 1fr) !important; }
}
@media (max-width: 860px) {
  .alumni-grid { grid-template-columns: repeat(2, 1fr); }
  .profile-header-grid { grid-template-columns: 1fr; }
  .profile-portrait { min-height: 280px; aspect-ratio: 16/9; }
  .profile-portrait-overlay { background: linear-gradient(to top, var(--surface) 0%, transparent 50%); }
  .story-card { grid-template-columns: 1fr; direction: ltr !important; }
  .story-card:nth-child(even) { direction: ltr; }
  .story-card-img { min-height: 220px; }
  .achievements-grid { grid-template-columns: 1fr; }
}
@media (max-width: 580px) {
  .alumni-grid { grid-template-columns: repeat(2, 1fr); gap: 0.875rem; }
  .hero-stats { gap: 1.5rem; }
  .impact-stats-grid { grid-template-columns: repeat(2, 1fr) !important; }
  .profile-body { padding: 1.5rem; }
  .profile-nav { padding: 1rem 1.5rem 2rem; }
  .profile-header-content { padding: 2rem 1.5rem 2rem; }
}
@media (max-width: 380px) { .alumni-grid { grid-template-columns: 1fr; } }
</style>

<!-- HERO -->
<section class="al-hero">
  <div class="stars"></div>
  <div class="al-orb o1"></div><div class="al-orb o2"></div>
  <div class="container" style="position:relative;z-index:2;">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="al-hero-grid">
      <div class="anim-slide-left">
        <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(124,58,237,0.1);border:1px solid rgba(124,58,237,0.3);border-radius:100px;padding:0.4rem 1rem;margin-bottom:1.5rem;">
          <span style="width:8px;height:8px;border-radius:50%;background:var(--a-lilac);animation:pulse 2s infinite;"></span>
          <span style="color:var(--a-lilac);font-size:0.8rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">Global Alumni Network · Since 2000</span>
        </div>
        <h1 class="al-hero-title">Once Nova<br/><span class="violet">Heights.</span><br/>Always Nova Heights.</h1>
        <p style="color:rgba(255,255,255,0.6);font-size:1.05rem;line-height:1.75;margin-bottom:2.5rem;max-width:520px;">Over 5,000 graduates spanning 40+ countries — doctors, engineers, artists, entrepreneurs, and changemakers, all carrying the Nova Heights spirit wherever they go.</p>
        <div style="display:flex;gap:1rem;flex-wrap:wrap;">
          <a href="contact.php" class="btn btn-primary">Join the Network</a>
          <a href="#stories" class="btn btn-outline-light">Read Their Stories</a>
        </div>
        <div class="impact-stats-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;margin-top:3rem;">
          <div class="impact-card"><p class="big" data-count="5000" data-suffix="+">0</p><p class="label">Graduates</p></div>
          <div class="impact-card"><p class="big" data-count="40" data-suffix="+">0</p><p class="label">Countries</p></div>
          <div class="impact-card"><p class="big" data-count="25" data-suffix="">0</p><p class="label">Cohorts</p></div>
          <div class="impact-card"><p class="big" data-count="98" data-suffix="%">0</p><p class="label">Uni Placement</p></div>
        </div>
      </div>
      <!-- Collage grid -->
      <div class="anim-slide-right" style="display:grid;grid-template-columns:1fr 1fr;grid-template-rows:auto auto auto;gap:0.5rem;">
        <div style="border-radius:16px;overflow:hidden;aspect-ratio:1;grid-row:span 2;"><img src="images/alumni1.jpg" alt="Alumni graduate" style="width:100%;height:100%;object-fit:cover;object-position:top;"/></div>
        <div style="border-radius:16px;overflow:hidden;aspect-ratio:1;"><img src="images/alumni2.jpg" alt="Alumni" style="width:100%;height:100%;object-fit:cover;object-position:top;"/></div>
        <div style="border-radius:16px;overflow:hidden;aspect-ratio:1;"><img src="images/alumni3.jpg" alt="Alumni" style="width:100%;height:100%;object-fit:cover;object-position:top;"/></div>
        <div style="border-radius:16px;overflow:hidden;aspect-ratio:3/1;grid-column:span 2;"><img src="images/alumni4.jpg" alt="Graduation" style="width:100%;height:100%;object-fit:cover;"/></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════ NOTABLE ALUMNI HEADING ═══════════ -->
<section style="padding:4rem 0 0;background:var(--deep-bg);">
  <div class="container" style="text-align:center;">
    <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(124,58,237,0.08);border:1px solid rgba(124,58,237,0.2);border-radius:100px;padding:0.35rem 1rem;margin-bottom:1.25rem;">
      <span style="width:6px;height:6px;border-radius:50%;background:var(--a-lilac);display:inline-block;"></span>
      <span style="color:var(--a-lilac);font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;">Class Roll of Honour · Nova Heights</span>
    </div>
    <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,3rem);font-weight:300;color:#fff;line-height:1.1;margin-bottom:0.875rem;">Notable <em style="font-style:italic;font-weight:700;background:linear-gradient(120deg,var(--a-lilac),var(--a-gold));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Alumni</em></h2>
    <p style="color:rgba(255,255,255,0.45);font-size:1rem;line-height:1.75;max-width:520px;margin:0 auto;">Eight extraordinary individuals who graduated from these halls and went on to reshape medicine, technology, business, culture, and public life.</p>
  </div>
</section>

<!-- ═══════════ FILTER ═══════════ -->
<div class="filter-section" id="filter-section">
  <div class="container">
    <div class="filter-inner">
      <span class="filter-label">Filter by</span>
      <button class="chip active" data-filter="All"><span class="chip-dot"></span><span>All Alumni</span></button>
      <button class="chip" data-filter="Technology"><span class="chip-dot"></span><span><i class="fa-solid fa-bolt" aria-hidden="true"></i> Technology</span></button>
      <button class="chip" data-filter="Medicine"><span class="chip-dot"></span><span><i class="fa-solid fa-stethoscope" aria-hidden="true"></i> Medicine</span></button>
      <button class="chip" data-filter="Business"><span class="chip-dot"></span><span><i class="fa-solid fa-briefcase" aria-hidden="true"></i> Business</span></button>
      <button class="chip" data-filter="Arts & Culture"><span class="chip-dot"></span><span><i class="fa-solid fa-film" aria-hidden="true"></i> Arts &amp; Culture</span></button>
      <button class="chip" data-filter="Public Service"><span class="chip-dot"></span><span><i class="fa-solid fa-landmark" aria-hidden="true"></i> Public Service</span></button>
      <button class="chip" data-filter="Academia"><span class="chip-dot"></span><span><i class="fa-solid fa-flask" aria-hidden="true"></i> Academia</span></button>
    </div>
  </div>
</div>

<!-- ═══════════ ALUMNI GRID ═══════════ -->
<section class="alumni-grid-section">
  <div class="container">
    <div class="results-meta">
      <p class="results-count">Showing <strong id="results-num">8</strong> alumni</p>
      <div class="view-toggle">
        <button class="view-btn active" id="grid-view-btn" title="Grid view">⊞</button>
        <button class="view-btn" id="list-view-btn" title="List view">≡</button>
      </div>
    </div>
    <div class="alumni-grid stagger" id="alumni-grid">

      <!-- Card 1: David Kimani -->
      <div class="alumni-card" data-industry="Technology" data-id="david-kimani" style="animation-delay:0.05s">
        <div class="card-img-wrap">
          <img src="images/alumni5.jpg" alt="David Kimani" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=david&backgroundColor=7C3AED&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2023</span>
          <span class="card-industry-badge" data-industry="Technology">Technology</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Technology">
          <p class="industry">Technology</p>
          <h3>David Kimani</h3>
          <p class="role-short">Software Engineer at Google, Nairobi. BSc Computer Science, University of Edinburgh.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 2: Dr. Amara Diallo -->
      <div class="alumni-card" data-industry="Medicine" data-id="amara-diallo" style="animation-delay:0.10s">
        <div class="card-img-wrap">
          <img src="images/alumni6.jpg" alt="Dr. Amara Diallo" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=amara&backgroundColor=06D6A0&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2015</span>
          <span class="card-industry-badge" data-industry="Medicine">Medicine</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Medicine">
          <p class="industry">Medicine</p>
          <h3>Dr. Amara Diallo</h3>
          <p class="role-short">Consultant Cardiologist, Kenyatta National Hospital. MBChB, University of Nairobi.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 3: Kwame Asante -->
      <div class="alumni-card" data-industry="Business" data-id="kwame-asante" style="animation-delay:0.15s">
        <div class="card-img-wrap">
          <img src="images/alumni7.jpg" alt="Kwame Asante" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=kwame&backgroundColor=E8B84B&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2018</span>
          <span class="card-industry-badge" data-industry="Business">Business</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Business">
          <p class="industry">Business</p>
          <h3>Kwame Asante</h3>
          <p class="role-short">Co-Founder &amp; CEO, Pesa Technologies. Forbes 30 Under 30 Africa 2024.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 4: Zara Osei -->
      <div class="alumni-card" data-industry="Arts & Culture" data-id="zara-osei" style="animation-delay:0.20s">
        <div class="card-img-wrap">
          <img src="images/optimized/alumni-networking.jpg" alt="Zara Osei" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=zara&backgroundColor=FF6B9D&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2020</span>
          <span class="card-industry-badge" data-industry="Arts & Culture">Arts &amp; Culture</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Arts & Culture">
          <p class="industry">Arts &amp; Culture</p>
          <h3>Zara Osei</h3>
          <p class="role-short">Award-winning filmmaker. Berlin International Film Festival selection, 2025.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 5: Tunde Adeyemi -->
      <div class="alumni-card" data-industry="Public Service" data-id="tunde-adeyemi" style="animation-delay:0.25s">
        <div class="card-img-wrap">
          <img src="images/alumni8.jpg" alt="Tunde Adeyemi" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=tunde&backgroundColor=E85D04&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2010</span>
          <span class="card-industry-badge" data-industry="Public Service">Public Service</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Public Service">
          <p class="industry">Public Service</p>
          <h3>Tunde Adeyemi</h3>
          <p class="role-short">Cabinet Secretary, Ministry of Education, Kenya. LLB, University of Cape Town.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 6: Dr. Aisha Nkrumah -->
      <div class="alumni-card" data-industry="Academia" data-id="aisha-nkrumah" style="animation-delay:0.30s">
        <div class="card-img-wrap">
          <img src="images/Aisha.avif" alt="Dr. Aisha Nkrumah" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=aisha&backgroundColor=9D4EDD&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2019</span>
          <span class="card-industry-badge" data-industry="Academia">Academia</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Academia">
          <p class="industry">Academia</p>
          <h3>Dr. Aisha Nkrumah</h3>
          <p class="role-short">Postdoctoral Researcher, MIT Media Lab. PhD Environmental Engineering.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 7: Obinna Ejike -->
      <div class="alumni-card" data-industry="Technology" data-id="obinna-ejike" style="animation-delay:0.35s">
        <div class="card-img-wrap">
          <img src="images/obinna.avif" alt="Obinna Ejike" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=obinna&backgroundColor=4CC9F0&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2016</span>
          <span class="card-industry-badge" data-industry="Technology">Technology</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Technology">
          <p class="industry">Technology</p>
          <h3>Obinna Ejike</h3>
          <p class="role-short">Lead Data Scientist, Safaricom. MSc Artificial Intelligence, University of Toronto.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <!-- Card 8: Naledi Dlamini -->
      <div class="alumni-card" data-industry="Medicine" data-id="naledi-dlamini" style="animation-delay:0.40s">
        <div class="card-img-wrap">
          <img src="images/optimized/alumni-event.jpg" alt="Naledi Dlamini" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=naledi&backgroundColor=06D6A0&scale=80'"/>
          <div class="card-img-overlay"></div>
          <span class="card-badge">Class of 2021</span>
          <span class="card-industry-badge" data-industry="Medicine">Medicine</span>
          <div class="card-read-btn">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            Read Full Story
          </div>
        </div>
        <div class="card-body" data-industry="Medicine">
          <p class="industry">Medicine</p>
          <h3>Naledi Dlamini</h3>
          <p class="role-short">Medical Officer, MSF Kenya. MBBS, Aga Khan University. Humanitarian Award 2025.</p>
          <span class="card-arrow">Read story <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

    </div><!-- /alumni-grid -->
  </div>
</section>

<!-- ═══════════ STORIES / FEATURED ═══════════ -->
<section class="stories-section" id="stories">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <span class="eyebrow-line"></span>
        <span>Alumni Voices</span>
        <span class="eyebrow-line"></span>
      </div>
      <h2 class="section-title">Stories That <strong>Inspire</strong></h2>
    </div>
    <div class="stories-list">

      <div class="story-card" data-id="david-kimani">
        <div class="story-card-img">
          <img src="images/kimani.jpg" alt="David Kimani" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=david2&backgroundColor=7C3AED&scale=80'"/>
        </div>
        <div class="story-card-body">
          <p class="story-card-industry" style="color:#4CC9F0;"><i class="fa-solid fa-bolt" aria-hidden="true"></i> Technology</p>
          <blockquote>Nova Heights didn't just give me an education — it gave me a mindset. The critical thinking skills and global perspective I developed here have been the foundation of everything I've built since.</blockquote>
          <p class="story-author">David Kimani</p>
          <p class="story-details">Class of 2023 · Software Engineer at Google · University of Edinburgh Graduate</p>
          <span class="story-read-link">Read David's full story <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <div class="story-card" data-id="amara-diallo">
        <div class="story-card-img">
          <img src="images/Dr.jpg" alt="Dr. Amara Diallo" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=amara2&backgroundColor=06D6A0&scale=80'"/>
        </div>
        <div class="story-card-body">
          <p class="story-card-industry" style="color:#06D6A0;"><i class="fa-solid fa-stethoscope" aria-hidden="true"></i> Medicine</p>
          <blockquote>The science programme at Nova Heights was exceptional. My A-Level Biology and Chemistry prepared me so thoroughly that first year at medical school felt like revision.</blockquote>
          <p class="story-author">Dr. Amara Diallo</p>
          <p class="story-details">Class of 2015 · Cardiologist, Kenyatta National Hospital · MBChB, University of Nairobi</p>
          <span class="story-read-link">Read Amara's full story <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

      <div class="story-card" data-id="kwame-asante">
        <div class="story-card-img">
          <img src="images/kwame.jpg" alt="Kwame Asante" onerror="this.src='https://api.dicebear.com/8.x/notionists/svg?seed=kwame2&backgroundColor=E8B84B&scale=80'"/>
        </div>
        <div class="story-card-body">
          <p class="story-card-industry" style="color:var(--gold);"><i class="fa-solid fa-briefcase" aria-hidden="true"></i> Business</p>
          <blockquote>I started my first business at 16, right here at Nova Heights. The entrepreneurship programme, the mentorship from teachers, and the confidence this school built in me — that's what became Pesa Technologies.</blockquote>
          <p class="story-author">Kwame Asante</p>
          <p class="story-details">Class of 2018 · CEO, Pesa Technologies · Forbes 30 Under 30 Africa 2024</p>
          <span class="story-read-link">Read Kwame's full story <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════ GLOBAL PRESENCE ═══════════ -->
<!-- <div class="global-band">
  <div class="container">
    <h4>Our Alumni Live &amp; Work In</h4>
    <div class="global-flags">
      <span>🇰🇪 Kenya</span><span class="sep">·</span>
      <span>🇬🇧 United Kingdom</span><span class="sep">·</span>
      <span>🇺🇸 United States</span><span class="sep">·</span>
      <span>🇨🇦 Canada</span><span class="sep">·</span>
      <span>🇦🇺 Australia</span><span class="sep">·</span>
      <span>🇿🇦 South Africa</span><span class="sep">·</span>
      <span>🇩🇪 Germany</span><span class="sep">·</span>
      <span>🇳🇱 Netherlands</span><span class="sep">·</span>
      <span>🇳🇬 Nigeria</span><span class="sep">·</span>
      <span>🇬🇭 Ghana</span><span class="sep">·</span>
      <span>🇸🇬 Singapore</span><span class="sep">·</span>
      <span>🇦🇪 UAE</span>
    </div>
  </div>
</div> -->

<!-- ═══════════ FOOTER ═══════════ -->
<!-- <footer class="footer">
  <div class="container">
    <div class="footer-inner">
      <a href="alumni.php" class="nav-logo">
        <div class="logo-emblem">N</div>
        <div class="logo-text">
          <span class="logo-name">Nova Heights</span>
          <span class="logo-sub">International School</span>
        </div>
      </a>
      <p style="font-size:0.82rem;color:var(--text-dim);max-width:320px;line-height:1.7;">Nurturing excellence and global citizenship since 2000. Our alumni continue to shape the world.</p>
    </div>
    <p class="footer-copy">© 2026 Nova Heights International School · Bogani Road, Karen, Nairobi · <a href="mailto:alumni@novaheights.ac.ke" style="color:var(--lilac-dim);">alumni@novaheights.ac.ke</a></p>
  </div>
</footer> -->

<button id="scroll-top" aria-label="Back to top">↑</button>

<!-- ═══════════ PROFILE MODAL ═══════════ -->
<div class="profile-overlay" id="profile-overlay" role="dialog" aria-modal="true">
  <div class="profile-panel" id="profile-panel">
    <button class="profile-close-btn" id="profile-close" aria-label="Close profile">✕</button>

    <!-- Dynamic content injected here -->
    <div id="profile-content"></div>

    <div class="profile-nav">
      <button class="profile-nav-btn" id="profile-prev">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Previous
      </button>
      <span class="profile-nav-center" id="profile-nav-label">1 / 8</span>
      <button class="profile-nav-btn" id="profile-next">
        Next
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </button>
    </div>
  </div>
</div>

<!-- ═══════════ JAVASCRIPT ═══════════ -->


<!-- ═══════════ HERO ═══════════ -->



<!-- GLOBAL PRESENCE -->
<div class="world-band">
  <div class="container">
    <h3 style="color:rgba(255,255,255,0.3);font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;margin-bottom:2rem;">OUR ALUMNI LIVE &amp; WORK IN</h3>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇰🇪 Kenya</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇬🇧 United Kingdom</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇺🇸 United States</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇨🇦 Canada</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇦🇺 Australia</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇿🇦 South Africa</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇩🇪 Germany</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇳🇱 Netherlands</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇳🇬 Nigeria</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇬🇭 Ghana</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇸🇬 Singapore</span><span style="color:rgba(124,58,237,0.3);">·</span>
      <span style="color:rgba(255,255,255,0.5);font-size:0.9rem;font-weight:600;">🇦🇪 UAE</span>
    </div>
  </div>
</div>

<!-- ALUMNI EVENTS -->
<section style="padding:var(--section-pad) 0;background:#08050e;">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;">
      <div>
        <span style="color:var(--a-lilac);font-size:0.75rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;display:flex;align-items:center;gap:0.5rem;margin-bottom:1rem;" class="anim-slide-left"><span style="width:20px;height:2px;background:var(--a-lilac);"></span>Stay Connected</span>
        <h2 class="anim-slide-left" style="color:#fff;margin-bottom:1rem;transition-delay:0.1s;">Alumni <span style="color:var(--a-lilac);">Events &amp; Network</span></h2>
        <p class="anim-slide-left" style="color:rgba(255,255,255,0.5);margin-bottom:2rem;line-height:1.75;transition-delay:0.2s;">Stay connected to the school and to each other through our growing programme of events, mentorship opportunities, and digital community.</p>
        <div style="display:flex;flex-direction:column;gap:1rem;" class="stagger">
          <div style="display:flex;gap:1.25rem;align-items:flex-start;padding:1.25rem;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:16px;" class="anim-fade-up">
            <div style="width:52px;height:52px;border-radius:12px;background:rgba(124,58,237,0.15);border:1px solid rgba(124,58,237,0.25);display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;color:#a78bfa;"><i class="fa-solid fa-champagne-glasses" aria-hidden="true"></i></div>
            <div><h5 style="color:#fff;margin-bottom:0.25rem;">Annual Alumni Gala</h5><p style="color:rgba(255,255,255,0.45);font-size:0.83rem;">August 2026 · Nairobi Serena Hotel. Celebrating 26 years of Nova Heights excellence.</p></div>
          </div>
          <div style="display:flex;gap:1.25rem;align-items:flex-start;padding:1.25rem;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:16px;" class="anim-fade-up">
            <div style="width:52px;height:52px;border-radius:12px;background:rgba(232,184,75,0.1);border:1px solid rgba(232,184,75,0.2);display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;color:#e8b84b;"><i class="fa-solid fa-user-graduate" aria-hidden="true"></i></div>
            <div><h5 style="color:#fff;margin-bottom:0.25rem;">Mentorship Programme</h5><p style="color:rgba(255,255,255,0.45);font-size:0.83rem;">Alumni mentoring current students on career paths, university applications, and life skills.</p></div>
          </div>
          <div style="display:flex;gap:1.25rem;align-items:flex-start;padding:1.25rem;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:16px;" class="anim-fade-up">
            <div style="width:52px;height:52px;border-radius:12px;background:rgba(247,37,133,0.1);border:1px solid rgba(247,37,133,0.2);display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;color:#f72585;"><i class="fa-solid fa-earth-africa" aria-hidden="true"></i></div>
            <div><h5 style="color:#fff;margin-bottom:0.25rem;">Regional Meetups</h5><p style="color:rgba(255,255,255,0.45);font-size:0.83rem;">Quarterly alumni gatherings in Nairobi, Mombasa, London, New York, and Toronto.</p></div>
          </div>
          <div style="display:flex;gap:1.25rem;align-items:flex-start;padding:1.25rem;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:16px;" class="anim-fade-up">
            <div style="width:52px;height:52px;border-radius:12px;background:rgba(46,204,113,0.1);border:1px solid rgba(46,204,113,0.2);display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0;color:#2ecc71;"><i class="fa-solid fa-briefcase" aria-hidden="true"></i></div>
            <div><h5 style="color:#fff;margin-bottom:0.25rem;">Careers &amp; Internships</h5><p style="color:rgba(255,255,255,0.45);font-size:0.83rem;">Alumni-created internship and job opportunities exclusively for Nova Heights current students.</p></div>
          </div>
        </div>
      </div>
      <div class="anim-slide-right">
        <div style="border-radius:24px;overflow:hidden;margin-bottom:1.5rem;">
          <div style="position:relative;">
            <img src="images/graduation.jpg" alt="Alumni gathering" style="width:100%;aspect-ratio:16/10;object-fit:cover;display:block;" loading="lazy"/>
            <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(6,4,15,0.8),transparent 50%);"></div>
            <div style="position:absolute;bottom:2rem;left:2rem;right:2rem;">
              <h3 style="color:#fff;font-size:1.2rem;margin-bottom:0.4rem;">Class of 2025 Graduation</h3>
              <p style="color:rgba(255,255,255,0.6);font-size:0.85rem;">An unforgettable evening celebrating 320 exceptional graduates</p>
            </div>
          </div>
        </div>
        <!-- Register form -->
        <div style="background:rgba(255,255,255,0.02);border:1px solid rgba(124,58,237,0.2);border-radius:20px;padding:2rem;">
          <h4 style="color:#fff;margin-bottom:0.5rem;">Register for Alumni Network</h4>
          <p style="color:rgba(255,255,255,0.45);font-size:0.83rem;margin-bottom:1.5rem;">Stay connected, get invited to events, and access the alumni directory.</p>
          <form data-ajax style="display:flex;flex-direction:column;gap:1rem;">
            <input type="text" class="form-control" placeholder="Full Name" style="background:rgba(255,255,255,0.05);border-color:rgba(255,255,255,0.1);color:#fff;" required />
            <input type="email" class="form-control" placeholder="Email Address" style="background:rgba(255,255,255,0.05);border-color:rgba(255,255,255,0.1);color:#fff;" required />
            <input type="text" class="form-control" placeholder="Graduation Year (e.g. 2019)" style="background:rgba(255,255,255,0.05);border-color:rgba(255,255,255,0.1);color:#fff;" required />
            <div class="form-success" style="display:none;padding:0.875rem;background:rgba(46,204,113,0.1);border:1px solid rgba(46,204,113,0.25);border-radius:8px;color:#2ECC71;font-weight:600;font-size:0.85rem;">✅ Welcome back! You're now registered.</div>
            <button type="submit" class="btn btn-primary" style="justify-content:center;">Join the Alumni Network</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="al-cta">
  <div style="position:absolute;top:-30%;left:50%;transform:translateX(-50%);width:800px;height:800px;background:radial-gradient(circle,rgba(124,58,237,0.08),transparent 70%);pointer-events:none;"></div>
  <div class="container" style="position:relative;z-index:1;text-align:center;">
    <span style="color:var(--a-lilac);font-size:0.75rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;display:flex;align-items:center;gap:0.5rem;justify-content:center;margin-bottom:1rem;" class="anim-fade-up"><span style="width:20px;height:2px;background:var(--a-lilac);"></span>New Students</span>
    <h2 class="anim-fade-up" style="color:#fff;margin-bottom:1rem;font-size:clamp(1.8rem,4vw,3rem);transition-delay:0.1s;">Your Story <span style="color:var(--a-lilac);">Starts Here</span></h2>
    <p class="anim-fade-up" style="color:rgba(255,255,255,0.45);max-width:460px;margin:0 auto 2.5rem;transition-delay:0.2s;">Every one of these remarkable alumni started exactly where you are now. Apply to Nova Heights and write the next great chapter.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;" class="anim-fade-up" style="transition-delay:0.3s;">
      <a href="admissions.php" class="btn btn-primary">Apply to Nova Heights</a>
      <a href="about.php" class="btn btn-outline-light">Discover Our Story</a>
    </div>
  </div>
</section>

<script src="js/alumni.js"></script>

<?php include("includes/footer.php"); include("includes/html_z.php"); ?>
