<?php get_header();
?>
<main
    id="contenido"
    role="main"
    class="flex flex-col gap-0 ">
    <section id="hero" data-hero class="relative isolate overflow-hidden">

        <!-- FONDO -->
        <div class="absolute inset-0 -z-10">
            <video
                data-hero-bg
                class="h-full w-full object-cover object-center
             opacity-0 scale-[1.03]
             transition-all duration-[1200ms] ease-out"
                muted
                loop
                playsinline
                preload="none"
                poster="<?php echo esc_url(
                            get_field('hero_poster')['url']
                                ?? get_template_directory_uri() . '/assets/video/video.png'
                        ); ?>"
                aria-hidden="true">

                <source
                    data-src="<?php echo esc_url(
                                    get_field('hero_video')['url']
                                        ?? get_template_directory_uri() . '/assets/video/hero.mp4'
                                ); ?>"
                    type="video/mp4" />
            </video>

            <div class="absolute inset-0 bg-[rgba(18,18,17,0.60)]"></div>
        </div>

        <!-- CONTENIDO -->
        <div class="page-shell flex min-h-[calc(100vh-96px)]
              flex-col items-center justify-center
              py-24 text-center">

            <?php if ($pretitle = get_field('hero_pretitle')) : ?>
                <p data-hero-item
                    class="uppercase tracking-[0.24em] text-[20px] sm:text-[24px] lg:text-[30px]
                font-medium text-white/95 opacity-0 translate-y-3 transition-all duration-700">
                    <?php echo esc_html($pretitle); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('hero_title')) : ?>
                <h1 data-hero-item
                    class=" text-[44px] sm:text-[56px] lg:text-[68px]
                 leading-[1.04] sm:leading-[1.02] lg:leading-[1.01]
                 tracking-[-0.01em] lg:tracking-[-0.015em]
                 text-balance text-white p-0
                 opacity-0 translate-y-4 transition-all duration-700">
                    <?php echo esc_html($title); ?>
                </h1>
            <?php endif; ?>

            <?php if ($subtitle = get_field('hero_subtitle')) : ?>
                <h2 data-hero-item
                    class="-mt-1 text-[44px] sm:text-[56px] lg:text-[68px]
                 leading-[1.04] sm:leading-[1.02] lg:leading-[1.01]
                 tracking-[-0.01em] lg:tracking-[-0.015em]
                 text-balance  text-[#7f8762]
                 opacity-0 translate-y-4 transition-all duration-700 p-0">
                    <?php echo esc_html($subtitle); ?>
                </h2>
            <?php endif; ?>

            <?php if ($desc = get_field('hero_description')) : ?>
                <p data-hero-item
                    class="max-w-2xl text-[19px] sm:text-[20px]
                text-white/90 opacity-0 translate-y-3 transition-all duration-700">
                    <?php echo esc_html($desc); ?>
                </p>
            <?php endif; ?>

            <!-- CTAs -->
            <div data-hero-item
                class="mt-10 flex flex-col sm:flex-row gap-4
                opacity-0 translate-y-3 transition-all duration-700">

                <?php if (get_field('hero_cta_primary_text')) : ?>
                    <a href="<?php echo esc_url(get_field('hero_cta_primary_url')); ?>"
                        class="h-11 min-w-[170px] px-9 bg-[#7f8762] text-white
                  shadow-[0_16px_36px_rgba(0,0,0,0.38)]
                  hover:bg-[#6f7a56] transition flex items-center justify-center">
                        <?php the_field('hero_cta_primary_text'); ?>
                    </a>
                <?php endif; ?>

                <?php if (get_field('hero_cta_secondary_text')) : ?>
                    <a href="<?php echo esc_url(get_field('hero_cta_secondary_url')); ?>"
                        class="h-11 min-w-[170px] px-9 border border-white/30
                  bg-white/5 text-white backdrop-blur-sm
                  hover:bg-white/10 transition flex items-center justify-center">
                        <?php the_field('hero_cta_secondary_text'); ?>
                    </a>
                <?php endif; ?>

            </div>
        </div>

        <!-- SCROLL -->
        <?php if ($scroll = get_field('hero_scroll_text')) : ?>
            <a
                href="#quienes-somos"
                data-hero-scroll
                class="absolute bottom-10 left-1/2 -translate-x-1/2
           flex flex-col items-center gap-2
           text-[12px] uppercase tracking-[0.28em]
           text-white/70 hover:text-white transition
           opacity-0">

                <span><?php echo esc_html($scroll); ?></span>

                <svg
                    width="14"
                    height="14"
                    viewBox="0 0 14 14"
                    fill="none"
                    class="text-white animate-bounce"
                    aria-hidden="true">
                    <path
                        d="M2.25 5.25L7 10.25L11.75 5.25"
                        stroke="currentColor"
                        stroke-width="1.4"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </a>
        <?php endif; ?>


    </section>



    <section
        id="quienes-somos"
        data-section="about"
        class="bg-white mb-20 lg:mb-28">

        <!-- BLOQUE SUPERIOR -->
        <div
            class="relative z-20 page-shell pt-24 pb-20 text-center
           opacity-0 translate-y-6 transition-all duration-700"
            data-about-block>

            <?php if ($pretitle = get_field('about_pretitle')) : ?>
                <p
                    class="uppercase tracking-[0.22em] text-[16px] sm:text-[18px] font-medium text-[#535F35]
               opacity-0 translate-y-3 transition-all duration-700"
                    data-about-item>
                    <?php echo esc_html($pretitle); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('about_title')) : ?>
                <h2
                    class="mt-6 text-[32px] sm:text-[38px] lg:text-[42px] leading-[1.35]
               font-normal text-[#141414] text-balance
               opacity-0 translate-y-3 transition-all duration-700"
                    data-about-item>
                    <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>

            <span
                class="mt-7 inline-block h-px w-16 bg-[#859263]
             opacity-0 scale-x-0 origin-left transition-all duration-700"
                data-about-line></span>

            <?php if ($about_text = get_field('about_text')) : ?>
                <div
                    class="mt-7 text-[#3d3f36] text-[19px] sm:text-[20px]
               leading-relaxed
                prose-p:my-3 prose-strong:text-[#4d5a34]
                prose-strong:font-normal
                opacity-0 translate-y-4 transition-all duration-700"
                    data-about-item>
                    <?php echo wp_kses_post($about_text); ?>
                </div>
            <?php endif; ?>

        </div>

        <!-- BLOQUE GRIS -->
        <div
            class="bg-[#dddfd7] py-8
           opacity-0 translate-y-8 transition-all duration-700"
            data-about-bottom>

            <div class="page-shell flex flex-col lg:grid
                lg:grid-cols-[1.1fr_0.9fr] items-center gap-8">

                <!-- TEXTO -->
                <div
                    class="space-y-4 px-8
               opacity-0 translate-y-4 transition-all duration-700"
                    data-about-text>

                    <div>
                        <?php if ($claim1 = get_field('about_claim_1')) : ?>
                            <h3 class="text-[28px] sm:text-[30px] font-normal text-[#141414]">
                                <?php echo esc_html($claim1); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($claim2 = get_field('about_claim_2')) : ?>
                            <p class="text-[28px] sm:text-[30px] italic font-normal text-[#4d5a34] -mt-1">
                                <?php echo esc_html($claim2); ?>
                            </p>
                        <?php endif; ?>

                        <span class="block w-12 h-[1.5px] bg-[#a5a693] mt-3"></span>
                    </div>

                    <?php if ($content = get_field('about_paragraphs')) : ?>
                        <div class="prose prose-p:my-3
    prose-strong:font-semibold prose-strong:text-[#4d5a34]
    prose-p:leading-relaxed
    text-[#3d3f36] text-[19px] sm:text-[20px]
    max-w-2xl">
                            <?php echo wp_kses_post($content); ?>
                        </div>
                    <?php endif; ?>


                </div>

                <!-- IMAGEN -->
                <div class="flex justify-center lg:justify-end w-full">
                    <?php if ($image = get_field('about_image')) : ?>
                        <div
                            class="relative w-full max-w-[540px]
                   lg:-mt-16 lg:-mb-16
                   shadow-[0_22px_55px_rgba(0,0,0,0.18)]
                   opacity-0 scale-[0.96] transition-all duration-700"
                            data-about-image>

                            <img
                                class="w-full h-[320px] sm:h-[360px] lg:h-[420px] object-cover"
                                src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <section
        id="compromiso"
        data-section="commitment"
        class="relative isolate overflow-hidden bg-[#0c0c0b]
         py-24 lg:py-28 min-h-screen flex items-center">

        <!-- FONDO -->
        <div
            data-commitment-bg
            class="absolute inset-0 -z-10 opacity-0 scale-[1.04] transition-all duration-[1200ms] ease-out">
            <?php if ($bg = get_field('commitment_bg_image')) : ?>
                <img
                    class="h-full w-full object-cover object-center opacity-55"
                    src="<?php echo esc_url($bg['url']); ?>"
                    alt="<?php echo esc_attr($bg['alt']); ?>">
            <?php else : ?>
                <img
                    class="h-full w-full object-cover object-center opacity-55"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/edificio.png"
                    alt="Fondo arquitectónico">
            <?php endif; ?>
            <div class="absolute inset-0 bg-[#141414D9]/85"></div>
        </div>

        <!-- CONTENIDO -->
        <div
            data-commitment-content
            class="relative page-shell text-center
           opacity-0 translate-y-8 transition-all duration-700 ease-out">

            <?php if ($pre = get_field('commitment_pretitle')) : ?>
                <p
                    data-commitment-item
                    class="uppercase tracking-[0.34em] text-[13px] sm:text-[14px]
               font-normal text-white
               opacity-0 translate-y-4 transition-all duration-500">
                    <?php echo esc_html($pre); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('commitment_title')) : ?>
                <h2
                    data-commitment-item
                    class="mt-6 text-[32px] sm:text-[38px] lg:text-[42px]
               leading-[1.2] font-normal text-white
               opacity-0 translate-y-4 transition-all duration-500">
                    <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>

            <?php if ($subtitle = get_field('commitment_subtitle')) : ?>
                <h3
                    data-commitment-item
                    class="text-[30px] sm:text-[36px] lg:text-[40px]
               leading-[1.2] italic font-normal text-[#859263]
               opacity-0 translate-y-4 transition-all duration-500">
                    <?php echo esc_html($subtitle); ?>
                </h3>
            <?php endif; ?>

            <span
                data-commitment-line
                class="mt-7 inline-block h-px w-[120px] bg-[#859263]
             opacity-0 scale-x-0 origin-center
             transition-all duration-500"></span>

            <?php if ($text1 = get_field('commitment_text_1')) : ?>
                <div
                    data-commitment-item
                    class="mt-8 mx-auto   text-white
               text-[19px] sm:text-[23px] leading-relaxed
               [&_p]:mb-6
               opacity-0 translate-y-6 transition-all duration-500">
                    <?php echo wp_kses_post($text1); ?>
                </div>
            <?php endif; ?>

            <?php if ($text2 = get_field('commitment_text_2')) : ?>
                <div
                    data-commitment-item
                    class="mt-7 mx-auto  text-[#859263]
               text-[19px] sm:text-[23px] leading-relaxed
               [&_p]:mb-6
               opacity-0 translate-y-6 transition-all duration-500">
                    <?php echo wp_kses_post($text2); ?>
                </div>
            <?php endif; ?>

            <!-- CAJAS -->
            <div
                data-commitment-boxes
                class="mt-16 grid gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-6">

                <?php
                $boxes = [
                    ['user.svg', 'Trato directo con socios', 'lg:col-span-2'],
                    ['lenguaje.svg', 'Lenguaje claro y accesible', 'lg:col-span-2'],
                    ['especiali.svg', 'Alta especialización', 'lg:col-span-2'],
                    ['compromiso.svg', 'Compromiso firme con cada cliente', 'lg:col-span-3'],
                    ['agilidad.svg', 'Agilidad y estrategia', 'lg:col-span-3'],
                ];
                ?>

                <?php foreach ($boxes as $i => [$icon, $text, $span]) : ?>
                    <div
                        data-commitment-box
                        class="flex items-center gap-3 border border-[#D1D4D6]
                 px-6 sm:px-10 lg:px-[58px]
                 py-5 sm:py-6 text-[17px] sm:text-[18px]
                 font-normal text-white text-left min-h-[80px]
                 <?php echo $span; ?>
                 opacity-0 translate-y-6 transition-all duration-500">

                        <img class="h-5 w-5 shrink-0"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $icon; ?>"
                            alt="" aria-hidden="true">
                        <?php echo $text; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section
        id="equipo"
        data-section="team"
        class="py-10 lg:py-12 bg-white">

        <div class="page-shell space-y-8 sm:space-y-10">

            <!-- ===== SOCIOS ===== -->
            <?php if (have_rows('partners')) : ?>

                <div
                    data-team-title
                    class="text-center opacity-0 translate-y-6 transition-all duration-500">
                    <p class="uppercase tracking-[0.34em] text-[13px] sm:text-[14px] font-normal text-[#7a8464]">
                        Socios
                    </p>
                </div>

                <div class="grid gap-4 sm:gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <?php $i = 0;
                    while (have_rows('partners')) : the_row();
                        $i++;
                        $name  = get_sub_field('name');
                        $role  = get_sub_field('role');
                        $image = get_sub_field('image');
                        $bio   = get_sub_field('bio');
                    ?>

                        <article
                            data-team-card
                            class="group relative overflow-hidden border border-[#e2dfd5] bg-black
                   shadow-[0_22px_50px_rgba(0,0,0,0.22)]
                   opacity-0 translate-y-8 transition-all duration-500">

                            <div class="w-full aspect-[1/1] sm:aspect-[2/3]">
                                <?php if ($image) : ?>
                                    <img
                                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        style="object-position: center top;"
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>

                            <div class="absolute bottom-0 left-0 right-0 p-4 text-left">
                                <h3 class="text-[18px] font-normal text-[#b7be9b] leading-tight">
                                    <?php echo esc_html($name); ?>
                                </h3>
                                <p class="mt-1 text-[12px] uppercase tracking-[0.12em] text-white/80">
                                    <?php echo esc_html($role); ?>
                                </p>
                                <button
                                    type="button"
                                    data-modal="partner-modal-<?php echo $i; ?>"
                                    class="mt-2 inline-flex items-center gap-2 text-[12px]
                       font-normal text-[#d1d7bd]
                       border border-[#9aa27a] px-3 py-1.5">
                                    Conoce más
                                </button>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <!-- MODALES SOCIOS (sin animar, correcto así) -->
                <?php $i = 0;
                while (have_rows('partners')) : the_row();
                    $i++;
                    $name  = get_sub_field('name');
                    $role  = get_sub_field('role');
                    $image = get_sub_field('image');
                    $bio   = get_sub_field('bio');
                ?>
                    <div
                        id="partner-modal-<?php echo $i; ?>"
                        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 px-4"
                        data-modal-root
                        data-modal-backdrop>

                        <div class="relative w-full max-w-xl bg-white p-8 shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
                            <button class="absolute right-4 top-4 text-[#7a8464]" data-close>✕</button>

                            <div class="text-center">
                                <?php if ($image) : ?>
                                    <div class="mx-auto mb-4 h-[120px] w-[120px] overflow-hidden rounded-full">
                                        <img class="h-full w-full object-cover"
                                            src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                <?php endif; ?>

                                <h3 class="text-[22px] font-normal text-[#58683d]">
                                    <?php echo esc_html($name); ?>
                                </h3>
                                <p class="text-[17px] text-[#4f5047] mb-4">
                                    <?php echo esc_html($role); ?>
                                </p>
                                <div class="text-[18px] leading-relaxed text-[#3d3f36] text-left">
                                    <?php echo wp_kses_post($bio); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


            <!-- ===== EQUIPO ===== -->
            <?php if (have_rows('team_members')) : ?>

                <div
                    data-team-title
                    class="pt-3 text-center opacity-0 translate-y-6 transition-all duration-500">
                    <p class="uppercase tracking-[0.34em] text-[13px] sm:text-[14px] font-normal text-[#7a8464]">
                        Equipo
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <?php $j = 0;
                    while (have_rows('team_members')) : the_row();
                        $j++;
                        $name  = get_sub_field('name');
                        $role  = get_sub_field('role');
                        $image = get_sub_field('image');
                        $bio   = get_sub_field('bio');
                    ?>

                        <article
                            data-team-card
                            class="group text-center relative
                   opacity-0 translate-y-8 transition-all duration-500">

                            <?php if ($image) : ?>
                                <div class="mx-auto h-[120px] w-[120px] overflow-hidden rounded-full">
                                    <img class="h-full w-full object-cover"
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="mt-[-28px] bg-[#e3e4db] px-5 pt-8 pb-5">
                                <h3 class="text-[18px] font-normal text-[#58683d]">
                                    <?php echo esc_html($name); ?>
                                </h3>
                                <p class="mt-1 text-[15px] text-[#4f5047]">
                                    <?php echo esc_html($role); ?>
                                </p>
                                <button
                                    type="button"
                                    data-modal="team-modal-<?php echo $j; ?>"
                                    class="mt-2 text-[13px] text-[#58683d]
                       border border-[#b5baa6] px-3 py-1">
                                    Conoce más
                                </button>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <!-- MODALES EQUIPO (igual que antes) -->
                <?php $j = 0;
                while (have_rows('team_members')) : the_row();
                    $j++;
                    $name  = get_sub_field('name');
                    $role  = get_sub_field('role');
                    $image = get_sub_field('image');
                    $bio   = get_sub_field('bio');
                ?>
                    <div
                        id="team-modal-<?php echo $j; ?>"
                        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 px-4"
                        data-modal-root
                        data-modal-backdrop>

                        <div class="relative w-full max-w-xl bg-white p-8">
                            <button class="absolute right-4 top-4 text-[#7a8464]" data-close>✕</button>

                            <div class="text-center">
                                <?php if ($image) : ?>
                                    <div class="mx-auto mb-4 h-[120px] w-[120px] overflow-hidden rounded-full">
                                        <img class="h-full w-full object-cover"
                                            src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                <?php endif; ?>

                                <h3 class="text-[22px] text-[#58683d]"><?php echo esc_html($name); ?></h3>
                                <p class="text-[17px] text-[#4f5047] mb-4"><?php echo esc_html($role); ?></p>
                                <div class="text-[18px] text-[#3d3f36] text-left">
                                    <?php echo wp_kses_post($bio); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>


    <section
        id="transformamos"
        data-section="transformamos"
        class="relative isolate overflow-hidden bg-[#0f0f0f] py-16 lg:py-20">

        <!-- FONDO -->
        <div
            data-transform-bg
            class="absolute inset-0 -z-10
               opacity-0 scale-[1.03]
               transition-all duration-[1200ms] ease-out">

            <img
                class="h-full w-full object-cover object-center"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/edificio.png"
                alt="Fondo arquitectónico" />

            <div class="absolute inset-0 bg-[#0d0d0d]/75"></div>
        </div>

        <!-- CONTENIDO -->
        <div class="page-shell">
            <div
                data-transform-box
                class="border border-white/40
                   px-6 py-12 text-center
                   sm:px-12 sm:py-14
                   lg:px-20 lg:py-16
                   opacity-0 translate-y-8
                   transition-all duration-700 ease-out">

                <h2
                    data-transform-item
                    class="text-[26px] sm:text-[32px] lg:text-[36px]
                       leading-snug font-normal italic text-balance text-white
                       opacity-0 translate-y-4 transition-all duration-700">
                    Transformamos el Derecho desde la cercanía, el rigor y la visión estratégica.
                </h2>

                <p
                    data-transform-item
                    class="mt-6 mx-auto max-w-3xl
                       text-[17px] sm:text-[18px] lg:text-[19px]
                       leading-relaxed text-white/90 font-normal
                       opacity-0 translate-y-4 transition-all duration-700">
                    En MBI Abogados ofrecemos asesoramiento jurídico con visión estratégica,
                    claridad constante y dedicación personal. Lo esencial bien hecho.
                    Lo complejo bien pensado.
                </p>

                <a
                    data-transform-item
                    href="#contacto"
                    class="mt-8 inline-flex items-center justify-center
                       h-11 min-w-[170px] px-9
                       bg-[#7f8762] text-white text-[16px] font-normal
                       shadow-[0_16px_36px_rgba(0,0,0,0.38)]
                       hover:bg-[#6f7a56] transition
                       opacity-0 translate-y-4">
                    Contacta
                </a>
            </div>
        </div>
    </section>

    <section
        id="servicios"
        data-section="services"
        class="bg-[#f7f6f2] py-16 lg:py-20">

        <div class="page-shell space-y-10 sm:space-y-12">

            <!-- PRETÍTULO -->
            <div
                data-services-title
                class="text-center opacity-0 translate-y-6 transition-all duration-700">
                <p class="uppercase tracking-[0.32em] text-[15px] sm:text-[16px]
                      font-normal text-[#7a8464]">
                    Servicios
                </p>
            </div>

            <?php
            $service_icons = [
                'edificio.svg',
                'balance.svg',
                'maleta.svg',
                'escudo.svg',
                'caras.svg',
                'asesoramiento.svg',
            ];
            ?>

            <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">

                <!-- COLUMNA IZQUIERDA -->
                <div
                    data-services-left
                    class="space-y-4 opacity-0 translate-y-8 transition-all duration-700">

                    <h2 class="text-[34px] sm:text-[40px] leading-tight font-normal text-[#34362f]">
                        Soluciones jurídicas
                        <span class="italic text-[#6a7352]">
                            sencillas, sólidas y personalizadas
                        </span>
                    </h2>

                    <span class="block w-10 h-px bg-[#b9bbab]"></span>

                    <p class="text-[17px] sm:text-[18px] leading-relaxed text-[#4c4e47]">
                        En MBI Abogados convertimos complejidad jurídica en decisiones claras.
                        Priorizamos, aterrizamos escenarios y acompañamos la ejecución con criterio
                        y responsabilidad. Lo esencial bien hecho. Lo complejo bien pensado.
                    </p>

                    <div
                        class="overflow-hidden border border-[#e1dfd5] bg-white
                           shadow-[0_12px_26px_rgba(0,0,0,0.08)]
                           opacity-0 scale-[0.96] transition-all duration-700"
                        data-services-image>

                        <img
                            class="h-[200px] w-full object-cover sm:h-[220px] lg:h-[240px]"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/madrid.png"
                            alt="Vista urbana de Madrid">
                    </div>
                </div>

                <!-- COLUMNA DERECHA -->
                <div
                    data-services-right
                    class="space-y-4 lg:pt-1 opacity-0 translate-y-8 transition-all duration-700">

                    <p class="text-[16px] sm:text-[18px] text-[#5b5d55]">
                        Nos especializamos en áreas donde la experiencia marca la diferencia:
                    </p>

                    <?php if (have_rows('services')) : ?>
                        <div class="space-y-2" data-accordion="single">

                            <?php $i = 0;
                            while (have_rows('services')) : the_row();
                                $title = get_sub_field('title');
                                $desc  = get_sub_field('desc');
                                $icon  = $service_icons[$i] ?? 'edificio.svg';
                            ?>

                                <div
                                    data-services-item
                                    class="border border-[#e0e0d6] bg-[#e8e9df]
                                       opacity-0 translate-y-6 transition-all duration-500">

                                    <!-- TRIGGER -->
                                    <button
                                        type="button"
                                        class="flex w-full items-center justify-between gap-4 px-6 py-4 text-left"
                                        data-accordion-trigger
                                        aria-expanded="false"
                                        aria-controls="service-panel-<?php echo $i; ?>">

                                        <span class="flex items-center gap-3">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo esc_attr($icon); ?>"
                                                class="h-6 w-6"
                                                alt=""
                                                aria-hidden="true">

                                            <span class="text-[18px] sm:text-[19px] font-normal text-[#3f423b]">
                                                <?php echo esc_html($title); ?>
                                            </span>
                                        </span>

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-[#6a7352] transition-transform"
                                            fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="1.8"
                                            data-accordion-icon>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <!-- PANEL -->
                                    <div
                                        id="service-panel-<?php echo $i; ?>"
                                        class="border-t border-[#d4d5c8]
                                           px-6 pb-5 pt-3
                                           text-[17px] sm:text-[18px]
                                           leading-relaxed text-[#4b4d45]
                                           hidden"
                                        data-accordion-panel>

                                        <?php echo wp_kses_post($desc); ?>
                                    </div>
                                </div>

                            <?php $i++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>



    <section
        id="contacto"
        data-section="contact"
        class="py-16 lg:py-20 bg-white">

        <div class="page-shell">

            <!-- CABECERA -->
            <div
                data-contact-title
                class="text-center space-y-3 mb-12
             opacity-0 translate-y-6 transition-all duration-700">

                <h2 class="text-[38px] sm:text-[44px] font-serif font-normal text-[#3f3f39]">
                    Estamos cerca
                </h2>

                <span
                    data-contact-line
                    class="inline-block h-px w-16 bg-[#859263]
               opacity-0 scale-x-0 origin-center transition-all duration-700"></span>

                <p class="text-[16px] sm:text-[17px] text-[#4f5047]">
                    Cada cliente importa. Cada caso merece una respuesta a su medida.
                </p>
            </div>

            <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-10 lg:gap-12 items-start">

                <!-- COLUMNA IZQUIERDA -->
                <div
                    data-contact-left
                    class="space-y-8 opacity-0 translate-y-8 transition-all duration-700">

                    <!-- MAPA -->
                    <div
                        data-contact-map
                        class="rounded-lg overflow-hidden border border-[#d9d7cf]
                 shadow-[0_10px_24px_rgba(0,0,0,0.08)]
                 opacity-0 scale-[0.96] transition-all duration-700">

                        <iframe
                            title="Mapa MBI Abogados"
                            src="https://www.google.com/maps?q=Calle+Recoletos+19+Madrid&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-[260px] sm:h-[280px] border-0">
                        </iframe>
                    </div>

                    <!-- DATOS -->
                    <div class="grid gap-x-12 gap-y-8 sm:grid-cols-2 lg:grid-cols-3 text-[#3f413a]">

                        <!-- DIRECCIÓN -->
                        <div
                            data-contact-item
                            class="flex gap-4 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/direccion.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Dirección</p>
                                <p class="text-[15px] sm:text-[16px]">Calle Recoletos 19</p>
                                <p class="text-[15px] sm:text-[16px]">28001 Madrid, España</p>
                            </div>
                        </div>

                        <!-- TELÉFONO -->
                        <div
                            data-contact-item
                            class="flex gap-4 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/telefono.svg"
                                alt="" aria-hidden="true">

                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Teléfono</p>
                                <a
                                    href="tel:+34912345678"
                                    class="text-[15px] sm:text-[16px] hover:text-[#58683d] transition">
                                    +34 91 234 56 78
                                </a>
                            </div>
                        </div>

                        <!-- HORARIO -->
                        <div
                            data-contact-item
                            class="flex gap-4 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/reloj.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Horario</p>
                                <p class="text-[15px] sm:text-[16px]">L–V · 9:00 a 17:30</p>
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div
                            data-contact-item
                            class="flex gap-4 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Email</p>
                                <a
                                    href="mailto:info@mbiabogados.com"
                                    class="text-[15px] sm:text-[16px] hover:text-[#58683d] transition">
                                    info@mbiabogados.com
                                </a>
                            </div>
                        </div>

                        <!-- LINKEDIN -->
                        <div
                            data-contact-item
                            class="flex gap-4 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">LinkedIn</p>
                                <a
                                    href="#inicio"
                                    class="text-[15px] sm:text-[16px] hover:text-[#58683d] transition">
                                    MBI Abogados
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- COLUMNA DERECHA -->
                <div
                    data-contact-form
                    class="lg:border-l lg:border-[#d7d4cb] lg:pl-10 space-y-5
               opacity-0 translate-y-8 transition-all duration-700">

                    <div class="space-y-2">
                        <h3 class="text-[24px] font-normal text-[#3f3f39]">Escríbenos</h3>
                        <p class="text-[16px] text-[#4a4b44]">Estamos aquí para escucharte.</p>
                    </div>

                    <!-- FORMULARIO -->
                    <form class="space-y-4">
                        <input
                            class="w-full border border-[#d8d4c8] px-3 py-3 text-[16px]"
                            type="text"
                            placeholder="Nombre completo"
                            autocomplete="name"
                            required>

                        <input
                            class="w-full border border-[#d8d4c8] px-3 py-3 text-[16px]"
                            type="email"
                            placeholder="Correo electrónico"
                            autocomplete="email"
                            required>

                        <input
                            class="w-full border border-[#d8d4c8] px-3 py-3 text-[16px]"
                            type="tel"
                            placeholder="Teléfono"
                            autocomplete="tel">

                        <textarea
                            class="w-full border border-[#d8d4c8] px-3 py-3 text-[16px]"
                            rows="5"
                            placeholder="Escribe tu consulta"
                            required></textarea>

                        <button
                            type="submit"
                            class="relative w-full h-11 bg-[#596636] text-white
                   hover:bg-[#4e5a2f] transition
                   disabled:opacity-60 disabled:cursor-not-allowed"
                            data-submit-btn>

                            <span data-submit-text>Enviar mensaje</span>

                            <span
                                data-submit-loader
                                class="absolute inset-0 flex items-center justify-center
                     opacity-0 transition-opacity duration-200">

                                <svg class="h-5 w-5 animate-spin text-white" viewBox="0 0 24 24" aria-hidden="true">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3" />
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z" />
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>


</main>
<?php get_footer(); ?>