<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
        echo $this->Html->link(
            'Add New Product',
            '/products/add',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Products
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>
                                Product Image
                            </th>
                            <th>
                                Product Name
                            </th>
                            <th style="min-width: 100px;">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr class="odd gradeX">
                                <td>
                                    <img src="<?= $this->Url->build('/assets/public/images/' . $product->slug . '/' . $product->small_logo) ?>" alt="">
                                </td>

                                <td>
                                    <b><?php echo $product['name']; ?></b>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-solid">
                                        <?php
                                        echo $this->Html->link(
                                            'Add Details',
                                            '/products/add_product_details/' . $product['id'],
                                            array('class' => array('btn', 'green'))
                                        );
                                        ?>
                                        <?php
                                        echo $this->Html->link(
                                            'Edit',
                                            '/products/add/' . $product['id'],
                                            array('class' => array('btn', 'yellow'))
                                        );
                                        ?>
                                    </div>
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
