<!-- templates/Dealers/add.php -->

<div class="row">



    <!-- Edit Dealer Form -->
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Dealers/Parts Providers',
            ['controller' => 'Dealers', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div><br>

        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Edit Dealer/Parts Provider</div>
            </div>
            <div class="portlet-body form">
                <?= $this->Form->create($dealer, [
                    'url' => ['controller' => 'Dealers', 'action' => 'edit', $dealer->id],
                    'type' => 'file',
                    'class' => 'form-horizontal'
                ]) ?>

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Division</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('division_id', [
                                'class' => 'form-control',
                                'label' => false,
                                'id' => 'dealer_division_id',
                                'options' => $divisions,
                                'empty' => 'Select Division'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">District</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('district_id', [
                                'class' => 'form-control',
                                'label' => false,
                                'id' => 'dealer_district_id',
                                'empty' => 'Select District'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Upazila</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('upazila_id', [
                                'class' => 'form-control',
                                'label' => false,
                                'id' => 'dealer_upazila_id',
                                'empty' => 'Select Upazila'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Network Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'network_type_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => 'Select Network Type', 'options' => array(1 => 'Dealer', 2 => 'Parts Provider'), 'required' => true)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Dealer Company Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Dealer Company Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Owner's Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'owner_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Owner\'s Name', 'required' => false)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Phone</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'phone',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Phone', 'required' => true)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Email</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'email',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Email', 'required' => false)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Dealer Shop Address</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'address',
                                array('class' => array('form-control', 'wysihtml5'), 'label' => false, 'type' => 'textarea', 'required' => true)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Dealer Shop Google Map</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'google_map',
                                array('class' => 'form-control', 'label' => false, 'type' => 'textarea', 'required' => false)
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label text-center">Dealer Shop Photo</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file(
                                'temp_image',
                                array('class' => 'form-control', 'label' => false, 'required' => false)
                            ); ?>
                        </div>
                    </div>

                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Update</button>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#division_id').change(function() {
            var divisionId = $(this).val();
            $('#district_id').html('<option value="">Loading...</option>');
            var districtUrl = "<?= $this->Url->build('/get-districts') ?>";


            if (divisionId) {
                $.ajax({
                    url: districtUrl,
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
                        $('#district_id').html(options);
                    },
                    error: function() {
                        $('#district_id').html('<option value="">Error loading districts</option>');
                    }
                });
            } else {
                $('#district_id').html('<option value="">Select District</option>');
            }
        });
    });
</script>

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
    });
</script>
