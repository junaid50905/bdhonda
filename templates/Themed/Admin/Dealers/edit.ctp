<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Dealers/Parts Providers',
                '/dealers/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    Edit Dealer/Parts Provider
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Dealer', array('enctype' => 'multipart/form-data', 'controller' => 'dealers', 'action' => 'edit', 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <?php echo $this->Form->input(
                        'id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $dealerDetails['Dealer']['id'])
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'division_id',
                                array('class' => 'form-control', 'id' => 'divisionList', 'label' => false, 'type' => 'select', 'options' => $divisions, 'empty' => 'Select Division', 'default' => $dealerDetails['Dealer']['division_id'], 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'district_id',
                                array('class' => 'form-control', 'id' => 'districtList', 'label' => false, 'type' => 'select', 'options' => $districts, 'empty' => 'Select District', 'default' => $dealerDetails['Dealer']['district_id'], 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Upazila</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'upazila_id',
                                array('class' => 'form-control', 'id' => 'upazilaList', 'label' => false, 'type' => 'select', 'options' => $upazilas, 'empty' => 'Select Upazila', 'default' => $dealerDetails['Dealer']['upazila_id'], 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Network Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'network_type_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => 'Select Network Type', 'options' => array(1 => 'Dealer', 2 => 'Parts Provider'), 'default' => $dealerDetails['Dealer']['network_type_id'], 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Company Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, 'value' => $dealerDetails['Dealer']['name'], 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Owner's Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'owner_name',
                                array('class' => 'form-control', 'label' => false, 'value' => $dealerDetails['Dealer']['owner_name'], 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'phone',
                                array('class' => 'form-control', 'label' => false, 'value' => $dealerDetails['Dealer']['phone'], 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'email',
                                array('class' => 'form-control', 'label' => false, 'value' => $dealerDetails['Dealer']['email'], 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Shop Address</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input(
                                'address',
                                array('class' => array('form-control', 'wysihtml5'),  'value' => $dealerDetails['Dealer']['address'], 'label' => false, 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Shop Google Map</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input(
                                'google_map',
                                array('class' => 'form-control',  'value' => $dealerDetails['Dealer']['google_map'], 'label' => false, 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Shop Photo</label>
                        <div class="col-md-6">
                            <?php if (!empty($dealerDetails['Dealer']['photo'])): ?>
                                <?php echo $this->Form->input(
                                    'photo',
                                    array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $dealerDetails['Dealer']['photo'])
                                ); ?>
                                <img src="<?php echo $this->webroot.'assets/public/images/network/dealers/'.$dealerDetails['Dealer']['photo']; ?>" alt="" height="100px">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Change Dealer Photo</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_image',
                                array('class' => 'form-control', 'label' => false, 'required' => false)
                            );?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>