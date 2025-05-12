<div class="" style="display:inline-block; width:100%;">
    <?= $this->Html->css('about', ['pathPrefix' => 'assets/public/css/']); ?>
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                    <h5>Media Center</h5>
                </div>
                <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                    <li>
                        <a class="menu-network-active" href="<?= $this->Url->build('/media-center/press-release'); ?>">Press Release</a>
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
                        <a href="#">Press Release</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="locator-sec press-release p-3">
            <h5>Press Release</h5>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <table class="table table-bordered press-release-news">
                            <?php foreach ($press_releases as $press_release): ?>
                                <tr>
                                    <td>
                                        <a href="<?= $this->Url->build('/media-center/pr-details/' . $press_release->id); ?>">
                                            <?= h($press_release->title); ?>
                                        </a>
                                        <br />
                                        <em class="date"><?= $press_release->publish_date->format('d F Y'); ?></em>
                                        <strong>
                                            <a download href="<?= $this->Url->build('/files/press_release/pr_file/' . $press_release->file_dir . '/' . $press_release->pr_file); ?>">
                                                Download
                                            </a>
                                        </strong>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
