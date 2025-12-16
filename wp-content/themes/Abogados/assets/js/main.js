document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.menu-toggle');
  const mobileNav = document.getElementById('mobileNav');

  if (!toggle || !mobileNav) return;

  const isDesktop = () => window.matchMedia('(min-width: 1024px)').matches;

  const setNavState = (open) => {
    // En desktop el nav siempre visible
    if (isDesktop()) {
      mobileNav.classList.remove('hidden');
      document.body.classList.remove('nav-open');
      toggle.setAttribute('aria-expanded', 'false');
      return;
    }

    mobileNav.classList.toggle('hidden', !open);
    document.body.classList.toggle('nav-open', open);
    toggle.setAttribute('aria-expanded', String(open));
  };

  // Toggle click
  toggle.addEventListener('click', (e) => {
    e.stopPropagation();
    const open = toggle.getAttribute('aria-expanded') !== 'true';
    setNavState(open);
  });

  // Cerrar al click en link
  mobileNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => setNavState(false));
  });

  // ESC
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') setNavState(false);
  });

  // Click fuera
  document.addEventListener('click', (e) => {
    if (isDesktop()) return;
    const open = toggle.getAttribute('aria-expanded') === 'true';
    if (!open) return;

    if (!mobileNav.contains(e.target) && !toggle.contains(e.target)) {
      setNavState(false);
    }
  });

  // Resize sync
  window.addEventListener('resize', () => setNavState(false));

  // Init
  setNavState(false);
});
