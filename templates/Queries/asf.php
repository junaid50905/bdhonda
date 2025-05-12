<div class="" style="display:inline-block; width:100%;">
    <?= $this->Html->css(['form', 'chosen', 'ImageSelect']) ?>

    <section class="micro-sec network-sec">
        <div class="locator-sec">
            <div class="row p-3" style="justify-content: center;">
                <br><br>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <?= $this->Flash->render() ?>

                    <!-- BEGIN FORM-->
                    <?= $this->Form->create($query, ['url' => ['controller' => 'Queries', 'action' => 'index']]) ?>
                    <div class="form-left-box rech-us-box">

                        <div class="text-center">
                            <h3><?= h($productDetails->name) ?> Enquiry Form</h3>
                        </div>
                        <br>

                        <?= $this->Form->hidden('created_ip', ['value' => $this->request->clientIp()]) ?>
                        <?= $this->Form->hidden('product_id', ['value' => $productDetails->id]) ?>

                        <div class="form-group row g-3">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?= $this->Form->select(
                                    'color',
                                    array_map(function ($color) {
                                        return $color->name;
                                    }, $productDetails->colors),
                                    [
                                        'class' => 'form-select my-select',
                                        'empty' => 'Select Color *',
                                        'required' => true,
                                        'data-img-src' => Router::url('/assets/public/images/' . $slug . '/colors/' . $color->image_thumb, true)
                                    ]
                                ) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="margin-top: 15px;"></div>

                        <div class="form-inline row g-2">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('first_name', [
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'First Name *',
                                    'required' => true
                                ]) ?>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('last_name', [
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Last Name *',
                                    'required' => true
                                ]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-inline row g-2">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('mobile', [
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'Mobile Number *',
                                    'required' => true
                                ]) ?>
                                <div class="info-message">11 digit number (01XXXXXXXXX)</div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?= $this->Form->control('email', [
                                    'class' => 'form-control',
                                    'label' => false,
                                    'placeholder' => 'E-mail ID *',
                                    'required' => true
                                ]) ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-inline row g-3">
                            <div class="col-md-4 col-sm-4">
                                <?= $this->Form->select('division', $divisions, [
                                    'empty' => 'Select Division',
                                    'class' => 'form-select',
                                    'id' => 'divisionList'
                                ]) ?>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <?= $this->Form->select('district', [], [
                                    'empty' => 'Select District',
                                    'class' => 'form-select',
                                    'id' => 'districtList'
                                ]) ?>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div id="locationdiv">
                                    <?= $this->Form->select('upazila', [], [
                                        'empty' => 'Select Thana/Upazila',
                                        'class' => 'form-select dealerSearch',
                                        'id' => 'upazilaList'
                                    ]) ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row pt-3">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?= $this->Form->select('dealer_id', [], [
                                    'empty' => 'Select Dealer *',
                                    'class' => 'form-control',
                                    'required' => true,
                                    'id' => 'dealer_result'
                                ]) ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?= $this->Form->textarea('message', [
                                    'class' => 'form-control',
                                    'placeholder' => 'Write Your Comments *',
                                    'required' => true
                                ]) ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="g-recaptcha" data-sitekey="<?= Configure::read('Recaptcha.siteKey') ?>"></div>
                                <?= $this->Html->script('https://www.google.com/recaptcha/api.js') ?>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn blue pull-right']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->Html->script(['https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', 'chosen.jquery', 'ImageSelect.jquery']) ?>
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

    $(".my-select").chosen({
        width: "100%"
    });
</script>
