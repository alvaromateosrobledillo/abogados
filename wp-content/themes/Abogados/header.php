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

    <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-14">
      <div class="flex flex-wrap min-[1200px]:flex-nowrap items-center justify-between
                  gap-4 md:gap-5 lg:gap-6 py-5 px-3 lg:px-14">

        <!-- LOGO -->
        <a href="<?php echo esc_url(home_url('/')); ?>"
           data-header-item
           class="flex items-center gap-3 md:gap-4 flex-shrink-0
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
              <span class="block text-[16px] lg:text-[17px]
                           font-semibold tracking-[0.18em] uppercase text-[#58683d]">
                MBI Abogados
              </span>
              <span class="block text-[12px] lg:text-[14px]
                           uppercase tracking-[0.22em] text-[#5d5f55]">
                Marín | Besada | Iglesias
              </span>
            </span>
          <?php endif; ?>
        </a>

        <!-- DERECHA -->
        <div class="inline-flex items-center gap-4 md:gap-5 lg:gap-6 order-2">

          <!-- Idiomas desktop -->
          <div data-header-item
               class="hidden min-[1200px]:flex items-center gap-2
                      text-[13px] tracking-[0.18em] uppercase text-[#6b6e64]
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
                   border border-[#d9d6cc] bg-white shadow-sm
                   hover:bg-[#f2f1ec]
                   focus:outline-none focus:ring-2 focus:ring-[#c7c1b1]
                   opacity-0 translate-y-2 transition-all duration-500"
            aria-controls="mobileNav"
            aria-expanded="false"
            aria-label="<?php esc_attr_e('Abrir menú', 'abogados'); ?>">

            <svg class="w-7 h-7 text-[#3f3f39]" viewBox="0 0 24 24" fill="none">
              <path d="M5 7h14M5 12h14M5 17h14"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </button>
        </div>

        <!-- MENÚ -->
        <nav id="mobileNav"
             data-header-item
             class="hidden w-full order-3
                    min-[1200px]:flex min-[1200px]:w-auto
                    min-[1200px]:order-1 min-[1200px]:flex-1
                    min-[1200px]:justify-center
                    opacity-0 translate-y-2 transition-all duration-500"
             aria-label="<?php esc_attr_e('Menú principal', 'abogados'); ?>">

          <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'fallback_cb'    => false,
            'menu_class'     => 'font-normal flex flex-col p-5 mt-5
                                 border border-[#e2dfd5] bg-[#efeee8] text-[17px]
                                 min-[1200px]:mt-0 min-[1200px]:flex-row
                                 min-[1200px]:items-center min-[1200px]:space-x-10
                                 min-[1200px]:p-0 min-[1200px]:border-0
                                 min-[1200px]:bg-transparent min-[1200px]:text-[20px]',
            'li_class'       => 'list-none',
            'link_class'     => 'block py-3 px-4 text-[#3f3f39] transition
                                 hover:text-[#58683d] hover:bg-[#e8e6dd]
                                 min-[1200px]:relative min-[1200px]:px-4
                                 min-[1200px]:py-0 min-[1200px]:hover:bg-transparent
                                 min-[1200px]:after:content-[\'\']
                                 min-[1200px]:after:absolute min-[1200px]:after:left-0
                                 min-[1200px]:after:-bottom-2 min-[1200px]:after:h-px
                                 min-[1200px]:after:w-full min-[1200px]:after:bg-[#58683d]
                                 min-[1200px]:after:opacity-0
                                 min-[1200px]:after:transition-opacity
                                 min-[1200px]:hover:after:opacity-100',
            'link_active_class' => 'text-[#58683d] min-[1200px]:after:opacity-100',
          ]);
          ?>
        </nav>

      </div>
    </div>
  </div>
</header>
