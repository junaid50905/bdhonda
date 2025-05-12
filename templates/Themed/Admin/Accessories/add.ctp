<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Accessories',
                '/accessories/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Accessory</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <?php $products[0] = 'All Products'; ?>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Accessory', array('enctype' => 'multipart/form-data', 'url' => [ 'controller' => 'accessories', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($accessory['Accessory']['id'])): ?>
                    <input type="hidden" name="data[Accessory][id]" class="form-control" value="<?php echo $accessory['Accessory']['id']; ?>" id="AccessoryId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'product_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'options' => $products, 'default' => (!empty($accessory['Accessory']['product_id'])) ? $accessory['Accessory']['product_id'] : null, 'empty' => 'Select Product', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Accessory Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'accessory_types_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'options' => $accessory_types, 'default' => (!empty($accessory['Accessory']['accessory_types_id'])) ? $accessory['Accessory']['accessory_types_id'] : null, 'empty' => 'Select Accessory Type', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, (!empty($accessory['Accessory']['name'])) ? 'value="'.$accessory['Accessory']['name'].'"' : 'placeholder="Name"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_image',
                                array('class' => 'form-control', 'label' => false, (!empty($accessory['Accessory']['image'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'description',
                                array('class' => 'form-control wysihtml5', 'label' => false, (!empty($accessory['Accessory']['description'])) ? 'value="'.$accessory['Accessory']['description'].'"' : 'placeholder="Accessory Description"', 'type' => 'textarea', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Price</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'price',
                                array('class' => 'form-control', 'label' => false, (!empty($accessory['Accessory']['price'])) ? 'value="'.$accessory['Accessory']['price'].'"' : 'placeholder="Accessory Price"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <?php if(isset($accessory['Accessory']['status'])) { ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'status',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => '-- Select Status --', 'options' => array(1 => 'Active', 0 => 'Inactive'), 'default' => $accessory['Accessory']['status'])
                            ); ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
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
