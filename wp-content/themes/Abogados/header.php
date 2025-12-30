<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#f7f6f2] text-slate-900 antialiased font-sans scroll-smooth'); ?>>
<?php wp_body_open(); ?>

<header id="inicio" class="w-full sticky top-0 z-50 bg-[#fbfbf7]/95 backdrop-blur border-b border-[#e6e3da] shadow-[0_6px_20px_rgba(0,0,0,0.04)]">
  <div class="max-w-screen-2xl mx-auto px-6 sm:px-10 lg:px-14">
    <div class="flex flex-wrap lg:flex-nowrap items-center justify-between gap-4 md:gap-5 lg:gap-6 py-5  px-3 lg:px-14">

      <!-- LOGO -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 md:gap-4 flex-shrink-0">
        <?php if (has_custom_logo()) : ?>
          <span class="inline-flex items-center [&_img]:h-12 md:[&_img]:h-[52px] lg:[&_img]:h-16 [&_img]:w-auto [&_img]:max-w-none">
            <?php the_custom_logo(); ?>
          </span>
          <span class="sr-only"><?php echo esc_html(get_bloginfo('name')); ?></span>
        <?php else : ?>
          <span class="leading-tight">
            <span class="block text-[16px] md:text-[17px] lg:text-[19px] font-semibold tracking-[0.18em] uppercase text-[#58683d]">MBI Abogados</span>
            <span class="block text-[12px] md:text-[12px] lg:text-[14px] uppercase tracking-[0.22em] text-[#5d5f55]">Marín | Besada | Iglesias</span>
          </span>
        <?php endif; ?>
      </a>

      <!-- DERECHA (idiomas + botón + hamburguesa) -->
      <div class="inline-flex items-center gap-4 md:gap-5 lg:gap-6 md:order-2">

        <!-- Idiomas (solo desktop, como la imagen) -->
        <div class="hidden lg:flex items-center gap-2 text-[13px] tracking-[0.18em] uppercase text-[#6b6e64]">
          <a class="hover:text-[#58683d] transition" href="#">ES</a>
          <span class="opacity-60">|</span>
          <a class="hover:text-[#58683d] transition" href="#">EN</a>
        </div>

        <!-- Hamburguesa (solo móvil) -->
        <button type="button"
          class="menu-toggle inline-flex items-center justify-center w-11 h-11 md:hidden
                 border border-[#d9d6cc] bg-white shadow-sm
                 hover:bg-[#f2f1ec] focus:outline-none focus:ring-2 focus:ring-[#c7c1b1]"
          aria-controls="mobileNav"
          aria-expanded="false"
          aria-label="<?php esc_attr_e('Abrir menú', 'abogados'); ?>">
          <span class="sr-only">Open main menu</span>
          <svg class="w-7 h-7 text-[#3f3f39]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M5 7h14M5 12h14M5 17h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </button>

      </div>

      <!-- MENU (PC: centrado / Móvil: colapsable tipo Flowbite) -->
      <nav id="mobileNav"
           class="hidden w-full md:flex md:w-auto md:order-1 md:flex-1 md:justify-center"
           aria-label="<?php esc_attr_e('Menú principal', 'abogados'); ?>">

        <?php
        wp_nav_menu([
          'theme_location'    => 'primary',
          'container'         => false,
          'fallback_cb'       => false,

          // MÓVIL: caja con borde y fondo suave (Flowbite-like)
          // DESKTOP: transparente, horizontal, centrado y con aire (como la imagen)
          'menu_class'        => 'font-normal flex flex-col p-5 mt-5 border border-[#e2dfd5] bg-[#efeee8] text-[17px]
                                 md:mt-0 md:flex-row md:items-center md:space-x-10 md:p-0 md:border-0 md:bg-transparent md:text-[24px] md:tracking-[0.35px] md:leading-[20px]',

          'li_class'          => 'list-none',

          // Links móvil: bloque con padding
          // Links desktop: limpio, sin caja
          'link_class'        => 'block py-3 px-4 text-[#3f3f39] transition
                                 hover:text-[#58683d] hover:bg-[#e8e6dd]
                                 md:relative md:px-5 md:py-0 md:text-[color:var(--id-preview-660-c-0-baf-d-4014-e-24-b-737-d-82-e-411-b-242-d-lovable-app-cod-gray,var(--color-grey-8,#141414))] md:hover:bg-transparent
                                 md:after:content-[\'\'] md:after:absolute md:after:left-0 md:after:-bottom-2 md:after:h-px md:after:w-full md:after:bg-[#58683d] md:after:opacity-0 md:after:transition-opacity md:hover:after:opacity-100',

          'link_active_class' => 'text-[#58683d] md:after:opacity-100',
        ]);
        ?>

        <!-- Idiomas dentro del menú móvil (solo móvil) -->
        <div class="md:hidden mt-5 px-5 pb-5 border-t border-[#e2dfd5] pt-5">
          <div class="flex items-center gap-2 text-[13px] tracking-[0.18em] uppercase text-[#6b6e64]">
            <a class="hover:text-[#58683d] transition" href="#">ES</a>
            <span class="opacity-60">|</span>
            <a class="hover:text-[#58683d] transition" href="#">EN</a>
          </div>
        </div>

      </nav>

    </div>
  </div>
</header>
