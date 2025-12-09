document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.menu-toggle');
  const mobileNav = document.getElementById('mobileNav');

  if (!toggle || !mobileNav) return;

  toggle.addEventListener('click', () => {
    mobileNav.classList.toggle('hidden');
    document.body.classList.toggle('nav-open');
  });

  mobileNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      mobileNav.classList.add('hidden');
      document.body.classList.remove('nav-open');
    });
  });
});
