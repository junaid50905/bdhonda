<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"><h5>Media Center</h5></div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a class="menu-network-active" href="<?php echo Router::url('/', true); ?>media-center/press-release">Press Release</a></li>
                <!--<li><a href="<?php //echo Router::url('/', true); ?>media-center/events">Events</a></li>-->
                <li><a href="<?php echo Router::url('/', true); ?>media-center/gallery">Gallery</a></li>
            </ul>
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/media-center/press-release-top-banner.jpg" alt="">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="../media-center/press-release">Media Center</a></li>
                <li><a href="">Press Release</a></li>
            </ul>
        </div>
        <div class="locator-sec press-release">
            <h5>Press Release</h5>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <table class="table table-bordered press-release-news">
                            <?php foreach ($press_releases as $press_release): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo Router::url('/', true).'media-center/pr-details/'.$press_release['PressRelease']['id']; ?>"><?php echo $press_release['PressRelease']['title'] ?></a>
                                    <br/>
                                    <em class="date"><?php echo date_format(date_create($press_release['PressRelease']['publish_date']),"d F Y"); ?></em>
                                    <strong><a download href="<?php echo Router::url('/', true).'files/press_release/pr_file/'.$press_release['PressRelease']['file_dir'].'/'.$press_release['PressRelease']['pr_file'] ?>">Download</a></strong>
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