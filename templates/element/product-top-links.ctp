<ul>
    <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/about'); ?>">About Me</a></li>
    <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/features'); ?>">Features</a></li>
    <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/specifications'); ?>">Specifications</a></li>
    <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/colors'); ?>">Colors</a></li>
    <li><a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/accessories'); ?>">Accessories</a></li>
    <li><a href="<?= $this->Url->build('/queries/index/' . h($productDetails->slug)); ?>">Enquiry</a></li>
    <li>
        <a href="<?= $this->Url->build('/product/' . h($productDetails->slug) . '/index'); ?>">
            <img src="<?= $this->Url->build('/assets/public/images/' . h($productDetails->slug) . '/' . h($productDetails->small_logo)); ?>" alt="">
        </a>
    </li>
</ul>