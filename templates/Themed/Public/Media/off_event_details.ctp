<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <?php if(!empty($eventDetails['Event']['image'])){ ?><img src="<?php echo Router::url('/', true).'files/event/image/'.$eventDetails['Event']['image_dir'].'/'.$eventDetails['Event']['image'] ?>" alt=""> <?php } ?>
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="../media-center/events">Events</a></li>
                <li><a href=""><?php echo $eventDetails['Event']['title'] ?></a></li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5><?php echo $eventDetails['Event']['title'] ?></h5>
            <div class="col-md-12">
                <?php echo $eventDetails['Event']['text'] ?>
            </div>
        </div>
    </section>
</div>