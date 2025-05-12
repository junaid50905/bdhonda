<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/product.css" rel="stylesheet" />
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/bootstrapMagnify.css" rel="stylesheet" />


    <!-- Background Image Section -->
    <section class="micro-sec about"
        style="background:url(<?= $this->Url->image('/assets/public/images/' . h($slug) . '/' . h($productDetails->inner_bg), ['fullBase' => true]); ?>);">
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
                <h6>Colors</h6>
                <ol class="breadcrumb bre-bg">
                    <li class="breadcrumb-item">
                        <a href="<?= $this->Url->build('/product' . '/' . h($slug) . '/index', ['fullBase' => true]) ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Colors</li>
                </ol>
            </div>

            <?php
            $colors = !empty($productDetails->colors) ? array_filter($productDetails->colors, function ($item) {
                return $item->status == 1;
            }) : [];
            ?>

            <div class="row colors">
                <div class="col-md-2 col-sm-12 color-thumb-sec">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <?php $isFirst = true;
                        foreach ($colors as $color): ?>
                            <a class="nav-link <?= $isFirst ? 'active' : '' ?>"
                                id="nav-<?= h($color['tab_name']) ?>-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#<?= h($color['tab_name']) ?>"
                                type="button" role="tab"
                                aria-controls="nav-<?= h($color['tab_name']) ?>"
                                aria-selected="<?= $isFirst ? 'true' : 'false' ?>">
                                <div class="in_tex"><?= h($color['name']) ?></div>
                                <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?php echo $slug ?>/colors/<?php echo $color['image_thumb'] ?>">

                            </a>
                        <?php $isFirst = false;
                        endforeach; ?>
                    </div>
                </div>

                <div class="col-md-11 col-sm-12">
                    <div class="tab-content" id="nav-tabContent">
                        <?php $isFirst = true;
                        foreach ($colors as $color): ?>
                            <div class="tab-pane fade <?= $isFirst ? 'show active' : '' ?>"
                                id="<?= h($color['tab_name']) ?>"
                                role="tabpanel"
                                aria-labelledby="nav-<?= h($color['tab_name']) ?>-tab">
                                <img data-toggle="magnify"
                                    src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?php echo $slug ?>/colors/zoom/<?php echo $color['image'] ?>"
                                    alt="">
                            </div>
                        <?php $isFirst = false;
                        endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Note -->
            <p class="specifications-note">*Colors shown in the picture may vary from the actual image.</p>
        </div>
    </section>

    <!-- Footer Section -->
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