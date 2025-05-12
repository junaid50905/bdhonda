<div class="col-md-12">
    <div class="widget">
        <div class="widget-head">
            <div class="pull-left">Add New User</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="icon-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <div class="padd">

                <br>
                <!-- Form starts.  -->
                <?php echo $this->Form->create('User',array('url' => ['controller' => 'users', 'action' => 'add'], 'class' => 'form-horizontal')); ?>

                <div class="form-group">
                    <label class="col-lg-offset-1 col-lg-4 control-label">Username</label>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input(
                            'username',
                            array('class' => 'form-control', 'label' => false, 'placeholder' => 'Username', 'required' => true)
                        ); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-offset-1 col-lg-4 control-label">Password</label>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input(
                            'password',
                            array('class' => 'form-control', 'label' => false, 'placeholder' => 'Password', 'required' => true)
                        ); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-offset-1 col-lg-4 control-label">User Role</label>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input(
                            'role',
                            array('class' => 'form-control', 'label' => false, 'type' => 'select', 'options' => array(1 => 'Admin', 2 => 'Operator'), 'required' => true)
                        ); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-5 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>

</div>