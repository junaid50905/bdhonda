<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('assets/public/css/form.css'); ?>" rel="stylesheet">

    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <h5>Reach Us</h5>
            </div>
            <img src="<?= $this->Url->image('/assets/public/images/about-us/reach_us_banner.jpg', ['fullBase' => true]) ?>" alt="">

            <ol class="breadcrumb bre-bg">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', ['fullBase' => true]) ?>">Home
                <li class="breadcrumb-item active" aria-current="page"><a href="reach-us/index">Reach Us</a></li>
            </ol>
        </div>

        <div class="locator-sec">
            <h5>Reach Us</h5>
        </div>
    </section>
</div>


<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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