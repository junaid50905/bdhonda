<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/form.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <!-- flash message start -->
            <?php $flashMessage = $this->Flash->render(); ?>
            <?php if (!empty($flashMessage)): ?>
                <div class="col-lg-12">
                    <div class="alert alert-success flash-msg">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?= $flashMessage ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- flash message end -->
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Dealer Network</h5>
                </div>
                <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                    <li><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/dealer-locator">Dealer Locator</a>
                    </li>
                    <li><a class="menu-network-active"
                            href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/apply-for-dealership">Apply for
                            Dealership</a></li>
                </ul>
                <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/network/Website-Homepage-Slider-Creator.jpg"
                    alt="">
                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="../dealer-network/dealer-locator">Dealer Network</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apply for Dealership</li>
                </ol>
            </div>
        </div>
        <div class="locator-sec">
            <h5>Apply for Dealership</h5>
            <div class="row p-3">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>
                        <span class="half_line_gap">Bangladesh Honda Private Limited is searching for dealership in the
                            following area:<br></span>
                        <span class="half_line_gap"><strong>Dhaka:</strong>
                            Dhaka – Bashabo/Mugda, Dhamrai.
                        </span>
                        <span class="half_line_gap"><strong>Dhaka Sub:</strong>
                            Faridpur – Sadarpur, Rajbari Sadar, Madaripur – Shibchor,Tekerhat, Tangail – Bhuapur,
                            Narayanganj – Rupganj (Bhulta).</span>
                        <span class="half_line_gap"><strong>CTG:</strong>
                            Chattagram – Laxmipur Sadar, Noakhali - Companiganj, Bandarban Sadar, Rangamati Sadar, Cox’s
                            Bazar - Ramu.
                        </span>
                        <span class="half_line_gap"><strong>Rajshahi: </strong>
                            Bogra - Sherpur.
                        </span>
                        <span class="half_line_gap"><strong>Rongpur:</strong>
                            Gaibandha – Gobindaganj, Kurigram – Bhurungamari.
                        </span>
                        <span class="half_line_gap"><strong>Khulna:</strong>
                            Narail Sadar.
                        </span>
                        <span class="half_line_gap"><strong>Mymensingh:</strong>
                            Mymensingh Sadar.
                        </span>
                        <span class="half_line_gap"><strong>Sylhet:</strong>
                            Sylhet – Beanibazar.
                        </span>
                        <span class="half_line_gap"><strong>Barishal:</strong>
                            Barisal – Gournadi, Pirojpur Sadar, Bhandaria, Patuakhali – Kalapara.
                        </span>
                        <br>
                    </p>

                    <p>
                        <u><strong>Contact Person & Number:</strong></u><br>
                    <table style='width:40%;height:25%; border: 2px solid black;'>
                        <thead>
                            <tr>
                                <th
                                    style='text-align:center;background-color: #C7C7C7;border: 2px solid black;color: black;'>
                                    Division</th>
                                <th
                                    style='text-align:center;background-color: #C7C7C7;border: 2px solid black;color: black;'>
                                    PIC</th>
                                <th style='text-align:center;border: 2px solid black;color: black;'>Contact</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dhaka Sub-2</td>
                                <td rowspan="6" style='text-align:center;border: 2px solid black;'>Syed Muhaiminul Haque
                                </td>
                                <td rowspan="6" style='text-align:center;border: 2px solid black;'>01313492547</td>

                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Khulna</td>


                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Chittagong</td>


                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Dhaka city</td>


                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Dhaka Sub 1</td>


                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Barisal</td>


                            </tr>
                            <tr>
                                <td>Mymensingh</td>
                                <td rowspan="4" style='text-align:center;border: 2px solid black;'>Sikder Rasheduzzaman
                                </td>
                                <td rowspan="4" style='text-align:center;border: 2px solid black;'>01313492546</td>

                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Sylhet</td>


                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Rajshahi</td>


                            </tr>
                            <tr>
                                <td style='border: 2px solid black;'>Rangpur</td>


                            </tr>
                        </tbody>
                    </table>
                    </p>

                    <p>
                        <br>

                        <br>
                        <u><strong>Basic Requirements:</strong></u><br>
                        <b>Divisional City area :</b><br>
                        <b>Showroom Size:</b> 1,500-2,000 square feet.<br>
                        <b>Showroom Front:</b> 30* feet.<br>
                        <b>Working Capital:</b> BDT 10,000,000 or more.<br>&nbsp;<br>
                        <b>Sub-district/ Thana area:</b><br>
                        <b>Showroom Size:</b>1,300-1,500 square feet<br>
                        <b>Showroom Front:</b> 30* feet.<br>
                        <b>Working Capital: </b>BDT 8,000,000 or more.<br>
                        &nbsp;<br>

                    </p>

                </div>

                <div class="row " style="justify-content: center;">

                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="row">
                            <!-- BEGIN FORM-->
                            <?= $this->Form->create(null, [
                                'url' => ['controller' => 'Dealers', 'action' => 'applyForDealership'],
                                'type' => 'file',
                                'class' => 'form-horizontal'
                            ]) ?>
                            <div class="form-left-box rech-us-box">
                                <div class="text-center">
                                    <h3>Register for Dealer Application Form</h3>
                                </div>
                                <br>
                                <input type="hidden" name="created_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

                                <div style="margin-top: 15px;"></div>
                                <div class="form-inline">
                                    <div class="col-md-12 col-sm-5 col-sm-12">
                                        <input type="text" name="name" class="form-control" placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="col-md-12 col-sm-5 col-xs-12">
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile Number *" required>
                                        <div class="info-message">11 digit number (01XXXXXXXXX)</div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-inline">
                                    <div class="col-md-12 col-sm-5 col-xs-12">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail ID" required>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-inline">
                                    <div class="col-md-12 col-sm-5">
                                        <select name="district_id" class="form-control" id="dealer_district_id" required>
                                            <option value="">Select District</option>
                                            <!-- Dynamically load districts here -->
                                            <?php foreach ($districts as $districtId => $districtName): ?>
                                                <option value="<?= $districtId ?>"><?= $districtName ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-sm-5">
                                        <div id="locationdiv">
                                            <select name="upazila_id" class="form-control" id="dealer_upazila_id" required>
                                                <option value="">Select Thana/Upazila</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-8 col-xs-12">
                                    <button type="submit" class="btn blue pull-right">Submit</button>
                                </div>
                            </div>
                            <?= $this->Form->end() ?>

                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/js/chosen.jquery.js" type="text/javascript"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

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


    });
</script>

<script>
    $(document).ready(function() {
        // Manual close
        $('.flash-msg .close').on('click', function() {
            $(this).closest('.flash-msg').fadeOut(300, function() {
                $(this).remove();
            });
        });

        // Auto close after 5 seconds
        setTimeout(function() {
            $('.flash-msg').fadeOut(300, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>
