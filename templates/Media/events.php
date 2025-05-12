<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/', ['fullBase' => true]); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Media Center</h5>
                </div>
                <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                    <li>
                        <a href="<?= $this->Url->build('/media-center/press-release'); ?>">Press Release</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build('/media-center/gallery'); ?>">Gallery</a>
                    </li>
                </ul>
                <img src="<?= $this->Url->build('/assets/public/images/media-center/press-release-top-banner.jpg'); ?>" alt="">
                <ol class="breadcrumb m-l-brad">
                    <li class="breadcrumb-item">
                        <a href="<?= $this->Url->build('/'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= $this->Url->build('/media-center/press-release'); ?>">Media Center</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">Gallery</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="locator-sec safety-sec">
            <h5>Events</h5>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php foreach ($events as $event): ?>

                            <div class="col-md-12 col-xs-12 col-sm-10">
                                <a href="<?= $this->Url->build('/media-center/event-details/' . $event['id'], ['fullBase' => true]); ?>">
                                    <img src="<?= $this->Url->build('/files/event/image/' . $event['image_dir'] . '/' . $event['image'], ['fullBase' => true]); ?>" alt="">
                                </a>
                                <h4 style="padding:0; margin:0; font-size:18px;">
                                    <a href="<?= $this->Url->build('/media-center/event-details/' . $event['id'], ['fullBase' => true]); ?>" style="font-size:15px;">
                                        <?= h($event['title']); ?>
                                    </a>
                                </h4>
                                <p><?= h(strip_tags(substr($event['text'], 0, 250) . '...')); ?></p>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
