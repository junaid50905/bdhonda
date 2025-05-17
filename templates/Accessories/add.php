<div class="row">
    <div class="col-md-12 col-sm-12">

        <?= $this->Html->link(
            __('All Accessories'),
            ['controller' => 'Accessories', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>

        <div class="clearfix"></div>
        <p></p>

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <?= empty($accessory->id) ? __('Add New Accessory') : __('Edit Accessory') ?>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>

            <div class="portlet-body form">

                <?= $this->Form->create(null, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'Accessories', 'action' => 'add'], 'class' => 'form-horizontal']) ?>

                <div class="form-body">

                    <div class="form-group">
                        <?= $this->Form->label('product_id', __('Product'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('product_id', [
                                'type' => 'select',
                                'options' => $products + [0 => 'All Products'],
                                'empty' => 'Select Product',
                                'label' => false,
                                'class' => 'form-control',
                                'required' => true
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('accessory_types_id', __('Accessory Type'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('accessory_types_id', [
                                'type' => 'select',
                                'options' => $accessory_types,
                                'empty' => 'Select Accessory Type',
                                'label' => false,
                                'class' => 'form-control',
                                'required' => true
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('name', __('Name'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('name', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder' => 'Name',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('temp_image', __('Image'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('temp_image', [
                                'type' => 'file',
                                'label' => false,
                                'class' => 'form-control',
                                'required' => empty($accessory->image)
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('description', __('Description'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('description', [
                                'type' => 'textarea',
                                'label' => false,
                                'class' => 'form-control wysihtml5',
                                'placeholder' => 'Accessory Description',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('price', __('Price'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('price', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder' => 'Accessory Price',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>

                    <?php if (isset($accessory->status)) : ?>
                        <div class="form-group">
                            <?= $this->Form->label('status', __('Status'), ['class' => 'col-md-4 control-label']) ?>
                            <div class="col-md-6">
                                <?= $this->Form->control('status', [
                                    'type' => 'select',
                                    'options' => [1 => 'Active', 0 => 'Inactive'],
                                    'empty' => '-- Select Status --',
                                    'label' => false,
                                    'class' => 'form-control'
                                ]) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue"><?= __('Submit') ?></button>
                        <a href="<?= $this->Url->build(['action' => 'allList']) ?>" class="btn default"><?= __('Cancel') ?></a>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
