document.addEventListener('DOMContentLoaded', () => {

  /* Page loader */
  const loader = document.getElementById('page-loader');
  window.addEventListener('load', () => {
    setTimeout(() => {
      loader.style.opacity = '0';
      setTimeout(() => loader.style.display = 'none', 600);
    }, 800);
  });

  /* Scroll animations */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add('visible');
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.anim-fade-up').forEach(el => observer.observe(el));

});
