    <div class="mobile-overlay"></div>

    <!-- ═══ NAVBAR ═══ -->
    <?php $cp = basename($_SERVER['PHP_SELF']); $schoolPages = ['kindergarten.php','junior.php','senior.php','alumni.php','notable-alumni.php']; ?>
    <nav class="navbar" id="navbar">
      <div class="navbar-inner">
        <a href="index.php" class="nav-logo">
          <div class="logo-emblem">N</div>
          <div class="logo-text">
            <span class="logo-name">Nova Heights</span
            ><span class="logo-sub">International School</span>
          </div>
        </a>
        <ul class="nav-links">
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php echo $cp==='index.php'?'active':''; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link <?php echo $cp==='about.php'?'active':''; ?>">About Us</a>
          </li>
          <li class="nav-item">
            <span class="nav-link <?php echo in_array($cp,$schoolPages)?'active':''; ?>"
              >Schools
              <span class="chevron"
                ><i
                  class="fa-solid fa-chevron-down"
                  aria-hidden="true"
                ></i></span
            ></span>
            <div class="dropdown">
              <a href="kindergarten.php"
                ><span class="dd-icon"
                  ><i class="fa-solid fa-seedling" aria-hidden="true"></i
                ></span>
                Kindergarten</a
              >
              <a href="junior.php"
                ><span class="dd-icon"
                  ><i class="fa-solid fa-book-open" aria-hidden="true"></i
                ></span>
                Junior School</a
              >
              <a href="senior.php"
                ><span class="dd-icon"
                  ><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i
                ></span>
                Senior School</a
              >
              <a href="alumni.php"
                ><span class="dd-icon"
                  ><i class="fa-solid fa-star" aria-hidden="true"></i
                ></span>
                Alumni</a
              >
            </div>
          </li>
          <li class="nav-item">
            <a href="admissions.php" class="nav-link <?php echo $cp==='admissions.php'?'active':''; ?>">Admissions</a>
          </li>
          <li class="nav-item">
            <a href="activities-achievements.php" class="nav-link <?php echo $cp==='activities-achievements.php'?'active':''; ?>"
              >Activities</a
            >
          </li>
          <li class="nav-item">
            <a href="news-events.php" class="nav-link <?php echo $cp==='news-events.php'?'active':''; ?>">News &amp; Events</a>
          </li>
          <li class="nav-item">
            <a href="gallery.php" class="nav-link <?php echo $cp==='gallery.php'?'active':''; ?>">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link <?php echo $cp==='contact.php'?'active':''; ?>">Contact</a>
          </li>
        </ul>
        <div class="nav-cta">
          <a href="admissions.php" class="btn btn-primary" id="nav-apply-btn"
            >Apply Now</a
          >
          <button class="hamburger" aria-label="Open menu">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
      <div class="mobile-menu-header">
        <a href="index.php" class="nav-logo"
          ><div class="logo-emblem">N</div>
          <div class="logo-text">
            <span class="logo-name">Nova Heights</span
            ><span class="logo-sub">International School</span>
          </div></a
        >
        <button class="mobile-menu-close">
          <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
      </div>
      <a href="index.php" class="mobile-nav-link <?php echo $cp==='index.php'?'active':''; ?>">Home</a>
      <a href="about.php" class="mobile-nav-link <?php echo $cp==='about.php'?'active':''; ?>">About Us</a>
      <div class="mobile-nav-link" data-submenu="mobile-schools-sub">
        Schools <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
      </div>
      <div class="mobile-submenu" id="mobile-schools-sub">
        <a href="kindergarten.php"
          ><i class="fa-solid fa-seedling" aria-hidden="true"></i>
          Kindergarten</a
        >
        <a href="junior.php"
          ><i class="fa-solid fa-book-open" aria-hidden="true"></i> Junior
          School</a
        >
        <a href="senior.php"
          ><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i> Senior
          School</a
        >
        <a href="alumni.php"
          ><i class="fa-solid fa-star" aria-hidden="true"></i> Alumni</a
        >
      </div>
      <a href="admissions.php" class="mobile-nav-link <?php echo $cp==='admissions.php'?'active':''; ?>">Admissions</a>
      <a href="news-events.php" class="mobile-nav-link <?php echo $cp==='news-events.php'?'active':''; ?>">News &amp; Events</a>
      <a href="gallery.php" class="mobile-nav-link <?php echo $cp==='gallery.php'?'active':''; ?>">Gallery</a>
      <a href="contact.php" class="mobile-nav-link <?php echo $cp==='contact.php'?'active':''; ?>">Contact</a>
      <a
        href="admissions.php"
        class="btn btn-primary"
        style="margin-top: 1.5rem; justify-content: center"
        >Apply Now</a
      >
    </div>