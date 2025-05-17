<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            __('All Part Price'),
            ['controller' => 'PartPrices', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div>
        <p></p>

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><?= __('Add New Part Price') ?></div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">

                <?= $this->Form->create(null, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'PartPrices', 'action' => 'add'], 'class' => 'form-horizontal']) ?>

                <div class="form-body">
                    <div class="form-group">
                        <?= $this->Form->label('product_id', __('Product'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('product_id', [
                                'type' => 'select',
                                'options' => $products,
                                'class' => 'form-control',
                                'label' => false,
                                'empty' => 'Select Product',
                                'required' => true,
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('name', __('Part Name'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('name', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Part Name',
                                'required' => true,
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('part_number', __('Part Number'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('part_number', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Part Number',
                                'required' => true,
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('price', __('Part Price'), ['class' => 'col-md-4 control-label']) ?>
                        <div class="col-md-6">
                            <?= $this->Form->control('price', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Part Price',
                                'required' => true,
                            ]) ?>
                        </div>
                    </div>
                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-5 col-md-3">
                        <button type="submit" class="btn blue"><?= __('Submit') ?></button>
                        <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="btn default"><?= __('Cancel') ?></a>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
