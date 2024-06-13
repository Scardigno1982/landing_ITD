<?php
// index.php
session_start();
require 'lang/main.php';

// Detect language change
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Set default language to English if none is set
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
$translations = loadLanguage($lang);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilanguage Page</title>
    <link href="js/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="bg-custom-gradient text-gray-800">
    <header id="content" >
        <div class="container mx-auto flex justify-between items-center">
        <!-- Logo a la izquierda -->
            <div>
                <img id="left-logo" src="#" alt="Left Logo" class="w-60 h-auto">
            </div>

            <!-- Logo a la derecha -->
            <div>
                <!-- <img id="right-logo" src="#" alt="Right Logo" class="w-20 h-auto" style="margin-top:-20px;"> -->
            </div>
        </div>
    </header>


    <!-- Hero Section con Imagen de Fondo -->
    <div class="bg-cover bg-center h-screen slider-hero" style="background-image: url('src/img/slider_webp.webp');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-20">
            <div class="text-center text-white px-6 md:px-12">
                <h2 class="text-xl md:text-3xl font-bold mb-4">Construimos conexiones que te llevan a donde querés estar</h2>
            </div>
        </div>
    </div>

    </div>
</body>
</html>
