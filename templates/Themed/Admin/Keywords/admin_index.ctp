<div class="row">
    <div class="col-md-5">
        <div class="widget">
            <div class="widget-head">
                <div class="pull-left">Create Keyword</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">
                    <?php echo $this->Form->create(
                        'Keyword',
                        array('url' => ['controller' => 'keywords', 'action' => 'add_keyword'], 'method' => 'post')
                    ); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name of Keyword:</label>
                        <?php echo $this->Form->input(
                            'name',
                            array(
                                'type' => 'text',
                                'placeholder' => 'Name of Category',
                                'class' => 'form-control',
                                'div' => false,
                                'required' => false,
                                'label' => false
                            )
                        ); ?>
                    </div>
                    <?php echo $this->Form->input(
                        'Add Keyword',
                        array('type' => 'button', 'class' => 'btn btn-primary', 'label' => false)
                    ); ?>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="widget">
            <div class="widget-head">
                <div class="pull-left">Recent Keyword</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <?php if($keywordList):?>
                    <table class="table table-striped table-bordered table-hover" id="categoryTable">
                        <thead>
                        <tr>
                            <th style="width: 60%;">Name of Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($keywordList as $keyList):?>
                            <tr>
                                <td>
                                    <a href="#" data-type="text" data-pk="1" data-title="Enter username" class="catName editable editable-click ">
                                        <?php echo $keyList['Keyword']['name'];?>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-type="select" data-pk="1" data-value="5" data-source="{'0': 'Active', 'F': 'In Active'}" data-title="Select group" class="catStatus editable editable-click">
                                        <?php
                                        if($keyList['Keyword']['status'] == 1){
                                            echo 'Active';
                                        }
                                        else{
                                            echo 'InActive';
                                        }
                                        ?>
                                    </a>
                                </td>
                                <td>
                                    <?php
                                    echo $this->Form->postLink(
                                        'Delete <i class="icon icon-remove"></i>',
                                        array('controller' => 'keywords','action' => 'admin_delete_keyword', $keyList['Keyword']['id']),
                                        array('class' => 'btn btn-danger btn-xs', 'escape' => false),
                                        __('Are you sure you want to delete # %s?', $keyList['Keyword']['id'])
                                    );
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="widget-foot">
                        <a href="#" class="pull-right">Next <i class="icon icon-long-arrow-right"></i></a>
                        <a href="#" class="pull-right margin-r-10"><i class="icon icon-long-arrow-left"></i> Prev</a>
                        <div class="clearfix"></div>
                    </div>
                <?php else:?>
                    <div class="padd">
                        <h2 class="not-found">Sorry, Keyword not found!</h2>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>