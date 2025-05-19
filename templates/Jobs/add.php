<script src="<?= $this->Url->build('/js/ckeditor/ckeditor.js', ['fullBase' => true]) ?>"></script>

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
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'Jobs', 'action' => 'add'], 'class' => 'form-horizontal')); ?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Title</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="name" class="form-control" placeholder="Job Title" required="required" maxlength="255" type="text" id="JobName">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Nature</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="nature" class="form-control" placeholder="Job Nature" required="required" maxlength="255" type="text" id="JobNature">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Publish Date</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="publish_date" class="form-control" type="date" id="JobPublishDate" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Deadline</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="deadline" class="form-control date-picker" type="date" id="JobDeadline">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Salary</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="salary" class="form-control" placeholder="Salary" required="required" maxlength="255" type="number" id="JobSalary">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Vacancy</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="vacancy" class="form-control" maxlength="255" type="number" id="JobVacancy">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Details</label>
                        <div class="col-md-10">
                            <div class="input textarea">
                                <textarea name="description" class="form-control" cols="30" rows="6" id="description"></textarea>
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

<script>
    var editor = CKEDITOR.replace('description', {
        height: 300
    });
    // Optional if using CKFinder
    if (typeof CKFinder !== 'undefined') {
        CKFinder.setupCKEditor(editor);
    }
</script>

