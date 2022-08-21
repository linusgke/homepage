<?php
$ACCEPTED_LANGUAGES = ['de', 'en'];

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if (!in_array($language, $ACCEPTED_LANGUAGES))
    $language = 'en';

$path = isset($_GET['path']) ? $_GET['path'] : 'index';
require_once $path . "_{$language}.html";