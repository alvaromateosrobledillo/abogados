// ======================================================
// DOM READY
// ======================================================
document.addEventListener('DOMContentLoaded', () => {

  // ======================================================
  // MENÚ MÓVIL (hamburguesa)
  // ======================================================
  const toggle = document.querySelector('.menu-toggle');
  const mobileNav = document.getElementById('mobileNav');

  if (toggle && mobileNav) {
    const isDesktop = () => window.matchMedia('(min-width: 1200px)').matches;

    const setNavState = (open) => {
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

    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const open = toggle.getAttribute('aria-expanded') !== 'true';
      setNavState(open);
    });

    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => setNavState(false));
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') setNavState(false);
    });

    document.addEventListener('click', (e) => {
      if (isDesktop()) return;
      const open = toggle.getAttribute('aria-expanded') === 'true';
      if (!open) return;

      if (!mobileNav.contains(e.target) && !toggle.contains(e.target)) {
        setNavState(false);
      }
    });

    window.addEventListener('resize', () => setNavState(false));
    setNavState(false);
  }

  // ======================================================
  // HEADER – ANIMACIÓN DE ENTRADA (SAFE PARA STICKY)
  // ======================================================
  const headerInner = document.querySelector('[data-header-inner]');
  if (headerInner) {
    requestAnimationFrame(() => {
      headerInner.classList.remove('opacity-0', '-translate-y-3');
    });
  }

  // ======================================================
  // HEADER – STAGGER LOGO + LINKS
  // ======================================================
  const headerItems = document.querySelectorAll('[data-header-item]');
  headerItems.forEach((item, index) => {
    setTimeout(() => {
      item.classList.remove('opacity-0', 'translate-y-2');
      item.setAttribute('data-visible', 'true');
    }, 120 + index * 70);
  });
});


// ======================================================
// HEADER – REACCIÓN AL SCROLL (SOMBRA)
// ======================================================
(() => {
  const header = document.querySelector('[data-header]');
  if (!header) return;

  window.addEventListener('scroll', () => {
    header.classList.toggle(
      'shadow-[0_10px_30px_rgba(0,0,0,0.08)]',
      window.scrollY > 40
    );
  });
})();


// ======================================================
// MODALES
// ======================================================
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
  if (e.key === 'Escape') {
    document.querySelectorAll(modalRootSelector).forEach(closeModal);
  }
});


// ======================================================
// ACORDEÓN
// ======================================================
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
