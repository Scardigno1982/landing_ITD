<?php
// index.php
session_start();
require "lang/main.php";

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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-4">
        <div class="flex justify-end">
            <a href="?lang=en" class="px-4 py-2 <?php echo $lang == 'en' ? 'text-blue-500' : 'text-gray-500'; ?>">English</a>
            <a href="?lang=es" class="px-4 py-2 <?php echo $lang == 'es' ? 'text-blue-500' : 'text-gray-500'; ?>">Español</a>
        </div>
        <h1 class="text-4xl font-bold mb-4"><?php echo $translations['welcome']; ?></h1>
        <p class="text-lg"><?php echo $translations['description']; ?></p>
    </div>
</body>
</html>
