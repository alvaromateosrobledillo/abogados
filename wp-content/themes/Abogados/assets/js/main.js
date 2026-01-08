/* ======================================================
   main.js — MBI Abogados
   ====================================================== */

(() => {
  'use strict';

  // ======================================================
  // CONFIG (AJUSTA AQUÍ CUÁNDO SE DISPARAN ANIMACIONES)
  // ======================================================
  const REVEAL_DEFAULTS = {
    threshold: 0.12,
    // NEGATIVO abajo => anima más tarde (cuando ya estás leyendo)
    // -10% anima antes | -25% más tarde | -35% aún más tarde
    rootMargin: '0px 0px -25% 0px',
  };

  // Si tu header sticky mide aprox 96px, pon 96
  const STICKY_HEADER_OFFSET = 96;

  // ======================================================
  // HELPERS
  // ======================================================
  const raf = (fn) => requestAnimationFrame(fn);

  const removeRevealClasses = (el) => {
    if (!el) return;
    el.classList.remove(
      'opacity-0',
      '-translate-y-3',
      'translate-y-2',
      'translate-y-3',
      'translate-y-4',
      'translate-y-6',
      'translate-y-8',
      'scale-[0.96]',
      'scale-[1.03]',
      'scale-[1.04]',
      'scale-x-0'
    );
  };

  const createRevealObserver = (onReveal, options = {}) => {
    const { threshold, rootMargin } = { ...REVEAL_DEFAULTS, ...options };

    if (!('IntersectionObserver' in window)) {
      onReveal();
      return { observe: () => {} };
    }

    return new IntersectionObserver(([entry], obs) => {
      if (!entry.isIntersecting) return;
      onReveal();
      obs.disconnect();
    }, { threshold, rootMargin });
  };

  const revealSection = (sectionSelector, elementsSelector, delay = 120, obsOptions = {}) => {
    const section = document.querySelector(sectionSelector);
    if (!section) return;

    createRevealObserver(() => {
      document.querySelectorAll(elementsSelector).forEach((el, i) => {
        setTimeout(() => removeRevealClasses(el), i * delay);
      });
    }, obsOptions).observe(section);
  };

  // ======================================================
  // SMOOTH SCROLL (con offset por header sticky)
  // ======================================================
  const setupSmoothScroll = () => {
    const header = document.querySelector('[data-header]');
    const getOffset = () => {
      // Si el header cambia de alto, lo calcula. Si no existe, usa constante.
      const h = header?.getBoundingClientRect?.().height;
      return Math.round(h || STICKY_HEADER_OFFSET);
    };

    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;

      const href = link.getAttribute('href');
      if (!href || href === '#') return;

      const target = document.querySelector(href);
      if (!target) return;

      e.preventDefault();

      const y = window.scrollY + target.getBoundingClientRect().top - getOffset();
      window.scrollTo({ top: y, behavior: 'smooth' });
    });
  };

  // ======================================================
  // DOM READY
  // ======================================================
  document.addEventListener('DOMContentLoaded', () => {

    // ======================================================
    // HEADER — ENTRADA (IMPORTANTE: SI NO, SE QUEDA INVISIBLE)
    // ======================================================
    const headerInner = document.querySelector('[data-header-inner]');
    const headerItems = document.querySelectorAll('[data-header-item]');

    if (headerInner) {
      raf(() => removeRevealClasses(headerInner));
    }

    headerItems.forEach((el, i) => {
      setTimeout(() => removeRevealClasses(el), 120 + i * 80);
    });

    // ======================================================
    // MENÚ MÓVIL
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
        setNavState(toggle.getAttribute('aria-expanded') !== 'true');
      });

      mobileNav.querySelectorAll('a')
        .forEach(a => a.addEventListener('click', () => setNavState(false)));

      document.addEventListener('click', (e) => {
        if (!isDesktop() && !mobileNav.contains(e.target) && !toggle.contains(e.target)) {
          setNavState(false);
        }
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') setNavState(false);
      });

      window.addEventListener('resize', () => {
        if (!isDesktop()) setNavState(false);
      });

      setNavState(false);
    }

    // Smooth scroll
    setupSmoothScroll();
  });

  // ======================================================
  // HEADER — SOMBRA EN SCROLL
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
  // HERO — lazy video + reveal (solo cuando toca)
  // ======================================================
  (() => {
    const hero = document.querySelector('[data-hero]');
    if (!hero) return;

    const video  = hero.querySelector('[data-hero-bg]');
    const source = video?.querySelector('source[data-src]');
    const items  = hero.querySelectorAll('[data-hero-item]');
    const scroll = hero.querySelector('[data-hero-scroll]');

    const reveal = () => {
      items.forEach((el, i) => {
        setTimeout(() => removeRevealClasses(el), 200 + i * 120);
      });
      scroll && removeRevealClasses(scroll);
    };

    const loadVideo = () => {
      if (!video || !source || source.src) return;
      source.src = source.dataset.src;
      video.load();

      video.addEventListener('loadeddata', () => {
        removeRevealClasses(video);
        video.play().catch(() => {});
      }, { once: true });
    };

    createRevealObserver(() => {
      loadVideo();
      reveal();
    }, {
      // En hero puede ser un pelín antes
      threshold: 0.2,
      rootMargin: '0px 0px -15% 0px',
    }).observe(hero);
  })();

  // ======================================================
  // MODALES (abre/cierra siempre)
  // ======================================================
  document.addEventListener('click', (e) => {
    const open = e.target.closest('[data-modal]');
    const close = e.target.closest('[data-close]');
    const modalRoot = e.target.closest('[data-modal-root]');
    const backdrop = e.target.closest('[data-modal-backdrop]');

    if (open) {
      document.getElementById(open.dataset.modal)
        ?.classList.replace('hidden', 'flex');
      document.body.classList.add('overflow-hidden');
      return;
    }

    if (close || (backdrop && backdrop === e.target)) {
      modalRoot?.classList.replace('flex', 'hidden');
      document.body.classList.remove('overflow-hidden');
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key !== 'Escape') return;
    document.querySelectorAll('[data-modal-root]')
      .forEach(m => m.classList.replace('flex', 'hidden'));
    document.body.classList.remove('overflow-hidden');
  });

  // ======================================================
  // ACORDEÓN
  // ======================================================
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('[data-accordion-trigger]');
    if (!trigger) return;

    const accordion = trigger.closest('[data-accordion]');
    if (!accordion) return;

    const isOpen = trigger.getAttribute('aria-expanded') === 'true';

    accordion.querySelectorAll('[data-accordion-trigger]').forEach(btn => {
      btn.setAttribute('aria-expanded', 'false');
      btn.querySelector('[data-accordion-icon]')?.classList.remove('rotate-180');
      document.getElementById(btn.getAttribute('aria-controls'))?.classList.add('hidden');
    });

    if (!isOpen) {
      trigger.setAttribute('aria-expanded', 'true');
      trigger.querySelector('[data-accordion-icon]')?.classList.add('rotate-180');
      document.getElementById(trigger.getAttribute('aria-controls'))?.classList.remove('hidden');
    }
  });

  // ======================================================
  // REVEALS POR SECCIÓN (SCROLL REAL)
  // ======================================================
  revealSection(
    '[data-section="about"]',
    '[data-about-block],[data-about-item],[data-about-bottom],[data-about-text],[data-about-image],[data-about-line]'
  );

  revealSection(
    '[data-section="commitment"]',
    '[data-commitment-bg],[data-commitment-content],[data-commitment-item],[data-commitment-line],[data-commitment-box]'
  );

  revealSection(
    '[data-section="team"]',
    '[data-team-title],[data-team-card]'
  );

  revealSection(
    '[data-section="transformamos"]',
    '[data-transform-bg],[data-transform-box],[data-transform-item]'
  );

  revealSection(
    '[data-section="services"]',
    '[data-services-title],[data-services-left],[data-services-image],[data-services-right],[data-services-item]'
  );

  // IMPORTANTE: en tu HTML el contacto NO tiene data-section="contact"
  // Si quieres animarlo por scroll, añade data-section="contact" al <section id="contacto">
  // o cambia aquí el selector al que tengas.
  revealSection(
    '[data-section="contact"]',
    '[data-contact-title],[data-contact-line],[data-contact-left],[data-contact-map],[data-contact-item],[data-contact-form]'
  );

  revealSection(
    '[data-section="footer"]',
    '[data-footer-col],[data-footer-bottom]',
    160
  );

})();
