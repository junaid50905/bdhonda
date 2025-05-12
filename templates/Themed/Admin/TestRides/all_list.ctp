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
                        <?php foreach($queries as $query): ?>
                        <tr class="odd gradeX">
                            <td><?php echo $query['TestRide']['id']; ?></td>
                            <td style="width: 20%"><?php echo date("d-m-Y", strtotime($query['TestRide']['created'])); ?></td>
                            <td style="width: 20%"><?php echo date("d-m-y h:i A", strtotime($query['TestRide']['date_time'])); ?></td>
                            <td><?php echo $query['TestRide']['first_name']; ?></td>
                            <td><?php echo $query['TestRide']['last_name']; ?></td>
                            <td style="width: 20%"><?php echo $query['TestRide']['email']; ?></td>
                            <td><?php echo $query['TestRide']['mobile']; ?></td>
                            <td>
                                <?php
                                    App::import('Model', 'Product');
                                    $this->Product = new Product();
                                    $model_name = $this->Product->findById($query['TestRide']['product_id']);
                                    echo $model_name['Product']['name'];
                                ?>
                            </td>
                            <td><?php echo $query['TestRide']['color']; ?></td>
                            <td style="width: 25%"><?php echo '<b>'.$query['Dealer']['name'].'</b>, '.$query['Dealer']['address']; ?></td>
                            <td style="width: 25%"><?php if($query['TestRide']['message']){ echo $query['TestRide']['message']; } else { echo "------ Invitation Form ------"; } ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>