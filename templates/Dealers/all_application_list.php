<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Dealer Applications
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Mobile</th>
                            <th>District</th>
                            <th>Upazila</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dealerApplications as $dealerApplication): ?>

                            <tr class="odd gradeX">
                                <td><?= h($dealerApplication->id) ?></td>
                                <td><?= h($dealerApplication->created->format('d-m-Y')) ?></td>
                                <td><?= h($dealerApplication->name) ?></td>
                                <td><?= h($dealerApplication->email) ?></td>
                                <td><?= h($dealerApplication->mobile) ?></td>
                                <td><?= h($dealerApplication->district->name) ?></td>
                                <td><?= h($dealerApplication->upazila->name) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
