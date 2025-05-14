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
    </div>

    <div class="col-md-12 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">All Colors</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <table class="table table-bordered color-table">
                    <thead>
                        <tr>
                            <th>Color Name</th>
                            <th>Color Tab Name</th>
                            <th>Product Image</th>
                            <th>Product Thumbnail</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product->colors as $color) { ?>
                            <tr>
                                <?= $this->Form->create(null, [
                                    'url' => ['controller' => 'Products', 'action' => 'addProductDetails', $product->id],
                                    'type' => 'file',
                                    'id' => 'ProductAddProductDetailsForm',
                                    'class' => 'form-inline'
                                ]) ?>

                                <input type="hidden" name="form_name" value="update color details">
                                <input type="hidden" name="data[Color][id]" value="<?= h($color->id) ?>">
                                <input type="hidden" name="data[Product][slug]" value="<?= h($product->slug ?? '') ?>">
                                <input type="hidden" name="data[Color][product_id]" value="<?= h($product->id) ?>">

                                <td>
                                    <input name="data[Color][name]" class="form-control"
                                        value="<?= h($color->name) ?>" maxlength="100"
                                        type="text" id="ColorName">
                                </td>

                                <td>
                                    <input name="data[Color][tab_name]" class="form-control"
                                        value="<?= h($color->tab_name) ?>" maxlength="100"
                                        type="text" id="ColorTabName">
                                </td>

                                <td>
                                    <input type="file" name="data[Color][temp_image]" class="form-control" id="ColorTempImage">
                                </td>

                                <td>
                                    <input type="file" name="data[Color][temp_image_thumb]" class="form-control" id="ColorTempImageThumb">
                                </td>

                                <td>
                                    <input name="data[Color][status]" class="form-control"
                                        value="<?= h($color->status) ?>" maxlength="10"
                                        type="text" id="ColorStatus">
                                </td>

                                <td>
                                    <button type="submit" class="btn blue">Submit</button>
                                </td>

                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <div class="clearfix"></div>
                <!-- END FORM-->
            </div>
            <div class="portlet-title">
                <div class="caption">Add Color Details</div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <input type="hidden" name="form_name" value="add color details">

                    <?php echo $this->Form->input(
                        'Color.product_id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->id)
                    ); ?>
                    <?php echo $this->Form->input(
                        'Product.slug',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->slug)
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Color Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Color.name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Color Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Color Tab ID</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Color.tab_name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Color Tab ID', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file(
                                'Color.temp_image',
                                array('class' => 'form-control', 'label' => false, 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Product Image Thumbnail</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file(
                                'Color.temp_image_thumb',
                                array('class' => 'form-control', 'label' => false, 'required' => true)
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-5 col-md-9">
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


    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">All Features</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <table class="table table-bordered color-table">
                    <thead>
                        <tr>
                            <th>Feature Name</th>
                            <th width="40%">Feature Details</th>
                            <th>Feature Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product['features'] as $feature) { ?>
                            <tr>
                                <form action="products/add_product_details" enctype="multipart/form-data" controller="products" class="form-inline" id="ProductAddProductDetailsForm" method="post" accept-charset="utf-8">
                                    <?php if (!empty($feature->id)) { ?>
                                        <input type="hidden" name="data[Feature][id]" class="form-control" value="<?php echo $feature->id; ?>" id="FeatureId">
                                        <input type="hidden" name="data[Product][slug]" class="form-control" value="<?php echo $product->slug; ?>" id="ProductSlugForFeature">
                                    <?php } ?>
                                    <input type="hidden" name="data[Feature][product_id]" class="form-control" value="<?php echo $product->id; ?>" id="FeatureProductId">
                                    <td><input name="data[Feature][name]" class="form-control" <?php echo (!empty($feature->name)) ? 'value="' . $feature->name . '"' : 'placeholder="Feature Name" required="required"' ?> maxlength="100" type="text" id="FeatureName"></td>
                                    <td width="40%"><textarea rows="3" name="data[Feature][details]" class="form-control" id="FeatureDetails"><?php echo (!empty($feature->details)) ? $feature->details : 'required="required"' ?></textarea></td>
                                    <td><input type="file" name="data[Feature][temp_image]" class="form-control" <?php echo (!empty($feature->image)) ? '' : 'required="required"' ?> id="FeatureTempImage"></td>
                                    <td><button type="submit" class="btn red btn-xs">Update</button></td>
                                </form>
                                <td>
                                    <?php
                                    echo $this->Form->postLink(
                                        'Delete',
                                        array(
                                            'controller' => 'products',
                                            'action' => 'deleteFeature',
                                            $feature['id']
                                        ),
                                        array(
                                            'class' => 'btn red btn-xs',
                                            'escape' => false
                                        ),
                                        __('Are you sure you want to delete # %s?', $feature->id)
                                    );
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="clearfix"></div>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END TABLE PORTLET-->
    </div>

</div>
