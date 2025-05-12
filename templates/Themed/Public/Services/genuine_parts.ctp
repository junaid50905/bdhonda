<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"><h5>Services</h5></div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a href="<?php echo Router::url('/', true); ?>services/honda-service">Honda Service</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/maintenance">Maintenance</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/warranty">Warranty</a></li>
                <li><a class="menu-network-active" href="<?php echo Router::url('/', true); ?>services/genuine-parts">Genuine Parts</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/engine-oil">Engine Oil</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/accessory">Accessory</a></li>
<!--                <li><a href="--><?php //echo Router::url('/', true); ?><!--services/owners-manual">Owner's manual</a></li>-->
            </ul>
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/services/honda-service.jpg" alt="">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="../services/honda-service">Services</a></li>
                <li class="active">Honda Genuine Parts</li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5>Honda Genuine Parts</h5>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h4>Honda Genuine Parts List</h4>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php echo $this->Session->flash(); ?>
                    <!-- BEGIN FORM-->
                    <?php echo $this->Form->create('Service', array('controller' => 'services', 'action' => 'genuine_parts')); ?>
                    <div class="form-left-box rech-us-box">
                        <div class="form-group">
                            <div class="col-md-3"><label>Select Your Bike Model</label><?php echo $this->Form->input('product_id', array('class' => 'form-control', 'type' => 'select', 'label' => false, 'options' => $products, 'empty' => '--- Select Bike Model ---')); ?></div>
                            <div class="col-md-4"><label>Part Name</label><?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Part Name')); ?></div>
                            <div class="col-md-4"><label>Part Number</label><?php echo $this->Form->input('part_number', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Part Number')); ?></div>
                        </div>
                        <button type="submit" class="btn blue">Submit</button>
                    </div>
                    <?php echo $this->Form->end(); ?>
                    <!-- END FORM-->
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                    <?php if(!empty($partPrices)) { ?>
                    <table class="table table-bordered  table-striped part-table">
                        <thead>
                            <tr><th style="text-align: center">Part Number</th><th style="text-align: center">Part Name</th><th style="text-align: center">Retail Price</th></tr>
                        </thead>
                        <tbody>
                        <?php foreach($partPrices as $partPrice) {
                             echo "<tr><td style=\"text-align: center\">".$partPrice['PartPrice']['part_number']."</td><td style=\"text-align: center\">".$partPrice['PartPrice']['name']."</td><td style=\"text-align: right\">".$partPrice['PartPrice']['price']."</td></tr>";
                        } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
            <p>&nbsp;</p>
            <p><b>Note:All parts prices exclude VAT. Only Helmet, Engine Oil, Chain Lube & Cleaner, Waist Bag & Tyre prices are VAT included.</b></p>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>* Few common & similar parts are usable at multiple bike model.</p>
                <h4>Honda Genuine Parts</h4>
                <p>Honda recommend to use genuine parts strongly which Bangladesh Honda private Ltd., supplies. Honda high quality parts are available at Honda dealer.</p>
                <p>&nbsp;</p>
                <b>Honda genuine parts labels</b>
                <p>&nbsp;</p>
                <img src="<?php echo Router::url('/', true); ?>assets/public/images/services/genuine_label.jpg">
                <p>&nbsp;</p>
                <p><b>Unauthorized import and Copy parts</b><br>
                    Unauthorized import parts and copy parts are available in Bangladesh market unfortunately.<br>
                    These parts are not applicable Bangladesh type motor cycle.<br>
                    If copy parts applied, there are risks not only malfunction, but also may be injured or death.
                </p>
                <p>&nbsp;</p>
                <div align="center">
                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/services/genuine_label2.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="productEnquiry text-center">
        <div class="row">
            <div class="bticon col-md-3 col-xs-6 col-sm-6 pull-right">
                <div class="bticon-box">
                    <a href="<?php echo Router::url('/', true); ?>dealer-network/dealer-locator">
                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/dealer-locator.png">
                        <span>Dealer & Service Location</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>