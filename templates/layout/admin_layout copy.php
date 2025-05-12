<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title><?php echo $title_for_layout; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
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

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN PAGE STYLES -->
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" />
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-header-fixed page-quick-sidebar-over-content">

    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?php $this->webroot; ?>">
                    <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default" />
                </a>
                <div class="menu-toggler sidebar-toggler hide">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <!--                        <img alt="" class="img-circle" src=""/>-->
                            <span class="username">
                                Admin </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="extra_profile.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="login.html">
                                    <?php echo $this->Html->link('<i class="icon-key"></i> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->

    <div class="clearfix">
    </div>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                    <li class="sidebar-toggler-wrapper">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler">
                        </div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <div class="clearfix"></div>

                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'dashboards') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="start <?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-home"></i> <span class="title">Dashboard</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'dashboards',
                                'action' => 'index'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>

                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'sliders') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Homepage Sliders</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'sliders',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'media') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>

                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Media Center</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'media',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'safeties') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Safety</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'safeties',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>

                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'jobs') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Jobs</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'jobs',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'dealers' && $this->params['action'] == 'all_list') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Dealers/Parts Providers</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'dealers',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'products') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Products</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'products',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'part_prices') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Part Prices</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'part_prices',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'queries') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Product Queries</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'queries',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li><?php
                            $li_class = '';
                            $span_class = '';
                            if ($this->params['controller'] == 'test_rides') {
                                $li_class = 'active';
                                $span_class = 'selected';
                            }
                            ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Product Test Rides</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'test_rides',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                            $li_class = '';
                            $span_class = '';
                            if ($this->params['controller'] == 'online_bookings') {
                                $li_class = 'active';
                                $span_class = 'selected';
                            }
                            ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Product Online Bookings</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'online_bookings',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'dealers' && $this->params['action'] == 'all_application_list') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Dealer Applications</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'dealers',
                                'action' => 'all_application_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'accessories') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>

                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Accessories</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'accessories',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    
                    <?php
                    $li_class = '';
                    $span_class = '';
                    if ($this->params['controller'] == 'accessory_types') {
                        $li_class = 'active';
                        $span_class = 'selected';
                    }
                    ?>
                    <li class="<?php echo $li_class; ?>">
                        <?php
                        echo $this->Html->Link(
                            '<i class="icon-paper-plane"></i> <span class="title">Accessory Types</span><span class="' . $span_class . '"></span>',
                            array(
                                'controller' => 'accessory_types',
                                'action' => 'all_list'
                            ),
                            array(
                                'escape' => false
                            )
                        );
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="icon-key"></i> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->


        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                            <?php echo $page_title; ?>
                        </h3>
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <?= $this->Html->link('Dashboard', '/'); ?>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <?= $this->Html->link($page_title, ['controller' => $this->request->getParam('controller')]); ?>
                            </li>
                        </ul>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Flash->render(); ?>
                    </div>
                </div>
                <?= $this->fetch('content'); ?>
            </div>
        </div>
        <!-- END CONTENT -->



    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            <?php echo date('Y'); ?> &copy; Bangladesh Honda Private Limited
        </div>
        <div class="page-footer-tools">
            <span class="go-top">
                <i class="fa fa-angle-up"></i>
            </span>
        </div>
    </div>
    <!-- END FOOTER -->

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
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME LEVEL SCRIPTS -->
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/scripts/table-managed.js"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/scripts/components-editors.js"></script>
    <script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/admin/pages/scripts/components-pickers.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script>
        jQuery(document).ready(function() {
            $('#divisionList').on('change', function() {
                var $districtList = $('#districtList');
                $districtList.find('option').remove();
                $districtList.append('<option value="">Select District</option>');

                var $upazilaList = $('#upazilaList');
                $upazilaList.find('option').remove();
                $upazilaList.append('<option value="">Select Upazilla</option>');

                var divisionId = $(this).val();
                $.ajax({
                    url: '<?= $this->Url->build('/', ['fullBase' => true]); ?>dealers/ajaxDistrictsByDivision/',
                    cache: false,
                    type: 'POST',
                    data: {
                        divisionId: divisionId
                    },
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $districtList.append('<option value=' + value.District.id + '>' + value.District.name + '</option>');
                        });
                    }
                });
            });
            $('#upazilaDivisionList').on('change', function() {
                var $districtList = $('#upazilaDistrictList');
                $districtList.find('option').remove();
                $districtList.append('<option value="">Select District</option>');

                var divisionId = $(this).val();
                $.ajax({
                    url: '<?= $this->Url->build('/', ['fullBase' => true]); ?>dealers/ajaxDistrictsByDivision/',
                    cache: false,
                    type: 'POST',
                    data: {
                        divisionId: divisionId
                    },
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $districtList.append('<option value=' + value.District.id + '>' + value.District.name + '</option>');
                        });
                    }
                });
            });
            $('#districtList').on('change', function() {
                var $upazilaList = $('#upazilaList');
                $upazilaList.find('option').remove();
                $upazilaList.append('<option value="">Select Upazilla</option>');
                var divisionId = $('#divisionList').val();
                var districtId = $(this).val();
                $.ajax({
                    url: '<?= $this->Url->build('/', ['fullBase' => true]); ?>dealers/ajaxUpazilasByDivisionAndDistrict/',
                    cache: false,
                    type: 'POST',
                    data: {
                        districtId: districtId,
                        divisionId: divisionId
                    },
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $upazilaList.append('<option value=' + value.Upazila.id + '>' + value.Upazila.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            QuickSidebar.init() // init quick sidebar
            ComponentsPickers.init();
            Index.init();
            Index.initDashboardDaterange();
            Index.initJQVMAP(); // init index page's custom scripts
            Index.initCalendar(); // init index page's custom scripts
            Index.initIntro();
            Tasks.initDashboardWidget();
            TableManaged.init();
            ComponentsEditors.init();
            FormSamples.init();
        });
    </script>
    <?php echo $this->fetch('scriptBottom'); ?>

</html>
