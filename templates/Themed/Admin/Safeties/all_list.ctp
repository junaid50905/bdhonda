<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
        echo $this->Html->link(
            'Add New Activity Picture',
            '/safeties/add/1/activity_picture',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Safety Approach - Activity Picture
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="sortable">
                    <?php foreach($activity_picture as $safety): ?>
                        <tr id="<?php echo $safety['Safety']['id']; ?>">
                            <td><img src="<?php echo $this->webroot.'assets/public/images/safeties/activity_picture/'.$safety['Safety']['image']; ?>" height="60px" alt=""></td>
                            <td><?php echo $safety['Safety']['name']; ?></td>
                            <td><?php echo $safety['Safety']['status']; ?></td>
                            <td style="width: 115px;">
                                <?php echo $this->Html->link('Edit', '/safeties/add/'.$safety['Safety']['id'].'?model=activity_picture', array('class' => array('btn', 'green', 'btn-xs'))); ?>
                                <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array(
                                        'controller' => 'safeties',
                                        'action' => 'delete',
                                        $safety['Safety']['id']
                                    ),
                                    array(
                                        'class' => 'btn red btn-xs',
                                        'escape' => false
                                    ),
                                    __('Are you sure you want to delete # %s?', $safety['Safety']['id'])
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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
        echo $this->Html->link(
            'Add New PDSA',
            '/safeties/add/1/pdsa',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Safety Approach  - PDSA ( Pre Delivery Safety Advise )
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="sortable">
                    <?php foreach($pdsa as $safety): ?>
                        <tr id="<?php echo $safety['Safety']['id']; ?>">
                            <td><img src="<?php echo $this->webroot.'assets/public/images/safeties/pdsa/'.$safety['Safety']['image']; ?>" height="60px" alt=""></td>
                            <td><?php echo $safety['Safety']['status']; ?></td>
                            <td style="width: 115px;">
                                <?php echo $this->Html->link('Edit', '/safeties/add/'.$safety['Safety']['id'].'?model=pdsa', array('class' => array('btn', 'green', 'btn-xs'))); ?>
                                <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array(
                                        'controller' => 'safeties',
                                        'action' => 'delete',
                                        $safety['Safety']['id']
                                    ),
                                    array(
                                        'class' => 'btn red btn-xs',
                                        'escape' => false
                                    ),
                                    __('Are you sure you want to delete # %s?', $safety['Safety']['id'])
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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
        echo $this->Html->link(
            'Add New Video Link',
            '/safeties/add/1/education',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Education Tips Video
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Video</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="sortable">
                    <?php foreach($education as $safety): ?>
                        <tr id="<?php echo $safety['Safety']['id']; ?>">
                            <td><?php echo $safety['Safety']['name']; ?></td>
                            <td><?php echo $safety['Safety']['order']; ?></td>
                            <td><?php echo $safety['Safety']['status']; ?></td>
                            <td style="width: 115px;">
                                <?php echo $this->Html->link('Edit', '/safeties/add/'.$safety['Safety']['id'].'?model=education', array('class' => array('btn', 'green', 'btn-xs'))); ?>
                                <?php
                                echo $this->Form->postLink(
                                    'Delete',
                                    array(
                                        'controller' => 'safeties',
                                        'action' => 'delete',
                                        $safety['Safety']['id']
                                    ),
                                    array(
                                        'class' => 'btn red btn-xs',
                                        'escape' => false
                                    ),
                                    __('Are you sure you want to delete # %s?', $safety['Safety']['id'])
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