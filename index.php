<?php 
include("includes/html_a.php");
include("includes/header.php");
?>
    <!-- ═══ HERO ═══ -->
    <section class="home-hero" id="hero">
      <img
        src="images/hero-img-1.avif"
        alt="Nova Heights students"
        class="hero-bg-img"
        loading="eager"
      />
      <div class="hero-overlay"></div>

      <div class="container hero-content">
        <div style="max-width: 720px">
          <div class="hero-label">
            <span class="hero-dot"></span>
            Nairobi's Premier International School
          </div>
          <h1 class="hero-title">
            Educating Leaders of
            <span class="hero-accent">Tomorrow's World</span>
          </h1>
          <p class="hero-desc">
            Nova Heights delivers a transformative education blending academic
            rigour, character development, and global citizenship — preparing
            every student to thrive and lead.
          </p>
          <div class="hero-actions">
            <a href="admissions.php" class="btn btn-primary"
              >Apply for Admission</a
            >
            <a href="about.php" class="btn btn-outline-light"
              >Explore Our Story</a
            >
          </div>
          <!-- <div class="hero-stats">
        <div class="hero-stat-item">
          <span class="stat-num" data-count="2400" data-suffix="+">0</span>
          <span class="stat-label">Students Enrolled</span>
        </div>
        <div class="hero-stat-item">
          <span class="stat-num" data-count="25" data-suffix="+">0</span>
          <span class="stat-label">Years of Excellence</span>
        </div>
        <div class="hero-stat-item">
          <span class="stat-num" data-count="48" data-suffix="">0</span>
          <span class="stat-label">Nationalities</span>
        </div>
        <div class="hero-stat-item">
          <span class="stat-num" data-count="98" data-suffix="%">0</span>
          <span class="stat-label">University Placement</span>
        </div>
      </div> -->
        </div>
      </div>
      <div class="scroll-indicator">
        <div class="scroll-line"></div>
        <span>Scroll</span>
      </div>
    </section>

    <!-- ═══ STATS BAR ═══ -->
    <section style="background: var(--forest); padding: 2.5rem 0">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-block anim-fade-up">
            <span class="num" data-count="200" data-suffix="+">0</span
            ><span class="lbl">Qualified Educators</span>
          </div>
          <div class="stat-block anim-fade-up">
            <span class="num" data-count="35" data-suffix="">0</span
            ><span class="lbl">Co-curricular Clubs</span>
          </div>
          <div class="stat-block anim-fade-up">
            <span class="num" data-count="12" data-suffix="">0</span
            ><span class="lbl">World-Class Facilities</span>
          </div>
          <div class="stat-block anim-fade-up">
            <span class="num" data-count="100" data-suffix="%">0</span
            ><span class="lbl">Safe Campus Commitment</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ OUR SCHOOLS ═══ -->
    <section class="section-pad" style="background: var(--cream)">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3.5rem">
          <span class="section-label anim-fade-up">Our Schools</span>
          <h2 class="anim-fade-up" style="transition-delay: 0.1s">
            A School for <span class="section-title">Every Stage</span>
          </h2>
          <p
            class="section-desc anim-fade-up"
            style="margin: 1rem auto 0; transition-delay: 0.2s"
          >
            From first steps to final exams, Nova Heights provides a nurturing,
            world-class environment tailored to each phase of your child's
            journey.
          </p>
        </div>
        <div class="grid-4 stagger">
          <a href="kindergarten.php" class="division-card anim-scale-in">
            <div class="division-icon bg-terra">
              <i class="fa-solid fa-seedling" aria-hidden="true"></i>
            </div>
            <h3>Kindergarten</h3>
            <p class="grade-tag">Ages 3 – 6</p>
            <p style="font-size: 0.875rem">
              Play-based learning that sparks curiosity and builds the
              foundation for a lifetime of growth.
            </p>
            <span class="card-arrow"
              >Explore <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
            ></span>
          </a>
          <a href="junior.php" class="division-card anim-scale-in">
            <div class="division-icon bg-forest">
              <i class="fa-solid fa-book-open" aria-hidden="true"></i>
            </div>
            <h3>Junior School</h3>
            <p class="grade-tag">Grades 1 – 6</p>
            <p style="font-size: 0.875rem">
              Rigorous academics alongside arts, sports, and leadership to
              develop well-rounded individuals.
            </p>
            <span class="card-arrow" style="color: var(--forest-light)"
              >Explore <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
            ></span>
          </a>
          <a href="senior.php" class="division-card anim-scale-in">
            <div class="division-icon bg-teal">
              <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
            </div>
            <h3>Senior School</h3>
            <p class="grade-tag">Grades 7 – 12</p>
            <p style="font-size: 0.875rem">
              Cambridge IGCSE &amp; A-Level pathways preparing students for top
              global universities.
            </p>
            <span class="card-arrow" style="color: var(--forest-mid)"
              >Explore <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
            ></span>
          </a>
          <a href="alumni.php" class="division-card anim-scale-in">
            <div class="division-icon bg-gold">
              <i class="fa-solid fa-star" aria-hidden="true"></i>
            </div>
            <h3>Alumni</h3>
            <p class="grade-tag">Lifelong Community</p>
            <p style="font-size: 0.875rem">
              A vibrant global network of distinguished graduates shaping
              industries and communities.
            </p>
            <span class="card-arrow" style="color: var(--gold)"
              >Explore <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
            ></span>
          </a>
        </div>
      </div>
    </section>

    <!-- ═══ CAMPUS LIFE PHOTO STRIP ═══ -->
    <section style="background: var(--forest); padding: var(--section-pad) 0">
      <div class="container">
        <div
          class="mob-stack"
          style="
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 3rem;
          "
        >
          <div>
            <span
              class="section-label anim-slide-left"
              style="color: var(--gold-light)"
            >
              <span
                style="
                  background: var(--gold-light);
                  width: 24px;
                  height: 2px;
                  display: inline-block;
                  margin-right: 0.5rem;
                "
              ></span>
              Campus Life
            </span>
            <h2
              class="anim-slide-left"
              style="
                color: var(--cream);
                transition-delay: 0.1s;
                margin-bottom: 1rem;
              "
            >
              Life at
              <span style="color: var(--gold-light); font-style: italic"
                >Nova Heights</span
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
              From the lab to the playing field, from the stage to the classroom
              — every day at Nova Heights is an opportunity to discover, create,
              and connect.
            </p>
            <a
              href="gallery.php"
              class="btn btn-outline-light anim-slide-left"
              style="transition-delay: 0.3s"
              >View Full Gallery
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
          <div class="anim-slide-right">
            <div class="photo-strip">
              <div class="photo-strip-item tall">
                <img
                  src="images/lab-1.avif"
                  alt="Students in lab"
                  loading="lazy"
                />
                <div class="photo-caption">Science Lab</div>
              </div>
              <div class="photo-strip-item">
                <img
                  src="images/students.avif"
                  alt="Students studying"
                  loading="lazy"
                  style="height: 100%; min-height: 160px"
                />
                <div class="photo-caption">Learning Together</div>
              </div>
              <div class="photo-strip-item">
                <img
                  src="images/sports.avif"
                  alt="Sports activity"
                  loading="lazy"
                  style="height: 100%; min-height: 160px"
                />
                <div class="photo-caption">Sports &amp; Athletics</div>
              </div>
              <div class="photo-strip-item">
                <img
                  src="images/hero-img.avif"
                  alt="Arts class"
                  loading="lazy"
                  style="height: 100%; min-height: 160px"
                />
                <div class="photo-caption">Creative Arts</div>
              </div>
              <div class="photo-strip-item">
                <img
                  src="images/community.avif"
                  alt="Community outreach"
                  loading="lazy"
                  style="height: 100%; min-height: 160px"
                />
                <div class="photo-caption">Community Service</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ WHY NOVA ═══ -->
    <section class="section-pad" style="background: var(--warm-white)">
      <div class="container">
        <div
          class="mob-stack"
          style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
          "
        >
          <div class="anim-slide-right" style="position: relative">
            <div
              style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.5rem"
            >
              <div
                style="
                  border-radius: var(--radius-lg);
                  overflow: hidden;
                  aspect-ratio: 3/4;
                  grid-row: span 2;
                "
              >
                <img
                  src="images/studentsleader.avif"
                  alt="Student leader"
                  style="width: 100%; height: 100%; object-fit: cover"
                />
              </div>
              <div style="border-radius: var(--radius-lg); overflow: hidden">
                <img
                  src="images/modernclass.avif"
                  alt="Modern classroom"
                  style="width: 100%; height: 100%; object-fit: cover"
                />
              </div>
              <div style="border-radius: var(--radius-lg); overflow: hidden">
                <img
                  src="images/admission2.avif"
                  alt="Graduation"
                  style="width: 100%; height: 100%; object-fit: cover"
                />
              </div>
            </div>
            <!-- Floating badge -->
            <div
              class="glass-card float why-badge"
              style="
                position: absolute;
                bottom: -1rem;
                right: -1rem;
                padding: 1.25rem 1.5rem;
                min-width: 180px;
                z-index: 2;
              "
            >
              <div style="font-size: 1.5rem; margin-bottom: 0.3rem">
                <i class="fa-solid fa-school" aria-hidden="true"></i>
              </div>
              <p
                style="
                  font-family: var(--font-display);
                  font-size: 1.4rem;
                  font-weight: 800;
                  color: var(--terracotta);
                  line-height: 1;
                "
              >
                Top 5
              </p>
              <p
                style="
                  font-size: 0.78rem;
                  color: var(--ink-faint);
                  margin-top: 0.2rem;
                "
              >
                International Schools<br />in East Africa 2025
              </p>
            </div>
          </div>
          <div>
            <span class="section-label anim-slide-left">Why Choose Us</span>
            <h2
              class="anim-slide-left"
              style="transition-delay: 0.1s; margin-bottom: 1.25rem"
            >
              Where <span class="section-title">Excellence</span><br />Meets
              Opportunity
            </h2>
            <p
              class="anim-slide-left"
              style="transition-delay: 0.2s; margin-bottom: 2rem"
            >
              At Nova Heights, we don't just teach subjects — we cultivate
              global thinkers, compassionate leaders, and innovative
              problem-solvers ready for the challenges ahead.
            </p>
            <div
              style="display: flex; flex-direction: column; gap: 1rem"
              class="stagger"
            >
              <div
                class="value-card anim-fade-up"
                style="
                  padding: 1.25rem;
                  display: flex;
                  gap: 1rem;
                  align-items: flex-start;
                "
              >
                <span style="font-size: 1.4rem; flex-shrink: 0"
                  ><i class="fa-solid fa-earth-africa" aria-hidden="true"></i
                ></span>
                <div>
                  <h5 style="margin-bottom: 0.25rem; font-size: 0.95rem">
                    International Curriculum
                  </h5>
                  <p style="font-size: 0.85rem">
                    Cambridge IGCSE, A-Level &amp; IB-aligned programmes
                    recognised worldwide.
                  </p>
                </div>
              </div>
              <div
                class="value-card anim-fade-up"
                style="
                  padding: 1.25rem;
                  display: flex;
                  gap: 1rem;
                  align-items: flex-start;
                "
              >
                <span style="font-size: 1.4rem; flex-shrink: 0"
                  ><i class="fa-solid fa-trophy" aria-hidden="true"></i
                ></span>
                <div>
                  <h5 style="margin-bottom: 0.25rem; font-size: 0.95rem">
                    Award-Winning Faculty
                  </h5>
                  <p style="font-size: 0.85rem">
                    200+ dedicated educators with postgraduate qualifications
                    from top institutions.
                  </p>
                </div>
              </div>
              <div
                class="value-card anim-fade-up"
                style="
                  padding: 1.25rem;
                  display: flex;
                  gap: 1rem;
                  align-items: flex-start;
                "
              >
                <span style="font-size: 1.4rem; flex-shrink: 0"
                  ><i class="fa-solid fa-handshake" aria-hidden="true"></i
                ></span>
                <div>
                  <h5 style="margin-bottom: 0.25rem; font-size: 0.95rem">
                    Holistic Development
                  </h5>
                  <p style="font-size: 0.85rem">
                    35+ clubs and societies ensuring every student discovers and
                    grows their passion.
                  </p>
                </div>
              </div>
            </div>
            <div style="margin-top: 2rem" class="anim-fade-up">
              <a href="about.php" class="btn btn-primary"
                >Learn More About Us</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ ACTIVITIES SHOWCASE ═══ -->
    <section class="section-pad" style="background: var(--cream-dark)">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <span class="section-label anim-fade-up">Student Life</span>
          <h2 class="anim-fade-up" style="transition-delay: 0.1s">
            Activities &amp; <span class="section-title">Achievements</span>
          </h2>
          <p
            class="section-desc anim-fade-up"
            style="margin: 1rem auto 0; transition-delay: 0.2s"
          >
            From championship sports to award-winning science, our students
            excel in everything they pursue.
          </p>
        </div>
        <div
          class="stagger act-grid"
          style="
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto auto;
            gap: 0.75rem;
          "
        >
          <!-- Large feature tile -->
          <div
            class="anim-scale-in act-feat"
            style="
              grid-column: span 2;
              border-radius: var(--radius-xl);
              overflow: hidden;
              position: relative;
              aspect-ratio: 16/9;
            "
          >
            <img
              src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=900&q=85&auto=format&fit=crop"
              alt="Academic excellence"
              style="width: 100%; height: 100%; object-fit: cover"
            />
            <div
              style="
                position: absolute;
                inset: 0;
                background: linear-gradient(
                  to top,
                  rgba(26, 46, 26, 0.85) 0%,
                  transparent 55%
                );
              "
            ></div>
            <div
              style="position: absolute; bottom: 0; left: 0; padding: 1.75rem"
            >
              <span class="badge badge-gold" style="margin-bottom: 0.5rem"
                >Academic</span
              >
              <h3 style="color: var(--cream); font-size: 1.35rem; margin: 0">
                96% A*–B Grades at IGCSE 2025
              </h3>
              <p
                style="
                  color: rgba(250, 247, 242, 0.7);
                  font-size: 0.85rem;
                  margin-top: 0.4rem;
                "
              >
                Class of 2025 outperforms global benchmarks
              </p>
            </div>
          </div>
          <!-- Side tile -->
          <div
            class="anim-scale-in"
            style="
              border-radius: var(--radius-xl);
              overflow: hidden;
              position: relative;
            "
          >
            <img
              src="images/sports3.avif"
              alt="Sports champions"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                min-height: 260px;
              "
            />
            <div
              style="
                position: absolute;
                inset: 0;
                background: linear-gradient(
                  to top,
                  rgba(26, 46, 26, 0.85) 0%,
                  transparent 55%
                );
              "
            ></div>
            <div
              style="position: absolute; bottom: 0; left: 0; padding: 1.25rem"
            >
              <span class="badge badge-terra" style="margin-bottom: 0.5rem"
                >Sports</span
              >
              <h4 style="color: var(--cream); font-size: 1rem; margin: 0">
                East Africa Football Champions
              </h4>
            </div>
          </div>
          <!-- Bottom row -->
          <div
            class="anim-scale-in"
            style="
              border-radius: var(--radius-xl);
              overflow: hidden;
              position: relative;
            "
          >
            <img
              src="images/robotics.avif"
              alt="Science innovation"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                min-height: 220px;
              "
            />
            <div
              style="
                position: absolute;
                inset: 0;
                background: linear-gradient(
                  to top,
                  rgba(26, 46, 26, 0.85) 0%,
                  transparent 55%
                );
              "
            ></div>
            <div
              style="position: absolute; bottom: 0; left: 0; padding: 1.25rem"
            >
              <span class="badge badge-forest" style="margin-bottom: 0.5rem"
                >Innovation</span
              >
              <h4 style="color: var(--cream); font-size: 1rem; margin: 0">
                AI &amp; Robotics Programme
              </h4>
            </div>
          </div>
          <div
            class="anim-scale-in"
            style="
              border-radius: var(--radius-xl);
              overflow: hidden;
              position: relative;
            "
          >
            <img
              src="images/arts_converted.avif"
              alt="Arts programme"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                min-height: 220px;
              "
            />
            <div
              style="
                position: absolute;
                inset: 0;
                background: linear-gradient(
                  to top,
                  rgba(26, 46, 26, 0.85) 0%,
                  transparent 55%
                );
              "
            ></div>
            <div
              style="position: absolute; bottom: 0; left: 0; padding: 1.25rem"
            >
              <span class="badge badge-teal" style="margin-bottom: 0.5rem"
                >Arts</span
              >
              <h4 style="color: var(--cream); font-size: 1rem; margin: 0">
                Performing Arts Centre
              </h4>
            </div>
          </div>
          <div
            class="anim-scale-in"
            style="
              border-radius: var(--radius-xl);
              overflow: hidden;
              position: relative;
            "
          >
            <img
              src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=500&q=85&auto=format&fit=crop"
              alt="Community impact"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                min-height: 220px;
              "
            />
            <div
              style="
                position: absolute;
                inset: 0;
                background: linear-gradient(
                  to top,
                  rgba(26, 46, 26, 0.85) 0%,
                  transparent 55%
                );
              "
            ></div>
            <div
              style="position: absolute; bottom: 0; left: 0; padding: 1.25rem"
            >
              <span class="badge badge-forest" style="margin-bottom: 0.5rem"
                >Community</span
              >
              <h4 style="color: var(--cream); font-size: 1rem; margin: 0">
                KSh 2M Charity Drive 2025
              </h4>
            </div>
          </div>
        </div>
        <div style="margin-top: 2rem; text-align: center" class="anim-fade-up">
          <a href="activities-achievements.php" class="btn btn-primary"
            >Explore All Activities</a
          >
        </div>
      </div>
    </section>

    <!-- ═══ LATEST NEWS ═══ -->
    <section class="section-pad" style="background: var(--warm-white)">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3.5rem">
          <span class="section-label anim-fade-up">Latest Updates</span>
          <h2 class="anim-fade-up" style="transition-delay: 0.1s">
            News &amp; <span class="section-title">Events</span>
          </h2>
        </div>
        <div class="grid-3 stagger">
          <article class="news-card anim-fade-up">
            <div class="news-card-img-wrap">
              <img
                src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80&auto=format&fit=crop"
                alt="IGCSE results"
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
                96% achieving A*–B grades.
              </p>
              <a href="news-events.php" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up">
            <div class="news-card-img-wrap">
              <img
                src="https://images.unsplash.com/photo-1546519638-68e109498ffc?w=600&q=80&auto=format&fit=crop"
                alt="Football champions"
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
                undefeated across 12 matches.
              </p>
              <a href="news-events.php" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
          <article class="news-card anim-fade-up">
            <div class="news-card-img-wrap">
              <img
                src="images/scholarship.avif"
                alt="Scholarships"
                class="news-card-img"
                loading="lazy"
              />
            </div>
            <div class="news-card-body">
              <div class="news-card-meta">
                <span class="badge badge-teal">Achievement</span
                ><span style="font-size: 0.78rem; color: var(--ink-faint)"
                  >Feb 10, 2026</span
                >
              </div>
              <h4>15 Students Win International Scholarship Awards</h4>
              <p>
                Nova Heights graduates secure full scholarships to universities
                in the UK, USA, Canada, and Australia.
              </p>
              <a href="news-events.php" class="news-card-link"
                >Read More
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </article>
        </div>
        <div style="margin-top: 2rem; text-align: center" class="anim-fade-up">
          <a href="news-events.php" class="btn btn-primary"
            >View All News &amp; Events</a
          >
        </div>
      </div>
    </section>

    <!-- ═══ TESTIMONIALS ═══ -->
    <section class="section-pad" style="background: var(--cream-dark)">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <span class="section-label anim-fade-up">Testimonials</span>
          <h2 class="anim-fade-up" style="transition-delay: 0.1s">
            Voices from Our <span class="section-title">Community</span>
          </h2>
        </div>
        <div class="testimonial-slider anim-scale-in">
          <div class="testimonial-track">
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div class="quote-icon">"</div>
                <blockquote>
                  "Nova Heights didn't just prepare my son academically — it
                  shaped him into a confident, empathetic young man. The
                  teachers genuinely care about every child's growth."
                </blockquote>
                <div class="testimonial-author">
                  <img
                    src="images/parent.avif"
                    alt="Sarah Mwangi"
                    class="author-avatar"
                  />
                  <div class="author-info">
                    <p class="name">Sarah Mwangi</p>
                    <p class="role">Parent of Grade 9 Student</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div class="quote-icon">"</div>
                <blockquote>
                  "The Cambridge programme at Nova Heights gave me the edge I
                  needed to secure a scholarship at the University of Edinburgh.
                  I couldn't be more grateful."
                </blockquote>
                <div class="testimonial-author">
                  <img
                    src="images/david.avif"
                    alt="David Kimani"
                    class="author-avatar"
                  />
                  <div class="author-info">
                    <p class="name">David Kimani</p>
                    <p class="role">Class of 2023 Alumnus</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div class="quote-icon">"</div>
                <blockquote>
                  "As a teacher, I'm inspired every day by the ambition and
                  creativity of our students. Nova Heights truly lives its
                  mission of nurturing tomorrow's leaders."
                </blockquote>
                <div class="testimonial-author">
                  <img
                    src="images/fatima.avif"
                    alt="Fatima Odhiambo"
                    class="author-avatar"
                  />
                  <div class="author-info">
                    <p class="name">Fatima Odhiambo</p>
                    <p class="role">Head of Science Department</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-controls">
            <button class="slider-btn prev">
              <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
            </button>
            <div class="slider-dot active" data-index="0"></div>
            <div class="slider-dot" data-index="1"></div>
            <div class="slider-dot" data-index="2"></div>
            <button class="slider-btn next">
              <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ CTA ═══ -->
    <section
      style="
        background: var(--forest);
        padding: var(--section-pad) 0;
        position: relative;
        overflow: hidden;
      "
    >
      <div style="position: absolute; inset: 0">
        <img
          src="https://images.unsplash.com/photo-1529390079861-591de354faf5?w=1920&q=60&auto=format&fit=crop"
          alt=""
          style="width: 100%; height: 100%; object-fit: cover; opacity: 0.15"
        />
      </div>
      <div class="container" style="position: relative; z-index: 1">
        <div
          class="anim-scale-in"
          style="text-align: center; max-width: 680px; margin: 0 auto"
        >
          <span
            class="section-label"
            style="justify-content: center; color: var(--gold-light)"
            >Begin Your Journey</span
          >
          <h2
            style="
              color: var(--cream);
              font-size: clamp(1.8rem, 4vw, 3.2rem);
              margin-bottom: 1rem;
            "
          >
            Ready to Join the
            <span style="color: var(--gold-light); font-style: italic"
              >Nova Heights</span
            >
            Family?
          </h2>
          <p
            style="
              color: rgba(250, 247, 242, 0.65);
              max-width: 520px;
              margin: 0 auto 2.5rem;
              font-size: 1.05rem;
            "
          >
            Applications for the 2026–27 academic year are now open. Secure your
            child's place at one of East Africa's finest international schools.
          </p>
          <div
            class="cta-btns"
            style="
              display: flex;
              gap: 1rem;
              justify-content: center;
              flex-wrap: wrap;
            "
          >
            <a href="admissions.php" class="btn btn-primary">Apply Now</a>
            <a href="contact.php" class="btn btn-outline-light"
              >Book a School Tour</a
            >
          </div>
        </div>
      </div>
    </section>

    <?php
    include("includes/footer.php");
    include("includes/html_z.php");
    ?>