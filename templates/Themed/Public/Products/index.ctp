<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/product.css" rel="stylesheet"/>
    <section class="micro-sec product" style="background:url(<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['home_bg'] ?>)">
        <div class="accordion macro-nav">
            <div class="accordion-section">
                <!--<a class="accordion-section-title product-mob-logo" style="background:url(<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['home_bg'] ?>) no-repeat" href="#accordion-1"></a>-->
                <a class="accordion-section-title product-mob-logo" style="background:url(<?php echo Router::url('/', true); ?>assets/public/images/mobile-bg2.png) 100% 100%" href="#accordion-1"></a>
                <div id="accordion-1" class="accordion-section-content">
                    <?php echo $this->element('product-top-links'); ?>
                </div>
            </div>
        </div>
<!--        --><?php //var_dump($productDetails) ?>
        <div class="mobile-micro-banner">
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['home_bg'] ?>" alt="">
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