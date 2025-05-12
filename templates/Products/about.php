<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/assets/public/product.css', ['fullBase' => true]); ?>" rel="stylesheet" />

    <section class="micro-sec about"
        style="background:url(<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->inner_bg), ['fullBase' => true]); ?>);">

        <div class="accordion macro-nav">
            <div class="accordion-section">
                <a class="accordion-section-title Livo-mob-logo" href="#accordion-1"></a>
                <div id="accordion-1" class="accordion-section-content">
                    <ul>
                        <li><a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/about'); ?>">About Me</a></li>
                        <li><a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/features'); ?>">Features</a></li>
                        <li><a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/specifications'); ?>">Specifications</a></li>
                        <li><a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/colors'); ?>">Colors</a></li>
                        <li><a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/accessories'); ?>">Accessories</a></li>
                        <li><a href="<?= $this->Url->build('/queries/index/'. h($productDetails->slug)); ?>">Enquiry</a></li>
                        <li>
                            <a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/index'); ?>">
                                <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->small_logo)); ?>" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="micro-about-sec">
            <div class="micro-title">
                <h6>About Me</h6>
                <ol class="breadcrumb bre-bg">
                    <li class="breadcrumb-item">
                        <a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/index', ['fullBase' => true]); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">About Me</li>
                </ol>
            </div>

            <div class="row p-3">
                <div class="col-md-7 col-xs-12 col-sm-6 right-box wow bounceInLeft for-desktop-div" data-wow-delay="2s">
                    <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->about_image), ['fullBase' => true]); ?>" alt="">
                </div>
                <div class="col-md-5 col-xs-12 col-sm-6">
                    <div class="txt-box wow bounceInDown" data-wow-delay="2s">
                        <p><?= h(strip_tags($productDetails->about_text)); ?></p>
                    </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-6 right-box wow bounceInLeft for-mobile-div" data-wow-delay="2s">
                    <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->about_image), ['fullBase' => true]); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="accordion micro-footer">
        <div class="accordion-section">
            <a class="accordion-section-title" href="#accordion-2">More</a>
            <div id="accordion-2" class="accordion-section-content">
                <ul>
                    <li>
                        <a href="<?= $this->Url->build('/online_bookings/index/' . h($productDetails->slug), ['fullBase' => true]); ?>" target="_blank">
                            <div class="micro-footer-img book-now">&nbsp;</div><span>Book Now</span>
                        </a>
                    </li>

                    <?php if ($productDetails->test_ride == 1): ?>
                        <li>
                            <a href="<?= $this->Url->build('/test_rides/index/' . h($productDetails->slug), ['fullBase' => true]); ?>" target="_blank">
                                <div class="micro-footer-img test-ride">&nbsp;</div><span>Test Ride</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if ($productDetails->angle_view == 1): ?>
                        <li>
                            <a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/view360', ['fullBase' => true]); ?>">
                                <div class="micro-footer-img angle-view">&nbsp;</div><span>Angle View</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li>
                        <a href="<?= $this->Url->build('/product'.'/'. h($productDetails->slug) . '/price', ['fullBase' => true]); ?>">
                            <div class="micro-footer-img price">৳</div><span>Price</span>
                        </a>
                    </li>

                    <?php if (!empty($productDetails->brochure)): ?>
                        <li>
                            <a href="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->brochure), ['fullBase' => true]); ?>" target="_blank">
                                <div class="micro-footer-img e-brochure">&nbsp;</div><span>E-Brochure</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li>
                        <a href="<?= $this->Url->build('/dealer-network/dealer-locator', ['fullBase' => true]); ?>" target="_blank">
                            <div class="micro-footer-img dealer-locator">&nbsp;</div><span>Dealer Locator</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
