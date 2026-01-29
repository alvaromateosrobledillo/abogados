<?php
/*
Template Name: Aviso Legal
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
                    $page_content = get_the_content();
                    $plain_content = trim(wp_strip_all_tags($page_content));
                    $plain_content = str_replace(array("\xc2\xa0", '&nbsp;'), '', $plain_content);
                    if ($plain_content !== '') {
                        echo apply_filters('the_content', $page_content);
                    } else {
                        $is_english = function_exists('nd_translate') && nd_translate('es', 'en') === 'en';
                        if ($is_english) {
                    ?>
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <p><strong>Corporate Name:</strong> MBI ABOGADOS, S.L.</p>
                                <p><strong>Registered Address:</strong> C/ RECOLETOS, 19 1º 28001 MADRID</p>
                                <p><strong>Tax ID:</strong> B21705322</p>
                                <p><strong>Phone:</strong> +34 91 840 39 79</p>
                                <p><strong>Email:</strong> info@mbiabogados.com</p>
                                <p><strong>Domain name:</strong> https://mbiabogados.com/</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">PURPOSE</h2>
                                <p>The provider, responsible for the website, makes this document available to users in order to comply with the obligations set forth in Law 34/2002 on Information Society Services and Electronic Commerce (LSSI‑CE), and to inform all website users about the terms of use of the website.</p>
                                <p>Any person accessing this website assumes the role of user, committing to the strict observance and compliance with the provisions set forth herein, as well as any other applicable legal provisions.</p>
                                <p>The provider reserves the right to modify any type of information that may appear on the website, without any obligation to provide prior notice or inform users of such obligations, it being understood that publication on the provider’s website is sufficient.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">LIABILITY</h2>
                                <p>The provider disclaims any liability for the information published on its website, provided that this information has been manipulated or introduced by a third party external to it.</p>
                                <p>The provider’s website may use cookies (small information files that the server sends to the computer of the person accessing the page) to carry out certain functions that are considered essential for the proper functioning and display of the site. The cookies used on the website are, in any case, temporary and have the sole purpose of making subsequent transmission more efficient and disappear when the user's session ends. In no case will cookies be used to collect personal information.</p>
                                <p>From the client’s website it is possible that you are redirected to content on third‑party websites. Since the provider cannot always control the content introduced by third parties on their websites, it assumes no responsibility whatsoever for such content. In any case, the provider states that it will proceed to the immediate removal of any content that may contravene national or international legislation, morality or public order, proceeding to the immediate removal of the redirection to said website, and informing the competent authorities of the content in question.</p>
                                <p>The provider is not responsible for the information and content stored, by way of example but not limited to, in forums, chats, blog generators, comments, social networks or any other medium that allows third parties to publish content independently on the provider’s website. Nevertheless, and in compliance with the provisions of articles 11 and 16 of the LSSI‑CE, the provider makes itself available to all users, authorities and security forces, and actively collaborates in the removal or, where appropriate, blocking of all content that could affect or contravene national or international legislation, third‑party rights or morality and public order. If the user considers that there is any content on the website that could be susceptible to this classification, they are requested to notify the website administrator immediately.</p>
                                <p>This website has been reviewed and tested to function correctly. In principle, it can be guaranteed to function correctly 365 days a year, 24 hours a day. However, the provider does not rule out the possibility that certain programming errors may exist, or that causes of force majeure, natural disasters, strikes, or similar circumstances may occur that make access to the website impossible.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">PERSONAL DATA PROTECTION</h2>
                                <p>MBI ABOGADOS, S.L., owner of the portal https://mbiabogados.com/, informs users thereof (hereinafter the “portal”) that MBI ABOGADOS, S.L. is responsible for the processing carried out through this portal, unless otherwise stated in the processing in question.</p>
                                <p>MBI ABOGADOS, S.L. respects the current legislation on personal data protection, the privacy of users and the secrecy and security of personal data, in accordance with the applicable legislation on data protection, in particular Regulation 2016/679 of the European Parliament and of the Council of 27 April 2016, adopting the technical and organizational measures necessary to prevent loss, misuse, alteration, unauthorized access and theft of the personal data provided, taking into account the state of the art, the nature of the data and the risks to which they are exposed.</p>
                                <p>In particular, users of the portal are informed that their personal data may only be obtained for processing when they are adequate, relevant and not excessive in relation to the scope and the specific, explicit and legitimate purposes for which they were obtained.</p>
                                <p>When personal data are collected through the portal, the user will be informed beforehand, clearly and unequivocally, of the following aspects:</p>
                                <p>• Existence of processing of personal data.</p>
                                <p>• The identity and contact details of the controller of the personal data obtained.</p>
                                <p>• The contact details of the Data Protection Officer, where applicable.</p>
                                <p>• The purposes of the processing for which the personal data are intended and the legal basis for the processing.</p>
                                <p>• The recipients or categories of recipients of the personal data, where applicable.</p>
                                <p>• Where applicable, the controller’s intention to transfer personal data to a third country.</p>
                                <p>• The period or criteria for retention of the information.</p>
                                <p>• The existence of the right to request from the controller access to the personal data relating to the data subject, and their rectification or erasure, or restriction of processing, the right to data portability, or to object to processing. Likewise, the way to exercise the aforementioned rights.</p>
                                <p>• When processing is based on the data subject’s consent, the existence of the right to withdraw consent at any time, without affecting the lawfulness of processing based on consent before its withdrawal. If processing is not based on consent, their right to object to processing.</p>
                                <p>• The right to lodge a complaint with a supervisory authority.</p>
                                <p>• The existence, if any, of automated decisions, including profiling and the exercise of rights associated with such processing.</p>
                                <p>In particular, when data relating to children are collected, processing shall only be lawful if consent was given or authorized by the holder of parental authority or guardianship over the child.</p>
                                <p>The user will be solely responsible for completing forms with false, inaccurate, incomplete or outdated data.</p>
                                <p>The data provided will be kept as long as the commercial relationship is maintained or for the years necessary to comply with legal obligations. The data requested are necessary, so if they are not provided, it will not be possible to provide the requested service. Data will not be disclosed to third parties except in cases where there is a legal obligation. You have the right to obtain confirmation as to whether MBI ABOGADOS, S.L. is processing your personal data; therefore, you have the right to access your personal data, rectify inaccurate data or request their deletion when the data are no longer necessary, to restrict processing, or to object to processing, as well as the right to data portability.</p>
                                <p>You have the right to lodge a complaint with the Supervisory Authority (Spanish Data Protection Agency www.aepd.es).</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">INTELLECTUAL AND INDUSTRIAL PROPERTY</h2>
                                <p>The website, including, by way of example but not limited to, its programming, editing, compilation and other elements necessary for its operation, as well as the designs, logos, text and/or graphics, are the property of the provider or, where appropriate, the provider has a license or express authorization from the authors. All website contents are duly protected by intellectual and industrial property regulations and registered in the corresponding public registers.</p>
                                <p>Regardless of the purpose for which they were intended, total or partial reproduction, use, exploitation, distribution and commercialization require, in all cases, prior written authorization from the provider. Any use not previously authorized by the provider will be considered a serious breach of the author’s intellectual or industrial property rights.</p>
                                <p>Designs, logos, text and/or graphics not belonging to the provider and which may appear on the website belong to their respective owners, who are themselves responsible for any possible controversy that may arise with respect to them. In any case, the provider has the express and prior authorization of the same.</p>
                                <p>The provider recognizes in favor of their owners the corresponding industrial and intellectual property rights, and their mere mention or appearance on the website does not imply the existence of any rights or liability on the part of the provider, nor endorsement, sponsorship or recommendation by the provider.</p>
                                <p>To make any observation regarding possible breaches of intellectual or industrial property rights, as well as any of the contents of the website, you may do so via the following email address: info@mbiabogados.com</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">APPLICABLE LAW AND JURISDICTION</h2>
                                <p>For the resolution of all disputes or issues related to this website or to the activities carried out therein, Spanish legislation shall apply, to which the parties expressly submit, and the Courts and Tribunals of Madrid shall be competent to resolve all conflicts arising from or related to its use.</p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <p><strong>Denominación Social:</strong> MBI ABOGADOS, S.L.</p>
                                <p><strong>Domicilio Social:</strong> C/ RECOLETOS, 19 1º 28001 MADRID</p>
                                <p><strong>NIF:</strong> B21705322</p>
                                <p><strong>Teléfono:</strong> +34 91 840 39 79</p>
                                <p><strong>e-Mail:</strong> info@mbiabogados.com</p>
                                <p><strong>Nombre de dominio:</strong> https://mbiabogados.com/</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">OBJETO</h2>
                                <p>El prestador, responsable del sitio web, pone a disposición de los usuarios el presente documento con el que pretende dar cumplimiento a las obligaciones dispuestas en la Ley 34/2002, de Servicios de la Sociedad de la Información y del Comercio Electrónico (LSSI-CE), así como informar a todos los usuarios del sitio web respecto a cuáles son las condiciones de uso del sitio web.</p>
                                <p>Toda persona que acceda a este sitio web asume el papel de usuario, comprometiéndose a la observancia y cumplimiento riguroso de las disposiciones aquí dispuestas, así como a cualesquiera otra disposición legal que fuera de aplicación.</p>
                                <p>El prestador se reserva el derecho a modificar cualquier tipo de información que pudiera aparecer en el sitio web, sin que exista obligación de preavisar o poner en conocimiento de los usuarios dichas obligaciones, entendiéndose como suficiente con la publicación en el sitio web del prestador.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">RESPONSABILIDAD</h2>
                                <p>El prestador se exime de cualquier tipo de responsabilidad derivada de la información publicada en su sitio web, siempre que esta información haya sido manipulada o introducida por un tercero ajeno al mismo.</p>
                                <p>El sitio web del prestador puede utilizar cookies (pequeños archivos de información que el servidor envía al ordenador de quien accede a la página) para llevar a cabo determinadas funciones que son consideradas imprescindibles para el correcto funcionamiento y visualización del sitio. Las cookies utilizadas en el sitio web tienen, en todo caso, carácter temporal con la única finalidad de hacer más eficaz su transmisión ulterior y desaparecen al terminar la sesión del usuario. En ningún caso se utilizarán las cookies para recoger información de carácter personal.</p>
                                <p>Desde el sitio web del cliente es posible que se redirija a contenidos de terceros sitios web. Dado que el prestador no puede controlar siempre los contenidos introducidos por los terceros en sus sitios web, éste no asume ningún tipo de responsabilidad respecto a dichos contenidos. En todo caso, el prestador manifiesta que procederá a la retirada inmediata de cualquier contenido que pudiera contravenir la legislación nacional o internacional, la moral o el orden público, procediendo a la retirada inmediata de la redirección a dicho sitio web, poniendo en conocimiento de las autoridades competentes el contenido en cuestión.</p>
                                <p>El prestador no se hace responsable de la información y contenidos almacenados, a título enunciativo pero no limitativo, en foros, chat´s, generadores de blogs, comentarios, redes sociales o cualesquiera otro medio que permita a terceros publicar contenidos de forma independiente en la página web del prestador. No obstante y en cumplimiento de lo dispuesto en el art. 11 y 16 de la LSSI-CE, el prestador se pone a disposición de todos los usuarios, autoridades y fuerzas de seguridad, y colaborando de forma activa en la retirada o en su caso bloqueo de todos aquellos contenidos que pudieran afectar o contravenir la legislación nacional, o internacional, derechos de terceros o la moral y el orden público. En caso de que el usuario considere que existe en el sitio web algún contenido que pudiera ser susceptible de esta clasificación, se ruega lo notifique de forma inmediata al administrador del sitio web.</p>
                                <p>Este sitio web ha sido revisado y probado para que funcione correctamente. En principio, puede garantizarse el correcto funcionamiento los 365 días del año, 24 horas al día. No obstante, el prestador no descarta la posibilidad de que existan ciertos errores de programación, o que acontezcan causas de fuerza mayor, catástrofes naturales, huelgas, o circunstancias semejantes que hagan imposible el acceso a la página web.</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">PROTECCIÓN DE DATOS PERSONALES</h2>
                                <p>MBI ABOGADOS, S.L. titular del portal https://mbiabogados.com/, informa a los usuarios del mismo, en adelante el “portal”, que MBI ABOGADOS, S.L. es responsable de los tratamientos que se realicen mediante este portal, salvo que otra cosa se informe en el tratamiento de que se trate.</p>
                                <p>MBI ABOGADOS, S.L. respeta la legislación vigente en materia de protección de datos personales, la privacidad de los usuarios y el secreto y seguridad de los datos personales, de conformidad con lo establecido en la legislación aplicable en materia de protección de datos, en concreto, el Reglamento 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016, adoptando para ello las medidas técnicas y organizativas necesarias para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los datos personales facilitados, habida cuenta del estado de la tecnología, la naturaleza de los datos y los riesgos a los que están expuestos.</p>
                                <p>En concreto, se informa a los usuarios del portal que sus datos de carácter personal sólo podrán obtenerse para su tratamiento cuando sean adecuados, pertinentes y no excesivos en relación con el ámbito y las finalidades determinadas, explícitas y legítimas para las que se hayan obtenido.</p>
                                <p>Cuando se recaben los datos personales a través del portal, se informará previamente al usuario, de forma clara e inequívoca, de los siguientes extremos:</p>
                                <p>• Existencia de un tratamiento de datos de carácter personal.</p>
                                <p>• La identidad y los datos de contacto del responsable del tratamiento de datos personales obtenidos.</p>
                                <p>• Los datos de contacto del Delegado de Protección de Datos, si procede.</p>
                                <p>• Los fines del tratamiento a que se destinan los datos personales y la base jurídica del tratamiento.</p>
                                <p>• Los destinatarios o las categorías de destinatarios de los datos personales, en su caso.</p>
                                <p>• En su caso, la intención del responsable de transferir datos personales a un tercer país.</p>
                                <p>• El plazo o los criterios de conservación de la información.</p>
                                <p>• La existencia del derecho a solicitar al responsable del tratamiento el acceso a los datos personales relativos al interesado, y su rectificación o supresión, o la limitación de su tratamiento, el derecho a la portabilidad de los datos, o a oponerse al tratamiento. Asimismo, la manera de ejercitar los mencionados derechos.</p>
                                <p>• Cuando el tratamiento esté basado en el consentimiento del interesado, la existencia del derecho a retirar el consentimiento en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada. Si el tratamiento no está basado en el consentimiento, su derecho a ejercer la oposición al tratamiento.</p>
                                <p>• El derecho a presentar una reclamación ante una autoridad de control.</p>
                                <p>• La existencia, si las hubiera, de decisiones automatizas, incluida la elaboración de perfiles y el ejercicio de derechos asociados a dicho tratamiento.</p>
                                <p>En particular, cuando se recaben datos de niños, el tratamiento únicamente se considerará lícito si el consentimiento lo dio o autorizó el titular de la patria potestad o tutela sobre el niño.</p>
                                <p>El usuario será el único responsable a causa de la cumplimentación de los formularios con datos falsos, inexactos, incompletos o no actualizados.</p>
                                <p>Los datos proporcionados se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales. Los datos que se le solicitan resultan necesarios, de manera que de no facilitarlos no será posible la prestación del servicio requerido. Los datos no se cederán a terceros salvo en los casos en que exista una obligación legal. Usted tiene derecho a obtener confirmación sobre si en MBI ABOGADOS, S.L. estamos tratando sus datos personales por tanto tiene derecho a acceder a sus datos personales, rectificar los datos inexactos o solicitar su supresión cuando los datos ya no sean necesarios, a la limitación de su tratamiento, o a oponerse al tratamiento, así como al derecho de la portabilidad de los datos.</p>
                                <p>Tiene derecho a presentar una reclamación ante la Autoridad de Control (Agencia Española de Protección de Datos www.aepd.es).</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">PROPIEDAD INTELECTUAL E INDUSTRIAL</h2>
                                <p>El sitio web, incluyendo a título enunciativo pero no limitativo su programación, edición, compilación y demás elementos necesarios para su funcionamiento, los diseños, logotipos, texto y/o gráficos son propiedad del prestador o en su caso dispone de licencia o autorización expresa por parte de los autores. Todos los contenidos del sitio web se encuentran debidamente protegidos por la normativa de propiedad intelectual e industrial, así como inscritos en los registros públicos correspondientes.</p>
                                <p>Independientemente de la finalidad para la que fueran destinados, la reproducción total o parcial, uso, explotación, distribución y comercialización, requiere en todo caso de la autorización escrita previa por parte del prestador. Cualquier uso no autorizado previamente por parte del prestador será considerado un incumplimiento grave de los derechos de propiedad intelectual o industrial del autor.</p>
                                <p>Los diseños, logotipos, texto y/o gráficos ajenos al prestador y que pudieran aparecer en el sitio web, pertenecen a sus respectivos propietarios, siendo ellos mismos responsables de cualquier posible controversia que pudiera suscitarse respecto a los mismos. En todo caso, el prestador cuenta con la autorización expresa y previa por parte de los mismos.</p>
                                <p>El prestador reconoce a favor de sus titulares los correspondientes derechos de propiedad industrial e intelectual, no implicando su sola mención o aparición en el sitio web la existencia de derechos o responsabilidad alguna del prestador sobre los mismos, como tampoco respaldo, patrocinio o recomendación por parte del mismo.</p>
                                <p>Para realizar cualquier tipo de observación respecto a posibles incumplimientos de los derechos de propiedad intelectual o industrial, así como sobre cualquiera de los contenidos del sitio web, puede hacerlo a través del siguiente correo electrónico: info@mbiabogados.com</p>
                            </div>

                            <div class="space-y-4">
                                <h2 class="text-[clamp(22px,2.4vw,36px)] leading-[1.2] tracking-[-0.01em] font-normal text-[#141414]">LEY APLICABLE Y JURISDICCIÓN</h2>
                                <p>Para la resolución de todas las controversias o cuestiones relacionadas con el presente sitio web o de las actividades en él desarrolladas, será de aplicación la legislación española, a la que se someten expresamente las partes, siendo competentes para la resolución de todos los conflictos derivados o relacionados con su uso los Juzgados y Tribunales de Madrid.</p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
</main>

<?php get_footer(); ?>
