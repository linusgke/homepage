<?php
$ACCEPTED_LANGUAGES = ['en', 'de'];

$language = isset($_GET['lang']) ? $_GET['lang'] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if (!in_array($language, $ACCEPTED_LANGUAGES))
    $language = 'en';

$path = isset($_GET['path']) ? $_GET['path'] : 'index';

$filePath = $path . "_{$language}.php";
if (file_exists($filePath)) {
    require_once $filePath;
} else {
    require_once "404_{$language}.php";
}