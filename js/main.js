/* ══════════════════════════════════════════
   NOVA HEIGHTS — main.js
   ══════════════════════════════════════════ */

document.addEventListener("DOMContentLoaded", () => {
  document.documentElement.classList.add("js-loaded");

  /* ── Navbar Scroll ── */
  const navbar = document.getElementById("navbar");
  const handleNavScroll = () => {
    if (window.scrollY > 50) navbar?.classList.add("scrolled");
    else navbar?.classList.remove("scrolled");
  };
  window.addEventListener("scroll", handleNavScroll, { passive: true });
  handleNavScroll();

  /* ── Mobile Menu ── */
  const hamburger = document.querySelector(".hamburger");
  const mobileMenu = document.querySelector(".mobile-menu");
  const overlay = document.querySelector(".mobile-overlay");
  const closeBtn = document.querySelector(".mobile-menu-close");

  const openMenu = () => {
    mobileMenu?.classList.add("open");
    overlay?.classList.add("active");
    hamburger?.classList.add("active");
    navbar?.classList.add("menu-open");
    document.body.style.overflow = "hidden";
  };
  const closeMenu = () => {
    mobileMenu?.classList.remove("open");
    overlay?.classList.remove("active");
    hamburger?.classList.remove("active");
    navbar?.classList.remove("menu-open");
    document.body.style.overflow = "";
  };

  hamburger?.addEventListener("click", () =>
    mobileMenu?.classList.contains("open") ? closeMenu() : openMenu(),
  );
  overlay?.addEventListener("click", closeMenu);
  closeBtn?.addEventListener("click", closeMenu);

  /* ── Desktop dropdown: click to lock open, click outside to close ── */
  document.querySelectorAll(".nav-item:has(.dropdown)").forEach((item) => {
    const trigger = item.querySelector(".nav-link");
    trigger?.addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = item.classList.contains("open");
      document
        .querySelectorAll(".nav-item.open")
        .forEach((el) => el.classList.remove("open"));
      if (!isOpen) item.classList.add("open");
    });
  });
  document.addEventListener("click", () => {
    document
      .querySelectorAll(".nav-item.open")
      .forEach((el) => el.classList.remove("open"));
  });

  /* Mobile sub-menus */
  document.querySelectorAll("[data-submenu]").forEach((trigger) => {
    trigger.addEventListener("click", () => {
      const sub = document.getElementById(trigger.dataset.submenu);
      sub?.classList.toggle("open");
    });
  });

  /* ── Scroll To Top ── */
  const scrollTopBtn = document.getElementById("scroll-top");
  window.addEventListener(
    "scroll",
    () => {
      if (window.scrollY > 500) scrollTopBtn?.classList.add("visible");
      else scrollTopBtn?.classList.remove("visible");
    },
    { passive: true },
  );
  scrollTopBtn?.addEventListener("click", () =>
    window.scrollTo({ top: 0, behavior: "smooth" }),
  );

  /* ── Intersection Observer Animations ── */
  const animEls = document.querySelectorAll(
    ".anim-fade-up, .anim-slide-left, .anim-slide-right, .anim-scale-in",
  );
  if (animEls.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) e.target.classList.add("visible");
        });
      },
      { threshold: 0.12 },
    );
    animEls.forEach((el) => observer.observe(el));
  }

  // /* ── Counter Animation ── */
  // const counters = document.querySelectorAll('[data-count]');
  // if (counters.length) {
  //   const countObserver = new IntersectionObserver((entries) => {
  //     entries.forEach(e => {
  //       if (!e.isIntersecting) return;
  //       const el = e.target;
  //       const target = parseInt(el.dataset.count);
  //       const suffix = el.dataset.suffix || '';
  //       const duration = 1800;
  //       const start = performance.now();
  //       const animate = (now) => {
  //         const elapsed = now - start;
  //         const progress = Math.min(elapsed / duration, 1);
  //         const eased = 1 - Math.pow(1 - progress, 3);
  //         el.textContent = Math.round(eased * target) + suffix;
  //         if (progress < 1) requestAnimationFrame(animate);
  //       };
  //       requestAnimationFrame(animate);
  //       countObserver.unobserve(el);
  //     });
  //   }, { threshold: 0.5 });
  //   counters.forEach(c => countObserver.observe(c));
  // }

  const counters = document.querySelectorAll("[data-count]");

  if (counters.length) {
    const countObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          const el = e.target;
          const target = parseInt(el.dataset.count);
          const suffix = el.dataset.suffix || "";

          if (e.isIntersecting) {
            // Element has entered the viewport: Start counting
            const duration = 1800;
            const start = performance.now();

            const animate = (now) => {
              const elapsed = now - start;
              const progress = Math.min(elapsed / duration, 1);
              // Ease-out cubic function for smooth deceleration
              const eased = 1 - Math.pow(1 - progress, 3);

              el.textContent = Math.round(eased * target) + suffix;

              if (progress < 1) {
                // Save the animation ID so we can cancel it if the user scrolls away fast
                el.animationFrameId = requestAnimationFrame(animate);
              }
            };

            el.animationFrameId = requestAnimationFrame(animate);
          } else {
            // Element has left the viewport: Reset it
            // 1. Stop any animation that is currently running
            if (el.animationFrameId) {
              cancelAnimationFrame(el.animationFrameId);
            }
            // 2. Reset the text back to 0 (plus the suffix like '+' or '%')
            el.textContent = "0" + suffix;
          }
        });
      },
      { threshold: 0.5 },
    ); // Triggers when 50% of the element is visible

    counters.forEach((c) => countObserver.observe(c));
  }
  /* ── Testimonial Slider ── */
  const track = document.querySelector(".testimonial-track");
  const slides = document.querySelectorAll(".testimonial-slide");
  const dots = document.querySelectorAll(".slider-dot");
  let current = 0;

  const goTo = (n) => {
    current = (n + slides.length) % slides.length;
    if (track) track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle("active", i === current));
  };

  document
    .querySelector(".slider-btn.prev")
    ?.addEventListener("click", () => goTo(current - 1));
  document
    .querySelector(".slider-btn.next")
    ?.addEventListener("click", () => goTo(current + 1));
  dots.forEach((d, i) => d.addEventListener("click", () => goTo(i)));

  if (slides.length > 1) {
    setInterval(() => goTo(current + 1), 5000);
  }

  /* ── News / Gallery Filter ── */
  document.querySelectorAll(".filter-tab").forEach((tab) => {
    tab.addEventListener("click", () => {
      const filterGroup =
        tab.closest(".filter-tabs")?.parentElement?.parentElement;
      filterGroup
        ?.querySelectorAll(".filter-tab")
        .forEach((t) => t.classList.remove("active"));
      tab.classList.add("active");

      const filter = tab.dataset.filter;
      const items = document.querySelectorAll("[data-filter-cat]");
      items.forEach((item) => {
        const show = filter === "all" || item.dataset.filterCat === filter;
        item.style.display = show ? "" : "none";
        item.style.opacity = show ? "" : "0";
      });
    });
  });

  /* ── Lightbox ── */
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const lightboxCaption = document.getElementById("lightbox-caption");
  const lightboxClose = document.querySelector(".lightbox-close");

  const openLightbox = (src, cap) => {
    if (lightboxImg) lightboxImg.src = src;
    if (lightboxCaption) lightboxCaption.textContent = cap;
    lightbox?.classList.add("open");
    document.body.style.overflow = "hidden";
  };

  document.querySelectorAll("[data-lightbox]").forEach((el) => {
    el.addEventListener("click", () => {
      openLightbox(
        el.dataset.lightbox || el.src,
        el.dataset.caption || el.alt || "",
      );
    });
  });

  document.querySelectorAll(".gallery-item").forEach((el) => {
    if (!el.hasAttribute("data-lightbox")) {
      el.addEventListener("click", () => {
        const img = el.querySelector("img");
        const overlayLabel = el.querySelector(".gallery-item-label");
        if (img) {
          openLightbox(
            img.src,
            overlayLabel ? overlayLabel.textContent : img.alt || "",
          );
        }
      });
    }
  });

  lightboxClose?.addEventListener("click", () => {
    lightbox?.classList.remove("open");
    document.body.style.overflow = "";
    if (lightboxImg) setTimeout(() => (lightboxImg.src = ""), 300);
  });
  lightbox?.addEventListener("click", (e) => {
    if (e.target === lightbox) {
      lightbox.classList.remove("open");
      document.body.style.overflow = "";
    }
  });

  /* ── Ajax Form ── */
  document.querySelectorAll("form[data-ajax]").forEach((form) => {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const btn = form.querySelector("[type=submit]");
      const success = form.querySelector(".form-success");
      if (btn) {
        btn.textContent = "Sending...";
        btn.disabled = true;
      }
      setTimeout(() => {
        if (success) success.style.display = "block";
        if (btn) {
          btn.textContent = "Message Sent!";
        }
        form
          .querySelectorAll("input, textarea, select")
          .forEach((el) => (el.value = ""));
        setTimeout(() => {
          if (success) success.style.display = "none";
          if (btn) {
            btn.textContent = "Send Message";
            btn.disabled = false;
          }
        }, 4000);
      }, 1200);
    });
  });
});
