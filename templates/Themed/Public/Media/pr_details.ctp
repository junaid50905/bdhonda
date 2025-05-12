<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="../media-center/press-release">Media Center</a></li>
                <li><a href=""><?php echo $prDetails['PressRelease']['title'] ?></a></li>
            </ul>
        </div>
        <div class="locator-sec">
            <h5><?php echo $prDetails['PressRelease']['title'] ?></h5>
            <div class="col-md-12">
                <?php echo $prDetails['PressRelease']['pr_text'] ?>
            </div>
        </div>
    </section>
</div>