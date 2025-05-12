<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/product.css" rel="stylesheet" />
    <link href="<?php echo Router::url('/', true); ?>assets/public/bootstrapMagnify.css" rel="stylesheet" />
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
                <h6>Colors</h6>
                <ul class="breadcrumb">
                    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index">Home</a></li>
                    <li class="active">Colors</li>
                </ul>
            </div>
            <?php $colors = array_filter($productDetails['Color'], function ($item) {
                if ($item['status'] == 1) {
                    return true;
                }
                return false;
            })
            ?>
            <div class="row colors">
                <div class="col-md-2 col-sm-12 color-thumb">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <?php $isFirst = true;
                        foreach ($colors as $color): ?>
                            <a class="nav-link <?php if ($isFirst) echo 'active'; ?>" id="nav-<?php echo $color['tab_name'] ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $color['tab_name'] ?>" type="button" role="tab" aria-controls="nav-<?php echo $color['tab_name'] ?>" aria-selected="<?php echo $isFirst ? 'true' : 'false'; ?>">
                                <span><?php echo $color['name'] ?></span>
                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/colors/<?php echo $color['image_thumb'] ?>">
                            </a>
                        <?php $isFirst = false;
                        endforeach; ?>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="tab-content" id="nav-tabContent">
                        <?php $isFirst = true;
                        foreach ($colors as $color): ?>
                            <div class="tab-pane fade <?php if ($isFirst) echo 'show active'; ?>" id="<?php echo $color['tab_name'] ?>" role="tabpanel" aria-labelledby="nav-<?php echo $color['tab_name'] ?>-tab">
                                <img data-toggle="magnify" src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/colors/zoom/<?php echo $color['image'] ?>" alt="">
                            </div>
                        <?php $isFirst = false;
                        endforeach; ?>
                    </div>
                </div>
            </div>


            <p class="specifications-note">*Colors shown in the picture may vary from the actual image.</p>
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