<?php
$this->Html->scriptBlock('jQuery(document).ready(function (ev) {
        jQuery(\'.feature-li1\').hover(function () {
            jQuery(\'.feature-li1\').removeClass(\'feature-active\')
            jQuery(this).addClass(\'feature-active\');
            var ab = jQuery(this).attr(\'name\');
            jQuery(\'.part-\' + ab).slideDown(\'5000\').siblings(".aaa").slideUp(\'5000\');

            // Remove the aaa style (hidden class) from all elements before applying it to the selected one
            jQuery(".aaa").css("display", "none");
            jQuery(\'.part-\' + ab).css("display", "block"); // Show the selected feature part
        });
    })', array('block' => 'scriptProductFeatures'));
?>

<link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/livo.css" rel="stylesheet" />

<section class="micro-sec about"
    style="background:url(<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->inner_bg), ['fullBase' => true]); ?>);">
    <div class="accordion macro-nav">
        <div class="accordion-section">
            <a class="accordion-section-title" href="#accordion-1"></a>
            <div id="accordion-1" class="accordion-section-content">
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
            <h6>Features</h6>
            <ol class="breadcrumb bre-bg">
                <li class="breadcrumb-item">
                    <a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/index', ['fullBase' => true]); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Features</li>
            </ol>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="unicorn-feature-thumb col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <?php $count = 1;
                            foreach ($productDetails->features as $feature): ?>
                                <li class="feature-li1 <?= ($count == 1) ? 'feature-active' : ''; ?>" name="<?= h($count); ?>">
                                    <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?= h($productDetails->slug); ?>/features/<?= h($feature['image']); ?>">
                                </li>
                            <?php $count++;
                            endforeach; ?>
                        </ul>
                    </div>

                    <div class="unicorn-feature col-md-12 col-sm-12 col-xs-12">
                        <div class="unicorn-feature-hover">
                            <?php $count = 1;
                            foreach ($productDetails->features as $feature): ?>
                                <div class="col-md-12 part-<?= h($count); ?> aaa" <?= ($count > 1) ? 'style="display: none"' : ''; ?>>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?= h($productDetails->slug); ?>/features/<?= h($feature['image']); ?>">
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="livo-feature-txt p-3">
                                                <h3><?= h($feature['name']); ?></h3>
                                                <p><?= h($feature['details']); ?></p>
                                            </div>
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
                        <a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/view360', ['fullBase' => true]); ?>">
                            <div class="micro-footer-img angle-view">&nbsp;</div><span>Angle View</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li>
                    <a href="<?= $this->Url->build('/product' . '/' . h($productDetails->slug) . '/price', ['fullBase' => true]); ?>">
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
