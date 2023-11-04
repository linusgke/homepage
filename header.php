<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
    <meta charset="utf-8">
    <title>Linus Groschke – linus.bayern</title>
    <meta name="viewport" content="initial-scale=1"/>
    <meta name="description"
          content="Linus Groschke, *2003, lebt in Augsburg. Dort besucht er aktuell die dreizehnte Klasse der Freien Waldorfschule Augsburg. Er engagiert sich als Hobby-Programmierer. Bei der SSV Augsburg, bei Fridays For Future und im Klimacamp Augsburg ist er politisch aktiv."/>
    <meta name="referrer" content="no-referrer">

    <meta property="og:url" content="https://linus.bayern/"/>
    <meta property="og:title" content="Linus Groschke – hobby programmer – linus.bayern"/>
    <meta property="og:description" content="Linus Groschke, *2003, lebt in Augsburg."/>
    <meta property="og:image" content="https://linus.bayern/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="<?= $language ?>"/>

    <link rel="shortcut icon" type="image/webp" href="/assets/img/logo.webp"/>
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = "//matomo.elektronisch.dev/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->
</head>

<body>
<p><?php include_once 'language.php' ?></p>