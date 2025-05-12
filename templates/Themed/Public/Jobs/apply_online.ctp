<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/form.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <ul class="breadcrumb">
            <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
            <li><a href="career/index">Career</a></li>
            <li><a class="active">Apply Online</a></li>
        </ul>
        <div class="locator-sec">
            <h5>Apply Online</h5>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <?php echo $this->Session->flash(); ?>
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Job', array('type' => 'file', 'controller' => 'jobs', 'action' => 'apply_online')); ?>
                <div class="form-left-box rech-us-box">
                    <?php echo $this->Form->input('Applicant.created_ip', array('type' => 'hidden', 'value' => $this->request->ClientIp())); ?>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Applicant Name<span class="red">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <?php echo $this->Form->input(
                                'Applicant.first_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'First Name', 'required' => true)
                            ); ?>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <?php echo $this->Form->input(
                                'Applicant.last_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Last Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Apply for<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'Applicant.job_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'options' => $jobs, 'selected' => $job_id, 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Contact Number<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'Applicant.phone',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Contact Number', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">E-mail<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'Applicant.email',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'E-mail', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Present Address</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'Applicant.address',
                                array('class' => 'form-control', 'label' => false, 'type' => 'textarea', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Upload CV<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'Applicant.cv',
                                array('class' => 'form-control', 'label' => false, 'type' => 'file', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12">Captcha Verification<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="g-recaptcha" data-sitekey="<?php echo Configure::read('Recaptcha.SiteKey'); ?>"></div>
                            <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <button type="submit" class="btn blue">Submit</button>
                        </div>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    jQuery('.creload').on('click', function() {
        var mySrc = $(this).prev().attr('src');
        var glue = '?';
        if(mySrc.indexOf('?')!=-1)  {
            glue = '&';
        }
        $(this).prev().attr('src', mySrc + glue + new Date().getTime());
        return false;
    });
</script>