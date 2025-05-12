<script src="<?php echo Router::url('/', true); ?>js/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">Add New Job</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Job', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'media', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($job['Job']['id'])): ?>
                    <input type="hidden" name="data[Job][id]" class="form-control" value="<?php echo $job['Job']['id']; ?>" id="DealerId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Title</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="data[Job][name]" class="form-control" <?php echo (!empty($job['Job']['name'])) ? 'value="'.$job['Job']['name'].'"' : 'placeholder="Job Title" required="required"'; ?> maxlength="255" type="text" id="JobName">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Nature</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="data[Job][nature]" class="form-control" <?php echo (!empty($job['Job']['nature'])) ? 'value="'.$job['Job']['nature'].'"' : 'placeholder="Job Nature" required="required"'; ?> maxlength="255" type="text" id="JobNature">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Publish Date</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="data[Job][publish_date]" class="form-control date-picker" <?php echo (!empty($job['Job']['publish_date'])) ? 'value="'.$job['Job']['publish_date'].'"' : 'required="required"'; ?> type="text" id="JobPublishDate">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Deadline</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="data[Job][deadline]" class="form-control date-picker" <?php echo (!empty($job['Job']['deadline'])) ? 'value="'.$job['Job']['deadline'].'"' : 'required="required"'; ?> type="text" id="JobDeadline">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Salary</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="data[Job][salary]" class="form-control" <?php echo (!empty($job['Job']['salary'])) ? 'value="'.$job['Job']['salary'].'"' : 'placeholder="Salary" required="required"'; ?> maxlength="255" type="text" id="JobSalary">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Vacancy</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="data[Job][vacancy]" class="form-control" <?php echo (!empty($job['Job']['vacancy'])) ? 'value="'.$job['Job']['vacancy'].'"' : 'placeholder="Vacancy" required="required"'; ?> maxlength="255" type="text" id="JobVacancy">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Details</label>
                        <div class="col-md-10">
                            <div class="input textarea">
                                <textarea name="data[Job][description]" class="form-control" <?php echo (!empty($job['Job']['description'])) ? '' : 'required="required"'; ?> cols="30" rows="6" id="JobPrdescription"><?php if(!empty($job['Job']['description'])) echo $job['Job']['description']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
//                        CKEDITOR.replace( 'data[Job][description]' );
                        var editor = CKEDITOR.replace( 'data[Job][description]', {
                            height: 300,
                        });
                        CKFinder.setupCKEditor( editor );
                    </script>
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
