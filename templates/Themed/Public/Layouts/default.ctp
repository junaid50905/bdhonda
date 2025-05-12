<?php echo $this->element('admin-header'); ?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <?php echo $this->element('admin-sidebar'); ?>
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
                                <?php echo $this->Html->link('Dashboard', '/'); ?>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <?php echo $this->Html->link($page_title, '/'.$this->params['controller']); ?>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->Session->flash(); ?>
                </div>
            </div>
            <?php echo $content_for_layout; ?>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php echo $this->element('admin-footer'); ?>
