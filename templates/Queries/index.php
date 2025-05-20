<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/assets/public/css/form.css', ['fullBase' => true]); ?>" rel="stylesheet" />
    <link href="<?= $this->Url->build('/assets/public/css/chosen.css', ['fullBase' => true]); ?>" rel="stylesheet" />
    <link href="<?= $this->Url->build('/assets/public/css/ImageSelect.css', ['fullBase' => true]); ?>" rel="stylesheet" />

    <section class="micro-sec network-sec">
        <div class="locator-sec">
            <div class="row p-3" style="justify-content: center;">
                <br><br>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <?php echo $this->Form->create(null, ['controller' => 'Queries', 'action' => 'addQuery']); ?>
                    <div class="form-left-box rech-us-box">
                        <div class="text-center">
                            <h3><?php echo $productDetails['name'] ?> Enquiry form</h3>
                        </div>
                        <br>
                        <?php echo $this->Form->input('created_ip', array('type' => 'hidden', 'value' => $this->request->ClientIp())); ?>
                        <?php echo $this->Form->input('product_id', array('type' => 'hidden', 'value' => $productDetails['id'])); ?>

                        <div class="form-group row g-3">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="color" title="Select Color" required="required"
                                    class="form-select my-select">
                                    <option>Select Color *</option>
                                    <?php foreach ($productDetails['colors'] as $color): ?>
                                        <option value="<?= h($color['name']); ?>"
                                            data-img-src="<?= $this->Url->build('/', ['fullBase' => true]) . "assets/public/images/" . h($slug) . "/colors/" . h($color['image_thumb']); ?>">
                                            <?= h($color['name']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="margin-top: 15px;"></div>
                        <div class="form-inline row g-2">
                            <div class="col-md-6 col-sm-6 col-sm-12 ">
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
                        <div class="form-inline row g-2">
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
                        <div class="form-inline row g-3">
                            <div class="col-md-4 col-sm-4">
                                <select class="form-select" id="dealer_division_id" name="division">
                                    <option value="">Select Division</option>
                                    <?php foreach ($divisions as $key => $division): ?>
                                        <option value="<?php echo $key ?>"><?php echo $division ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <select name="district" id="dealer_district_id" class="form-select">
                                    <option value="">Select District</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div id="locationdiv">
                                    <select name="upazila" id="dealer_upazila_id" class="form-select dealerSearch">
                                        <option value="">Select Thana/Upazila</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row pt-3">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select name="dealer_id" id="dealer_id" title="Select Dealer"
                                        required="required" class="form-control">
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

                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn blue pull-right">Submit</button>
                            </div>
                        </div>

                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        // Load districts when division changes
        $('#dealer_division_id').change(function() {
            var divisionId = $(this).val();
            $('#dealer_district_id').html('<option value="">Loading...</option>');
            $('#dealer_upazila_id').html('<option value="">Select Upazila</option>');

            if (divisionId) {
                $.ajax({
                    url: "<?= $this->Url->build('/get-districts') ?>",
                    type: 'GET',
                    data: {
                        division_id: divisionId
                    },
                    dataType: 'json',
                    success: function(response) {
                        let options = '<option value="">Select District</option>';
                        $.each(response, function(key, value) {
                            options += `<option value="${key}">${value}</option>`;
                        });
                        $('#dealer_district_id').html(options);
                    },
                    error: function() {
                        $('#dealer_district_id').html('<option value="">Error loading districts</option>');
                    }
                });
            } else {
                $('#dealer_district_id').html('<option value="">Select District</option>');
            }
        });

        // Load upazilas when district changes
        $('#dealer_district_id').change(function() {
            var districtId = $(this).val();
            $('#dealer_upazila_id').html('<option value="">Loading...</option>');

            if (districtId) {
                $.ajax({
                    url: "<?= $this->Url->build('/get-upazilas') ?>",
                    type: 'GET',
                    data: {
                        district_id: districtId
                    },
                    dataType: 'json',
                    success: function(response) {
                        let options = '<option value="">Select Upazila</option>';
                        $.each(response, function(key, value) {
                            options += `<option value="${key}">${value}</option>`;
                        });
                        $('#dealer_upazila_id').html(options);
                    },
                    error: function() {
                        $('#dealer_upazila_id').html('<option value="">Error loading upazilas</option>');
                    }
                });
            } else {
                $('#dealer_upazila_id').html('<option value="">Select Upazila</option>');
            }
        });

        // Load dealers when upazila changes
        $('#dealer_upazila_id').change(function() {
            var dealerUpazilaId = $(this).val();
            $('#dealer_id').html('<option value="">Loading...</option>');

            if (dealerUpazilaId) {
                $.ajax({
                    url: "<?= $this->Url->build('/get-dealers') ?>",
                    type: 'GET',
                    data: {
                        upazila_id: dealerUpazilaId
                    },
                    dataType: 'json',
                    success: function(response) {
                        let options = '<option value="">Select Dealer</option>';
                        $.each(response, function(key, value) {
                            options += `<option value="${key}">${value}</option>`;
                        });
                        $('#dealer_id').html(options);
                    },
                    error: function() {
                        $('#dealer_id').html('<option value="">Error loading dealers</option>');
                    }
                });
            } else {
                $('#dealer_id').html('<option value="">Select Dealers</option>');
            }
        });

    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= $this->Url->build('/assets/public/js/chosen.jquery.js', ['fullBase' => true]); ?>" type="text/javascript"></script>
<script src="<?= $this->Url->build('/assets/public/js/ImageSelect.jquery.js', ['fullBase' => true]); ?>" type="text/javascript"></script>
<script>
    jQuery('.creload').on('click', function() {
        var mySrc = $(this).prev().attr('src');
        var glue = '?';
        if (mySrc.indexOf('?') != -1) {
            glue = '&';
        }
        $(this).prev().attr('src', mySrc + glue + new Date().getTime());
        return false;
    });
    $(".my-select").chosen({
        width: "100%"
    });
</script>
