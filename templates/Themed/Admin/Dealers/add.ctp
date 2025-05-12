<div class="row">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New District</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Dealer', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'dealers', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'District.division_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'options' => $divisions, 'empty' => 'Select Division', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'District.name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'District Name', 'required' => true)
                            ); ?>
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
        <!-- END TABLE PORTLET-->
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Upazila</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Dealer', array('enctype' => 'multipart/form-data', 'controller' => 'dealers', 'action' => 'add', 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Upazila.division_id',
                                array('class' => 'form-control', 'id' => 'upazilaDivisionList', 'label' => false, 'type' => 'select', 'options' => $divisions, 'empty' => 'Select Division', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Upazila.district_id',
                                array('class' => 'form-control', 'id' => 'upazilaDistrictList', 'label' => false, 'type' => 'select', 'empty' => 'Select District', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Upazila</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Upazila.name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Upazila Name', 'required' => true)
                            ); ?>
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
        <!-- END TABLE PORTLET-->
    </div>
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
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Dealer/Parts Provider</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Dealer', array('enctype' => 'multipart/form-data', 'controller' => 'dealers', 'action' => 'add', 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'division_id',
                                array('class' => 'form-control', 'id' => 'divisionList', 'label' => false, 'type' => 'select', 'options' => $divisions, 'empty' => 'Select Division', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'district_id',
                                array('class' => 'form-control', 'id' => 'districtList', 'label' => false, 'type' => 'select', 'empty' => 'Select District', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Upazila</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'upazila_id',
                                array('class' => 'form-control', 'id' => 'upazilaList', 'label' => false, 'type' => 'select', 'empty' => 'Select Upazila', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Network Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'network_type_id',
                                array('class' => 'form-control', 'label' => false, 'type' => 'select', 'empty' => 'Select Network Type', 'options' => array(1 => 'Dealer', 2 => 'Parts Provider'), 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Company Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Dealer Company Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Owner's Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'owner_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Owner\'s Name', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Phone</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'phone',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Phone', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'email',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Email', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Shop Address</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'address',
                                array('class' => array('form-control', 'wysihtml5'), 'label' => false, 'type' => 'textarea', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Shop Google Map</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'google_map',
                                array('class' => 'form-control', 'label' => false, 'type' => 'textarea', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Dealer Shop Photo</label>
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
        <!-- END TABLE PORTLET-->
    </div>
</div>
