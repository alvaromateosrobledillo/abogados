<?php get_header();
?>
<main
    id="contenido"
    role="main"
    class="flex flex-col gap-0 ">
    <section id="hero" data-hero class="relative isolate overflow-hidden">

        <!-- FONDO -->
        <div class="absolute inset-0 -z-10">

            <!-- Vídeo -->
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

            <!-- Sombra derecha -->
            <div class="absolute inset-0 
            bg-gradient-to-l 
            from-black/45 via-black/28 to-transparent
            sm:from-black/25 sm:via-black/18">
            </div>

            <!-- Sombra izquierda -->
            <div class="absolute inset-0 
            bg-gradient-to-r 
            from-black/40 via-black/24 to-transparent
            sm:from-black/20 sm:via-black/14">
            </div>

            <!-- Capa central para legibilidad -->
            <div class="absolute inset-0  bg-gradient-to-b   from-black/45 via-black/30 to-black/40  sm:from-black/20 sm:via-black/10 sm:to-black/18">
            </div>


        </div>

        <!-- CONTENIDO -->
        <div class="page-shell flex min-h-[calc(100svh-96px)] sm:min-h-[calc(100vh-96px)]
        flex-col items-center justify-center
        py-12 sm:py-24 text-center">

            <?php if ($pretitle = get_field('hero_pretitle')) : ?>
                <p data-hero-item
                    class="uppercase tracking-[0.2em]
                text-[clamp(14px,3.2vw,16px)] sm:text-[clamp(14px,1.4vw,38px)]
                leading-[1.1]
                font-medium text-white/95
                opacity-0 translate-y-3 transition-all duration-700">
                    <?php echo esc_html($pretitle); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('hero_title')) : ?>
                <h1 data-hero-item
                    class="mt-3 sm:mt-0
      text-[clamp(30px,7vw,40px)] sm:text-[clamp(46px,4.5vw,92px)]
      leading-[1.1] sm:leading-[1.1]
      tracking-[-0.02em]
      text-balance text-white
      opacity-0 translate-y-4 transition-all duration-700">
                    <?php echo esc_html($title); ?>
                </h1>
            <?php endif; ?>

            <?php if ($subtitle = get_field('hero_subtitle')) : ?>
                <h2 data-hero-item
                    class="mt-2 sm:mt-[-0.3em] w-full
      text-[clamp(28px,6.5vw,38px)] sm:text-[clamp(46px,4.5vw,92px)]
      leading-[1.1] sm:leading-[1.2]
      tracking-[-0.02em]
      text-balance
      text-[#9faa6f] sm:text-[#7f8762]
      opacity-0 translate-y-4 transition-all duration-700">
                    <?php echo esc_html($subtitle); ?>
                </h2>
            <?php endif; ?>


            <p data-hero-item
                class="mt-3 sm:mt-2 max-w-xl sm:max-w-4xl
   text-[clamp(17px,4vw,19px)] sm:text-[clamp(19px,1.6vw,24px)]
   leading-[1.45] sm:leading-[1.3]
   text-white/95
   opacity-0 translate-y-3 transition-all duration-700">
                Una boutique legal con alta especializaci&#243;n.
            </p>
            <p data-hero-item
                class="mt-2 sm:mt-1 max-w-xl sm:max-w-4xl
   text-[clamp(17px,4vw,19px)] sm:text-[clamp(19px,1.6vw,24px)]
   leading-[1.45] sm:leading-[1.3]
   text-white/95
   opacity-0 translate-y-3 transition-all duration-700">
                Una visi&#243;n compartida: hacer las cosas bien, con cercan&#237;a, experiencia y compromiso.
            </p>

            <!-- CTAs -->
            <div data-hero-item
                class="mt-5 sm:mt-5
            flex flex-col sm:flex-row gap-4
            opacity-0 translate-y-3 transition-all duration-700">

                <?php if (get_field('hero_cta_primary_text')) : ?>
                    <a href="<?php echo esc_url(get_field('hero_cta_primary_url')); ?>"
                        class="h-11 min-w-[170px] px-9 bg-[#7f8762] text-white
                    shadow-[0_16px_36px_rgba(0,0,0,0.38)]
                    hover:bg-[#6f7a56] transition
                    flex items-center justify-center">
                        <?php the_field('hero_cta_primary_text'); ?>
                    </a>
                <?php endif; ?>

                <?php if (get_field('hero_cta_secondary_text')) : ?>
                    <a href="<?php echo esc_url(get_field('hero_cta_secondary_url')); ?>"
                        class="h-11 min-w-[170px] px-9
                    border border-white/30
                    bg-white/5 text-white backdrop-blur-sm
                    hover:bg-white/10 transition
                    flex items-center justify-center">
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
                class="absolute bottom-6 sm:bottom-10 left-1/2 -translate-x-1/2
            flex flex-col items-center gap-2
            text-[clamp(11px,1.1vw,17px)]
            uppercase tracking-[0.2em]
            leading-[1.4]
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
                <h2
                    class="uppercase tracking-[0.2em] text-[clamp(15px,1.5vw,22px)] leading-[1.4] font-medium text-[#535F35]
               opacity-0 translate-y-3 transition-all duration-700"
                    data-about-item>
                    <?php echo esc_html($pretitle); ?>
                </h2>
            <?php endif; ?>

            <?php if ($title = get_field('about_title')) : ?>
                <h2
                    class="mt-6 text-[clamp(26px,2.8vw,48px)]
               leading-[1.1] tracking-[-0.01em]
               font-normal text-[#141414]
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
                    class="mt-5 text-[#3d3f36] prose prose-base md:prose-lg lg:prose-xl leading-[1.25] [&_p]:text-[clamp(17px,1.5vw,22px)] [&_p]:leading-[1.25]
                prose-p:my-3 prose-p:leading-[1.25] prose-headings:leading-[1.15]
                prose-strong:text-[#4d5a34]
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

            <div class="page-shell flex flex-col md:grid
                md:grid-cols-[1.1fr_0.9fr] items-center gap-8">

                <!-- TEXTO -->
                <div
                    class="space-y-4 px-0 sm:px-8
               opacity-0 translate-y-4 transition-all duration-700"
                    data-about-text>

                    <div>
                        <h2 class="text-[clamp(26px,2.8vw,48px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">
                            <?php echo esc_html(nd_translate('Cercanía que entiende.', 'Closeness that understands.')); ?>
                        </h2>
                        <p class="text-[clamp(26px,2.8vw,48px)] leading-[1.2] tracking-[-0.01em] italic font-normal text-[#4d5a34] -mt-1">
                            <?php echo esc_html(nd_translate('Rigor que construye.', 'Rigor that builds.')); ?>
                        </p>

                        <span class="block w-12 h-[1.5px] bg-[#a5a693] mt-3"></span>
                    </div>

                    <?php if ($content = get_field('about_paragraphs')) : ?>
                        <div class="prose prose-base md:prose-lg lg:prose-xl [&_p]:text-[clamp(17px,1.5vw,22px)] [&_p]:leading-[1.25] prose-p:my-3 prose-p:leading-[1.25] prose-headings:leading-[1.15] prose-strong:font-semibold prose-strong:text-[#4d5a34] text-[#3d3f36] max-w-2xl text-justify">
                            <?php echo wp_kses_post($content); ?>
                        </div>
                    <?php else : ?>
                        <div class="prose prose-base md:prose-lg lg:prose-xl [&_p]:text-[clamp(17px,1.5vw,22px)] [&_p]:leading-[1.25] prose-p:my-3 prose-p:leading-[1.25] prose-headings:leading-[1.15] prose-strong:font-semibold prose-strong:text-[#4d5a34] text-[#3d3f36] max-w-2xl">
                            <p><?php echo esc_html(nd_translate('Estamos comprometidos con un modelo en el que cada cliente es atendido directamente por un socio. Sin intermediarios. Sin jerga innecesaria. Con criterio, claridad y compromiso.', 'We are committed to a model where every client is assisted directly by a partner. No middle layers. No unnecessary jargon. With sound judgment, clarity, and commitment.')); ?></p>
                            <p><?php echo esc_html(nd_translate('No acumulamos casos. Construimos relaciones a largo plazo con nuestros clientes basadas en la confianza, la estrategia y una excelencia discreta.', 'We don’t accumulate cases. We build long-term relationships with our clients based on trust, strategy, and discreet excellence.')); ?></p>
                            <p><?php echo esc_html(nd_translate('Porque cada cliente importa.', 'Because every client matters.')); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="max-w-2xl">
                        <button
                            type="button"
                            data-modal="partners-profile-modal"
                            class="inline-flex items-center justify-center
                                   border border-[#6a754f] px-5 py-2
                                   text-[clamp(12px,1.2vw,16px)]
                                   uppercase tracking-[0.2em]
                                   text-[#4d5a34] hover:border-[#8a9472]
                                   hover:bg-white/40 transition trajectory-button">
                            <span class="trajectory-button-label">
                                <?php echo esc_html(nd_translate('Nuestra trayectoria', 'Our journey')); ?>
                            </span>
                        </button>
                    </div>


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
                                class="w-full h-[320px] sm:h-[360px] md:h-[430px] lg:h-[500px] object-cover"
                                src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <div id="partners-profile-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/75 px-3 sm:px-6 backdrop-blur-sm" data-modal-root data-modal-backdrop>
        <div class="relative w-full max-w-4xl max-h-[90vh] overflow-y-auto bg-[#f2f1ec] border border-[#d7d4cb] p-5 sm:p-7 lg:p-10 rounded-2xl shadow-[0_28px_70px_rgba(0,0,0,0.3)]">
            <button class="absolute right-3 top-3 inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d7d4cb] bg-white/85 text-[#7a8464] text-lg hover:bg-white transition modal-close-button" data-close>
                <span class="relative top-[1px] leading-none modal-close-icon">✕</span>
            </button>
            <div class="space-y-8 text-[#3d3f36]">
                <div class="space-y-3">
                    <p class="uppercase tracking-[0.2em] text-[clamp(12px,1.1vw,16px)] text-[#7a8464]">
                        MBI Abogados
                    </p>
                    <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">
                        <?php echo esc_html(nd_translate('Perfil de los Socios de MBI Abogados', 'MBI Abogados Partner Profiles')); ?>
                    </h2>
                    <span class="block h-px w-16 bg-[#859263]"></span>
                    <p class="text-[clamp(15px,1.4vw,20px)] leading-[1.2]">
                        <?php echo esc_html(nd_translate(
                            'MBI Abogados está liderado por tres socios con trayectorias complementarias y una sólida reputación en el ejercicio jurídico. Su experiencia combinada en litigación, arbitraje, derecho civil, penal y mercantil, urbanismo y asesoramiento estratégico conforma un despacho orientado a la excelencia técnica y a la obtención de resultados.',
                            'MBI Abogados is led by three partners with complementary trajectories and a solid reputation in legal practice. Their combined experience in litigation, arbitration, civil, criminal, and commercial law, urban planning, and strategic advisory services shapes a firm oriented toward technical excellence and results.'
                        )); ?>
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="rounded-xl border border-[#e1dfd5] bg-white/80 p-4 sm:p-5">
                        <h3 class="text-[clamp(18px,1.8vw,26px)] leading-[1.25] font-normal text-[#58683d]">
                            <?php echo esc_html(nd_translate('Fernando Marín Riaño – Socio Fundador', 'Fernando Marín Riaño – Founding Partner')); ?>
                        </h3>
                        <div class="mt-3 space-y-3 text-[clamp(15px,1.4vw,20px)] leading-[1.2] text-[#3d3f36]">
                            <p>
                                <?php echo esc_html(nd_translate(
                                    'Jurista de referencia con más de treinta años de experiencia, Fernando destaca por su solvencia técnica y su capacidad para abordar asuntos de alta complejidad jurídica. Especialista en litigación, arbitraje y asesoramiento estratégico, aporta un profundo conocimiento del derecho civil, mercantil, contencioso‑administrativo e inmobiliario.',
                                    'A leading jurist with more than thirty years of experience, Fernando stands out for his technical solvency and his ability to handle matters of high legal complexity. A specialist in litigation, arbitration, and strategic advisory work, he brings deep knowledge of civil, commercial, administrative, and real‑estate law.'
                                )); ?>
                            </p>
                            <p>
                                <?php echo esc_html(nd_translate(
                                    'Licenciado en Derecho por la Universidad Complutense de Madrid e integrante del Cuerpo de Letrados de las Cortes Generales, desarrolló durante más de dos décadas una intensa labor de asesoramiento a diversas Comisiones del Senado, lo que le otorga una perspectiva institucional única. Su enfoque estratégico, su rigor y su fiabilidad lo convierten en un pilar esencial del despacho.',
                                    'Graduated in Law from the Complutense University of Madrid and a member of the Corps of Lawyers of the Spanish Parliament, he spent more than two decades advising several Senate Committees, giving him a unique institutional perspective. His strategic approach, rigor, and reliability make him a key pillar of the firm.'
                                )); ?>
                            </p>
                        </div>
                    </div>

                    <div class="rounded-xl border border-[#e1dfd5] bg-white/80 p-4 sm:p-5">
                        <h3 class="text-[clamp(18px,1.8vw,26px)] leading-[1.25] font-normal text-[#58683d]">
                            <?php echo esc_html(nd_translate('Mónica Iglesias Sánchez – Socia Fundadora', 'Mónica Iglesias Sánchez – Founding Partner')); ?>
                        </h3>
                        <div class="mt-3 space-y-3 text-[clamp(15px,1.4vw,20px)] leading-[1.6] text-[#3d3f36]">
                            <p>
                                <?php echo esc_html(nd_translate(
                                    'Abogada con más de tres décadas de trayectoria, Mónica está especializada en litigación civil y mercantil, arbitraje y derecho concursal. Licenciada en Derecho por la Universidad San Pablo CEU y con formación de posgrado en Derecho Comunitario y Tributación, combina un sólido dominio técnico con una gran capacidad estratégica.',
                                    'A lawyer with more than three decades of experience, Mónica specializes in civil and commercial litigation, arbitration, and insolvency law. Graduated in Law from Universidad San Pablo CEU and with postgraduate training in EU Law and Taxation, she combines strong technical command with high strategic capacity.'
                                )); ?>
                            </p>
                            <p>
                                <?php echo esc_html(nd_translate(
                                    'Árbitro del ICAM, ha intervenido en numerosos procedimientos de alta complejidad, incluyendo conflictos societarios, responsabilidad de administradores, litigios contractuales y reestructuraciones empresariales. Su enfoque riguroso y orientado a resultados la convierte en una garantía de excelencia para los clientes del despacho.',
                                    'An arbitrator at ICAM, she has intervened in numerous high‑complexity proceedings, including shareholder disputes, directors’ liability, contractual litigation, and corporate restructurings. Her rigorous, results‑driven approach makes her a guarantee of excellence for the firm’s clients.'
                                )); ?>
                            </p>
                        </div>
                    </div>

                    <div class="rounded-xl border border-[#e1dfd5] bg-white/80 p-4 sm:p-5">
                        <h3 class="text-[clamp(18px,1.8vw,26px)] leading-[1.25] font-normal text-[#58683d]">
                            <?php echo esc_html(nd_translate('Enrique J. Besada Ferreiro – Socio Fundador', 'Enrique J. Besada Ferreiro – Founding Partner')); ?>
                        </h3>
                        <div class="mt-3 space-y-3 text-[clamp(15px,1.4vw,20px)] leading-[1.6] text-[#3d3f36]">
                            <p>
                                <?php echo esc_html(nd_translate(
                                    'Especializado en litigación, derecho inmobiliario y urbanismo. Enrique cuenta con una amplia experiencia tanto en la administración pública como en el sector privado. Su trayectoria incluye la dirección de procedimientos urbanísticos, litigios civiles, mercantiles y en el ámbito contencioso administrativo, así como el asesoramiento integral en operaciones inmobiliarias y procesos de desarrollo urbanístico.',
                                    'Specialized in litigation, real estate law, and urban planning. Enrique has extensive experience in both public administration and the private sector. His career includes leading urban planning procedures, civil and commercial litigation, and administrative litigation, as well as comprehensive advice on real‑estate transactions and urban development processes.'
                                )); ?>
                            </p>
                            <p>
                                <?php echo esc_html(nd_translate(
                                    'Ha participado en expedientes de disciplina urbanística, procedimientos judiciales complejos y operaciones de compraventa y due diligence de activos inmobiliarios. Su profundo conocimiento del planeamiento y la gestión urbanística lo convierte en un referente en la materia y en un valor clave para los clientes que buscan asesoramiento especializado.',
                                    'He has participated in urban discipline cases, complex judicial proceedings, and purchase/sale operations and due diligence of real‑estate assets. His deep knowledge of planning and urban management makes him a reference in the field and a key value for clients seeking specialized advice.'
                                )); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section
        id="compromiso"
        data-section="commitment"
        class="relative isolate overflow-hidden bg-[#0c0c0b]
         py-24 lg:py-42 flex items-center">

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
                    alt="<?php echo esc_attr(nd_translate('Fondo arquitectónico', 'Architectural background')); ?>">
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
                    class="uppercase tracking-[0.2em]  text-[clamp(15px,1.5vw,22px)] leading-[1.4]
               font-normal text-white
               opacity-0 translate-y-4 transition-all duration-500">
                    <?php echo esc_html($pre); ?>
                </p>
            <?php endif; ?>

            <?php if ($title = get_field('commitment_title')) : ?>
                <h2
                    data-commitment-item
                    class="mt-6 text-[clamp(22px,2.4vw,40px)]
               leading-[1.1] tracking-[-0.01em] font-normal text-white
               opacity-0 translate-y-4 transition-all duration-500">
                    <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>

            <?php if ($subtitle = get_field('commitment_subtitle')) : ?>
                <h3
                    data-commitment-item
                    class="text-[clamp(24px,2.6vw,46px)]
               leading-[1.2] tracking-[-0.01em] italic font-normal text-[#859263]
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
                    class="mt-8 mx-auto max-w-6xl text-white
               text-[clamp(17px,1.8vw,26px)] leading-[1.25] [&_p]:text-[clamp(17px,1.5vw,22px)] [&_p]:leading-[1.25]
               [&_p]:mb-6
               opacity-0 translate-y-6 transition-all duration-500">
                    <?php echo wp_kses_post($text1); ?>
                </div>
            <?php endif; ?>

            <?php if ($text2 = get_field('commitment_text_2')) : ?>
                <div
                    data-commitment-item
                    class="mt-7 mx-auto max-w-6xl text-[#859263]
              [&_p]:text-[clamp(17px,1.5vw,22px)] leading-[1.25] [&_p]:text-[clamp(17px,1.8vw,26px)] [&_p]:leading-[1.25]
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
                    ['user.svg', nd_translate('Trato directo con socios', 'Direct access to the partners'), 'lg:col-span-2'],
                    ['lenguaje.svg', nd_translate('Lenguaje claro y accesible', 'Clear, accessible language'), 'lg:col-span-2'],
                    ['especiali.svg', nd_translate('Alta especialización', 'High specialization'), 'lg:col-span-2'],
                    ['compromiso.svg', nd_translate('Compromiso firme con cada cliente', 'Firm commitment to each client'), 'lg:col-span-3'],
                    ['agilidad.svg', nd_translate('Agilidad y estrategia', 'Agility and strategy'), 'lg:col-span-3'],
                ];
                ?>

                <?php foreach ($boxes as $i => [$icon, $text, $span]) : ?>
                    <div
                        data-commitment-box
                        class="flex items-center justify-center gap-2 border border-[#D1D4D6]
                 px-4 sm:px-6 lg:px-8
                 py-3 sm:py-4 text-[clamp(15px,1.75vw,24px)] leading-[1.25]
                 font-normal text-white text-center min-h-[64px]
                 <?php echo $span; ?>
                 opacity-0 translate-y-6 transition-all duration-500">

                        <img class="h-4 w-4 shrink-0"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $icon; ?>"
                            alt="" aria-hidden="true">
                        <?php echo $text; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section id="equipo" data-section="team" class="bg-white">
        <div class="w-full pt-20 pb-16 lg:pt-24 lg:pb-24 space-y-12 sm:space-y-16 px-6 sm:px-10 lg:px-12">

            <!-- ===== SOCIOS ===== -->
            <?php
            $partners_rows = get_field('partners');
            $partners_to_show = array();
            $founder_needles = ['fernando', 'monica', 'enrique'];
            if (is_array($partners_rows)) {
                foreach ($partners_rows as $row) {
                    $name_value = isset($row['name']) ? (string) $row['name'] : '';
                    $name_slug = $name_value ? sanitize_title($name_value) : '';
                    foreach ($founder_needles as $needle) {
                        if ($name_slug && strpos($name_slug, $needle) !== false) {
                            $partners_to_show[] = $row;
                            break;
                        }
                    }
                }

                if (empty($partners_to_show)) {
                    foreach ($partners_rows as $row) {
                        $role_value = isset($row['role']) ? (string) $row['role'] : '';
                        $role_normalized = function_exists('mb_strtolower')
                            ? mb_strtolower($role_value, 'UTF-8')
                            : strtolower($role_value);
                        $role_normalized = trim(preg_replace('/\s+/', ' ', $role_normalized));
                        if ($role_normalized && (strpos($role_normalized, 'fundador') !== false || strpos($role_normalized, 'founding') !== false)) {
                            $partners_to_show[] = $row;
                        }
                    }
                }

                if (empty($partners_to_show)) {
                    $partners_to_show = $partners_rows;
                }

                if (count($partners_to_show) > 3) {
                    $partners_to_show = array_slice($partners_to_show, 0, 3);
                }
            }
            if (!empty($partners_to_show)) :
            ?>

                <div class="grid w-full grid-cols-1 gap-12 lg:gap-16">
                    <div data-team-title class="max-w-2xl space-y-4 opacity-0 translate-y-6 transition-all duration-500 text-center mx-auto">
                        <p class="uppercase tracking-[0.2em] text-[clamp(15px,1.5vw,22px)] leading-[1.4] font-normal text-[#7a8464]">
                            <?php echo esc_html(nd_translate('Socios fundadores', 'Founding partners')); ?>
                        </p>
                        <h2 class="text-[clamp(26px,2.8vw,48px)] leading-[1.1] tracking-[-0.01em] font-normal text-[#34362f]">
                            <?php echo esc_html(nd_translate('Dirección estratégica del despacho', 'Strategic leadership of the firm')); ?>
                        </h2>
                        <p class="text-[clamp(17px,1.5vw,22px)] leading-[1.25] text-[#5b5d55]">
                            <?php echo esc_html(nd_translate('Experiencia, visión y cercanía en cada caso.', 'Experience, vision, and closeness in every case.')); ?>
                        </p>
                    </div>

                    <div class="w-full">
                        <div class="relative z-0 grid w-full grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 md:grid-cols-[repeat(3,220px)] md:justify-center lg:grid-cols-[repeat(3,210px)]">
                            <?php $i = 0;
                            foreach ($partners_to_show as $row) :
                                $i++;
                                $name = $row['name'] ?? '';
                                $role = $row['role'] ?? '';
                                $image = $row['image'] ?? null;
                                $bio = $row['bio'] ?? '';
                                $role_output = function_exists('abogados_translate_role') ? abogados_translate_role($role) : $role;
                            ?>

                                <article
                                    data-team-card
                                    class="group text-left opacity-0 translate-y-8 transition-all duration-500">
                                    <?php if ($image) : ?>
                                        <div class="relative mx-auto w-full max-w-[300px] md:max-w-[220px] lg:max-w-[210px] xl:max-w-[300px] overflow-hidden outline outline-1 outline-[#e6e2d8] aspect-[4/5]">
                                            <img
                                                data-modal="partner-modal-<?php echo $i; ?>"
                                                class="absolute inset-0 h-full w-full object-cover shadow-none transition duration-500 group-hover:scale-[1.02] cursor-pointer"
                                                src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>">
                                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/55 via-black/15 to-transparent"></div>
                                            <div data-team-card-body class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 pb-16">
                                                <div class="transition-transform duration-300 ease-out sm:group-hover:-translate-y-10">
                                                    <h3 class="text-[clamp(16px,1.6vw,22px)] leading-[1.2] font-medium text-[#d6dcc2]">
                                                        <?php echo esc_html($name); ?>
                                                    </h3>
                                                    <p class="mt-1 text-[clamp(11px,1vw,14px)] uppercase tracking-[0.2em] text-white/85">
                                                        <?php echo esc_html($role_output); ?>
                                                    </p>
                                                </div>
                                                <button
                                                    type="button"
                                                    data-modal="partner-modal-<?php echo $i; ?>"
                                                    data-team-button
                                                    class="absolute left-4 bottom-4 sm:left-5 sm:bottom-5 inline-flex items-center border border-white/50 bg-white/10 px-4 py-1.5 text-[12px] font-normal text-white/90 shadow-none sm:shadow-[0_8px_22px_rgba(0,0,0,0.35)] sm:hover:shadow-none backdrop-blur-sm transition-all duration-300 ease-out hover:bg-white/20 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/60 focus-visible:ring-offset-2 opacity-0 translate-y-4 sm:group-hover:opacity-100 sm:group-hover:translate-y-0 sm:text-[13px]">
                                                    <?php echo esc_html(nd_translate('Conoce más', 'Learn more')); ?>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </article>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- MODALES SOCIOS -->
                <?php $i = 0;
                foreach ($partners_to_show as $row) :
                    $i++;
                    $name = $row['name'] ?? '';
                    $role = $row['role'] ?? '';
                    $image = $row['image'] ?? null;
                    $bio = $row['bio'] ?? '';
                    $linkedin = $row['linkedin'] ?? '';
                    $name_slug = $name ? sanitize_title($name) : '';
                    $role_output = function_exists('abogados_translate_role') ? abogados_translate_role($role) : $role;
                    $modal_image_url = '';
                    $modal_image_alt = '';
                    $linkedin_url = '';
                    $linkedin_label = '';
                    $linkedin_target = '_blank';

                    if (is_array($linkedin)) {
                        $linkedin_url = $linkedin['url'] ?? '';
                        $linkedin_label = $linkedin['title'] ?? '';
                        $linkedin_target = $linkedin['target'] ?? '_blank';
                    } elseif (is_string($linkedin)) {
                        $linkedin_url = $linkedin;
                    }

                    if (!$linkedin_url && is_string($bio)) {
                        if (preg_match('/href=[\"\'](https?:\\/\\/(?:www\\.)?linkedin\\.com\\/[^\"\']+)[\"\']/i', $bio, $matches)) {
                            $linkedin_url = $matches[1];
                        } elseif (preg_match('/https?:\\/\\/(?:www\\.)?linkedin\\.com\\/[^\\s\"\'<>]+/i', $bio, $matches)) {
                            $linkedin_url = $matches[0];
                        }
                    }
                    if (!$linkedin_url && $name_slug) {
                        $manual_linkedin_map = [
                            'monica' => 'https://www.linkedin.com/in/monica-iglesias-sanchez-14237041/',
                            'enrique' => 'https://www.linkedin.com/in/enrique-j-besada-ferreiro-71046b43/',
                            'fernando' => 'https://www.linkedin.com/in/fernando-marin-49405725/',
                            'irene' => 'https://www.linkedin.com/in/irene-mu%C3%B1iz-%C3%A1lvarez-0758331a/',
                            'pablo' => 'https://www.linkedin.com/in/pablo-epalza-arnedo/',
                            'cristina' => 'https://www.linkedin.com/in/garciamenendezcristina/',
                            'rosa' => 'https://www.linkedin.com/in/rosa-munguira-b73479161/',
                        ];
                        foreach ($manual_linkedin_map as $needle => $url) {
                            if (strpos($name_slug, $needle) !== false) {
                                $linkedin_url = $url;
                                break;
                            }
                        }
                    }

                    if (is_string($linkedin_url)) {
                        $linkedin_url = trim($linkedin_url);
                        if ($linkedin_url !== '' && !preg_match('/^https?:\\/\\//i', $linkedin_url)) {
                            $linkedin_url = 'https://' . ltrim($linkedin_url, '/');
                        }
                    }

                    if ($name_slug) {
                        $modal_image_map = [
                            'enrique' => ['Enrique_Modal.png', 'Enrique'],
                            'monica' => ['Monica_modal.jpg', 'Monica'],
                            'fernando' => ['Fernando_Modal.png', 'Fernando'],
                            'irene' => ['irene_modal.png', 'Irene'],
                            'pablo' => ['Pablo_Modal.jpg', 'Pablo'],
                            'rosa' => ['Rosa_Modal.jpg', 'Rosa'],
                            'sara' => ['Sara_Modal.jpg', 'Sara'],
                            'cristina' => ['cristina_modal.jpg', 'Cristina'],
                        ];
                        foreach ($modal_image_map as $needle => $data) {
                            if (strpos($name_slug, $needle) !== false) {
                                $modal_image_url = get_template_directory_uri() . '/assets/img/' . $data[0];
                                $modal_image_alt = $data[1];
                                break;
                            }
                        }
                    }

                    if (!$modal_image_url) {
                        $modal_image = $row['modal_image'] ?? null;
                        if ($modal_image) {
                            $modal_image_url = $modal_image['url'];
                            $modal_image_alt = $modal_image['alt'];
                        } elseif ($image) {
                            $modal_image_url = $image['url'];
                            $modal_image_alt = $image['alt'];
                        }
                    }
                ?>
                    <div id="partner-modal-<?php echo $i; ?>" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 px-3 sm:px-6" data-modal-root data-modal-backdrop>
                        <div class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto bg-white p-4 sm:p-6 lg:p-10 rounded-xl shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
                            <button class="absolute right-3 top-3 inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#d7d4cb] bg-white text-[#5b6542] text-[20px] shadow-[0_6px_14px_rgba(0,0,0,0.18)] transition hover:bg-[#f2f1ec] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#8a9472]/60 focus-visible:ring-offset-2 modal-close-button" data-close><span class="relative top-[1px] leading-none modal-close-icon">✕</span></button>
                            <div class="flex flex-col gap-6 lg:gap-8 md:flex-row">
                                <?php if ($modal_image_url) : ?>
                                    <div class="md:w-5/12 lg:w-4/12">
                                        <div class="w-full overflow-hidden rounded-lg bg-white aspect-[4/5] sm:aspect-[4/5] max-h-[45vh] sm:max-h-[55vh] md:max-h-none">
                                            <img class="h-full w-full object-contain sm:object-cover object-[center_top]" src="<?php echo esc_url($modal_image_url); ?>" alt="<?php echo esc_attr($modal_image_alt ?: $name); ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="<?php echo $modal_image_url ? 'md:w-7/12 lg:w-8/12' : 'w-full'; ?>">
                                    <div class="space-y-2 text-left">
                                        <h3 class="text-[clamp(19px,1.9vw,28px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#58683d]">
                                            <?php echo esc_html($name); ?>
                                        </h3>
                                        <p class="text-[clamp(14px,1.3vw,20px)] uppercase tracking-[0.18em] leading-[1.2] text-[#7a8464]">
                                            <?php echo esc_html($role_output); ?>
                                        </p>
                                    </div>
                                    <?php
                                    $bio_html = $bio ? wp_kses_post($bio) : '';
                                    $bio_has_layout = $bio_html && preg_match('/class=[\"\'][^\"\']*(max-h-\\[|overflow-y-auto|flex[^\"\']*gap-2)[^\"\']*[\"\']/', $bio_html);
                                    $linkedin_markup = '';

                                    if ($linkedin_url) {
                                        $linkedin_text = $linkedin_label ?: nd_translate('LinkedIn', 'LinkedIn');
                                        $linkedin_icon = get_template_directory_uri() . '/assets/img/linkedin.png';
                                        $linkedin_markup = '<div class="mt-3 text-left">'
                                            . '<a href="' . esc_url($linkedin_url) . '" target="' . esc_attr($linkedin_target ?: '_blank') . '" rel="noopener noreferrer" class="inline-flex w-fit items-center gap-2 rounded-full border border-[#c6cab6] bg-[#f6f5f0] px-3 py-1.5 text-[11px] sm:text-[12px] uppercase tracking-[0.18em] text-[#4d5a34] shadow-[0_6px_14px_rgba(0,0,0,0.08)] transition hover:border-[#8a9472] hover:bg-[#efede4] hover:text-[#3f4a2a] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#8a9472]/60 focus-visible:ring-offset-2">'
                                            . '<img class="h-4 w-4 object-contain" src="' . esc_url($linkedin_icon) . '" alt="" aria-hidden="true">'
                                            . '<span>' . esc_html($linkedin_text) . '</span>'
                                            . '</a>'
                                            . '</div>';
                                    }

                                    $bio_output = $bio_html;
                                    $bio_margin_class = $linkedin_markup ? 'mt-3' : 'mt-4';
                                    ?>
                                    <?php if ($linkedin_markup) : ?>
                                        <?php echo $linkedin_markup; ?>
                                    <?php endif; ?>
                                    <div class="<?php echo esc_attr($bio_margin_class); ?>">
                                        <?php if ($bio_output) : ?>
                                            <?php if ($bio_has_layout) : ?>
                                                <?php echo $bio_output; ?>
                                            <?php else : ?>
                                                <div class="text-[clamp(15px,1.4vw,20px)] leading-[1.6] [&_p]:mb-3 [&_p]:leading-[1.2] text-[#3d3f36] text-left">
                                                    <?php echo $bio_output; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>

            <!-- ===== EQUIPO ===== -->
            <?php
            $team_page_id = get_queried_object_id();
            if (!$team_page_id) {
                $team_page_id = (int) get_option('page_on_front');
            }

            $team_top_rows = get_field('team_members', $team_page_id);
            $team_bottom_rows = get_field('team_members_abajo', $team_page_id);
            $team_top_rows = is_array($team_top_rows) ? $team_top_rows : array();
            $team_bottom_rows = is_array($team_bottom_rows) ? $team_bottom_rows : array();

            if (empty($team_bottom_rows)) {
                $team_bottom_rows = get_field('team_members_abajo', 'option');
                $team_bottom_rows = is_array($team_bottom_rows) ? $team_bottom_rows : array();
            }

            if (empty($team_bottom_rows) && count($team_top_rows) > 2) {
                $team_bottom_rows = array_slice($team_top_rows, 2);
            }

            $team_top_rows = array_slice($team_top_rows, 0, 2);

            $team_groups = [
                'first' => $team_top_rows,
                'second' => $team_bottom_rows,
            ];
            $team_all = array();
            $team_modal_counter = 0;

            foreach ($team_groups as $key => $rows) {
                $updated_rows = array();
                foreach ($rows as $row) {
                    $team_modal_counter++;
                    $row['_modal_id'] = $team_modal_counter;
                    $updated_rows[] = $row;
                    $team_all[] = $row;
                }
                $team_groups[$key] = $updated_rows;
            }

            if (!empty($team_all)) :
            ?>

                <div class="grid w-full grid-cols-1 gap-12 lg:gap-16">
                    <div data-team-title class="max-w-2xl space-y-4 opacity-0 translate-y-6 transition-all duration-500 text-center mx-auto">
                        <p class="uppercase tracking-[0.2em] text-[clamp(15px,1.5vw,22px)] leading-[1.4] font-normal text-[#7a8464]">
                            <?php echo esc_html(nd_translate('Equipo', 'Team')); ?>
                        </p>
                        <h2 class="text-[clamp(26px,2.8vw,48px)] leading-[1.1] tracking-[-0.01em] font-normal text-[#34362f]">
                            <?php echo esc_html(nd_translate('Talento que acompaña cada asunto', 'Talent that supports every matter')); ?>
                        </h2>
                        <p class="text-[clamp(17px,1.5vw,22px)] leading-[1.25] text-[#5b5d55]">
                            <?php echo esc_html(nd_translate('Un equipo multidisciplinar con rigor, cercanía y dedicación.', 'A multidisciplinary team with rigor, closeness, and dedication.')); ?>
                        </p>
                    </div>

                    <div class="w-full space-y-10">
                        <!-- ================= NIVEL SUPERIOR ================= -->
                        <?php if (!empty($team_groups['first'])) : ?>
                            <div class="grid w-full grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 md:grid-cols-[repeat(2,220px)] md:justify-center lg:grid-cols-[repeat(2,210px)]">
                                <?php foreach ($team_groups['first'] as $row) :
                                    $name = $row['name'] ?? '';
                                    $role = $row['role'] ?? '';
                                    $image = $row['image'] ?? null;
                                    $modal_id = $row['_modal_id'] ?? 0;
                                    $role_output = function_exists('abogados_translate_role') ? abogados_translate_role($role) : $role;
                                ?>
                                    <article
                                        data-team-card
                                        class="group text-left opacity-0 translate-y-8 transition-all duration-500 w-full lg:max-w-[280px] lg:mx-auto">
                                        <?php if ($image) : ?>
                                        <div class="relative mx-auto w-full max-w-[300px] md:max-w-[220px] lg:max-w-[210px] xl:max-w-[300px] overflow-hidden outline outline-1 outline-[#e6e2d8] aspect-[4/5]">
                                            <img
                                                data-modal="team-modal-<?php echo $modal_id; ?>"
                                                class="absolute inset-0 h-full w-full object-cover shadow-none transition duration-500 group-hover:scale-[1.02] cursor-pointer"
                                                src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>">
                                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/55 via-black/15 to-transparent"></div>
                                                <div data-team-card-body class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 pb-16">
                                                    <div class="transition-transform duration-300 ease-out sm:group-hover:-translate-y-10">
                                                        <h3 class="text-[clamp(16px,1.6vw,22px)] leading-[1.2] font-medium text-[#d6dcc2]">
                                                            <?php echo esc_html($name); ?>
                                                        </h3>
                                                        <p class="mt-1 text-[clamp(11px,1vw,14px)] uppercase tracking-[0.2em] text-white/85">
                                                            <?php echo esc_html($role_output); ?>
                                                        </p>
                                                    </div>
                                                    <button
                                                        type="button"
                                                        data-modal="team-modal-<?php echo $modal_id; ?>"
                                                        data-team-button
                                                    class="absolute left-4 bottom-4 sm:left-5 sm:bottom-5 inline-flex items-center border border-white/50 bg-white/10 px-4 py-1.5 text-[12px] font-normal text-white/90 shadow-none sm:shadow-[0_8px_22px_rgba(0,0,0,0.35)] sm:hover:shadow-none backdrop-blur-sm transition-all duration-300 ease-out hover:bg-white/20 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/60 focus-visible:ring-offset-2 opacity-0 translate-y-4 sm:group-hover:opacity-100 sm:group-hover:translate-y-0 sm:text-[13px]">
                                                        <?php echo esc_html(nd_translate('Conoce más', 'Learn more')); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- ================= RESTO DEL EQUIPO ================= -->
                        <?php if (!empty($team_groups['second'])) : ?>
                            <?php
                            $second_group_count = count($team_groups['second']);
                            $second_group_grid_class = 'grid gap-x-4 gap-y-8 w-full md:justify-center';
                            if ($second_group_count <= 1) {
                                $second_group_grid_class .= ' sm:grid-cols-1 md:grid-cols-[repeat(1,220px)] lg:grid-cols-[repeat(1,210px)]';
                            } elseif ($second_group_count === 2) {
                                $second_group_grid_class .= ' sm:grid-cols-2 md:grid-cols-[repeat(2,220px)] lg:grid-cols-[repeat(2,210px)]';
                            } else {
                                $second_group_grid_class .= ' sm:grid-cols-2 md:grid-cols-[repeat(3,220px)] lg:grid-cols-[repeat(3,210px)]';
                            }
                            ?>
                            <div class="<?php echo esc_attr($second_group_grid_class); ?>">
                                <?php foreach ($team_groups['second'] as $row) :
                                    $name = $row['name'] ?? '';
                                    $role = $row['role'] ?? '';
                                    $image = $row['image'] ?? null;
                                    $modal_id = $row['_modal_id'] ?? 0;
                                    $role_output = function_exists('abogados_translate_role') ? abogados_translate_role($role) : $role;
                                ?>
                                    <article
                                        data-team-card
                                        class="group text-left opacity-0 translate-y-8 transition-all duration-500 w-full">
                                        <?php if ($image) : ?>
                                        <div class="relative mx-auto w-full max-w-[300px] md:max-w-[220px] lg:max-w-[210px] xl:max-w-[300px] overflow-hidden outline outline-1 outline-[#e6e2d8] aspect-[4/5]">
                                            <img
                                                data-modal="team-modal-<?php echo $modal_id; ?>"
                                                class="absolute inset-0 h-full w-full object-cover shadow-none transition duration-500 group-hover:scale-[1.02] cursor-pointer"
                                                src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>">
                                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/55 via-black/15 to-transparent"></div>
                                                <div data-team-card-body class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 pb-16">
                                                    <div class="transition-transform duration-300 ease-out sm:group-hover:-translate-y-10">
                                                        <h3 class="text-[clamp(16px,1.6vw,22px)] leading-[1.2] font-medium text-[#d6dcc2]">
                                                            <?php echo esc_html($name); ?>
                                                        </h3>
                                                        <p class="mt-1 text-[clamp(11px,1vw,14px)] uppercase tracking-[0.2em] text-white/85">
                                                            <?php echo esc_html($role_output); ?>
                                                        </p>
                                                    </div>
                                                    <button
                                                        type="button"
                                                        data-modal="team-modal-<?php echo $modal_id; ?>"
                                                        data-team-button
                                                    class="absolute left-4 bottom-4 sm:left-5 sm:bottom-5 inline-flex items-center border border-white/50 bg-white/10 px-4 py-1.5 text-[12px] font-normal text-white/90 shadow-none sm:shadow-[0_8px_22px_rgba(0,0,0,0.35)] sm:hover:shadow-none backdrop-blur-sm transition-all duration-300 ease-out hover:bg-white/20 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/60 focus-visible:ring-offset-2 opacity-0 translate-y-4 sm:group-hover:opacity-100 sm:group-hover:translate-y-0 sm:text-[13px]">
                                                        <?php echo esc_html(nd_translate('Conoce más', 'Learn more')); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- MODALES EQUIPO -->
                <?php $j = 0;
                foreach ($team_all as $row) :
                    $j++;
                    $name = $row['name'] ?? '';
                    $role = $row['role'] ?? '';
                    $image = $row['image'] ?? null;
                    $bio = $row['bio'] ?? '';
                    $name_slug = $name ? sanitize_title($name) : '';
                    $role_output = function_exists('abogados_translate_role') ? abogados_translate_role($role) : $role;
                    $linkedin = $row['linkedin'] ?? '';
                    $linkedin_url = '';
                    $linkedin_label = '';
                    $linkedin_target = '_blank';
                    $modal_image_url = '';
                    $modal_image_alt = '';

                    if (is_array($linkedin)) {
                        $linkedin_url = $linkedin['url'] ?? '';
                        $linkedin_label = $linkedin['title'] ?? '';
                        $linkedin_target = $linkedin['target'] ?? '_blank';
                    } elseif (is_string($linkedin)) {
                        $linkedin_url = $linkedin;
                    }

                    if (!$linkedin_url && is_string($bio)) {
                        if (preg_match('/href=[\"\'](https?:\\/\\/(?:www\\.)?linkedin\\.com\\/[^\"\']+)[\"\']/i', $bio, $matches)) {
                            $linkedin_url = $matches[1];
                        } elseif (preg_match('/https?:\\/\\/(?:www\\.)?linkedin\\.com\\/[^\\s\"\'<>]+/i', $bio, $matches)) {
                            $linkedin_url = $matches[0];
                        }
                    }
                    if (!$linkedin_url && $name_slug) {
                        $manual_linkedin_map = [
                            'monica' => 'https://www.linkedin.com/in/monica-iglesias-sanchez-14237041/',
                            'enrique' => 'https://www.linkedin.com/in/enrique-j-besada-ferreiro-71046b43/?originalSubdomain=es',
                            'fernando' => 'https://www.linkedin.com/in/fernando-marin-49405725/',
                            'irene' => 'https://www.linkedin.com/in/irene-mu%C3%B1iz-%C3%A1lvarez-0758331a/',
                            'pablo' => 'https://www.linkedin.com/in/pablo-epalza-arnedo/',
                            'cristina' => 'https://www.linkedin.com/in/garciamenendezcristina/',
                            'rosa' => 'https://www.linkedin.com/in/rosa-munguira-b73479161/',
                        ];
                        foreach ($manual_linkedin_map as $needle => $url) {
                            if (strpos($name_slug, $needle) !== false) {
                                $linkedin_url = $url;
                                break;
                            }
                        }
                    }

                    if (is_string($linkedin_url)) {
                        $linkedin_url = trim($linkedin_url);
                        if ($linkedin_url !== '' && !preg_match('/^https?:\\/\\//i', $linkedin_url)) {
                            $linkedin_url = 'https://' . ltrim($linkedin_url, '/');
                        }
                    }

                    if ($name_slug) {
                        $modal_image_map = [
                            'enrique' => ['Enrique_Modal.png', 'Enrique'],
                            'monica' => ['Monica_modal.jpg', 'Monica'],
                            'fernando' => ['Fernando_Modal.png', 'Fernando'],
                            'irene' => ['irene_modal.png', 'Irene'],
                            'pablo' => ['Pablo_Modal.jpg', 'Pablo'],
                            'rosa' => ['Rosa_Modal.jpg', 'Rosa'],
                            'sara' => ['Sara_Modal.jpg', 'Sara'],
                            'cristina' => ['cristina_modal.jpg', 'Cristina'],
                        ];
                        foreach ($modal_image_map as $needle => $data) {
                            if (strpos($name_slug, $needle) !== false) {
                                $modal_image_url = get_template_directory_uri() . '/assets/img/' . $data[0];
                                $modal_image_alt = $data[1];
                                break;
                            }
                        }
                    }

                    if (!$modal_image_url) {
                        $modal_image = $row['modal_image'] ?? null;
                        if ($modal_image) {
                            $modal_image_url = $modal_image['url'];
                            $modal_image_alt = $modal_image['alt'];
                        } elseif ($image) {
                            $modal_image_url = $image['url'];
                            $modal_image_alt = $image['alt'];
                        }
                    }
                ?>
                    <div id="team-modal-<?php echo $j; ?>" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 px-3 sm:px-6" data-modal-root data-modal-backdrop>
                        <div class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto bg-white p-4 sm:p-6 lg:p-10 rounded-xl shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
                            <button class="absolute right-3 top-3 inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#d7d4cb] bg-white text-[#5b6542] text-[20px] shadow-[0_6px_14px_rgba(0,0,0,0.18)] transition hover:bg-[#f2f1ec] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#8a9472]/60 focus-visible:ring-offset-2 modal-close-button" data-close><span class="relative top-[1px] leading-none modal-close-icon">✕</span></button>
                            <div class="flex flex-col gap-6 lg:gap-8 md:flex-row">
                                <?php if ($modal_image_url) : ?>
                                    <div class="md:w-5/12 lg:w-4/12">
                                        <div class="w-full overflow-hidden rounded-lg bg-[#f2f1ec] aspect-[4/5] sm:aspect-[4/5] max-h-[45vh] sm:max-h-[55vh] md:max-h-none">
                                            <img class="h-full w-full object-contain sm:object-cover object-[center_top]" src="<?php echo esc_url($modal_image_url); ?>" alt="<?php echo esc_attr($modal_image_alt ?: $name); ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="<?php echo $modal_image_url ? 'md:w-7/12 lg:w-8/12' : 'w-full'; ?>">
                                    <div class="space-y-2 text-left">
                                        <h3 class="text-[clamp(19px,1.9vw,28px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#58683d]">
                                            <?php echo esc_html($name); ?>
                                        </h3>
                                        <p class="text-[clamp(14px,1.3vw,20px)] uppercase tracking-[0.18em] leading-[1.2] text-[#7a8464]">
                                            <?php echo esc_html($role_output); ?>
                                        </p>
                                    </div>
                                    <?php
                                    $bio_html = $bio ? wp_kses_post($bio) : '';
                                    $bio_has_layout = $bio_html && preg_match('/class=[\"\'][^\"\']*(max-h-\\[|overflow-y-auto|flex[^\"\']*gap-2)[^\"\']*[\"\']/', $bio_html);
                                    $linkedin_markup = '';

                                    if ($linkedin_url) {
                                        $linkedin_text = $linkedin_label ?: nd_translate('LinkedIn', 'LinkedIn');
                                        $linkedin_icon = get_template_directory_uri() . '/assets/img/linkedin.png';
                                        $linkedin_markup = '<div class="mt-3 text-left">'
                                            . '<a href="' . esc_url($linkedin_url) . '" target="' . esc_attr($linkedin_target ?: '_blank') . '" rel="noopener noreferrer" class="inline-flex w-fit items-center gap-2 rounded-full border border-[#c6cab6] bg-[#f6f5f0] px-3 py-1.5 text-[11px] sm:text-[12px] uppercase tracking-[0.18em] text-[#4d5a34] shadow-[0_6px_14px_rgba(0,0,0,0.08)] transition hover:border-[#8a9472] hover:bg-[#efede4] hover:text-[#3f4a2a] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#8a9472]/60 focus-visible:ring-offset-2">'
                                            . '<img class="h-4 w-4 object-contain" src="' . esc_url($linkedin_icon) . '" alt="" aria-hidden="true">'
                                            . '<span>' . esc_html($linkedin_text) . '</span>'
                                            . '</a>'
                                            . '</div>';
                                    }

                                    $bio_output = $bio_html;
                                    $bio_margin_class = $linkedin_markup ? 'mt-3' : 'mt-4';
                                    ?>
                                    <?php if ($linkedin_markup) : ?>
                                        <?php echo $linkedin_markup; ?>
                                    <?php endif; ?>
                                    <div class="<?php echo esc_attr($bio_margin_class); ?>">
                                        <?php if ($bio_output) : ?>
                                            <?php if ($bio_has_layout) : ?>
                                                <?php echo $bio_output; ?>
                                            <?php else : ?>
                                                <div class="text-[clamp(15px,1.4vw,20px)] leading-[1.2] [&_p]:mb-3 [&_p]:leading-[1.2] text-[#3d3f36] text-left">
                                                    <?php echo $bio_output; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

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
                src="<?php echo get_template_directory_uri(); ?>/assets/img/transforma.png"
                alt="<?php echo esc_attr(nd_translate('Fondo arquitectónico', 'Architectural background')); ?>" />

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
                    class="text-[clamp(22px,2.6vw,44px)] lg:text-[clamp(24px,2.6vw,46px)]
                       leading-[1.1] tracking-[-0.01em] font-normal italic text-balance text-white
                       opacity-0 translate-y-4 transition-all duration-700">
                    <?php echo esc_html(nd_translate('En MBI Abogados ofrecemos a nuestros clientes asesoramiento jurídico con visión estratégica, rigor, cercanía y dedicación personal.', 'At MBI Abogados we offer our clients legal advice with strategic vision, rigor, closeness, and personal dedication.')); ?>
                </h2>

                <p
                    data-transform-item
                    class="mt-6 mx-auto max-w-3xl
                       text-[clamp(17px,1.5vw,22px)] leading-[1.25]
                       text-white/90 font-normal
                       opacity-0 translate-y-4 transition-all duration-700">
                    <?php echo esc_html(nd_translate('Lo esencial bien hecho. Lo complejo bien pensado.', 'The essentials done right. The complex well thought out.')); ?>
                </p>

                <a
                    data-transform-item
                    href="#contacto"
                    class="mt-8 inline-flex items-center justify-center
                       h-11 min-w-[170px] px-9
                       bg-[#7f8762] text-white text-[clamp(13px,1.3vw,18px)] leading-[1.6] font-normal
                       shadow-[0_16px_36px_rgba(0,0,0,0.38)]
                       hover:bg-[#6f7a56] transition
                       opacity-0 translate-y-4">
                    <?php echo esc_html(nd_translate('Contacta', 'Contact')); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="servicios"
        data-section="services"
        class="py-16 lg:py-28 bg-white">

        <div class="page-shell space-y-10 sm:space-y-12">

            <!-- PRETÍTULO -->
            <div
                data-services-title
                class="text-center opacity-0 translate-y-6 transition-all duration-700">
                <p class="uppercase tracking-[0.2em] text-[clamp(15px,1.5vw,22px)] leading-[1.4]
                      font-normal text-[#7a8464]">
                    <?php echo esc_html(nd_translate('Servicios', 'Services')); ?>
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

            <div class="grid gap-10 md:grid-cols-[1fr_1fr] lg:items-start">

                <!-- COLUMNA IZQUIERDA -->
                <div
                    data-services-left
                    class="space-y-4 opacity-0 translate-y-8 transition-all duration-700 md:pr-4 lg:pr-8">

                    <h2 class="text-[clamp(26px,2.8vw,52px)] leading-[1.1] tracking-[-0.01em] font-normal text-[#34362f]">
                        <?php echo esc_html(nd_translate('Soluciones jurídicas', 'Legal solutions')); ?>
                        <span class="italic text-[#6a7352]">
                            <?php echo esc_html(nd_translate('sencillas, sólidas y personalizadas', 'straightforward, solid, and personalized')); ?>
                        </span>
                    </h2>




                    <div
                        class="mt-8 overflow-hidden border border-[#e1dfd5] bg-white
                           shadow-[0_12px_26px_rgba(0,0,0,0.08)]
                           opacity-0 scale-[0.96] transition-all duration-700"
                        data-services-image>

                        <img
                            class="h-[240px] w-full object-cover sm:h-[300px] lg:h-[360px]"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/madrid.png"
                            alt="<?php echo esc_attr(nd_translate('Vista urbana de Madrid', 'Madrid city skyline')); ?>">
                    </div>
                </div>

                <!-- COLUMNA DERECHA -->
                <div
                    data-services-right
                    class="space-y-4 lg:pt-1 opacity-0 translate-y-8 transition-all duration-700">

                    <p class="text-[clamp(17px,1.5vw,22px)] leading-[1.25] text-[#5b5d55] pb-5">
                        <?php echo esc_html(nd_translate('Nos especializamos en áreas donde la experiencia marca la diferencia:', 'We specialize in areas where experience makes the difference:')); ?>
                    </p>

                    <?php if (have_rows('services')) : ?>
                        <div class="space-y-4" data-accordion="single">

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

                                            <span class="text-[clamp(15px,1.5vw,22px)] leading-[1.25] font-normal text-[#3f423b]">
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
                                           text-[clamp(15px,1.5vw,18px)] leading-[1.25] [&_p]:text-[clamp(16px,1.5vw,22px)] [&_p]:leading-[1.25]
                                           text-[#4b4d45]
                                           grid grid-rows-[0fr] opacity-0
                                           transition-[grid-template-rows,opacity] duration-[360ms] ease-[cubic-bezier(0.4,0,0.2,1)]
                                           data-[open=true]:grid-rows-[1fr] data-[open=true]:opacity-100
                                           motion-reduce:transition-none"
                                        data-accordion-panel
                                        data-open="false"
                                        aria-hidden="true"
                                        inert>
                                        <div class="min-h-0 overflow-hidden px-6">
                                            <?php echo wp_kses_post($desc); ?>
                                        </div>
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

            <?php
            $success_cases = [];
            $success_cases_label = nd_translate('Casos de éxito', 'Success cases');

            if (function_exists('get_field')) {
                $success_cases_label = get_field('success_cases_label') ?: $success_cases_label;
                $success_cases = get_field('success_cases');
            }

            if (!empty($success_cases) && is_array($success_cases)) :
            ?>
                <div class="mb-14">
                    <div class="mb-8 text-center">
                        <p class="text-[11px] sm:text-[12px] uppercase tracking-[0.35em] text-[#7a806b]">
                            <?php echo esc_html($success_cases_label); ?>
                        </p>
                        <span class="mt-3 inline-block h-px w-16 bg-[#b8bdab]"></span>
                    </div>

                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <?php
                        $case_index = 0;
                        foreach ($success_cases as $case) :
                            $case_index++;
                            $case_title = $case['title'] ?? '';
                            $case_subtitle = $case['subtitle'] ?? '';
                            $case_meta = $case['meta'] ?? '';
                            $case_cta = $case['cta_label'] ?? '';
                            $case_cta = $case_cta ?: nd_translate('Ver más', 'See more');
                        ?>
                            <article data-contact-item class="group relative border border-[#d5d7c8] bg-[#d9dccf] p-6 sm:p-7 min-h-[190px] flex flex-col justify-between opacity-0 translate-y-8 transition-all duration-500">
                                <div class="space-y-2">
                                    <?php if ($case_subtitle) : ?>
                                        <p class="text-[11px] sm:text-[12px] uppercase tracking-[0.18em] text-[#6f7562]">
                                            <?php echo esc_html($case_subtitle); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($case_meta) : ?>
                                        <p class="text-[11px] sm:text-[12px] text-[#8a907b]">
                                            <?php echo esc_html($case_meta); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($case_title) : ?>
                                        <h3 class="pt-2 text-[clamp(16px,1.6vw,22px)] leading-[1.25] font-normal text-[#3f4436]">
                                            <?php echo esc_html($case_title); ?>
                                        </h3>
                                    <?php endif; ?>
                                </div>

                                <button
                                    type="button"
                                    data-modal="success-case-modal-<?php echo $case_index; ?>"
                                    class="mt-6 inline-flex items-center gap-2 self-start border border-[#8a9078] px-3 py-1 text-[11px] sm:text-[12px] uppercase tracking-[0.2em] text-[#4c533f] transition hover:bg-white/50 hover:border-[#6f775f] hover:text-[#2f3326]">
                                    <span><?php echo esc_html($case_cta); ?></span>
                                    <span aria-hidden="true" class="text-[14px]">→</span>
                                </button>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php
                $case_index = 0;
                foreach ($success_cases as $case) :
                    $case_index++;
                    $case_title = $case['title'] ?? '';
                    $case_subtitle = $case['subtitle'] ?? '';
                    $case_modal_image = $case['modal_image'] ?? null;
                    $case_content = $case['content'] ?? '';
                    $case_excerpt = $case['excerpt'] ?? '';
                    $modal_image = $case_modal_image;
                ?>
                    <div id="success-case-modal-<?php echo $case_index; ?>" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 px-3 sm:px-6" data-modal-root data-modal-backdrop>
                        <div class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto bg-white p-4 sm:p-6 lg:p-10 rounded-xl shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
                            <button class="absolute right-3 top-3 inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#d7d4cb] bg-white text-[#5b6542] text-[20px] shadow-[0_6px_14px_rgba(0,0,0,0.18)] transition hover:bg-[#f2f1ec] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#8a9472]/60 focus-visible:ring-offset-2 modal-close-button" data-close><span class="relative top-[1px] leading-none modal-close-icon">✕</span></button>
                            <div class="flex flex-col gap-6 lg:gap-8 md:flex-row">
                                <?php if ($modal_image) : ?>
                                    <div class="md:w-5/12 lg:w-4/12">
                                        <div class="w-full overflow-hidden rounded-lg bg-[#f2f1ec] aspect-[4/5] sm:aspect-[4/5] max-h-[45vh] sm:max-h-[55vh] md:max-h-none">
                                            <img class="h-full w-full object-contain sm:object-cover object-[center_top]" src="<?php echo esc_url($modal_image['url']); ?>" alt="<?php echo esc_attr($modal_image['alt'] ?: $case_title); ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="<?php echo $modal_image ? 'md:w-7/12 lg:w-8/12' : 'w-full'; ?>">
                                    <div class="space-y-2 text-left">
                                        <?php if ($case_subtitle) : ?>
                                            <p class="text-[clamp(14px,1.3vw,20px)] uppercase tracking-[0.18em] leading-[1.2] text-[#7a8464]">
                                                <?php echo esc_html($case_subtitle); ?>
                                            </p>
                                        <?php endif; ?>
                                        <?php if ($case_title) : ?>
                                            <h3 class="text-[clamp(19px,1.9vw,28px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#58683d]">
                                                <?php echo esc_html($case_title); ?>
                                            </h3>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($case_content) : ?>
                                        <div class="mt-4 text-[clamp(15px,1.4vw,20px)] leading-[1.6] text-[#3d3f36] space-y-4">
                                            <?php echo wp_kses_post($case_content); ?>
                                        </div>
                                    <?php elseif ($case_excerpt) : ?>
                                        <p class="mt-4 text-[clamp(15px,1.4vw,20px)] leading-[1.6] text-[#3d3f36]">
                                            <?php echo esc_html($case_excerpt); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- CABECERA -->
            <div
                data-contact-title
                class="text-center space-y-3 mb-12
             opacity-0 translate-y-6 transition-all duration-700">

                <h2 class="text-[clamp(26px,2.8vw,52px)] leading-[1.1] tracking-[-0.01em] font-normal">
                    <?php echo esc_html(nd_translate('Estamos cerca', 'We are nearby')); ?>
                </h2>

                <span
                    data-contact-line
                    class="inline-block h-px w-16 bg-[#859263]
               opacity-0 scale-x-0 origin-center transition-all duration-700"></span>

                <p class="text-[clamp(17px,1.5vw,22px)] leading-[1.25] font-light">
                    <?php echo esc_html(nd_translate('Cada cliente importa. Cada caso merece una respuesta a su medida.', 'Every client matters. Every case deserves a tailored response.')); ?>
                </p>
            </div>

            <div class="grid md:grid-cols-[1.05fr_0.95fr] gap-10 lg:gap-12 items-start">

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
                            title="<?php echo esc_attr(nd_translate('Mapa MBI Abogados', 'MBI Abogados map')); ?>"
                            src="https://www.google.com/maps?q=Calle+Recoletos+19+Madrid&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-[260px] sm:h-[280px] border-0">
                        </iframe>
                    </div>

                    <!-- DATOS -->
                    <div class="grid gap-x-6 gap-y-10 sm:gap-x-10 sm:gap-y-12 grid-cols-2 min-[1500px]:grid-cols-3 text-[#3f413a]">

                        <!-- TELÉFONO -->
                        <div
                            data-contact-item
                            class="flex items-start gap-4 sm:gap-5 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/telefono.svg"
                                alt="" aria-hidden="true">

                            <div class="space-y-2">
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] font-medium text-[#6a754f]"><?php echo esc_html(nd_translate('Teléfono', 'Phone')); ?></p>
                                <a
                                    href="tel:+34918403779"
                                    class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] hover:text-[#58683d] transition">
                                    +34 91 840 37 79
                                </a>
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div
                            data-contact-item
                            class="flex items-start gap-4 sm:gap-5 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-2">
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] font-medium text-[#6a754f]"><?php echo esc_html(nd_translate('Email', 'Email')); ?></p>
                                <a
                                    href="mailto:info@mbiabogados.com"
                                    class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] hover:text-[#58683d] transition">
                                    info@mbiabogados.com
                                </a>
                            </div>
                        </div>

                        <!-- LINKEDIN -->
                        <div
                            data-contact-item
                            class="flex items-start gap-4 sm:gap-5 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-2">
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] font-medium text-[#6a754f]"><?php echo esc_html(nd_translate('LinkedIn', 'LinkedIn')); ?></p>
                                <a
                                    href="https://www.linkedin.com/company/mbi-abogados/"
                                    class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] hover:text-[#58683d] transition">
                                    MBI Abogados
                                </a>
                            </div>
                        </div>



                        <!-- HORARIO -->
                        <div
                            data-contact-item
                            class="flex items-start gap-4 sm:gap-5 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/reloj.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-2">
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.4] font-medium text-[#6a754f]"><?php echo esc_html(nd_translate('Horario', 'Hours')); ?></p>
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.4] text-[#3f413a]">
                                    <span class="grid grid-cols-[auto_1fr] items-baseline gap-x-3 font-medium">
                                        <span><?php echo esc_html(nd_translate('Lun–Jue', 'Mon–Thu')); ?></span>
                                        <span class="justify-self-end whitespace-nowrap">
                                            9:30<span class="text-[#6a754f]">–</span>19:30
                                        </span>
                                    </span>

                                    <span class="mt-2 grid grid-cols-[auto_1fr] items-baseline gap-x-3 font-medium">
                                        <span><?php echo esc_html(nd_translate('Viernes', 'Friday')); ?></span>
                                        <span class="justify-self-end whitespace-nowrap">
                                            9:30<span class="text-[#6a754f]">–</span>14:00
                                        </span>
                                    </span>
                                </p>

                            </div>
                        </div>

                        <!-- DIRECCIÓN -->
                        <div
                            data-contact-item
                            class="flex items-start gap-4 sm:gap-5 opacity-0 translate-y-6 transition-all duration-700">

                            <img
                                class="mt-0.5 h-6 w-6 shrink-0 object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/direccion.png"
                                alt="" aria-hidden="true">

                            <div class="space-y-2">
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6] font-medium text-[#6a754f]"><?php echo esc_html(nd_translate('Dirección', 'Address')); ?></p>
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6]"><?php echo esc_html(nd_translate('Calle Recoletos 19 ', 'Calle Recoletos 19')); ?></p>
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6]"><?php echo esc_html(nd_translate('1º planta', '1st floor')); ?></p>
                                <p class="text-[clamp(13px,1.3vw,18px)] leading-[1.6]"><?php echo esc_html(nd_translate('28001 Madrid, España', '28001 Madrid, Spain')); ?></p>
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
                        <h3 class="text-[clamp(20px,2.2vw,38px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#3f3f39]"><?php echo esc_html(nd_translate('Escríbenos', 'Write to us')); ?></h3>
                        <p class="text-[clamp(17px,1.5vw,22px)] leading-[1.25] text-[#4a4b44]"><?php echo esc_html(nd_translate('Estamos aquí para escucharte.', 'We are here to listen to you.')); ?></p>
                    </div>
                    <!-- FORMULARIO -->
                    <?php
                    $contact_form_shortcode = nd_translate(
                        '[contact-form-7 id="9cabae9" title="FORM Contacto ES"]',
                        '[contact-form-7 id="a7b81c6" title="FORM Contact EN"]'
                    );
                    echo do_shortcode($contact_form_shortcode);
                    ?>
                </div>

            </div>
        </div>
    </section>



</main>
<?php get_footer(); ?>
