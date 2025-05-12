<ul>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/about">About Me</a></li>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/features">Features</a></li>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/specifications">Specifications</a></li>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/colors">Colors</a></li>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/accessories">Accessories</a></li>
    <li><a href="<?php echo Router::url('/', true); ?>queries/index/<?php echo $slug ?>">Enquiry</a></li>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/index"><img src="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['small_logo'] ?>" alt=""></a></li>
</ul>