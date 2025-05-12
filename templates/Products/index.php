<div class="" style="display:inline-block; width:100%;">
    <!-- Include the product CSS file -->
    <link href="<?= $this->Url->build('/assets/public/product.css'); ?>" rel="stylesheet" />

    <!-- Product section with dynamic background image -->
    <section class="micro-sec product" style="background:url(<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->home_bg)) ?>)">
        <div class="accordion macro-nav">
            <div class="accordion-section">
                <!-- Product mobile logo -->
                <!--<a class="accordion-section-title product-mob-logo" style="background:url(<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->home_bg)) ?>) no-repeat" href="#accordion-1"></a>-->
                <a class="accordion-section-title product-mob-logo" style="background:url(<?= $this->Url->build('/assets/public/images/mobile-bg2.png') ?>) 100% 100%" href="#accordion-1"></a>
                <div id="accordion-1" class="accordion-section-content">
                    <!-- Top product links element -->
                    <ul>
                        <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/about'); ?>">About Me</a></li>
                        <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/features'); ?>">Features</a></li>
                        <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/specifications'); ?>">Specifications</a></li>
                        <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/colors'); ?>">Colors</a></li>
                        <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/accessories'); ?>">Accessories</a></li>
                        <li><a href="<?= $this->Url->build('/queries/index/' . h($productDetails->slug)); ?>">Enquiry</a></li>
                        <li>
                            <a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/index'); ?>">
                                <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->small_logo)); ?>" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mobile micro banner with product background image -->
        <div class="mobile-micro-banner">
            <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->home_bg)) ?>" alt="<?= h($productDetails->name) ?>">
        </div>
    </section>

    <!-- Footer section with accordion -->
    <div class="accordion micro-footer">
        <div class="accordion-section">
            <a class="accordion-section-title" href="#accordion-2">More</a>
            <div id="accordion-2" class="accordion-section-content">
                <!-- Bottom product links element -->
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
                            <a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/view360', ['fullBase' => true]); ?>">
                                <div class="micro-footer-img angle-view">&nbsp;</div><span>Angle View</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li>
                        <a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/price', ['fullBase' => true]); ?>">
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