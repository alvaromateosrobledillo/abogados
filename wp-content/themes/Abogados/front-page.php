<?php get_header();
?>
<main class="flex flex-col gap-0">
    <section id="hero" class="hero-mbi">
        <div class="hero-mbi__content max-w-screen-2xl mx-auto px-6 sm:px-8 lg:px-12">
            <p class="hero-mbi__eyebrow">Despacho boutique de abogados</p>

            <div class="hero-mbi__heading">
                <h1 class="hero-mbi__title">La experiencia que orienta.</h1>
                <h2 class="hero-mbi__subtitle">El criterio que inspira confianza.</h2>
            </div>

            <p class="hero-mbi__text">
                Un despacho boutique especializado en Derecho Procesal, Inmobiliario y Urbanismo.
                Tres socios, una visión compartida.
            </p>

            <div class="hero-mbi__actions">
                <a class="hero-mbi__btn hero-mbi__btn--solid" href="#quienes-somos">Descubre MBI</a>
                <a class="hero-mbi__btn hero-mbi__btn--ghost" href="#servicios">Nuestros Servicios</a>
            </div>
        </div>

        <div class="hero-mbi__scroll">
            <span>Descubrir</span>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                <path d="M2.25 5.25L7 10.25L11.75 5.25" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </section>
    <section id="quienes-somos" class="bg-white">
        <!-- CABECERA SUPERIOR -->
        <div class="relative z-20 max-w-[880px] mx-auto px-6 pt-16 pb-20 text-center space-y-3">
            <p class="uppercase tracking-[0.24em] text-[10px] sm:text-[11px] font-semibold text-[#6d6c63]">
                Quiénes somos
            </p>

            <h2 class="font-serif text-[27px] sm:text-[30px] lg:text-[32px] leading-[1.25] font-semibold text-slate-900">
                Tres trayectorias.
                <span class="text-[#58683d] italic font-semibold">
                    Una misma forma de entender el Derecho.
                </span>
            </h2>

            <span class="inline-block w-12 h-[2px] bg-[#b6b5a6]"></span>

            <p class="max-w-3xl mx-auto text-[#4f5047] text-[14px] sm:text-[15px] leading-relaxed">
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
    <section id="equipo" class="py-16 lg:py-20 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            <div class="text-center space-y-3">
                <span class="inline-block w-12 h-px bg-[#6b7650]"></span>
                <p class="uppercase tracking-[0.24em] text-[10px] font-semibold text-[#6b7650]">Nuestro equipo de expertos</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="bg-white border border-[#e2dfd5] rounded-lg p-5 sm:p-6 shadow-[0_14px_38px_rgba(0,0,0,0.08)] text-center space-y-3">
                    <div class="w-20 h-20 rounded-full overflow-hidden mx-auto bg-[#e5e3db]">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=400&q=80" alt="Retrato de Fernando Marín Riaño">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base sm:text-lg font-semibold text-slate-900">Fernando Marín Riaño</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-snug">Derecho Inmobiliario, Urbanismo y Contencioso Administrativo</p>
                    </div>
                </div>

                <div class="bg-white border border-[#e2dfd5] rounded-lg p-5 sm:p-6 shadow-[0_14px_38px_rgba(0,0,0,0.08)] text-center space-y-3">
                    <div class="w-20 h-20 rounded-full overflow-hidden mx-auto bg-[#e5e3db]">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=400&q=80" alt="Retrato de Enrique Besada">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base sm:text-lg font-semibold text-slate-900">Enrique Besada</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-snug">Litigación Civil e Inmobiliario</p>
                    </div>
                </div>

                <div class="bg-white border border-[#e2dfd5] rounded-lg p-5 sm:p-6 shadow-[0_14px_38px_rgba(0,0,0,0.08)] text-center space-y-3">
                    <div class="w-20 h-20 rounded-full overflow-hidden mx-auto bg-[#e5e3db]">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=400&q=80" alt="Retrato de Mónica Iglesias Sánchez">
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base sm:text-lg font-semibold text-slate-900">Mónica Iglesias Sánchez</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-snug">Derecho Procesal y Arbitraje</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="servicios" class="py-20 lg:py-24 bg-[#11110f] text-[#e8e8e1]">
        <div class="max-w-6xl mx-auto px-5 sm:px-10">
            <div class="text-center space-y-4">
                <p class="uppercase tracking-[0.32em] text-[11px] font-semibold text-[#7b7a72]">Servicios</p>
                <h2 class="text-3xl sm:text-[34px] leading-[1.35] font-semibold text-white">
                    Soluciones jurídicas sólidas, <span class="text-[#808e60] italic">ágiles</span> y <span class="text-[#808e60] italic">personalizadas</span>.
                </h2>
                <p class="max-w-3xl mx-auto text-[15px] text-[#c6c5ba] leading-relaxed">
                    En MBI Abogados ofrecemos asesoramiento jurídico con visión estratégica, claridad constante y dedicación personal.
                    Lo esencial bien hecho. Lo complejo bien pensado.
                </p>
                <span class="block w-12 h-[2px] bg-[#6a6b5f] mx-auto"></span>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <article class="rounded-[18px] bg-[#181816] border border-[#252520] px-6 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.45)] transition hover:border-[#35352f] hover:shadow-[0_20px_48px_rgba(0,0,0,0.52)]">
                    <div class="flex items-start gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#2f2f28] bg-[#20211c] text-[#7d8b62]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 21h14M5 10h14M9 6h6m-7 4V5.5a1.5 1.5 0 0 1 1.5-1.5h4a1.5 1.5 0 0 1 1.5 1.5V10m-8 0v11m5-11v11" />
                            </svg>
                        </span>
                        <h3 class="text-[16px] font-semibold text-white leading-tight">Derecho Inmobiliario y Urbanismo</h3>
                    </div>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Planeamiento, gestión urbanística, licencias, convenios, expropiaciones, reparcelaciones.</p>
                    <p class="mt-3 text-[12px] italic text-[#7e8e64] font-medium">Interpretamos el territorio. Acompañamos a quienes lo transforman.</p>
                </article>

                <article class="rounded-[18px] bg-[#181816] border border-[#252520] px-6 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.45)] transition hover:border-[#35352f] hover:shadow-[0_20px_48px_rgba(0,0,0,0.52)]">
                    <div class="flex items-start gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#2f2f28] bg-[#20211c] text-[#7d8b62]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 10h12M5 21h14M7.5 5 12 3l4.5 2M9 10v3.5a3 3 0 0 0 6 0V10" />
                            </svg>
                        </span>
                        <h3 class="text-[16px] font-semibold text-white leading-tight">Procesal y Arbitraje</h3>
                    </div>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Defensa en litigios complejos, contencioso-administrativo, civil y mercantil.</p>
                    <p class="mt-3 text-[12px] italic text-[#7e8e64] font-medium">Anticipamos riesgos. Defendemos intereses. Resolvemos con criterio.</p>
                </article>

                <article class="rounded-[18px] bg-[#181816] border border-[#252520] px-6 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.45)] transition hover:border-[#35352f] hover:shadow-[0_20px_48px_rgba(0,0,0,0.52)]">
                    <div class="flex items-start gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#2f2f28] bg-[#20211c] text-[#7d8b62]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 10V7a5 5 0 0 1 10 0v3m-8 6h6m-9-9h12v11H6z" />
                            </svg>
                        </span>
                        <h3 class="text-[16px] font-semibold text-white leading-tight">Mercantil y Societario</h3>
                    </div>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Asesoramiento integral en operaciones corporativas y transacciones.</p>
                    <p class="mt-3 text-[12px] italic text-[#7e8e64] font-medium">Estrategia jurídica para el crecimiento empresarial.</p>
                </article>

                <article class="rounded-[18px] bg-[#181816] border border-[#252520] px-6 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.45)] transition hover:border-[#35352f] hover:shadow-[0_20px_48px_rgba(0,0,0,0.52)]">
                    <div class="flex items-start gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#2f2f28] bg-[#20211c] text-[#7d8b62]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 17a4 4 0 1 0-4-4m4 4a4 4 0 0 0 4-4m-4 4v3m-4-7a4 4 0 0 1 4-4m0 0V4m0 0L7 6m5-2 5 2" />
                            </svg>
                        </span>
                        <h3 class="text-[16px] font-semibold text-white leading-tight">Penal y Compliance</h3>
                    </div>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Defensa penal de empresas y directivos. Programas de cumplimiento normativo.</p>
                    <p class="mt-3 text-[12px] italic text-[#7e8e64] font-medium">Prevención y protección con rigor técnico.</p>
                </article>

                <article class="rounded-[18px] bg-[#181816] border border-[#252520] px-6 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.45)] transition hover:border-[#35352f] hover:shadow-[0_20px_48px_rgba(0,0,0,0.52)]">
                    <div class="flex items-start gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#2f2f28] bg-[#20211c] text-[#7d8b62]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 13a6 6 0 0 1 12 0v5.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 6 18.5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.5s1 .5 3 .5 3-.5 3-.5" />
                            </svg>
                        </span>
                        <h3 class="text-[16px] font-semibold text-white leading-tight">Sucesiones y Familia</h3>
                    </div>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Planificación patrimonial, herencias, régimen matrimonial y derecho de familia.</p>
                    <p class="mt-3 text-[12px] italic text-[#7e8e64] font-medium">Acompañamiento cercano en momentos clave.</p>
                </article>

                <article class="rounded-[18px] bg-[#181816] border border-[#252520] px-6 py-7 shadow-[0_18px_44px_rgba(0,0,0,0.45)] transition hover:border-[#35352f] hover:shadow-[0_20px_48px_rgba(0,0,0,0.52)]">
                    <div class="flex items-start gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#2f2f28] bg-[#20211c] text-[#7d8b62]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6a6 6 0 0 0-6 6c0 1.5.56 2.87 1.48 3.9L6 20l4.2-1.28A6 6 0 1 0 12 6Z" />
                            </svg>
                        </span>
                        <h3 class="text-[16px] font-semibold text-white leading-tight">Asesoramiento Estratégico</h3>
                    </div>
                    <p class="mt-3 text-[13px] leading-relaxed text-[#cdccbf]">Acompañamiento jurídico preventivo, visión a largo plazo, claridad en la toma de decisiones.</p>
                    <p class="mt-3 text-[12px] italic text-[#7e8e64] font-medium">Pensamos como abogados. Actuamos como aliados.</p>
                </article>
            </div>

            <div class="mt-16">
                <div class="relative overflow-hidden rounded-[18px] border border-white/12 bg-[#161613] px-6 sm:px-12 py-12 text-center shadow-[0_26px_60px_rgba(0,0,0,0.55)]">
                    <div class="absolute inset-0 pointer-events-none opacity-60" aria-hidden="true">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#222219]/60 via-transparent to-[#1a1a15]/70"></div>
                        <div class="absolute -left-32 -bottom-20 h-64 w-64 rounded-full bg-[#647349]/15 blur-3xl"></div>
                        <div class="absolute -right-24 -top-20 h-52 w-52 rounded-full bg-[#4c5736]/12 blur-3xl"></div>
                    </div>

                    <div class="relative space-y-4">
                        <h3 class="text-[24px] sm:text-[28px] leading-tight font-semibold text-white">
                            Transformamos el Derecho desde la <span class="italic text-[#8fa06b]">cercanía, el rigor y la visión estratégica.</span>
                        </h3>
                        <p class="text-[14px] sm:text-[15px] leading-relaxed text-[#dcdcd2] max-w-3xl mx-auto">
                            En MBI Abogados ofrecemos asesoramiento jurídico con visión estratégica, claridad constante y dedicación personal. Lo esencial bien hecho. Lo complejo bien pensado.
                        </p>
                        <div class="pt-2">
                            <a class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-[#5f6d44] text-white text-sm font-semibold shadow-[0_16px_36px_rgba(0,0,0,0.38)] hover:bg-[#6c7a4f] transition" href="#contacto">
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
    <section id="propuesta" class="relative isolate overflow-hidden bg-[#0c0c0b] py-16 lg:py-20">
        <div class="absolute inset-0">
            <img class="h-full w-full object-cover object-center opacity-70" src="https://images.unsplash.com/photo-1460672985063-6764ac8b9c74?auto=format&fit=crop&w=1600&q=80" alt="Arquitectura en perspectiva">
            <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/55 to-[#0c0c0b]/92"></div>
        </div>
        <div class="relative max-w-6xl mx-auto px-5 sm:px-10">
            <div class="text-center space-y-2">
                <p class="uppercase tracking-[0.32em] text-[10px] font-semibold text-[#cfcfc7]">Propuesta de valor</p>
            </div>
            <div class="mt-10 grid gap-6 lg:grid-cols-12">
                <article class="lg:col-span-4 bg-[#dfe2da] border border-[#cfd2c8] shadow-[0_14px_36px_rgba(0,0,0,0.32)] px-6 py-6 rounded-[12px]">
                    <span class="grid place-items-center h-9 w-9 rounded-sm bg-[#5e6a3c] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 12.5 11 15l4.5-5m4-4.5h-15A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h15a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 19.5 5Z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-[#2f312c]">Trato Directo Con Socios</h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#3f413a]">Acceso directo a nuestros socios para una atención personalizada y de máximo nivel.</p>
                </article>

                <article class="lg:col-span-4 bg-[#dfe2da] border border-[#cfd2c8] shadow-[0_14px_36px_rgba(0,0,0,0.32)] px-6 py-6 rounded-[12px]">
                    <span class="grid place-items-center h-9 w-9 rounded-sm bg-[#5e6a3c] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.5c4.418 0 8-2.91 8-6.5S16.418 5.5 12 5.5 4 8.41 4 12s3.582 6.5 8 6.5Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 10.5-1.5 2.25h2.5l-1.5 2.25" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-[#2f312c]">Lenguaje Claro Y Accesible</h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#3f413a]">Comunicación transparente sin tecnicismos innecesarios para que entiendas cada paso.</p>
                </article>

                <article class="lg:col-span-4 bg-[#dfe2da] border border-[#cfd2c8] shadow-[0_14px_36px_rgba(0,0,0,0.32)] px-6 py-6 rounded-[12px]">
                    <span class="grid place-items-center h-9 w-9 rounded-sm bg-[#5e6a3c] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m12 4.5 7 4-7 4-7-4 7-4Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12.5 12 17l7-4.5" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 16.5 12 21l7-4.5" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-[#2f312c]">Alta Especialización</h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#3f413a]">Expertise profundo en las áreas del derecho para resultados excepcionales.</p>
                </article>

                <article class="lg:col-span-6 bg-[#dfe2da] border border-[#cfd2c8] shadow-[0_14px_36px_rgba(0,0,0,0.32)] px-6 py-6 rounded-[12px]">
                    <span class="grid place-items-center h-9 w-9 rounded-sm bg-[#5e6a3c] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l3 1.5m5-1.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-[#2f312c]">Compromiso Firme Con Cada Cliente</h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#3f413a]">Tu éxito es nuestro objetivo, trabajamos con dedicación absoluta en cada caso.</p>
                </article>

                <article class="lg:col-span-6 bg-[#dfe2da] border border-[#cfd2c8] shadow-[0_14px_36px_rgba(0,0,0,0.32)] px-6 py-6 rounded-[12px]">
                    <span class="grid place-items-center h-9 w-9 rounded-sm bg-[#5e6a3c] text-[#f2f2ec]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v6h6" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5 4 7.5l8 4 8-4-8-4Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6 13 6 3 6-3" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-[#2f312c]">Agilidad Y Estrategia</h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#3f413a]">Respuestas rápidas con soluciones estratégicas adaptadas a tus necesidades.</p>
                </article>
            </div>
        </div>
    </section>
    <section id="contacto" class="py-20 lg:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[1.05fr_0.95fr] gap-10 lg:gap-14 items-start">
            <div class="space-y-4">
                <p class="uppercase tracking-[0.28em] text-[11px] font-semibold text-brand">Contacto</p>
                <h2 class="font-serif text-3xl sm:text-4xl leading-tight">Estamos cerca.</h2>
                <p class="text-base text-slate-700">Cada cliente importa. Cada caso merece una respuesta a medida.</p>
                <ul class="space-y-2 text-base text-slate-800">
                    <li><strong>Dirección:</strong> Calderón de la Barca, 3. 28046 Madrid</li>
                    <li><strong>Teléfono:</strong> <a class="text-brand font-semibold hover:underline" href="tel:+34912345678">+34 912 34 56 78</a></li>
                    <li><strong>Email:</strong> <a class="text-brand font-semibold hover:underline" href="mailto:info@mbabogados.com">info@mbabogados.com</a></li>
                </ul>
                <div class="rounded-2xl overflow-hidden shadow-[0_18px_40px_rgba(0,0,0,0.08)] border border-[#e7e4dc]">
                    <iframe
                        title="Mapa MB Abogados"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.9080892030086!2d-3.694530084362142!3d40.4329789793634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e2f27484c9%3A0x7a10b98ff7d9d89c!2sC.%20de%20Calder%C3%B3n%20de%20la%20Barca%2C%203%2C%2028042%20Madrid!5e0!3m2!1ses!2ses!4v1707230400000!5m2!1ses!2ses"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-[260px] border-0"></iframe>
                </div>
            </div>

            <div class="bg-[#f8f6ef] border border-[#ded8c9] rounded-2xl p-6 shadow-[0_18px_40px_rgba(0,0,0,0.08)]">
                <h3 class="text-lg font-semibold text-slate-900 mb-1">Escríbenos</h3>
                <p class="text-sm text-slate-700 mb-4">Estamos aquí para escucharte.</p>
                <form class="space-y-3">
                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="nombre">Nombre completo</label>
                        <input class="w-full rounded-lg border !border-[#d8d4c8] !bg-[#f7f5ef] px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-500 focus:!outline-none focus:!border-brand focus:!ring-2 focus:!ring-brand/20 transition" id="nombre" name="nombre" type="text" placeholder="Tu nombre" required>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="email">Correo electrónico</label>
                        <input class="w-full rounded-lg border !border-[#d8d4c8] !bg-[#f7f5ef] px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-500 focus:!outline-none focus:!border-brand focus:!ring-2 focus:!ring-brand/20 transition" id="email" name="email" type="email" placeholder="email@ejemplo.com" required>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="telefono">Teléfono</label>
                        <input class="w-full rounded-lg border !border-[#d8d4c8] !bg-[#f7f5ef] px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-500 focus:!outline-none focus:!border-brand focus:!ring-2 focus:!ring-brand/20 transition" id="telefono" name="telefono" type="tel" placeholder="+34 000 000 000">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="mensaje">Mensaje</label>
                        <textarea class="w-full rounded-lg border !border-[#d8d4c8] !bg-[#f7f5ef] px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-500 focus:!outline-none focus:!border-brand focus:!ring-2 focus:!ring-brand/20 transition" id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos cómo podemos ayudarte" required></textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-full bg-[#485230] text-white text-[15px] font-semibold tracking-wide shadow-[0_12px_30px_rgba(83,95,53,0.38)] hover:bg-[#3f472a] hover:shadow-[0_16px_38px_rgba(83,95,53,0.45)] hover:-translate-y-[1px] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#6d7a4a] transition duration-200">
                        Enviar mensaje
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-5-5m5 5-5 5" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

  

 
