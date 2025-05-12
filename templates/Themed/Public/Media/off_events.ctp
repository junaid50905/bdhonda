<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"><h5>Media Center</h5></div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a href="<?php echo Router::url('/', true); ?>media-center/press-release">Press Release</a></li>
                <!--<li><a class="menu-network-active" href="<?php //echo Router::url('/', true); ?>media-center/events">Events</a></li>-->
                <li><a href="<?php echo Router::url('/', true); ?>media-center/gallery">Gallery</a></li>
            </ul>
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/media-center/press-release-top-banner.jpg" alt="">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="../media-center/press-release">Media Center</a></li>
                <li><a href="">Events</a></li>
            </ul>
        </div>
        <div class="locator-sec safety-sec">
            <h5>Events</h5>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php foreach ($events as $event): ?>
                        <div class="col-md-12 col-xs-12 col-sm-10">
                            <a href="<?php echo Router::url('/', true).'media-center/event-details/'.$event['Event']['id']; ?>"><img src="<?php echo Router::url('/', true).'files/event/image/'.$event['Event']['image_dir'].'/'.$event['Event']['image'] ?>" alt=""></a>
                            <h4 style="padding:0; margin:0; font-size:18px;"><a href="<?php echo Router::url('/', true).'media-center/event-details/'.$event['Event']['id']; ?>" style="font-size:15px;"><?php echo $event['Event']['title'] ?></a></h4>
                            <p><?php echo strip_tags(substr($event['Event']['text'], 0, 250).'...') ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>