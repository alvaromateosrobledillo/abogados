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
        <div class="flex items-center gap-6 py-5">
            <div class="flex items-center gap-3 flex-shrink-0 min-w-[180px]">
                <?php if (has_custom_logo()) : ?>
                    <div class="flex items-center">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <div class="leading-tight">
                        <span class="block text-lg font-semibold tracking-[0.1em] text-brand">MBI ABOGADOS</span>
                        <span class="block text-[11px] uppercase tracking-[0.16em] text-slate-600">Marín | Besada | Iglesias</span>
                    </div>
                <?php endif; ?>
            </div>

            <nav id="primaryNav" class="hidden lg:flex flex-1 items-center justify-center" aria-label="<?php esc_attr_e('Menú principal', 'abogados'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'    => 'primary',
                        'container'         => false,
                        'fallback_cb'       => false,
                        'menu_class'        => 'flex items-center justify-center gap-10 text-base font-semibold text-slate-700',
                        'li_class'          => 'list-none',
                        'li_active_class'   => 'text-brand',
                        'link_class'        => 'hover:text-brand transition px-1 py-2 block',
                        'link_active_class' => 'text-brand',
                    )
                );
                ?>
            </nav>

            <div class="flex items-center gap-4 ml-auto">
                <a class="hidden sm:inline-flex px-5 py-2.5 rounded bg-[#4a5530] text-white text-sm font-semibold shadow-[0_8px_18px_rgba(83,95,53,0.25)] hover:bg-[#4a5530] transition" href="#contacto">Contactar</a>
                <button class="menu-toggle lg:hidden h-11 w-11 border border-[#d9d6cc] bg-white rounded-full inline-flex flex-col items-center justify-center gap-1.5 shadow-sm"
                    aria-label="<?php esc_attr_e('Abrir menú', 'abogados'); ?>" aria-controls="mobileNav" aria-expanded="false">
                    <span class="block w-6 h-0.5 bg-slate-800"></span>
                    <span class="block w-6 h-0.5 bg-slate-800"></span>
                    <span class="block w-6 h-0.5 bg-slate-800"></span>
                </button>
            </div>
        </div>
    </div>

    <nav id="mobileNav" class="primary-nav lg:hidden hidden flex-col gap-3 text-sm font-semibold text-slate-700 px-5 pb-6">
        <div class="border-t border-[#e2dfd5] pt-4">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'    => 'primary',
                    'container'         => false,
                    'fallback_cb'       => false,
                    'menu_class'        => 'flex flex-col gap-1 text-base font-semibold text-slate-700',
                    'li_class'          => 'list-none',
                    'li_active_class'   => 'text-brand',
                    'link_class'        => 'block py-2 hover:text-brand transition',
                    'link_active_class' => 'text-brand',
                )
            );
            ?>
            <a class="mt-4 inline-flex items-center justify-center w-full px-5 py-2.5 rounded bg-brand text-white text-sm font-semibold shadow-[0_8px_18px_rgba(83,95,53,0.25)] hover:bg-[#4a5530] transition" href="#contacto">Contactar</a>
        </div>
    </nav>
</header>
