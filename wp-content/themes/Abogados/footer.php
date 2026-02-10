<?php
$legal_page = get_page_by_path('aviso-legal');
$privacy_page = get_page_by_path('politica-de-privacidad');
$cookies_page = get_page_by_path('politica-de-cookies');

$legal_url = $legal_page ? get_permalink($legal_page) : '#';
$privacy_url = $privacy_page ? get_permalink($privacy_page) : '#';
$cookies_url = $cookies_page ? get_permalink($cookies_page) : '#';
?>

<footer
    data-section="footer"
    class="bg-[#0f0f0f] text-[#f1f1ea]">

    <div class="page-shell py-14">

        <div class="grid gap-10 sm:grid-cols-[1.7fr_0.7fr_0.7fr]">

            <!-- BLOQUE LOGO -->
            <div
                data-footer-col
                class="space-y-6 text-center sm:text-left
                       opacity-0 translate-y-8 transition-all duration-700">

                <img
                    class="mx-auto sm:mx-0 h-20 w-auto"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/MBI%20Abogados.png'); ?>"
                    alt="<?php echo esc_attr(nd_translate('MBI Abogados', 'MBI Abogados')); ?>"
                    loading="lazy">

                <p class="text-[clamp(13px,1.5vw,20px)] leading-[1.25] text-[#d4d4c9]">
                    <?php echo esc_html(nd_translate(
                        'La experiencia que orienta. El criterio que inspira confianza.',
                        'Experience that guides. The judgment that inspires trust.'
                    )); ?>
                </p>

                <div class="flex items-center justify-center sm:justify-start gap-4">
                    <a
                        class="inline-flex items-center justify-center
                               w-10 h-10 border border-[#6a754f] text-white
                               hover:border-[#8a9472] transition"
                        href="https://www.linkedin.com/company/mbi-abogados/"
                        aria-label="LinkedIn">
                        in
                    </a>
                    <button type="button"
                            data-modal="work-modal"
                            class="inline-flex items-center justify-center
                                   border border-[#6a754f] px-4 py-2
                                   text-[clamp(11px,1.1vw,15px)]
                                   uppercase tracking-[0.2em]
                                   text-white hover:border-[#8a9472]
                                   hover:bg-white/10 transition">
                        <?php echo esc_html(nd_translate('Trabaja con nosotros', 'Work with us')); ?>
                    </button>
                </div>
            </div>

            <!-- ENLACES -->
            <div
                data-footer-col
                class="text-center sm:text-left
                       opacity-0 translate-y-8 transition-all duration-700">

                <h4 class="text-[clamp(14px,1.4vw,18px)]
                           uppercase tracking-[0.2em] leading-[1.4]
                           text-white mb-4">
                    <?php echo esc_html(nd_translate('Enlaces', 'Links')); ?>
                </h4>

                <!-- 2 COLUMNAS SOLO EN MÓVIL -->
                <ul class="grid grid-cols-2 sm:grid-cols-1
                           gap-x-8 gap-y-3
                           text-[clamp(14px,1.6vw,18px)]
                           leading-[1.2] text-[#989a9c]">

                    <li>
                        <a class="hover:text-white transition-colors duration-300"
                           href="<?php echo esc_url(home_url('/#hero')); ?>">
                            <?php echo esc_html(nd_translate('Inicio', 'Home')); ?>
                        </a>
                    </li>

                    <li>
                        <a class="hover:text-white transition-colors duration-300"
                           href="<?php echo esc_url(home_url('/#quienes-somos')); ?>">
                            <?php echo esc_html(nd_translate('Quiénes Somos', 'About Us')); ?>
                        </a>
                    </li>

                    <li>
                        <a class="hover:text-white transition-colors duration-300"
                           href="<?php echo esc_url(home_url('/#servicios')); ?>">
                            <?php echo esc_html(nd_translate('Servicios', 'Services')); ?>
                        </a>
                    </li>

                    <li>
                        <a class="hover:text-white transition-colors duration-300"
                           href="<?php echo esc_url(home_url('/#contacto')); ?>">
                            <?php echo esc_html(nd_translate('Contacto', 'Contact')); ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- CONTACTO -->
            <div
                data-footer-col
                class="text-center sm:text-left
                       opacity-0 translate-y-8 transition-all duration-700">

                <h4 class="text-[clamp(11px,1.1vw,17px)]
                           uppercase tracking-[0.2em] leading-[1.2]
                           text-white mb-4">
                    <?php echo esc_html(nd_translate('Contacto', 'Contact')); ?>
                </h4>

                <ul class="space-y-3 text-[clamp(13px,1.3vw,18px)]
                           leading-[1.2] text-[#989a9c]">
                    <li><?php echo esc_html(nd_translate('Calle Recoletos 19', 'Calle Recoletos 19')); ?></li>
                    <li><?php echo esc_html(nd_translate('1º planta', '1st floor')); ?></li>
                    <li><?php echo esc_html(nd_translate('28001 Madrid, España', '28001 Madrid, Spain')); ?></li>
                    <li>
                        <a class="hover:text-white transition-colors duration-300"
                           href="tel:+34912345678">
                            +34 91 840 37 79
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-white transition-colors duration-300"
                           href="mailto:info@mbiabogados.com">
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
                   items-center justify-center sm:justify-between
                   gap-4 text-center sm:text-left
                   text-[clamp(11px,1.1vw,17px)]
                   leading-[1.4] text-white
                   opacity-0 translate-y-4 transition-all duration-700">

            <div class="flex flex-wrap justify-center sm:justify-start gap-6">
                <a class="text-white/70 hover:text-white hover:underline underline-offset-4 transition-colors duration-300" href="<?php echo esc_url($legal_url); ?>">
                    <?php echo esc_html(nd_translate('Aviso Legal', 'Legal Notice')); ?>
                </a>
                <a class="text-white/70 hover:text-white hover:underline underline-offset-4 transition-colors duration-300" href="<?php echo esc_url($privacy_url); ?>">
                    <?php echo esc_html(nd_translate('Política de Privacidad', 'Privacy Policy')); ?>
                </a>
                <a class="text-white/70 hover:text-white hover:underline underline-offset-4 transition-colors duration-300" href="<?php echo esc_url($cookies_url); ?>">
                    <?php echo esc_html(nd_translate('Política de Cookies', 'Cookie Policy')); ?>
                </a>
            </div>

            <span>
                <?php echo esc_html(nd_translate(
                    '© ' . date_i18n('Y') . ' MBI Abogados. Todos los derechos reservados.',
                    '© ' . date_i18n('Y') . ' MBI Abogados. All rights reserved.'
                )); ?>
            </span>
        </div>
    </div>
</footer>

<div id="work-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 px-3 sm:px-6" data-modal-root data-modal-backdrop>
    <div class="relative w-full max-w-3xl max-h-[90vh] overflow-y-auto bg-white p-4 sm:p-6 lg:p-8 rounded-xl shadow-[0_30px_80px_rgba(0,0,0,0.35)]">
        <button class="absolute right-3 top-3 text-[#7a8464] text-xl" data-close>✕</button>
        <div class="space-y-4">
            <div class="space-y-2">
                <h3 class="text-[clamp(20px,2.2vw,34px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#3f3f39]">
                    <?php echo esc_html(nd_translate('Trabaja con nosotros', 'Work with us')); ?>
                </h3>
                <p class="text-[clamp(15px,1.4vw,20px)] leading-[1.25] text-[#4a4b44]">
                    <?php echo esc_html(nd_translate('Envíanos tu candidatura y nos pondremos en contacto contigo.', 'Send us your application and we will get back to you.')); ?>
                </p>
            </div>
            <?php
            $work_form_shortcode = nd_translate(
                '[contact-form-7 id="1ac5a41" title="trabaja"]',
                '[contact-form-7 id="076e25f" title="work"]'
            );
            echo do_shortcode($work_form_shortcode);
            ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>
