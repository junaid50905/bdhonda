<?php

use Cake\Core\Configure;
?>
<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('assets/public/css/form.css'); ?>" rel="stylesheet">

    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <h5>Reach Us</h5>
            </div>
            <img src="<?= $this->Url->build('/assets/public/images/about-us/reach_us_banner.jpg', ['fullBase' => true]) ?>" alt="">
            <ol class="breadcrumb bre-bg">
                <li class="breadcrumb-item"><?= $this->Html->link('Home', '/') ?></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $this->Html->link('Reach Us', ['action' => 'index']) ?></li>
            </ol>
        </div>

        <div class="locator-sec">
            <h5>Reach Us</h5>
            <div class="row p-3">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>
                        We are always ready to respond to your queries, to help you out by providing accurate information
                        you required and to build a strong relationship with you. Please contact us by following
                        any of the processes shared here.
                    </p>
                    <hr>
                </div>



                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-xs-12 col-sm-12 contact-tab">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default sss">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title p-3">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Contact Us
                                            <i class="glyphicon glyphicon-plus"></i>
                                            <i class="glyphicon glyphicon-minus"></i>
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body contactinfo-box">
                                        <div class="off_address col-md-12 col-sm-12 col-xs-12">
                                            <h3><strong>The Office of Bangladesh Honda Private Limited</strong></h3>
                                            <p><b>Corporate Office</b><br>
                                                Monem Business District, East Tower (10th floor), 111,<br> Bir Uttam C. R. Dutta Road, Karwanbazar, Dhaka – 1205
                                            </p>
                                            <p>&nbsp;</p>
                                            <p> Phone: &nbsp;&nbsp;&nbsp;029632273 <br />
                                                Helpline: 08 000 430 430 <b>(Except weekend & Govt. holidays)</b><br />
                                                Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@bdhonda.com</p>
                                            <p>&nbsp;</p>
                                            <p>&nbsp;</p>
                                            <p><b>Factory</b><br>
                                                Abdul Monem Economic Zone,<br />Char Baushia, Gazaria,<br />Munshiganj, Bangladesh
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?= $this->Html->script('https://www.google.com/recaptcha/api.js') ?>

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
</script>