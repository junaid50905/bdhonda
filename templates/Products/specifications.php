<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/product.css" rel="stylesheet" />
    <section class="micro-sec about"
        style="background:url(<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['inner_bg'] ?>);">
        <div class="accordion macro-nav">
            <div class="accordion-section">
                <a class="accordion-section-title Livo-mob-logo" href="#accordion-1"></a>
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
            <div class="row">
                <div class="micro-title">
                    <h6>Specifications*</h6>
                    <ol class="breadcrumb bre-bg">
                        <li class="breadcrumb-item"><a
                                href="<?= $this->Url->build('/', ['fullBase' => true]); ?>product/<?php echo $slug ?>/index">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Specifications</li>
                    </ol>
                </div>
                <div class="specifications-box text-center">
                    <ul class="specifications">
                        <li class="specificationsLi"><a class="specifications-active wow pulse" data-wow-delay="0.3s"
                                name="1" href="javascript:;">Body Dimensions</a></li>
                        <li class="specificationsLi"><a name="2" href="javascript:;" class="wow pulse"
                                data-wow-delay="0.6s">Engine</a></li>
                        <li class="specificationsLi"><a name="3" href="javascript:;" class="wow pulse"
                                data-wow-delay="0.9s">Transmission</a></li>
                        <li class="specificationsLi"><a name="4" href="javascript:;" class="wow pulse"
                                data-wow-delay="1.2s">Tyres &amp; brakes</a></li>
                        <li class="specificationsLi"><a name="5" href="javascript:;" class="wow pulse"
                                data-wow-delay="1.5s">Frame &amp; Suspension</a></li>
                        <li class="specificationsLi"><a name="6" href="javascript:;" class="wow pulse"
                                data-wow-delay="1.8s">Electricals</a></li>
                    </ul>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-7">
                    <div class="right-box specifications-img-box wow bounceInLeft" data-wow-delay="1s">
                        <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['specifications_image'] ?>"
                            alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="specifications-sec wow bounceInRight" data-wow-delay="1s">
                        <div class="specifications-hover">
                            <div class="body-dimensions specifications-active part-1 axx">
                                <ul class="tab_content">
                                    <li><span class="full">Body Dimensions</span></li>
                                    <li><span>Length</span><span><?php echo $productDetails['body_dimensions'][0]['length'] ?></span>
                                    </li>
                                    <li><span>Width</span><span><?php echo $productDetails['body_dimensions'][0]['width'] ?></span>
                                    </li>
                                    <li><span>Height</span><span><?php echo $productDetails['body_dimensions'][0]['height'] ?></span>
                                    </li>
                                    <li><span>Wheel
                                            base</span><span><?php echo $productDetails['body_dimensions'][0]['wheel_base'] ?></span>
                                    </li>
                                    <li><span>Ground
                                            clearance</span><span><?php echo $productDetails['body_dimensions'][0]['ground_clearance'] ?></span>
                                    </li>
                                    <li><span>Kerb
                                            weight</span><span><?php echo $productDetails['body_dimensions'][0]['kerb_weight'] ?></span>
                                    </li>
                                    <li><span>Fuel tank
                                            capacity</span><span><?php echo $productDetails['body_dimensions'][0]['fuel_tank_capacity'] ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="engine part-2 axx">
                                <ul class="tab_content">
                                    <li><span class="full">Engine</span></li>
                                    <li><span>Type</span><span><?php echo $productDetails['engines'][0]['type'] ?></span>
                                    </li>
                                    <li><span>Displacement</span><span><?php echo $productDetails['engines'][0]['displacement'] ?></span>
                                    </li>
                                    <li><span>Max net power</span><span><label
                                                for=""><?php echo $productDetails['engines'][0]['max_net_power'] ?></label></span>
                                    </li>
                                    <li><span>Max net torque</span><span><label
                                                for=""><?php echo $productDetails['engines'][0]['max_net_torque'] ?></label></span>
                                    </li>
                                    <li><span>Bore
                                        </span><span><?php echo $productDetails['engines'][0]['bore'] ?></span>
                                    </li>
                                    <li><span>Stroke</span><span><?php echo $productDetails['engines'][0]['stroke'] ?></span>
                                    </li>
                                    <li><span>Compression
                                            ratio</span><span><?php echo $productDetails['engines'][0]['compression_ratio'] ?></span>
                                    </li>
                                    <li><span>Air filter
                                            type</span><span><?php echo $productDetails['engines'][0]['air_filter_type'] ?></span>
                                    </li>
                                    <li><span>Starting
                                            method</span><span><?php echo $productDetails['engines'][0]['starting_method'] ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="transmission part-3 axx">
                                <ul class="tab_content">
                                    <li><span class="full">Transmission</span></li>
                                    <li><span>No of
                                            gears</span><span><?php echo $productDetails['transmissions'][0]['no_of_gears'] ?></span>
                                    </li>
                                    <li><span>Gear
                                            pattern</span><span><?php echo $productDetails['transmissions'][0]['gear_pattern'] ?></span>
                                    </li>
                                    <?php if (!empty($productDetails['transmissions'][0]['max_speed'])) { ?><li><span>Max
                                                speed</span><span><?php echo $productDetails['transmissions'][0]['max_speed'] ?></span>
                                        </li><?php } ?>
                                </ul>
                            </div>
                            <div class="tyres-brakes part-4 axx">
                                <ul class="tab_content">
                                    <li><span class="full">Tyres &amp; Brakes</span></li>
                                    <li><span>Tyre Size
                                            (Front)</span><span><?php echo $productDetails['tyres_brakes'][0]['tyre_size_front'] ?></span>
                                    </li>
                                    <li><span>Tyre Size
                                            (Rear)</span><span><?php echo $productDetails['tyres_brakes'][0]['tyre_size_rear'] ?></span>
                                    </li>
                                    <li><span>Tyre Type
                                            (Front)</span><span><?php echo $productDetails['tyres_brakes'][0]['tyre_type_front'] ?></span>
                                    </li>
                                    <li><span>Tyre Type
                                            (Rear)</span><span><?php echo $productDetails['tyres_brakes'][0]['tyre_type_rear'] ?></span>
                                    </li>
                                    <li><span>Brake Type &amp; Size
                                            (Front)</span><span><?php echo $productDetails['tyres_brakes'][0]['brake_type_size_front'] ?></span>
                                    </li>
                                    <li><span>Brake Type &amp; Size
                                            (Rear)</span><span><?php echo $productDetails['tyres_brakes'][0]['brake_type_size_rear'] ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="frame-suspension part-5 axx">
                                <ul class="tab_content">
                                    <li><span class="full">Frame &amp; Suspension</span></li>
                                    <li><span>Frame
                                            type</span><span><?php echo $productDetails['frames_suspensions'][0]['frame_type'] ?></span>
                                    </li>
                                    <li><span>Front</span><span><?php echo $productDetails['frames_suspensions'][0]['front'] ?></span>
                                    </li>
                                    <li><span>Rear</span><span><?php echo $productDetails['frames_suspensions'][0]['rear'] ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="electricals part-6 axx">
                                <ul class="tab_content">
                                    <li><span class="full">Electricals</span></li>
                                    <li><span>Battery</span><span><?php echo $productDetails['electricals'][0]['battery'] ?></span>
                                    </li>
                                    <li><span>Head
                                            lamp</span><span><?php echo $productDetails['electricals'][0]['head_lamp'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="specifications-note" style="font-size:10px; color: #fff;">^Service more frequently
                            when
                            riding
                            in unusually wet or dusty areas. <br />
                            *The specifications and design of the motorcycle show may vary according to requirements &
                            conditions and are subject to change without any notice. Accessories shown in the picture
                            are
                            not a
                            part of the standard equipment.
                        </p>
                    </div>
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
