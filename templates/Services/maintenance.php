<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet" />

    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Services</h5>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <ul class="menu-network">
                        <li><a href="<?= $this->Url->build('/services/honda-service') ?>">Honda Service</a></li>
                        <li><a class="menu-network-active" href="<?= $this->Url->build('/services/maintenance') ?>">Maintenance</a></li>
                        <li><a href="<?= $this->Url->build('/services/warranty') ?>">Warranty</a></li>
                        <li><a href="<?= $this->Url->build('/services/genuine-parts') ?>">Genuine Parts</a></li>
                        <li><a href="<?= $this->Url->build('/services/engine-oil') ?>">Engine Oil</a></li>
                        <li><a href="<?= $this->Url->build('/services/accessory') ?>">Accessory</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?= $this->Html->image('/assets/public/images/services/honda-service.jpg', ['alt' => 'Honda Service', 'fullBase' => true]) ?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build('/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build('/services/honda-service') ?>">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Maintenance</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="locator-sec">
            <div class="row p-3">
                <h5>Maintenance</h5>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Honda Free Service Coupon</h4>
                    <p>To keep your motorcycle in better condition, motorcycles require periodical maintenance. Warranty
                        conditions also require periodical maintenance.</p>
                    <p>&nbsp;</p>
                    <p>Honda provides 5 free service coupons for Honda Motorcycles.<br>Please visit a Honda Authorized
                        Dealer or HASP for free maintenance.</p>
                    <p>&nbsp;</p>
                    <p><b>* Parts and lubricant are not included in the free service coupon.</b></p>
                    <?= $this->Html->image('/assets/public/images/services/periodical.jpg', ['alt' => '', 'fullBase' => true]) ?>

                    <h4>Maintenance Items</h4>
                    <p>Motorcycles require these kinds of maintenance periodically. Honda provides five Free Service
                        Coupons. Customers can take free maintenance service at a Honda authorized dealer or HASP<br>
                        <b>* Parts and lubricant are not included in the Free Service coupon.</b><br>
                        I: Inspect and Clean, Adjust, Lubricate, or Replace<br>
                        C: Clean<br>
                        A: Adjust<br>
                        R: Replace<br>
                        L: Lubricate
                    </p>

                    <?= $this->Html->image('/assets/public/images/services/updated maintenance table.png', ['width' => '100%'], ['alt' => '', 'fullBase' => true]) ?>

                </div>
            </div>
        </div>
    </section>
    <section class="productEnquiry text-center">
        <div class="row" style="justify-content: end;">
            <div class="bticon col-md-3 col-xs-6 col-sm-6">
                <div class="bticon-box">
                    <?= $this->Html->link(
                        $this->Html->image('/assets/public/images/dealer-locator.png') . '<span>Dealer & Service Location</span>',
                        ['controller' => 'dealer-network', 'action' => 'dealer-locator'],
                        ['escape' => false]
                    ) ?>
                </div>
            </div>
        </div>
    </section>
</div>
