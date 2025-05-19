<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Sliders',
            ['controller' => 'Sliders', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
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
                <?= $this->Form->create(null, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'Sliders', 'action' => 'add'], 'class' => 'form-horizontal', 'id' => 'pressReleaseForm']) ?>


                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('title', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Title',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slider Image</label>
                        <div class="col-md-6">
                            <?= $this->Form->file('image', [
                                'class' => 'form-control',
                                'label' => false,
                                'required' => true
                            ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slider Link</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('url', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Slider Link',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>
                    
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn blue']) ?>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END TABLE PORTLET-->
    </div>
</div>
