<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
    <meta charset="utf-8">
    <title>Linus – elektronisch.dev</title>
    <meta name="viewport" content="initial-scale=1"/>
    <meta name="description" content="Yet another computer enthusiast"/>
    <meta name="referrer" content="no-referrer">

    <meta property="og:url" content="https://elektronisch.dev/"/>
    <meta property="og:title" content="Linus – elektronisch.dev"/>
    <meta property="og:description" content="Yet another computer enthusiast"/>
    <meta property="og:image" content="https://elektronisch.dev/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="<?= $language ?>"/>

    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@elektr0nisch"/>
    <meta property="twitter:creator" content="@elektr0nisch"/>

    <link rel="shortcut icon" type="image/webp" href="/assets/img/logo.webp"/>
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//matomo.elektronisch.dev/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->
</head>

<body>
<p><?php include_once 'language.php' ?></p>