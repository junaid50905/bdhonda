<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'All Products',
            ['controller' => 'Products', 'action' => 'allList'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div>
        <p></p>

        <!-- BEGIN TABLE PORTLET -->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Edit Product</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM -->
                <?= $this->Form->create($product, ['type' => 'file', 'url' => ['controller' => 'Products', 'action' => 'edit', $product->id], 'class' => 'form-horizontal']) ?>

                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('name', [
                                'label' => false,
                                'class' => 'form-control',
                                'required' => true,
                                'id' => 'ProductName',
                                'readonly' => true,

                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Slug</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('slug', [
                                'label' => false,
                                'class' => 'form-control',
                                'readonly' => true,
                                'required' => true,
                                'id' => 'ProductSlug'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">About Text</label>
                        <div class="col-md-6">
                            <?= $this->Form->control('about_text', [
                                'label' => false,
                                'class' => 'form-control wysihtml5',
                                'required' => empty($product->about_text),
                                'type' => 'textarea',
                                'rows' => 6
                            ]) ?>
                        </div>
                    </div>

                    <?php
                    $fileFields = [
                        'product_thumb' => 'Product Thumbnail',
                        'home_bg' => 'Product Home Background',
                        'small_logo' => 'Product Small Logo',
                        'inner_bg' => 'Inner Background',
                        'about_image' => 'About Page Image',
                        'specifications_image' => 'Specifications Page Image',
                        'price_image' => 'Price Page Image',
                        'brochure' => 'Product Brochure',
                    ];

                    foreach ($fileFields as $field => $label):
                    ?>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><?= h($label) ?></label>
                            <div class="col-md-6">
                                <?= $this->Form->control($field, [
                                    'label' => false,
                                    'type' => 'file',
                                    'class' => 'form-control',
                                    'required' => empty($product->$field),
                                ]) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                        <a href="#" class="btn default">Cancel</a>
                    </div>
                </div>

                <?= $this->Form->end() ?>
                <!-- END FORM -->
            </div>
        </div>
        <!-- END TABLE PORTLET -->
    </div>
</div>

<?php
$this->Html->scriptBlock(
    '$("#ProductName").keyup(function() {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
        $("#ProductSlug").val(Text);
    });',
    ['block' => true]
);
?>
