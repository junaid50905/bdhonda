<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/form.css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/chosen.css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/ImageSelect.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="locator-sec">
            <br><br>
            <div class="col-md-6 col-sm-6 col-md-offset-3    col-xs-12">
                <?php echo $this->Session->flash(); ?>
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Query', array('controller' => 'queries')); ?>
                <div class="form-left-box rech-us-box">
                    <div class="text-center"><h3><?php echo $productDetails['Product']['name'] ?> Enquiry form</h3></div>
                    <br>
                    <?php echo $this->Form->input('created_ip', array('type' => 'hidden', 'value' => $this->request->ClientIp())); ?>
                    <?php echo $this->Form->input('product_id', array('type' => 'hidden', 'value' => $productDetails['Product']['id'])); ?>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <select name="data[Query][color]" title="Select Color" required="required" class="form-control my-select">
                                <option>Select Color *</option>
                                <?php foreach ($productDetails['Color'] as $color): ?>
                                    <option value="<?php echo $color['name']; ?>" data-img-src="<?php echo Router::url('/', true)."assets/public/images/".$slug."/colors/".$color['image_thumb'] ; ?>"><?php echo $color['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div style="margin-top: 15px;"></div>
                    <div class="form-inline">
                        <div class="col-md-6 col-sm-6 col-sm-12">
                            <?php echo $this->Form->input(
                                'first_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'First Name *', 'required' => true)
                            ); ?>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sm-12">
                            <?php echo $this->Form->input(
                                'last_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Last Name *', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-inline">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $this->Form->input(
                                'mobile',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Mobile Number *', 'required' => true)
                            ); ?>
                            <div class="info-message">11 digit number (01XXXXXXXXX)</div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $this->Form->input(
                                'email',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'E-mail ID', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <select class="form-control" id="divisionList" name="division"><option value="">Select Division</option>
                                <?php foreach ($divisions as $key => $division): ?>
                                    <option value="<?php echo $key ?>"><?php echo $division ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <select name="district" id="districtList" class="form-control">
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div id="locationdiv">
                                <select name="upazila" id="upazilaList" class="form-control dealerSearch">
                                    <option value="">Select Thana/Upazila</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <select name="data[Query][dealer_id]" id="dealer_result" title="Select Dealer" required="required" class="form-control">
                                <option>Select Dealer *</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php echo $this->Form->input(
                                'message',
                                array('class' => 'form-control', 'type' => 'textarea', 'label' => false, 'placeholder' => 'Write Your Comments *', 'required' => true)
                            ); ?>
                        </div>
                    </div>    
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="g-recaptcha" data-sitekey="<?php echo Configure::read('Recaptcha.SiteKey'); ?>"></div>
                            <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <button type="submit" class="btn blue pull-right">Submit</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo Router::url('/', true); ?>assets/public/js/chosen.jquery.js" type="text/javascript"></script>
<script src="<?php echo Router::url('/', true); ?>assets/public/js/ImageSelect.jquery.js" type="text/javascript"></script>
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
    $(".my-select").chosen({width:"100%"});
</script>