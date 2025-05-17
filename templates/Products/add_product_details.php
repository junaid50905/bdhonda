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

    <!-- color -->
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
    <!-- feature -->
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

                                <?= $this->Form->create(null, [
                                    'url' => ['controller' => 'Products', 'action' => 'addProductDetails', $product->id],
                                    'type' => 'file',
                                    'id' => 'ProductAddProductDetailsForm',
                                    'class' => 'form-inline'
                                ]) ?>

                                <?php if (!empty($feature->id)) { ?>
                                    <input type="hidden" name="form_name" class="form-control" value="update feature">
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
                                            $feature->id
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
            <div class="portlet-title">
                <div class="caption">Add Feature Details</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>

                <input type="hidden" name="form_name" value="add feature item">

                <div class="form-body">
                    <?php echo $this->Form->input(
                        'Feature.product_id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->id)
                    ); ?>
                    <?php echo $this->Form->input(
                        'Product.slug',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->slug)
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Feature Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Feature.name',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Feature Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Feature Details</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input(
                                'Feature.details',
                                array('class' => 'form-control', 'label' => false, 'type' => 'textarea', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Feature Image</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->file(
                                'Feature.temp_image',
                                array('class' => 'form-control', 'label' => false, 'required' => true)
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-5 col-md-9">
                        <button type="submit" class="btn red">Submit</button>
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
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">All Prices</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <table class="table table-bordered color-table">
                    <thead>
                        <tr>
                            <th>Model Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product['prices'] as $price) { ?>
                            <tr>
                                <?= $this->Form->create(null, [
                                    'url' => ['controller' => 'Products', 'action' => 'addProductDetails', $product->id],
                                    'type' => 'file',
                                    'class' => 'form-inline'
                                ]) ?>
                                <?php if (!empty($price['id'])) { ?>
                                    <input type="hidden" name="data[Price][id]" class="form-control" value="<?php echo $price['id']; ?>" id="PriceId">
                                <?php } ?>
                                <input type="hidden" name="form_name" class="form-control" value="update price">
                                <input type="hidden" name="data[Price][product_id]" class="form-control" value="<?php echo $product->id; ?>" id="ColorProductId">
                                <td><input name="data[Price][model]" class="form-control" <?php echo (!empty($price['model'])) ? 'value="' . $price['model'] . '"' : 'placeholder="Model Name" required="required"' ?> maxlength="100" type="text" id="ModelName"></td>
                                <td><input name="data[Price][price]" class="form-control" <?php echo (!empty($price['price'])) ? 'value="' . $price['price'] . '"' : 'placeholder="Model Price" required="required"' ?> maxlength="100" type="text" id="ModelPrice"></td>
                                <td><button type="submit" class="btn blue">Submit</button></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="clearfix"></div>
                <!-- END FORM-->
            </div>
            <div class="portlet-title">
                <div class="caption">Add Price Details</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <?php echo $this->Form->input(
                        'form_name',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => 'add price')
                    ); ?>
                    <?php echo $this->Form->input(
                        'Price.product_id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->id)
                    ); ?>
                    <?php echo $this->Form->input(
                        'Product.slug',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->slug)
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Model Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Price.model',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Model Name', 'required' => true)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Model Price</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Price.price',
                                array('class' => 'form-control', 'label' => false, 'placeholder' => 'Model Price', 'required' => true)
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
    <div class="col-md-6 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add Body Dimension Details</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <?php if (!empty($product['body_dimensions'][0]['id'])) {
                        echo $this->Form->input(
                            'form_name',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => 'body dimension')
                        );
                    } ?>
                    <?php if (!empty($product['body_dimensions'][0]['id'])) {
                        echo $this->Form->input(
                            'BodyDimension.id',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product['body_dimensions'][0]['id'])
                        );
                    } ?>
                    <?php echo $this->Form->input(
                        'BodyDimension.product_id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->id)
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Length</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.length',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['length'])) ? 'value="' . $product['body_dimensions'][0]['length'] . '"' : 'placeholder="Length"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Width</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.width',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['width'])) ? 'value="' . $product['body_dimensions'][0]['width'] . '"' : 'placeholder="Width"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Height</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.height',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['height'])) ? 'value="' . $product['body_dimensions'][0]['height'] . '"' : 'placeholder="Height"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Wheel Base</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.wheel_base',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['wheel_base'])) ? 'value="' . $product['body_dimensions'][0]['wheel_base'] . '"' : 'placeholder="Wheel Base"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Ground Clearance</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.ground_clearance',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['ground_clearance'])) ? 'value="' . $product['body_dimensions'][0]['ground_clearance'] . '"' : 'placeholder="Ground Clearance"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kerb Weight</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.kerb_weight',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['kerb_weight'])) ? 'value="' . $product['body_dimensions'][0]['kerb_weight'] . '"' : 'placeholder="Kerb Weight"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Fuel Tank Capacity</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'BodyDimension.fuel_tank_capacity',
                                array('class' => 'form-control', 'label' => false, (!empty($product['body_dimensions'][0]['fuel_tank_capacity'])) ? 'value="' . $product['body_dimensions'][0]['fuel_tank_capacity'] . '"' : 'placeholder="Fuel Tank Capacity"', 'required' => false)
                            ); ?>
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

    <div class="col-md-6 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">Add Engine Details</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <?php if (!empty($product['engines'][0]['id'])) {
                        echo $this->Form->input(
                            'form_name',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => 'engine')
                        );
                    } ?>
                    <?php if (!empty($product['engines'][0]['id'])) {
                        echo $this->Form->input(
                            'Engine.id',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product['engines'][0]['id'])
                        );
                    } ?>
                    <?php echo $this->Form->input(
                        'Engine.product_id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->id)
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.type',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['type'])) ? 'value="' . $product['engines'][0]['type'] . '"' : 'placeholder="Type"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Displacement</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.displacement',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['displacement'])) ? 'value="' . $product['engines'][0]['displacement'] . '"' : 'placeholder="Displacement"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Max Net Power</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.max_net_power',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['max_net_power'])) ? 'value="' . $product['engines'][0]['max_net_power'] . '"' : 'placeholder="Max Net Power"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Max Net Torque</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.max_net_torque',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['max_net_torque'])) ? 'value="' . $product['engines'][0]['max_net_torque'] . '"' : 'placeholder="Max Net Torque"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Bore</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.bore',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['bore'])) ? 'value="' . $product['engines'][0]['bore'] . '"' : 'placeholder="Bore"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Stroke</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.stroke',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['stroke'])) ? 'value="' . $product['engines'][0]['stroke'] . '"' : 'placeholder="Stroke"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Compression Ratio</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.compression_ratio',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['compression_ratio'])) ? 'value="' . $product['engines'][0]['compression_ratio'] . '"' : 'placeholder="Compression Ratio"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Air Filter Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.air_filter_type',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['air_filter_type'])) ? 'value="' . $product['engines'][0]['air_filter_type'] . '"' : 'placeholder="Air Filter Type"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Starting Method</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Engine.starting_method',
                                array('class' => 'form-control', 'label' => false, (!empty($product['engines'][0]['starting_method'])) ? 'value="' . $product['engines'][0]['starting_method'] . '"' : 'placeholder="Starting Method"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn red">Submit</button>
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
    <div class="col-md-6 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Add Transmission Details</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <?php if (!empty($product['transmissions'][0]['id'])) {
                        echo $this->Form->input(
                            'form_name',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => 'transmission')
                        );
                    } ?>
                    <?php if (!empty($product['transmissions'][0]['id'])) {
                        echo $this->Form->input(
                            'Transmission.id',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product['transmissions'][0]['id'])
                        );
                    } ?>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Transmission.transmission_type',
                                array('class' => 'form-control', 'label' => false, (!empty($product['transmissions'][0]['transmission_type'])) ? 'value="' . $product['transmissions'][0]['transmission_type'] . '"' : 'placeholder="Transmission Type"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">No of Gears</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Transmission.no_of_gears',
                                array('class' => 'form-control', 'label' => false, (!empty($product['transmissions'][0]['no_of_gears'])) ? 'value="' . $product['transmissions'][0]['no_of_gears'] . '"' : 'placeholder="No of Gears"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Gear Pattern</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Transmission.gear_pattern',
                                array('class' => 'form-control', 'label' => false, (!empty($product['transmissions'][0]['gear_pattern'])) ? 'value="' . $product['transmissions'][0]['gear_pattern'] . '"' : 'placeholder="Gear Pattern"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Max Speed</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'Transmission.max_speed',
                                array('class' => 'form-control', 'label' => false, (!empty($product['transmissions'][0]['max_speed'])) ? 'value="' . $product['transmissions'][0]['max_speed'] . '"' : 'placeholder="Max Speed"', 'required' => false)
                            ); ?>
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

    <div class="col-md-6 col-sm-12">
        <!-- BEGIN TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">Add Frames & Suspensions Details</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <?php echo $this->Form->create(null, array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'products', 'action' => 'addProductDetails', $product->id], 'class' => 'form-horizontal')); ?>
                <div class="form-body">
                    <?php if (!empty($product['frames_suspensions'][0]['id'])) {
                        echo $this->Form->input(
                            'form_name',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => 'frame suspension')
                        );
                    } ?>
                    <?php if (!empty($product['frames_suspensions'][0]['id'])) {
                        echo $this->Form->input(
                            'FramesSuspension.id',
                            array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product['frames_suspensions'][0]['id'])
                        );
                    } ?>
                    <?php echo $this->Form->input(
                        'FramesSuspension.product_id',
                        array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'required' => false, 'value' => $product->id)
                    ); ?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Frame Type</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'FramesSuspension.frame_type',
                                array('class' => 'form-control', 'label' => false, (!empty($product['frames_suspensions'][0]['frame_type'])) ? 'value="' . $product['frames_suspensions'][0]['frame_type'] . '"' : 'placeholder="Frame Type"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Front</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'FramesSuspension.front',
                                array('class' => 'form-control', 'label' => false, (!empty($product['frames_suspensions'][0]['front'])) ? 'value="' . $product['frames_suspensions'][0]['front'] . '"' : 'placeholder="Front"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Rear</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input(
                                'FramesSuspension.rear',
                                array('class' => 'form-control', 'label' => false, (!empty($product['frames_suspensions'][0]['rear'])) ? 'value="' . $product['frames_suspensions'][0]['rear'] . '"' : 'placeholder="Rear"', 'required' => false)
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn red">Submit</button>
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
