<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <div class="clearfix"></div>

            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'dashboards') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="start <?php echo $li_class; ?>">
                <?php
                echo $this->Html->Link('<i class="icon-home"></i> <span class="title">Dashboard</span><span class="'.$span_class.'"></span>',
                    array(
                        'controller' => 'dashboards',
                        'action' => 'index'
                    ),
                    array(
                        'escape' => false
                    )
                );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'sliders') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Homepage Sliders</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'sliders',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'media') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Media Center</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'media',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
            $li_class = '';
            $span_class = '';
            if($this->params['controller'] == 'safeties') {
                $li_class = 'active';
                $span_class = 'selected';
            }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Safety</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'safeties',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'jobs') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Jobs</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'jobs',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'dealers' && $this->params['action'] == 'all_list') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Dealers/Parts Providers</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'dealers',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'products') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Products</span><span class="'.$span_class.'"></span>',
                    array(
                        'controller' => 'products',
                        'action' => 'all_list'
                    ),
                    array(
                        'escape' => false
                    )
                );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'part_prices') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Part Prices</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'part_prices',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'queries') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Product Queries</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'queries',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li><?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'test_rides') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Product Test Rides</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'test_rides',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li><?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'online_bookings') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Product Online Bookings</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'online_bookings',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'dealers' && $this->params['action'] == 'all_application_list') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Dealer Applications</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'dealers',
                            'action' => 'all_application_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'accessories') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Accessories</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'accessories',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <?php
                $li_class = '';
                $span_class = '';
                if($this->params['controller'] == 'accessory_types') {
                    $li_class = 'active';
                    $span_class = 'selected';
                }
            ?>
            <li class="<?php echo $li_class; ?>">
                <?php
                    echo $this->Html->Link('<i class="icon-paper-plane"></i> <span class="title">Accessory Types</span><span class="'.$span_class.'"></span>',
                        array(
                            'controller' => 'accessory_types',
                            'action' => 'all_list'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="icon-key"></i> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>