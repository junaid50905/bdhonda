<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Safety Item',
            ['controller' => 'Safeties', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div>
        <p></p>

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Edit activity picture</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>

            <div class="portlet-body form">
                <?= $this->Form->create($activity_picture, [
                    'type' => 'file',
                    'url' => ['controller' => 'Safeties', 'action' => 'editActivityPicture', $activity_picture->id],
                    'class' => 'form-horizontal'
                ]) ?>

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Image Title</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('title', [
                                'type' => 'text',
                                'value' => $activity_picture->name,
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder' => 'Title'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Current Image</label>
                        <div class="col-md-6">
                            <?php if (!empty($activity_picture->image)): ?>
                                <img src="<?= $this->Url->build('/assets/public/images/safeties/activity_picture/' . $activity_picture->image) ?>" height="80px" />
                            <?php else: ?>
                                <p>No image uploaded</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Change Image</label>
                        <div class="col-md-6">
                            <?= $this->Form->file('image', ['class' => 'form-control', 'label' => false]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('status', [
                                'type' => 'select',
                                'options' => ['1' => 'Active', '0' => 'Inactive'],
                                'class' => 'form-control',
                                'label' => false,
                                'default' => $activity_picture->status ?? '1'
                            ]) ?>

                        </div>
                    </div>

                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <?= $this->Form->button(__('Update'), ['class' => 'btn blue']) ?>
                        <a href="<?= $this->Url->build(['controller' => 'Safeties', 'action' => 'allList']) ?>" class="btn default">Cancel</a>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
