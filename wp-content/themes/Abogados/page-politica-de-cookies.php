<?php
/*
Template Name: Politica de Cookies
*/

get_header();
?>

<main class="bg-[#f7f6f2]">
    <section class="page-shell pt-10 sm:pt-12">
        <?php while (have_posts()) : the_post(); ?>
            <div class="space-y-6">
                <h1 class="text-[clamp(26px,2.8vw,48px)] leading-[1.1] tracking-[-0.01em] font-normal text-[#3f3f39]">
                    <?php the_title(); ?>
                </h1>
                <div class="text-[clamp(17px,1.5vw,22px)] leading-[1.25] [&_p]:text-[clamp(17px,1.5vw,22px)] [&_p]:leading-[1.25] [&_p]:mb-6 text-[#3d3f36]">
                    <?php
                    $page_content = trim(get_the_content());
                    if ($page_content) {
                        echo apply_filters('the_content', $page_content);
                    }
                    $is_english = function_exists('nd_translate') && nd_translate('es', 'en') === 'en';
                    if ($is_english) :
                    ?>
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">What is a cookie?</h2>
                                <p>A cookie is a small text file that is stored on your device when you visit a website. Its purpose is to allow the website to remember your visit when you browse that page again. Cookies often store technical information, personal preferences, content personalization, usage statistics, links to social networks, access to user accounts, etc. The goal of the cookie is to adapt the website content to your profile and needs; without cookies the services offered by any website would be significantly impaired.</p>
                                <p>Cookies can only be read by the service or application that created them and are not executable files, cannot spread, and cannot contain a virus.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">What types of cookies are there?</h2>
                                <p>Depending on who manages them:</p>
                                <p>• Own cookies: cookies sent to the user's device from a computer or domain managed by the organization and from which the requested service is provided.</p>
                                <p>• Third-party cookies: cookies sent to the user's device from a computer or domain managed (or not) by the organization, where a third party processes the data obtained through the cookies.</p>
                                <p>Depending on their duration, cookies can be:</p>
                                <p>• Session cookies. These are cookies designed to collect and store data while the user accesses a website. These cookies are not stored on the user's computer when the session expires or the browser is closed.</p>
                                <p>• Persistent cookies. These are cookies in which the data remain stored on the user's computer and can be accessed and processed when the user leaves the website and when they connect again. These cookies can be deleted at any time by the user.</p>
                                <p>Depending on the purpose for which the data obtained through the cookies are processed:</p>
                                <p>i. Technical (necessary) cookies. These cookies are necessary for the website and its basic functions to operate correctly. Without these cookies it is not possible to provide certain services, such as secure browsing, user identification, or registration/participation in an event.</p>
                                <p>ii. Analytical (statistics) cookies. These cookies collect information about the use of the website, which pages are visited most often, how frequently, or whether errors occur. This allows us to measure the activity of our website, for example to identify the most popular sections. These cookies do not collect information that identifies the user; they are only used to improve the functioning of a website.</p>
                                <p>iii. Personalization (preferences) cookies. These cookies make it possible for the website to remember preferences, such as username, language, or geographic location, with the aim of offering enhanced and personalized features. For example, our website could display information available only in a geographic location, using a cookie to store the province in which the web user is located. Please note that if you disable these cookies, you may not be able to use all interactive features of our website.</p>
                                <p>iv. Advertising (marketing) cookies. These are cookies that allow the management of advertising spaces on a website. These cookies are used to display the most relevant ads according to the user's interests. They are also used to limit the number of times a user sees an ad and to help measure the effectiveness of an advertising campaign.</p>
                                <p>v. Behavioral advertising (marketing) cookies. These cookies store information about user behavior obtained through the observation of their browsing habits, which allows the creation of profiles based on those habits in order to display advertising accordingly.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">What type of cookies does MBI ABOGADOS, S.L. use?</h2>
                                <p><strong>Necessary</strong></p>
                                <p>These cookies are necessary for the website to function, so they cannot be disabled. They are generally only set in response to actions taken by you to request services, such as setting your privacy preferences, logging in, or completing forms. The latter does not occur at MBI ABOGADOS, S.L. because we do not have user registration, therefore there is no user login, and we do not use data collection forms.</p>
                                <p><strong>Preferences</strong></p>
                                <p>Preference cookies allow the website to remember information that changes the way the website behaves or looks, such as your preferred language or the region where you are located.</p>
                                <p><strong>Statistics</strong></p>
                                <p>Statistics cookies help website owners understand how visitors interact with websites by collecting and reporting information anonymously.</p>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">¿Qué es una cookie?</h2>
                                <p>Una cookie es un pequeño fichero de texto que se almacena en su dispositivo cuando visita una página Web. Su utilidad es que la Web sea capaz de recordar su visita cuando vuelva a navegar por esa página. Las cookies suelen almacenar información de carácter técnico, preferencias personales, personalización de contenidos, estadísticas de uso, enlaces a redes sociales, acceso a cuentas de usuario, etc. El objetivo de la cookie es adaptar el contenido de la Web a su perfil y necesidades, sin cookies los servicios ofrecidos por cualquier página se verían mermados notablemente.</p>
                                <p>Las cookies sólo podrán ser leídas por el servicio o aplicación que las ha emitido y en ningún caso son archivos ejecutables, ni pueden propagarse, ni contener un virus.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">¿Qué tipología de cookies hay?</h2>
                                <p>Según la entidad que las gestione:</p>
                                <p>• Cookies propias: Son aquellas cookies que se envían al equipo terminal del usuario desde un equipo o dominio gestionado por el grupo y desde el que se presta el servicio solicitado por el usuario.</p>
                                <p>• Cookies de tercero: Son aquellas cookies que se envían al equipo terminal del usuario desde un equipo o dominio gestionado o no por el grupo, siendo un tercero la que trata los datos obtenidos a través de las cookies.</p>
                                <p>En función de su duración las cookies pueden ser:</p>
                                <p>• De sesión. Son un tipo de cookies diseñadas para recabar y almacenar datos mientras el usuario accede a una página Web. Estas cookies no quedan almacenadas en el ordenador del usuario cuando caduca la sesión o este cierra el navegador.</p>
                                <p>• Persistentes. Son un tipo de cookies en el que los datos siguen almacenados en el ordenador del usuario y pueden ser accedidos y tratados cuando el usuario abandona la página Web y cuando se vuelva a conectar a ella. Estas cookies pueden ser borradas en cualquier momento por el Usuario.</p>
                                <p>En función de la finalidad para la que se traten los datos obtenidos a través de las cookies:</p>
                                <p>i. Cookies técnicas (necesarias). Estas cookies son necesarias para que la página Web y sus funciones básicas puedan operar correctamente. Sin estas cookies no es posible poner a disposición determinados servicios, como la navegación segura, identificación del usuario, realizar la inscripción o participación en un evento.</p>
                                <p>ii. Cookies analíticas (estadística). Estas cookies recopilan información sobre el uso que se hace de la página Web, qué páginas se visitan más, con qué frecuencia, si dan mensajes de error. De ese modo podemos medir la actividad de nuestro sitio Web, por ejemplo para identificar las secciones más populares de nuestra Web. Estas cookies no recogen información que identifique al usuario, solo se emplea para mejorar el funcionamiento de una página Web.</p>
                                <p>iii. Cookies de personalización (preferencias). Estas cookies hacen posible que la página Web recuerde las preferencias, como el nombre de usuario, el idioma, ubicación geográfica, por tanto su finalidad es ofrecer funciones mejoradas y personales. Por ejemplo, nuestra página Web podría ofrecer información solo disponible en una ubicación geográfica, utilizando para ello una cookie que guardar la provincia en la que se encuentra el usuario Web. Tenga en cuenta que si deshabilita estas cookies, no podrá utilizar todas las funciones interactivas de nuestra página Web.</p>
                                <p>iv. Cookies de publicidad (marketing). Son aquéllas que permiten la gestión de los espacios publicitarios que hay en una página Web. Estas cookies se utilizan para mostrar los anuncios más relevantes de acuerdo a los intereses del usuario. También se usan para limitar el número de veces que el usuario ve un anuncio, así como para ayudar a medir la efectividad de una campaña publicitaria.</p>
                                <p>v. Cookies de publicidad comportamental (marketing). Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación de sus hábitos de navegación, lo que permite la creación de perfiles basados en hábitos del usuario para mostrar publicidad en función del mismo.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">¿Qué tipo de cookies utiliza MBI ABOGADOS, S.L.?</h2>
                                <p><strong>Necesarias</strong></p>
                                <p>Estas cookies son necesarias para que la página Web funcione, por lo que no se pueden desactivar. Por lo general, solo se configuran en respuesta a sus acciones realizadas al solicitar servicios, como establecer sus preferencias de privacidad, iniciar sesión o completar formularios, esto último no ocurre en MBI ABOGADOS, S.L. porque no tenemos registro de usuarios, por lo tanto tampoco hay inicio de sesión de usuario, ni usamos formularios de recogida de datos)</p>
                                <p><strong>Preferencias</strong></p>
                                <p>Las cookies de preferencias permiten a la página Web recordar información que cambia la forma en que la página se comporta o el aspecto que tiene, como su idioma preferido o la región en la que usted se encuentra.</p>
                                <p><strong>Estadística</strong></p>
                                <p>Las cookies estadísticas ayudan a los propietarios de páginas Web a comprender cómo interactúan los visitantes con las páginas Web reuniendo y proporcionando información de forma anónima.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </section> 

        <section
        id="cookies"
        data-section="cookies"
        class="pb-16 lg:pb-20 bg-white">
        <div class="page-shell">
            <?php echo do_shortcode('[cookie_declaration]'); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
