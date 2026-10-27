<?php
include("includes/html_a.php"); 
include("includes/header.php");
?>
    <!-- HERO -->
    <section class="sr-hero">
      <div class="sr-hero-bg"></div>
      <div class="sr-hero-grad"></div>
      <div class="sr-hero-lines"></div>
      <div class="container" style="position: relative; z-index: 2">
        <div
          style="
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 5rem;
            align-items: center;
          "
        >
          <div class="anim-slide-left">
            <div
              style="
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                background: rgba(232, 184, 75, 0.1);
                border: 1px solid rgba(232, 184, 75, 0.25);
                border-radius: 100px;
                padding: 0.4rem 1rem;
                margin-bottom: 1.5rem;
              "
            >
              <span
                style="
                  width: 8px;
                  height: 8px;
                  border-radius: 50%;
                  background: var(--s-gold);
                  animation: pulse 2s infinite;
                "
              ></span>
              <span
                style="
                  color: var(--s-gold);
                  font-size: 0.8rem;
                  font-weight: 700;
                  letter-spacing: 0.08em;
                  text-transform: uppercase;
                "
                >Grades 7–12 · Ages 12–18</span
              >
            </div>
            <h1 class="sr-hero-title">
              <span class="outline">Shape</span><br />
              Your <span class="gold">Future.</span><br />
              Lead the World.
            </h1>
            <p
              style="
                color: rgba(255, 255, 255, 0.6);
                font-size: 1.05rem;
                line-height: 1.75;
                margin-bottom: 2.5rem;
                max-width: 520px;
              "
            >
              Senior School is where potential becomes purpose. With Cambridge
              IGCSE, A-Levels, and a vibrant university preparation programme,
              we open doors to the world's best institutions.
            </p>
            <div
              style="
                display: flex;
                gap: 1rem;
                flex-wrap: wrap;
                margin-bottom: 3rem;
              "
            >
              <a href="admissions.php" class="btn btn-primary"
                >Apply to Senior School</a
              >
              <a href="#pathways" class="btn btn-outline-light"
                >Explore Pathways</a
              >
            </div>
            <div
              style="
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 1rem;
              "
            >
              <div
                style="
                  text-align: center;
                  padding: 1rem;
                  background: rgba(255, 255, 255, 0.03);
                  border: 1px solid rgba(255, 255, 255, 0.06);
                  border-radius: 12px;
                "
              >
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 1.8rem;
                    font-weight: 800;
                    color: var(--s-gold);
                    line-height: 1;
                  "
                >
                  98%
                </p>
                <p
                  style="
                    font-size: 0.68rem;
                    color: rgba(255, 255, 255, 0.35);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                    margin-top: 0.3rem;
                  "
                >
                  Uni Placement
                </p>
              </div>
              <div
                style="
                  text-align: center;
                  padding: 1rem;
                  background: rgba(255, 255, 255, 0.03);
                  border: 1px solid rgba(255, 255, 255, 0.06);
                  border-radius: 12px;
                "
              >
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 1.8rem;
                    font-weight: 800;
                    color: var(--s-gold);
                    line-height: 1;
                  "
                >
                  96%
                </p>
                <p
                  style="
                    font-size: 0.68rem;
                    color: rgba(255, 255, 255, 0.35);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                    margin-top: 0.3rem;
                  "
                >
                  A*–B Grades
                </p>
              </div>
              <div
                style="
                  text-align: center;
                  padding: 1rem;
                  background: rgba(255, 255, 255, 0.03);
                  border: 1px solid rgba(255, 255, 255, 0.06);
                  border-radius: 12px;
                "
              >
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 1.8rem;
                    font-weight: 800;
                    color: var(--s-gold);
                    line-height: 1;
                  "
                >
                  15+
                </p>
                <p
                  style="
                    font-size: 0.68rem;
                    color: rgba(255, 255, 255, 0.35);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                    margin-top: 0.3rem;
                  "
                >
                  Scholarships
                </p>
              </div>
              <div
                style="
                  text-align: center;
                  padding: 1rem;
                  background: rgba(255, 255, 255, 0.03);
                  border: 1px solid rgba(255, 255, 255, 0.06);
                  border-radius: 12px;
                "
              >
                <p
                  style="
                    font-family: var(--font-display);
                    font-size: 1.8rem;
                    font-weight: 800;
                    color: var(--s-gold);
                    line-height: 1;
                  "
                >
                  800+
                </p>
                <p
                  style="
                    font-size: 0.68rem;
                    color: rgba(255, 255, 255, 0.35);
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                    margin-top: 0.3rem;
                  "
                >
                  Senior Students
                </p>
              </div>
            </div>
          </div>
          <div
            class="anim-slide-right"
            style="
              display: grid;
              grid-template-columns: 1fr 1fr;
              grid-template-rows: 1fr 1fr;
              gap: 0.5rem;
              height: 520px;
            "
          >
            <div
              style="border-radius: 16px; overflow: hidden; grid-row: span 2"
            >
              <img
                src="images/senior1.avif"
                alt="Senior student"
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  object-position: top;
                "
              />
            </div>
            <div style="border-radius: 16px; overflow: hidden">
              <img
                src="images/lab.avif"
                alt="Science lab"
                style="width: 100%; height: 100%; object-fit: cover"
              />
            </div>
            <div style="border-radius: 16px; overflow: hidden">
              <img
                src="images/graduation.avif"
                alt="Graduation"
                style="width: 100%; height: 100%; object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ACADEMIC PATHWAYS -->
    <section
      id="pathways"
      style="padding: var(--section-pad) 0; background: #0a0a0a"
    >
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <span
            style="
              color: var(--s-gold);
              font-size: 0.75rem;
              font-weight: 700;
              letter-spacing: 0.12em;
              text-transform: uppercase;
              display: flex;
              align-items: center;
              gap: 0.5rem;
              justify-content: center;
              margin-bottom: 0.75rem;
            "
            class="anim-fade-up"
            ><span
              style="width: 20px; height: 2px; background: var(--s-gold)"
            ></span
            >Academic Pathways</span
          >
          <h2 class="anim-fade-up" style="color: #fff; transition-delay: 0.1s">
            Two Pathways to
            <span style="color: var(--s-gold)">Global Universities</span>
          </h2>
        </div>
        <div
          style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            max-width: 900px;
            margin: 0 auto;
          "
          class="stagger path-cards-grid"
        >
          <div class="path-card anim-scale-in">
            <img
              src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&q=85&auto=format&fit=crop"
              alt="IGCSE"
            />
            <div class="path-card-body">
              <div
                class="path-card-badge"
                style="
                  background: rgba(232, 184, 75, 0.15);
                  border: 1px solid rgba(232, 184, 75, 0.3);
                  color: var(--s-gold);
                "
              >
                Grades 9–10
              </div>
              <h3>Cambridge IGCSE</h3>
              <p>
                Internationally recognised qualifications across 8–10 subjects,
                building the breadth and depth needed for A-Level excellence.
              </p>
              <!-- <div class="path-card-arrow">Learn More →</div> -->
            </div>
          </div>
          <div class="path-card anim-scale-in">
            <img
              src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=85&auto=format&fit=crop"
              alt="A Levels"
            />
            <div class="path-card-body">
              <div
                class="path-card-badge"
                style="
                  background: rgba(46, 204, 113, 0.15);
                  border: 1px solid rgba(46, 204, 113, 0.3);
                  color: #2ecc71;
                "
              >
                Grades 11–12
              </div>
              <h3>Cambridge A-Levels</h3>
              <p>
                Specialist study in 3–4 subjects at the highest level — the
                direct route to Oxford, Cambridge, Ivy League and top African
                universities.
              </p>
              <!-- <div class="path-card-arrow" style="color: #2ecc71">
                Learn More →
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SUBJECTS -->
    <section style="padding: var(--section-pad) 0; background: #080808">
      <div class="container">
        <div class="text-center" style="margin-bottom: 3rem">
          <h2 class="anim-fade-up" style="color: #fff">
            Our <span style="color: var(--s-gold)">Subject Offering</span>
          </h2>
          <p
            class="anim-fade-up"
            style="
              color: rgba(255, 255, 255, 0.45);
              margin-top: 0.75rem;
              max-width: 500px;
              transition-delay: 0.1s;
            "
          >
            Over 25 IGCSE and A-Level subjects across sciences, humanities,
            arts, and languages.
          </p>
        </div>
        <div class="sub-grid anim-scale-in">
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-microscope" aria-hidden="true"></i>
            </div>
            <h5>Physics</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-flask-vial" aria-hidden="true"></i>
            </div>
            <h5>Chemistry</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-dna" aria-hidden="true"></i>
            </div>
            <h5>Biology</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-ruler" aria-hidden="true"></i>
            </div>
            <h5>Mathematics</h5>
            <p>Further Maths available</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-laptop-code" aria-hidden="true"></i>
            </div>
            <h5>Computer Science</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-coins" aria-hidden="true"></i>
            </div>
            <h5>Economics</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-book" aria-hidden="true"></i>
            </div>
            <h5>English Literature</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-earth-africa" aria-hidden="true"></i>
            </div>
            <h5>Geography</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-landmark" aria-hidden="true"></i>
            </div>
            <h5>History</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-palette" aria-hidden="true"></i>
            </div>
            <h5>Fine Art</h5>
            <p>IGCSE only</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-music" aria-hidden="true"></i>
            </div>
            <h5>Music</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
          <div class="sub-item">
            <div class="emoji">
              <i class="fa-solid fa-globe" aria-hidden="true"></i>
            </div>
            <h5>French / Swahili</h5>
            <p>IGCSE &amp; A-Level</p>
          </div>
        </div>
      </div>
    </section>

    <!-- LAB & INNOVATION IMAGES -->
    <section style="padding: var(--section-pad) 0; background: #0a0a0a">
      <div class="container">
        <div
          style="
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
          "
          class="anim-scale-in"
        >
          <div
            style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/10"
          >
            <img
              src="images/comp.avif"
              alt="Computer lab"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
          <div
            style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/10"
          >
            <img
              src="images/science.avif"
              alt="Science"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
          <div
            style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/10"
          >
            <img
              src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=600&q=85&auto=format&fit=crop"
              alt="Innovation fair"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
        </div>
        <div
          style="
            display: grid;
            grid-template-columns: 1fr 1fr 1.5fr;
            gap: 0.75rem;
          "
          class="anim-scale-in"
        >
          <div
            style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/10"
          >
            <img
              src="https://images.unsplash.com/photo-1546519638-68e109498ffc?w=600&q=85&auto=format&fit=crop"
              alt="Sports"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
          <div
            style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/10"
          >
            <img
              src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=85&auto=format&fit=crop"
              alt="Arts"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
          <div
            style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/10"
          >
            <img
              src="images/senior3.avif"
              alt="Students"
              style="
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.5s;
              "
              onmouseover="this.style.transform = 'scale(1.04)'"
              onmouseout="this.style.transform = ''"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- RESULTS & UNIVERSITY DESTINATIONS -->
    <section style="padding: var(--section-pad) 0; background: #080808">
      <div class="container">
        <div
          style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
          "
        >
          <div>
            <span
              style="
                color: var(--s-gold);
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
              "
              class="anim-slide-left"
              ><span
                style="width: 20px; height: 2px; background: var(--s-gold)"
              ></span
              >2025 Exam Results</span
            >
            <h2
              class="anim-slide-left"
              style="color: #fff; margin-bottom: 2rem; transition-delay: 0.1s"
            >
              Consistently <span style="color: var(--s-gold)">Outstanding</span>
            </h2>
            <div class="results-bar anim-fade-up">
              <div class="rb-item">
                <span class="rb-label">A* – A</span>
                <div class="rb-track">
                  <div class="rb-fill gold" style="width: 72%">72%</div>
                </div>
              </div>
              <div class="rb-item">
                <span class="rb-label">A* – B</span>
                <div class="rb-track">
                  <div class="rb-fill gold" style="width: 96%">96%</div>
                </div>
              </div>
              <div class="rb-item">
                <span class="rb-label">A* – C</span>
                <div class="rb-track">
                  <div class="rb-fill green" style="width: 99%">99%</div>
                </div>
              </div>
              <div class="rb-item">
                <span class="rb-label">A Levels</span>
                <div class="rb-track">
                  <div class="rb-fill blue" style="width: 88%">88% A*–B</div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <span
              style="
                color: var(--s-gold);
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
              "
              class="anim-slide-right"
              ><span
                style="width: 20px; height: 2px; background: var(--s-gold)"
              ></span
              >University Destinations</span
            >
            <h2
              class="anim-slide-right"
              style="color: #fff; margin-bottom: 1.5rem; transition-delay: 0.1s"
            >
              Our Graduates Go
              <span style="color: var(--s-gold)">Everywhere</span>
            </h2>
            <div
              class="uni-strip anim-fade-up"
              style="justify-content: flex-start; padding: 0"
            >
              <span class="uni-logo">🇬🇧 University of Edinburgh</span>
              <span class="uni-logo">🇺🇸 New York University</span>
              <span class="uni-logo">🇨🇦 University of Toronto</span>
              <span class="uni-logo">🇦🇺 ANU Canberra</span>
              <span class="uni-logo">🇰🇪 University of Nairobi</span>
              <span class="uni-logo">🇿🇦 University of Cape Town</span>
              <span class="uni-logo">🇳🇱 TU Delft</span>
              <span class="uni-logo">🇩🇪 Heidelberg Univ.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SPLIT: University Prep -->
    <section style="padding: var(--section-pad) 0; background: #0a0a0a">
      <div class="container">
        <div class="sr-split anim-scale-in">
          <div class="sr-split-img">
            <img
              src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=800&q=85&auto=format&fit=crop"
              alt="University prep"
            />
            <div
              style="
                position: absolute;
                inset: 0;
                background: linear-gradient(
                  135deg,
                  rgba(8, 8, 8, 0.3),
                  transparent
                );
              "
            ></div>
            <div style="position: absolute; top: 2rem; left: 2rem">
              <span
                style="
                  background: rgba(232, 184, 75, 0.15);
                  border: 1px solid rgba(232, 184, 75, 0.3);
                  color: var(--s-gold);
                  padding: 0.3rem 0.75rem;
                  border-radius: 100px;
                  font-size: 0.75rem;
                  font-weight: 700;
                "
                >University Preparation</span
              >
            </div>
          </div>
          <div class="sr-split-body">
            <span
              style="
                color: var(--s-gold);
                font-size: 0.75rem;
                font-weight: 700;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                margin-bottom: 1.25rem;
                display: block;
              "
              >Your Pathway to Top Universities</span
            >
            <h2
              style="
                color: #fff;
                margin-bottom: 1.5rem;
                font-size: clamp(1.5rem, 2.5vw, 2.2rem);
              "
            >
              Dedicated Uni
              <span style="color: var(--s-gold)">Guidance Programme</span>
            </h2>
            <div class="uni-pathway">
              <div class="up-item">
                <div class="up-num">1</div>
                <div class="up-body">
                  <h5>Personal Statement Coaching</h5>
                  <p>
                    One-on-one sessions with our university counsellors to craft
                    compelling applications.
                  </p>
                </div>
              </div>
              <div class="up-item">
                <div class="up-num">2</div>
                <div class="up-body">
                  <h5>UCAS / Common App Support</h5>
                  <p>
                    End-to-end guidance on UK, US, Canadian, and African
                    university applications.
                  </p>
                </div>
              </div>
              <div class="up-item">
                <div class="up-num">3</div>
                <div class="up-body">
                  <h5>SAT / IELTS Preparation</h5>
                  <p>
                    In-school test prep classes for standardised admissions
                    examinations.
                  </p>
                </div>
              </div>
              <div class="up-item">
                <div class="up-num">4</div>
                <div class="up-body">
                  <h5>Scholarship Applications</h5>
                  <p>
                    Support identifying and applying for scholarships, bursaries
                    and fellowships globally.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section
      style="
        padding: 5rem 0;
        background: #050505;
        position: relative;
        overflow: hidden;
      "
    >
      <div
        style="
          position: absolute;
          top: -30%;
          left: 50%;
          transform: translateX(-50%);
          width: 800px;
          height: 800px;
          background: radial-gradient(
            circle,
            rgba(232, 184, 75, 0.06),
            transparent 70%
          );
          pointer-events: none;
        "
      ></div>
      <div
        class="container"
        style="position: relative; z-index: 1; text-align: center"
      >
        <h2
          style="
            color: #fff;
            font-size: clamp(2rem, 4vw, 3.5rem);
            margin-bottom: 1rem;
          "
        >
          The <span style="color: var(--s-gold)">Future</span> Belongs<br />to
          the Prepared.
        </h2>
        <p
          style="
            color: rgba(255, 255, 255, 0.45);
            max-width: 460px;
            margin: 0 auto 2.5rem;
          "
        >
          Apply to Nova Heights Senior School and join East Africa's most
          successful university placement programme.
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
            >Apply to Senior School</a
          >
          <a href="../contact.php" class="btn btn-outline-light"
            >Meet Our Counsellors</a
          >
        </div>
      </div>
    </section>

    <style>
      @media (max-width: 768px) {
        .sr-hero .container > div[style*="grid-template-columns"] {
          grid-template-columns: 1fr !important;
          gap: 3rem !important;
          text-align: center;
        }
        .sr-hero-title {
          font-size: 3rem !important;
        }
        .sr-hero .container div[style*="repeat(4, 1fr)"] {
          grid-template-columns: repeat(2, 1fr) !important;
        }
        .sr-hero .anim-slide-right {
          height: auto !important;
          grid-template-columns: 1fr !important;
          grid-template-rows: auto !important;
        }
        .sr-hero .anim-slide-right div {
          height: 250px !important;
          grid-row: span 1 !important;
        }

        /* Path Cards */
        .path-cards-grid {
          grid-template-columns: 1fr !important;
        }

        /* Subject Grid */
        .sub-grid {
          grid-template-columns: repeat(2, 1fr) !important;
        }

        /* Image Grids */
        div[style*="grid-template-columns: 1.5fr 1fr 1fr"] {
          grid-template-columns: 1fr !important;
        }
        div[style*="grid-template-columns: 1fr 1fr 1.5fr"] {
          grid-template-columns: 1fr !important;
        }

        /* Results & Uni Destinations */
        div[style*="grid-template-columns: 1fr 1fr"][style*="align-items: center"] {
          grid-template-columns: 1fr !important;
          gap: 3rem !important;
        }

        /* Split Section */
        .sr-split {
          grid-template-columns: 1fr !important;
        }
        .sr-split-img {
          height: 250px !important;
        }
      }
      @media (max-width: 480px) {
        .sr-hero .container div[style*="repeat(2, 1fr)"],
        .sub-grid {
          grid-template-columns: 1fr !important;
        }
        .sr-hero-title {
          font-size: 2.4rem !important;
        }
      }
    </style>

  <?php
  include("includes/footer.php");
  include("includes/html_z.php");
  ?>
