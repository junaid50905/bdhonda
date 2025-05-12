<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
            echo $this->Html->link(
                'Add New Dealer/Parts Provider',
                '/dealers/add',
                array('class' => array('btn', 'blue', 'pull-right'))
            );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Dealers/Parts Providers
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                    <tr>
                        <th>Shop Photo</th>
                        <th>Network Type</th>
                        <th>Dealer Name</th>
                        <th>Owner's Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th style="min-width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dealers as $dealer): ?>
                        <tr class="odd gradeX">
                            <td>
                                <img src="<?php echo $this->webroot.'assets/public/images/network/dealers/'.$dealer['Dealer']['photo']; ?>" height="60px" alt="">
                            </td>
                            <td><?php if($dealer['Dealer']['network_type_id'] == 1) echo 'Dealer'; else echo 'Parts Provider'; ?></td>
                            <td><?php echo $dealer['Dealer']['name']; ?></td>
                            <td><?php echo $dealer['Dealer']['owner_name']; ?></td>
                            <td><?php echo $dealer['Dealer']['phone']; ?></td>
                            <td><?php echo $dealer['Dealer']['email']; ?></td>
                            <td><?php echo $dealer['Dealer']['address']; ?></td>
                            <td>
                                <div class="btn-group btn-group-solid">
                                    <?php
                                        echo $this->Html->link(
                                            'Edit',
                                            '/dealers/edit/'.$dealer['Dealer']['id'],
                                            array('class' => array('btn', 'green', 'btn-xs'))
                                        );
                                    ?>
                                </div>
                                <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array(
                                        'controller' => 'dealers',
                                        'action' => 'delete',
                                        $dealer['Dealer']['id']
                                    ),
                                    array(
                                        'class' => 'btn red btn-xs',
                                        'escape' => false
                                    ),
                                    __('Are you sure you want to delete # %s?', $dealer['Dealer']['name'])
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