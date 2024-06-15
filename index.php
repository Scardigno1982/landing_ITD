<?php
session_start();
require 'src/lang/main.php';

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
$translations = loadLanguage($lang);

// Verificar si $translations es null antes de acceder a sus índices
if ($translations !== null) {
    ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilanguage Page</title>
    <link href="src/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
</head>
<body class="bg-custom-gradient text-gray-800">
    <header>

        <!-- //ANCHOR - LOGO -->
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <img id="left-logo" src="src/img_webp/logo.webp" alt="Left Logo" class="w-60 h-auto">
            </div>
        </div>
        <div class="container mx-auto p-4">
            <div class="flex justify-end items-center">
                <a href="#" onclick="changeLanguage('en')" class="px-4 py-2 flex items-center <?php echo $lang == 'en' ? 'text-white' : 'text-white'; ?>">
                    <span class="flag-icon flag-icon-us mr-2"></span> English
                </a>
                <a href="#" onclick="changeLanguage('es')" class="px-4 py-2 flex items-center <?php echo $lang == 'es' ? 'text-white' : 'text-white'; ?>">
                    <span class="flag-icon flag-icon-es mr-2"></span> Español
                </a>
            </div>
        </div>
    </header>

    <!-- //ANCHOR - HERO -->
    <div class="bg-cover bg-center h-1/2 slider-hero" style="background-image: url('src/img_webp/slider.webp');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-20">
            <div class="text-center text-white px-6 md:px-12">
                <h2 id="hero-text" class="text-8xl md:text-6xl font-bold mb-4 inline-flex items-center">
                    <?php echo $translations['hero']; ?>
                    <img src="src/img_webp/logo-zap.webp" alt="ZAP Logo" class="inline-block w-30 h-auto mx-2">
                    <?php echo $translations['hero-next']; ?>
                </h2>
            </div>
        </div>
    </div>

    <!-- //ANCHOR - ICONS -->
    <div class="text-white py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div>
                <img src="src/img_webp/icon1.webp" alt="Clientes" class="mx-auto mb-4">
                <p id="icon1-text" class="text-2xl"><?php echo $translations['icon1']; ?></p>
            </div>
            <div>
                <img src="src/img_webp/icon2.webp" alt="Proyectos" class="mx-auto mb-4">
                <p id="icon2-text" class="text-2xl"><?php echo $translations['icon2']; ?></p>
            </div>
            <div>
                <img src="src/img_webp/icon3.webp" alt="Países" class="mx-auto mb-4">
                <p id="icon3-text" class="text-2xl"><?php echo $translations['icon3']; ?></p>
            </div>
            <div>
                <img src="src/img_webp/icon4.webp" alt="Experiencia" class="mx-auto mb-4">
                <p id="icon4-text" class="text-2xl"><?php echo $translations['icon4']; ?></p>
            </div>
        </div>
    </div>

    <!-- //ANCHOR - SERVICE -->
    <div class="w-full servicios container mx-auto px-4">
        <button class="w-full text-white font-bold py-2 px-4 rounded" 
                type="button" data-collapse-toggle="collapse-servicios">
            <span id="service" class="flex items-center">
                <span class="flex items-center">
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    <h2 class="text-3xl md:text-3xl font-bold mb-4 inline-flex items-center">
                        <?php echo $translations['service']; ?> 
                    </h2>
                </span>
            </span>
        </button>

        <div class="hidden" id="collapse-servicios">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4 px-4">
                <!-- Left Column: Content -->
                <div>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">Consultoría de Arquitectura SAP:</div>
                    <p class="text-white text-lg">Ofrecemos asesoramiento especializado en el diseño y la estructura de sistemas SAP, asegurando una arquitectura sólida y eficiente que cumpla con los objetivos y requisitos del negocio.</p>
                    
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">Consultoría SAP PP:</div>
                    <p class="text-white text-lg">Nos enfocamos en el módulo de Planificación de Producción (PP) de SAP, proporcionando orientación y soluciones para optimizar los procesos de planificación, programación y control de la producción en la empresa.</p>

                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">Consultoría de Integración de Manufactura:</div>
                    <p class="text-white text-lg">Brindamos servicios de consultoría para integrar los sistemas de manufactura con el entorno SAP, permitiendo una comunicación fluida y eficiente entre los sistemas de control de producción y los sistemas empresariales, para mejorar la visibilidad y la eficiencia en la cadena de suministro y producción.</p>
                </div>
                <!-- Right Column: Empty -->
                <div></div>
            </div>
        </div>
    </div>


    <!-- //ANCHOR - TECNOLOGI -->
    <div class="w-full servicios container mx-auto px-4">
        <button class="w-full text-white font-bold py-2 px-4 rounded" 
                type="button" data-collapse-toggle="collapse-technologies">
            <span id="technologies" class="flex items-center">
                <span class="flex items-center">
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    <h2 class="text-3xl md:text-3xl font-bold mb-4 inline-flex items-center">
                        <?php echo $translations['technologies']; ?> 
                    </h2>
                </span>
            </span>
        </button>

        <div class="hidden" id="collapse-technologies">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4 px-4">
                <!-- Left Column: Content -->
                <div>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">SAP MII</div><br>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">SAP PCO</div><br>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">SAP Security</div><br>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">SAP BTP</div><br>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">SAP Basis</div><br>
                    <div class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">SAP Integration Suite</div><br>
                    <p class="text-white text-lg mt-4">
                        SAP Integration Suite es una plataforma que facilita la integración de sistemas y aplicaciones empresariales tanto dentro de la organización como con socios externos. Permite la creación de flujos de trabajo automatizados y la gestión de la comunicación entre sistemas heterogéneos.
                    </p>
                </div>
                <!-- Right Column: Image -->
                <div class="flex justify-end">
                    <img src="src\img_webp\mini-hero.webp" alt="minihero" class="w-full h-auto rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- //ANCHOR - TEXTO IMAGEN -->

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8"> 
            <div class="col-span-3 md:pr-8"> 
            <div class="flex items-center mb-4">
                <div class="text-2xl font-bold">EnIT DEVELOPERS</div>
            </div>

            <div class="text-gray-700">
                <h1 class="text-3xl font-semibold mb-2">Nos destacamos como su socio estratégico en el mundo de la consultoría SAP</h1>
                <p>¿Por qué debería elegirnos? Porque estamos completamente alineados con las necesidades de su negocio. Entendemos que cada cliente es único, por lo que adaptamos nuestras soluciones a sus requerimientos específicos. Nuestro enfoque se centra en ofrecer prácticas innovadoras que proporcionan resultados excepcionales con un bajo mantenimiento. Con nosotros, obtendrá una combinación perfecta de experiencia, compromiso y excelencia en el servicio. Confían en nosotros para llevar su empresa al siguiente nivel en el mundo de SAP.</p>
            </div>
            </div>

            <div class="col-span-1"> 
                <img src="src\img_webp\mini-hero2.webp" alt="mini-elices" class="w-full h-auto rounded-lg shadow-md" style="margin-left: 75px;">
            </div>

        </div>
    </div>

    <!-- //ANCHOR - Confi­an en Nosotros -->

        <section class=" p-8">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4 text-white">EMPRESAS QUE TRABAJAN CON NOSOTROS</h2>
                <div class="flex flex-wrap justify-center items-center mb-8 bg-white rounded-lg shadow-md">
                    <img src="src\img_webp\partner\partner4_webp_webp.webp" alt="Logo 2" class="w-24 m-2">
                </div>
            </div>
        </section>

    <!-- //ANCHOR - TEXTO IMAGEN -->


    <div class="container mx-auto p-8 bg-white rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8"> 
            <div class="col-span-3 md:pr-8"> 
            <div class="flex items-center mb-4">
                <img src="src\img_webp\logo-itdeveloper.png" alt="mini-elices" class="w-25 h-auto">
            </div>

            <div class="text-gray-700">

                <p>Es una empresa con base en Estados Unidos fundada en 2019. Hoy día estamos en proceso de crecimiento con proyectos en USA y México. 
                Nuestro negocio central está enfocado en el mercado de outsourcing de servicios de consultoría y desarrollo de soluciones. Somos una empresa con amplia experiencia en implementaciones de SAP BTP, SAP ERP, Seguridad SAP y SAP MII (Manufacturing Intelligence & Integration).</p>
            </div>
            </div>

            <div class="col-span-1"> 
                <img src="src\img_webp\mini-hero3.webp" alt="mini-elices" class="w-full h-auto rounded-lg shadow-md" style="margin-left: 75px;">
            </div>

        </div>
    </div>

    <!-- //ANCHOR - CONTACTO -->
    <div class="py-10 px-10 container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-10 gap-8">
            <div class="col-span-6 md:pr-8 text-white">
                <h2 class="text-3xl font-bold mb-4">¿Listo para llevar tu presencia en línea al siguiente nivel?</h2>
            </div>

            <div class="col-span-4 w-full md:w-auto p-4 rounded-lg">
                <form class="bg-teal-600 p-8 rounded-lg shadow-lg div-gradiente-vertical md:mt-0">
                    <div class="mb-4">
                        <label for="name" class="block text-white text-sm font-bold mb-2">Nombre</label>
                        <input type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu nombre">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu email">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-white text-sm font-bold mb-2">Mensaje</label>
                        <textarea id="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tu mensaje"></textarea>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- //ANCHOR - FOOTER -->

    <div class="py-10 px-10 flex justify-between items-center">
        <div class="flex items-center">
            <img src="src\img_webp\logo-footer.webp" alt="Logo" class="w-auto h-auto">
        </div>
        <div class="flex items-center">
            <img src="src\img_webp\linkedin.webp" alt="Logo" class="w-auto h-auto">
        </div>
    </div>











<?php
} else {
    echo "Translations not loaded.";
}
?>
            <script>
                function changeLanguage(lang) {
                    fetch(`src/lang/get_translations.php?lang=${lang}`)
                        .then(response => response.json())
                        .then(translations => {
                            document.getElementById('hero-text').innerHTML = translations['hero'] + '<img src="src/img_webp/logo-zap.webp" alt="ZAP Logo" class="inline-block w-30 h-auto mx-2">' + translations['hero-next'];
                            document.getElementById('icon1-text').innerText = translations['icon1'];
                            document.getElementById('icon2-text').innerText = translations['icon2'];
                            document.getElementById('icon3-text').innerText = translations['icon3'];
                            document.getElementById('icon4-text').innerText = translations['icon4'];
                            document.getElementById('service').innerText = translations['service'];
                            document.getElementById('technologies').innerText = translations['technologies'];

                            // Actualizar la variable de sesión
                            fetch(`src/lang/get_translations.php?lang=${lang}`)
                                .then(response => {
                                    if (response.ok) {
                                        return response.text();
                                    }
                                    throw new Error('Network response was not ok.');
                                })
                                .then(() => {
                                    window.location.reload(); // Recargar la página para aplicar el cambio de idioma
                                })
                                .catch(error => {
                                    console.error('Error updating language:', error);
                                });
                        });
                }

                const button1 = document.querySelector('[data-collapse-toggle="collapse-servicios"]');
                const collapseContent1 = document.getElementById('collapse-servicios');

                button1.addEventListener('click', () => {
                    collapseContent1.classList.toggle('hidden');
                });

                const button2 = document.querySelector('[data-collapse-toggle="collapse-technologies"]');
                const collapseContent2 = document.getElementById('collapse-technologies');

                button2.addEventListener('click', () => {
                    collapseContent2.classList.toggle('hidden');
                });


            </script>
</body>
</html>

