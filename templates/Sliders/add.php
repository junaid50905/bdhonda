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
                <?= $this->Form->create($slider, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'Sliders', 'action' => 'add'], 'class' => 'form-horizontal', 'id' => 'pressReleaseForm']) ?>

                <?= $this->Form->hidden('id', ['value' => $slider->id ?? null]) ?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('title', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Title',
                                'value' => $slider->title ?? '',
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
                                'required' => empty($slider->image)
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
                                'value' => $slider->url ?? '',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>
                    <?php if (isset($slider->status)): ?>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Slider Status</label>
                            <div class="col-md-6">
                                <?= $this->Form->control('status', [
                                    'type' => 'select',
                                    'class' => 'form-control',
                                    'label' => false,
                                    'empty' => '-- Select Status --',
                                    'options' => [1 => 'Active', 0 => 'Inactive'],
                                    'default' => $slider->status
                                ]) ?>
                            </div>
                        </div>
                    <?php endif; ?>
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
