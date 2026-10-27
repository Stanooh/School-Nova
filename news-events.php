<?php include("includes/html_a.php"); include("includes/header.php"); ?>

    <!-- HERO -->
    <section class="inner-hero">
      <img
        src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=1600&q=75&auto=format&fit=crop"
        alt=""
        class="inner-hero-bg"
      />
      <div class="inner-hero-overlay"></div>
      <div class="container inner-hero-content">
        <div class="breadcrumb">
          <a href="index.php">Home</a><span>/</span
          ><span>News &amp; Events</span>
        </div>
        <span class="section-label" style="color: var(--gold-light)"
          >Stay Informed</span
        >
        <h1 style="margin-bottom: 1rem">
          News &amp;
          <span style="color: var(--gold-light); font-style: italic"
            >Events</span
          >
        </h1>
        <p class="section-desc">
          The latest stories, announcements, and upcoming events from the Nova
          Heights community.
        </p>
      </div>
    </section>

    <!-- FEATURED NEWS -->
    <section class="section-pad" style="background: var(--cream)">
      <div class="container">
        <span class="section-label anim-fade-up">Spotlight</span>
        <h2
          class="anim-fade-up"
          style="transition-delay: 0.1s; margin-bottom: 2rem"
        >
          Featured <span class="section-title">Story</span>
        </h2>
        <div
          class="mob-stack-flush anim-scale-in"
          style="
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 0;
            border-radius: var(--radius-xl);
            overflow: hidden;
            border: 1px solid var(--sand);
            box-shadow: var(--shadow-md);
          "
        >
          <div style="overflow: hidden; max-height: 500px">
            <img
              src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=900&q=85&auto=format&fit=crop"
              alt="IGCSE Results"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
          <div
            style="
              padding: 3rem;
              background: var(--warm-white);
              display: flex;
              flex-direction: column;
              justify-content: center;
            "
          >
            <span class="badge badge-blue" style="margin-bottom: 1rem"
              >Academic Achievement</span
            >
            <p
              style="
                font-size: 0.82rem;
                color: var(--ink-faint);
                margin-bottom: 0.75rem;
              "
            >
              March 15, 2026
            </p>
            <h2
              style="font-size: 1.8rem; margin-bottom: 1rem; line-height: 1.3"
            >
              Class of 2025 Achieves
              <span class="section-title">Record IGCSE Results</span>
            </h2>
            <p style="margin-bottom: 1.5rem">
              Nova Heights students have once again exceeded international
              benchmarks, with 96% of candidates achieving A*–B grades across
              all subjects. This is the fifth consecutive year of
              record-breaking results.
            </p>
            <p
              style="
                font-size: 0.875rem;
                color: var(--ink-faint);
                margin-bottom: 2rem;
              "
            >
              The outstanding performance reflects the dedication of our
              teaching staff, the hard work of our students, and the support of
              our school community.
            </p>
            <a href="#" class="btn btn-primary" style="align-self: flex-start"
              >Read Full Story
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>
      </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section class="section-pad" style="background: var(--forest)">
      <div class="container">
        <div
          class="mob-stack"
          style="
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
            align-items: start;
          "
        >
          <div>
            <span
              class="section-label anim-slide-left"
              style="color: var(--gold-light)"
              >Calendar</span
            >
            <h2
              class="anim-slide-left"
              style="
                color: var(--cream);
                transition-delay: 0.1s;
                margin-bottom: 1rem;
              "
            >
              Upcoming
              <span style="color: var(--gold-light); font-style: italic"
                >Events</span
              >
            </h2>
            <p
              class="anim-slide-left"
              style="
                color: rgba(250, 247, 242, 0.65);
                transition-delay: 0.2s;
                margin-bottom: 2rem;
              "
            >
              Mark your calendar for these exciting upcoming events at Nova
              Heights.
            </p>
            <a
              href="contact.php"
              class="btn btn-outline-light anim-slide-left"
              style="transition-delay: 0.3s"
              >Get Event Updates</a
            >
          </div>
          <div
            style="display: flex; flex-direction: column; gap: 0.75rem"
            class="stagger"
          >
            <div class="event-card anim-fade-up">
              <div class="event-date-block">
                <span class="day">18</span><span class="mon">Apr</span>
              </div>
              <div class="event-info">
                <h5>Science &amp; Innovation Fair</h5>
                <p>
                  Annual showcase of robotics, AI projects, and environmental
                  science.
                </p>
              </div>
            </div>
            <div class="event-card anim-fade-up">
              <div class="event-date-block">
                <span class="day">25</span><span class="mon">Apr</span>
              </div>
              <div class="event-info">
                <h5>Open Day — All Welcome</h5>
                <p>
                  Tour our campus, meet faculty, and learn about our programmes.
                </p>
              </div>
            </div>
            <div class="event-card anim-fade-up">
              <div class="event-date-block">
                <span class="day">02</span><span class="mon">May</span>
              </div>
              <div class="event-info">
                <h5>Inter-School Debate Championship</h5>
                <p>
                  Top schools from Nairobi compete in our annual debate
                  tournament.
                </p>
              </div>
            </div>
            <div class="event-card anim-fade-up">
              <div class="event-date-block">
                <span class="day">15</span><span class="mon">May</span>
              </div>
              <div class="event-info">
                <h5>Annual Sports Day</h5>
                <p>
                  Athletics, football, swimming competition and team-building
                  activities.
                </p>
              </div>
            </div>
            <div class="event-card anim-fade-up">
              <div class="event-date-block">
                <span class="day">28</span><span class="mon">May</span>
              </div>
              <div class="event-info">
                <h5>Arts &amp; Culture Gala Night</h5>
                <p>
                  Theatrical performances, music concerts, and visual arts
                  showcase.
                </p>
              </div>
            </div>
            <div class="event-card anim-fade-up">
              <div class="event-date-block">
                <span class="day">10</span><span class="mon">Jun</span>
              </div>
              <div class="event-info">
                <h5>Senior School Graduation</h5>
                <p>
                  Celebrating the Class of 2026 — an evening of achievement and
                  pride.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWS ARTICLES -->
    <section class="section-pad" style="background: var(--warm-white)">
      <div class="container">
        <div
          class="flex-between"
          style="
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: flex-start;
          "
        >
          <div>
            <span class="section-label anim-fade-up">All Stories</span>
            <h2 class="anim-fade-up" style="transition-delay: 0.1s">
              School <span class="section-title">News</span>
            </h2>
          </div>
          <div class="filter-tabs anim-fade-up">
            <button class="filter-tab active" data-filter="all">All</button>
            <button class="filter-tab" data-filter="news">News</button>
            <button class="filter-tab" data-filter="sports">Sports</button>
            <button class="filter-tab" data-filter="academic">Academic</button>
            <button class="filter-tab" data-filter="community">
              Community
            </button>
          </div>
        </div>
        <div class="grid-3 stagger" id="news-grid">
          <article class="news-card anim-fade-up" data-filter-cat="academic">
            <div class="news-card-img-wrap">
              <img
                src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80&auto=format&fit=crop"
                alt="IGCSE Results"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-blue">Academic</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >March 15, 2026</span
                >
              </div>
              <h4>Class of 2025 Achieves Record IGCSE Results</h4>
              <p>
                Nova Heights students outperform international benchmarks with
                96% achieving A*–B grades across all subjects.
              </p>
              <a href="#" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up" data-filter-cat="sports">
            <div class="news-card-img-wrap">
              <img
                src="images/trophy-lifting.avif"
                alt="Football Champions"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-purple">Sports</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >March 5, 2026</span
                >
              </div>
              <h4>
                Nova Heights Wins East Africa Schools Football Championship
              </h4>
              <p>
                Our Senior School football team clinched the regional title,
                undefeated across 12 matches this season.
              </p>
              <a href="#" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up" data-filter-cat="community">
            <div class="news-card-img-wrap">
              <img
                src="images/fund-raising.avif"
                alt="Charity Drive"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-teal">Community</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >Feb 28, 2026</span
                >
              </div>
              <h4>Students Raise KSh 2M in Annual Charity Drive</h4>
              <p>
                This year's charity campaign exceeded all expectations,
                benefiting three local primary schools in Kibera.
              </p>
              <a href="#" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up" data-filter-cat="news">
            <div class="news-card-img-wrap">
              <img
                src="images/innovationlabs.avif"
                alt="Innovation Hub"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-gold">News</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >Feb 20, 2026</span
                >
              </div>
              <h4>New Innovation Hub to Open in September 2026</h4>
              <p>
                A state-of-the-art KSh 150M Innovation Hub featuring AI labs,
                robotics, and maker spaces is coming to campus.
              </p>
              <a href="#" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up" data-filter-cat="academic">
            <div class="news-card-img-wrap">
              <img
                src="images/scholarship-ceremony.avif"
                alt="Scholarships"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-blue">Academic</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >Feb 10, 2026</span
                >
              </div>
              <h4>15 Students Win International Scholarship Awards</h4>
              <p>
                Nova Heights graduates secure full scholarships to universities
                in the UK, USA, Canada, and Australia.
              </p>
              <a href="#" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up" data-filter-cat="sports">
            <div class="news-card-img-wrap">
              <img
                src="images/swimming.avif"
                alt="Swimming"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-purple">Sports</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >Jan 30, 2026</span
                >
              </div>
              <h4>Swimming Team Breaks Three National Records</h4>
              <p>
                Our swimming programme continues to dominate with three national
                records broken at the Kenya Schools Games.
              </p>
              <a href="#" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <?php include("includes/footer.php"); include("includes/html_z.php"); ?>
