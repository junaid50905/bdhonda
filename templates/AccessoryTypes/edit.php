<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Accessory Types',
            ['controller' => 'AccessoryTypes', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div>
        <p></p>

        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Edit Accessory Type</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">

                <?= $this->Form->create($accessoryType, ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) ?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('name', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder' => 'Name'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Status</label>
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
                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Update</button>
                        <a href="<?= $this->Url->build(['action' => 'allList']) ?>" class="btn default">Cancel</a>
                    </div>
                </div>

                <?= $this->Form->end() ?>

            </div>
        </div>
        <!-- END TABLE PORTLET-->
    </div>
</div>
