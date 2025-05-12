<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">

        <div class="network-header">
            <?php if (!empty($eventDetails['image'])) { ?>
                <img src="<?= $this->Url->build('/files/event/image/' . $eventDetails['image_dir'] . '/' . $eventDetails['image']); ?>" alt="">
            <?php } ?>
            <ul class="breadcrumb">
                <li><a style="margin-right: 10px;" href="<?= $this->Url->build('/', ['fullBase' => true]); ?>">Home</a></li>
                <li><a style="margin-right: 10px;"  href="../events"> / Events / </a></li>
                <li><a href=""><?php echo $eventDetails['title'] ?></a></li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5><?php echo $eventDetails['title'] ?></h5>
            <div class="col-md-12">
                <?php echo $eventDetails['text'] ?>
            </div>
        </div>
    </section>
</div>
