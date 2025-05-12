<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Dealer Application
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
                        <?php foreach($dealer_applications as $dealer_application): ?>
                        <tr class="odd gradeX">
                            <td><?php echo $dealer_application['DealerApplication']['id']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($dealer_application['DealerApplication']['created'])); ?></td>
                            <td><?php echo $dealer_application['DealerApplication']['name']; ?></td>
                            <td><?php echo $dealer_application['DealerApplication']['email']; ?></td>
                            <td><?php echo $dealer_application['DealerApplication']['mobile']; ?></td>
                            <td>
                                <?php
                                    App::import('Model', 'District');
                                    $this->District = new District();
                                    $district = $this->District->findById(intval($dealer_application['DealerApplication']['district_id']));
                                    echo $district['District']['name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    App::import('Model', 'Upazila');
                                    $this->Upazila = new Upazila();
                                    $upazila = $this->Upazila->findById(intval($dealer_application['DealerApplication']['upazila_id']));
                                    echo $upazila['Upazila']['name'];
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