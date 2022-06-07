<?php
session_start();
require_once 'functions.php';
global $_TEXT_DATA_;
$active_lang = get_active_lang();
init_language($active_lang);
?>
    <!DOCTYPE html>
    <!--[if IE 8 ]>
    <html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo strtolower($active_lang) . '-' . strtoupper($active_lang); ?>" lang="<?php echo strtolower($active_lang) . '-' . strtoupper($active_lang); ?>"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo strtolower(str_replace('cz', 'cs', $active_lang)) . '-' . strtoupper($active_lang); ?>" lang="<?php echo strtolower(str_replace('cz', 'cs', $active_lang)) . '-' . strtoupper($active_lang); ?>"><!--<![endif]-->
    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?php echo $_TEXT_DATA_['section_meta']['title'] ?></title>

        <meta name=description content="<?php echo $_TEXT_DATA_['section_meta']['description'] ?>">
        <meta property="og:url" content="<?php echo $_TEXT_DATA_['section_meta']['url'] ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $_TEXT_DATA_['section_meta']['title'] ?>"/>
        <meta property="og:description" content="<?php echo $_TEXT_DATA_['section_meta']['description'] ?>"/>
        <meta property="description" content="<?php echo $_TEXT_DATA_['section_meta']['description'] ?>"/>
        <meta property="og:image:type" content="image/jpeg"/>
        <meta property="og:locale" content="<?php echo strtolower($active_lang); ?>"/>
        <meta property="og:locale:alternate" content="sk"/>
        <meta property="og:image:width" content="600"/>
        <meta property="og:image:height" content="600"/>
        <meta property="og:image:alt" content="PERRY TALENTS"/>
        <meta property="og:image" content="<?php echo $_TEXT_DATA_['section_meta']['image'] ?>"/>
        <meta property="fb:app_id" content="472383030261481" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="stylesheets/perry.min.css?ver=3">
        <link rel="stylesheet" href="https://use.typekit.net/rlf5xbf.css">
        <!-- Favicon and touch icons  -->
        <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
        <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="icon/favicon.png" rel="shortcut icon">

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '159001372062973');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=159001372062973&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
        <?php
        $additional_files = $_GET['additional_files'];

        if (isset($additional_files)){
            foreach ($additional_files as $additional_file){
                echo $additional_file;
            }
        }

        ?>
    </head>

    <body class="header-sticky">

    <div id="mainLoader" class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>

    <div class="body-content">