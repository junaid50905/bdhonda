<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet" />
    <section class="micro-sec network-sec">
        <div class="network-header ">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Services</h5>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <ul class="menu-network">
                        <li><a href="<?= $this->Url->build('/services/honda-service') ?>">Honda Service</a></li>
                        <li><a href="<?= $this->Url->build('/services/maintenance') ?>">Maintenance</a></li>
                        <li><a class="menu-network-active" href="<?= $this->Url->build('/services/warranty') ?>">Warranty</a></li>
                        <li><a href="<?= $this->Url->build('/services/genuine-parts') ?>">Genuine Parts</a></li>
                        <li><a href="<?= $this->Url->build('/services/engine-oil') ?>">Engine Oil</a></li>
                        <li><a href="<?= $this->Url->build('/services/accessory') ?>">Accessory</a></li>
                    </ul>
                </div>
                <?= $this->Html->image('/assets/public/images/services/honda-service.jpg', ['alt' => 'Honda Service', 'fullBase' => true]) ?>
                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item"><?= $this->Html->link('Home', '/') ?></li>
                    <li class="breadcrumb-item"><?= $this->Html->link('Services', ['controller' => 'services', 'action' => 'honda-service']) ?></li>
                    <li class="breadcrumb-item active" aria-current="page">Honda Warranty</li>
                </ol>
            </div>
        </div>
        <div class="locator-sec">
            <div class="row p-3">
                <h5>Honda Warranty</h5>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Honda Warranty</h4>
                    <ul>
                        <li>Honda Provides 2 Years warranty for your Honda Motor cycles.</li>
                        <li>Honda customer can receive warranty service at Honda dealer service center.</li>
                    </ul>
                    <?= $this->Html->image('/assets/public/images/services/warranty.jpg', ['alt' => '', 'fullBase' => true]) ?>

                    <p>&nbsp;</p>
                    <div class="text-center">
                        <?= $this->Html->image('/assets/public/images/services/warranty-logo.jpg', ['alt' => '', 'fullBase' => true]) ?>

                        <p>&nbsp;</p>
                        <ul>
                            <li>Excepting consumable parts, fluid and lubricant.</li>
                            <li>M/C should have periodical maintenance which Honda requires</li>
                        </ul>
                    </div>
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
