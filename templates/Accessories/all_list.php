<div class="row">
    <div class="col-md-12 col-sm-12">
        <?= $this->Html->link(
            'Add New Accessory',
            ['controller' => 'Accessories', 'action' => 'add'],
            ['class' => 'btn blue pull-right']
        ) ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Accessories
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Product Name</th>
                            <th>Accessory Type</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($accessories as $accessory): ?>
                            <tr id="<?= h($accessory->id) ?>">
                                <td>
                                    <img src="<?= $this->Url->build('/assets/public/images/accessories/' . $accessory->image) ?>" height="60px" alt="">
                                </td>
                                <td><?= h($accessory->name) ?></td>
                                <td>
                                    <?php
                                    echo h($accessory->product->name ?? 'N/A');
                                    ?>
                                </td>
                                <td>
                                    <?= h($accessory->accessory_type->name) ?>
                                </td>
                                <td><?= $accessory->description ?></td>
                                <td><?= h($accessory->price) ?></td>
                                <td style="width: 115px;">
                                    <?= $this->Html->link('Edit', ['controller' => 'Accessories', 'action' => 'edit', $accessory->id], ['class' => 'btn green btn-xs']) ?>
                                    <?= $this->Form->postLink('Delete', ['action' => 'delete', $accessory->id], ['class' => 'btn red btn-xs', 'escape' => false]) ?>
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
