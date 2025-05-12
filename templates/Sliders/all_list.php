<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
        $("#save-sliders").on("click", function() {
            var sortedIDs = $("#sortable").sortable("toArray");
            $.ajax({
                url: '<?= $this->Url->build('/', ['fullBase' => true]); ?>sliders/ajaxSliderSort/',
                cache: false,
                type: 'POST',
                data: {
                    sortedIDs: sortedIDs
                },
                success: function(data) {}
            });
        });
    });
</script>
<style>
    .over_wid {
        overflow: hidden;
        max-width: 100%;
        text-overflow: ellipsis;
        width: 300px;
        white-space: nowrap;
        padding: 0;
        margin: 0;
    }
</style>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php
        echo $this->Html->link(
            'Add New Slider',
            '/sliders/add',
            array('class' => array('btn', 'blue', 'pull-right'))
        );
        ?>
        <div class="clearfix"></div>
        <p></p>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List of all Sliders
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-bordered mithu-table">
                        <thead>
                            <tr>
                                <th width="300px">Slider Image</th>
                                <th width="200px">Slider Title</th>
                                <th width="300px">Slider Link</th>
                                <th width="100px">Status</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody id="sortable">
                            <?php foreach ($sliders as $slider): ?>
                                <tr id="<?= $slider['id'] ?>">
                                    <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <img src="<?= $this->Url->build('/assets/public/images/home-banner/' . $slider['image'], ['fullBase' => true]) ?>" width="90%" alt="">
                                    </td>
                                    <td><?= h($slider['title']) ?></td>
                                    <td>
                                        <a href="<?= h($slider['url']) ?>">
                                            <p class="over_wid"><?= h($slider['url']) ?></p>
                                        </a>
                                    </td>
                                    <td><?= h($slider['status']) ?></td>
                                    <td>
                                        <?= $this->Html->link('Edit', ['controller' => 'Sliders', 'action' => 'edit', $slider['id']], ['class' => 'btn green']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <button id="save-sliders" class="btn btn-danger btn-large">Save Sliders</button>
                <br><br>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
