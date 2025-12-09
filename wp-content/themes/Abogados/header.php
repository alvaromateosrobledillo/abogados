<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#f7f6f2] text-slate-900 antialiased font-sans scroll-smooth'); ?>>
<?php wp_body_open(); ?>

<header id="inicio" class="w-full sticky top-0 z-50 bg-[#f2f0eb] border-b border-[#e2dfd5] shadow-[0_8px_20px_rgba(0,0,0,0.05)]">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center gap-6 relative">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-full border border-[#c1c1b8] grid place-items-center text-brand font-bold text-lg">MB</div>
            <div class="leading-tight">
                <span class="block text-sm font-semibold tracking-[0.08em] text-brand">MB | ABOGADOS</span>
                <span class="block text-[11px] uppercase tracking-[0.16em] text-slate-500">Madrid | España | Business</span>
            </div>
        </div>

        <nav id="primaryNav" class="hidden lg:flex flex-1 items-center justify-center gap-10 text-sm font-semibold text-slate-600">
            <a class="hover:text-brand transition" href="#inicio">Inicio</a>
            <a class="hover:text-brand transition" href="#quienes-somos">Quiénes Somos</a>
            <a class="hover:text-brand transition" href="#servicios">Servicios</a>
            <a class="hover:text-brand transition" href="#filosofia">Filosofía</a>
            <a class="hover:text-brand transition" href="#contacto">Contacto</a>
        </nav>

        <div class="hidden md:flex items-center gap-4">
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
                <a class="text-brand hover:text-brand-soft transition" href="#contacto">ES</a>
                <span>|</span>
                <a class="hover:text-brand transition" href="#contacto">EN</a>
            </div>
            <a class="px-5 py-2 rounded bg-brand text-white text-sm font-semibold shadow-[0_8px_22px_rgba(83,95,53,0.35)] hover:bg-[#434c2b] transition" href="#contacto">Contactar</a>
        </div>

        <button class="menu-toggle lg:hidden h-11 w-11 border border-[#d9d6cc] bg-white rounded-full inline-flex flex-col items-center justify-center gap-1.5 shadow-sm" aria-label="Abrir menú">
            <span class="block w-6 h-0.5 bg-slate-800"></span>
            <span class="block w-6 h-0.5 bg-slate-800"></span>
            <span class="block w-6 h-0.5 bg-slate-800"></span>
        </button>
    </div>

    <nav id="mobileNav" class="primary-nav lg:hidden hidden flex-col gap-3 text-sm font-semibold text-slate-700 px-4 pb-5">
        <div class="border-t border-[#e2dfd5] pt-3">
            <a class="block py-2 hover:text-brand transition" href="#inicio">Inicio</a>
            <a class="block py-2 hover:text-brand transition" href="#quienes-somos">Quiénes Somos</a>
            <a class="block py-2 hover:text-brand transition" href="#servicios">Servicios</a>
            <a class="block py-2 hover:text-brand transition" href="#filosofia">Filosofía</a>
            <a class="block py-2 hover:text-brand transition" href="#contacto">Contacto</a>
            <div class="flex items-center gap-3 pt-3 text-xs font-semibold text-slate-500">
                <a class="text-brand hover:text-brand-soft transition" href="#contacto">ES</a>
                <span>|</span>
                <a class="hover:text-brand transition" href="#contacto">EN</a>
            </div>
            <a class="mt-3 inline-flex items-center justify-center w-full px-5 py-2.5 rounded bg-brand text-white text-sm font-semibold shadow-[0_8px_22px_rgba(83,95,53,0.35)] hover:bg-[#434c2b] transition" href="#contacto">Contactar</a>
        </div>
    </nav>
</header>
