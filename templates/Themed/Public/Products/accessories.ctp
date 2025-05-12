<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/livo.css" rel="stylesheet" />
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
                <h6>Accessories</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">Accessories</li>
                </ul>
            </div>
            <div id="Accessories" class="carousel slide accessories-tab" data-bs-ride="carousel" data-bs-interval="1000000">
                <div class="controls">
                    <ul class="nav">
                        <?php
                        $result = array();
                        foreach ($accessoriesList as $item) {
                            if (array_key_exists("accessory_types_id", $item['Accessory'])) {
                                $result[$item['Accessory']['accessory_types_id']][] = $item;
                            } else {
                                $result[""][] = $item;
                            }
                        }
                        ?>
                        <?php $i = 0;
                        foreach ($result as $accessory) {
                            echo '<li data-bs-target="#Accessories" data-bs-slide-to="' . $i . '" class="' . (($i == 0) ? 'active' : "") . '"><a href="#"><small>' . $accessory[0]['AccessoryType']['name'] . '</small></a></li>';
                            $i++;
                        }
                        ?>
                    </ul>
                </div>

                <!-- Wrapper for slides -->
                <div class="carousel-inner accessories-box">
                    <?php $j = 0;
                    foreach ($result as $key => $items) { ?>
                        <div class="carousel-item <?php if ($j == 0) echo 'active';  ?>">
                            <?php foreach ($items as $item) { ?>
                                <div class="row">
                                    <div class="col-md-5 col-sm-6 col-xs-12 accessories-img">
                                        <img src="<?php echo Router::url('/', true); ?>/assets/public/images/accessories/<?php echo $item['Accessory']['image']; ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-7 col-sm-6 col-xs-12 accessories-txt">
                                        <h2><?php echo $item['Accessory']['name']; ?></h2>
                                        <p><?php echo $item['Accessory']['description']; ?></p>
                                        <span class="accessories-price">MRP * : BDT <?php echo $item['Accessory']['price']; ?>/-</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            <?php } ?>
                        </div>
                    <?php $j++;
                    } ?>
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
                <?php echo $this->element('product-bottom-links'); ?>
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