<?php
if(!isset($safety_category))
    $safety_category = $this->params['url']['model']
?>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Safety Items',
                '/safeties/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Item</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <?php $products[0] = 'All Products'; ?>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Safety', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'accessories', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($accessory['Safety']['id'])): ?>
                    <input type="hidden" name="data[Safety][id]" class="form-control" value="<?php echo $accessory['Safety']['id']; ?>" id="SafetyId">
                <?php endif; ?>
                <input type="hidden" name="data[Safety][safety_category]" class="form-control" value="<?php echo $safety_category; ?>" id="SafetyId">
                <div class="form-body">
                    <?php if ($safety_category == 'activity_picture'){?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Image Title</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, (!empty($accessory['Safety']['name'])) ? 'value="'.$accessory['Safety']['name'].'"' : 'placeholder="Image Title"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <?php }else if ($safety_category == 'education'){?>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Video Title</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input(
                                    'name',
                                    array('class' => 'form-control', 'label' => false, (!empty($accessory['Safety']['name'])) ? 'value="'.$accessory['Safety']['name'].'"' : 'placeholder="Video Title"', 'required' => false)
                                ); ?>
                                <small id="emailHelp" class="form-text text-muted">EX: https://www.youtube.com/embed/sXUTS85Tl8o</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Video URL</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input(
                                    'image',
                                    array('class' => 'form-control', 'label' => false, (!empty($accessory['Safety']['image'])) ? 'value="'.$accessory['Safety']['image'].'"' : 'placeholder="Video URL"', 'required' => true)
                                ); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Order</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input(
                                    'order',
                                    array('class' => 'form-control', 'label' => false, (!empty($accessory['Safety']['order'])) ? 'value="'.$accessory['Safety']['order'].'"' : 'placeholder="Order Number"', 'required' => false)
                                ); ?>
                            </div>
                        </div>
                    <?php } if($safety_category != 'education') {?>
                        <input type="hidden" name="data[Safety][order]" class="form-control" value="1" id="SafetyId">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->file('temp_image',
                                    array('class' => 'form-control', 'label' => false, (!empty($accessory['Safety']['image'])) ? '' : 'required')
                                );?>
                            </div>
                        </div>



                    <?php } ?>

<!--                    <div class="form-group">-->
<!--                        <label class="col-md-4 control-label">Order</label>-->
<!--                        <div class="col-md-6">-->
<!--                            --><?php //echo $this->Form->input(
//                                'order',
//                                array('class' => 'form-control', 'label' => false, (!empty($accessory['Safety']['order'])) ? 'value="'.$accessory['Safety']['order'].'"' : 'placeholder="Safety Order"', 'required' => false)
//                            ); ?>
<!--                        </div>-->
<!--                    </div>-->
                    <?php if(isset($accessory['Safety']['status'])) { ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'status',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => '-- Select Status --', 'options' => array(1 => 'Active', 0 => 'Inactive'), 'default' => $accessory['Safety']['status'])
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
