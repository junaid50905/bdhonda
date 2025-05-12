<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
        echo $this->Html->link(
            'List all Jobs',
            '/jobs/all_list',
            array('class' => array('btn', 'red', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    List of all Applicants
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>Application ID</th>
                            <th>Applicant Name</th>
                            <th>Job Title</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Present Address</th>
                            <th>CV</th>
                            <!--<th style="min-width: 100px;">Action</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $job_title_counter = 0;
                        foreach ($applicants as $applicant): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $applicant['id']; ?></td>
                                <td><?php echo $applicant['first_name'] . ' ' . $applicant['last_name']; ?></td>
                                <td><?php echo $job_titles[$job_title_counter]; ?></td>
                                <td><?php echo $applicant['phone']; ?></td>
                                <td><?php echo $applicant['email']; ?></td>
                                <td><?php echo $applicant['address']; ?></td>
                                <td>
                                    <?php if (!empty($applicant->cv)): ?>
                                        <a href="<?= $this->Url->build('/files/applicant/cv/' . $applicant->file_dir . '/' . $applicant->cv) ?>"><b>Download</b></a>
                                    <?php else: ?>
                                        CV Not Found
                                    <?php endif; ?>
                                </td>

                                <!--<td>
                                <div class="btn-group btn-group-solid">
                                    <?php
                                    echo $this->Html->link(
                                        'Deatils',
                                        '/jobs/applicant_details/' . $applicant['Applicant']['id'],
                                        array('class' => array('btn', 'yellow'))
                                    );
                                    ?>
                                </div>
                            </td>-->
                            </tr>
                        <?php $job_title_counter++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
