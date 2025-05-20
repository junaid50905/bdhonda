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

    <?php echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken'));  ?>

    <title><?php if (isset($page_title)) {
                echo $page_title;
            } else {
                echo 'Bangladesh Honda Private Limited';
            } ?></title>
    <meta name="description"
        content="<?php if (isset($meta_description)) {
                        echo $meta_description;
                    } else {
                        echo 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.';
                    } ?>" />
    <meta name="keywords"
        content="<?php if (isset($meta_keywords)) {
                        echo $meta_keywords;
                    } else {
                        echo 'Honda, Bike, Two wheelers, Scooter, Stylish Bike';
                    } ?>" />
    <?= $this->Html->meta('icon', '/assets/public/images/favicon.png', ['type' => 'image/x-icon']) ?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?= $this->Html->css('/assets/public/css/animate') ?>
    <?= $this->Html->css('/assets/public/css/honda-style') ?>
    <?= $this->Html->css('/assets/public/css/owl.carousel') ?>
    <?= $this->Html->css('/assets/public/font-awesome-4.6.3/css/font-awesome.min') ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        integrity="sha384-4eyeBLEytbCKguVxhTDi+yKnTLFSPTw1gMnl6j2hry9+5bHLzl0CbNfd5N/orLVx" crossorigin="anonymous"
        rel="stylesheet" async>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?= $this->Html->script('/assets/public/js/jquery.min') ?>
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

                <div class="col-md-4 main-logo">
                    <a class="navbar-brand" href="<?= $this->Url->build('/') ?>">
                        <?= $this->Html->image('/assets/public/images/logo.png') ?>
                    </a>
                </div>

                <nav class="navbar navbar-default col-md-8" role="navigation">
                    <ul class="mynav">
                        <li><a href="<?= $this->Url->build('/') ?>">Home</a></li>
                        <li><a href="<?= $this->Url->build('/media-center/press-release') ?>">Media Center</a></li>
                        <li><a href="<?= $this->Url->build('/reach-us') ?>">Reach Us</a></li>
                        <li><a href="https://careers.hondaasiaoceania.com/go/BHL-Jobs/665344/" target="_blank">Career</a></li>
                        <li><a href="https://world.honda.com/index.html" target="_blank">Honda World Links</a></li>
                    </ul>
                </nav>

        </header>

        <div class="topheader">
            <div class="menuouter">
                <div class="menurow" id="nivel-1" menu_level="0">
                    <div class="cont-nivel-1 col-md-offset-1">
                        <a id="link_productos" rel="menu_Motorcycle" href="javascript:;" data-id='menu1'>Products</a>
                        <a id="link_services" rel="menu_services" href="javascript:;" data-id='menu1'>Service & Spare Parts</a>
                        <a id="link_safety" rel="menu_safety" href="<?= $this->Url->build('/Safety-Bangladesh') ?>" data-id='menu1'>Safety Bangladesh</a>
                        <a id="link_network" rel="menu_network" href="javascript:;" data-id='menu1'>Dealer Network</a>
                        <a id="link_about" rel="menu_about" href="javascript:;" data-id='menu1'>About Us</a>
                        <a href="<?= $this->Url->build('/yes-award') ?>" data-id='menu1'>Y-E-S Award</a>
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
                            href="<?= $this->Url->build('/services/honda-service') ?>" data-id='menu2'
                            title="Honda Service">Honda Service</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/services/maintenance') ?>" data-id='menu2'
                            title="Maintenance">Maintenance</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/services/warranty') ?>" data-id='menu2'
                            title="Warranty">Warranty</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/services/genuine-parts') ?>" data-id='menu2'
                            title="Genuine Parts">Genuine Parts</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/services/engine-oil') ?>" data-id='menu2'
                            title="Engine Oil">Engine Oil</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/services/accessory') ?>" data-id='menu2'
                            title="Accessory">Accessory</a>
                    </div>
                </div>

                <div class="menurowsecond safety-menubox" id="menu_safety" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/Safety-Bangladesh') ?>" data-id='menu2'
                            title="Safety Approach">Safety Approach</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/safety-bd/safety-initiatives') ?>" data-id='menu2'
                            title="Safety Initiatives">Safety Initiatives</a>
                        <a id="link_hondaShield" rel="menu_hondaShield"
                            href="<?= $this->Url->build('/safety-bd/safety-education') ?>" data-id='menu2'
                            title="Safety Education Tips">Safety Education Tips</a>
                    </div>
                </div>

                <div class="menurowsecond network-nenubox" id="menu_network" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a href="<?= $this->Url->build('/dealer-network/dealer-locator') ?>" data-id='menu2'>Dealer Locator</a>
                        <a href="<?= $this->Url->build('/dealer-network/apply-for-dealership') ?>" data-id='menu1'>Apply for Dealership</a>
                    </div>
                </div>

                <div class="menurowsecond about-menubox" id="menu_about" menu_level="1" style="display: none;">
                    <div class="cont-nivel-2">
                        <a href="<?= $this->Url->build('/about-us/about-bhl') ?>" data-id='menu2'>About BHL</a>
                        <a href="<?= $this->Url->build('/about-us/about-honda') ?>" data-id='menu2'>About Honda</a>
                        <a href="<?= $this->Url->build('/about-us/philosophy') ?>" data-id='menu2'>Philosophy</a>
                        <a href="<?= $this->Url->build('/about-us/innovation') ?>" data-id='menu2'>Innovation</a>
                        <a href="<?= $this->Url->build('/about-us/motorsports') ?>" data-id='menu2'>Motorsports</a>
                        <a href="<?= $this->Url->build('/about-us/honda-history') ?>" data-id='menu2'>Honda History</a>
                        <a href="<?= $this->Url->build('/about-us/heritage') ?>" data-id='menu2'>Heritage</a>
                    </div>
                </div>



                <div class="graybar" id="menu_Motorcycle" menu_level="1" style="display: none;">
                    <div id="motercycle">
                        <?php if (!empty($mainMenuProducts)): ?>
                            <?php foreach ($mainMenuProducts as $menuProduct): ?>
                                <div class="item">
                                    <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'index', $menuProduct->slug]) ?>">
                                        <img src="<?= $this->Url->build('/assets/public/images/thumb/' . $menuProduct->product_thumb) ?>" alt="<?= h($menuProduct->slug) ?>">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No products available.</p>
                        <?php endif; ?>
                    </div>
                </div>


            </div>
        </div>


        <?= $this->fetch('content') ?>



        <script>
            const button = document.getElementById("my-button");
            const nav = document.getElementById("mynav");

            button.addEventListener('click', () => {
                nav.classList.toggle('show');
            });
        </script>

        <footer>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div id="removeadd">
                        <div class="removeadd-btn">
                            <div id="removeadd-btn" class="btn2">&nbsp;</div>
                        </div>
                        <div class="morediv" style="display:none;">
                            <div class="row">
                                <div class="accordion" id="accordionExample">
                                    <!-- one -->
                                    <div class="accordion-item col-md-2 col-sm-2">
                                        <h2 class="accordion-header panel-default" id="headingOne">
                                            <a class="accordion-button panel-default" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="glyphicon glyphicon-plus"></i>Products
                                            </a>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show panel-body"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body panel-body">
                                                <div class="block">
                                                    <ul>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'shine-100']) ?>" title="Shine 100">Shine 100</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'dream-110']) ?>" title="Dream Neo">Dream 110</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'livo']) ?>" title="Livo">Livo</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'sp-125']) ?>" title="Wave Alpha">SP 125</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'sp-160']) ?>" title="SP 160">SP 160</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'xblade']) ?>" title="CB Trigger">XBlade</a></li>
                                                        <!--<li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'cb-hornet-160r']) ?>" title="CB Hornet 160R">CB Hornet 160R</a></li>-->
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'hornet-2-0']) ?>" title="Hornet 2.0">Hornet 2.0</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'cbr-150r']) ?>" title="CBR 150R">CBR 150R</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'dio']) ?>" title="Dio">Dio</a></li>
                                                        <!--<li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'cd-80']) ?>" title="CD 80">CD 80</a></li>-->
                                                        <!--<li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'cb-trigger']) ?>" title="CB Trigger">CB Trigger</a></li>-->
                                                        <!--<li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'view', 'cb-shine-sp']) ?>" title="CB Shine SP">CB Shine SP</a></li>-->
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- two -->
                                    <div class="accordion-item col-md-2 col-sm-2">
                                        <h2 class="accordion-header panel-default" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                <i class="glyphicon glyphicon-plus"></i> Service & Spare Parts
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body panel-body">
                                                <div class="block">

                                                    <ul>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'honda-service']) ?>" title="Honda Service">Honda Service</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'maintenance']) ?>" title="Maintenance">Maintenance</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'warranty']) ?>" title="Warranty">Warranty</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'genuine-parts']) ?>" title="Genuine Parts">Genuine Parts</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'engine-oil']) ?>" title="Engine Oil">Engine Oil</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'accessory']) ?>" title="Accessory">Accessory</a></li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- three -->
                                    <div class="accordion-item col-md-2 col-sm-2">
                                        <h2 class="accordion-header panel-default" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                <i class="glyphicon glyphicon-plus"></i> Dealer Network
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body panel-body">
                                                <div class="block">

                                                    <ul>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'DealerNetwork', 'action' => 'dealerLocator']) ?>" title="Dealer Locator">Dealer Locator</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'DealerNetwork', 'action' => 'applyForDealership']) ?>" title="Apply for Dealership">Apply for Dealership</a></li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- four -->
                                    <div class="accordion-item col-md-2 col-sm-2">
                                        <h2 class="accordion-header panel-default" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                                <i class="glyphicon glyphicon-plus"></i>About Us
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body panel-body">
                                                <div class="block">

                                                    <ul>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'aboutBhl']) ?>" title="About BHL">About BHL</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'aboutHonda']) ?>" title="About Honda">About Honda</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'philosophy']) ?>" title="Philosophy">Philosophy</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'innovation']) ?>" title="Innovation">Innovation</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'motorsports']) ?>" title="Motorsports">Motorsports</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'hondaHistory']) ?>" title="Honda History">Honda History</a></li>
                                                        <li><a href="<?= $this->Url->build(['controller' => 'AboutUs', 'action' => 'heritage']) ?>" title="Heritage">Heritage</a></li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- five -->
                                    <div class="accordion-item col-md-2 col-sm-2">
                                        <div id="collapseFive" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body panel-body">
                                                <div class="block" style="float:left; text-align:left">
                                                    <a href="http://sustainability.honda.asia/" target="_blank">
                                                        <img src="<?= $this->Url->build('/assets/public/images/blueskies.png') ?>" style="width: 85px;">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright-text">
                        <div class="col-md-5">© 2013-2025 Bangladesh Honda Private Limited All Rights Reserved.</div>
                        <div class="col-md-4">Follow Us <a href="https://www.facebook.com/bdhondaofficial/" target="blank"><img
                                    style="height: 20px;"
                                    src="<?= $this->Url->build('/assets/public/images/ico_fb.png') ?>"></a></div>
                        <div class="col-md-3"><span class="pull-right">Powered by <img
                                    src="<?= $this->Url->build('/assets/public/images/aamra-logo-black.png') ?>">
                                Infotainment Ltd.</span></div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <a href="#0" class="scrollup">&nbsp;</a>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"
        integrity="sha384-tCaroyJGGNXX/Fyr8bCSnl4Mxgw53EcnuqOpK01sL0CLeKhBY8q/7AVdfYk1AUG3" crossorigin="anonymous" async>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="<?= $this->Url->build('/assets/public/js/3deye.min.js') ?>"></script>
    <?= $this->fetch('script360View') ?>
    <?= $this->fetch('youtubeLightBox') ?>

    <!-- <script src="<?= $this->Url->build('/assets/public/js/bootstrap.min.js') ?>" type="text/javascript"></script> -->

    <script src="<?= $this->Url->build('/assets/public/js/wow.min.js') ?>" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/assets/public/js/owl.carousel.js') ?>" type="text/javascript"></script>

    <script src="<?= $this->Url->build('/assets/public/js/bootstrap-magnify.min.js') ?>" type="text/javascript"></script>

    <script src="<?= $this->Url->build('/assets/public/js/illbeback.min.js') ?>" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/assets/public/js/custom.js') ?>" type="text/javascript"></script>

    <script>
        new WOW().init();
    </script>

    <!-- responsive footer start -->
    <script>
        function handleAccordionClass() {
            if (window.innerWidth < 481) {
                document.querySelectorAll('.accordion-collapse').forEach(function(accordion) {
                    accordion.classList.remove('show');
                });
            } else {
                document.querySelectorAll('.accordion-collapse').forEach(function(accordion) {
                    accordion.classList.add('show');
                });
            }
        }
        window.onload = handleAccordionClass;
        window.onresize = handleAccordionClass;
    </script>
    <!-- responsive footer end -->

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#FraudulentRecruitmentModel').modal('show');

            $('#divisionList').on('change', function() {
                var $districtList = $('#districtList');
                $districtList.find('option').remove();
                $districtList.append('<option value="">Select District</option>');

                var $upazilaList = $('#upazilaList');
                $upazilaList.find('option').remove();
                $upazilaList.append('<option value="">Select Thana/Upazila</option>');

                var divisionId = $(this).val();
                $.ajax({
                    url: '<?= $this->Url->build('/dealers/ajaxDistrictsByDivision/') ?>',
                    cache: false,
                    type: 'POST',
                    data: {
                        divisionId: divisionId
                    },
                    success: function(data) {
                        // console.log(data);
                        $.each(data, function(key, value) {
                            if (value.Dealer.length != 0) {
                                $districtList.append('<option value=' + value.District.id +
                                    '>' + value.District.name + '</option>');
                            }
                        });
                    }
                });

            });
            $('#allDistrictList').on('change', function() {
                var $upazilaList = $('#upazilaList');
                $upazilaList.find('option').remove();
                $upazilaList.append('<option value="">Select Upazilla</option>');
                var divisionId = $('#divisionList').val();
                var districtId = $(this).val();
                $.ajax({
                    url: '<?= $this->Url->build('/dealers/ajaxUpazilasByDivisionAndDistrict/') ?>',
                    cache: false,
                    type: 'POST',
                    data: {
                        districtId: districtId,
                        divisionId: divisionId
                    },
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $upazilaList.append('<option value=' + value.Upazila.id + '>' +
                                value.Upazila.name + '</option>');
                        });
                    }
                });

            });
            $('#districtList').on('change', function() {
                var $upazilaList = $('#upazilaList');
                $upazilaList.find('option').remove();
                $upazilaList.append('<option value="">Select Thana/Upazila</option>');
                var divisionId = $('#divisionList').val();
                var districtId = $(this).val();
                $.ajax({
                    url: '<?= $this->Url->build('/dealers/ajaxUpazilasByDivisionAndDistrict/') ?>',
                    cache: false,
                    type: 'POST',
                    data: {
                        districtId: districtId,
                        divisionId: divisionId
                    },
                    success: function(data) {
                        //                    console.log(data);
                        $.each(data, function(key, value) {
                            if (value.Dealer.length != 0) {
                                $upazilaList.append('<option value=' + value.Upazila.id +
                                    '>' + value.Upazila.name + '</option>');
                            }
                        });
                    }
                });

            });

            $('.dealerSearch').on('change', function() {
                var divisionId = $('#divisionList').val();
                var districtId = $('#districtList').val();
                var upazilaId = $('#upazilaList').val();
                var dealerList = $('#dealer_result');
                dealerList.find('option').remove();
                dealerList.append('<option value="">Select Dealer *</option>');
                $.ajax({
                    url: '<?= $this->Url->build('/dealers/ajaxDealerDetails/') ?>',
                    cache: false,
                    type: 'POST',
                    data: {
                        divisionId: divisionId,
                        districtId: districtId,
                        upazilaId: upazilaId,
                        networkTypeId: 1
                    },
                    success: function(data) {
                        //                    console.log(data);
                        $.each(data, function(key, value) {
                            dealerList.append('<option value=' + value.Dealer.id + '>' +
                                value.Dealer.name + '</option>');
                            //                        dealerList.append('<div cass="row"><div class="repeat-dealor"><div class="col-md-6 col-sm-12 col-xs-12"><h4><label id="lblState">Dealer Network: </label> '+value.Dealer.name+'</h4><div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img src="<?= $this->Url->build('/assets/public/images/network/dealers/') ?>' + value.Dealer.photo + '" style="width:100%; height:auto;"></div><span>'+value.Dealer.name+'</span><p>'+value.Dealer.address+'</p><div class="repeat-dealor-height"><i class="fa fa-user"></i> '+value.Dealer.owner_name+'<br><i class="fa fa-phone"></i> '+value.Dealer.phone+'<br><i class="fa fa-envelope"></i><a href="mailto:' + value.Dealer.email + '"> ' + value.Dealer.email + '</a></div></div><div class="col-md-6 col-sm-12 col-xs-12">'+value.Dealer.google_map+'</div></div>');
                        });
                    }
                });

            });

            $('#dealerSearch').on('click', function() {
                var divisionId = $('#divisionList').val();
                var districtId = $('#districtList').val();
                var upazilaId = $('#upazilaList').val();
                var dealerList = $('#dealer_result');
                dealerList.html('');
                $.ajax({
                    url: '<?= $this->Url->build('/dealers/ajaxDealerDetails/') ?>',
                    cache: false,
                    type: 'POST',
                    data: {
                        divisionId: divisionId,
                        districtId: districtId,
                        upazilaId: upazilaId,
                        networkTypeId: 1
                    },
                    success: function(data) {
                        //                    console.log(data);
                        $.each(data, function(key, value) {
                            dealerList.append(
                                '<div class="row"><div class="repeat-dealer"><div class="col-md-6 col-sm-12 col-xs-12"><h4><label id="lblState">Dealer Network: </label> ' +
                                value.Dealer.name +
                                '</h4><div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img src="<?= $this->Url->build('/assets/public/images/network/dealers/') ?>' +
                                value.Dealer.photo +
                                '" style="width:100%; height:auto;"></div><span>' +
                                value.Dealer.name + '</span><p>' + value.Dealer.address +
                                '</p><div class="repeat-dealer-height"><i class="fa fa-user"></i> ' +
                                value.Dealer.owner_name +
                                '<br><i class="fa fa-phone"></i> ' + value.Dealer.phone + '<br><i class="fa fa-envelope"></i><a href="mailto:' +
                                value.Dealer.email + '"> ' + value.Dealer.email +
                                '</a></div></div><div class="col-md-6 col-sm-12 col-xs-12">' +
                                value.Dealer.google_map + '</div></div>');
                        });
                    }
                });

            });

            $('#partSearch').on('click', function() {
                var divisionId = $('#divisionList').val();
                var districtId = $('#districtList').val();
                var upazilaId = $('#upazilaList').val();
                var partList = $('#dealer_result');
                partList.html('');
                $.ajax({
                    url: '<?= $this->Url->build('/dealers/ajaxDealerDetails/') ?>',
                    cache: false,
                    type: 'POST',
                    data: {
                        divisionId: divisionId,
                        districtId: districtId,
                        upazilaId: upazilaId,
                        networkTypeId: 2
                    },
                    success: function(data) {
                        console.log(data);
                        $.each(data, function(key, value) {
                            partList.append(
                                '<div class="row"><div class="repeat-dealer"><div class="col-md-6 col-sm-12 col-xs-12"><h4><label id="lblState">Parts Network: </label> ' +
                                value.Dealer.name +
                                '</h4><div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img src="<?= $this->Url->build('/assets/public/images/network/parts/') ?>' +
                                value.Dealer.photo +
                                '" style="width:100%; height:auto;"></div><span>' +
                                value.Dealer.name + '</span><p>' + value.Dealer.address +
                                '</p><div class="repeat-dealer-height"><i class="fa fa-user"></i> ' +
                                value.Dealer.owner_name +
                                '<br><i class="fa fa-phone"></i> ' + value.Dealer.phone + '<br><i class="fa fa-envelope"></i><a href="mailto:' +
                                value.Dealer.email + '"> ' + value.Dealer.email +
                                '</a></div></div><div class="col-md-6 col-sm-12 col-xs-12">' +
                                value.Dealer.google_map + '</div></div>');
                        });
                    }
                });

            });

            $('#btnReset').on('click', function() {
                var divisionList = $('#divisionList');
                $('#divisionList option').attr('selected', false);
                var dealerList = $('#dealer_result');
                dealerList.html('');

                var districtList = $('#districtList');
                districtList.find('option').remove();
                districtList.append('<option value="">Select District</option>');

                var upazilaList = $('#upazilaList');
                upazilaList.find('option').remove();
                upazilaList.append('<option value="">Select Upazilla</option>');
            });

        });
    </script>
    <?php echo $this->fetch('scriptProductFeatures'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 200) {
                    jQuery('.scrollup').fadeIn();
                } else {
                    jQuery('.scrollup').fadeOut();
                }
            });
            jQuery('.scrollup').click(function() {
                jQuery("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"
        integrity="sha384-Gbd53NjH9fTrGfOvlidG2xykVSeto8+P5/CSWqRcKdFfGgzi3Z1oNS07vq6qRkRs" crossorigin="anonymous">
    </script>
</body>

</html>
