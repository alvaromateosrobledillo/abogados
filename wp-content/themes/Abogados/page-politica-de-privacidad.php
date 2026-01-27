<?php
/*
Template Name: Politica de Privacidad
*/

get_header();
?>

<main class="bg-[#f7f6f2]">
    <section class="page-shell py-10 sm:py-12">
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
                    } else {
                    ?>
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">1. Responsable del Tratamiento</h2>
                                <p>El Responsable del Tratamiento se corresponde con el del titular del sitio web, cuyos datos completos son: MBI ABOGADOS, S.L. con CIF B21705322 y domicilio en C/ RECOLETOS, 19 1º 28001 MADRID.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">2. Datos tratados, finalidades y plazo de conservación</h2>
                                <p><strong>2.1 Datos tratados</strong></p>
                                <p>A los efectos de la solicitud de información o de contacto con el Titular, o por un eventual proceso de selección, bien convocado o por una candidatura espontánea presentada por el usuario, se deberán facilitar unos datos a través de la cumplimentación de los formularios dispuestos, en los que se indicarán cuáles de ellos tienen el carácter de obligatorio.</p>
                                <p>Durante la navegación, podrán facilitarse datos como la dirección IP asignada por su proveedor o determinados perfiles sociales asociados al usuario.</p>
                                <p><strong>2.2 Finalidades</strong></p>
                                <p>Las finalidades serán las siguientes:</p>
                                <p>Formulario de contacto: El correo electrónico o el teléfono facilitado para el contacto, serán utilizados para una efectiva contestación a las cuestiones planteadas.</p>
                                <p>Remisión de currículos: El envío de los datos curriculares serán utilizados para su utilización en procesos de selección, presentes y futuros, si bien el Titular se reserva el derecho a eliminar directamente la información facilitada.</p>
                                <p><strong>2.3 Conservación</strong></p>
                                <p>El plazo de conservación será el siguiente:</p>
                                <p>Formulario de contacto: Los datos personales proporcionados se conservarán mientras se mantenga la relación-vínculo con MBI ABOGADOS, S.L. y durante los plazos exigidos por la normativa vigente. En otros casos, los datos se conservarán mientras no se solicite su supresión por parte del interesado.</p>
                                <p>Remisión de currículos: Los datos serán tratados, desde su recepción, por un período de 1 año, salvo que el usuario haga llegar antes su solicitud de cancelación.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">3. Ejercicio de derechos</h2>
                                <p>Cualquier persona tiene derecho a obtener confirmación acerca de si se está procediendo al tratamiento de datos personales que les conciernan, o no. Las personas interesadas tienen derecho a si acceder a sus datos personales, así como a solicitar la rectificación de los datos inexactos o, en su caso, solicitar su supresión cuando, entre otros motivos, los datos ya no sean necesarios para los fines que fueron recogidos.</p>
                                <p>En determinadas circunstancias, los interesados podrán solicitar la limitación del tratamiento de sus datos u oponerse al tratamiento de los mismos, en cuyo caso únicamente los conservaremos para el ejercicio o la defensa de reclamaciones.</p>
                                <p>Para ello, los usuarios podrán dirigir una comunicación por escrito a MBI ABOGADOS, S.L., a la dirección C/ RECOLETOS, 19 1º 28001 MADRID o a la dirección de correo electrónico info@mbiabogados.com, incluyendo en ambos casos una fotocopia del documento nacional de identidad o documentación acreditativa equivalente.</p>
                                <p>En caso de que desea ejercer el derecho de portabilidad, se facilitará esos datos al nuevo Responsable.</p>
                                <p>En todo caso, como afectado o interesado, puede presentar las denuncias que considere oportunas ante la Agencia Española de Protección de Datos (www.agdp.es).</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">4. Legitimación del tratamiento</h2>
                                <p>La base legal para el tratamiento de los datos facilitados es el consentimiento otorgado por el usuario para el tratamiento de sus datos personales para o uno o varios fines específicos, así como para la ejecución de un contrato en el que el usuario es parte, o para la aplicación de medidas precontractuales.</p>
                                <p>El consentimiento será siempre revocable y podrá ejercerse en cualquier momento.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">5. Destinatarios y cesiones</h2>
                                <p>Dichos datos no serán objeto de cesión a terceros ni se realizarán transferencias internacionales.</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
</main>

<?php get_footer(); ?>
