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

const modalRootSelector = '[data-modal-root]';

const updateBodyLock = () => {
  const hasOpenModal = document.querySelector(`${modalRootSelector}.flex`);
  document.body.classList.toggle('overflow-hidden', Boolean(hasOpenModal));
};

const openModal = (modal) => {
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  modal.setAttribute('aria-hidden', 'false');
  updateBodyLock();
};

const closeModal = (modal) => {
  modal.classList.add('hidden');
  modal.classList.remove('flex');
  modal.setAttribute('aria-hidden', 'true');
  updateBodyLock();
};

document.addEventListener('click', (e) => {
  const openBtn = e.target.closest('[data-modal]');
  const closeBtn = e.target.closest('[data-close]');
  const backdrop = e.target.closest('[data-modal-backdrop]');

  if (openBtn) {
    const modal = document.getElementById(openBtn.dataset.modal);
    if (modal) openModal(modal);
    return;
  }

  if (closeBtn) {
    const modal = closeBtn.closest(modalRootSelector);
    if (modal) closeModal(modal);
    return;
  }

  if (backdrop && backdrop === e.target) {
    closeModal(backdrop);
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key !== 'Escape') return;
  document.querySelectorAll(modalRootSelector).forEach(closeModal);
});

const toggleAccordionItem = (trigger, open) => {
  const panelId = trigger.getAttribute('aria-controls');
  const panel = panelId ? document.getElementById(panelId) : null;
  const icon = trigger.querySelector('[data-accordion-icon]');

  trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
  if (icon) icon.classList.toggle('rotate-180', open);
  if (panel) panel.classList.toggle('hidden', !open);
};

document.addEventListener('click', (e) => {
  const trigger = e.target.closest('[data-accordion-trigger]');
  if (!trigger) return;

  const accordion = trigger.closest('[data-accordion]');
  if (!accordion) return;

  const isOpen = trigger.getAttribute('aria-expanded') === 'true';

  if (accordion.dataset.accordion === 'single') {
    accordion.querySelectorAll('[data-accordion-trigger]').forEach((item) => {
      toggleAccordionItem(item, item === trigger ? !isOpen : false);
    });
    return;
  }

  toggleAccordionItem(trigger, !isOpen);
});
