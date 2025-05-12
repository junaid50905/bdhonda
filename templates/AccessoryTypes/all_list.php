<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'Add New Accessory Type',
                '/accessory_types/add',
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
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="sortable">
                    <?php $i=1; foreach($accessory_types as $accessory_type): ?>
                        <tr id="<?php echo $accessory_type['id']; ?>">
                            <td><?php echo $i; ?></td><td><?php echo $accessory_type['name']; ?></td><td><?php echo $this->Html->link('Edit', '/accessory_types/add/'.$accessory_type['id'], array('class' => array('btn', 'green'))); ?></td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
