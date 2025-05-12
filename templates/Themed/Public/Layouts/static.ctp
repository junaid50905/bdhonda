<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>"/>
    <meta name="keywords" content="<?php echo $meta_keywords; ?>"/>
    <link rel="icon" href="<?php echo Router::url('/', true); ?>assets/public/images/favicon.png" type="image/x-icon"/>
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo Router::url('/', true); ?>assets/public/font-awesome-4.6.3/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" async>
</head>
<body>
    <div style="padding: 20px">
        <?php echo $content_for_layout; ?>
    </div>
    <script src="<?php echo Router::url('/', true); ?>assets/public/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>