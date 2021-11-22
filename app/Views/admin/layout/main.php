<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes, shrink-to-fit=no,minimal-ui">
    <title>Model Arıyorum Panel</title>
    <meta name="description" content="meta_desc">
    <?php /*
    <meta name="keywords" content="meta_keyw">
	*/ ?>
    <meta name="subject" content="meta_desc">
    <meta name="copyright" content="Mutfak Yapım Dijital Reklam Ajansı">
    <meta name="language" content="TR">
    <meta name="robots" content="all"/>
    <meta name="revised" content="<?= date("Y-m-d H:i:s") ?>"/>
    <meta name="abstract" content="meta_desc">
    <meta name="topic" content="meta_desc">
    <meta name="summary" content="meta_desc">
    <meta name="Classification" content="Business">
    <meta name="author" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="designer" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="copyright" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com 2021 &copy; Tüm Hakları Saklıdır.">
    <meta name="reply-to" content="info@mutfakyapim.com">
    <meta name="owner" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="url" content="<?= base_url() ?>">
    <meta name="identifier-URL" content="<?= base_url() ?>">
    <meta name="directory" content="submission">
    <meta name="category" content="Article">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="1 days">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:image:secure" content="meta_image">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:url" content="<?= base_url() ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="meta_title"/>
    <meta property="og:description" content="meta_desc"/>
    <meta property="og:image" content="meta_image"/>
    <meta property="og:image:secure_url" content="meta_image"/>
    <meta name="twitter:title" content="meta_title">
    <meta name="twitter:description" content="meta_desc">
    <meta name="twitter:image" content="meta_image">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="meta_title">
    <meta name="twitter:image:alt" content="meta_title">
    <meta name="googlebot" content="archive,follow,imageindex,index,odp,snippet,translate">
    <meta http-equiv="Cache-Control" content="public,max-age=1800,max-stale,stale-while-revalidate=86400,stale-if-error=259200" rem="max-age=30minutes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MSThemeCompatible" content="no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="translucent black"/>
    <meta name="msapplication-navbutton-color" content="translucent black"/>
    <meta name="mssmarttagspreventparsing" content="true"/>
    <meta name="theme-color" content="#b1cff4"/>
    <meta http-equiv="Page-Enter" content="RevealTrans(Duration=1.0,Transition=1)"/>
    <meta http-equiv="Page-Exit" content="RevealTrans(Duration=1.0,Transition=1)"/>
    <meta name="publisher" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com"/>
    <link rel="canonical" href="<?= base_url() ?>"/>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!-- #Meta Tags -->

    <!-- General CSS Files -->

    <!-- Bootstrap -->
    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript>
        <?= link_tag("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css") ?>
    </noscript>
    <!-- #Bootstrap -->

    <!-- FontAwesome -->
    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript>
        <?= link_tag("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css") ?>
    </noscript>
    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/v4-shims.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript>
        <?= link_tag("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/v4-shims.min.css") ?>
    </noscript>
    <!-- #FontAwesome -->

    <!-- Selectric -->
    <link rel="preload" type="text/css" href="<?= base_url("public/admin/css/selectric.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript>
        <?= link_tag("public/admin/css/selectric.css") ?>
    </noscript>
    <!-- #Selectric -->

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <?= link_tag("public/admin/css/style.css") ?>
    <?= link_tag("public/admin/css/components.css") ?>

    <!-- Style Section -->
    <?php $this->renderSection('style') ?>
    <!-- #Style Section -->
</head>

<body>
<div id="app">
    <?php $this->renderSection('content') ?>
</div>

<!-- General JS Scripts -->

<!-- Jquery -->
<?= script_tag("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js") ?>
<!-- #Jquery -->

<!-- Bootstrap Bundle -->
<?= script_tag("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/js/bootstrap.bundle.min.js") ?>
<!-- Bootstrap Bundle -->

<!-- Moment -->
<?= script_tag("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js") ?>
<!-- #Moment -->

<!-- Jquery Nice Scroll -->
<?= script_tag("https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js") ?>
<!-- #Jquery Nice Scroll -->

<!-- Stisla -->
<?= script_tag("public/admin/js/stisla.js") ?>
<!-- #Stisla -->

<!-- Jquery Pwstrength -->
<?= script_tag("https://cdnjs.cloudflare.com/ajax/libs/i18next/21.2.4/i18next.min.js") ?>
<?= script_tag("https://cdnjs.cloudflare.com/ajax/libs/pwstrength-bootstrap/3.1.0/pwstrength-bootstrap.min.js") ?>
<!-- #Jquery Pwstrength -->

<!-- Jquery Selectric -->
<script async defer src="<?= base_url("public/admin/js/jquery.selectric.min.js") ?>"></script>
<!-- #Jquery Selectric -->

<!-- Template JS File -->
<?= script_tag("public/admin/js/scripts.js") ?>
<?= script_tag("public/admin/js/custom.js") ?>

<!-- Page Specific JS File -->
<?php $this->renderSection('script') ?>
</body>
</html>
