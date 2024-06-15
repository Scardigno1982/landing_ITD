<?php

// lang/config.php
function loadLanguage($lang) {
    $langFile = __DIR__ . '/' . $lang . '.php';
    if (file_exists($langFile)) {
        return include $langFile;
    }
    return include __DIR__ . '/en.php'; // Default to English
}