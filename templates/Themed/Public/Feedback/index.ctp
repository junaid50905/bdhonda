<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/form.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"><h5>Reach Us</h5></div>
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/about-us/reach_us_banner.jpg" alt="">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="reach-us/index">Reach Us</a></li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5>Reach Us</h5>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>
                    We are always ready to respond your queries, to help you out by providing accurate information you required and to build a strong relationship with you. Please contact with us by following any of the process share here.
                </p><hr>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <?php echo $this->Session->flash(); ?>
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Feedback', array('controller' => 'feedback', 'action' => 'index')); ?>
                <div class="form-left-box rech-us-box">
                    <?php echo $this->Form->input('created_ip', array('type' => 'hidden', 'value' => $this->request->ClientIp())); ?>
                    <div class="form-group">
                        <label class="col-md-4 col-sm-4 col-xs-12">Your Name<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Your Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-sm-4 col-xs-12">Your E-mail ID<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'email',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Your E-mail ID', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-sm-4 col-xs-12">Your Mobile Number<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'mobile',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Your Mobile Number', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-sm-4 col-xs-12">Your Message<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php echo $this->Form->input(
                                'message',
                                array('class' => 'form-control', 'label' => false, 'type' => 'textarea', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-sm-4 col-xs-12">Captcha Verification<span class="red">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="g-recaptcha" data-sitekey="<?php echo Configure::read('Recaptcha.SiteKey'); ?>"></div>
                            <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
                            <br>
                        </div>
                    </div>
                    <button type="submit" class="btn blue">Submit</button>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="col-md-12 col-xs-12 col-sm-12 contact-tab">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default sss">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Contact Us
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <i class="glyphicon glyphicon-minus"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                                <div class="panel-body contactinfo-box">
                                    <div class="off_address col-md-12 col-sm-12 col-xs-12">
                                        <h3><strong>The Office of Bangladesh Honda Private Limited</strong></h3>
                                        <p><b>Corporate Office</b><br>
                                            Monem Business District, East Tower (10th floor), 111, <br> Bir Uttam C. R. Dutta Road, Karwanbazar, Dhaka – 1205
<!--                                            Crystal Palace (12th Floor), House # 22, Road # 140,<br>-->
<!--                                            Gulshan-1, Dhaka 1212, Bangladesh-->
                                        </p>
                                        <p>&nbsp;</p>
                                        <p> Phone:  &nbsp;&nbsp;&nbsp;029632273 <br/>
                                            Helpline: 08 000 430 430 <b>(Except weekend & Govt. holidays)</b><br/>
                                            Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@bdhonda.com</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p><b>Factory</b><br>
                                            Abdul Monem Economic Zone,<br/>Char Baushia, Gazaria,<br/>Munshiganj, Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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