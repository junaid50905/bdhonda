<div class="network-sec" style="display:inline-block; width:100%;">
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
                        <li><a class="menu-network-active" href="<?= $this->Url->build('/services/genuine-parts') ?>">Genuine Parts</a></li>
                        <li><a href="<?= $this->Url->build('/services/engine-oil') ?>">Engine Oil</a></li>
                        <li><a href="<?= $this->Url->build('/services/accessory') ?>">Accessory</a></li>
                    </ul>
                </div>
                <?= $this->Html->image('/assets/public/images/services/honda-service.jpg', ['alt' => 'Honda Service', 'fullBase' => true]) ?>

                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item"><?= $this->Html->link('Home', '/') ?></li>
                    <li class="breadcrumb-item"><?= $this->Html->link('Services', ['controller' => 'services', 'action' => 'honda-service']) ?></li>
                    <li class="breadcrumb-item active" aria-current="page">Honda Genuine Parts</li>
                </ol>
            </div>
        </div>

        <div class="locator-sec">
            <div class="row p-4">
                <h5>Honda Genuine Parts</h5>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h6>Honda Genuine Parts List</h6>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?= $this->Flash->render() ?>

                        <!-- BEGIN FORM-->
                        <?= $this->Form->create(null, ['url' => ['controller' => 'services', 'action' => 'genuineParts']]) ?>
                        <div class="form-left-box rech-us-box">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Select Your Bike Model</label>
                                        <?= $this->Form->control('product_id', [
                                            'type' => 'select',
                                            'options' => $products,
                                            'empty' => '--- Select Bike Model ---',
                                            'label' => false,
                                            'class' => 'form-control'
                                        ]) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Part Name</label>
                                        <?= $this->Form->control('name', [
                                            'label' => false,
                                            'placeholder' => 'Part Name',
                                            'class' => 'form-control'
                                        ]) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Part Number</label>
                                        <?= $this->Form->control('part_number', [
                                            'label' => false,
                                            'placeholder' => 'Part Number',
                                            'class' => 'form-control'
                                        ]) ?>
                                    </div>
                                    <div class="col-md-1 pt-3">
                                        <button type="submit" class="btn blue">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                        <!-- END FORM-->
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                        <?php if (!empty($partPrices)): ?>
                            <table class="table table-bordered table-striped part-table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Part Number</th>
                                        <th style="text-align: center">Part Name</th>
                                        <th style="text-align: center">Retail Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($partPrices as $partPrice): ?>
                                        <tr>
                                            <td style="text-align: center"><?= h($partPrice['PartPrice']['part_number']) ?></td>
                                            <td style="text-align: center"><?= h($partPrice['PartPrice']['name']) ?></td>
                                            <td style="text-align: right"><?= h($partPrice['PartPrice']['price']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>

                <p>&nbsp;</p>
                <p><b>Note: All parts prices exclude VAT. Only Helmet, Engine Oil, Chain Lube & Cleaner, Waist Bag & Tyre prices are VAT included.</b></p>
                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>* Few common & similar parts are usable at multiple bike models.</p>
                    <h4>Honda Genuine Parts</h4>
                    <p>Honda recommend to use genuine parts strongly which Bangladesh Honda private Ltd., supplies. Honda high-quality parts are available at Honda dealer.</p>
                    <p>&nbsp;</p>

                    <b>Honda genuine parts labels</b>
                    <p>&nbsp;</p>
                    <?= $this->Html->image('/assets/public/images/services/genuine_label.jpg', ['alt' => 'Genuine Label', 'fullBase' => true]) ?>

                    <p>&nbsp;</p>
                    <p><b>Unauthorized import and Copy parts</b><br>
                        Unauthorized import parts and copy parts are available in Bangladesh market unfortunately.<br>
                        These parts are not applicable Bangladesh type motor cycle.<br>
                        If copy parts applied, there are risks not only malfunction, but also may be injured or death.
                    </p>
                    <p>&nbsp;</p>

                    <div class="text-center">
                        <?= $this->Html->image('/assets/public/images/services/genuine_label2.jpg', ['alt' => 'Genuine Label 2', 'fullBase' => true]) ?>
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
