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
      const link = e.target.closest('a[href]');
      if (!link) return;

      const href = link.getAttribute('href');
      if (!href || href === '#') return;

      const scrollToTarget = (selector) => {
        const target = document.querySelector(selector);
        if (!target) return;
        e.preventDefault();
        const y = window.scrollY + target.getBoundingClientRect().top - getOffset();
        window.scrollTo({ top: y, behavior: 'smooth' });
      };

      if (href.startsWith('#')) {
        scrollToTarget(href);
        return;
      }

      if (!href.includes('#')) return;

      let url;
      try {
        url = new URL(href, window.location.href);
      } catch {
        return;
      }

      if (url.origin !== window.location.origin) return;

      const normalizePath = (path) => path.replace(/\/+$/, '') || '/';
      if (normalizePath(url.pathname) !== normalizePath(window.location.pathname)) return;

      if (!url.hash || url.hash === '#') return;
      scrollToTarget(url.hash);
    });
  };

  // ======================================================
  // EQUIPO — mostrar botón en móvil al tocar la card
  // ======================================================
  const setupTeamCardToggle = () => {
    const cards = Array.from(document.querySelectorAll('[data-team-card]'))
      .filter(card => card.querySelector('[data-team-button]'));
    if (!cards.length) return;

    const isMobile = () => window.matchMedia('(max-width: 639px)').matches;

    const showButton = (card) => {
      const btn = card.querySelector('[data-team-button]');
      if (!btn) return;
      btn.classList.remove('opacity-0', 'translate-y-4');
      btn.classList.add('opacity-100', 'translate-y-0');
    };

    const hideButton = (card) => {
      const btn = card.querySelector('[data-team-button]');
      if (!btn) return;
      btn.classList.remove('opacity-100', 'translate-y-0');
      btn.classList.add('opacity-0', 'translate-y-4');
    };

    const openCard = (card) => {
      showButton(card);
      card.classList.add('is-open');
    };

    const closeCard = (card) => {
      hideButton(card);
      card.classList.remove('is-open');
    };

    const hideAll = () => cards.forEach(closeCard);

    document.addEventListener('click', (e) => {
      if (!isMobile()) return;

      const card = e.target.closest('[data-team-card]');
      if (!card || !cards.includes(card)) {
        hideAll();
        return;
      }

      if (e.target.closest('[data-team-button]') || e.target.closest('[data-modal]')) {
        return;
      }

      const isOpen = card.classList.contains('is-open');
      hideAll();
      if (!isOpen) openCard(card);
    });

    const mq = window.matchMedia('(max-width: 639px)');
    const handleChange = () => {
      if (!mq.matches) hideAll();
    };

    if (mq.addEventListener) {
      mq.addEventListener('change', handleChange);
    } else if (mq.addListener) {
      mq.addListener(handleChange);
    }
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

    // Team button toggle (mobile)
    setupTeamCardToggle();
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
  const setAccordionPanelState = (panel, open) => {
    if (!panel) return;
    panel.dataset.open = open ? 'true' : 'false';
    panel.setAttribute('aria-hidden', open ? 'false' : 'true');
    if (open) {
      panel.removeAttribute('inert');
    } else {
      panel.setAttribute('inert', '');
    }
  };

  const initAccordionPanels = () => {
    document.querySelectorAll('[data-accordion-panel]').forEach((panel) => {
      const isOpen = panel.dataset.open === 'true';
      setAccordionPanelState(panel, isOpen);
    });
  };

  initAccordionPanels();

  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('[data-accordion-trigger]');
    if (!trigger) return;

    const accordion = trigger.closest('[data-accordion]');
    if (!accordion) return;

    const isOpen = trigger.getAttribute('aria-expanded') === 'true';
    const singleMode = accordion.getAttribute('data-accordion') === 'single';

    if (singleMode) {
      accordion.querySelectorAll('[data-accordion-trigger]').forEach(btn => {
        if (btn === trigger) return;
        btn.setAttribute('aria-expanded', 'false');
        btn.querySelector('[data-accordion-icon]')?.classList.remove('rotate-180');
        setAccordionPanelState(document.getElementById(btn.getAttribute('aria-controls')), false);
      });
    }

    if (isOpen) {
      trigger.setAttribute('aria-expanded', 'false');
      trigger.querySelector('[data-accordion-icon]')?.classList.remove('rotate-180');
      setAccordionPanelState(document.getElementById(trigger.getAttribute('aria-controls')), false);
      return;
    }

    trigger.setAttribute('aria-expanded', 'true');
    trigger.querySelector('[data-accordion-icon]')?.classList.add('rotate-180');
    setAccordionPanelState(document.getElementById(trigger.getAttribute('aria-controls')), true);
  });

  // ======================================================
  // CONTACT FORM 7 - RESPONSE MODAL
  // ======================================================
  (() => {
    const statusMap = {
      wpcf7mailsent: 'success',
      wpcf7invalid: 'error',
      wpcf7mailfailed: 'error',
      wpcf7spam: 'error',
      wpcf7aborted: 'error',
      wpcf7unaccepted: 'error',
    };

    document.body.classList.add('cf7-modal-enabled');

    let modal;
    let titleEl;
    let messageEl;

    const getLang = () => {
      const lang = document.documentElement.getAttribute('lang') || '';
      return lang.toLowerCase().startsWith('en') ? 'en' : 'es';
    };

    const copy = {
      es: {
        successTitle: 'Mensaje enviado',
        errorTitle: 'No se pudo enviar',
        successFallback: 'Gracias, hemos recibido tu mensaje.',
        errorFallback: 'Hay errores en el formulario. Revisa los campos marcados.',
      },
      en: {
        successTitle: 'Message sent',
        errorTitle: 'Could not send',
        successFallback: 'Thanks, we received your message.',
        errorFallback: 'There are errors in the form. Please review the highlighted fields.',
      },
    };

    const ensureModal = () => {
      if (modal) return modal;

      modal = document.createElement('div');
      modal.className = 'cf7-modal';
      modal.hidden = true;
      modal.innerHTML = `
        <div class="cf7-modal__panel" role="document">
          <button type="button" class="cf7-modal__close" aria-label="Close">x</button>
          <div class="cf7-modal__title"></div>
          <div class="cf7-modal__message"></div>
        </div>
      `;

      document.body.appendChild(modal);

      titleEl = modal.querySelector('.cf7-modal__title');
      messageEl = modal.querySelector('.cf7-modal__message');

      modal.addEventListener('click', (e) => {
        if (e.target === modal || e.target.closest('.cf7-modal__close')) {
          hideModal();
        }
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') hideModal();
      });

      return modal;
    };

    const showModal = (status, message) => {
      const lang = getLang();
      const strings = copy[lang] || copy.es;
      const isSuccess = status === 'success';
      const title = isSuccess ? strings.successTitle : strings.errorTitle;
      const fallback = isSuccess ? strings.successFallback : strings.errorFallback;

      ensureModal();
      modal.classList.toggle('is-success', isSuccess);
      modal.classList.toggle('is-error', !isSuccess);
      titleEl.textContent = title;
      messageEl.textContent = message || fallback;
      modal.hidden = false;
      document.body.classList.add('cf7-modal-open');

      modal.querySelector('.cf7-modal__close')?.focus();
    };

    const hideModal = () => {
      if (!modal) return;
      modal.hidden = true;
      document.body.classList.remove('cf7-modal-open');
    };

    Object.keys(statusMap).forEach((eventName) => {
      document.addEventListener(eventName, (e) => {
        const status = statusMap[eventName];
        const message = e?.detail?.apiResponse?.message;
        showModal(status, message);
      });
    });
  })();

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
