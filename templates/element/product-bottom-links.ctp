<ul>
    <li>
        <a href="<?= $this->Url->build('/online_bookings/index/' . h($productDetails->slug), ['fullBase' => true]); ?>" target="_blank">
            <div class="micro-footer-img book-now">&nbsp;</div><span>Book Now</span>
        </a>
    </li>

    <?php if ($productDetails->test_ride == 1): ?>
        <li>
            <a href="<?= $this->Url->build('/test_rides/index/' . h($productDetails->slug), ['fullBase' => true]); ?>" target="_blank">
                <div class="micro-footer-img test-ride">&nbsp;</div><span>Test Ride</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if ($productDetails->angle_view == 1): ?>
        <li>
            <a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/view360', ['fullBase' => true]); ?>">
                <div class="micro-footer-img angle-view">&nbsp;</div><span>Angle View</span>
            </a>
        </li>
    <?php endif; ?>

    <li>
        <a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/price', ['fullBase' => true]); ?>">
            <div class="micro-footer-img price">৳</div><span>Price</span>
        </a>
    </li>

    <?php if (!empty($productDetails->brochure)): ?>
        <li>
            <a href="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->brochure), ['fullBase' => true]); ?>" target="_blank">
                <div class="micro-footer-img e-brochure">&nbsp;</div><span>E-Brochure</span>
            </a>
        </li>
    <?php endif; ?>

    <li>
        <a href="<?= $this->Url->build('/dealer-network/dealer-locator', ['fullBase' => true]); ?>" target="_blank">
            <div class="micro-footer-img dealer-locator">&nbsp;</div><span>Dealer Locator</span>
        </a>
    </li>
</ul>