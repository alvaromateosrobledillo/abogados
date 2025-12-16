<?php get_header();
?>
<main class="flex flex-col gap-0">
    <section id="hero" class="relative isolate overflow-hidden bg-[#0c0c0b]">
        <div class="absolute inset-0 -z-10">
            <img
                class="h-full w-full object-cover object-center opacity-60"
                src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2400&q=80"
                alt="Arquitectura moderna" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/60 to-black/85"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-black/60"></div>
        </div>

        <div class="mx-auto flex min-h-[calc(100vh-96px)] max-w-6xl flex-col items-center justify-center px-6 py-24 text-center lg:px-10">
            <p class="uppercase tracking-[0.32em] text-[11px] font-semibold text-white/70">
                Despacho boutique de abogados
            </p>

            <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-tight text-balance text-white">
                La experiencia que orienta.
            </h1>
            <h2 class="mt-2 text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-tight text-balance text-[#808e60]">
                El criterio que inspira confianza.
            </h2>

            <p class="mt-7 max-w-2xl text-[13px] sm:text-[14px] leading-relaxed text-white/70">
                Un despacho boutique especializado en Derecho Procesal, Inmobiliario y Urbanismo.
                Tres socios, una visión compartida.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-3">
                <a class="inline-flex items-center justify-center px-7 py-3 bg-[#596636] text-white text-sm font-semibold shadow-[0_18px_44px_rgba(0,0,0,0.40)] hover:bg-[#4e5a2f] transition" href="#quienes-somos">
                    Descubre MBI
                </a>
                <a class="inline-flex items-center justify-center px-7 py-3 border border-white/25 bg-white/5 text-white text-sm font-semibold hover:bg-white/10 hover:border-white/35 transition" href="#servicios">
                    Nuestros Servicios
                </a>
            </div>
        </div>

        <a href="#quienes-somos" class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-[10px] uppercase tracking-[0.32em] text-white/70 hover:text-white transition">
            <span>Descubrir</span>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                <path d="M2.25 5.25L7 10.25L11.75 5.25" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </section>
    <section id="quienes-somos" class="bg-white">
        <!-- CABECERA SUPERIOR -->
        <div class="relative z-20 mx-auto max-w-4xl px-6 pt-24 pb-24 text-center">
            <p class="uppercase tracking-[0.32em] text-[11px] font-semibold text-[#6d6c63]">Quiénes somos</p>

            <h2 class="mt-5 font-serif text-[30px] sm:text-[34px] lg:text-[36px] leading-[1.25] font-semibold text-slate-900 text-balance">
                Tres trayectorias.
                <span class="text-[#58683d] italic font-semibold">
                    Una misma <span class="block">forma de entender el Derecho.</span>
                </span>
            </h2>

            <span class="mt-6 inline-block h-px w-16 bg-[#b6b5a6]"></span>

            <p class="mt-7 mx-auto max-w-2xl text-[#4f5047] text-[13px] sm:text-[14px] leading-relaxed">
                MB Abogados nace de la decisión valiente de tres profesionales con amplia experiencia en grandes firmas,
                que decidieron construir un despacho propio, más ágil, más humano y más cercano.
            </p>
        </div>

        <!-- BLOQUE GRIS -->
        <div class="bg-[#d8d7d0] py-8">
            <div class="max-w-screen-2xl mx-auto flex flex-col lg:grid lg:grid-cols-[1.1fr_0.9fr] items-center gap-8 px-6 sm:px-12 lg:px-16">

                <!-- TEXTO -->
                <div class="space-y-4">
                    <div class="space-y-2">
                        <h3 class="text-[22px] sm:text-[24px] font-semibold text-slate-900">
                            Cercanía que entiende.
                        </h3>
                        <p class="text-[22px] sm:text-[24px] text-[#4d5a34] italic font-semibold">
                            Rigor que construye.
                        </p>
                        <span class="block w-12 h-[1.5px] bg-[#a5a693]"></span>
                    </div>

                    <div class="space-y-3 text-[#3d3f36] text-[14px] sm:text-[15px] leading-relaxed max-w-2xl">
                        <p>
                            Apostamos por un modelo boutique donde cada cliente es atendido directamente por un socio.
                            Sin capas intermedias. Sin tecnicismos innecesarios. Con criterio, claridad y compromiso.
                        </p>
                        <p>
                            No acumulamos clientes. Construimos relaciones duraderas basadas en la confianza,
                            la estrategia y la excelencia discreta.
                        </p>
                        <p class="font-semibold text-[#4d5a34]">
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
                            src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1200&q=80"
                            alt="Equipo de abogados revisando documentos" />

                        <!-- Badge -->
                        <div class="absolute -bottom-6 right-4  lg:translate-x-1/2 bg-[#5c693e] text-white px-6 py-4 shadow-lg text-left">
                            <span class="block text-2xl font-bold leading-none">+25</span>
                            <span class="block text-[13px] font-semibold tracking-[0.05em] uppercase">
                                años de experiencia
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<section id="equipo" class="py-20 lg:py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

        <!-- Cabecera -->
        <div class="text-center space-y-3 mb-20">
            <p class="uppercase tracking-[0.22em] text-[10px] font-semibold text-[#7a8464]">
                Nuestro equipo de expertos
            </p>
            <h2 class="text-2xl sm:text-3xl font-semibold text-[#3f3f39]">
                Nuestro equipo, <span class="text-[#58683d]">tu garantía.</span>
            </h2>
        </div>

        <?php
        $teamMembers = [
            [
                'name'  => 'Fernando Marín Riaño',
                'role'  => 'Derecho Inmobiliario, Urbanismo y Contencioso Administrativo',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80',
                'alt'   => 'Retrato de Fernando Marín Riaño',
            ],
            [
                'name'  => 'Enrique Besada',
                'role'  => 'Litigación Civil e Inmobiliario',
                'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=500&q=80',
                'alt'   => 'Retrato de Enrique Besada',
            ],
            [
                'name'  => 'Mónica Iglesias Sánchez',
                'role'  => 'Derecho Procesal y Arbitraje',
                'image' => 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=500&q=80',
                'alt'   => 'Retrato de Mónica Iglesias Sánchez',
            ],
            [
                'name'  => 'Javier Morales',
                'role'  => 'Derecho Procesal y Arbitraje',
                'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=500&q=80',
                'alt'   => 'Retrato de Javier Morales',
            ],
            [
                'name'  => 'Lucía Ortega',
                'role'  => 'Derecho Procesal y Arbitraje',
                'image' => 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=500&q=80',
                'alt'   => 'Retrato de Lucía Ortega',
            ],
            [
                'name'  => 'Carlos Medina',
                'role'  => 'Derecho Procesal y Arbitraje',
                'image' => 'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=500&q=80',
                'alt'   => 'Retrato de Carlos Medina',
            ],
        ];
        ?>

        <!-- Grid equipo -->
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($teamMembers as $member) : ?>
                <article
                    class="group relative border border-[#d8d4c6] bg-white px-6 pb-8 pt-16 text-center
                    shadow-[0_8px_18px_rgba(0,0,0,0.06)]
                    transition-all duration-300
                    hover:-translate-y-1 hover:shadow-[0_16px_30px_rgba(0,0,0,0.08)]"
                >
                    <!-- Imagen -->
                    <div
                        class="absolute -top-12 left-1/2 h-32 w-32 -translate-x-1/2 overflow-hidden rounded-full
                        border-[5px] border-[#efeee8] bg-white
                        transition-all duration-300
                        group-hover:border-[#58683d]
                        shadow-[0_14px_28px_rgba(0,0,0,0.10)]"
                    >
                        <img
                            class="h-full w-full object-cover"
                            src="<?php echo esc_url($member['image']); ?>"
                            alt="<?php echo esc_attr($member['alt']); ?>"
                        >
                    </div>

                    <!-- Texto -->
                    <h3 class="mt-4 text-[15.5px] font-semibold text-[#3f3f39]">
                        <?php echo esc_html($member['name']); ?>
                    </h3>
                    <p class="mt-2 text-[13px] leading-snug text-[#4a4b44]">
                        <?php echo esc_html($member['role']); ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

    <section id="servicios" class="relative overflow-hidden py-20 lg:py-24 bg-dark text-[#e8e8e1]">
        <div class="pointer-events-none absolute inset-0 opacity-80" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0b0b0a] via-[#11110f] to-[#0b0b0a]"></div>
            <div class="absolute -top-40 left-1/2 h-[560px] w-[560px] -translate-x-1/2 rounded-full bg-brand-soft/10 blur-3xl"></div>
            <div class="absolute -bottom-56 right-0 h-[560px] w-[560px] rounded-full bg-brand/10 blur-3xl"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-5 sm:px-10">
            <div class="text-center space-y-4">
                <p class="uppercase tracking-[0.32em] text-[11px] font-semibold text-[#7b7a72]">Servicios</p>
                <h2 class="text-3xl sm:text-[34px] leading-[1.35] font-semibold text-white">
                    Soluciones jurídicas sólidas, <span class="text-[#808e60] italic">ágiles</span> y <span class="text-[#808e60] italic">personalizadas</span>.
                </h2>
                <p class="max-w-3xl mx-auto text-[15px] text-[#c6c5ba] leading-relaxed">
                    En MBI Abogados ofrecemos asesoramiento jurídico con visión estratégica, claridad constante y dedicación personal.
                    Lo esencial bien hecho. Lo complejo bien pensado.
                </p>
                <span class="block w-16 h-px bg-white/20 mx-auto"></span>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <article class="border border-white/10 bg-gradient-to-b from-[#171715] to-[#141412] px-7 py-7 text-left shadow-[inset_0_1px_0_rgba(255,255,255,0.04),0_18px_44px_rgba(0,0,0,0.35)] transition hover:border-white/20">
                    <span class="text-[#808e60]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 21h14M5 10h14M9 6h6m-7 4V5.5a1.5 1.5 0 0 1 1.5-1.5h4a1.5 1.5 0 0 1 1.5 1.5V10m-8 0v11m5-11v11" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[14px] font-semibold text-white leading-snug">Derecho Inmobiliario y Urbanismo</h3>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Planeamiento, gestión urbanística, licencias, convenios, expropiaciones, reparcelaciones.</p>
                    <p class="mt-4 text-[12px] italic text-[#808e60] font-medium">Interpretamos el territorio. Acompañamos a quienes lo transforman.</p>
                </article>

                <article class="border border-white/10 bg-gradient-to-b from-[#171715] to-[#141412] px-7 py-7 text-left shadow-[inset_0_1px_0_rgba(255,255,255,0.04),0_18px_44px_rgba(0,0,0,0.35)] transition hover:border-white/20">
                    <span class="text-[#808e60]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 10h12M5 21h14M7.5 5 12 3l4.5 2M9 10v3.5a3 3 0 0 0 6 0V10" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[14px] font-semibold text-white leading-snug">Procesal y Arbitraje</h3>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Defensa en litigios complejos, contencioso-administrativo, civil y mercantil.</p>
                    <p class="mt-4 text-[12px] italic text-[#808e60] font-medium">Anticipamos riesgos. Defendemos intereses. Resolvemos con criterio.</p>
                </article>

                <article class="border border-white/10 bg-gradient-to-b from-[#171715] to-[#141412] px-7 py-7 text-left shadow-[inset_0_1px_0_rgba(255,255,255,0.04),0_18px_44px_rgba(0,0,0,0.35)] transition hover:border-white/20">
                    <span class="text-[#808e60]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 10V7a5 5 0 0 1 10 0v3m-8 6h6m-9-9h12v11H6z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[14px] font-semibold text-white leading-snug">Mercantil y Societario</h3>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Asesoramiento integral en operaciones corporativas y transacciones.</p>
                    <p class="mt-4 text-[12px] italic text-[#808e60] font-medium">Estrategia jurídica para el crecimiento empresarial.</p>
                </article>

                <article class="border border-white/10 bg-gradient-to-b from-[#171715] to-[#141412] px-7 py-7 text-left shadow-[inset_0_1px_0_rgba(255,255,255,0.04),0_18px_44px_rgba(0,0,0,0.35)] transition hover:border-white/20">
                    <span class="text-[#808e60]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 17a4 4 0 1 0-4-4m4 4a4 4 0 0 0 4-4m-4 4v3m-4-7a4 4 0 0 1 4-4m0 0V4m0 0L7 6m5-2 5 2" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[14px] font-semibold text-white leading-snug">Penal y Compliance</h3>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Defensa penal de empresas y directivos. Programas de cumplimiento normativo.</p>
                    <p class="mt-4 text-[12px] italic text-[#808e60] font-medium">Prevención y protección con rigor técnico.</p>
                </article>

                <article class="border border-white/10 bg-gradient-to-b from-[#171715] to-[#141412] px-7 py-7 text-left shadow-[inset_0_1px_0_rgba(255,255,255,0.04),0_18px_44px_rgba(0,0,0,0.35)] transition hover:border-white/20">
                    <span class="text-[#808e60]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13a6 6 0 0 1 12 0v5.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 6 18.5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.5s1 .5 3 .5 3-.5 3-.5" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[14px] font-semibold text-white leading-snug">Sucesiones y Familia</h3>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Planificación patrimonial, herencias, régimen matrimonial y derecho de familia.</p>
                    <p class="mt-4 text-[12px] italic text-[#808e60] font-medium">Acompañamiento cercano en momentos clave.</p>
                </article>

                <article class="border border-white/10 bg-gradient-to-b from-[#171715] to-[#141412] px-7 py-7 text-left shadow-[inset_0_1px_0_rgba(255,255,255,0.04),0_18px_44px_rgba(0,0,0,0.35)] transition hover:border-white/20">
                    <span class="text-[#808e60]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6a6 6 0 0 0-6 6c0 1.5.56 2.87 1.48 3.9L6 20l4.2-1.28A6 6 0 1 0 12 6Z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[14px] font-semibold text-white leading-snug">Asesoramiento Estratégico</h3>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Acompañamiento jurídico preventivo, visión a largo plazo, claridad en la toma de decisiones.</p>
                    <p class="mt-4 text-[12px] italic text-[#808e60] font-medium">Pensamos como abogados. Actuamos como aliados.</p>
                </article>
            </div>

            <div class="mt-16">
                <div class="relative overflow-hidden border border-white/20 bg-black/20 px-6 sm:px-12 py-12 text-center">
                    <div class="absolute inset-0 pointer-events-none opacity-60" aria-hidden="true">
                        <div class="absolute inset-0 bg-gradient-to-b from-white/0 via-white/0 to-black/60"></div>
                        <div class="absolute -left-40 -bottom-40 h-96 w-96 rounded-full bg-brand-soft/10 blur-3xl"></div>
                        <div class="absolute -right-40 -top-40 h-96 w-96 rounded-full bg-brand/10 blur-3xl"></div>
                    </div>

                    <div class="relative space-y-4">
                        <h3 class="text-[24px] sm:text-[28px] leading-tight font-semibold text-white">
                            Transformamos el Derecho desde la <span class="italic text-[#8fa06b]">cercanía, el rigor y la visión estratégica.</span>
                        </h3>
                        <p class="text-[14px] sm:text-[15px] leading-relaxed text-[#dcdcd2] max-w-3xl mx-auto">
                            En MBI Abogados ofrecemos asesoramiento jurídico con visión estratégica, claridad constante y dedicación personal. Lo esencial bien hecho. Lo complejo bien pensado.
                        </p>
                        <div class="pt-2">
                            <a class="inline-flex items-center justify-center px-10 py-3 rounded-none bg-[#5f6d44] text-white text-sm font-semibold shadow-[0_18px_44px_rgba(0,0,0,0.45)] hover:bg-[#6c7a4f] transition" href="#contacto">
                                Contacta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="filosofia" class="bg-white mt-14 lg:mt-20 mb-20 lg:mb-24">
        <div class="text-center pt-14 pb-6 px-6">
            <p class="uppercase tracking-[0.26em] text-[10px] sm:text-[11px] font-semibold text-[#6d6c63]">Filosofía</p>
        </div>

        <div class="bg-[#d8d7d0] py-8">
            <div class="max-w-screen-2xl mx-auto flex flex-col lg:grid lg:grid-cols-[1.1fr_0.9fr] items-center gap-8 px-6 sm:px-12 lg:px-16">

                <!-- IMAGEN + BADGE (IZQUIERDA) -->
                <div class="flex justify-center lg:justify-start w-full order-1">
                    <div class="relative w-full max-w-[540px] lg:-mt-16 lg:-mb-16 shadow-[0_22px_55px_rgba(0,0,0,0.18)]">
                        <img class="w-full h-[320px] sm:h-[360px] lg:h-[420px] object-cover"
                             src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80"
                             alt="Dos personas estrechando la mano sobre una mesa de trabajo">
                        <div class="absolute -bottom-6 left-0 -translate-x-1/2 bg-[#5c693e] text-white px-5 py-3 shadow-lg text-left">
                            <span class="block text-[12px] font-semibold leading-tight">Los mejores</span>
                            <span class="block text-[15px] font-bold leading-tight">resultados</span>
                        </div>
                    </div>
                </div>

                <!-- TEXTO (DERECHA) -->
                <div class="order-2 space-y-3 sm:space-y-4 text-[#3d3f36]">
                    <div class="space-y-2">
                        <h3 class="text-[22px] sm:text-[24px] font-semibold text-slate-900">Criterio que escucha.</h3>
                        <p class="text-[22px] sm:text-[24px] text-[#4d5a34] italic font-semibold">Propósito que transforma.</p>
                        <span class="block w-12 h-[1.5px] bg-[#a5a693]"></span>
                    </div>
                    <p class="text-[14px] sm:text-[15px] leading-relaxed">
                        En MBI creemos que el Derecho no solo regula: transforma. Por eso trabajamos con la lógica de los buenos urbanistas: anticipar, ordenar y crear valor.
                    </p>
                    <p class="text-[14px] sm:text-[15px] leading-relaxed">
                        Nuestra estructura ligera nos permite estar realmente presentes. Escuchamos con atención, explicamos con sencillez y actuamos con rigor.
                    </p>
                    <p class="text-[14px] sm:text-[15px] leading-relaxed">
                        Somos un despacho boutique con mirada global. <span class="font-semibold text-[#4d5a34]">Lo que hacemos no se mide en años, sino en resultados que permanecen.</span>
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section id="propuesta" class="relative isolate overflow-hidden bg-[#0c0c0b] py-20 lg:py-24 border-b border-white/10">
        <div class="absolute inset-0">
            <img class="h-full w-full object-cover object-center opacity-60" src="https://images.unsplash.com/photo-1460672985063-6764ac8b9c74?auto=format&fit=crop&w=1600&q=80" alt="Arquitectura en perspectiva">
            <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/60 to-[#0c0c0b]/95"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-transparent to-black/70"></div>
        </div>
        <div class="relative max-w-6xl mx-auto px-5 sm:px-10">
            <div class="text-center space-y-2">
                <p class="uppercase tracking-[0.32em] text-[10px] font-semibold text-[#cfcfc7]">Propuesta de valor</p>
            </div>
            <div class="mt-12 grid gap-6 lg:grid-cols-12">
                <article class="lg:col-span-4 border border-[#c9c7bd] bg-[#f2f1ec] px-7 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.35)]">
                    <span class="grid place-items-center h-9 w-9 bg-[#596636] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-6.012 3.001 3.001 0 00-2.223-3.291M18 18.72A9.094 9.094 0 0112 21a9.094 9.094 0 01-6-2.28M18 18.72V15a3 3 0 00-3-3h-1.5M6 18.72V15a3 3 0 013-3H10.5M6 18.72a9.094 9.094 0 01-3.741-6.012 3.001 3.001 0 012.223-3.291M15 6a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[15px] font-semibold text-[#3f3f39]">Trato Directo Con Socios</h3>
                    <p class="mt-2 text-[13px] leading-relaxed text-[#4f5047]">Acceso directo a nuestros socios para una atención personalizada y de máximo nivel.</p>
                </article>

                <article class="lg:col-span-4 border border-[#c9c7bd] bg-[#f2f1ec] px-7 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.35)]">
                    <span class="grid place-items-center h-9 w-9 bg-[#596636] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[15px] font-semibold text-[#3f3f39]">Lenguaje Claro Y Accesible</h3>
                    <p class="mt-2 text-[13px] leading-relaxed text-[#4f5047]">Comunicación transparente sin tecnicismos innecesarios para que entiendas cada paso.</p>
                </article>

                <article class="lg:col-span-4 border border-[#c9c7bd] bg-[#f2f1ec] px-7 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.35)]">
                    <span class="grid place-items-center h-9 w-9 bg-[#596636] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="7" />
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[15px] font-semibold text-[#3f3f39]">Alta Especialización</h3>
                    <p class="mt-2 text-[13px] leading-relaxed text-[#4f5047]">Expertise profundo en las áreas del derecho para resultados excepcionales.</p>
                </article>

                <article class="lg:col-span-7 border border-[#c9c7bd] bg-[#f2f1ec] px-7 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.35)]">
                    <span class="grid place-items-center h-9 w-9 bg-[#596636] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5-1.935 0-3.597 1.126-4.313 2.733-.716-1.607-2.378-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[15px] font-semibold text-[#3f3f39]">Compromiso Firme Con Cada Cliente</h3>
                    <p class="mt-2 text-[13px] leading-relaxed text-[#4f5047]">Tu éxito es nuestro objetivo, trabajamos con dedicación absoluta en cada caso.</p>
                </article>

                <article class="lg:col-span-5 border border-[#bdbcb4] bg-[#d8d7d0] px-7 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.35)]">
                    <span class="grid place-items-center h-9 w-9 bg-[#596636] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-[15px] font-semibold text-[#3f3f39]">Agilidad Y Estrategia</h3>
                    <p class="mt-2 text-[13px] leading-relaxed text-[#4f5047]">Respuestas rápidas con soluciones estratégicas adaptadas a tus necesidades.</p>
                </article>
            </div>
        </div>
    </section>
    <section id="contacto" class="py-20 lg:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-2 mb-10">
                <h2 class="text-3xl font-serif text-[#3f3f39]">Estamos cerca</h2>
                <p class="text-sm text-[#4f5047]">Cada cliente importa. Cada caso merece una respuesta a su medida.</p>
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

                    <div class="grid grid-cols-2 sm:grid-cols-2 gap-x-6 gap-y-4 text-[13px] text-[#3f413a]">
                        <div class="flex gap-2">
                            <span class="mt-1 text-[#6a754f]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-6-4.35-6-9.5S8.477 4 12 4s6 2.92 6 7.5S12 21 12 21Z" />
                                    <circle cx="12" cy="10.5" r="1.6" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-semibold text-[13px]">Dirección</p>
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
                                <p class="font-semibold text-[13px]">Teléfono</p>
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
                                <p class="font-semibold text-[13px]">Email</p>
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
                                <p class="font-semibold text-[13px]">Horario</p>
                                <p>L-V: 9:00h a 17:30h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2 grid grid-cols-[1px_1fr] gap-6">
                    <span class="hidden lg:block w-px bg-[#d7d4cb]"></span>
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-[#3f3f39]">Escríbenos</h3>
                        <p class="text-sm text-[#4a4b44]">Estamos aquí para escucharte.</p>
                        <form class="space-y-3">
                            <input class="w-full border border-[#d8d4c8] bg-white px-3 py-2 text-sm text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="nombre" name="nombre" type="text" placeholder="Nombre completo" required>
                            <input class="w-full border border-[#d8d4c8] bg-white px-3 py-2 text-sm text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="email" name="email" type="email" placeholder="Correo electrónico" required>
                            <input class="w-full border border-[#d8d4c8] bg-white px-3 py-2 text-sm text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="telefono" name="telefono" type="tel" placeholder="Teléfono">
                            <textarea class="w-full border border-[#d8d4c8] bg-white px-3 py-2 text-sm text-[#3f3f39] placeholder:text-[#8a8c84] focus:outline-none focus:border-[#58683d]" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu consulta" required></textarea>
                            <button type="submit" class="w-full bg-[#596636] text-white text-sm font-semibold py-2.5 px-4 hover:bg-[#4e5a2f] transition">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

  

 
