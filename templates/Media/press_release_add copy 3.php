
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
                <?= $this->Form->create($press_release, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'Media', 'action' => 'pressReleaseAdd'], 'class' => 'form-horizontal']) ?>

                <?= $this->Form->hidden('id', ['value' => $press_release->id ?? null]) ?>

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                            <?= $this->Form->text('title', [
                                'class' => 'form-control',
                                'required' => true,
                                'placeholder' => 'Title',
                                'label' => false,
                                'maxlength' => 255,
                                'value' => $press_release->title ?? '',
                            ]) ?>
                        </div>
                    </div>

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

                    <div class="form-group">
                        <label class="col-md-2 control-label">PR Details</label>
                        <div class="col-sm-10">
                            <?= $this->Form->textarea('pr_text', [
                                'class' => 'form-control',
                                'id' => 'prTextEditor',
                                'rows' => 10,
                                'required' => true,
                                'value' => $press_release->pr_text ?? '',
                                'label' => false,
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">PR File</label>
                        <div class="col-md-8">
                            <?= $this->Form->file('pr_file', [
                                'class' => 'form-control',
                                'required' => empty($press_release->pr_file),
                                'type' => 'file',
                                'label' => false,
                                'id' => 'PressReleasePrFile'
                            ]) ?>
                            <?php if (!empty($press_release->pr_file)): ?>
                                <small class="text-muted">Current file: <?= h($press_release->pr_file) ?></small>
                                <?= $this->Form->hidden('existing_file', ['value' => $press_release->pr_file]) ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <!-- Form Actions -->
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn blue']) ?>
                        <button type="reset" class="btn default">Cancel</button>
                    </div>
                </div>

                <?= $this->Form->end() ?>
                <!-- END FORM-->
            </div>
        <!-- END TABLE PORTLET-->
        </div>
    </div>
</div>

<!-- Include CKEditor -->
<?= $this->Html->script('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js') ?>

<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#prTextEditor'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', 'undo', 'redo', '|',
                    'imageUpload'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative', 'toggleImageCaption',
                    'imageStyle:inline', 'imageStyle:block', 'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells'
                ]
            },
            licenseKey: '',
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error(error);
        });
</script>
