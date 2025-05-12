<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/product.css" rel="stylesheet"/>
    <section class="micro-sec about" style="background:url(<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['inner_bg'] ?>);">
        <div class="accordion macro-nav">
            <div class="accordion-section">
                <a class="accordion-section-title Livo-mob-logo" href="#accordion-1"></a>
                <div id="accordion-1" class="accordion-section-content">
                    <?php echo $this->element('product-top-links'); ?>
                </div>
            </div>
        </div>
        <div class="micro-about-sec">
            <div class="micro-title">
                <h6>About Me</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">About Me</li>
                </ul>
            </div>
            <div class="col-md-7 col-xs-12 col-sm-6 right-box wow bounceInLeft for-desktop-div" data-wow-delay="2s">
                <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['about_image'] ?>" alt="">
            </div>
            <div class="col-md-5 col-xs-12 col-sm-6">
                <div class="txt-box wow wow bounceInDown" data-wow-delay="2s">
                    <p><?php echo $productDetails['Product']['about_text'] ?></p>
                </div>
            </div>
            <div class="col-md-7 col-xs-12 col-sm-6 right-box wow bounceInLeft for-mobile-div" data-wow-delay="2s">
                <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['about_image'] ?>" alt="">
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