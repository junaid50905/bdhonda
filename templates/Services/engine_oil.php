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
                        <li><a href="<?= $this->Url->build('/services/maintenance') ?>">Maintenance</a></li>
                        <li><a href="<?= $this->Url->build('/services/warranty') ?>">Warranty</a></li>
                        <li><a href="<?= $this->Url->build('/services/genuine-parts') ?>">Genuine Parts</a></li>
                        <li><a class="menu-network-active" href="<?= $this->Url->build('/services/engine-oil') ?>">Engine Oil</a></li>
                        <li><a href="<?= $this->Url->build('/services/accessory') ?>">Accessory</a></li>
                    </ul>
                </div>
                <?= $this->Html->image('/assets/public/images/services/honda-service.jpg', ['alt' => 'Honda Service', 'fullBase' => true]) ?>
                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item"><?= $this->Html->link('Home', ['controller' => 'pages', 'action' => 'display', 'home']) ?></li>
                    <li class="breadcrumb-item"><?= $this->Html->link('Services', ['controller' => 'services', 'action' => 'honda-service']) ?></li>
                    <li class="breadcrumb-item active" aria-current="page">Honda Genuine Lubricant</li>
                </ol>
            </div>
            <div class="locator-sec">
                <div class="row p-3">
                    <h5>Honda Genuine Lubricant</h5>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p>&nbsp;</p>
                        <p>Honda 4 Stroke Engine Oils are premium quality engine oils Tested by Honda R&D (Japan). They conform to international specifications of JASO (Japanese Automobile Standard Organization) MA. Honda 4 Stroke Engine Oils have been developed keeping in mind the difficult driving conditions prevalent on Bangladesh roads. To meet the complete lubrication needs of your Honda Motorcycles we strongly recommend that you use Honda 4 Stroke Engine Oils only. Test evaluation of Honda 4 Stroke Engine Oil indicates the clear benefits of this oil over conventional 4T Oils.</p>
                        <p>&nbsp;</p>
                        <?= $this->Html->image('/assets/public/images/services/update_engineoil.jpg', ['alt' => '', 'class' => 'img-responsive']) ?>
                        <?= $this->Html->image('/assets/public/images/services/Slide2.JPG', ['alt' => '', 'class' => 'img-responsive']) ?>
                        <?= $this->Html->image('/assets/public/images/services/Slide3.JPG', ['alt' => '', 'class' => 'img-responsive']) ?>
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
