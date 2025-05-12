<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'Add New Part Price',
                '/part_prices/add',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Part Prices
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Part Number</th>
                        <th>Part Name</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th style="min-width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($partPrices as $partPrice): ?>
                        <tr class="odd gradeX">
                            <td><?php echo $partPrice['PartPrice']['id']; ?></td>
                            <td><?php echo $partPrice['PartPrice']['part_number']; ?></td>
                            <td><?php echo $partPrice['PartPrice']['name']; ?></td>
                            <td><?php echo $partPrice['Product']['name']; ?></td>
                            <td><?php echo $partPrice['PartPrice']['price']; ?></td>
                            <td>
                                <div class="btn-group btn-group-solid">
                                    <?php
                                        echo $this->Html->link(
                                            'Edit',
                                            '/part_prices/add/'.$partPrice['PartPrice']['id'],
                                            array('class' => array('btn', 'blue'))
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