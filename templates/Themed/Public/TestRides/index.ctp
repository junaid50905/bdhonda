<div class="" style="display:inline-block; width:100%;" onload="disableSubmit()">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/form.css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/chosen.css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/ImageSelect.css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/jquery.datetimepicker.css" rel="stylesheet">
    <style>
        .list-group-flush:first-child .list-group-item:first-child {
            border-top: 0;
        }
        .list-group-flush .list-group-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }
        .list-group-flush:last-child .list-group-item:last-child {
            border-bottom: 0;
        }
        .modal-title{
            display: inline-block;
        }
    </style>
<!--    <link href="--><?php //echo Router::url('/', true); ?><!--assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet">-->
    <section class="micro-sec network-sec">
        <div class="locator-sec">
            <br><br>
            <div class="col-md-6 col-sm-6 col-md-offset-3    col-xs-12">
                <?php echo $this->Session->flash(); ?>
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Query', array('controller' => 'queries')); ?>
                <div class="form-left-box rech-us-box">
                    <div class="text-center"><h3><?php echo $productDetails['Product']['name'] ?> Test Ride form</h3></div>
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
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-control" style="padding: 1px 0 0 0;width: 72px;">
                                <input type="button" class="btn btn-sm" value="GET OTP" onclick="sendOTP()">
                            </div>
<!--                            <div class="info-message" id="otp_notification">DONE &nbsp;</div>-->
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <?php echo $this->Form->input(
                                'otp',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Enter 6 digit OTP', 'required' => true)
                            ); ?>
                            <div class="info-message">Click GET OTP</div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="col-md-12 col-sm-12 col-xs-12">
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
                                'date_time',
                                array('class' => 'form-control', 'id' => "TestRideDateTime", 'label' => false, 'placeholder' => 'Date & Time ', 'required' => true)
                            ); ?>
<!--                            <div class="input text">-->
<!--                                <input name="data[Query][date_time]" class="form-control" type="text" id="TestRideDateTime">-->
<!--                            </div>-->
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
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="terms_conditions" class="form-check-label">
                                <?php echo $this->Form->checkbox('terms_conditions',array('hiddenField' => false,'class'=>'form-check-input','id'=>'terms_conditions','onchange' => "activateButton(this)")); ?>
                                <a style="padding-left: 4px;" href="#" data-target="#exampleModal" data-toggle="modal">
                                    Terms & Conditions
                                </a>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <button id="submit" type="submit" class="btn blue pull-right">Submit</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
    </section>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Test Ride Terms & Condition</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item">
                            Rider must have a valid driving license to take a test ride. He/she must have to show the driving license to the Dealership before taking the test ride.
                        </li>
                        <li class="list-group-item">Rider must have to wear Helmet, Knee guard, Elbow guard, Gloves & Shoes to avoid any type of injury during the test ride.</li>

                        <li class="list-group-item">Rider must have to provide the required information or query asked by the Dealership for the test ride.</li>

                        <li class="list-group-item">Rider will be permitted to ride the vehicle in a certain period of time or a limited distance determined by the Dealership. Rider should not go out of the area determined by the Dealership.</li>

                        <li class="list-group-item">Rider is committed to return the vehicle to the dealer showroom after finishing the test ride. Rider will be responsible himself/herself for any loss, damage or injury during the test ride. Honda Dealership will take no liabilities for any type of loss, damage or injury.</li>

                        <li class="list-group-item">Rider must pay for any loss or damage to the vehicle that occurs while the vehicle is in his/her possession or control, plus the Dealership’s related expenses.</li>

                        <li class="list-group-item">The Dealership shall not be liable for loss of or damage to any property that rider may have left in the vehicle, either before or after its return to the Dealership.</li>

                        <li class="list-group-item">If rider fails to return the vehicle to the Dealership as required by this Agreement, he/she will be required to pay all expenses incurred by the Dealership to have the vehicle returned and the Dealership, or any of its agents or employees, may peacefully retake possession of the vehicle.</li>

                    </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo Router::url('/', true); ?>assets/public/js/chosen.jquery.js" type="text/javascript"></script>
<script src="<?php echo Router::url('/', true); ?>assets/public/js/ImageSelect.jquery.js" type="text/javascript"></script>
<script src="<?php echo Router::url('/', true); ?>assets/public/js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
<!--<script src="--><?php //echo Router::url('/', true); ?><!--assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>-->
<script>

    function sendOTP() {
        let number = $('#QueryMobile').val();
        if(number.length == 11 && number != null){
            // $('#QueryMobile').disabled = true;
            var input = {
                'mobile_number': number,
                'section':'send-otp'
            };
            $.ajax({
                url:"<?php echo Router::url('/', true); ?>test_rides/checkOTP?number="+number,
                type:'GET',
                success:function (response) {
                    alert('Successfully Send OTP to '+response);
                    // $('#otp_notification').html(response);
                }
            })
        }
    }

    function activateButton(element) {

        if(element.checked) {
            document.getElementById("submit").disabled = false;
        }
        else  {
            document.getElementById("submit").disabled = true;
        }

    }
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
    jQuery(function () {
        document.getElementById("submit").disabled = true;
        jQuery('#TestRideDateTime').datetimepicker({
            format:'Y-m-d H:i',
        });
    });
</script>