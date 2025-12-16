<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#f7f6f2] text-slate-900 antialiased font-sans scroll-smooth'); ?>>
<?php wp_body_open(); ?>

<header id="inicio" class="w-full sticky top-0 z-50 bg-[#f7f6f2]/95 backdrop-blur border-b border-[#e6e3da]">
  <div class="max-w-screen-2xl mx-auto px-5 sm:px-8 lg:px-12">
    <div class="flex flex-wrap items-center justify-between gap-4 py-5">

      <!-- LOGO -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 flex-shrink-0">
        <?php if (has_custom_logo()) : ?>
          <span class="inline-flex items-center [&_img]:h-[46px] [&_img]:w-auto [&_img]:max-w-none">
            <?php the_custom_logo(); ?>
          </span>
          <span class="sr-only"><?php echo esc_html(get_bloginfo('name')); ?></span>
        <?php else : ?>
          <span class="leading-tight">
            <span class="block text-[15px] font-semibold tracking-[0.18em] uppercase text-[#58683d]">MBI Abogados</span>
            <span class="block text-[11px] uppercase tracking-[0.22em] text-[#5d5f55]">Marín | Besada | Iglesias</span>
          </span>
        <?php endif; ?>
      </a>

      <!-- DERECHA (idiomas + botón + hamburguesa) -->
      <div class="inline-flex items-center gap-4 md:order-2">

        <!-- Idiomas (solo desktop, como la imagen) -->
        <div class="hidden lg:flex items-center gap-2 text-[12px] tracking-[0.18em] uppercase text-[#6b6e64]">
          <a class="hover:text-[#58683d] transition" href="#">ES</a>
          <span class="opacity-60">|</span>
          <a class="hover:text-[#58683d] transition" href="#">EN</a>
        </div>

        <!-- CTA (siempre visible desde sm, como tu estilo) -->
        <a href="#contacto"
           class="hidden sm:inline-flex items-center justify-center h-10 px-5
                  bg-[#4a5530] text-white text-[14px] font-semibold
                  shadow-[0_8px_18px_rgba(83,95,53,0.22)]
                  hover:bg-[#3f4928] transition">
          Contactar
        </a>

        <!-- Hamburguesa (solo móvil/tablet) -->
        <button type="button"
          class="menu-toggle inline-flex items-center justify-center w-10 h-10 lg:hidden
                 border border-[#d9d6cc] bg-white shadow-sm
                 hover:bg-[#f2f1ec] focus:outline-none focus:ring-2 focus:ring-[#c7c1b1]"
          aria-controls="mobileNav"
          aria-expanded="false"
          aria-label="<?php esc_attr_e('Abrir menú', 'abogados'); ?>">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6 text-[#3f3f39]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M5 7h14M5 12h14M5 17h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </button>

      </div>

      <!-- MENU (PC: centrado / Móvil: colapsable tipo Flowbite) -->
      <nav id="mobileNav"
           class="hidden w-full lg:flex lg:w-auto lg:order-1 lg:flex-1 lg:justify-center"
           aria-label="<?php esc_attr_e('Menú principal', 'abogados'); ?>">

        <?php
        wp_nav_menu([
          'theme_location'    => 'primary',
          'container'         => false,
          'fallback_cb'       => false,

          // MÓVIL: caja con borde y fondo suave (Flowbite-like)
          // DESKTOP: transparente, horizontal, centrado y con aire (como la imagen)
          'menu_class'        => 'font-medium flex flex-col p-4 mt-4 border border-[#e2dfd5] bg-[#efeee8]
                                 lg:mt-0 lg:flex-row lg:space-x-10 lg:p-0 lg:border-0 lg:bg-transparent',

          'li_class'          => 'list-none',

          // Links móvil: bloque con padding
          // Links desktop: limpio, sin caja
          'link_class'        => 'block py-2 px-3 text-[#3f3f39] hover:text-[#58683d] transition
                                 hover:bg-[#e8e6dd] lg:hover:bg-transparent lg:px-0 lg:py-0',

          'link_active_class' => 'text-[#58683d]',
        ]);
        ?>

        <!-- Idiomas + CTA dentro del menú móvil (solo móvil) -->
        <div class="lg:hidden mt-4 px-4 pb-4 border-t border-[#e2dfd5] pt-4">
          <div class="flex items-center gap-2 text-[12px] tracking-[0.18em] uppercase text-[#6b6e64]">
            <a class="hover:text-[#58683d] transition" href="#">ES</a>
            <span class="opacity-60">|</span>
            <a class="hover:text-[#58683d] transition" href="#">EN</a>
          </div>

          <a class="mt-4 inline-flex items-center justify-center w-full h-11 px-5
                    bg-[#4a5530] text-white text-[14px] font-semibold
                    shadow-[0_8px_18px_rgba(83,95,53,0.22)]
                    hover:bg-[#3f4928] transition"
             href="#contacto">
            Contactar
          </a>
        </div>

      </nav>

    </div>
  </div>
</header>
