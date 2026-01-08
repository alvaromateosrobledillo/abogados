<footer
    data-section="footer"
    class="bg-[#0f0f0f] text-[#f1f1ea]">

    <div class="page-shell py-14">

        <div class="grid gap-10 lg:grid-cols-[1.7fr_0.7fr_0.7fr]">

            <!-- BLOQUE LOGO -->
            <div
                data-footer-col
                class="space-y-6 opacity-0 translate-y-8 transition-all duration-700">

                <img
                    class="block h-20 w-auto"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/MBI%20Abogados.png'); ?>"
                    alt="MBI Abogados"
                    loading="lazy">

                <p class="max-w-md text-[18px] text-[#d4d4c9]">
                    La experiencia que orienta. El criterio que inspira confianza.
                </p>

                <a
                    class="inline-flex items-center justify-center w-10 h-10
                           border border-[#6a754f] text-[#d4d4c9]
                           hover:border-[#8a9472] transition"
                    href="#inicio"
                    aria-label="LinkedIn">
                    in
                </a>
            </div>

            <!-- ENLACES -->
            <div
                data-footer-col
                class="opacity-0 translate-y-8 transition-all duration-700">

                <h4 class="text-[12px] uppercase tracking-[0.24em] text-white mb-4">
                    Enlaces
                </h4>

                <ul class="space-y-3 text-[14px] text-[#989a9c]">
                    <li><a class="hover:text-white transition" href="#inicio">Inicio</a></li>
                    <li><a class="hover:text-white transition" href="#quienes-somos">Quiénes Somos</a></li>
                    <li><a class="hover:text-white transition" href="#servicios">Servicios</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url(home_url('/filosofia')); ?>">Filosofía</a></li>
                    <li><a class="hover:text-white transition" href="#contacto">Contacto</a></li>
                </ul>
            </div>

            <!-- CONTACTO -->
            <div
                data-footer-col
                class="opacity-0 translate-y-8 transition-all duration-700">

                <h4 class="text-[12px] uppercase tracking-[0.24em] text-white mb-4">
                    Contacto
                </h4>

                <ul class="space-y-3 text-[14px] text-[#989a9c]">
                    <li>Calle Recoletos 19</li>
                    <li>28001 Madrid, España</li>
                    <li>
                        <a class="hover:text-white transition" href="tel:+34912345678">
                            +34 91 234 56 78
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-white transition" href="mailto:info@mbiabogados.com">
                            info@mbiabogados.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- BARRA INFERIOR -->
        <div
            data-footer-bottom
            class="mt-10 border-t border-white/10 pt-5
                   flex flex-col sm:flex-row
                   items-center justify-between gap-4
                   text-[12px] text-[#9da091]
                   opacity-0 translate-y-4 transition-all duration-700">

            <div class="flex flex-wrap items-center gap-6">
                <a class="hover:text-white transition" href="#inicio">Aviso Legal</a>
                <a class="hover:text-white transition" href="#inicio">Política de Privacidad</a>
                <a class="hover:text-white transition" href="#inicio">Política de Cookies</a>
            </div>

            <span>© 2025 MBI Abogados. Todos los derechos reservados.</span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
