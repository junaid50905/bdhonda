<script src="<?php echo Router::url('/', true); ?>js/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">Add New Event</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Media', array('enctype' => 'multipart/form-data', 'controller' => 'media', 'action' => 'event_add', 'class' => 'form-horizontal')); ?>
                <?php if(!empty($event['Event']['id'])): ?>
                    <input type="hidden" name="data[Event][id]" class="form-control" value="<?php echo $event['Event']['id']; ?>" id="DealerId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="data[Event][title]" class="form-control" <?php echo (!empty($event['Event']['title'])) ? 'value="'.$event['Event']['title'].'"' : 'placeholder="Title" required="required"'; ?> maxlength="255" type="text" id="EventTitle">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Details</label>
                        <div class="col-md-10">
                            <div class="input textarea">
                                <textarea name="data[Event][text]" class="form-control" <?php echo (!empty($event['Event']['text'])) ? '' : 'required="required"'; ?> cols="30" rows="6" id="EventPrText"><?php if(!empty($event['Event']['text'])) echo $event['Event']['text']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
//                        CKEDITOR.replace( 'data[Event][text]' );
                        var editor = CKEDITOR.replace( 'data[Event][text]', {
                            height: 300,

                            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
                            filebrowserBrowseUrl: '<?php echo Router::url('/', true); ?>js/ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: '<?php echo Router::url('/', true); ?>js/ckfinder/ckfinder.html?type=Images',
                            filebrowserUploadUrl: '<?php echo Router::url('/', true); ?>js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: '<?php echo Router::url('/', true); ?>js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                        });
                        CKFinder.setupCKEditor( editor );
                    </script>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Event Image</label>
                        <div class="col-md-6">
                            <div class="input file">
                                <input type="file" name="data[Event][image]" class="form-control" id="EventImage">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Homepage Thumb Image</label>
                        <div class="col-md-6">
                            <div class="input file">
                                <input type="file" name="data[Event][thumb_image]" class="form-control" id="EventThumbImage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn red">Submit</button>
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
