<style>
    .livo-feature-txt{
        position: absolute;
    }
</style>

<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/livo.css" rel="stylesheet" />
    <section class="micro-sec about" style="background:url(<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['inner_bg'] ?>);">
        <div class="accordion macro-nav">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1"></a>
                <div id="accordion-1" class="accordion-section-content">
                    <?php echo $this->element('product-top-links'); ?>
                </div>
            </div>
        </div>
        <div class="micro-about-sec">
            <div class="micro-title">
                <h6>Features</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">Features</li>
                </ul>
            </div>
            <div class="features">
                <div class="row">
                    <div class="unicorn-feature-thumb col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <?php $count = 1;
                            foreach ($productDetails['Feature'] as $feature): ?>
                                <li class="feature-li1 <?php if ($count == 1) {
                                                            echo 'feature-active';
                                                        } ?>" name="<?php echo $count; ?>">
                                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/features/<?php echo $feature['image'] ?>">
                                </li>
                            <?php $count++;
                            endforeach; ?>
                        </ul>
                    </div>
                    <div class="unicorn-feature col-md-12 col-sm-12 col-xs-12">
                        <div class="unicorn-feature-hover">
                            <?php $count = 1;
                            foreach ($productDetails['Feature'] as $feature): ?>
                                <div class="col-md-12 part-<?php echo  $count; ?> aaa" <?php if ($count > 1) {
                                                                                            echo " style='display: none'";
                                                                                        } ?>>
                                    <div class="row">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/features/<?php echo $feature['image'] ?>">
                                        <div class="livo-feature-txt">
                                            <h3><?php echo $feature['name'] ?></h3>
                                            <p><?php echo $feature['details'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php $count++;
                            endforeach; ?>
                        </div>
                    </div>
                    <p class="feature-note">*Accessories shown in the picture are not a part of the standard equipment.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="accordion micro-footer">
        <div class="accordion-section">
            <a class="accordion-section-title" href="#accordion-2">More</a>
            <div id="accordion-2" class="accordion-section-content">
                <?php echo $this->element('product-bottom-links'); ?>
            </div>
        </div>
    </div>
</div>

<?php
$this->Html->scriptBlock('$(document).ready(function (ev) {
        $(\'.feature-li1\').hover(function () {
            $(\'.feature-li1\').removeClass(\'feature-active\')
            $(this).addClass(\'feature-active\');
            var ab = $(this).attr(\'name\');
            $(\'.part-\' + ab).slideDown(\'5000\').siblings(".aaa").slideUp(\'5000\');
        });
    })', array('block' => 'scriptProductFeatures'));
?>