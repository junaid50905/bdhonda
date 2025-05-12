<div class="" style="display:inline-block; width:100%;">
    <link href="<?= $this->Url->build('/assets/public/css/about.css', ['fullBase' => true]); ?>" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <ul class="breadcrumb">
                <li><a href="<?= $this->Url->build('/') ?>" style="margin-right: 10px;">Home</a></li>
                <li><a href="<?= $this->Url->build('/media-center/press-release') ?>" style="margin-right: 10px;"> / Media Center /</a></li>
                <li><a href="" style="margin-right: 10px;"><?= h($prDetails['title']) ?></a></li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5><?= h($prDetails['title']) ?></h5>
            <div class="col-md-12">
                <?= $prDetails['pr_text'] ?>
            </div>
        </div>
    </section>
</div>
