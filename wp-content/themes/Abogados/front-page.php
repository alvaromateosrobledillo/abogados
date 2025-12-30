<?php get_header();
?>
<main class="flex flex-col gap-0">
    <section id="hero" class="relative isolate overflow-hidden ">
        <div class="absolute inset-0 -z-10">
            <video
                class="h-full w-full object-cover object-center"
                autoplay
                muted
                loop
                playsinline
                preload="metadata"
                poster="<?php echo get_template_directory_uri(); ?>/assets/video/video.png"
                aria-hidden="true">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero.mp4" type="video/mp4" />
            </video>
            <div class="absolute inset-0 bg-[rgba(18,18,17,0.60)]"></div>
        </div>
        <div class="mx-auto flex min-h-[calc(100vh-96px)] max-w-5xl flex-col items-center justify-center px-6 py-24 text-center lg:px-10">
            <p class="uppercase tracking-[0.36em] text-[13px] sm:text-[14px] font-normal text-[#ffffff]">
                MBI ABOGADOS
            </p>
            <h1 class="mt-3 text-[44px] sm:text-[56px] lg:text-[68px] leading-[1.08] font-normal tracking-tight text-balance text-[#ffffff]">
                La experiencia que orienta
            </h1>
            <h2 class=" text-[44px] sm:text-[56px] lg:text-[68px] leading-[1.08] font-normal tracking-tight text-balance text-[#7f8762]">
                El criterio que inspira confianza
            </h2>

            <p class="mt-2 max-w-2xl text-[17px] sm:text-[18px] leading-relaxed text-[#ffffff]/90 font-normal">
                Una boutique especializada en Derecho Procesal, Inmobiliario y Urbanismo. Una visión compartida:
                hacer las cosas bien, con cercanía, experiencia y compromiso.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a class="inline-flex items-center justify-center h-11 min-w-[170px] px-9 bg-[#7f8762] text-[#ffffff] text-[16px] font-normal shadow-[0_16px_36px_rgba(0,0,0,0.38)] hover:bg-[#6f7a56] transition" href="#contacto">
                    Contacta
                </a>
                <a class="inline-flex items-center justify-center h-11 min-w-[170px] px-9 border border-white/30 bg-white/5 text-[#ffffff] text-[16px] font-normal backdrop-blur-sm hover:bg-white/10 hover:border-white/45 transition" href="#quienes-somos">
                    Descubre MBI
                </a>
            </div>
        </div>

        <a href="#quienes-somos" class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-[12px] uppercase tracking-[0.28em] text-[#ffffff]/70 hover:text-[#ffffff] transition">
            <span>Descubrir</span>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                <path d="M2.25 5.25L7 10.25L11.75 5.25" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </section>
    <section id="quienes-somos" class="bg-white mb-20 lg:mb-28">
        <div class="relative z-20 mx-auto max-w-screen-2xl px-6 sm:px-12 lg:px-16 pt-24 pb-20 text-center">
            <p class="uppercase tracking-[0.24em] text-[13px] sm:text-[14px] font-normal text-[#535F35]">Quiénes somos</p>

            <h2 class="mt-6 text-[32px] sm:text-[38px] lg:text-[42px] leading-[1.35] font-normal text-[#141414] text-balance">
                La culminación de un camino compartido. Una misma forma de entender el ejercicio de la abogacía y el compromiso con el cliente.
            </h2>


            <p class="mt-7 text-[#484848] text-[17px] sm:text-[18px] leading-relaxed font-normal">
                MBI Abogados es la consolidación de un proyecto y la culminación de un deseo. Crear una firma propia que dé continuidad a muchos años de trabajo conjunto, donde incorporamos nuestras ideas, principios y valores: Nuestra forma de entender la profesión. Hemos construido un despacho, más ágil, más humano y más cercano.
            </p>
        </div>

        <!-- BLOQUE GRIS -->
        <div class="bg-[#dddfd7] py-8">
            <div class="max-w-screen-2xl mx-auto flex flex-col lg:grid lg:grid-cols-[1.1fr_0.9fr] items-center gap-8 px-6 sm:px-12 lg:px-16">

                <!-- TEXTO -->
                <div class="space-y-3 px-8">
                    <div class="space-y-0">
                        <h3 class="text-[28px] sm:text-[30px] font-normal italic text-[#141414] ">
                            Cercanía que entiende.
                        </h3>
                        <p class="text-[28px] sm:text-[30px] text-[#4d5a34] italic font-normal -mt-1">
                            Rigor que construye.
                        </p>
                        <span class="block w-12 h-[1.5px] bg-[#a5a693]"></span>
                    </div>

                    <div class="space-y-3 text-[#3d3f36] text-[17px] sm:text-[18px] leading-relaxed max-w-2xl">
                        <p>
                            Apostamos por un modelo boutique donde cada cliente es atendido directamente por un socio.
                            Sin capas intermedias. Sin tecnicismos innecesarios. Con criterio, claridad y compromiso.
                        </p>
                        <p>
                            No acumulamos clientes. Construimos relaciones duraderas basadas en la confianza,
                            la estrategia y la excelencia discreta.
                        </p>
                        <p class="font-normal text-[#4d5a34]">
                            Porque cada cliente importa.
                        </p>
                    </div>
                </div>

                <!-- IMAGEN + BADGE -->
                <div class="flex justify-center lg:justify-end w-full">
                    <div class="relative w-full max-w-[540px] lg:-mt-16 lg:-mb-16 shadow-[0_22px_55px_rgba(0,0,0,0.18)]">

                        <!-- Imagen -->
                        <img
                            class="w-full h-[320px] sm:h-[360px] lg:h-[420px] object-cover"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/team.png"
                            alt="Equipo de abogados" />


                        <!-- Badge -->

                    </div>
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
                    <svg class="h-5 w-5 text-[#ffffff] shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-6.012 3.001 3.001 0 00-2.223-3.291M18 18.72A9.094 9.094 0 0112 21a9.094 9.094 0 01-6-2.28M18 18.72V15a3 3 0 00-3-3h-1.5M6 18.72V15a3 3 0 013-3H10.5M6 18.72a9.094 9.094 0 01-3.741-6.012 3.001 3.001 0 012.223-3.291M15 6a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    Trato directo con socios
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-2">
                    <svg class="h-5 w-5 text-[#ffffff] shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                    Lenguaje claro y accesible
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-2">
                    <svg class="h-5 w-5 text-[#ffffff] shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="12" cy="8" r="7" stroke="currentColor" stroke-width="1.6" />
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Alta especialización
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-3">
                    <svg class="h-5 w-5 text-[#ffffff] shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5-1.935 0-3.597 1.126-4.313 2.733-.716-1.607-2.378-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    Compromiso firme con cada cliente
                </div>
                <div class="flex items-center gap-3 border border-[#D1D4D6] px-6 sm:px-10 lg:px-[58px] py-5 sm:py-6 text-[16px] sm:text-[17px] font-normal text-[#ffffff] text-left min-h-[80px] lg:col-span-3">
                    <svg class="h-5 w-5 text-[#ffffff] shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
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
                        <img
                            class="h-[clamp(290px,36vh,410px)] w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            src="<?php echo esc_url($partner['image']); ?>"
                            alt="<?php echo esc_attr($partner['alt']); ?>">

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
                                class="mt-2 inline-flex items-center gap-2
                                   text-[12px] font-normal
                                   text-[#d1d7bd]
                                   border border-[#9aa27a]
                                   px-3 py-1.5
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
    <section id="servicios" class="bg-[#f7f6f2] py-16 lg:py-20">
        <div class="max-w-6xl mx-auto px-5 sm:px-10 space-y-10 sm:space-y-12">
            <div class="text-center">
                <p class="uppercase tracking-[0.32em] text-[15px] sm:text-[16px] font-normal text-[#7a8464]">Servicios</p>
            </div>

            <?php
            $services = [
                [
                    'title' => 'Derecho Inmobiliario y Urbanismo',
                    'desc'  => 'Planeamiento, gestión urbanística, licencias, convenios, expropiaciones, disciplina urbanística. Operaciones inmobiliarias complejas, contratos, financiación.',
                    'icon'  => "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='1.6'><path stroke-linecap='round' stroke-linejoin='round' d='M5 21h14M5 10h14M9 6h6m-7 4V5.5a1.5 1.5 0 0 1 1.5-1.5h4a1.5 1.5 0 0 1 1.5 1.5V10m-8 0v11m5-11v11' /></svg>",
                ],
                [
                    'title' => 'Procesal y Arbitraje',
                    'desc'  => 'Litigación: contencioso-administrativo, civil y mercantil. Arbitraje nacional e internacional. Concursal.',
                    'icon'  => "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='1.6'><path stroke-linecap='round' stroke-linejoin='round' d='M6 10h12M5 21h14M7.5 5 12 3l4.5 2M9 10v3.5a3 3 0 0 0 6 0V10' /></svg>",
                ],
                [
                    'title' => 'Mercantil y Societario',
                    'desc'  => 'M&A. Contratación mercantil. Derecho societario. Secretaría de Consejos de administración.',
                    'icon'  => "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='1.6'><path stroke-linecap='round' stroke-linejoin='round' d='M7 10V7a5 5 0 0 1 10 0v3m-8 6h6m-9-9h12v11H6z' /></svg>",
                ],
                [
                    'title' => 'Penal y Compliance',
                    'desc'  => 'Defensa penal de empresas y directivos. Programas de cumplimiento normativo.',
                    'icon'  => "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='1.6'><path stroke-linecap='round' stroke-linejoin='round' d='M12 17a4 4 0 1 0-4-4m4 4a4 4 0 0 0 4-4m-4 4v3m-4-7a4 4 0 0 1 4-4m0 0V4m0 0L7 6m5-2 5 2' /></svg>",
                ],
                [
                    'title' => 'Sucesiones y Familia',
                    'desc'  => 'Herencias, planificación patrimonial, régimen económico matrimonial y pactos sucesorios.',
                    'icon'  => "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='1.6'><path stroke-linecap='round' stroke-linejoin='round' d='M6 13a6 6 0 0 1 12 0v5.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 6 18.5z' /><path stroke-linecap='round' stroke-linejoin='round' d='M9 14.5s1 .5 3 .5 3-.5 3-.5' /></svg>",
                ],
                [
                    'title' => 'Asesoramiento Estratégico',
                    'desc'  => 'Acompañamiento preventivo, visión a largo plazo y claridad en la toma de decisiones.',
                    'icon'  => "<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='1.6'><path stroke-linecap='round' stroke-linejoin='round' d='M12 6a6 6 0 0 0-6 6c0 1.5.56 2.87 1.48 3.9L6 20l4.2-1.28A6 6 0 1 0 12 6Z' /></svg>",
                ],
            ];
            ?>

            <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
                <div class="space-y-5 lg:space-y-6">
                    <h2 class="text-[40px] sm:text-[46px] leading-tight font-normal text-[#34362f]">
                        Soluciones jurídicas <span class="italic text-[#6a7352]">sencillas, sólidas y personalizadas</span>
                    </h2>
                    <span class="block w-12 h-px bg-[#b9bbab]"></span>
                    <div class="space-y-3">
                        <p class="text-[19px] sm:text-[20px] leading-relaxed text-[#4c4e47]">
                            En MBI Abogados convertimos complejidad jurídica en decisiones claras. Priorizamos, aterrizamos escenarios y acompañamos la ejecución con criterio y responsabilidad.
                            Lo esencial bien hecho. Lo complejo bien pensado. Pensamos como abogados. Actuamos como aliados.
                        </p>
                    </div>
                    <div class="overflow-hidden border border-[#e1dfd5] bg-white shadow-[0_12px_26px_rgba(0,0,0,0.08)]">
                        <img
                            class="h-[240px] w-full object-cover sm:h-[270px] lg:h-[300px]"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/madrid.png"
                            alt="Vista urbana de Madrid desde las alturas">
                    </div>
                </div>

                <div class="space-y-4 lg:pt-1">
                    <p class="text-[18px] sm:text-[19px] text-[#5b5d55]">
                        Nos especializamos en áreas donde la experiencia marca la diferencia:
                    </p>
                    <div class="space-y-2" data-accordion="single">
                        <?php foreach ($services as $index => $service) : ?>
                            <?php $is_open = $index === 0; ?>
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
    <section id="contacto" class="py-20 lg:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-2 mb-10">
                <h2 class="text-[36px] sm:text-[42px] font-serif font-normal text-[#3f3f39]">Estamos cerca</h2>
                <p class="text-[17px] sm:text-[18px] text-[#4f5047]">Cada cliente importa. Cada caso merece una respuesta a su medida.</p>
            </div>

            <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-8 lg:gap-10 items-start">
                <div class="space-y-6">
                    <div class="rounded-md overflow-hidden border border-[#d9d7cf]">
                        <iframe
                            title="Mapa MB Abogados"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9080892030086!2d-3.694530084362142!3d40.4329789793634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e2f27484c9%3A0x7a10b98ff7d9d89c!2sC.%20de%20Calder%C3%B3n%20de%20la%20Barca%2C%203%2C%2028042%20Madrid!5e0!3m2!1ses!2ses!4v1707230400000!5m2!1ses!2ses"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-[250px] border-0"></iframe>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-2 gap-x-6 gap-y-4 text-[16px] sm:text-[17px] text-[#3f413a]">
                        <div class="flex gap-2">
                            <span class="mt-1 text-[#6a754f]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-6-4.35-6-9.5S8.477 4 12 4s6 2.92 6 7.5S12 21 12 21Z" />
                                    <circle cx="12" cy="10.5" r="1.6" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-normal text-[16px] sm:text-[17px]">Dirección</p>
                                <p>Calle Recoletos 19</p>
                                <p>28001 Madrid, España</p>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <span class="mt-1 text-[#6a754f]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 4.5 8.5 4 11 9l-2 1c1 2 3 3 5 4l1-2 5 2.5-.5 3.5c-5.5 2-13-4-13-10Z" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-normal text-[16px] sm:text-[17px]">Teléfono</p>
                                <p>+34 91 234 56 78</p>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <span class="mt-1 text-[#6a754f]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6.5h16l-8 6-8-6Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6.5v11h16v-11" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-normal text-[16px] sm:text-[17px]">Email</p>
                                <p>info@mbiabogados.com</p>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <span class="mt-1 text-[#6a754f]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5h4m4 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-normal text-[16px] sm:text-[17px]">Horario</p>
                                <p>L-V: 9:00h a 17:30h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2 grid grid-cols-[1px_1fr] gap-6">
                    <span class="hidden lg:block w-px bg-[#d7d4cb]"></span>
                    <div class="space-y-4">
                        <h3 class="text-[24px] font-normal text-[#3f3f39]">Escríbenos</h3>
                        <p class="text-[17px] text-[#4a4b44]">Estamos aquí para escucharte.</p>
                        <form class="space-y-3">
                            <input class="w-full border border-[#d8d4c8] bg-white px-3 py-2.5 text-[17px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="nombre" name="nombre" type="text" placeholder="Nombre completo" required>
                            <input class="w-full border border-[#d8d4c8] bg-white px-3 py-2.5 text-[17px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="email" name="email" type="email" placeholder="Correo electrónico" required>
                            <input class="w-full border border-[#d8d4c8] bg-white px-3 py-2.5 text-[17px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="telefono" name="telefono" type="tel" placeholder="Teléfono">
                            <textarea class="w-full border border-[#d8d4c8] bg-white px-3 py-2.5 text-[17px] text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu consulta" required></textarea>
                            <button type="submit" class="w-full bg-[#596636] text-[#ffffff] text-[17px] font-normal py-2.5 px-4 hover:bg-[#4e5a2f] transition">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
