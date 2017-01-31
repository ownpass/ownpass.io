<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msapplication-config" content="browserconfig.xml">
<meta name="theme-color" content="#15B588">

<meta name="apple-mobile-web-app-title" content="OwnPass">
<meta name="apple-mobile-web-app-capable" content="yes">

<?php

if (!isset($headTitle)) {
    $headTitle = 'OwnPass, self hosted, open source password management';
}

echo sprintf('<title>%s</title>', $headTitle);

?>

<link rel="stylesheet" href="/css/ownpass.min.css">
<link rel="manifest" href="/manifest.json">

<link rel="apple-touch-icon" sizes="57x57" href="/img/apple/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/apple/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/apple/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/apple/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/apple/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/apple/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/apple/apple-icon-180x180.png">

<link rel="apple-touch-startup-image" href="/img/apple/launch.png">

<link rel="mask-icon" href="/svg/safari-pinned-tab.svg" color="red">
<link rel="shortcut icon" href="/img/favicons/favicon.ico"/>

<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/img/android/android-icon-192x192.png">
<link rel="icon" type="image/vnd.microsoft.icon" href="/img/favicons/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700" rel="stylesheet" type="text/css">

<script src="/js/ownpass.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-87011316-1', 'auto');
    ga('send', 'pageview');
</script>

