<div class="" style="display:inline-block; width:100%;">
    <div class="network-header">
        <img src="<?php echo Router::url('/', true); ?>assets/public/images/career/career.jpg" alt="">
        <ul class="breadcrumb">
            <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
            <li class="active">Career</li>
        </ul>
    </div>
    <div class="locator-sec Safety-sec">
        <h5>Job List</h5>
        <div class="col-md-12 col-xs-12 col-sm-12">
            <ul>
                <?php foreach ($jobs as $job): ?>
                <div class="col-md-12 col-xs-12 col-sm-8">
                    <div style="width:100%; float:left; background:#fff; padding:10px; margin:5px; border:1px solid #ccc">
                        <div class="col-md-7 col-xs-12 col-sm-7">
                            <h4><a href="<?php echo Router::url('/', true).'career/job-details/'.$job['Job']['id']; ?>"><?php echo $job['Job']['name']; ?></a></h4>
                            <h6 style="padding:5px; margin:5px">Job Nature: <?php echo $job['Job']['nature']; ?></h6>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-5">
                            <h6 style="padding:5px; margin:5px">Publish Date: <?php echo $job['Job']['publish_date']; ?></h6>
                            <h6 style="padding:5px; margin:5px">Deadline: <?php echo $job['Job']['deadline']; ?></h6>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>