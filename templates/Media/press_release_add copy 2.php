<script src="<?= $this->Url->build('/js/ckeditor/ckeditor.js', ['fullBase' => true]) ?>"></script>


<div class="row">
    <div class="col-md-12 col-sm-6">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Press Release</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?= $this->Form->create($press_release, ['type' => 'file', 'url' => ['controller' => 'Media', 'action' => 'pressReleaseAdd'], 'class' => 'form-horizontal']) ?>

                <?= $this->Form->hidden('id', ['value' => $press_release->id ?? null]) ?>

                <div class="form-body">
                    <!-- Title Field -->
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                            <?= $this->Form->control('title', [
                                'class' => 'form-control',
                                'placeholder' => 'Title',
                                'required' => true,
                                'label' => false,
                                'maxlength' => 255,
                                'value' => $press_release->title ?? '',
                            ]) ?>
                        </div>
                    </div>

                    <!-- Publish Date Field -->
                    <div class="form-group">
                        <label class="col-md-2 control-label">Publish Date</label>
                        <div class="col-md-8">
                            <?= $this->Form->control('publish_date', [
                                'class' => 'form-control date-picker',
                                'required' => true,
                                'label' => false,
                                'value' => $press_release->publish_date ?? '',
                            ]) ?>
                        </div>
                    </div>

                    <!-- PR Details Field -->
                    <div class="form-group">
                        <label class="col-md-2 control-label">PR Details</label>
                        <div class="col-md-8">
                            <?= $this->Form->textarea('pr_text', [
                                'class' => 'form-control',
                                'id' => 'PressReleasePrText',
                                'required' => true,
                                'label' => false,
                                'rows' => 6,
                                'value' => $press_release->pr_text ?? ''
                            ]) ?>
                        </div>
                    </div>

                    <script>
                        // Initialize CKEditor for PR Text
                        var editor = CKEDITOR.replace('pr_text', {
                            height: '300',
                            filebrowserBrowseUrl: '/js/ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: '/js/ckfinder/ckfinder.html?type=Images',
                            filebrowserUploadUrl: '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        });
                    </script>

                    <div class="form-group">
                        <label class="col-md-2 control-label">PR File</label>
                        <div class="col-md-8">
                            <?= $this->Form->control('pr_file', [
                                'type' => 'file',
                                'class' => 'form-control',
                                'label' => false,
                                'id' => 'PressReleasePrFile'
                            ]) ?>
                        </div>
                    </div>


                </div>
                <!-- Form Actions -->
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
