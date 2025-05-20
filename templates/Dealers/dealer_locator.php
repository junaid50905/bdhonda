<link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet">
<section class="micro-sec network-sec">
    <div class="network-header">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <h5>Dealer Network</h5>
            </div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a class="menu-network-active"
                        href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/dealer-locator">Dealer Locator</a>
                </li>
                <li><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/apply-for-dealership">Apply for
                        Dealership</a></li>
            </ul>
            <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/network/dealer_locator_banner.jpg"
                alt="">
            <ol class="breadcrumb m-l-brad">
                <li class="breadcrumb-item"><a href=" <?= $this->Url->build('/', ['fullBase' => true]); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href=" ../dealer-network/dealer-locator">Dealer Network</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dealer locator</li>
            </ol>
        </div>
    </div>
    <div class="locator-sec">
        <h5>Dealer locator</h5>
        <h2>To locate the Dealer closest to you, go to Division then go to District and finally go to Area.</h2>
        <div class="row p-3">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-left-box">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 network-input">
                            <label>Division</label>
                            <select class="form-control" id="dealer_division_id" name="dealer_division_id" required="required">
                                <option>Select Division</option>
                                <?php foreach ($divisions as $key => $division): ?>
                                    <option value="<?php echo $division['id'] ?>"><?php echo $division['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 network-input">
                            <label>District</label>
                            <select name="dealer_district_id" id="dealer_district_id" class="form-control">
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6 network-input">
                            <label style="float:left; margin-top:10px;">Thana/Upazila</label>
                            <div id="locationdiv">
                                <select name="dealer_upazila_id" id="dealer_upazila_id" class="form-control">
                                    <option value="">Select Thana/Upazila</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 network-input">
                            <label>&nbsp;</label>
                            <button type="button" id="dealerSearch">Submit</button>
                            <button type="button" id="btnReset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="dealer_result">
                </div>
            </div>
        </div>
    </div>
</section>


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

        $('#dealerSearch').click(function() {
            let divisionId = $('#dealer_division_id').val();
            let districtId = $('#dealer_district_id').val();
            let upazilaId = $('#dealer_upazila_id').val();

            // Optional validation
            if (!divisionId || !districtId || !upazilaId) {
                alert('Please select Division, District and Upazila.');
                return;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content') // Ensure this meta tag is in your layout
                }
            });


            $.ajax({
                url: "<?= $this->Url->build('/get-all-dealers') ?>",
                type: 'GET',
                data: {
                    division_id: divisionId,
                    district_id: districtId,
                    upazila_id: upazilaId
                },
                dataType: 'json',
                success: function(dealers) {
                    let html = '';

                    if (dealers.length === 0) {
                        html = `<p>No Dealers found in your area. Please change the Upazila, District or Division to see your nearest Dealer.</p>`;
                    } else {
                        $.each(dealers, function(index, dealer) {
                            html += `
                            <div class="row">
                                <div class="repeat-dealor">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <h4><label>Dealer Network:</label> ${dealer.name}</h4>
                                        <div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;">
                                            <img src="/honda/assets/public/images/network/dealers/${dealer.photo}" style="width:100%; height:auto;">
                                        </div>
                                        <span>${dealer.name}</span>
                                        <p>${dealer.address}</p>
                                        <div class="repeat-dealor-height">
                                            <i class="fa fa-user"></i> ${dealer.owner_name}<br>
                                            <i class="fa fa-phone"></i> ${dealer.phone}<br>
                                            <i class="fa fa-envelope"></i> <a href="mailto:${dealer.email}">${dealer.email}</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        ${dealer.google_map}
                                    </div>
                                </div>
                            </div>
                        `;
                        });
                    }

                    $('#dealer_result').html(html);
                },
                error: function() {
                    $('#dealer_result').html('<p>Error loading dealers</p>');
                }
            });
        });
    });
</script>
