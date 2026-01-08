<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#f7f6f2] text-slate-900 antialiased font-sans scroll-smooth'); ?>>
  <?php wp_body_open(); ?>

  <header
    id="inicio"
    data-header
    class="w-full sticky top-0 z-50
         bg-[#fbfbf7]/95 backdrop-blur
         border-b border-[#e6e3da]
         shadow-[0_6px_20px_rgba(0,0,0,0.04)]
         transition-shadow duration-300">

    <!-- 🔑 WRAPPER INTERNO ANIMABLE -->
    <div
      data-header-inner
      class="opacity-0 -translate-y-3 transition-all duration-500">

      <div class="page-shell">
        <div class="flex flex-wrap min-[1200px]:flex-nowrap items-center justify-between
                  gap-4 md:gap-5 lg:gap-6 py-5">

          <!-- LOGO -->
          <a href="<?php echo esc_url(home_url('/')); ?>"
            data-header-item
            class="flex items-center gap-3 md:gap-4 flex-shrink-0 -mt-2
                  opacity-0 translate-y-2 transition-all duration-500">

            <?php if (has_custom_logo()) : ?>
              <span class="inline-flex items-center
                         [&_img]:h-12 md:[&_img]:h-[52px] lg:[&_img]:h-16
                         [&_img]:w-auto [&_img]:max-w-none">
                <?php the_custom_logo(); ?>
              </span>
              <span class="sr-only"><?php echo esc_html(get_bloginfo('name')); ?></span>
            <?php else : ?>
              <span class="leading-tight">
                <span class="block text-[20px] sm:text-[21px] lg:text-[24px]
                           font-semibold tracking-[0.16em] sm:tracking-[0.18em]
                           uppercase text-[#58683d]">
                  MBI Abogados
                </span>
                <span class="block text-[13px] sm:text-[14px] lg:text-[15px]
                           uppercase tracking-[0.22em] text-[#5d5f55]">
                  Marín | Besada | Iglesias
                </span>
              </span>
            <?php endif; ?>
          </a>

          <!-- DERECHA -->
          <div class="inline-flex items-center gap-3 md:gap-5 lg:gap-6 order-2">

            <!-- Idiomas desktop -->
            <div data-header-item
              class="hidden min-[1200px]:flex items-center gap-2
                      text-[16px] tracking-[0.2em] uppercase text-[#6b6e64]
                      opacity-0 translate-y-2 transition-all duration-500">
              <a class="hover:text-[#58683d] transition" href="#">ES</a>
              <span class="opacity-60">|</span>
              <a class="hover:text-[#58683d] transition" href="#">EN</a>
            </div>

            <!-- Hamburguesa -->
            <button
              type="button"
              data-header-item
              class="menu-toggle inline-flex items-center justify-center w-11 h-11
                   min-[1200px]:hidden
                   bg-white shadow-sm
                   hover:bg-[#f2f1ec]
                   focus:outline-none focus:ring-2 focus:ring-[#c7c1b1]
                   opacity-0 translate-y-2 transition-all duration-500"
              aria-controls="mobileNav"
              aria-expanded="false"
              aria-label="<?php esc_attr_e('Abrir menú', 'abogados'); ?>">

              <svg class="w-7 h-7 text-[#3f3f39]" viewBox="0 0 24 24" fill="none">
                <path d="M5 7h14M5 12h14M5 17h14"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </button>
          </div>

          <!-- MENÚ -->
          <nav
            id="mobileNav"
            data-header-item
            class="hidden w-full order-3
         min-[1200px]:flex min-[1200px]:w-auto
         min-[1200px]:order-1 min-[1200px]:flex-1
         min-[1200px]:justify-center
         opacity-0 translate-y-2 transition-all duration-500
         min-[1200px]:opacity-100 min-[1200px]:translate-y-0">

            <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              'container'      => false,
              'fallback_cb'    => false,
              'menu_class'     => 'font-light flex flex-col p-4 mt-4 
                                 border-t border-[#e2dfd5] text-[18px] tracking-[0.12em]
                                 min-[1200px]:mt-0 min-[1200px]:flex-row
                                 min-[1200px]:items-center min-[1200px]:space-x-10
                                 min-[1200px]:p-0 min-[1200px]:border-0
                                 min-[1200px]:tracking-[0.08em] min-[1200px]:text-[20px]',
              'li_class'       => 'list-none',
              'link_class'     => 'font-light block py-3 px-4 text-[#3f3f39] transition-all duration-300
                                 hover:text-[#58683d] hover:-translate-y-0.5
                                 relative
                                 after:content-[\'\'] after:absolute after:left-4 after:right-4
                                 after:-bottom-1 after:h-px after:bg-[#58683d]
                                 after:opacity-0 after:transition-opacity
                                 hover:after:opacity-100
                                 min-[1200px]:px-4 min-[1200px]:py-0
                                 min-[1200px]:after:left-0 min-[1200px]:after:right-0',
              'link_active_class' => 'text-[#58683d] after:opacity-100',
            ]);
            ?>
            <div class="min-[1200px]:hidden flex flex-col font-light text-[18px]
                        tracking-[0.12em] uppercase">
              <a class="font-light block py-3 px-4 text-[#3f3f39] transition-all duration-300
                        hover:text-[#58683d] hover:-translate-y-0.5
                        relative
                        after:content-[\'\'] after:absolute after:left-4 after:right-4
                        after:-bottom-1 after:h-px after:bg-[#58683d]
                        after:opacity-0 after:transition-opacity
                        hover:after:opacity-100"
                href="#">ES</a>
              <a class="font-light block py-3 px-4 text-[#3f3f39] transition-all duration-300
                        hover:text-[#58683d] hover:-translate-y-0.5
                        relative
                        after:content-[\'\'] after:absolute after:left-4 after:right-4
                        after:-bottom-1 after:h-px after:bg-[#58683d]
                        after:opacity-0 after:transition-opacity
                        hover:after:opacity-100"
                href="#">EN</a>
            </div>
          </nav>

        </div>
      </div>
    </div>
  </header>
