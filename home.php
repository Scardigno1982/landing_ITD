<?php
session_start();
require_once 'src/lang/main.php';

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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body class="bg-custom-gradient text-gray-800">



    <header id="header" class="w-full fixed top-0 left-0 z-50">
        <!-- //ANCHOR - LOGO -->
        <div class="flex flex-col sm:flex-row justify-between items-center text-center sm:text-left">
            <div class="w-full sm:w-auto">
                <img id="left-logo" src="src/img_webp/logo.webp" alt="Left Logo"
                    class="ml-6 mb-3 h-auto w-60 sm:w-20 md:w-40 lg:w-60 xl:w-80">
            </div>
        </div>
        <div class="mx-auto p-4">

            <!-- //ANCHOR - MENU -->


            <!-- Botón de menú para móviles -->
            <div class="contenedor-movil">
                <div class="lg:hidden">
                    <button id="menu-button" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menú de navegación (móvil) -->
            <nav id="menu" class="hidden lg:hidden flex-col mt-4">
                <ul class="flex flex-col space-y-2">
                    <li><a href="#home"
                            class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['home']; ?></a>
                    </li>
                    <li><a href="#service"
                            class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['service']; ?></a>
                    </li>
                    <li><a href="#technologies"
                            class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['technologies']; ?></a>
                    </li>
                    <li><a href="#about-us"
                            class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['it-developers']; ?></a>
                    </li>
                    <li><a href="#contact-menu"
                            class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['contact-menu']; ?></a>
                    </li>
                </ul>

                <!-- Selector de idioma -->
                <div class="flex space-x-4">
                    <a href="#" onclick="changeLanguage('en')"
                        class="px-4 py-2 flex items-center <?php echo $lang == 'en' ? 'text-white' : 'text-white'; ?>">
                        <span class="flag-icon flag-icon-us mr-2"></span> EN
                    </a>
                    <a href="#" onclick="changeLanguage('es')"
                        class="px-4 py-2 flex items-center <?php echo $lang == 'es' ? 'text-white' : 'text-white'; ?>">
                        <span class="flag-icon flag-icon-es mr-2"></span> ES
                    </a>
                </div>
            </nav>


            <!-- Menú de navegación (escritorio) -->
            <nav class="menu-desktop hidden lg:flex justify-between items-center px-4 w-full">
                <!-- Enlaces de navegación -->
                <div class="flex space-x-6">
                    <a href="#home" class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl">
                        <?php echo $translations['home']; ?></a>
                    <a href="#service"
                        class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['service']; ?></a>
                    <a href="#technologies"
                        class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['technologies']; ?></a>
                    <a href="#about-us"
                        class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['it-developers']; ?></a>
                    <a href="#contact-menu"
                        class="color-blanco hover:text-blue-600 font-semibold tracking-wide text-xl"><?php echo $translations['contact-menu']; ?></a>
                </div>

                <!-- Selector de idioma -->
                <div class="flex space-x-4">
                    <a href="#" onclick="changeLanguage('en')"
                        class="px-4 py-2 flex items-center <?php echo $lang == 'en' ? 'text-white' : 'text-white'; ?>">
                        <span class="flag-icon flag-icon-us mr-2"></span> EN
                    </a>
                    <a href="#" onclick="changeLanguage('es')"
                        class="px-4 py-2 flex items-center <?php echo $lang == 'es' ? 'text-white' : 'text-white'; ?>">
                        <span class="flag-icon flag-icon-es mr-2"></span> ES
                    </a>
                </div>
            </nav>


        </div>
    </header>


    <!-- //ANCHOR - HERO -->
    <div id="home" class="" style="margin-top: 174px;"></div>
    <div class="w-full bg-cover bg-center h-1/2 slider-hero" style="background-image: url('src/img_webp/slider.webp');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-20">
            <div class="text-center text-white px-2 sm:px-4 md:px-6 lg:px-8 xl:px-12">
                <h2 id="hero-text"
                    class="text-sm sm:text-sm md:text-xl lg:text-2xl xl:text-4xl font-bold mb-4 flex flex-col sm:flex-row items-center bg-sky-400">
                    <span class="mb-2 sm:mb-0"><?php echo $translations['hero']; ?></span>
                    <img src="src/img_webp/logo-zap.webp" alt="ZAP Logo"
                        class="w-20 sm:w-10 md:w-12 lg:w-16 xl:w-50 h-auto mx-2">
                    <span class="mt-2 sm:mt-0"><?php echo $translations['hero-next']; ?></span>
                </h2>

            </div>
        </div>
    </div>


    <!-- //ANCHOR - ICONS -->
    <div class="w-full text-white py-6 md:py-10">
        <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 text-center">
            <div>
                <img src="src/img_webp/icon1.webp" alt="Clientes"
                    class="w-16 sm:w-20 md:w-24 lg:w-28 mx-auto mb-2 sm:mb-4">
                <p class="number" data-target="20" class="text-lg sm:text-xl md:text-xl">+0</p>
                <p id="icon1-text" class="text-lg sm:text-xl md:text-2xl"><?php echo $translations['icon1']; ?></p>
            </div>
            <div>
                <img src="src/img_webp/icon2.webp" alt="Proyectos"
                    class="w-16 sm:w-20 md:w-24 lg:w-28 mx-auto mb-2 sm:mb-4">
                <p class="number" data-target="50" class="text-lg sm:text-xl md:text-2xl">+0</p>
                <p id="icon2-text" class="text-lg sm:text-xl md:text-2xl"><?php echo $translations['icon2']; ?></p>
            </div>
            <div>
                <img src="src/img_webp/icon3.webp" alt="Países"
                    class="w-16 sm:w-20 md:w-24 lg:w-28 mx-auto mb-2 sm:mb-4">
                <p class="number" data-target="10" class="text-lg sm:text-xl md:text-2xl">+0</p>
                <p id="icon3-text" class="text-lg sm:text-xl md:text-2xl"><?php echo $translations['icon3']; ?></p>
            </div>
            <div>
                <img src="src/img_webp/icon4.webp" alt="Experiencia"
                    class="w-16 sm:w-20 md:w-24 lg:w-28 mx-auto mb-2 sm:mb-4">
                <p class="number" data-target="18" class="text-lg sm:text-xl md:text-2xl">+0</p>
                <p id="icon4-text" class="text-lg sm:text-xl md:text-2xl"><?php echo $translations['icon4']; ?></p>
            </div>
        </div>
    </div>


    <!-- //ANCHOR - SERVICE -->
    <div id="service-container"></div>
    <div class="w-full servicios mx-auto px-4 py-2 md:py-4">
        <button class="text-white font-bold py-2 px-4 rounded">
            <span id="service" class="flex items-center justify-center">
                <h2 class="text-3xl sm:text-3xl md:text-3xl lg:text-5xl font-bold mb-4 inline-flex items-center">
                    <?php echo $translations['service']; ?>
                </h2>
            </span>
        </button>


        <div class="" id="collapse-servicios">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10 py-2 px-2 md:px-4">
                <div style="margin-bottom: -50px;">
                    <div id="service-subtitulo"
                        class="inline-block bg-sky-400 text-white font-bold py-2 px-4 rounded mt-4">
                        <?php echo $translations['service-subtitulo']; ?>
                    </div>
                    <p id="service-subtitulo-descripcion" class="text-white text-base sm:text-lg mb-5">
                        <?php echo $translations['service-subtitulo-descripcion']; ?>
                    </p>

                    <div id="service-subtitulo1"
                        class="inline-block bg-sky-400 text-white font-bold py-2 px-4 rounded mt-4">
                        <?php echo $translations['service-subtitulo1']; ?>

                    </div>
                    <p id="service-subtitulo-descripcion1" class="text-white text-base sm:text-lg mb-5">
                        <?php echo $translations['service-subtitulo-descripcion1']; ?>
                    </p>

                    <div id="service-subtitulo2"
                        class="inline-block bg-sky-400 text-white font-bold py-2 px-4 rounded mt-4">
                        <?php echo $translations['service-subtitulo2']; ?>
                    </div>
                    <p id="service-subtitulo-descripcion2" class="text-white text-base sm:text-lg mb-5">
                        <?php echo $translations['service-subtitulo-descripcion2']; ?>
                    </p>
                </div>

                <!-- Contenedor para la imagen -->
                <div class="flex justify-end">
                    <div class="lg:mt-6 md:mt-0 mt-5">
                        <img src="src/img_webp/hand.webp" alt="hand" class="lg:w-full rounded mt-3">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- //ANCHOR - TECNOLOGIA -->
    <div id="technologies"></div>
    <div class="w-full mx-auto px-4 py-6 md:py-10">
        <div class="flex items-center space-x-2">
            <button class="text-white font-bold py-2 px-4 rounded">
                <span id="technologies" class="flex items-center justify-center">
                    <h2 class="text-3xl sm:text-3xl md:text-3xl lg:text-5xl font-bold mb-4 inline-flex items-center">
                        <?php echo $translations['technologies']; ?>
                    </h2>
                </span>
            </button>
            <img src="src/img_webp/logo-zap.webp" alt="sap" class="w-20" style="margin-top: -20px;">
        </div>

        <div class="" id="collapse-technologies">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4 px-2 md:px-4">
                <div>
                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPDMC')">
                        SAP DMC
                        <svg id="icon-SAPDMC" class="w-6 h-6 ml-2 animate__animated" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPDMC" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPDMC']; ?>
                    </p>

                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPMII')">
                        SAP MII
                        <svg id="icon-SAPMII" class="w-6 h-6 ml-2 animate__animated" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPMII" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPMII']; ?>
                    </p>

                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPPCO')">
                        SAP PCO
                        <svg id="icon-SAPPCO" class="w-6 h-6 ml-2 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPPCO" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPPCO']; ?>
                    </p>

                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPSecurity')">
                        SAP Security
                        <svg id="icon-SAPSecurity" class="w-6 h-6 ml-2 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPSecurity" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPSecurity']; ?>
                    </p>

                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPBTP')">
                        SAP BTP
                        <svg id="icon-SAPBTP" class="w-6 h-6 ml-2 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPBTP" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPBTP']; ?>
                    </p>

                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPBasis')">
                        SAP Basis
                        <svg id="icon-SAPBasis" class="w-6 h-6 ml-2 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPBasis" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPBasis']; ?>
                    </p>

                    <div class="inline-block text-white text-lg sm:text-xl md:text-3xl lg:text-3xl py-2 px-8 rounded mt-4 flex items-center cursor-pointer"
                        onclick="toggleVisibility('SAPIntegrationSuite')">
                        SAP Integration Suite
                        <svg id="icon-SAPIntegrationSuite" class="w-6 h-6 ml-2 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <p id="SAPIntegrationSuite" class="text-white text-base mt-2 px-10" style="display: none;">
                        <?php echo $translations['SAPIntegrationSuite']; ?>
                    </p>
                </div>
                <div class="flex justify-end">
                    <img src="src/img_webp/mini-hero.webp" alt="minihero"
                        class="object-cover object-center w-full h-96">
                </div>
            </div>
        </div>
    </div>



    <!-- //ANCHOR - TEXTO IMAGEN -->
    <div id="it-developers"></div>
    <div class="w-full p-6 md:p-20">
        <div class="p-4 md:p-8 mx-auto bg-white rounded-lg shadow-md mt-6">
            <div class="grid grid-cols-12 gap-4 md:gap-8">
                <div class="col-span-12 md:col-span-7">
                    <p style="color: #2C3E91;" class="sm:text-xl md:text-base lg:text-3xl mt-6">

                        <span id="in"><?php echo $translations['in']; ?></span>

                        <strong><span style="color: #2C3E91;">IT
                                DEVELOPERS</span></strong>

                        <span id="developers">
                            <?php echo $translations['developers']; ?>
                            <img src="src/img_webp/logo-zap.webp" alt="sap" class="w-8 md:w-10">
                        </span>

                        <strong id="what">
                            <?php echo $translations['what']; ?>
                        </strong>
                        <span id="ask">
                            <?php echo $translations['ask']; ?>
                        </span>
                        <img src="src/img_webp/logo-zap.webp" alt="sap" class="w-8 md:w-10">
                    </p>
                </div>

                <div class="col-span-12 md:col-span-5">
                    <div class="lg:mt-6 md:mt-0">
                        <img src="src/img_webp/mini-hero2.webp" id="mini-elices"
                            class="object-cover object-center w-full h-96 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //ANCHOR - Confi­an en Nosotros -->

    <!-- <div class="w-full p-4 md:p-8 mt-6">
        <div class="mx-auto text-center">
            <h2 id="partner" class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-white">
                <?php // echo $translations['partner']; ?>
            </h2>
            <div class="flex flex-wrap justify-center items-center mb-8 bg-white rounded-lg shadow-md p-4">
                <img src="src/img_webp/partner/partner4_webp_webp.webp" alt="Logo 2" class="w-16 sm:w-20 md:w-24 m-2">
            </div>
        </div>
    </div> -->


    <!-- //ANCHOR - TEXTO IMAGEN -->
    <div class="w-full servicios mx-auto px-4">
        <button class="text-white font-bold px-4 rounded" type="button" data-collapse-toggle="collapse-servicios">
            <span id="about-us" class="flex items-center justify-center">
                <h2 class="text-3xl sm:text-3xl md:text-3xl lg:text-5xl font-bold mb-4 inline-flex items-center">
                    <?php echo $translations['about-us']; ?>
                </h2>
            </span>
        </button>
    </div>


    <div class="w-full p-6 md:p-20">
        <div class="p-4 md:p-8 mx-auto bg-white rounded-lg shadow-md">
            <div class="grid grid-cols-12 gap-4 md:gap-8">
                <div class="col-span-12 md:col-span-7">
                    <div class="flex items-center mb-4">
                        <img src="src/img_webp/logo-itdeveloper.png" alt="mini-elices"
                            class="w-40 md:w-22 lg:w-40 h-auto">

                    </div>
                    <div>
                        <p style="color: #2C3E91;" class="sm:text-xl md:text-base lg:text-3xl mt-6">
                            <span id="businnes"><?php echo $translations['businnes']; ?></span>
                            <strong id="outsourcing"><?php echo $translations['outsourcing']; ?></strong>
                            <span id="sap"><?php echo $translations['sap']; ?></span>
                        </p>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-5">
                    <div class="lg:mt-6 md:mt-0">
                        <img src="src/img_webp/mini-hero3.webp" id="manos"
                            class="object-cover object-center w-full h-96 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- //ANCHOR - CONTACTO -->
    <div id="contact-menu"></div>
    <div class="w-full py-6 md:py-10 px-4 md:px-10 mx-auto mt-6">
        <div class="grid grid-cols-1 md:grid-cols-10 gap-4 md:gap-8">
            <div class="col-span-1 md:col-span-6 md:pr-8 text-white">
                <h2 id="contacto" class="text-3xl sm:text-4xl md:text-5xl font-bold mt-2">
                    <?php echo $translations['contacto']; ?>
                </h2>
            </div>

            <div class="col-span-1 md:col-span-4 w-full md:w-auto p-4 rounded-lg">
                <form class="bg-teal-600 p-4 sm:p-6 md:p-8 rounded-lg shadow-lg div-gradiente-vertical md:mt-0">
                    <div class="mb-4">
                        <label for="name" class="block text-white text-sm font-bold mb-2">
                            <span id="nombre"><?php echo $translations['nombre']; ?></span>
                        </label>
                        <input type="text" id="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-white text-sm font-bold mb-2">
                            <span id="correo"><?php echo $translations['correo']; ?></span>


                        </label>
                        <input type="email" id="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-white text-sm font-bold mb-2">
                            <span id="mensaje"><?php echo $translations['mensaje']; ?></span>

                        </label>
                        <textarea id="message"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder=""></textarea>
                    </div>
                    <div class="flex items-center justify-center">
                        <button
                            class="bg-purple-900 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            <span id="enviar"><?php echo $translations['enviar']; ?></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- //ANCHOR - FOOTER -->

    <div class="w-full py-10 px-10 flex justify-between items-center">
        <div class="flex items-center">
            <img src="src\img_webp\logo-footer.webp" alt="Logo" class="h-auto" width="120">
        </div>
        <div class="flex items-center">
            <a href="https://www.linkedin.com/company/it-developers-main/" target="_blank">
                <img src="src\img_webp\linkedin.webp" alt="Logo" class="w-auto h-auto"></a>
        </div>
    </div>









    <?php
} else {
    echo "Translations not loaded.";
}
?>

    <script src="src\js\main.js"></script>

</body>

</html>