<?= $this->Html->css('https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.css') ?>


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

                <?= $this->Form->create($press_release, ['type' => 'file', 'url' => ['enctype' => 'multipart/form-data', 'controller' => 'Media', 'action' => 'pressReleaseAdd'], 'class' => 'form-horizontal']) ?>

                <?= $this->Form->hidden('id', ['value' => $press_release->id ?? null]) ?>


                <div class="form-body">

                    <div class="row form-group">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                            <?= $this->Form->control('title', [
                                'class' => 'form-control',
                                'required' => true,
                                'placeholder' => 'Title',
                                'label' => false,
                                'maxlength' => 255,
                                'value' => $press_release->title ?? '',
                            ]) ?>
                        </div>
                    </div>

                    <div class="row form-group">
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

                    <div class="row form-group">
                        <label class="col-md-2 control-label">PR Details</label>
                        <div class="col-sm-10">
                            <?= $this->Form->control('pr_text', [
                                'class' => 'form-control',
                                'rows' => 10,
                                'required' => true,
                                'value' => $press_release->pr_text ?? '',
                                'label' => false,
                                'id' => 'editor1',
                                'type' => 'textarea'
                            ]) ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-2 control-label">PR File</label>
                        <div class="col-sm-10">
                            <?= $this->Form->control('pr_file', [
                                'type' => 'file',
                                'class' => 'form-control',
                                'required' => empty($press_release->pr_file),
                                'type' => 'file',
                                'label' => false,
                            ]) ?>
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

            </div>

            <!-- END TABLE PORTLET-->
        </div>
    </div>
</div>

<?= $this->Html->script('https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js') ?>
<?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>

<script>
    $(document).ready(function () {
  // Initialize CKEditor with custom toolbar
  CKEDITOR.replace("editor1", {
    height: 300,
    toolbar: [
      { name: "clipboard", items: ["Cut", "Copy", "Paste", "Undo", "Redo"] },
      { name: "editing", items: ["Find", "Replace", "SelectAll"] },
      {
        name: "basicstyles",
        items: ["Bold", "Italic", "Underline", "Strike", "RemoveFormat"]
      },
      {
        name: "paragraph",
        items: [
          "NumberedList",
          "BulletedList",
          "-",
          "Outdent",
          "Indent",
          "-",
          "Blockquote"
        ]
      },
      {
        name: "insert",
        items: ["Image", "Table", "HorizontalRule", "SpecialChar"]
      },
      { name: "tools", items: ["Maximize", "ShowBlocks"] }
    ]
  });

  // Display content in the output div when "Get Content" is clicked
  $("#getContent").click(function () {
    var editorData = CKEDITOR.instances.editor1.getData();
    $("#output").html(editorData || "<em>No content to display.</em>");
  });
});

</script>

