<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
        echo $this->Html->link(
            'Add New Accessory',
            '/accessories/add',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Accessory Types
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Product Name</th>
                        <th>Accessory Type</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="sortable">
                    <?php foreach($accessories as $accessory): ?>
                        <tr id="<?php echo $accessory['Accessory']['id']; ?>">
                            <td><img src="<?php echo $this->webroot.'assets/public/images/accessories/'.$accessory['Accessory']['image']; ?>" height="60px" alt=""></td>
                            <td><?php echo $accessory['Accessory']['name']; ?></td>
                            <td>
                                <?php
                                    App::import('Model', 'Product');
                                    $this->Product = new Product();
                                    $model_name = $this->Product->findById($accessory['Accessory']['product_id']);
                                    echo $model_name['Product']['name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    App::import('Model', 'AccessoryType');
                                    $this->AccessoryType = new AccessoryType();
                                    $model_name = $this->AccessoryType->findById($accessory['Accessory']['accessory_types_id']);
                                    echo $model_name['AccessoryType']['name'];
                                ?>
                            </td>
                            <td><?php echo $accessory['Accessory']['description']; ?></td>
                            <td><?php echo $accessory['Accessory']['price']; ?></td>
                            <td style="width: 115px;">
                                <?php echo $this->Html->link('Edit', '/accessories/add/'.$accessory['Accessory']['id'], array('class' => array('btn', 'green', 'btn-xs'))); ?>
                                <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array(
                                        'controller' => 'accessories',
                                        'action' => 'delete',
                                        $accessory['Accessory']['id']
                                    ),
                                    array(
                                        'class' => 'btn red btn-xs',
                                        'escape' => false
                                    ),
                                    __('Are you sure you want to delete # %s?', $accessory['Accessory']['id'])
                                );
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>