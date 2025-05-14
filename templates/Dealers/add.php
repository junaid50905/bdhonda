<!-- templates/Dealers/add.php -->

<div class="row">
    <!-- District Form -->
    <div class="col-md-6 col-sm-6">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New District</div>
            </div>
            <div class="portlet-body form">
                <?= $this->Form->create(null, ['url' => ['controller' => 'Dealers', 'action' => 'addDistrict'], 'class' => 'form-horizontal']) ?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('division_id', [
                                'label' => false,
                                'class' => 'form-control',
                                'options' => $divisions,
                                'empty' => 'Select Division',
                                'required' => true
                            ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('name', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder' => 'District Name',
                                'required' => true
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

    <!-- Upazila Form -->
    <div class="col-md-6 col-sm-6">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Upazila</div>
            </div>
            <div class="portlet-body form">
                <?= $this->Form->create(null, ['url' => ['controller' => 'Dealers', 'action' => 'addUpazila'], 'class' => 'form-horizontal']) ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('division_id', [
                                'type' => 'select',
                                'options' => $divisions,
                                'empty' => 'Select Division',
                                'label' => false,
                                'id' => 'division_id',
                                'class' => 'form-control'
                            ]) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <select id="district_id" name="district_id" class="form-control" required>
                                <option value="">Select District</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Upazila</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('name', [
                                'label' => false,
                                'class' => 'form-control',
                                'placeholder' => 'Upazila Name',
                                'required' => true
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>


    <!-- Dealer Form -->
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Dealers/Parts Providers',
            ['controller' => 'Dealers', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div><br>
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Dealer/Parts Provider</div>
            </div>
            <div class="portlet-body form">
                <?= $this->Form->create(null, ['type' => 'file', 'class' => 'form-horizontal']) ?>
                <div class="form-body">

                    <?php
                    echo $this->Form->control('division_id', ['class' => 'form-control', 'label' => false, 'options' => $divisions, 'empty' => 'Select Division']);
                    echo $this->Form->control('district_id', ['class' => 'form-control', 'label' => false, 'empty' => 'Select District']);
                    echo $this->Form->control('upazila_id', ['class' => 'form-control', 'label' => false, 'empty' => 'Select Upazila']);
                    echo $this->Form->control('network_type_id', ['class' => 'form-control', 'label' => false, 'options' => [1 => 'Dealer', 2 => 'Parts Provider'], 'empty' => 'Select Network Type']);
                    echo $this->Form->control('name', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Dealer Company Name']);
                    echo $this->Form->control('owner_name', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Owner\'s Name']);
                    echo $this->Form->control('phone', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Phone']);
                    echo $this->Form->control('email', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Email']);
                    echo $this->Form->control('address', ['type' => 'textarea', 'class' => 'form-control', 'label' => false]);
                    echo $this->Form->control('google_map', ['type' => 'textarea', 'class' => 'form-control', 'label' => false]);
                    echo $this->Form->control('temp_image', ['type' => 'file', 'label' => false, 'class' => 'form-control']);
                    ?>

                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#division_id').on('change', function() {
            var divisionId = $(this).val();

            if (divisionId) {
                $.ajax({
                    url: '/dealers/ajaxDistrictsByDivision/' + divisionId,
                    method: 'GET',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content') // for CSRF protection
                    },
                    success: function(data) {
                        console.log(data);

                        $('#upazilaDistrictList').html(data);
                    },
                    error: function() {
                        $('#upazilaDistrictList').html('<option value="">Failed to load</option>');
                    }
                });

            } else {
                $('#district_id').html('<option value="">Select District</option>');
            }
        });
    });
</script>
