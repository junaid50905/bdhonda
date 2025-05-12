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
                    <li><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>safety-bd/safety-initiatives">Safety
                            Initiatives</a>
                    </li>
                    <li><a class="menu-network-active"
                            href="<?= $this->Url->build('/', ['fullBase' => true]); ?>safety_bd/safety-education">Safety Education
                            Tips</a>
                    </li>

                    <!--                <li><a href="-->
                    <!--services/owners-manual">Owner's manual</a></li>-->
                </ul>
                <img src="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/images/home-banner/safety-banner.jpg "
                    alt="">
                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Safety Education tips </li>
                </ol>
            </div>
        </div>
        <div class="locator-sec">
            <h5>Safety Education Tips</h5>
            <div class="row p-3">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php foreach ($education_videos as $video_link): ?>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="#">
                                    <?php
                                $link = $video_link['image'];
                                if(strpos($link, 'youtube.com/embed') === false){
                                    $link = '';
                                }
                                ?>
                                    <iframe width="350" height="235" allowfullscreen src="<?php echo $link ?>"></iframe>
                                    <div class="caption">
                                        <h4 class="text-center"><?php echo $video_link['name'] ?></h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
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
