<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/product.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true); ?>assets/public/css/jquery-ui.css" />
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
                <h6>Gallery</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
            <div class="angle-view-sec">
                <div class="new-360">
                    <div id="producttt">

                    </div>
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
    $this->Html->scriptBlock('jQuery(document).ready(function () {
        jQuery("#producttt").vc3dEye({
            imagePath: "'. Router::url('/', true).'assets/public/images/'.$slug.'/banner360/",
            totalImages: 24,
            imageExtension: "png",
            responsive: true
        });
    })', array('block' => 'script360View'));
?>