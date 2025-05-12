<!-- BEGIN CONTAINER -->
<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/costom.css" rel="stylesheet">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet">

    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Safety Bangladesh</h5>
                </div>
                <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                    <li><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>Safety-Bangladesh">Safety Approach</a></li>
                    <li><a class="menu-network-active"
                            href="<?= $this->Url->build('/', ['fullBase' => true]); ?>safety-bd/safety-initiatives">Safety
                            Initiatives</a></li>
                    <li><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>safety-bd/safety-education">Safety Education
                            Tips</a></li>
                    <!--                <li><a href="-->
                    <!--services/owners-manual">Owner's manual</a></li>-->
                </ul>
                <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/home-banner/safety-banner.jpg "
                    alt="">
                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Safety initiatives</li>
                </ol>
            </div>
        </div>
        <div class="locator-sec">
            <h5>Safety Initiatives</h5>
            <div class="row p-3">
                <div class="col-md-6 col-sm-6 col-xs-12 mb-5 mt-5">
                    <p>In 1970, Honda established the Driving Safety Promotion Center. Since then, through cooperation
                        with
                        Honda Traffic Education Centers,
                        motorcycle/automobile product dealers, local corporations, and schools, we have provided traffic
                        safety education and training for
                        drivers and riders to more than six million customers in Japan. With regard to overseas
                        activities,
                        Honda started driving safety
                        promotion activities in 1972.</p>

                    <p>It has been carrying out including Bangladesh more than 42 countries doing this activity.
                        Bangladesh
                        Honda private limited started this activity in May’2019. </p>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 mb-5"><img class="img-responsive center-block "
                        src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/initiatives-1.jpg" alt="">
                </div>
            </div>

            <div class="row p-3">

                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <hr class="boder-line">
                    <h3>Honda 4’S’ Concept:</h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 mb-5">

                        <img class="img-responsive center-block im-map"
                            src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/dlr-pic.png" alt="">

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 mb-5  photos">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 item"><a
                                    href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/sales.jpg"
                                    data-lightbox="photos" class="thumbnail"><img class="img-fluid"
                                        src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/sales.jpg">
                                    <p>Sales</p>
                                </a></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 item"><a
                                    href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/service.jpg"
                                    data-lightbox="photos" class="thumbnail"><img class="img-fluid"
                                        src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/service.jpg">
                                    <p>Service</p>
                                </a></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 item"><a
                                    href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/parts.jpg"
                                    data-lightbox="photos" class="thumbnail"><img class="img-fluid"
                                        src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/parts.jpg">
                                    <p>Spare Parts </p>
                                </a></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 item"><a
                                    href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/SAFETY.jpg"
                                    data-lightbox="photos" class="thumbnail"><img class="img-fluid"
                                        src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/saftey/SAFETY.jpg">
                                    <p>Safety</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12  p-3">
                <hr class="boder-line">
                <h3>Activity Picture</h3>
            </div>

            <div class="photos">
                <div class="row p-3">
                    <?php foreach ($activity_picture as $activity): ?>
                        <div class="col-md-3 col-sm-3 col-xs-12 item">
                            <a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/safeties/activity_picture/<?php echo $activity['image'] ?>"
                                data-lightbox="photos" class="thumbnail">
                                <img class="img-fluid"
                                    src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/safeties/activity_picture/<?php echo $activity['image'] ?>">
                                <p><?php echo $activity['name'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--  -->

            <div class="row p-3">
                <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
                    <hr class="boder-line">
                    <h3>PDSA – Pre Delivery Safety Advise</h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
                    <p>PDSA means Pre Delivery Safety Advice. This is booklet consists of various safety tips. Honda
                        provides this booklet with every motorcycle. When a customer buys a motorcycle from any honda
                        showroom, he was explained in detail about this booklet. As a result, customers can ride safely
                        and
                        confidently while riding a motorcycle.
                    </p>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
                    <div class="photos">
                        <div class="row">
                            <?php foreach ($pdsa as $image_url): ?>
                                <div class="col-md-3 col-sm-3 col-xs-12 item">
                                    <a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/safeties/pdsa/<?php echo $image_url['image'] ?>"
                                        data-lightbox="photos" class="thumbnail">
                                        <img class="img-fluid"
                                            src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/safeties/pdsa/<?php echo $image_url['image'] ?>">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <section class="productEnquiry text-center">
        <div class="row" style="justify-content: end;">
            <div class="bticon col-md-3 col-xs-6 col-sm-6 pull-right">
                <div class="bticon-box">
                    <a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>dealer-network/dealer-locator">
                        <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/dealer-locator.png">
                        <span>Dealer & Service Location</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div><!-- END CONTAINER -->
