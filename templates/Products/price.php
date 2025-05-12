<div style="display:inline-block; width:100%;">

    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/product.css" rel="stylesheet" />

    <section class="micro-sec about" style="background:url(<?= $this->Url->build('/assets/public/images/' . h($slug) . '/' . h($productDetails->inner_bg), ['fullBase' => true]) ?>);">
        <div class="accordion macro-nav">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1"></a>
                <div id="accordion-1" class="accordion-section-content">
                    <!-- Top product links element -->
                    <ul>
                        <li><a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/about'); ?>">About Me</a></li>
                        <li><a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/features'); ?>">Features</a></li>
                        <li><a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/specifications'); ?>">Specifications</a></li>
                        <li><a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/colors'); ?>">Colors</a></li>
                        <li><a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/accessories'); ?>">Accessories</a></li>
                        <li><a href="<?= $this->Url->build('/queries/index/' . h($productDetails->slug)); ?>">Enquiry</a></li>
                        <li>
                            <a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/index'); ?>">
                                <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->small_logo)); ?>" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="micro-about-sec">
            <div class="micro-title">
                <h6>Price</h6>
                <ol class="breadcrumb bre-bg">
                    <li class="breadcrumb-item">
                        <a href="<?= $this->Url->build('/product' . '/' . h($slug) . '/index', ['fullBase' => true]); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Price</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-6 right-box for-desktop-div">
                    <img src="<?= $this->Url->build('/assets/public/images/' . h($slug) . '/' . h($productDetails->price_image), ['fullBase' => true]) ?>" alt="">
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
                                    <?php foreach ($productDetails->prices as $price): ?>
                                        <tr style="font-size: 25px;">
                                            <td style="padding: 25px 15px; line-height: 1.3;"><?= h($price->model) ?></td>
                                            <td style="padding: 25px 15px; line-height: 1.3;"><?= h($price->price) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <p>* Prices are subject to change without any prior notice.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 right-box for-mobile-div">
                    <img src="<?= $this->Url->build('/assets/public/images/' . h($slug) . '/' . h($productDetails->price_image), ['fullBase' => true]) ?>" alt="">
                </div>
            </div>
        </div>
    </section>
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
