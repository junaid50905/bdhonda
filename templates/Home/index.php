<div class="" style="display:inline-block; width:100%;">
    <style>
        #new-launch2 {
            top: 36px;
        }

        .item figure {
            height: 0;
            padding-bottom: 56.25%;
            /* 16:9 */
            position: relative;
            width: 100%;
        }

        .item figure iframe {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        #new-launch2 i {
            top: 50%;
            position: absolute;
            font-size: 30px;
            color: gray;
        }

        #new-launch2 .carousel-control {
            opacity: -2.3;
        }

        #new-launch2 .fa-angle-left {
            left: 2px;
        }

        #new-launch2 .fa-angle-right {
            right: 2px;
        }
    </style>

    <!-- slider start-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <?php foreach ($sliders as $index => $slider): ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>"
                    class="<?= $index === 0 ? 'active' : '' ?>" aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                    aria-label="Slide <?= $index + 1 ?>">
                </button>
            <?php endforeach; ?>
        </div>

        <div class="carousel-inner">
            <?php $count = 1;
            foreach ($sliders as $slider): ?>
                <div class="carousel-item <?= $count === 1 ? 'active' : '' ?>">
                    <a href="<?= h($slider->url); ?>">
                        <img src="<?= $this->Url->build('/') . 'assets/public/images/home-banner/' . h($slider->image); ?>"
                            title="<?= h($slider->title); ?>" alt="<?= h($slider->title); ?>"
                            class="d-block w-100" />
                    </a>
                </div>
            <?php $count++;
            endforeach; ?>
        </div>
    </div>
    <!-- slider end-->
    <section class="home-box-sec">
        <div class="row">

            <!-- new latest slider start -->
            <div class="col-md-4 col-sm-6 col-xs-6 home-box-mobile">
                <div class="home-box card-home">
                    <div class="fixed-butt"><a href="<?= $this->Url->build('/', ['fullBase' => true]); ?>media-center/events">+</a>
                    </div>
                    <h1>Latest</h1>
                    <div id="carouselLatest" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="<?= $this->Html->script("/"); ?>product/shine-100/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/new1shine.jpg"
                                        alt="Shine 100" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/dream-110/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/rr_dream110.png" alt="CD 110 Dream" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/livo/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/rr_livo.png"
                                        alt="Livo" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/sp-125/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/rr_sp125.png"
                                        alt="Unicorn" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/sp-160/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/sp160.jpg"
                                        alt="SP 160" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/xblade/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/x1blade.jpg"
                                        alt="X blade" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/hornet-2-0/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/hornet-2.0.jpg"
                                        alt="Hornet 2.0" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/cbr-150r/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/rr_cbr.png"
                                        alt="CB 200" style="width:100%; height:auto"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?= $this->Html->script("/"); ?>product/dio/index"><img
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/gallery/rrdio.png"
                                        alt="Shine 100" style="width:100%; height:auto"></a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselLatest"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselLatest"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- new latest slider end -->

            <!-- New launch start -->
            <div class="col-md-4 col-sm-6 col-xs-6 home-box-mobile">
                <div class="home-box card-home">
                    <div class="fixed-butt"><a href="<?= $this->Html->script("/"); ?>">+</a></div>
                    <h1>New Launch</h1>
                    <div id="new-launch" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="<?= $this->Html->script("/"); ?>product/hornet-2-0/index">
                                    <img class="img-fluid"
                                        src="<?= $this->Html->script("/"); ?>assets/public/images/new-launch/NewLaunch.jpg"
                                        alt="...">
                                </a>
                                <div class="NewLaunch-caption">
                                    <p>New Launch</p>
                                    <a href="<?= $this->Html->script("/"); ?>">more</a>
                                </div>

                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#new-launch"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#new-launch"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
            <!-- New launch end -->

            <!-- About us start -->
            <div class="col-md-4 col-sm-6 col-xs-6  home-box-mobile">
                <div class="home-box about-box card-home">
                    <div class="fixed-butt">
                        <a href="<?= $this->Html->script("/"); ?>about-us/about-bhl">+</a>
                    </div>
                    <h1>About Us</h1>
                    <a href="<?= $this->Html->script("/"); ?>about-us/about-bhl">
                        <h5>Honda is the world’s largest manufacturer of two Wheelers</h5>
                    </a>
                    <p class="text_limit">Bangladesh Honda Private Limited (BHL) operates in a single industry segment
                        in Bangladesh
                        under a joint venture between Honda Motor Company Limited, Japan and Bangladesh Steel and
                        Engineering Corporation (State Own Corporation) under The Ministry of Industry, The Peoples
                        Republic of Bangladesh. The Company was incorporated in Bangladesh on December 04, 2012 as a
                        private limited company and joint venture agreement was signed on September 27, 2012.
                        <a href="<?= $this->Html->script("/"); ?>about-us/about-bhl">more..</a>
                    </p>
                </div>
            </div>
            <!-- About us start -->

            <!-- News start -->
            <div class="col-md-4 col-sm-6 col-xs-6 home-box-mobile">
                <div class="home-box card-home">
                    <div class="fixed-butt">
                        <a href="<?= $this->Url->build('/media-center/press-release'); ?>">+</a>
                    </div>
                    <h1>News</h1>
                    <div class="panel panel-default pt-2">
                        <div class="panel-body">
                            <ul class="demo1" style="overflow-y: hidden; min-height: 200px;">
                                <?php foreach ($press_releases as $press_release): ?>
                                    <li class="news-item">
                                        <div class="newshmehead">
                                            <a href="<?= $this->Url->build('/media-center/pr-details/' . $press_release->id); ?>">
                                                <?= h($press_release->title); ?>
                                            </a>
                                        </div>
                                        <em class="date"><?= h($press_release->publish_date->format('M d, Y')); ?></em>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News end -->


            <div class="col-md-4 col-sm-6 col-xs-6 home-box-mobile">
                <div class="home-box video-box  card-home">
                    <h1>Videos</h1>
                    <div id="new-launch2" class="carousel slide" data-ride="carousel" data-interval="25000">
                        <div class="carousel-inner" role="listbox">


                            <div class="carousel-item active">
                                <figure>
                                    <iframe height="500"
                                        src="https://www.youtube.com/embed/loKP1runO4Q?si=4XliDmD3H1mu7lRv"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
                                        frameborder="0"
                                        sandbox="allow-scripts allow-same-origin allow-presentation"></iframe>
                                </figure>
                            </div>
                            <div class="item">
                                <figure>
                                    <iframe height="500"
                                        src="https://www.youtube.com/embed/EFqw-yZJ_lo?si=hIjTyVkHo5NK57xK"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
                                        frameborder="0"
                                        sandbox="allow-scripts allow-same-origin allow-presentation"></iframe>
                                </figure>
                            </div>
                            <!-- <div class="item">-->
                            <!--     <figure>-->
                            <!--         <iframe src="https://www.youtube.com/embed/G6TXLlV-zqc?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--     </figure>-->
                            <!--</div>-->
                            <!-- <div class="item">-->
                            <!--     <figure>-->
                            <!--         <iframe src="https://www.youtube.com/embed/-zqJX80kbcw?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--     </figure>-->
                            <!-- </div>-->
                            <!-- <div class="item">-->
                            <!--     <figure>-->
                            <!--         <iframe src="https://www.youtube.com/embed/939heXZ0Tec?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--     </figure>-->
                            <!-- </div>-->
                            <!-- <div class="item">-->
                            <!--     <figure>-->
                            <!--         <iframe src="https://www.youtube.com/embed/DEmki65AbmE?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--     </figure>-->
                            <!-- </div>-->
                            <!-- <div class="item">-->
                            <!--     <figure>-->
                            <!--         <iframe src="https://www.youtube.com/embed/6Fg3MMqKEl8?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--     </figure>-->
                            <!-- </div>-->
                            <!-- <div class="item">-->
                            <!--     <figure>-->
                            <!--         <iframe src="https://www.youtube.com/embed/dpx3OR9fVRg?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--     </figure>-->
                            <!-- </div>-->


                            <!--<div class="item active">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/GgQEBwGC4x8?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/tzp1jXl4KL8?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/M8dfCRhiL0E?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/V4WdKtMIOFQ?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/jBEmg5hPqz8?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/NaW4J2F-dMo?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/Rna3d4U5wss?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/nqYHjC6P9Ow?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/thH6jD_CGdo?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <figure>-->
                            <!--        <iframe src="https://www.youtube.com/embed/Wq6bC-FEbQQ?rel=0&amp;controls=0?ecver=1" frameborder="0" height="500"></iframe>-->
                            <!--    </figure>-->
                            <!--</div>-->
                        </div>
                        <a class="left carousel-control" href="#new-launch2" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#new-launch2" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="fixed-butt"><a
                            href="https://www.youtube.com/watch?v=oHO9mvSaLh8&list=UUnD482zr1RtBiPoDc_InE5A"
                            target="_blank">+</a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 home-box-mobile ss-map">
                <div class="home-box card-home">
                    <h1>Dealers</h1>
                    <a href="<?= $this->Html->script("/"); ?>dealer-network/dealer-locator"><img
                            src="<?= $this->Html->script("/"); ?>assets/public/images/map1.jpg" alt=""
                            class="img-fluid" /></a>
                </div>
            </div>
        </div>
    </section>
</div>
