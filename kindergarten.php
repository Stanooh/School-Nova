<?php include("includes/html_a.php"); ?>
<?php include("includes/header.php"); ?>

    <!-- HERO -->
    <section class="kg-hero">
      <div class="kg-hero-blob b1"></div>
      <div class="kg-hero-blob b2"></div>
      <div class="kg-hero-blob b3"></div>
      <div class="container">
        <div class="kg-hero-grid">
          <div class="anim-slide-left">
            <div class="futuristic-badge">
              <span class="badge-dot"></span>Ages 3 – 6 · PP1 to Grade 1
            </div>
            <h1 class="kg-hero-title">
              Where Little Minds<br /><span class="glow">Begin to Shine</span>
            </h1>
            <p class="kg-hero-desc">
              Nova Heights Kindergarten is a world where curiosity is
              celebrated, play is the curriculum, and every child discovers the
              joy of learning — surrounded by warmth, colour, and wonder.
            </p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap">
              <a href="admissions.php" class="btn btn-primary">Enrol Now</a>
              <a href="contact.php" class="btn btn-outline-light"
                >Book a Visit</a
              >
            </div>
            <div
              style="
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
              "
            >
              <div class="stat-glow">
                <p class="num" data-count="320" data-suffix="+">0</p>
                <p class="lbl">Learners</p>
              </div>
              <div class="stat-glow">
                <p class="num" data-count="18" data-suffix="">0</p>
                <p class="lbl">Educators</p>
              </div>
              <div class="stat-glow">
                <p class="num" data-count="12" data-suffix="">0</p>
                <p class="lbl">Activity Clubs</p>
              </div>
            </div>
          </div>
          <div class="photo-stack anim-slide-right">
            <div class="photo-stack-img ps-main">
              <img
                src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&q=85&auto=format&fit=crop"
                alt="Kindergarten learning"
              />
            </div>
            <div class="photo-stack-img ps-side1">
              <img
                src="images/kind1.avif"
                alt="Children playing"
              />
            </div>
            <div class="photo-stack-img ps-side2">
              <img
                src="images/kind2.avif"
                alt="Art activity"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT THE PROGRAMME -->
    <section
      style="
        background: linear-gradient(180deg, #0a1628, #081420);
        padding: var(--section-pad) 0;
      "
    >
      <div class="container">
        <div class="text-center" style="margin-bottom: 3.5rem">
          <span class="section-label anim-fade-up" style="color: var(--k-green)"
            >Our Approach</span
          >
          <h2 class="anim-fade-up" style="color: #fff; transition-delay: 0.1s">
            A <span style="color: var(--k-green)">Holistic</span> Early Years<br />Programme
          </h2>
          <p
            class="section-desc anim-fade-up"
            style="
              color: rgba(255, 255, 255, 0.55);
              margin: 1rem auto 0;
              transition-delay: 0.2s;
            "
          >
            We blend Cambridge Early Years with Kenya's CBC to nurture the whole
            child — intellectually, physically, socially and creatively.
          </p>
        </div>
        <div
          style="
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
          "
          class="stagger"
        >
          <div class="prog-card anim-scale-in">
            <div class="icon">
              <i class="fa-solid fa-palette" aria-hidden="true"></i>
            </div>
            <h4>Creative Arts</h4>
            <p>
              Painting, sculpting, music, and movement — children express
              themselves freely in our dedicated arts studio every day.
            </p>
          </div>
          <div class="prog-card anim-scale-in">
            <div class="icon">
              <i class="fa-solid fa-hashtag" aria-hidden="true"></i>
            </div>
            <h4>Early Numeracy</h4>
            <p>
              Hands-on maths with counting blocks, puzzles and real-world
              scenarios that make numbers exciting and meaningful.
            </p>
          </div>
          <div class="prog-card anim-scale-in">
            <div class="icon">
              <i class="fa-solid fa-book" aria-hidden="true"></i>
            </div>
            <h4>Literacy &amp; Language</h4>
            <p>
              Phonics, storytelling, and reading circles build a love for
              language in both English and Swahili from day one.
            </p>
          </div>
          <div class="prog-card anim-scale-in">
            <div class="icon">
              <i class="fa-solid fa-leaf" aria-hidden="true"></i>
            </div>
            <h4>Nature Discovery</h4>
            <p>
              Our outdoor garden classrooms let children explore plants, insects
              and the natural world in a safe, stimulating environment.
            </p>
          </div>
          <div class="prog-card anim-scale-in">
            <div class="icon">
              <i class="fa-solid fa-child-reaching" aria-hidden="true"></i>
            </div>
            <h4>Physical Development</h4>
            <p>
              Daily PE, dance, and free play develop motor skills, coordination,
              and healthy habits from the very beginning.
            </p>
          </div>
          <div class="prog-card anim-scale-in">
            <div class="icon">
              <i class="fa-solid fa-puzzle-piece" aria-hidden="true"></i>
            </div>
            <h4>Social &amp; Emotional</h4>
            <p>
              Collaborative play and guided group activities build empathy,
              resilience, and the confidence to communicate and lead.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- IMAGE + CONTENT: Classroom Life -->
    <section style="padding: var(--section-pad) 0; background: #060e1a">
      <div class="container">
        <div class="img-content-strip anim-scale-in">
          <div class="ics-img">
            <img
              src="images/classroom.avif"
              alt="Children in classroom"
            />
            <div class="ics-img-overlay"></div>
            <div style="position: absolute; bottom: 2rem; left: 2rem">
              <span
                style="
                  background: rgba(46, 204, 113, 0.2);
                  border: 1px solid rgba(46, 204, 113, 0.4);
                  color: var(--k-green);
                  padding: 0.3rem 0.75rem;
                  border-radius: 100px;
                  font-size: 0.75rem;
                  font-weight: 700;
                "
                >Smart Classrooms</span
              >
            </div>
          </div>
          <div class="ics-content dark">
            <span
              style="
                color: var(--k-green);
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
              "
              ><span
                style="
                  width: 20px;
                  height: 2px;
                  background: var(--k-green);
                  display: block;
                "
              ></span
              >Classroom Experience</span
            >
            <h2
              style="
                color: #fff;
                margin-bottom: 1rem;
                font-size: clamp(1.6rem, 3vw, 2.4rem);
              "
            >
              Learning That
              <span style="color: var(--k-green)">Feels Like Play</span>
            </h2>
            <p
              style="
                color: rgba(255, 255, 255, 0.6);
                margin-bottom: 1.25rem;
                line-height: 1.75;
              "
            >
              Our bright, tech-enabled classrooms are designed around
              child-sized spaces filled with tactile learning stations,
              interactive whiteboards, and cosy reading corners that encourage
              exploration at every turn.
            </p>
            <p
              style="
                color: rgba(255, 255, 255, 0.6);
                margin-bottom: 2rem;
                line-height: 1.75;
              "
            >
              Maximum class size of
              <strong style="color: var(--k-yellow)">15 children</strong>,
              ensuring each child gets individual attention and a truly
              personalised learning journey.
            </p>
            <div style="display: flex; gap: 1.5rem; flex-wrap: wrap">
              <div>
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 2rem;
                    font-weight: 800;
                    color: var(--k-green);
                    line-height: 1;
                  "
                >
                  15:1
                </p>
                <p
                  style="
                    font-size: 0.75rem;
                    color: rgba(255, 255, 255, 0.4);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                  "
                >
                  Student-Teacher Ratio
                </p>
              </div>
              <div>
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 2rem;
                    font-weight: 800;
                    color: var(--k-yellow);
                    line-height: 1;
                  "
                >
                  8
                </p>
                <p
                  style="
                    font-size: 0.75rem;
                    color: rgba(255, 255, 255, 0.4);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                  "
                >
                  Learning Stations
                </p>
              </div>
              <div>
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 2rem;
                    font-weight: 800;
                    color: var(--k-pink);
                    line-height: 1;
                  "
                >
                  5
                </p>
                <p
                  style="
                    font-size: 0.75rem;
                    color: rgba(255, 255, 255, 0.4);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                  "
                >
                  Specialist Teachers
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Reversed strip: Activities & Outdoors -->
        <div class="img-content-strip anim-scale-in" style="direction: rtl">
          <div class="ics-img" style="direction: ltr">
            <img
              src="images/kind3.avif"
              alt="Outdoor activities"
            />
            <div class="ics-img-overlay"></div>
            <div style="position: absolute; bottom: 2rem; left: 2rem">
              <span
                style="
                  background: rgba(249, 202, 36, 0.2);
                  border: 1px solid rgba(249, 202, 36, 0.4);
                  color: var(--k-yellow);
                  padding: 0.3rem 0.75rem;
                  border-radius: 100px;
                  font-size: 0.75rem;
                  font-weight: 700;
                "
                >Outdoor Education</span
              >
            </div>
          </div>
          <div class="ics-content dark" style="direction: ltr">
            <span
              style="
                color: var(--k-yellow);
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
              "
              ><span
                style="
                  width: 20px;
                  height: 2px;
                  background: var(--k-yellow);
                  display: block;
                "
              ></span
              >Life Beyond the Classroom</span
            >
            <h2
              style="
                color: #fff;
                margin-bottom: 1rem;
                font-size: clamp(1.6rem, 3vw, 2.4rem);
              "
            >
              Adventure in Every
              <span style="color: var(--k-yellow)">Corner</span>
            </h2>
            <p
              style="
                color: rgba(255, 255, 255, 0.6);
                margin-bottom: 1.25rem;
                line-height: 1.75;
              "
            >
              From our sensory garden to the splash park, children discover the
              world through play, fresh air, and guided outdoor experiments that
              spark genuine scientific curiosity.
            </p>
            <ul
              style="
                display: flex;
                flex-direction: column;
                gap: 0.6rem;
                list-style: none;
                padding: 0;
              "
            >
              <li
                style="
                  display: flex;
                  align-items: center;
                  gap: 0.75rem;
                  color: rgba(255, 255, 255, 0.65);
                  font-size: 0.875rem;
                "
              >
                <span style="color: var(--k-yellow)"
                  ><i class="fa-solid fa-star" aria-hidden="true"></i
                ></span>
                Nature walk trails &amp; vegetable garden
              </li>
              <li
                style="
                  display: flex;
                  align-items: center;
                  gap: 0.75rem;
                  color: rgba(255, 255, 255, 0.65);
                  font-size: 0.875rem;
                "
              >
                <span style="color: var(--k-yellow)"
                  ><i class="fa-solid fa-star" aria-hidden="true"></i
                ></span>
                Sand &amp; water play zones
              </li>
              <li
                style="
                  display: flex;
                  align-items: center;
                  gap: 0.75rem;
                  color: rgba(255, 255, 255, 0.65);
                  font-size: 0.875rem;
                "
              >
                <span style="color: var(--k-yellow)"
                  ><i class="fa-solid fa-star" aria-hidden="true"></i
                ></span>
                Supervised climbing &amp; balance equipment
              </li>
              <li
                style="
                  display: flex;
                  align-items: center;
                  gap: 0.75rem;
                  color: rgba(255, 255, 255, 0.65);
                  font-size: 0.875rem;
                "
              >
                <span style="color: var(--k-yellow)"
                  ><i class="fa-solid fa-star" aria-hidden="true"></i
                ></span>
                Weekly nature journalling activities
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ACTIVITIES MOSAIC -->
    <section style="padding: var(--section-pad) 0; background: #050d18">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <span class="section-label anim-fade-up" style="color: var(--k-green)"
            >Gallery</span
          >
          <h2 class="anim-fade-up" style="color: #fff; transition-delay: 0.1s">
            A Day in <span style="color: var(--k-green)">Kindergarten</span>
          </h2>
        </div>
        <div class="activity-mosaic anim-scale-in">
          <div class="am-item tall">
            <img
              src="images/kind4.avif"
              alt="Group learning"
            />
            <div class="am-label">
              <i class="fa-solid fa-book-open" aria-hidden="true"></i> Story
              Time &amp; Group Learning
            </div>
          </div>
          <div class="am-item">
            <img
              src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500&q=85&auto=format&fit=crop"
              alt="Art class"
            />
            <div class="am-label">
              <i class="fa-solid fa-palette" aria-hidden="true"></i> Creative
              Arts
            </div>
          </div>
          <div class="am-item">
            <img
              src="images/kind5.avif"
              alt="Community learning"
            />
            <div class="am-label">
              <i class="fa-solid fa-handshake" aria-hidden="true"></i> Community
              Values
            </div>
          </div>
          <div class="am-item">
            <img
              src="images/small-lab.avif"
              alt="Science exploration"
            />
            <div class="am-label">
              <i class="fa-solid fa-microscope" aria-hidden="true"></i> Early
              Science
            </div>
          </div>
          <div class="am-item">
            <img
              src="images/kind6.avif"
              alt="Music and movement"
            />
            <div class="am-label">
              <i class="fa-solid fa-music" aria-hidden="true"></i> Music &amp;
              Movement
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TEACHERS -->
    <section
      style="
        padding: var(--section-pad) 0;
        background: linear-gradient(180deg, #060e1a, #0a1628);
      "
    >
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <span class="section-label anim-fade-up" style="color: var(--k-green)"
            >Our Team</span
          >
          <h2 class="anim-fade-up" style="color: #fff; transition-delay: 0.1s">
            Dedicated <span style="color: var(--k-green)">Educators</span>
          </h2>
        </div>
        <div
          style="
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
          "
          class="stagger"
        >
          <div class="teacher-card anim-scale-in">
            <img src="images/ms.Aisha.avif" alt="Teacher" />
            <div class="teacher-card-body">
              <h4>Ms. Aisha Kamau</h4>
              <p>Head of Kindergarten</p>
            </div>
          </div>
          <div class="teacher-card anim-scale-in">
            <img src="images/brenda.avif" alt="Teacher" />
            <div class="teacher-card-body">
              <h4>Ms. Brenda Odhiambo</h4>
              <p>Early Years Specialist</p>
            </div>
          </div>
          <div class="teacher-card anim-scale-in">
            <img src="images/emeka.avif" alt="Teacher" />
            <div class="teacher-card-body">
              <h4>Mr. Emeka Nwosu</h4>
              <p>Creative Arts &amp; Music</p>
            </div>
          </div>
          <div class="teacher-card anim-scale-in">
            <img src="images/nadia.avif" alt="Teacher" />
            <div class="teacher-card-body">
              <h4>Ms. Nadia Waweru</h4>
              <p>Literacy &amp; Language</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section style="padding: var(--section-pad) 0; background: #050d18">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <span class="section-label anim-fade-up" style="color: var(--k-green)"
            >Parent Voices</span
          >
          <h2 class="anim-fade-up" style="color: #fff; transition-delay: 0.1s">
            What <span style="color: var(--k-green)">Families Say</span>
          </h2>
        </div>
        <div
          style="
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
          "
          class="stagger"
        >
          <div class="testi-dark anim-scale-in">
            <blockquote>
              "My daughter cries if she misses a day — she loves it that much.
              The teachers are warm, patient and incredibly creative."
            </blockquote>
            <p class="author">— Wambui N.</p>
            <p class="role">Mother of PP2 Learner</p>
          </div>
          <div class="testi-dark anim-scale-in">
            <blockquote>
              "Watching my son's confidence bloom has been the greatest gift.
              Nova Heights Kindergarten doesn't just teach — it nurtures."
            </blockquote>
            <p class="author">— Tunde A.</p>
            <p class="role">Father of Grade 1 Student</p>
          </div>
          <div class="testi-dark anim-scale-in">
            <blockquote>
              "The outdoor programme is exceptional. My twins are always talking
              about the garden and what they discovered. Pure magic."
            </blockquote>
            <p class="author">— Fatuma H.</p>
            <p class="role">Parent of PP1 Twins</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section
      style="
        padding: 5rem 0;
        background: linear-gradient(135deg, #0a2818, #0a1628);
        position: relative;
        overflow: hidden;
      "
    >
      <div
        style="
          position: absolute;
          top: -50%;
          right: -10%;
          width: 700px;
          height: 700px;
          background: radial-gradient(
            circle,
            rgba(46, 204, 113, 0.1),
            transparent 70%
          );
          pointer-events: none;
        "
      ></div>
      <div
        class="container"
        style="position: relative; z-index: 1; text-align: center"
      >
        <span
          style="
            color: var(--k-green);
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            justify-content: center;
            margin-bottom: 1rem;
          "
          ><span
            style="width: 20px; height: 2px; background: var(--k-green)"
          ></span
          >Start the Journey</span
        >
        <h2
          style="
            color: #fff;
            font-size: clamp(1.8rem, 4vw, 3rem);
            margin-bottom: 1rem;
          "
        >
          Give Your Child the
          <span style="color: var(--k-green)">Best Start</span>
        </h2>
        <p
          style="
            color: rgba(255, 255, 255, 0.55);
            max-width: 480px;
            margin: 0 auto 2.5rem;
          "
        >
          Applications are now open. Visit campus and see why Nova Heights
          Kindergarten is the first choice for families across Nairobi.
        </p>
        <div
          style="
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
          "
        >
          <a href="../admissions.php" class="btn btn-primary"
            >Apply for Kindergarten</a
          >
          <a href="../contact.php" class="btn btn-outline-light"
            >Book a Tour</a
          >
        </div>
      </div>
    </section>

    <style>
      @media (max-width: 768px) {
        .kg-hero-grid {
          grid-template-columns: 1fr !important;
          gap: 2rem !important;
          text-align: center;
        }
        .kg-hero-grid div[style*="display: flex"] {
          justify-content: center !important;
        }
        .kg-hero-grid div[style*="display: grid"] {
          grid-template-columns: repeat(3, 1fr) !important;
          max-width: 400px;
          margin: 0 auto;
        }
        .photo-stack {
          height: 300px !important;
          margin-top: 3rem;
          margin-bottom: 2rem;
        }
        .photo-stack-img {
          position: relative !important;
          width: 80% !important;
          margin: 0 auto !important;
          z-index: 1 !important;
          transform: none !important;
          left: auto !important;
          top: auto !important;
          bottom: auto !important;
          right: auto !important;
        }
        .ps-side1, .ps-side2 {
          display: none;
        }
        
        /* Programme Cards */
        section div[class*="stagger"] {
          grid-template-columns: 1fr !important;
        }

        /* Image content strip */
        .img-content-strip {
          display: block !important;
          height: auto !important;
        }
        .ics-img {
          width: 100% !important;
          height: 240px !important;
        }
        .ics-content {
          width: 100% !important;
          padding: 2rem 1rem !important;
        }
        
        /* Teacher Cards */
        div[style*="grid-template-columns: repeat(4, 1fr)"] {
          grid-template-columns: repeat(2, 1fr) !important;
        }
        
        /* Testimonials */
        div[style*="grid-template-columns: repeat(3, 1fr)"] {
          grid-template-columns: 1fr !important;
        }

        /* Activity Mosaic */
        .activity-mosaic {
          grid-template-columns: 1fr !important;
          height: auto !important;
        }
        .am-item.tall {
          grid-row: span 1 !important;
        }
        .am-item {
          height: 200px !important;
        }
      }
      @media (max-width: 480px) {
        div[style*="grid-template-columns: repeat(4, 1fr)"],
        div[style*="grid-template-columns: repeat(2, 1fr)"] {
          grid-template-columns: 1fr !important;
        }
      }
    </style>

    <?php include("includes/footer.php"); ?>

    <?php include("includes/html_z.php"); ?>
