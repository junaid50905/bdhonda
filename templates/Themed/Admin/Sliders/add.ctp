<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Sliders',
                '/sliders/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Slider</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Slider', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'sliders', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($slider['Slider']['id'])): ?>
                    <input type="hidden" name="data[Slider][id]" class="form-control" value="<?php echo $slider['Slider']['id']; ?>" id="SliderId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'title',
                                array('class' => 'form-control', 'label' => false, (!empty($slider['Slider']['title'])) ? 'value="'.$slider['Slider']['title'].'"' : 'placeholder="Title"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slider Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_image',
                                array('class' => 'form-control', 'label' => false, (!empty($slider['Slider']['image'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slider Link</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'url',
                                array('class' => 'form-control', 'label' => false, (!empty($slider['Slider']['url'])) ? 'value="'.$slider['Slider']['url'].'"' : 'placeholder="Slider Link"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <?php if(isset($slider['Slider']['status'])) { ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slider Status</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'status',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => '-- Select Status --', 'options' => array(1 => 'Active', 0 => 'Inactive'), 'default' => $slider['Slider']['status'])
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
