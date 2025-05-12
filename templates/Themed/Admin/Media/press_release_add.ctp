<script src="<?php echo Router::url('/', true); ?>js/ckeditor/ckeditor.js"></script>
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
                <?php echo $this->Form->create('Media', array('enctype' => 'multipart/form-data', 'controller' => 'media', 'action' => 'press_release_add', 'class' => 'form-horizontal')); ?>
                <?php if(!empty($press_release['PressRelease']['id'])): ?>
                    <input type="hidden" name="data[PressRelease][id]" class="form-control" value="<?php echo $press_release['PressRelease']['id']; ?>" id="DealerId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="data[PressRelease][title]" class="form-control" <?php echo (!empty($press_release['PressRelease']['title'])) ? 'value="'.$press_release['PressRelease']['title'].'"' : 'placeholder="Title" required="required"'; ?> maxlength="255" type="text" id="PressReleaseTitle">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Publish Date</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="data[PressRelease][publish_date]" class="form-control date-picker" <?php echo (!empty($press_release['PressRelease']['publish_date'])) ? 'value="'.$press_release['PressRelease']['publish_date'].'"' : 'required="required"'; ?> type="text" id="PressReleasePublishDate">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">PR Details</label>
                        <div class="col-md-10">
                            <div class="input textarea">
                                <textarea name="data[PressRelease][pr_text]" class="form-control" <?php echo (!empty($press_release['PressRelease']['pr_text'])) ? '' : 'required="required"'; ?> cols="30" rows="6" id="PressReleasePrText"><?php if(!empty($press_release['PressRelease']['pr_text'])) echo $press_release['PressRelease']['pr_text']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        // CKEDITOR.replace( 'data[Event][text]' );
                        var editor = CKEDITOR.replace( 'data[PressRelease][pr_text]', {
                            height: '300',
                            filebrowserBrowseUrl : '/app/webroot/js/ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl : '/app/webroot/js/ckfinder/ckfinder.html?type=Images',
                            filebrowserUploadUrl : '/app/webroot/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl : '/app/webroot/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        });
                    </script>
                    <div class="form-group">
                        <label class="col-md-2 control-label">PR File</label>
                        <div class="col-md-6">
                            <div class="input file">
                                <input type="file" name="data[PressRelease][pr_file]" <?php echo (!empty($press_release['PressRelease']['pr_file'])) ? '' : 'required="required"'; ?> class="form-control" id="PressReleasePrFile">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END TABLE PORTLET-->
    </div>
</div>
