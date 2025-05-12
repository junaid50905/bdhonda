<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Part Price',
                '/part_prices/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Part Price</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('PartPrice', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'part_prices', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($partPrice['PartPrice']['id'])): ?>
                    <input type="hidden" name="data[PartPrice][id]" class="form-control" value="<?php echo $partPrice['PartPrice']['id']; ?>" id="PartPriceId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'PartPrice.product_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'options' => $products, 'default' => (!empty($partPrice['PartPrice']['product_id'])) ? $partPrice['PartPrice']['product_id'] : null, 'empty' => 'Select Product', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Part Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'PartPrice.name',
                                array('class' => 'form-control', 'label' => false, 'value' => (!empty($partPrice['PartPrice']['name'])) ? $partPrice['PartPrice']['name'] : null, 'placeholder' => 'Part Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Part Number</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'PartPrice.part_number',
                                array('class' => 'form-control', 'label' => false, 'value' => (!empty($partPrice['PartPrice']['part_number'])) ? $partPrice['PartPrice']['part_number'] : null, 'placeholder' => 'Part Number', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Part Price</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'PartPrice.price',
                                array('class' => 'form-control', 'label' => false,  'value' => (!empty($partPrice['PartPrice']['price'])) ? $partPrice['PartPrice']['price'] : null, 'placeholder' => 'Part Price', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-5 col-md-3">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END TABLE PORTLET-->
    </div>
</div>
