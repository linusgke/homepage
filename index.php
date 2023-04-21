<?php
$ACCEPTED_LANGUAGES = ['en', 'de'];

// Determine language or default to english if foreign
$language = $_GET['lang'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if (!in_array($language, $ACCEPTED_LANGUAGES))
    $language = 'en';

// Determine path or default to index if not given
$path = $_GET['path'] ?? 'index';

// Include page parts in order
require_once 'header.php';

$filePath = $path . "_{$language}.php";
if (file_exists($filePath)) {
    require_once $filePath;
} else {
    // Show 404 page if requested page is not found
    require_once "404_{$language}.php";
}

require_once "footer_{$language}.php";
