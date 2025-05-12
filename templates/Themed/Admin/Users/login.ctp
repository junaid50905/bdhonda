<?php
    //echo phpinfo();
    // $string = 'cup';
    // $name = 'coffee';
    // $str = 'This is a $string with my $name in it.';
    // echo $str. "\n";
    // eval("\$str = \"$str\";");
    // echo $str. "\n";
?>
<!-- BEGIN LOGIN FORM -->
<?php echo $this->Form->create('User', array('url' => ['controller' => 'users', 'action' => 'login'], 'class' => 'login-form')); ?>
    <h3 class="form-title">Login to your account</h3>
    <?php echo $this->Session->flash(); ?>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <?php echo $this->Form->input(
                'username',
                array('class' => 'form-control', 'label' => false, 'autocomplete' => 'off', 'placeholder' => 'Username', 'required' => true)
            ); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <?php echo $this->Form->input(
                'password',
                array('class' => 'form-control', 'label' => false, 'autocomplete' => 'off', 'placeholder' => 'Username', 'required' => true)
            ); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Captcha Verification<span class="red">*</span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="g-recaptcha" data-sitekey="<?php echo Configure::read('Recaptcha.SiteKey'); ?>"></div>
            <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
            <br>
        </div>
    </div>
    <div class="form-actions">
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Remember me </label>
        <button type="submit" class="btn green pull-right">
            Login <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>
<?php $this->Form->end(); ?>
<!-- END LOGIN FORM -->