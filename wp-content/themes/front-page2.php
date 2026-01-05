<?php get_header();
?>
<main class="flex flex-col gap-0">
    <section id="hero" class="relative isolate overflow-hidden">

        <div class="absolute inset-0 -z-10">
            <video
                class="h-full w-full object-cover object-center"
                autoplay
                muted
                loop
                playsinline
                preload="metadata"
                poster="<?php echo esc_url(get_field('hero_poster')['url'] ?? get_template_directory_uri() . '/assets/video/video.png'); ?>"
                aria-hidden="true">
                <source
                    src="<?php echo esc_url(get_field('hero_video')['url'] ?? get_template_directory_uri() . '/assets/video/hero.mp4'); ?>"
                    type="video/mp4" />
            </video>
            <div class="absolute inset-0 bg-[rgba(18,18,17,0.60)]"></div>
        </div>

        <!-- CONTENIDO -->
        <div class="mx-auto flex min-h-[calc(100vh-96px)] max-w-5xl flex-col items-center justify-center px-6 py-24 text-center lg:px-10">

            <?php if ($pretitle = get_field('hero_pretitle')) : ?>
                <p class="uppercase tracking-[0.36em] text-[13px] sm:text-[14px] font-normal text-white">
                    <?php echo esc_html($pretitle); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('hero_title')) : ?>
                <h1 class="mt-3 text-[44px] sm:text-[56px] lg:text-[68px] leading-[1.08] font-normal tracking-tight text-balance text-white">
                    <?php echo esc_html($title); ?>
                </h1>
            <?php endif; ?>

            <?php if ($subtitle = get_field('hero_subtitle')) : ?>
                <h2 class="text-[44px] sm:text-[56px] lg:text-[68px] leading-[1.08] font-normal tracking-tight text-balance text-[#7f8762]">
                    <?php echo esc_html($subtitle); ?>
                </h2>
            <?php endif; ?>

            <?php if ($desc = get_field('hero_description')) : ?>
                <p class="mt-2 max-w-2xl text-[17px] sm:text-[18px] leading-relaxed text-white/90 font-normal">
                    <?php echo esc_html($desc); ?>
                </p>
            <?php endif; ?>

            <!-- CTAs -->
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">

                <?php if (get_field('hero_cta_primary_text')) : ?>
                    <a
                        href="<?php echo esc_url(get_field('hero_cta_primary_url')); ?>"
                        class="inline-flex items-center justify-center h-11 min-w-[170px] px-9 bg-[#7f8762] text-white text-[16px] font-normal shadow-[0_16px_36px_rgba(0,0,0,0.38)] hover:bg-[#6f7a56] transition">
                        <?php the_field('hero_cta_primary_text'); ?>
                    </a>
                <?php endif; ?>

                <?php if (get_field('hero_cta_secondary_text')) : ?>
                    <a
                        href="<?php echo esc_url(get_field('hero_cta_secondary_url')); ?>"
                        class="inline-flex items-center justify-center h-11 min-w-[170px] px-9 border border-white/30 bg-white/5 text-white text-[16px] font-normal backdrop-blur-sm hover:bg-white/10 hover:border-white/45 transition">
                        <?php the_field('hero_cta_secondary_text'); ?>
                    </a>
                <?php endif; ?>

            </div>
        </div>

        <!-- SCROLL -->
        <?php if ($scroll = get_field('hero_scroll_text')) : ?>
            <a href="#quienes-somos"
                class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-[12px] uppercase tracking-[0.28em] text-white/70 hover:text-white transition">
                <span><?php echo esc_html($scroll); ?></span>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
                    <path d="M2.25 5.25L7 10.25L11.75 5.25"
                        stroke="currentColor" stroke-width="1.4"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        <?php endif; ?>

    </section>
    <section id="quienes-somos" class="bg-white mb-20 lg:mb-28">

        <!-- BLOQUE BLANCO -->
        <div class="relative z-20 mx-auto max-w-screen-2xl px-6 sm:px-12 lg:px-16 pt-24 pb-20 text-center">

            <?php if ($pretitle = get_field('about_pretitle')) : ?>
                <p class="uppercase tracking-[0.24em] text-[13px] sm:text-[14px] font-normal text-[#535F35]">
                    <?php echo esc_html($pretitle); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('about_title')) : ?>
                <h2 class="mt-6 text-[32px] sm:text-[38px] lg:text-[42px] leading-[1.35] font-normal text-[#141414] text-balance">
                    <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>

            <span class="mt-7 inline-block h-px w-16 bg-[#859263]"></span>

            <?php if (have_rows('about_paragraphs')) : ?>
                <?php while (have_rows('about_paragraphs')) : the_row(); ?>
                    <p class="mt-7 text-[#484848] text-[17px] sm:text-[18px] leading-relaxed font-normal max-w-4xl mx-auto">
                        <?php echo esc_html(get_sub_field('text')); ?>
                    </p>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <!-- BLOQUE GRIS -->
        <div class="bg-[#dddfd7] py-8">
            <div class="max-w-screen-2xl mx-auto flex flex-col lg:grid lg:grid-cols-[1.1fr_0.9fr] items-center gap-8 px-6 sm:px-12 lg:px-16">

                <!-- TEXTO -->
                <div class="space-y-3 px-8">

                    <div class="space-y-0">
                        <?php if ($claim1 = get_field('about_claim_1')) : ?>
                            <h3 class="text-[28px] sm:text-[30px] font-normal italic text-[#141414]">
                                <?php echo esc_html($claim1); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($claim2 = get_field('about_claim_2')) : ?>
                            <p class="text-[28px] sm:text-[30px] text-[#4d5a34] italic font-normal -mt-1">
                                <?php echo esc_html($claim2); ?>
                            </p>
                        <?php endif; ?>

                        <span class="block w-12 h-[1.5px] bg-[#a5a693]"></span>
                    </div>

                    <?php if (have_rows('about_paragraphs')) : ?>
                        <div class="space-y-3 text-[#3d3f36] text-[17px] sm:text-[18px] leading-relaxed max-w-2xl">
                            <?php while (have_rows('about_paragraphs')) : the_row(); ?>
                                <p><?php echo esc_html(get_sub_field('text')); ?></p>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- IMAGEN -->
                <div class="flex justify-center lg:justify-end w-full">
                    <?php if ($image = get_field('about_image')) : ?>
                        <div class="relative w-full max-w-[540px] lg:-mt-16 lg:-mb-16 shadow-[0_22px_55px_rgba(0,0,0,0.18)]">
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
    <section id="compromiso" class="relative isolate overflow-hidden bg-[#0c0c0b] py-24 lg:py-28 min-h-screen flex items-center">
        <div class="absolute inset-0 -z-10">
            <img
                class="h-full w-full object-cover object-center opacity-55"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/edificio.png"
                alt="Rascacielos contemporáneos" />
            <div class="absolute inset-0 bg-[#141414D9]/85"></div>
        </div>


        <div class="relative mx-auto max-w-6xl px-6 sm:px-10 text-center">
            <p class="uppercase tracking-[0.34em] text-[13px] sm:text-[14px] font-normal text-[#ffffff]">
                Nuestro compromiso
            </p>

            <h2 class="mt-6 text-[32px] sm:text-[38px] lg:text-[42px] leading-[1.2] font-normal text-[#ffffff]">
                Criterio que escucha
            </h2>
            <h3 class="text-[30px] sm:text-[36px] lg:text-[40px] leading-[1.2] italic font-normal text-[#859263]">
                Propósito que transforma
            </h3>

            <span class="mt-7 inline-block h-px w-16 bg-[#859263]"></span>

            <p class="mt-8 mx-auto max-w-4xl text-[19px] sm:text-[23px] leading-relaxed text-[#ffffff]">
                En MBI creemos que el Derecho no solo regula: transforma. Por eso trabajamos con la lógica de los buenos urbanistas: anticipar,
                ordenar y crear valor. Nuestra estructura ligera nos permite estar realmente presentes. Escuchamos con atención, explicamos con sencillez y actuamos con rigor.
            </p>
            <p class="mt-7 mx-auto max-w-4xl text-[19px] sm:text-[23px] leading-relaxed text-[#859263] font-normal">
                Somos un despacho boutique con mirada global. Lo que hacemos no se mide en años, sino en resultados que permanecen.
            </p>

            <div class="mt-16 grid gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-6">
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-2">
                    <img class="h-5 w-5 shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/user.svg" alt="" aria-hidden="true">
                    Trato directo con socios
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-2">
                    <img class="h-5 w-5 shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/lenguaje.svg" alt="" aria-hidden="true">
                    Lenguaje claro y accesible
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-2">
                    <img class="h-5 w-5 shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/especiali.svg" alt="" aria-hidden="true">
                    Alta especialización
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-3">
                    <img class="h-5 w-5 shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/compromiso.svg" alt="" aria-hidden="true">
                    Compromiso firme con cada cliente
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-3">
                    <img class="h-5 w-5 shrink-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/agilidad.svg" alt="" aria-hidden="true">
                    Agilidad y estrategia
                </div>
            </div>
        </div>
    </section>
    <section id="equipo" class="py-10 lg:py-12 bg-white  ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 sm:space-y-10">

            <?php
            $partners = [
                [
                    'name'  => 'Fernando Marín Riaño',
                    'role'  => 'Socio Fundador',
                    'image' => get_template_directory_uri() . '/assets/img/fernando.png',
                    'alt'   => 'Retrato de Fernando Marín Riaño',
                    'bio'   => 'Dirige operaciones inmobiliarias y urbanísticas con visión estratégica y conocimiento del sector público.',
                ],
                [
                    'name'  => 'Mónica Iglesias Sánchez',
                    'role'  => 'Socia Fundadora',
                    'image' => get_template_directory_uri() . '/assets/img/monica.png',
                    'alt'   => 'Retrato de Mónica Iglesias Sánchez',
                    'bio'   => 'Especialista en derecho societario y gobierno corporativo, con foco en decisiones sólidas y sostenibles.',
                ],
                [
                    'name'  => 'Enrique J. Besada Ferreiro',
                    'role'  => 'Socio Fundador',
                    'image' => get_template_directory_uri() . '/assets/img/enrique.png',
                    'alt'   => 'Retrato de Enrique J. Besada Ferreiro',
                    'bio'   => 'Lidera litigación compleja y arbitraje con criterio técnico y enfoque en resultados.',
                ],
                [
                    'name'  => 'Irene Muñiz Álvarez',
                    'role'  => 'Socia',
                    'image' => get_template_directory_uri() . '/assets/img/irene.png',
                    'alt'   => 'Retrato de Irene Muñiz Álvarez',
                    'bio'   => 'Acompaña a familias y patrimonios con sensibilidad jurídica y visión a largo plazo.',
                ],
            ];

            $teamMembers = [
                [
                    'name'  => 'Pablo Espalza',
                    'role'  => 'Abogado',
                    'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80',
                    'alt'   => 'Retrato de Pablo Espalza',
                    'bio'   => 'Asesoramiento en operaciones inmobiliarias y defensa contenciosa con visión estratégica.',
                ],
                [
                    'name'  => 'Nombre Apellido',
                    'role'  => 'Abogada',
                    'image' => 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=500&q=80',
                    'alt'   => 'Retrato de abogada',
                    'bio'   => 'Litigación civil y arbitraje con foco en empresa familiar y protección patrimonial.',
                ],
                [
                    'name'  => 'Sara Valero',
                    'role'  => 'Administración',
                    'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=500&q=80',
                    'alt'   => 'Retrato de Sara Valero',
                    'bio'   => 'Gestión documental y acompañamiento cercano para que cada asunto fluya.',
                ],
            ];
            ?>

            <!-- SOCIOS -->
            <div class="text-center">
                <p class="uppercase tracking-[0.34em] text-[13px] sm:text-[14px] font-normal text-[#7a8464]">
                    Socios
                </p>
            </div>

            <div class="grid gap-4 sm:gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($partners as $index => $partner) : ?>
                    <article class="group relative overflow-hidden border border-[#e2dfd5] bg-black shadow-[0_22px_50px_rgba(0,0,0,0.22)]">

                        <div class="w-full aspect-[1/1] sm:aspect-[2/3]">
                            <img
                                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                style="object-position: center top;"
                                src="<?php echo esc_url($partner['image']); ?>"
                                alt="<?php echo esc_attr($partner['alt']); ?>">
                        </div>

                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>

                        <div class="absolute bottom-0 left-0 right-0 p-4 text-left">
                            <h3 class="text-[18px] font-normal text-[#b7be9b] leading-tight">
                                <?php echo esc_html($partner['name']); ?>
                            </h3>
                            <p class="mt-1 text-[12px] uppercase tracking-[0.12em] text-[#ffffff]/80">
                                <?php echo esc_html($partner['role']); ?>
                            </p>
                            <button
                                type="button"
                                data-modal="partner-modal-<?php echo $index; ?>"
                                class="mt-2 inline-flex items-center gap-2 text-[12px] font-normal text-[#d1d7bd] border border-[#9aa27a] px-3 py-1.5">
                                Conoce más
                            </button>
                        </div>

                    </article>

                <?php endforeach; ?>
            </div>

            <?php foreach ($partners as $index => $partner) : ?>
                <div
                    id="partner-modal-<?php echo $index; ?>"
                    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 px-4"
                    role="dialog"
                    aria-modal="true"
                    aria-hidden="true"
                    data-modal-root
                    data-modal-backdrop>

                    <div class="relative w-full max-w-xl bg-white p-8 shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
                        <button
                            class="absolute right-4 top-4 text-[#7a8464] hover:text-black"
                            aria-label="Cerrar modal"
                            data-close>
                            ✕
                        </button>

                        <div class="text-center">
                            <div class="mx-auto mb-4 h-[120px] w-[120px] overflow-hidden rounded-full">
                                <img
                                    class="h-full w-full object-cover"
                                    src="<?php echo esc_url($partner['image']); ?>"
                                    alt="<?php echo esc_attr($partner['alt']); ?>">
                            </div>

                            <h3 class="text-[22px] font-normal text-[#58683d]">
                                <?php echo esc_html($partner['name']); ?>
                            </h3>

                            <p class="text-[15px] text-[#4f5047] mb-4">
                                <?php echo esc_html($partner['role']); ?>
                            </p>

                            <p class="text-[16px] leading-relaxed text-[#3d3f36] text-left">
                                <?php echo esc_html($partner['bio']); ?>
                            </p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- EQUIPO -->
            <div class="pt-3 text-center">
                <p class="uppercase tracking-[0.34em] text-[13px] sm:text-[14px] font-normal text-[#7a8464]">
                    Equipo
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($teamMembers as $index => $member) : ?>
                    <article class="group text-center relative">

                        <!-- IMAGEN -->
                        <div class="mx-auto h-[clamp(100px,11vh,130px)] w-[clamp(100px,11vh,130px)] overflow-hidden rounded-full relative z-10">
                            <img
                                class="h-full w-full object-cover"
                                src="<?php echo esc_url($member['image']); ?>"
                                alt="<?php echo esc_attr($member['alt']); ?>">
                        </div>

                        <!-- BLOQUE VERDE -->
                        <div class="mt-[-28px] bg-[#e3e4db] px-5 pt-8 pb-5 transition-shadow duration-300 group-hover:shadow-[0_18px_40px_rgba(0,0,0,0.12)]">

                            <h3 class="text-[18px] font-normal text-[#58683d]">
                                <?php echo esc_html($member['name']); ?>
                            </h3>

                            <p class="mt-1 text-[14px] text-[#4f5047]">
                                <?php echo esc_html($member['role']); ?>
                            </p>

                            <!-- CTA -->
                            <button
                                type="button"
                                data-modal="modal-<?php echo $index; ?>"
                                class="mt-2 inline-flex items-center gap-2
                                   text-[13px] font-normal
                                   text-[#58683d]
                                   border border-[#b5baa6]
                                   px-3 py-1
                                   opacity-100 translate-y-0
                                   transition-all duration-300
                                   sm:opacity-0 sm:translate-y-2
                                   sm:group-hover:opacity-100 sm:group-hover:translate-y-0
                                   group-focus-within:opacity-100 group-focus-within:translate-y-0">
                                Conoce más
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <?php foreach ($teamMembers as $index => $member) : ?>
                <div
                    id="modal-<?php echo $index; ?>"
                    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 px-4"
                    role="dialog"
                    aria-modal="true"
                    aria-hidden="true"
                    data-modal-root
                    data-modal-backdrop>

                    <div class="relative w-full max-w-xl bg-white p-8 shadow-[0_30px_80px_rgba(0,0,0,0.35)]">

                        <!-- CERRAR -->
                        <button
                            class="absolute right-4 top-4 text-[#7a8464] hover:text-black"
                            aria-label="Cerrar modal"
                            data-close>
                            ✕
                        </button>

                        <!-- CONTENIDO -->
                        <div class="text-center">
                            <div class="mx-auto mb-4 h-[120px] w-[120px] overflow-hidden rounded-full">
                                <img
                                    class="h-full w-full object-cover"
                                    src="<?php echo esc_url($member['image']); ?>"
                                    alt="">
                            </div>

                            <h3 class="text-[22px] font-normal text-[#58683d]">
                                <?php echo esc_html($member['name']); ?>
                            </h3>

                            <p class="text-[15px] text-[#4f5047] mb-4">
                                <?php echo esc_html($member['role']); ?>
                            </p>

                            <p class="text-[16px] leading-relaxed text-[#3d3f36] text-left">
                                <?php echo esc_html($member['bio']); ?>
                            </p>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>




        </div>
    </section>
    <section id="transformamos" class="relative isolate overflow-hidden bg-[#0f0f0f] py-16 lg:py-20">
        <div class="absolute inset-0 -z-10">
            <img
                class="h-full w-full object-cover object-center"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/edificio.png"
                alt="Fondo arquitectónico" />
            <div class="absolute inset-0 bg-[#0d0d0d]/75"></div>
        </div>
        <div class="mx-auto max-w-6xl px-6 sm:px-10">
            <div class="border border-white/40 px-6 py-12 text-center sm:px-12 sm:py-14 lg:px-20 lg:py-16">
                <h2 class="text-[26px] sm:text-[32px] lg:text-[36px] leading-snug font-normal italic text-balance text-[#ffffff]">
                    Transformamos el Derecho desde la cercanía, el rigor y la visión estratégica.
                </h2>
                <p class="mt-6 mx-auto max-w-3xl text-[15px] sm:text-[16px] lg:text-[17px] leading-relaxed text-[#ffffff]/90 font-normal">
                    En MBI Abogados ofrecemos asesoramiento jurídico con visión estratégica, claridad constante y dedicación personal. Lo esencial bien hecho. Lo complejo bien pensado.
                </p>
                <a class="mt-8 inline-flex items-center justify-center h-11 min-w-[170px] px-9 bg-[#7f8762] text-[#ffffff] text-[16px] font-normal shadow-[0_16px_36px_rgba(0,0,0,0.38)] hover:bg-[#6f7a56] transition" href="#contacto">
                    Contacta
                </a>
            </div>
        </div>
    </section>
    <section id="servicios" class="bg-[#f7f6f2] py-16 lg:py-20">
        <div class="max-w-6xl mx-auto px-5 sm:px-3 space-y-10 sm:space-y-12">
            <div class="text-center">
                <p class="uppercase tracking-[0.32em] text-[15px] sm:text-[16px] font-normal text-[#7a8464]">Servicios</p>
            </div>

            <?php
            $services = [
                [
                    'title' => 'Derecho Inmobiliario y Urbanismo',
                    'desc'  => 'Planeamiento, gestión urbanística, licencias, convenios, expropiaciones, disciplina urbanística. Operaciones inmobiliarias complejas, contratos, financiación.',
                    'icon'  => "<img src='" . get_template_directory_uri() . "/assets/img/edificio.svg' class='h-6 w-6' alt='' aria-hidden='true'>",
                ],
                [
                    'title' => 'Procesal y Arbitraje',
                    'desc'  => 'Litigación: contencioso-administrativo, civil y mercantil. Arbitraje nacional e internacional. Concursal.',
                    'icon'  => "<img src='" . get_template_directory_uri() . "/assets/img/balance.svg' class='h-6 w-6' alt='' aria-hidden='true'>",
                ],
                [
                    'title' => 'Mercantil y Societario',
                    'desc'  => 'M&A. Contratación mercantil. Derecho societario. Secretaría de Consejos de administración.',
                    'icon'  => "<img src='" . get_template_directory_uri() . "/assets/img/maleta.svg' class='h-6 w-6' alt='' aria-hidden='true'>",
                ],
                [
                    'title' => 'Penal y Compliance',
                    'desc'  => 'Defensa penal de empresas y directivos. Programas de cumplimiento normativo.',
                    'icon'  => "<img src='" . get_template_directory_uri() . "/assets/img/escudo.svg' class='h-6 w-6' alt='' aria-hidden='true'>",
                ],
                [
                    'title' => 'Sucesiones y Familia',
                    'desc'  => 'Herencias, planificación patrimonial, régimen económico matrimonial y pactos sucesorios.',
                    'icon'  => "<img src='" . get_template_directory_uri() . "/assets/img/caras.svg' class='h-6 w-6' alt='' aria-hidden='true'>",
                ],
                [
                    'title' => 'Asesoramiento Estratégico',
                    'desc'  => 'Acompañamiento preventivo, visión a largo plazo y claridad en la toma de decisiones.',
                    'icon'  => "<img src='" . get_template_directory_uri() . "/assets/img/asesoramiento.svg' class='h-6 w-6' alt='' aria-hidden='true'>",
                ],
            ];
            ?>

            <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
                <div class="space-y-4 lg:space-y-4">
                    <h2 class="text-[34px] sm:text-[40px] leading-tight font-normal text-[#34362f]">
                        Soluciones jurídicas <span class="italic text-[#6a7352]">sencillas, sólidas y personalizadas</span>
                    </h2>
                    <span class="block w-10 h-px bg-[#b9bbab]"></span>
                    <div class="space-y-3">
                        <p class="text-[17px] sm:text-[18px] leading-relaxed text-[#4c4e47]">
                            En MBI Abogados convertimos complejidad jurídica en decisiones claras. Priorizamos, aterrizamos escenarios y acompañamos la ejecución con criterio y responsabilidad.
                            Lo esencial bien hecho. Lo complejo bien pensado. Pensamos como abogados. Actuamos como aliados.
                        </p>
                    </div>
                    <div class="overflow-hidden border border-[#e1dfd5] bg-white shadow-[0_12px_26px_rgba(0,0,0,0.08)]">
                        <img
                            class="h-[200px] w-full object-cover sm:h-[220px] lg:h-[240px]"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/madrid.png"
                            alt="Vista urbana de Madrid desde las alturas">
                    </div>
                </div>

                <div class="space-y-4 lg:pt-1">
                    <p class="text-[16px] sm:text-[18px] text-[#5b5d55]">
                        Nos especializamos en áreas donde la experiencia marca la diferencia:
                    </p>
                    <div class="space-y-2" data-accordion="single">
                        <?php foreach ($services as $index => $service) : ?>
                            <?php $is_open = false; ?>
                            <div class="border border-[#e0e0d6] bg-[#e8e9df]">
                                <button
                                    type="button"
                                    class="flex w-full items-center justify-between gap-4 px-6 py-4 text-left"
                                    data-accordion-trigger
                                    aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
                                    aria-controls="<?php echo esc_attr('servicio-panel-' . $index); ?>"
                                    id="<?php echo esc_attr('servicio-trigger-' . $index); ?>">
                                    <span class="flex items-center gap-3">
                                        <span class="text-[#6a7352]">
                                            <?php echo $service['icon']; ?>
                                        </span>
                                        <span class="text-[18px] sm:text-[19px] font-normal text-[#3f423b]">
                                            <?php echo esc_html($service['title']); ?>
                                        </span>
                                    </span>
                                    <span class="flex h-9 w-9 items-center justify-center text-[#6a7352]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300 <?php echo $is_open ? 'rotate-180' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" data-accordion-icon>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </button>
                                <div
                                    id="<?php echo esc_attr('servicio-panel-' . $index); ?>"
                                    role="region"
                                    aria-labelledby="<?php echo esc_attr('servicio-trigger-' . $index); ?>"
                                    class="border-t border-[#d4d5c8] px-6 pb-5 pt-3 text-[17px] sm:text-[18px] leading-relaxed text-[#4b4d45] <?php echo $is_open ? '' : 'hidden'; ?>"
                                    data-accordion-panel>
                                    <?php echo esc_html($service['desc']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto" class="py-16 lg:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-2 lg:px-3">
            <div class="text-center space-y-3 mb-12">
                <h2 class="text-[38px] sm:text-[44px] font-serif font-normal text-[#3f3f39]">Estamos cerca</h2>
                <span class=" inline-block h-px w-16 bg-[#859263]"></span>

                <p class="text-[16px] sm:text-[17px] text-[#4f5047]">Cada cliente importa. Cada caso merece una respuesta a su medida.</p>
            </div>

            <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-10 lg:gap-12 items-start">
                <div class="space-y-8">
                    <div class="rounded-lg overflow-hidden border border-[#d9d7cf] shadow-[0_10px_24px_rgba(0,0,0,0.08)]">
                        <iframe
                            title="Mapa MB Abogados"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9080892030086!2d-3.694530084362142!3d40.4329789793634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e2f27484c9%3A0x7a10b98ff7d9d89c!2sC.%20de%20Calder%C3%B3n%20de%20la%20Barca%2C%203%2C%2028042%20Madrid!5e0!3m2!1ses!2ses!4v1707230400000!5m2!1ses!2ses"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-[260px] sm:h-[280px] border-0"></iframe>
                    </div>

                    <div class="grid gap-x-12 gap-y-8 sm:grid-cols-2 lg:grid-cols-3 text-[#3f413a]">
                        <div class="flex gap-4">
                            <img class="mt-0.5 h-6 w-6 shrink-0 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/direccion.png" alt="" aria-hidden="true">
                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Dirección</p>
                                <p class="text-[15px] sm:text-[16px]">Calle Recoletos 19</p>
                                <p class="text-[15px] sm:text-[16px]">28001 Madrid, España</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img class="mt-0.5 h-6 w-6 shrink-0 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/telefono.svg" alt="" aria-hidden="true">
                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Teléfono</p>
                                <a class="text-[15px] sm:text-[16px] hover:text-[#58683d] transition" href="tel:+34912345678">+34 91 234 56 78</a>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img class="mt-0.5 h-6 w-6 shrink-0 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/reloj.png" alt="" aria-hidden="true">
                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Horario</p>
                                <p class="text-[15px] sm:text-[16px]">L-V: 9:00h a 17:30h</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img class="mt-0.5 h-6 w-6 shrink-0 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="" aria-hidden="true">
                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">Email</p>
                                <a class="text-[15px] sm:text-[16px] hover:text-[#58683d] transition" href="mailto:info@mbiabogados.com">info@mbiabogados.com</a>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img class="mt-0.5 h-6 w-6 shrink-0 object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png" alt="" aria-hidden="true">
                            <div class="space-y-1">
                                <p class="text-[15px] sm:text-[16px] font-medium text-[#6a754f]">LinkedIn</p>
                                <a class="text-[15px] sm:text-[16px] hover:text-[#58683d] transition" href="#inicio">MBI Abogados</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:border-l lg:border-[#d7d4cb] lg:pl-10 space-y-5">
                    <div class="space-y-2">
                        <h3 class="text-[24px] font-normal text-[#3f3f39]">Escríbenos</h3>
                        <p class="text-[16px] text-[#4a4b44]">Estamos aquí para escucharte.</p>
                    </div>
                    <form class="space-y-4">
                        <input class="w-full border border-[#d8d4c8] bg-white px-3 py-3 text-[16px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="nombre" name="nombre" type="text" placeholder="Nombre completo" required>
                        <input class="w-full border border-[#d8d4c8] bg-white px-3 py-3 text-[16px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="email" name="email" type="email" placeholder="Correo electrónico" required>
                        <input class="w-full border border-[#d8d4c8] bg-white px-3 py-3 text-[16px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="telefono" name="telefono" type="tel" placeholder="Teléfono">
                        <textarea class="w-full border border-[#d8d4c8] bg-white px-3 py-3 text-[16px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu consulta" required></textarea>
                        <button type="submit" class="w-full h-11 bg-[#596636] text-[#ffffff] text-[16px] font-normal hover:bg-[#4e5a2f] transition">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>