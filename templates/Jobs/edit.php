<script src="<?= $this->Url->build('/js/ckeditor/ckeditor.js', ['fullBase' => true]) ?>"></script>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">Edit Job</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create($job, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'Jobs', 'action' => 'edit', $job->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Title</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="name" value="<?php echo $job->name ?? ''; ?>" class="form-control" placeholder="Job Title" required="required" maxlength="255" type="text" id="JobName">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Nature</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="nature" value="<?php echo $job->nature ?? ''; ?>" class="form-control" placeholder="Job Nature" required="required" maxlength="255" type="text" id="JobNature">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Publish Date</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="publish_date" value="<?php echo $job->publish_date ? $job->publish_date->format('Y-m-d') : ''; ?>" class="form-control" type="date" id="JobPublishDate" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Deadline</label>
                        <div class="col-md-4">
                            <div class="input text">
                                <input name="deadline" value="<?php echo $job->deadline ? $job->deadline->format('Y-m-d') : ''; ?>" class="form-control date-picker" type="date" id="JobDeadline">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Salary</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="salary" value="<?php echo $job->salary ?? ''; ?>" class="form-control" placeholder="Salary" required="required" maxlength="255" type="number" id="JobSalary">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Vacancy</label>
                        <div class="col-md-8">
                            <div class="input text">
                                <input name="vacancy" value="<?php echo $job->vacancy ?? ''; ?>" class="form-control" maxlength="255" type="number" id="JobVacancy">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Job Details</label>
                        <div class="col-md-10">
                            <div class="input textarea">
                                <textarea name="description" class="form-control" cols="30" rows="6" id="description"><?php echo $job->description ?? ''; ?></textarea>
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

