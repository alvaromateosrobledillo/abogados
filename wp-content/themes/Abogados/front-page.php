<?php
/*
* Template Name: Home
*/
get_header();
?>

<main class="flex flex-col gap-0">
    <section id="hero" class="relative isolate flex items-center min-h-[80vh] overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(115deg, rgba(15,16,17,0.85) 35%, rgba(15,16,17,0.35)), url('https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=1600&q=80');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/55 to-black/80"></div>
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 relative py-24 lg:py-32 text-white space-y-8">
            <p class="uppercase tracking-[0.32em] text-[11px] font-semibold">Despacho boutique de abogados</p>
            <div class="space-y-4">
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight">
                    La experiencia que orienta.
                    <span class="text-brand-soft block sm:inline">El criterio que inspira confianza.</span>
                </h1>
                <p class="max-w-2xl text-lg text-[#dcdacb]">
                    Un despacho boutique especializado en Derecho Patrimonial, Inmobiliario y Mercantil.
                    Trato directo, visión contemporánea.
                </p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a class="px-5 py-2.5 rounded-full bg-brand text-white text-sm font-semibold shadow-[0_12px_30px_rgba(83,95,53,0.35)] hover:bg-[#434c2b] transition" href="#servicios">Descúbrelo</a>
                <a class="px-5 py-2.5 rounded-full border border-white/40 text-sm font-semibold text-white hover:bg-white/10 transition" href="#contacto">Reunión privada</a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 w-full">
                <div class="backdrop-blur bg-white/5 border border-white/10 rounded-xl p-4">
                    <span class="text-base font-semibold text-[#f0efea]">+30</span>
                    <p class="text-sm text-[#dcdacb] mt-1">Años de experiencia combinada</p>
                </div>
                <div class="backdrop-blur bg-white/5 border border-white/10 rounded-xl p-4">
                    <span class="text-base font-semibold text-[#f0efea]">1:1</span>
                    <p class="text-sm text-[#dcdacb] mt-1">Atención directa y cercana</p>
                </div>
                <div class="backdrop-blur bg-white/5 border border-white/10 rounded-xl p-4">
                    <span class="text-base font-semibold text-[#f0efea]">360º</span>
                    <p class="text-sm text-[#dcdacb] mt-1">Visión estratégica transversal</p>
                </div>
                <div class="backdrop-blur bg-white/5 border border-white/10 rounded-xl p-4">
                    <span class="text-base font-semibold text-[#f0efea]">Equipo</span>
                    <p class="text-sm text-[#dcdacb] mt-1">Multidisciplinar y ágil</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white border-b border-[#e7e4dc]">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center text-sm text-slate-700">
            <div class="space-y-2">
                <span class="inline-block bg-[#e9eadf] text-slate-800 px-3 py-1 rounded-full text-[12px] font-semibold">+ Confianza</span>
                <p>Anticipamos tus riesgos para que avances con seguridad.</p>
            </div>
            <div class="space-y-2">
                <span class="inline-block bg-[#e9eadf] text-slate-800 px-3 py-1 rounded-full text-[12px] font-semibold">+ Rigor</span>
                <p>Metodología precisa y soluciones claras.</p>
            </div>
            <div class="space-y-2">
                <span class="inline-block bg-[#e9eadf] text-slate-800 px-3 py-1 rounded-full text-[12px] font-semibold">+ Criterio</span>
                <p>Recomendaciones accionables y adaptadas a ti.</p>
            </div>
        </div>
    </section>

    <section id="quienes-somos" class="py-20 lg:py-24 bg-[#f7f6f2]">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <p class="uppercase tracking-[0.28em] text-[11px] font-semibold text-brand">Quiénes somos</p>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl leading-tight">
                Tres trayectorias. <em class="not-italic text-brand">Una misma forma de entender el Derecho.</em>
            </h2>
            <p class="max-w-3xl text-slate-700 text-base">
                MB Abogados nace de la visión valiente de tres profesionales con amplia experiencia en grandes firmas
                que decidieron construir un despacho privado, más ágil, más humano y más cercano.
            </p>

            <div class="grid lg:grid-cols-[1.2fr_0.9fr] gap-10 lg:gap-14 items-start">
                <div class="space-y-4">
                    <span class="inline-block px-4 py-2 rounded-full bg-[#e8eadc] text-slate-900 font-semibold text-sm">Cercanía que entiende. Rigor que construye.</span>
                    <p class="text-slate-700 text-base">
                        Asesoramiento legal a medida, con el máximo estándar de atención y escucha. En MB diseñamos
                        estrategias que equilibran protección y crecimiento. Cada caso recibe un enfoque propio.
                    </p>
                    <p class="text-slate-700 text-base">
                        Apostamos por la tecnología, la eficiencia y la transparencia. Tu negocio se beneficia de
                        respuestas ágiles y bien sustentadas. Porque cada detalle importa.
                    </p>
                </div>
                <div class="bg-[#f3f4ec] border border-[#e7e4dc] rounded-2xl p-6 shadow-[0_18px_40px_rgba(0,0,0,0.06)] space-y-3">
                    <p class="text-lg font-semibold text-slate-900">“Desde la experiencia, te acompañamos con cercanía y criterio en cada decisión”.</p>
                    <span class="text-sm font-semibold text-slate-500">MB Abogados</span>
                </div>
            </div>
        </div>
    </section>

    <section id="equipo" class="py-20 lg:py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="uppercase tracking-[0.28em] text-[11px] font-semibold text-brand">Nuestro equipo</p>
            <h2 class="font-serif text-3xl sm:text-4xl leading-tight mt-3">Personas que impulsan tu tranquilidad.</h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                <div class="bg-white border border-[#e7e4dc] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.05)] flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-black text-[#f6f6f0] grid place-items-center font-semibold tracking-[0.08em]">FM</div>
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-1">Fernando Mejía Rubio</h3>
                        <p class="text-sm text-slate-600">Derecho Inmobiliario, Urbanismo y Compliance & Administrativo</p>
                    </div>
                </div>

                <div class="bg-white border border-[#e7e4dc] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.05)] flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-black text-[#f6f6f0] grid place-items-center font-semibold tracking-[0.08em]">EB</div>
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-1">Enrique Boada</h3>
                        <p class="text-sm text-slate-600">Litigación Civil y Derecho Mercantil</p>
                    </div>
                </div>

                <div class="bg-white border border-[#e7e4dc] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.05)] flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-black text-[#f6f6f0] grid place-items-center font-semibold tracking-[0.08em]">MI</div>
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-1">Mónica Iglesias Sánchez</h3>
                        <p class="text-sm text-slate-600">Derecho Procesal y Arbitraje</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="py-20 lg:py-24 bg-[#0f0f0f] text-[#f6f6f0]">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="uppercase tracking-[0.28em] text-[11px] font-semibold text-brand-soft">Qué hacemos</p>
            <h2 class="font-serif text-3xl sm:text-4xl leading-tight mt-3">
                Soluciones jurídicas sólidas, <span class="text-brand-soft">ágiles</span> y <span class="text-brand-soft">personalizadas</span>.
            </h2>
            <p class="max-w-3xl text-sm sm:text-base text-[#d9d8ce] mt-4">
                En MB Abogados combinamos asesoramiento y acción con visión estratégica. Detrás de cada iniciativa,
                un equipo que entiende tu negocio y lo cuida.
            </p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
                <div class="bg-[#161616] border border-[#222] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.35)] space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-white/10 text-[#d9d8ce] grid place-items-center font-semibold">DI</div>
                    <h3 class="text-lg font-semibold">Derecho Inmobiliario y Urbanismo</h3>
                    <p class="text-sm text-[#d9d8ce]">Due diligence, compraventas, arrendamientos y licencias. Tramitación ágil y documentación clara.</p>
                </div>

                <div class="bg-[#161616] border border-[#222] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.35)] space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-white/10 text-[#d9d8ce] grid place-items-center font-semibold">PP</div>
                    <h3 class="text-lg font-semibold">Private y Patrimony</h3>
                    <p class="text-sm text-[#d9d8ce]">Planificación patrimonial, protocolos familiares, gobierno corporativo y sucesiones complejas.</p>
                </div>

                <div class="bg-[#161616] border border-[#222] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.35)] space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-white/10 text-[#d9d8ce] grid place-items-center font-semibold">MS</div>
                    <h3 class="text-lg font-semibold">Mercantil y Societario</h3>
                    <p class="text-sm text-[#d9d8ce]">Constitución de sociedades, pactos de socios, operaciones corporativas y asesoramiento continuo.</p>
                </div>

                <div class="bg-[#161616] border border-[#222] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.35)] space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-white/10 text-[#d9d8ce] grid place-items-center font-semibold">FC</div>
                    <h3 class="text-lg font-semibold">Family y Compliance</h3>
                    <p class="text-sm text-[#d9d8ce]">Defensa del patrimonio familiar, privacidad y cumplimiento normativo diseñado a medida.</p>
                </div>

                <div class="bg-[#161616] border border-[#222] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.35)] space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-white/10 text-[#d9d8ce] grid place-items-center font-semibold">SF</div>
                    <h3 class="text-lg font-semibold">Sucesiones y Familia</h3>
                    <p class="text-sm text-[#d9d8ce]">Herencias internacionales, planificación sucesoria y prevención de conflictos.</p>
                </div>

                <div class="bg-[#161616] border border-[#222] rounded-2xl p-5 shadow-[0_18px_40px_rgba(0,0,0,0.35)] space-y-2">
                    <div class="w-10 h-10 rounded-xl bg-white/10 text-[#d9d8ce] grid place-items-center font-semibold">AE</div>
                    <h3 class="text-lg font-semibold">Asesoramiento Estratégico</h3>
                    <p class="text-sm text-[#d9d8ce]">Acompañamos en decisiones clave: inversión, expansión y resolución alternativa de conflictos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-24 bg-[#f3f4ec]">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[1.05fr_0.95fr] gap-10 lg:gap-14 items-start">
            <div class="space-y-4">
                <p id="filosofia" class="uppercase tracking-[0.28em] text-[11px] font-semibold text-brand">Filosofía</p>
                <h2 class="font-serif text-3xl sm:text-4xl leading-tight">
                    Criterio que escucha. <em class="not-italic text-brand">Propósito que transforma.</em>
                </h2>
                <p class="text-base text-slate-700">
                    Analizamos cada reto con precisión, para responder con soluciones rápidas y sostenidas. Trabajamos
                    codo con codo para que tengas claridad y seguridad en cada paso.
                </p>
                <p class="text-base text-slate-700">
                    Nuestro enfoque es humano y estratégico. Ponemos la tecnología al servicio de tu tranquilidad y
                    cuidamos la confidencialidad en todo momento.
                </p>
            </div>

            <div class="bg-white border border-[#e7e4dc] rounded-2xl p-6 shadow-[0_18px_40px_rgba(0,0,0,0.06)]">
                <h3 class="text-lg font-semibold text-slate-900 mb-3">Nuestra propuesta de valor</h3>
                <ul class="space-y-2 text-sm text-slate-800">
                    <li class="flex gap-2 items-start"><span class="text-brand mt-1.5 text-xs">●</span>Trato directo sin rodeos</li>
                    <li class="flex gap-2 items-start"><span class="text-brand mt-1.5 text-xs">●</span>Lenguaje claro y accionable</li>
                    <li class="flex gap-2 items-start"><span class="text-brand mt-1.5 text-xs">●</span>Agilidad y proactividad</li>
                    <li class="flex gap-2 items-start"><span class="text-brand mt-1.5 text-xs">●</span>Conocimiento técnico con visión de negocio</li>
                    <li class="flex gap-2 items-start"><span class="text-brand mt-1.5 text-xs">●</span>Soluciones creadas ad hoc</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contacto" class="py-20 lg:py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[1.05fr_0.95fr] gap-10 lg:gap-14">
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

            <div class="bg-white border border-[#e7e4dc] rounded-2xl p-6 shadow-[0_18px_40px_rgba(0,0,0,0.05)]">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Escríbenos</h3>
                <form class="space-y-3">
                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="nombre">Nombre completo</label>
                        <input class="w-full rounded-lg border border-[#e7e4dc] bg-white px-3 py-2 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition" id="nombre" name="nombre" type="text" placeholder="Tu nombre" required>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="email">Correo electrónico</label>
                        <input class="w-full rounded-lg border border-[#e7e4dc] bg-white px-3 py-2 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition" id="email" name="email" type="email" placeholder="email@ejemplo.com" required>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="telefono">Teléfono</label>
                        <input class="w-full rounded-lg border border-[#e7e4dc] bg-white px-3 py-2 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition" id="telefono" name="telefono" type="tel" placeholder="+34 000 000 000">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-semibold text-slate-800" for="mensaje">Mensaje</label>
                        <textarea class="w-full rounded-lg border border-[#e7e4dc] bg-white px-3 py-2 text-sm focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition" id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos cómo podemos ayudarte" required></textarea>
                    </div>

                    <button type="submit" class="w-full px-4 py-3 rounded-full bg-brand text-white text-sm font-semibold shadow-[0_10px_28px_rgba(83,95,53,0.35)] hover:bg-[#434c2b] transition">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
