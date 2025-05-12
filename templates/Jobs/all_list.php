<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
        echo $this->Html->link(
            'Applicant List',
            '/jobs/applicant_list',
            array('class' => array('btn', 'green', 'pull-right'))
        );
        ?>
        <?php
        echo $this->Html->link(
            'Add New Job',
            '/jobs/add',
            array('class' => array('btn', 'red', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    List of all Jobs
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Job Nature</th>
                            <th>Publish Date</th>
                            <th>Deadline</th>
                            <th style="min-width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jobs as $job): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $job['id']; ?></td>
                                <td><?php echo $job['name']; ?></td>
                                <td><?php echo $job['nature']; ?></td>
                                <td><?php echo $job['publish_date']; ?></td>
                                <td><?php echo $job['deadline']; ?></td>
                                <td>
                                    <div class="btn-group btn-group-solid">
                                        <?= $this->Html->link(
                                            'Edit',
                                            ['controller' => 'Jobs', 'action' => 'add', $job['id']],
                                            ['class' => 'btn yellow']
                                        ) ?>
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
