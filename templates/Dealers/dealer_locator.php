<link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet">
<section class="micro-sec network-sec">
    <div class="network-header">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <h5>Dealer Network</h5>
            </div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a class="menu-network-active"
                        href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/dealer-locator">Dealer Locator</a>
                </li>
                <li><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/apply-for-dealership">Apply for
                        Dealership</a></li>
            </ul>
            <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/network/dealer_locator_banner.jpg"
                alt="">
            <ol class="breadcrumb m-l-brad">
                <li class="breadcrumb-item"><a href=" <?= $this->Url->build('/', ['fullBase' => true]); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href=" ../dealer-network/dealer-locator">Dealer Network</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dealer locator</li>
            </ol>
        </div>
    </div>
    <div class="locator-sec">
        <h5>Dealer locator</h5>
        <h2>To locate the Dealer closest to you, go to Division then go to District and finally go to Area.</h2>
        <div class="row p-3">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-left-box">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 network-input">
                            <label>Division</label>
                            <select class="form-control" id="divisionList" name="division" required="required">
                                <option value="">Select Division</option>
                                <?php foreach ($divisions as $key => $division): ?>
                                    <option value="<?php echo $key ?>"><?php echo $division['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 network-input">
                            <label>District</label>
                            <select name="district" id="districtList" class="form-control">
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6 network-input">
                            <label style="float:left; margin-top:10px;">Thana/Upazila</label>
                            <div id="locationdiv">
                                <select name="upazila" id="upazilaList" class="form-control">
                                    <option value="">Select Thana/Upazila</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 network-input">
                            <label>&nbsp;</label>
                            <button type="button" id="dealerSearch">Submit</button>
                            <button type="button" id="btnReset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="dealer_result">
                </div>
            </div>
        </div>
    </div>
</section>
