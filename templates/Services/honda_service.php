<div style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet" />


    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Services</h5>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <ul class="menu-network">
                        <li><a class="menu-network-active" href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'honda-service']) ?>">Honda Service</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'maintenance']) ?>">Maintenance</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'warranty']) ?>">Warranty</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'genuine-parts']) ?>">Genuine Parts</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'engine-oil']) ?>">Engine Oil</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'accessory']) ?>">Accessory</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?= $this->Html->image('/assets/public/images/services/honda-service.jpg', ['alt' => 'Honda Service', 'fullBase' => true]) ?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build('/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'view', 'honda-service']) ?>">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Honda Service</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="locator-sec">
            <div class="row p-3">
                <h5>Honda Service</h5>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Dealer Service</h4>
                    <p>Honda Authorized Dealers have service facility as Honda guidelines to maintain your motor cycles.
                        Besides, Honda has training programs and provides to Honda dealer staffs. Trained Honda dealer
                        staffs will support your motor cycle life.</p>
                    <?= $this->Html->image('/assets/public/images/services/service_faci.png', ['alt' => 'Honda Service', 'fullBase' => true]) ?>


                    <h4>Training programs</h4>
                    <p>Honda provides three types of technical training based on technicians' level and operational
                        training for dealer service staffs. Customers can receive the same service at Honda dealers.</p>

                    <?= $this->Html->image('/assets/public/images/services/service_faci-2.png', ['alt' => 'Honda Service', 'fullBase' => true]) ?>
                    <?= $this->Html->image('/assets/public/images/services/service_faci-3.png', ['alt' => 'Honda Service', 'fullBase' => true]) ?>

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
