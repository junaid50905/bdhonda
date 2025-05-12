<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/product.css" rel="stylesheet"/>
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
                <h6>Price</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">Price</li>
                </ul>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 right-box for-desktop-div">
                <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['price_image'] ?>" alt="">
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
                <div class="txt-box form-left-box">
                    <div class="datashow-responsivediv">
                        <table cellspacing="0" id="gvshow" rules="all" class="datashow">
                            <thead>
                            <tr valign="top" class="headlbl" style="background-color:white;font-size: 24px;">
                                <th style="padding: 25px 15px;">Model</th>
                                <th style="padding: 25px 15px;">Price</th>
                            </tr>
                            </thead>
                            <tbody style="background-color:white">
                                <?php foreach ($productDetails['Price'] as $price): ?>
                                <tr style="font-size: 25px;"><td style="padding: 25px 15px; line-height: 1.3;"><?php echo $price['model'] ?></td><td style="padding: 25px 15px; line-height: 1.3;"><?php echo $price['price'] ?></td></tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <p>* Prices are subject to change without any prior notice.</p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6 right-box for-mobile-div">
                <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['price_image'] ?>" alt="">
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