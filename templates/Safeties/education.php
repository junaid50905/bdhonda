<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Safety Item',
            ['controller' => 'Safeties', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
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
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?= $this->Form->create(null, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'Safeties', 'action' => 'education'], 'class' => 'form-horizontal']) ?>

                <?= $this->Form->hidden('id', ['value' => '' ?? null]) ?>

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Video Title</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('title', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Video Title',
                                'required' => false
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Video URL</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('title', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Video URL',
                                'required' => false
                            ]) ?>
                            <small id="emailHelp" class="form-text text-muted">EX: https://www.youtube.com/embed/sXUTS85Tl8o</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Order</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('order', [
                                'class' => 'form-control',
                                'label' => false,
                                'placeholder' => 'Video URL',
                                'required' => false,
                                'type' => 'number'
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
