<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Accessory Types',
                '/accessory_types/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Accessory Types</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('AccessoryType', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'accessory_types', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($accessory_type['AccessoryType']['id'])): ?>
                    <input type="hidden" name="data[AccessoryType][id]" class="form-control" value="<?php echo $accessory_type['AccessoryType']['id']; ?>" id="AccessoryTypeId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, (!empty($accessory_type['AccessoryType']['name'])) ? 'value="'.$accessory_type['AccessoryType']['name'].'"' : 'placeholder="Name"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <?php if(isset($accessory_type['AccessoryType']['status'])) { ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'status',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => '-- Select Status --', 'options' => array(1 => 'Active', 0 => 'Inactive'), 'default' => $accessory_type['AccessoryType']['status'])
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
