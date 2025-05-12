<!-- templates/Queries/all_list.php -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Queries (Latest 200 Entries)
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 20%">Date</th>
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
                        <?php foreach ($queries as $query): ?>
                            <tr class="odd gradeX">
                                <td><?= h($query->id) ?></td>
                                <td style="width: 20%"><?= h($query->created->format('d-m-Y')) ?></td>
                                <td><?= h($query->first_name) ?></td>
                                <td><?= h($query->last_name) ?></td>
                                <td style="width: 20%"><?= h($query->email) ?></td>
                                <td><?= h($query->mobile) ?></td>
                                <td>
                                    <?= isset($query->product) ? h($query->product->name) : 'No Product' ?>
                                </td>
                                <td><?= h($query->color) ?></td>
                                <td style="width: 25%">
                                    <?= !empty($query->dealer) ? '<b>' . h($query->dealer->name) . '</b> ' . h($query->dealer->address) : ' ' ?>
                                </td>
                                <td style="width: 25%">
                                    <?= $query->message ? h($query->message) : ' ' ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
