<?php
session_start();
require 'main.php';

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$_SESSION['lang'] = $lang;
$translations = loadLanguage($lang);

echo json_encode($translations);
?>
