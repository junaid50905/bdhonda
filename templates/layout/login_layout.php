<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 3.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Bangladesh Honda Private Limited | Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/css/login.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link id="style_color" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="<?php $this->webroot; ?>">
            <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default" />
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <?= $this->fetch('content') ?>
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        <?php echo date('Y'); ?> &copy; Bangladesh Honda Private Limited
    </div>
    <!--[if lt IE 9]>
<script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/select2/select2.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/scripts/login.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init() // init quick sidebar
            Login.init();
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
