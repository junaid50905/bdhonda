<div class="" style="display:inline-block; width:100%;">
    <div class="network-header">
        <img src="<?php echo Router::url('/', true); ?>assets/public/images/career/career.jpg" alt="">
        <ul class="breadcrumb">
            <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
            <li class="active">Career</li>
        </ul>
    </div>
    <div class="locator-sec Safety-sec">
        <?php if(!empty($jobDetails)){ ?>
        <h5>Job Details</h5>
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-12 col-xs-12 col-sm-8">
                <div style="width:100%; float:left;padding:10px; margin:5px;line-height: 20px">
                    <div class="col-md-7 col-xs-12 col-sm-7">
                        <h4><a href="javascript:void(0)"><?php echo $jobDetails['Job']['name']; ?></a></h4>
                        <h6 style="padding:5px; margin:5px">Job Nature: <?php echo $jobDetails['Job']['nature']; ?> </h6>
                        <h6 style="padding:5px; margin:5px">Salary: <?php echo $jobDetails['Job']['salary']; ?> <br> Vacancy : <?php echo $jobDetails['Job']['vacancy']; ?> </h6>
                        <?php echo $jobDetails['Job']['description']; ?>
                    </div>
                    <div class="col-md-5 col-xs-12 col-sm-5" style="background:#fff; border:1px solid #ccc; padding:15px;">
                        <h6 style="padding:5px; margin:5px">Publish Date: <?php echo $jobDetails['Job']['publish_date']; ?></h6>
                        <h6 style="padding:5px; margin:5px">Deadline: <?php echo $jobDetails['Job']['deadline']; ?></h6>
                    </div>
                </div>
                <div style="padding:5px; font-size:13px; text-align:center;">
                    <a href="<?php echo Router::url('/', true).'career/apply-online/'.$jobDetails['Job']['id']; ?>" class="btn btn-success" style="font-size:18px; margin-bottom:20px;">Apply Online</a>
                </div>
            </div>
        </div>
        <?php } else echo '<h5>Sorry! Job not found.</h5>' ?>
    </div>
</div>