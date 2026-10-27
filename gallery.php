<?php include("includes/html_a.php"); include("includes/header.php"); ?>

    <!-- INNER HERO -->
    <section class="inner-hero">
      <img
        src="https://images.unsplash.com/photo-1529390079861-591de354faf5?w=1600&q=75&auto=format&fit=crop"
        alt=""
        class="inner-hero-bg"
      />
      <div class="inner-hero-overlay"></div>
      <div class="container inner-hero-content">
        <div class="breadcrumb">
          <a href="index.php">Home</a><span>/</span><span>Gallery</span>
        </div>
        <span class="section-label" style="color: var(--gold-light)"
          >Visual Stories</span
        >
        <h1 style="font-size: clamp(2.2rem, 5vw, 4rem); margin-bottom: 1rem">
          School
          <span style="color: var(--gold-light); font-style: italic"
            >Gallery</span
          >
        </h1>
        <p class="section-desc">
          A window into the vibrant, energetic, and joyful world of Nova Heights
          International School.
        </p>
      </div>
    </section>

    <!-- HIGHLIGHTS STRIP -->
    <section class="section-pad" style="background: var(--cream)">
      <div class="container">
        <div class="text-center" style="margin-bottom: 2.5rem">
          <span class="section-label anim-fade-up">Featured</span>
          <h2 class="anim-fade-up" style="transition-delay: 0.1s">
            Moments That <span class="section-title">Define Us</span>
          </h2>
        </div>
        <div class="highlight-strip anim-scale-in">
          <div class="hs-item wide">
            <img
              src="images/student-research.avif"
              alt="Students collaborating in class"
              loading="lazy"
            />
            <div class="hs-caption">
              <span class="badge badge-gold" style="margin-bottom: 0.5rem"
                >Academics</span
              >
              <h4>Collaborative Learning in Action</h4>
              <p>Students working together on a group research project</p>
            </div>
          </div>
          <div class="hs-item">
            <img
              src="images/leaders.avif"
              alt="Student leader"
              loading="lazy"
            />
            <div class="hs-caption">
              <span class="badge badge-terra" style="margin-bottom: 0.5rem"
                >Leadership</span
              >
              <h4>Future Leaders</h4>
              <p>Student council and leadership programmes</p>
            </div>
          </div>
          <div class="hs-item">
            <img
              src="images/inteschool-competition.avif"
              alt="Sports day"
              loading="lazy"
            />
            <div class="hs-caption">
              <span class="badge badge-forest" style="margin-bottom: 0.5rem"
                >Sports</span
              >
              <h4>Championship Athletics</h4>
              <p>Annual inter-school sports competitions</p>
            </div>
          </div>
          <div class="hs-item">
            <img
              src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&q=85&auto=format&fit=crop"
              alt="Community service"
              loading="lazy"
            />
            <div class="hs-caption">
              <span class="badge badge-teal" style="margin-bottom: 0.5rem"
                >Community</span
              >
              <h4>Giving Back</h4>
              <p>Community outreach and charity programmes</p>
            </div>
          </div>
          <div class="hs-item wide">
            <img
              src="images/innovationlabs.avif"
              alt="Science lab"
              loading="lazy"
            />
            <div class="hs-caption">
              <span class="badge badge-blue" style="margin-bottom: 0.5rem"
                >Innovation</span
              >
              <h4>Science &amp; Technology Hub</h4>
              <p>State-of-the-art labs fuelling curiosity and discovery</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FULL GALLERY -->
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
            <span class="section-label anim-fade-up">Browse</span>
            <h2 class="anim-fade-up" style="transition-delay: 0.1s">
              All <span class="section-title">Photos</span>
            </h2>
          </div>
          <div class="filter-tabs anim-fade-up">
            <button class="filter-tab active" data-filter="all">All</button>
            <button class="filter-tab" data-filter="academic">Academics</button>
            <button class="filter-tab" data-filter="sports">Sports</button>
            <button class="filter-tab" data-filter="arts">Arts</button>
            <button class="filter-tab" data-filter="community">
              Community
            </button>
            <button class="filter-tab" data-filter="events">Events</button>
          </div>
        </div>

        <div class="gallery-masonry" id="gallery-grid">
          <!-- Academic -->
          <div class="gallery-item anim-fade-up" data-filter-cat="academic">
            <img
              src="images/student-research.avif"
              alt="Students studying together"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-book-open" aria-hidden="true"></i>
                Collaborative Learning</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="sports">
            <img
              src="images/trophy-lifting.avif"
              alt="Football championship"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-futbol" aria-hidden="true"></i> Football
                Champions</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="academic">
            <img
              src="images/State-of-the-art science & tech school labs.avif"
              alt="Science lab"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-microscope" aria-hidden="true"></i>
                Science Lab</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="community">
            <img
              src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&q=80&auto=format&fit=crop"
              alt="Charity work"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-handshake" aria-hidden="true"></i>
                Community Outreach</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="arts">
            <img
              src="images/arts-gala.avif"
              alt="Arts performance"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-masks-theater" aria-hidden="true"></i>
                Performing Arts</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="events">
            <img
              src="images/grad.avif"
              alt="Graduation ceremony"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                Graduation 2025</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="academic">
            <img
              src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=80&auto=format&fit=crop"
              alt="Modern classroom"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-school" aria-hidden="true"></i> Modern
                Classrooms</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="sports">
            <img
              src="images/swimming-champ.avif"
              alt="Swimming competition"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-person-swimming" aria-hidden="true"></i>
                Swimming Records</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="events">
            <img
              src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80&auto=format&fit=crop"
              alt="IGCSE results celebration"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-trophy" aria-hidden="true"></i> Record
                IGCSE Results</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="academic">
            <img
              src="images/library.avif"
              alt="Student studying"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-book" aria-hidden="true"></i> Digital
                Library</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="community">
            <img
              src="images/multiethnic.avif"
              alt="Diverse student community"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-earth-africa" aria-hidden="true"></i> Our
                Diverse Community</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="sports">
            <img
              src="images/inteschool-competition.avif"
              alt="Athletics sports day"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-person-running" aria-hidden="true"></i>
                Annual Sports Day</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="arts">
            <img
              src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=600&q=80&auto=format&fit=crop"
              alt="Music performance"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-music" aria-hidden="true"></i> Music
                Programme</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="events">
            <img
              src="images/innov-fair.avif"
              alt="Innovation fair"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-robot" aria-hidden="true"></i> Innovation
                Fair</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="academic">
            <img
              src="images/coding-class.avif"
              alt="Technology class"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-laptop-code" aria-hidden="true"></i> Tech
                &amp; Coding</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="community">
            <img
              src="images/leaders.avif"
              alt="Student leadership"
              loading="lazy"
            />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-star" aria-hidden="true"></i> Student
                Council</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="sports">
            <img src="images/bball.avif" alt="Basketball game" loading="lazy" />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-basketball" aria-hidden="true"></i>
                Basketball Team</span
              >
            </div>
          </div>

          <div class="gallery-item anim-fade-up" data-filter-cat="arts">
            <img src="images/gala.avif" alt="Art exhibition" loading="lazy" />
            <div class="gallery-item-overlay">
              <span class="gallery-item-label"
                ><i class="fa-solid fa-palette" aria-hidden="true"></i> Visual
                Arts Exhibition</span
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section
      style="
        background: var(--forest);
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
      "
    >
      <div
        style="
          position: absolute;
          top: -20%;
          right: -10%;
          width: 500px;
          height: 500px;
          background: radial-gradient(
            circle,
            rgba(200, 149, 42, 0.12),
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
          class="section-label anim-fade-up"
          style="justify-content: center; color: var(--gold-light)"
          >Come See For Yourself</span
        >
        <h2
          class="anim-fade-up"
          style="color: var(--cream); margin: 0.75rem 0; transition-delay: 0.1s"
        >
          Visit Our
          <span style="color: var(--gold-light); font-style: italic"
            >Campus</span
          >
        </h2>
        <p
          class="anim-fade-up"
          style="
            color: rgba(250, 247, 242, 0.65);
            max-width: 460px;
            margin: 0 auto 2rem;
            transition-delay: 0.2s;
          "
        >
          Experience Nova Heights first-hand. Book an open day tour and see our
          world-class facilities.
        </p>
        <div
          style="
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
          "
          class="anim-fade-up"
          style="transition-delay: 0.3s"
        >
          <a href="contact.php" class="btn btn-primary">Book a Tour</a>
          <a href="admissions.php" class="btn btn-outline-light">Apply Now</a>
        </div>
      </div>
    </section>

    <?php include("includes/footer.php"); ?>

    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">
      <button class="lightbox-close">
        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
      </button>
      <img id="lightbox-img" src="" alt="Gallery photo" />
      <p class="lightbox-caption" id="lightbox-caption"></p>
    </div>

    <?php include("includes/html_z.php"); ?>
