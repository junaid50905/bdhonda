<ul>
    <li><a href="<?php echo Router::url('/', true); ?>online_bookings/index/<?php echo $slug ?>" target="_blank"><div class="micro-footer-img book-now">&nbsp;</div><span>Book Now</span></a></li>
    <?php if ($productDetails['Product']['test_ride'] == 1):  ?>
    <li><a href="<?php echo Router::url('/', true); ?>test_rides/index/<?php echo $slug ?>" target="_blank"><div class="micro-footer-img test-ride">&nbsp;</div><span>Test Ride</span></a></li>
    <?php endif; ?>
    <?php if ($productDetails['Product']['angle_view'] == 1):  ?>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/view360"><div class="micro-footer-img angle-view">&nbsp;</div><span>Angle View</span></a></li>
    <?php endif; ?>
    <li><a href="<?php echo Router::url('/', true); ?>product/<?php echo $slug ?>/price"><div class="micro-footer-img price">৳</div><span>Price</span></a></li>
    <?php if ($productDetails['Product']['brochure']): ?>
    <li><a href="<?php echo Router::url('/', true); ?>assets/public/images/<?php echo $slug ?>/<?php echo $productDetails['Product']['brochure'] ?>" target="_blank"><div class="micro-footer-img e-brochure">&nbsp;</div><span>E-Brochure</span></a></li>
    <?php endif; ?>
    <li><a href="<?php echo Router::url('/', true); ?>dealer-network/dealer-locator" target="_blank"><div class="micro-footer-img dealer-locator">&nbsp;</div><span>Dealer Locator</span></a></li>
</ul>