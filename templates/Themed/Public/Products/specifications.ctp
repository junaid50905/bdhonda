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
                <h6>Specifications*</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">Specifications</li>
                </ul>
            </div>
            <div class="specifications-box text-center">
                <ul class="specifications">
                    <li class="specificationsLi"><a class="specifications-active wow pulse" data-wow-delay="0.3s" name="1" href="javascript:;">Body Dimensions</a></li>
                    <li class="specificationsLi"><a name="2" href="javascript:;" class="wow pulse" data-wow-delay="0.6s">Engine</a></li>
                    <li class="specificationsLi"><a name="3" href="javascript:;" class="wow pulse" data-wow-delay="0.9s">Transmission</a></li>
                    <li class="specificationsLi"><a name="4" href="javascript:;" class="wow pulse" data-wow-delay="1.2s">Tyres &amp; brakes</a></li>
                    <li class="specificationsLi"><a name="5" href="javascript:;" class="wow pulse" data-wow-delay="1.5s">Frame &amp; Suspension</a></li>
                    <li class="specificationsLi"><a name="6" href="javascript:;" class="wow pulse" data-wow-delay="1.8s">Electricals</a></li>
                </ul>
            </div>
            <div class="col-md-7 right-box specifications-img-box wow bounceInLeft" data-wow-delay="1s">
                <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['specifications_image'] ?>" alt="">
            </div>
            <div class="col-md-5 specifications-sec wow bounceInRight" data-wow-delay="1s">
                <div class="specifications-hover">
                    <div class="body-dimensions specifications-active part-1 axx">
                        <ul class="tab_content">
                            <li><span class="full">Body Dimensions</span></li>
                            <li><span>Length</span><span><?php echo $productDetails['BodyDimension'][0]['length'] ?></span></li>
                            <li><span>Width</span><span><?php echo $productDetails['BodyDimension'][0]['width'] ?></span></li>
                            <li><span>Height</span><span><?php echo $productDetails['BodyDimension'][0]['height'] ?></span></li>
                            <li><span>Wheel base</span><span><?php echo $productDetails['BodyDimension'][0]['wheel_base'] ?></span></li>
                            <li><span>Ground clearance</span><span><?php echo $productDetails['BodyDimension'][0]['ground_clearance'] ?></span></li>
                            <li><span>Kerb weight</span><span><?php echo $productDetails['BodyDimension'][0]['kerb_weight'] ?></span></li>
                            <li><span>Fuel tank capacity</span><span><?php echo $productDetails['BodyDimension'][0]['fuel_tank_capacity'] ?></span></li>
                        </ul>
                    </div>
                    <div class="engine part-2 axx">
                        <ul class="tab_content">
                            <li><span class="full">Engine</span></li>
                            <li><span>Type</span><span><?php echo $productDetails['Engine'][0]['type'] ?></span></li>
                            <li><span>Displacement</span><span><?php echo $productDetails['Engine'][0]['displacement'] ?></span></li>
                            <li><span>Max net power</span><span><label for=""><?php echo $productDetails['Engine'][0]['max_net_power'] ?></label></span></li>
                            <li><span>Max net torque</span><span><label for=""><?php echo $productDetails['Engine'][0]['max_net_torque'] ?></label></span></li>
                            <li><span>Bore </span><span><?php echo $productDetails['Engine'][0]['bore'] ?></span></li>
                            <li><span>Stroke</span><span><?php echo $productDetails['Engine'][0]['stroke'] ?></span></li>
                            <li><span>Compression ratio</span><span><?php echo $productDetails['Engine'][0]['compression_ratio'] ?></span></li>
                            <li><span>Air filter type</span><span><?php echo $productDetails['Engine'][0]['air_filter_type'] ?></span></li>
                            <li><span>Starting method</span><span><?php echo $productDetails['Engine'][0]['starting_method'] ?></span></li>
                        </ul>
                    </div>
                    <div class="transmission part-3 axx">
                        <ul class="tab_content">
                            <li><span class="full">Transmission</span></li>
                            <li><span>No of gears</span><span><?php echo $productDetails['Transmission'][0]['no_of_gears'] ?></span></li>
                            <li><span>Gear pattern</span><span><?php echo $productDetails['Transmission'][0]['gear_pattern'] ?></span></li>
                            <?php if(!empty($productDetails['Transmission'][0]['max_speed'])){ ?><li><span>Max speed</span><span><?php echo $productDetails['Transmission'][0]['max_speed'] ?></span></li><?php } ?>
                        </ul>
                    </div>
                    <div class="tyres-brakes part-4 axx">
                        <ul class="tab_content">
                            <li><span class="full">Tyres &amp; Brakes</span></li>
                            <li><span>Tyre Size (Front)</span><span><?php echo $productDetails['TyresBrake'][0]['tyre_size_front'] ?></span></li>
                            <li><span>Tyre Size (Rear)</span><span><?php echo $productDetails['TyresBrake'][0]['tyre_size_rear'] ?></span></li>
                            <li><span>Tyre Type (Front)</span><span><?php echo $productDetails['TyresBrake'][0]['tyre_type_front'] ?></span></li>
                            <li><span>Tyre Type (Rear)</span><span><?php echo $productDetails['TyresBrake'][0]['tyre_type_rear'] ?></span></li>
                            <li><span>Brake Type &amp; Size (Front)</span><span><?php echo $productDetails['TyresBrake'][0]['brake_type_size_front'] ?></span></li>
                            <li><span>Brake Type &amp; Size (Rear)</span><span><?php echo $productDetails['TyresBrake'][0]['brake_type_size_rear'] ?></span></li>
                        </ul>
                    </div>
                    <div class="frame-suspension part-5 axx">
                        <ul class="tab_content">
                            <li><span class="full">Frame &amp; Suspension</span></li>
                            <li><span>Frame type</span><span><?php echo $productDetails['FramesSuspension'][0]['frame_type'] ?></span></li>
                            <li><span>Front</span><span><?php echo $productDetails['FramesSuspension'][0]['front'] ?></span></li>
                            <li><span>Rear</span><span><?php echo $productDetails['FramesSuspension'][0]['rear'] ?></span></li>
                        </ul>
                    </div>
                    <div class="electricals part-6 axx">
                        <ul class="tab_content">
                            <li><span class="full">Electricals</span></li>
                            <li><span>Battery</span><span><?php echo $productDetails['Electrical'][0]['battery'] ?></span></li>
                            <li><span>Head lamp</span><span><?php echo $productDetails['Electrical'][0]['head_lamp'] ?></span></li>
                        </ul>
                    </div>
                </div>
                <p class="specifications-note" style="font-size:10px; color: #fff;">^Service more frequently when riding in unusually wet or dusty areas. <br />
                    *The specifications and design of the motorcycle show may vary according to requirements & conditions and are subject to change without any notice. Accessories shown in the picture are not a part of the standard equipment.
                </p>
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