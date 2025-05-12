<!-- BEGIN CONTAINER -->
<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/costom.css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">

    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"><h5>Safety Bangladesh</h5></div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a href="<?php echo Router::url('/', true); ?>Safety-Bangladesh">Safety Approach</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>safety-bd/safety-initiatives">Safety Initiatives</a></li>
                <li><a class="menu-network-active" href="<?php echo Router::url('/', true); ?>safety_bd/safety-education">Safety Education Tips</a></li>

                <!--                <li><a href="--><!--services/owners-manual">Owner's manual</a></li>-->
            </ul>
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/home-banner/safety-banner.jpg " alt="">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li class="active">Safety  Education tips </li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5>Safety Education Tips</h5>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <?php foreach ($education_videos as $video_link): ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="#">
                                <?php
                                $link = $video_link['Safety']['image'];
                                if(strpos($link, 'youtube.com/embed') === false){
                                    $link = '';
                                }
                                ?>
                                <iframe width="350" height="235" allowfullscreen src="<?php echo $link ?>"></iframe>
                                <div class="caption">
                                    <h4 class="text-center"><?php echo $video_link['Safety']['name'] ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>

</section>




<section class="productEnquiry text-center">
    <div class="row">
        <div class="bticon col-md-3 col-xs-6 col-sm-6 pull-right">
            <div class="bticon-box">
                <a href="<?php echo Router::url('/', true); ?>dealer-network/dealer-locator">
                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/dealer-locator.png">
                    <span>Dealer & Service Location</span>
                </a>
            </div>
        </div>
    </div>
</section>
</div><!-- END CONTAINER -->