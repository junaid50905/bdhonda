<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110954706-4"
        integrity="sha384-h4YDlAvKw2XzafahF6UwB6q3T4h9CFMdbtb+L8c1Vz3mJwTosB0W5CSl9qa2RnJ6" crossorigin="anonymous">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-110954706-4');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php

use Cake\Routing\Router;

 if(isset($page_title)){echo $page_title;}else{ echo 'Bangladesh Honda Private Limited';} ?></title>
    <meta name="description"
        content="<?php  if(isset($meta_description)){ echo $meta_description;}else{ echo 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.';} ?>" />
    <meta name="keywords"
        content="<?php if(isset($meta_keywords)){ echo $meta_keywords;}else{ echo 'Honda, Bike, Two wheelers, Scooter, Stylish Bike';} ?>" />
    <link rel="icon" href="<?php echo Router::url('/', true); ?>assets/public/images/favicon.png" type="image/x-icon" />


    <!--<link href="<?php echo Router::url('/', true); ?>assets/public/css/bootstrap.min.css" type="text/css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




    <link href="<?php echo Router::url('/', true); ?>assets/public/css/animate.css" type="text/css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/honda-style.css" type="text/css"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Router::url('/', true); ?>assets/public/css/owl.carousel.css"
        type="text/css">
    <link href="<?php echo Router::url('/', true); ?>assets/public/font-awesome-4.6.3/css/font-awesome.min.css"
        type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        integrity="sha384-4eyeBLEytbCKguVxhTDi+yKnTLFSPTw1gMnl6j2hry9+5bHLzl0CbNfd5N/orLVx" crossorigin="anonymous"
        rel="stylesheet" async>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo Router::url('/', true); ?>assets/public/js/jquery.min.js" type="text/javascript"></script>
    <!-- Lightning Bolt Begins -->
    <!--    <script type="text/javascript" id="lightning_bolt" src="../cdn-akamai.mookie1.com/LB/LightningBolt.js" async></script>-->
    <!-- Lightning Bolt Ends -->
    <link href="https://www.bdhonda.com/assets/public/css/costom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RR1S6T3XP9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-RR1S6T3XP9');
    </script>
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "1614097962014949");
    chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v15.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        js.integrity = 'sha384-OLBgp1GsljhM2TJ+sbHjaiH9txEUvgdDTAzHv2P24donTt6/529l+9Ua0vFImLlb';
        js.crossorigin = 'anonymous';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body>





    <div class="container">

        <header>
            <div class="row">

                <button class="my-button" id="my-button">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="col-md-4 main-logo"><a class="navbar-brand"
                        href="<?php echo Router::url('/', true); ?>"><img
                            src="<?php echo Router::url('/', true); ?>assets/public/images/logo.png" /></a></div>
                <nav class="navbar navbar-default col-md-8" role="navigation">
                    <!--<div class="navbar-header">-->
                    <!--    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
                    <!--        <span class="sr-only">Toggle navigation</span>-->
                    <!--        <span class="icon-bar"></span>-->
                    <!--        <span class="icon-bar"></span>-->
                    <!--        <span class="icon-bar"></span>-->
                    <!--    </button>-->
                    <!--</div>-->
                    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
                    <ul class="mynav">
                        <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                        <li><a href="<?php echo Router::url('/', true); ?>media-center/press-release">Media Center</a>
                        </li>
                        <li><a href="<?php echo Router::url('/', true); ?>reach-us">Reach Us</a></li>
                        <li><a
                                href="<?php echo Router::url('/https://careers.hondaasiaoceania.com/go/BHL-Jobs/665344/', true); ?>career">Career</a>
                        </li>
                        <li><a target="_blank" href="https://world.honda.com/index.html">Honda World Links</a></li>
                    </ul>
                    <!--</div>-->
                </nav>
                <!--<a href="http://world.honda.com" class="honda_power_logo" title="Honda" target="_blank"><img src="<?php //echo Router::url('/', true); ?>assets/public/images/honda-power.png"></a>-->
        </header>
        <div class="topheader">
            <div class="menuouter">
                <div class="menurow" id="nivel-1" menu_level="0">
                    <div class="cont-nivel-1 col-md-offset-1">
                        <a id="link_productos" rel="menu_Motorcycle" href="javascript:;" data-id='menu1'>Products</a>
                        <a id="link_services" rel="menu_services" href="javascript:;" data-id='menu1'>Service &
                            Spare Parts</a>
                        <a id="link_safety" rel="menu_safety"
                            href="<?php echo Router::url('/', true); ?>Safety-Bangladesh" data-id='menu1'>Safety
                            Bangladesh</a>
                        <a id="link_network" rel="menu_network" href="javascript:;" data-id='menu1'>Dealer
                            Network</a>
                        <!--                        <a href="http://usercard.bdhonda.com" target="_blank" data-id='menu1'>Honda User Card</a>-->
                        <a id="link_about" rel="menu_about" href="javascript:;" data-id='menu1'>About Us</a>
                        <a href="<?php echo Router::url('/', true); ?>yes-award" data-id='menu1'>Y-E-S Award</a>
                    </div>
                </div>
                <div class="menurowsecond product-box-menu" id="menu_productos" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a id="link_Motorcycle" rel="menu_Motorcycle" href="javascript:;" data-id='menu2'>Motorcycle</a>
                    </div>
                </div>
                <div class="menurowsecond service-menubox" id="menu_services" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>services/honda-service" data-id='menu2'
                            title="Honda Service">Honda Service</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>services/maintenance" data-id='menu2'
                            title="Maintenance">Maintenance</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>services/warranty" data-id='menu2'
                            title="Warranty">Warranty</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>services/genuine-parts" data-id='menu2'
                            title="Genuine Parts">Genuine Parts</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>services/engine-oil" data-id='menu2'
                            title="Engine Oil">Engine Oil</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>services/accessory" data-id='menu2'
                            title="Accessory">Accessory</a>
                        <!--                        <a id="link_hondaShield" rel="menu_hondaShield" href="--><?php //echo Router::url('/', true); ?>
                        <!--services/owners-manual" data-id='menu2' title="Owner's Manual">Owner's Manual</a>-->
                    </div>
                </div>
                <div class="menurowsecond safety-menubox" id="menu_safety" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>Safety-Bangladesh" data-id='menu2'
                            title="Safety Approach">Safety Approach</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>safety-bd/safety-initiatives" data-id='menu2'
                            title="Safety Initiatives">Safety Initiatives</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?php echo Router::url('/', true); ?>safety-bd/safety-education" data-id='menu2'
                            title="Safety Education Tips">Safety Education Tips</a>
                    </div>
                </div>
                <div class="menurowsecond network-nenubox" id="menu_network" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a href="<?php echo Router::url('/', true); ?>dealer-network/dealer-locator"
                            data-id='menu2'>Dealer Locator</a>
                        <a href="<?php echo Router::url('/', true); ?>dealer-network/apply-for-dealership"
                            data-id='menu1'>Apply for Dealership</a>
                        <!--                        <a href="--><?php //echo Router::url('/', true); ?>
                        <!--dealer-network/parts-service-locator" data-id='menu2'>Parts/Service Locator</a>-->
                    </div>
                </div>
                <div class="menurowsecond about-menubox" id="menu_about" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a href="<?php echo Router::url('/', true); ?>about-us/about-bhl" data-id='menu2'>About
                            BHL</a>
                        <a href="<?php echo Router::url('/', true); ?>about-us/about-honda" data-id='menu2'>About
                            Honda</a>
                        <a href="<?php echo Router::url('/', true); ?>about-us/philosophy"
                            data-id='menu2'>Philosophy</a>
                        <a href="<?php echo Router::url('/', true); ?>about-us/innovation"
                            data-id='menu2'>Innovation</a>
                        <a href="<?php echo Router::url('/', true); ?>about-us/motorsports"
                            data-id='menu2'>Motorsports</a>
                        <a href="<?php echo Router::url('/', true); ?>about-us/honda-history" data-id='menu2'>Honda
                            History</a>
                        <a href="<?php echo Router::url('/', true); ?>about-us/heritage" data-id='menu2'>Heritage</a>
                    </div>
                </div>
                <div class="graybar" id="menu_Motorcycle" menu_level="1" style="display: none;">
                    <div id="motercycle">
                        <?php foreach ($mainMenuProducts as $menuProduct): ?>
                        <div class="item"><a
                                href="<?php echo Router::url('/', true); ?>product/<?php echo $menuProduct['Product']['slug'] ?>/index"><img
                                    src="<?php echo Router::url('/', true); ?>assets/public/images/thumb/<?php echo $menuProduct['Product']['product_thumb'] ?>"
                                    alt=""></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


        <script>
        const button = document.getElementById("my-button");
        const nav = document.getElementById("mynav");

        button.addEventListener('click', () => {
            nav.classList.toggle('show');
        });
        </script>
