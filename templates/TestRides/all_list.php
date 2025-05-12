<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Test Rides (Latest 200 Entries)
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 20%">Date</th>
                            <th style="width: 20%">Visit Date</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th style="width: 20%">E-mail</th>
                            <th>Mobile</th>
                            <th>Model</th>
                            <th>Color</th>
                            <th style="width: 25%">Dealer Name & Address</th>
                            <th style="width: 25%">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($testRides as $testRide): ?>
                            <tr class="odd gradeX">
                                <td><?= h($testRide->id) ?></td>
                                <td style="width: 20%"><?= $testRide->created->format('d-m-Y') ?></td>
                                <td style="width: 20%"><?= $testRide->date_time ? $testRide->date_time->format('d-m-y h:i A') : '' ?></td>
                                <td><?= h($testRide->first_name) ?></td>
                                <td><?= h($testRide->last_name) ?></td>
                                <td style="width: 20%"><?= h($testRide->email) ?></td>
                                <td><?= h($testRide->mobile) ?></td>
                                <td>
                                    <?= $testRide->product ? h($testRide->product->name) : 'N/A' ?>
                                </td>
                                <td><?= h($testRide->color) ?></td>
                                <td style="width: 25%">
                                    <?php if ($testRide->dealer): ?>
                                        <b><?= h($testRide->dealer->name) ?></b>, <?= h($testRide->dealer->address) ?>
                                    <?php else: ?>
                                        <?= 'No Dealer Info' ?>
                                    <?php endif; ?>
                                </td>
                                <td style="width: 25%">
                                    <?= $testRide->message ? h($testRide->message) : "------ Invitation Form ------" ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
