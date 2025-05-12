<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/assets/public/css/livo.css', ['fullBase' => true]); ?>" rel="stylesheet" />

    <section class="micro-sec about"
        style="background:url(<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?= h($productDetails['slug']) ?>/<?= h($productDetails['inner_bg']) ?>);">
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
                <h6>Accessories</h6>
                <ol class="breadcrumb bre-bg">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build("/product" . '/' . h($productDetails['slug']) . "/index", ['fullBase' => true]); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                </ol>
            </div>
            <div id="Accessories" class="carousel slide accessories-tab" data-bs-ride="carousel" data-bs-interval="1000000">
                <div class="controls">
                    <ul class="nav">
                        <?php

                        use Cake\Utility\Hash;

                        $result = [];
                        foreach ($accessoriesList as $item) {

                            if (!empty($item->accessory_types_id)) {
                                $result[$item->accessory_types_id][] = $item;
                            } else {
                                $result[''][] = $item;
                            }
                        }
                        ?>
                        <?php $i = 0; ?>
                        <?php foreach ($result as $accessoryGroup): ?>
                            <li data-bs-target="#Accessories" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? 'active' : '' ?>">
                                <a href="#"><small><?= h($accessoryGroup[0]->name) ?></small></a>
                            </li>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="carousel-inner accessories-box">
                    <?php $j = 0; ?>
                    <?php foreach ($result as $items): ?>
                        <div class="carousel-item <?= ($j == 0) ? 'active' : '' ?>">
                            <?php foreach ($items as $item): ?>
                                <div class="row">
                                    <div class="col-md-5 col-sm-6 col-xs-12 accessories-img">
                                        <img src="<?= $this->Url->build('/assets/public/images/accessories/' . h($item->image), ['fullBase' => true]) ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-7 col-sm-6 col-xs-12 accessories-txt">
                                        <h2><?= h($item->name) ?></h2>
                                        <p><?= $item->description ?></p>
                                        <span class="accessories-price">MRP * : BDT <?= h($item->price) ?>/-</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            <?php endforeach; ?>
                        </div>
                        <?php $j++; ?>
                    <?php endforeach; ?>
                </div>

                <p class="DisclaimerAcce" style="color: #fff; margin-bottom: 0px;">*Prices are subject to change without any prior notice.</p>
                <p class="DisclaimerAcce" style="color: #fff; margin-top: 5px;">*Accessories are subject to availability. Actual product may differ from the photograph shown.</p>
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

<?php
$this->Html->scriptBlock('
    $(document).ready(function (ev) {
        $(".controls .nav li").hover(function () {
            $(".controls .nav li").removeClass("active");
            $(this).addClass("active");
            var slideTo = $(this).attr("data-bs-slide-to");
            $("#Accessories").carousel(parseInt(slideTo));
        });
    });
', array('block' => 'scriptProductFeatures'));
?>
