<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'All Products',
                '/products/all_list',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add New Product</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create('Product', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'add'], 'class' => 'form-horizontal')); ?>
                <?php if(!empty($product['Product']['id'])): ?>
                    <input type="hidden" name="data[Product][id]" class="form-control" value="<?php echo $product['Product']['id']; ?>" id="ProductId">
                <?php endif; ?>
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'name',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['name'])) ? 'value="'.$product['Product']['name'].'"' : 'placeholder="Name"', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Slug</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'slug',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['slug'])) ? 'value="'.$product['Product']['slug'].'"' : 'placeholder="Slug"', 'readonly' => 'readonly','required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">About Text</label>
                        <div class="col-md-6">
                            <div class="input textarea">
                                <textarea name="data[Product][about_text]" class="form-control wysihtml5" <?php echo (!empty($product['Product']['about_text'])) ? '' : 'required="required"'; ?> cols="30" rows="6" id="ProductAboutText"><?php if(!empty($product['Product']['about_text'])) echo $product['Product']['about_text']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product Thumbnail</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_product_thumb',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['product_thumb'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product Home Background</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_home_bg',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['home_bg'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product Small Logo</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_small_logo',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['small_logo'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Inner Background</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_inner_bg',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['inner_bg'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">About Page Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_about_image',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['about_image'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Specifications Page Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_specifications_image',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['specifications_image'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Price Page Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_price_image',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['price_image'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product Brochure</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file('temp_brochure',
                                array('class' => 'form-control', 'label' => false, (!empty($product['Product']['brochure'])) ? '' : 'required')
                            );?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END TABLE PORTLET-->
    </div>
</div>
<?php
$this->Html->scriptBlock('$("#ProductName").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,\'-\');
        $("#ProductSlug").val(Text);        
});', array('block' => 'scriptBottom'));
?>
