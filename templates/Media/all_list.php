<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <?php
        echo $this->Html->link(
            'Add New Press Release',
            '/media/press_release_add',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    All Press Releases
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <!-- <th>Publish Date</th> -->
                            <th style="min-width: 50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($press_releases as $press_release): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $press_release['id']; ?></td>
                                <td><?php echo $press_release['title']; ?></td>
                                <!-- <td><?php // echo $press_release['PressRelease']['publish_date'];
                                            ?></td> -->
                                <td>
                                    <div class="btn-group btn-group-solid">
                                        
                                        <?= $this->Html->link('Edit', ['controller' => 'Media', 'action' => 'pressReleaseEdit', $press_release['id']], ['class' => 'btn blue']) ?>

                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <?php
        echo $this->Html->link(
            'Add New Event',
            '/media/event_add',
            array('class' => array('btn', 'red', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    All Events
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <!-- <th>Event Image</th> -->
                            <th>Title</th>
                            <th style="min-width: 50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $event): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $event['id']; ?></td>
                                <!-- <td><img style="height: 100px" src="<?php // echo $this->webroot.'files/event/image/'.$event['Event']['image_dir'].'/'.$event['Event']['image'];
                                                                            ?>"  alt=""></td> -->
                                <td><?php echo $event['title']; ?></td>
                                <td>
                                    <div class="btn-group btn-group-solid">
                                        <?php
                                        echo $this->Html->link(
                                            'Edit',
                                            '/media/event_add/' . $event['id'],
                                            array('class' => array('btn', 'red'))
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
