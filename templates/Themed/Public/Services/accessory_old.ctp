<style>
    .thumbnail-st {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        width: 90%;
        margin-top: 10px;
        height: 250px;
    }


    .thumbnail-jkt {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        /*border: 1px solid #ddd;*/
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        width: 90%;
        margin-top: -6px;
        height: 250px;
    }

    /*.thumbnail-jkt p{*/
    /*    align-items: center;*/
    /*}*/



    .thumbnail-stn {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        /*border: 1px solid #ddd;*/
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        /*width: 90%;*/
        margin-top: 10px;
        height: 250px;
    }

    .thumbnail-sts {
        display: block;
        /* padding: 4px; */
        /* margin-bottom: 20px; */
        line-height: 1.42857143;
        /*border: 1px solid #ddd;*/
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        /*width: 90%;*/
        margin-top: 10px;
        /* height: 250px; */
    }


    thumbnail-stn-img img {
        height: 100%;
        width: 100%;
    }

    .box-001 {
        width: 48%;
        float: left;
        display: grid;
        padding: 0px;
        /*margin: 5px;*/
    }

    .thumbnail-st-s {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
        width: 47%;
        margin-top: 10px;
    }

    .pro-wed-siz {
        width: 300px;
    }

    .pri-chart {
        margin-top: 10%;
    }

    .pri-chart span {
        font-size: 20px;
        font-weight: 500;
        background: bg-primary;
    }

    .box-02 {
        width: 99%;
        float: left;
        display: grid;
        padding: 0px;
        margin: 5px;
    }


    .box-01 {
        width: 48%;
        float: left;
        display: grid;
        padding: 0px;
        margin: 5px;
    }

    @media only screen and (max-width: 768px) {

        /* For mobile phones: */
        .box-01 {
            width: 100%;
            float: left;
        }

        .speard {
            margin-top: -160px;
        }
    }
</style>
<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <h5>Services</h5>
            </div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a href="<?php echo Router::url('/', true); ?>services/honda-service">Honda Service</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/maintenance">Maintenance</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/warranty">Warranty</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/genuine-parts">Genuine Parts</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/engine-oil">Engine Oil</a></li>
                <li><a class="menu-network-active" href="<?php echo Router::url('/', true); ?>services/accessory">Accessory</a>
                </li>
                <!--                <li><a href="-->
                <?php //echo Router::url('/', true); 
                ?><!--services/owners-manual">Owner's manual</a></li>-->
            </ul>
            <img src="<?php echo Router::url('/', true); ?>assets/public/images/services/honda-service.jpg" alt="">
            <ul class="breadcrumb">
                <li><a href="<?php echo Router::url('/', true); ?>">Home</a></li>
                <li><a href="../services/honda-service">Services</a></li>
                <li class="active">Accessories</li>
            </ul>
        </div>
        <div class="locator-sec Campaign-sec">
            <h5>Accessories</h5>
            <p>&nbsp;</p>
            <div class="col-md-12">
                <div id="exTab1" class="">
                    <ul class="nav nav-pills tabb-design">
                        <li id="li1" class="active"><a href="#1a" data-toggle="tab">Helmet</a></li>
                        <li id="li2"><a href="#2a" data-toggle="tab">Front Pipe</a></li>
                        <li id="li3"><a href="#3a" data-toggle="tab">Liquid Item</a></li>
                        <li id="li4"><a href="#4a" data-toggle="tab">Other Items</a></li>
                    </ul>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1a">
                            <!--                            <div class="col-sm-12">-->
                            <!--                                <div class="rightSidebarPro">-->
                            <!--                                    <h3>MARSHAL</h3>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <p></p><h5>Specification</h5>-->
                            <!--                                        <ul>-->
                            <!--                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>-->
                            <!--                                            <li>Replaceable Interiors</li>-->
                            <!--                                            <li>Quick release chin strap</li>-->
                            <!--                                            <li>Interior AIR-MESH fabric to keep Cool</li>-->
                            <!--                                            <li>Hi-Impact ABS</li>-->
                            <!--                                        </ul>-->
                            <!--                                        <p></p>-->
                            <!--                                        <p>-->
                            <!--                                        </p><h4>Retail Price</h4>-->
                            <!--                                        <h5>BDT 2,300</h5>-->
                            <!--                                        <h5>(+ Vat)</h5>-->
                            <!--                                        <p></p>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <img src="-->
                            <?php //echo Router::url('/', true); 
                            ?><!--assets/public/images/accessory/marshal.jpg" alt="MARSHAL" style="width:60%; height:auto;">-->
                            <!--                                    </div>-->
                            <!--                                    <h3>UNISEX</h3>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <p></p><h5>Specification</h5>-->
                            <!--                                        <ul>-->
                            <!--                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>-->
                            <!--                                            <li>Replaceable Interiors</li>-->
                            <!--                                            <li>Quick release chin strap</li>-->
                            <!--                                            <li>Interior AIR-MESH fabric to keep Cool</li>-->
                            <!--                                            <li>Hi-Impact ABS</li>-->
                            <!--                                        </ul>-->
                            <!--                                        <p></p>-->
                            <!--                                        <p>-->
                            <!--                                        </p><h4>Retail Price</h4>-->
                            <!--                                        <h5>BDT 2,400</h5>-->
                            <!--                                        <h5>(+ Vat)</h5>-->
                            <!--                                        <p></p>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <img src="-->
                            <?php //echo Router::url('/', true); 
                            ?><!--assets/public/images/accessory/unisex.jpg" alt="UNISEX" style="width:60%; height:auto;">-->
                            <!--                                    </div>-->
                            <!--                                    <h3>HELMET FULL FACE (L-RED)</h3>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <p></p><h5>Specification</h5>-->
                            <!--                                        <ul>-->
                            <!--                                            <li>Attractive  Glossy Red  Edition</li>-->
                            <!--                                            <li>Polycarbonate & silicon coated  anti-scratch visor</li>-->
                            <!--                                            <li>High Density EPS. (Thermocol) for Safety</li>-->
                            <!--                                            <li>Quick Release Micro Metric Buckle</li>-->
                            <!--                                        </ul>-->
                            <!--                                        <p></p>-->
                            <!--                                        <p>-->
                            <!--                                        </p><h4>Retail Price</h4>-->
                            <!--                                        <h5>BDT 1,620</h5>-->
                            <!--                                        <h5>(+ Vat)</h5>-->
                            <!--                                        <p></p>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <img src="-->
                            <?php ///*echo Router::url('/', true); */
                            ?><!--assets/public/images/accessory/Full_face_large_red.png" alt="HELMET FULL FACE (L-RED)" style="width:60%; height:auto;">-->
                            <!--                                    </div>-->
                            <!--                                    <h3>HELMET- FULL FACE LARGE (BASIC BLACK)</h3>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <p></p><h5>Specification</h5>-->
                            <!--                                        <ul>-->
                            <!--                                            <li>Polycarbonate & silicon coated  anti-scratch visor</li>-->
                            <!--                                            <li>High Density EPS. (Thermocol) for Safety</li>-->
                            <!--                                            <li>Quick Release Micro Metric Buckle</li>-->
                            <!--                                            <li>Attractive Matee black  Edition</li>-->
                            <!--                                        </ul>-->
                            <!--                                        <p></p>-->
                            <!--                                        <p>-->
                            <!--                                        </p><h4>Retail Price</h4>-->
                            <!--                                        <h5>BDT 1,450</h5>-->
                            <!--                                        <h5>(+ Vat)</h5>-->
                            <!--                                        <p></p>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <img src="-->
                            <?php ///*echo Router::url('/', true); */
                            ?><!--assets/public/images/accessory/Full_face_large_black.png" alt="HELMET- FULL FACE LARGE (BASIC BLACK)" style="width:60%; height:auto;">-->
                            <!--                                    </div>-->
                            <!--                                    <h3>HELMET- HALF FACE LARGE (BASIC BLACK)</h3>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <p></p><h5>Specification</h5>-->
                            <!--                                        <ul>-->
                            <!--                                            <li>Helmet Open face</li>-->
                            <!--                                            <li>Attractive Black & white  stripe Edition</li>-->
                            <!--                                            <li>Polycarbonate & silicon coated  anti-scratch visor</li>-->
                            <!--                                            <li>High Density EPS. (Thermocol) for Safety</li>-->
                            <!--                                            <li>Quick Release Micro Metric Buckle</li>-->
                            <!--                                        </ul>-->
                            <!--                                        <p></p>-->
                            <!--                                        <p>-->
                            <!--                                        </p><h4>Retail Price</h4>-->
                            <!--                                        <h5>BDT 1,350</h5>-->
                            <!--                                        <h5>(+ Vat)</h5>-->
                            <!--                                        <p></p>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="col-sm-6">-->
                            <!--                                        <img src="-->
                            <?php //echo Router::url('/', true); 
                            ?><!--assets/public/images/accessory/Half_face_large_black.png.jpg" alt="HELMET- HALF FACE LARGE (BASIC BLACK)" style="width:60%; height:auto;">-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">


                                    <!--======================= new model added =================================-->
                                    <h3>CUB</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>QUICK RELEASE VISOR</li>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>UV RESISTANT PAINT</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 2,800</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <!--                                        <div class="box-01">-->
                                        <!--                                            <div class="thumbnail-st">-->
                                        <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                            ?><!--assets/public/images/accessory/1.HALF FACE Monsoon Grey (SP1LL-HEL-901MGEX).png"-->
                                        <!--                                                     alt="Lights" style="width:100%">-->
                                        <!--                                                <div class="caption">-->
                                        <!--                                                    <p>Monsoon Grey</p>-->
                                        <!--                                                </div>-->
                                        <!--                                                </a>-->
                                        <!--                                            </div>-->
                                        <!---->
                                        <!--                                        </div>-->
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/1.png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Pearl Black </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/2.png" alt="Lights" style="width:100%">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <p>Space Silver</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!--<td>Monsoon Grey</td>-->
                                                        <!--<td>SP1LL-HEL-901MGEX </td>-->

                                                    </tr>
                                                    <tr>
                                                        <td>Pearl Black</td>
                                                        <td>SP1XL-HEL-901PB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Space Silver</td>
                                                        <td>SP1XL-HEL-901SS</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1050g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1050g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!--======================= new model added =================================-->
                                    <h3>CUB</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics </li>
                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li>Replaceable Interiors</li>
                                            <li>Quick release chin strap</li>
                                            <li>Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li>Shell Material > Hi-Impact ABS</li>
                                            <li>Helmet with Anti-Theft D-Ring</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>MONSOON GREY Retail Price :<span>BDT 2,800</span>(Including Vat)</h4>
                                            <h4>PEARL BLACK Retail Price :<span>BDT 2,900</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">


                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/MONSOON_GREY.png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>MONSOON GREY</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/PEARL_BLACK.png" alt="Lights" style="width:100%">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                &nbsp;
                                                <div class="caption">
                                                    <p>PEARL BLACK</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2">MONSOON GREY</td>
                                                        <td>SP1LL-HEL-901MGEX</td>

                                                    </tr>
                                                    <tr>
                                                        <td>SP1XLHEL901MGEX</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PEARL BLACK</td>
                                                        <td>SP1LL-HEL-901PBEX</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1075g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1075g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1075g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!--======================new model added ended==================================-->


                                    <!---------------------------------------------------------------------- -->
                                    <!--<h3>CUB</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>PLOYCARBONATE SILICON HARD COATED</li>-->
                                    <!--        <li>QUICK RELEASE VISOR-->
                                    <!--        <li>-->
                                    <!--        <li>AERODYNAMIC DESIGN</li>-->
                                    <!--        <li> UV RESISTANT PAINT</li>-->
                                    <!--        <li>QUICK RELEASE CHIN STRAP</li>-->
                                    <!--        <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>-->
                                    <!--    </ul>-->

                                    <!--    <div class="pri-chart"><h4>Retail Price <span>BDT 2,080</span>(+ Vat)</h4></div>-->

                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->

                                    <!--    <div class="box-02" >-->
                                    <!--        <div class="thumbnail-st-s">-->
                                    <!--                                               <img src="--><?php //echo Router::url('/', true); 
                                                                                                    ?><!--assets/public/images/accessory/2.png" alt="Lights" style="width:100%">
<!--                                                <img src="--><?php ////echo Router::url('/', true); 
                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Space Silver</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Space Silver</td>
                                                    <td>SP1XL-HEL-901SS</td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Size</th>
                                                    <th>mm</th>
                                                    <th>Weight</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>XL</td>
                                                    <td>600</td>
                                                    <td>1050g</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!---------------------------------------------------------------  -->
                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>SILICON HARD COATED</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>UICK RELEASE VISOR</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 2,400</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/8.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Pearl Red</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Pearl Red</td>
                                                        <td>SPHFLHEL100RDEX</td>
                                                    </tr>
                                                    <!--                                                <tr>-->
                                                    <!--                                                    <td>Basic-Black</td>-->
                                                    <!--                                                    <td>SPHFX-HEL-100BKEX</td>-->
                                                    <!--                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1050g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--=========////////////////////// new model added   ///////////////// ================-->

                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li>Replaceable Interiors</li>
                                            <li>Quick release chin strap</li>
                                            <li>Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li>Shell Material > Hi-Impact ABS</li>
                                            <li>Helmet with Anti-Theft D-Ring</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 2,320</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/RED.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>RED</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>RED</td>
                                                        <td>SPHFX-LHE-L100RD</td>
                                                    </tr>
                                                    <!--                                                <tr>-->
                                                    <!--                                                    <td>Basic-Black</td>-->
                                                    <!--                                                    <td>SPHFX-HEL-100BKEX</td>-->
                                                    <!--                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>850g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                    <!--=========////////////////////// new model end   ///////////////// ================-->

                                    <!--======================= new model added =================================-->
                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li>Replaceable Interiors</li>
                                            <li>Quick release chin strap</li>
                                            <li>Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li>Shell Material > Hi-Impact ABS</li>
                                            <li>Helmet with Anti-Theft D-Ring</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price for L size :<span>BDT 2,200</span>(Including Vat)</h4>
                                            <h4>Retail Price for XL size :<span>BDT 1,900</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/BASIC_BLACK.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>BASIC BLACK</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2">BASIC BLACK</td>
                                                        <td>SPHFL-HEL-100BK</td>
                                                    </tr>
                                                    <tr>

                                                        <td>SPHFX-HEL-100BKEX</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>900g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>900g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!--======================new model added ended==================================-->

                                    <!----------------------------------------------------------------------------------------------------------------------------------------------------------->

                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li>Replaceable Interiors</li>
                                            <li>Quick release chin strap</li>
                                            <li>Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li>Shell Material > Hi-Impact ABS</li>
                                            <li>Helmet with Anti-Theft D-Ring</li>

                                        </ul>



                                        <div class="pri-chart" class="btn btn-primary btn-lg btn-block">
                                            <h6>BLACK (part no: SPHFX-HEL-104BB)</h6>
                                            <h4>Retail Price <span>BDT 3,200</span>(Including Vat)</h4>
                                        </div>


                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">

                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/BLACK.png" alt="Lights" style="width:100%">
                                                <!-- <img src="<?php //echo Router::url('/', true); 
                                                                ?>assets/public/images/accessory/8.png" -->
                                                <!-- alt="Lights" style="width:100%"> -->
                                                <div class="caption">
                                                    <p>BLACK</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>BLACK</td>
                                                        <td>SPHFX-HEL-104BB</td>
                                                    </tr>
                                                    <!--                                                <tr>-->
                                                    <!--                                                    <td>Basic-Black</td>-->
                                                    <!--                                                    <td>SPHFX-HEL-100BKEX</td>-->
                                                    <!--                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td></td>
                                                        <td>1050g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-------------------------------------------------------------------------------------------------------------------------------------------------->


                                    <!----------------------------------------------------------------------------------------------------------------------------------------------------------->

                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li>Replaceable Interiors</li>
                                            <li>Quick release chin strap</li>
                                            <li>Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li>Shell Material > Hi-Impact ABS</li>
                                            <li>Helmet with Anti-Theft D-Ring</li>

                                        </ul>



                                        <div class="pri-chart" class="btn btn-primary btn-lg btn-block">
                                            <h6>BROWN (part no: SPHFX-LHE-L100BR)</h6>
                                            <h4>Retail Price <span>BDT 2,400</span>(Including Vat)</h4>
                                        </div>


                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">

                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/BROWN.png" alt="Lights" style="width:100%">
                                                <!-- <img src="<?php //echo Router::url('/', true); 
                                                                ?>assets/public/images/accessory/8.png" -->
                                                <!-- alt="Lights" style="width:100%"> -->
                                                <div class="caption">
                                                    <p>BROWN</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>BROWN</td>
                                                        <td>SPHFX-LHE-L100BR</td>
                                                    </tr>
                                                    <!--                                                <tr>-->
                                                    <!--                                                    <td>Basic-Black</td>-->
                                                    <!--                                                    <td>SPHFX-HEL-100BKEX</td>-->
                                                    <!--                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>850g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-------------------------------------------------------------------------------------------------------------------------------------------------->


                                    <!----------------------------------------------------------------------------------------------------------------------------------------------------------->

                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>QUICK RELEASE VISOR</li>
                                            <li>REGULATED DENSITY EPS</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>

                                        </ul>



                                        <div class="pri-chart" class="btn btn-primary btn-lg btn-block">
                                            <h6>Deep Blue (part no: SPHFX-LHE-L100BL)</h6>
                                            <h4>Retail Price <span>BDT 2,350</span>(Including Vat)</h4>
                                        </div>


                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">

                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/5.png" alt="Lights" style="width:100%">
                                                <!-- <img src="<?php //echo Router::url('/', true); 
                                                                ?>assets/public/images/accessory/8.png" -->
                                                <!-- alt="Lights" style="width:100%"> -->
                                                <div class="caption">
                                                    <p>Deep Blue</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Deep Blue</td>
                                                        <td>SPHFX-LHE-L100BL</td>
                                                    </tr>
                                                    <!--                                                <tr>-->
                                                    <!--                                                    <td>Basic-Black</td>-->
                                                    <!--                                                    <td>SPHFX-HEL-100BKEX</td>-->
                                                    <!--                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>775g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-------------------------------------------------------------------------------------------------------------------------------------------------->


                                    <!----------------------------------------------------------------------------------------------------------------------------------------------------------->

                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>QUICK RELEASE VISOR</li>
                                            <li>REGULATED DENSITY EPS</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>

                                        </ul>



                                        <div class="pri-chart">
                                            <h6>Light Blue (part no: SPHFL-HEL-100BLEX)</h6>
                                            <h4>Retail Price :<span>BDT 2,400</span>(Including Vat)</h4>
                                        </div>


                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">

                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/9.png" alt="Lights" style="width:80%">
                                                <!-- <img src="<?php //echo Router::url('/', true); 
                                                                ?>assets/public/images/accessory/8.png" -->
                                                <!-- alt="Lights" style="width:100%"> -->
                                                <div class="caption">
                                                    <p>Light Blue</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Light Blue</td>
                                                        <td>SPHFL-HEL-100BLEX</td>
                                                    </tr>
                                                    <!--                                                <tr>-->
                                                    <!--                                                    <td>Basic-Black</td>-->
                                                    <!--                                                    <td>SPHFX-HEL-100BKEX</td>-->
                                                    <!--                                                </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-------------------------------------------------------------------------------------------------------------------------------------------------->






                                    <!--------------------------------------------------------------------------------------------------->




                                    <!------------------------------------------------------------------------------------------------------>




                                    <!----------------------------------------------------------  -->
                                    <!--                                    <h3>MARSHAL</h3>-->
                                    <!--                                    <div class="col-sm-5">-->
                                    <!--                                        <p></p><h5>Specification</h5>-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>-->
                                    <!--                                            <li>REPLACEABLE INTERIORS</li>-->
                                    <!--                                            <li>QUICK RELEASE CHIN STRAP</li>-->
                                    <!--                                            <li>INTERIOR AIR-MESH FABRIC TO KEEP COOL</li>-->
                                    <!--                                            <li>HI-IMPACT ABS</li>-->
                                    <!--                                        </ul>-->
                                    <!---->
                                    <!--                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,080</span>(+ Vat)</h4></div>-->
                                    <!---->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-7">-->
                                    <!---->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <div class="thumbnail-st">-->
                                    <!--                                                <img src="-->
                                    <?php //echo Router::url('/', true); 
                                    ?><!--assets/public/images/accessory/4.HALF FACE Marshall Silver (SP4LL-HEL-900SLEX).png" alt="Lights">-->
                                    <!--                                                <div class="caption">-->
                                    <!--                                                    <p>MARSHALL-Silver</p>-->
                                    <!--                                                </div>-->
                                    <!--                                                </a>-->
                                    <!--                                            </div>-->
                                    <!---->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <div class="thumbnail-st">-->
                                    <!--                                                <img src="-->
                                    <?php //echo Router::url('/', true); 
                                    ?><!--assets/public/images/accessory/5.HALF FACE Marshall Black (SP4LL-HEL-900BK).png" alt="Lights" >-->
                                    <!--                                                <div class="caption">-->
                                    <!--                                                    <p>MARSHALL-Black</p>-->
                                    <!--                                                </div>-->
                                    <!--                                                </a>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!---->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <table>-->
                                    <!--                                                <thead>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <th>Model</th>-->
                                    <!--                                                    <th>Part number</th>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </thead>-->
                                    <!--                                                <tbody>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>MARSHALL-Silver</td>-->
                                    <!--                                                    <td>SP4LL-HEL-900SLEX </td>-->
                                    <!---->
                                    <!--                                                </tr>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>MARSHALL-Black</td>-->
                                    <!--                                                    <td>SP4LL-HEL-900BK</td>-->
                                    <!--                                                </tr>-->
                                    <!---->
                                    <!--                                                </tbody>-->
                                    <!--                                            </table>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <table >-->
                                    <!--                                                <thead>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <th>Size</th>-->
                                    <!--                                                    <th>mm</th>-->
                                    <!--                                                    <th>Weight</th>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </thead>-->
                                    <!--                                                <tbody>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>L</td>-->
                                    <!--                                                    <td>580</td>-->
                                    <!--                                                    <td>1100g</td>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </tbody>-->
                                    <!--                                            </table>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!-- -------------------------------------------------------------------- -->
                                    <!--                                    <h3>CHILD HELMET</h3>-->
                                    <!--                                    <div class="col-sm-6">-->
                                    <!--                                        <p></p><h5>Specification</h5>-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li>SCRATCH RESISTANT VISOR</li>-->
                                    <!--                                            <li>PLOYCARBONATE SILICON HARD COATED</li>-->
                                    <!--                                            <li>INTERNATIONAL WINDOW STANDARD </li>-->
                                    <!--                                            <li>QUICK RELEASE CHIN STRAP</li>-->
                                    <!--                                            <li>UNIQUE DESIGN</li>-->
                                    <!--                                            <li>QUICK RELEASE VISOR</li>-->
                                    <!--                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>-->
                                    <!---->
                                    <!--                                        </ul>-->
                                    <!---->
                                    <!--                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,250</span>(+ Vat)</h4></div>-->
                                    <!---->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-6">-->
                                    <!---->
                                    <!--                                        <div class="box-02">-->
                                    <!--                                            <div class="thumbnail-st-s">-->
                                    <!--                                                <img src="-->
                                    <?php //echo Router::url('/', true); 
                                    ?><!--assets/public/images/accessory/6.HALF FACE for child-Light Blue (SP13M-HEL-900WT).png" alt="Lights" >-->
                                    <!--                                                <div class="caption">-->
                                    <!--                                                    <p>Light Blue </p>-->
                                    <!--                                                </div>-->
                                    <!--                                                </a>-->
                                    <!--                                            </div>-->
                                    <!---->
                                    <!--                                        </div>-->
                                    <!---->
                                    <!---->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <table >-->
                                    <!--                                                <thead>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <th>Model</th>-->
                                    <!--                                                    <th>Part number</th>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </thead>-->
                                    <!--                                                <tbody>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>Light Blue</td>-->
                                    <!--                                                    <td>SP13M-HEL-900WT</td>-->
                                    <!---->
                                    <!--                                                </tr>-->
                                    <!---->
                                    <!---->
                                    <!--                                                </tbody>-->
                                    <!--                                            </table>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <table >-->
                                    <!--                                                <thead>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <th>Size</th>-->
                                    <!--                                                    <th>mm</th>-->
                                    <!--                                                    <th>Weight</th>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </thead>-->
                                    <!--                                                <tbody>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>M</td>-->
                                    <!--                                                    <td>560</td>-->
                                    <!--                                                    <td>900g</td>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </tbody>-->
                                    <!--                                            </table>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!-- -------------------------------------------------------------- -->
                                    <h3>UNISEX</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>HELMET OPEN FACE
                                            <li> ATTRACTIVE BLACK & WHITE STRIPE EDITION</li>
                                            <li>POLYCARBONATE & SILICON COATED ANTI-SCRATED VISOR</li>
                                            <li>HI DENSITY EPS(THERMOCOL) FOR SAFETY</li>
                                            <li>QUICK RELEASE MICRO METRIC BUCKLE</li>
                                            <li>INTERIOR AIR-MESH FABRIC TO KEEP COOL</li>
                                            </li>ROOF WINDOW</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 3,200</span>( Including Vat )</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/10.HALF FACE Sports Red (SP15M-HEL900SREX).png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Sports Red</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/11.HALF FACE Sports Black (SP15M-HEL900BLEX).png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sports Red</td>
                                                        <td>SP15M-HEL-900SREX</td>

                                                    </tr>
                                                    <tr>
                                                        <td> Black</td>
                                                        <td>SP15M-HEL-900BLEX</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>M</td>
                                                        <td>580</td>
                                                        <td>900g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-------------------------------------------------------------  -->
                                    <h3>CBR</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>PAINTED CBR HELMET</li>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>HI-IMPACT ABS</li>
                                            <li>DUAL VISOR</li>
                                            <li>POLYCARBONATE SILICON HARD COATED</li>
                                            <li>AIR MOVEMENT WINDOWS</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 6,000</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/6.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Orange White</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Orange White</td>
                                                        <td>SP12BHEL900WTEX</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1580g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ---------------------------------------------------------------- -->
                                    <h3>MOVABLE CHICK GUARD</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>PRINTED HELMET WITH MOVABLE CHICK GUARD</li>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li> POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>HI-IMPACT ABS</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 3,550</span>(Including Vat)</h4>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/7.png"
                                                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13.FULL FACE  Space Black (SP3XL-HEL-900BKEX).png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Black</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Black</td>
                                                        <td>SP3XL-HEL-900BKEX</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1050g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------------------------- -->


                                    <!-- ---------------------------------------------------------------- -->
                                    <h3>MCG(Movable Chick Guard)</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Movable chick guard for making comfort riding</li>
                                            <li> Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li> Replaceable Interiors</li>
                                            <li> Quick release chin strap</li>
                                            <li> Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li> Shell Material > Hi-Impact ABS</li>
                                            <li> Helmet with Anti-Theft D-Ring</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 4,200</span>(Including Vat)</h4>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/SPACESILVER.png"
                                                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13.FULL FACE  Space Black (SP3XL-HEL-900BKEX).png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>SPACE SILVER</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>SPACE SILVER</td>
                                                        <td>SP3XLHEL900SSEX</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1250g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------------------------- -->



                                    <!----------------------------------------------------------------------------------------------------------------------  -->
                                    <h3>TRACK HELMET LADIES</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>QUICK RELEASE CHAIN STRAP</li>
                                            <li>SHELL MATERIAL>HI-IMPACT ABS</li>
                                            <li>REPLACEABLE INTERIORS</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 3,650</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/1.Pink.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Pink</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Open Face Ladies</td>
                                                        <td>SP9LL-HEL-900PK</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>950g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------- -->



                                    <!----------------------------------------------------------------------------------------------------------------------  -->
                                    <h3>ELITE SUPER HELMET</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>SHELL MATERIAL>HI-IMPACT ABS</li>
                                            <li>PREMIUM QUALITY SOFT & THICK PROTECTIVE PADDING</li>
                                            <li>REPLACEABLE INTERIORS</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 4,400</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/2.Marvel Blue.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Marvel Blue</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Marvel Blue</td>
                                                        <td>SPFFL-HEL-100MM</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1300g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------- -->


                                    <!----------------------------------------------------------------------------------------------------------------------  -->
                                    <h3>ELITE SUPER HELMET</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>SHELL MATERIAL>HI-IMPACT ABS</li>
                                            <li>PREMIUM QUALITY SOFT & THICK PROTECTIVE PADDING</li>
                                            <li>REPLACEABLE INTERIORS</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 5,000</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/3.SpartanRed.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Spartan Red</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Spartan Red</td>
                                                        <td>SPFFL-HEL-100PS</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1300g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------- -->




                                    <!----------------------------------------------------------------------------------------------------------------------  -->
                                    <h3>ELITE SUPER HELMET</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>SHELL MATERIAL>HI-IMPACT ABS</li>
                                            <li>PREMIUM QUALITY SOFT & THICK PROTECTIVE PADDING</li>
                                            <li>REPLACEABLE INTERIORS</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 5,000</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/4.IgneousBlack.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Igneous Black</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Igneous Black</td>
                                                        <td>SPFFL-HEL-100PI</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1300g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------- -->



                                    <!----------------------------------------------------------------------------------------------------------------------  -->
                                    <h3>SHIFTER HELMET</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>QUICK RELEASE CHAIN STRAP</li>
                                            <li>SHELL MATERIAL>HI-IMPACT ABS</li>
                                            <li>DUEL VISOR</li>
                                            <li>DYNAMIC VENTILATION SYSTEM</li>
                                            <li>BREATH DEFLECTOR FOR PREVENT FOGGING</li>
                                            <li>COMFORTABLE INNER PAD MADE BY VELVET</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 6,800</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/5.Red&Black.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Red & Black</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Shifter Red & Black</td>
                                                        <td>SP14M-HEL-900RB</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>M</td>
                                                        <td>570</td>
                                                        <td>1350g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------- -->

                                    <!-- ---------------------------------------------------------------- -->
                                    <h3>CHILD HELMET</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Design with attractive decals specially for childrens</li>
                                            <li> High density EPS (Thermocol) for safety</li>
                                            <li> Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li> Transparent top Air-vent.</li>
                                            <li> Quick release chin strap</li>
                                            <li> Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li> Helmet with Anti-Theft D-Ring.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 3,500</span>(Including Vat)</h4>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/SKYBLUE.png"
                                                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13.FULL FACE  Space Black (SP3XL-HEL-900BKEX).png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>SKY BLUE</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>SKY BLUE</td>
                                                        <td>SP13M-HEL-900WT</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>M</td>
                                                        <td></td>
                                                        <td>850g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------------------------- -->


                                    <!-- ---------------------------------------------------------------- -->
                                    <h3>MARSHAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Movable chick guard for making comfort riding</li>
                                            <li> Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li> Replaceable Interiors</li>
                                            <li> Quick release chin strap.</li>
                                            <li> Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li> Shell Material > Hi-Impact ABS</li>
                                            <li> Helmet with Anti-Theft D-Ring.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 3,000</span>(Including Vat)</h4>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/SILVER0.png"
                                                    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13.FULL FACE  Space Black (SP3XL-HEL-900BKEX).png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>SILVER</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>SILVER</td>
                                                        <td>SP4LL-HEL-900SLEX</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1125g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ----------------------------------------------------- -->


                                    <!--======================= new model added =================================-->
                                    <h3>MARSHAL</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Outer shell made with high grade thermoplastics</li>
                                            <li>Polycarbonate Anti-Scratch Coated Visor</li>
                                            <li>Replaceable Interiors</li>
                                            <li>Quick release chin strap</li>
                                            <li>Interiors made with AIR-MESH fabric to keep Cool</li>
                                            <li>Shell Material > Hi-Impact ABS</li>
                                            <li>Helmet with Anti-Theft D-Ring</li>

                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price for XL size :<span>BDT 3,200</span>(Including Vat)</h4>
                                            <h4>Retail Price for L size :<span>BDT 3,400</span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <!--<div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php /*echo Router::url('/', true); */ ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png"
                                                     alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>-->
                                        <div class="box-02" style="width: 49%">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/BLACK.0.png"
                                                    alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>BLACK</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2">BLACK</td>
                                                        <td>SP4XL-HEL-900BKEX</td>
                                                    </tr>
                                                    <tr>

                                                        <td>SP4LLHEL900BK</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>mm</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>XL</td>
                                                        <td>600</td>
                                                        <td>1125g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>L</td>
                                                        <td>580</td>
                                                        <td>1125g</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!--======================new model added ended==================================-->







                                    <!--                                    <h3>MOVABLE CHICK GUARD</h3>-->
                                    <!--                                    <div class="col-sm-6">-->
                                    <!--                                        <p></p><h5>Specification</h5>-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li>PRINTED HELMET WITH MOVABLE CHICK GUARD</li>-->
                                    <!--                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>-->
                                    <!--                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>-->
                                    <!--                                            <li>HI-IMPACT ABS</li>-->
                                    <!---->
                                    <!--                                        </ul>-->
                                    <!---->
                                    <!--                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 3,195</span>(+ Vat)</h4></div>-->
                                    <!---->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-sm-6">-->
                                    <!---->
                                    <!--                                        <div class="box-02">-->
                                    <!--                                            <div class="thumbnail-st-s">-->
                                    <!--                                                <img src="-->
                                    <?php //echo Router::url('/', true); 
                                    ?><!--assets/public/images/accessory/14.FULL FACE  Space Silver (SP3XL-HEL-900SSEX).png" alt="Lights" style="width:100%">-->
                                    <!--                                                <div class="caption">-->
                                    <!--                                                    <p>Space Silver </p>-->
                                    <!--                                                </div>-->
                                    <!--                                                </a>-->
                                    <!--                                            </div>-->
                                    <!---->
                                    <!--                                        </div>-->
                                    <!---->
                                    <!---->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <table >-->
                                    <!--                                                <thead>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <th>Model</th>-->
                                    <!--                                                    <th>Part number</th>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </thead>-->
                                    <!--                                                <tbody>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>Space Silver</td>-->
                                    <!--                                                    <td>SP3XL-HEL-900SSEX</td>-->
                                    <!---->
                                    <!--                                                </tr>-->
                                    <!---->
                                    <!--                                                </tbody>-->
                                    <!--                                            </table>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="box-01">-->
                                    <!--                                            <table >-->
                                    <!--                                                <thead>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <th>Size</th>-->
                                    <!--                                                    <th>mm</th>-->
                                    <!--                                                    <th>Weight</th>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </thead>-->
                                    <!--                                                <tbody>-->
                                    <!--                                                <tr>-->
                                    <!--                                                    <td>XL</td>-->
                                    <!--                                                    <td>600</td>-->
                                    <!--                                                    <td>1050g</td>-->
                                    <!--                                                </tr>-->
                                    <!--                                                </tbody>-->
                                    <!--                                            </table>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2a">
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">

                                    <!--------------------------new model------------------------------>
                                    <!--======================= new model added =================================-->
                                    <h3>HORNET 2.0</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K1LG-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for Hornet 2.0 Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1,200</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/2Picture.png" alt="Lights" style="width:100%; margin-top: 75px;">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/1Picture.png" alt="Lights" style="height: 200px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                    <!--======================= new model added =================================-->
                                    <h3>CB HORNET</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K43-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for CB Hornet Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1,100</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-001">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/3Picture.png" alt="Lights" style="margin-top: 50px; height: 40%">

                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-001">
                                            <div class="thumbnail-stn-img">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/4Picture.png" alt="Lights" style="height: 250px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->

                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                    <!--======================= new model added =================================-->
                                    <h3>X-BLADE</h3>
                                    <div class="col-sm-6">

                                        <p> <strong> Part No.: ACC01-K0E-200 </strong> </p>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for X-blade Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1,100</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/5Picture.png" alt="Lights" style="margin-top: 50px; height: 38%">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/6Picture.png" alt="Lights" style="height: 200px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--======================= new model added =================================-->
                                    <h3>SP 160</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K0EG-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for SP 160 Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1050</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/7Picture.png" alt="Lights" style="margin-top: 50px; height: 38%">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/8Picture.png" alt="Lights" style="height: 200px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--======================= new model added =================================-->
                                    <h3>CB TRIGGER</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K21-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for CB TRIGGER Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1100</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/9Picture.png" alt="Lights" style="width:100%; margin-top: 50px;">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/10Picture.png" alt="Lights" style="width:100%">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--======================= new model added =================================-->
                                    <h3>SHINE SP/ CB SHINE</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-KTE-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for <b>Shine SP</b> and <b>CB Shine</b> Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1000</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/11Picture.png" alt="Lights" style="width:100%; margin-top: 50%;">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-01">
                                            <div class="thumbnail-sts">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/12Picture.png" alt="Lights" style="height: 200px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->

                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13Picture.png" alt="Lights" style="height: 200px; width: 270px">
                                            </div>

                                            <div class="thumbnail-sts">
                                                <!-- <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13Picture.png" alt="Lights" style="height: 200px; width: 250px"> -->
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->

                                            </div>

                                        </div>

                                    </div>
                                    <!--======================= new model added =================================-->

                                    <h3>SP 125</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K0N-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for SP 125 Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1000</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/14Picture.png" alt="Lights" style="width:85%; margin-top: 50px;">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/15Picture.png" alt="Lights" style="width:100%">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--======================= new model added =================================-->

                                    <h3>DREAM 110/ LIVO</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K23-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for <b>Dream 110</b> and <b>Livo</b> Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 900</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/16Picture.png" alt="Lights" style="width:80%; margin-top: 50%;">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-sts">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/17Picture.png" alt="Lights" style="height: 200px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/18Picture.png" alt="Lights" style="height: 200px; width: 270px">
                                            </div>



                                        </div>

                                    </div>

                                    <!--======================= new model added =================================-->

                                    <h3>SHINE 100</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: ACC01-K3C-200</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Robust Construction</li>
                                            <li>Easy Installation</li>
                                            <li>Long-Lasting Durability</li>
                                            <li>Stylish Design</li>
                                            <li>Specially Designed for Shine 100 Motorcycle</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 900</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/19Picture.png" alt="Lights" style="margin-top: 95px; height: 40%">
                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/20Picture.png" alt="Lights" style="height: 200px; width: 250px">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                    <!--======================= new model added =================================-->




                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="3a">
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">


                                    <!-------------------new model added---------------->

                                    <h3>CHAIN CLEANER & LUBE</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: 07000HCL902</h6>
                                        <p></p>
                                        <h5>Benefits/ Features:</h5>
                                        <ul>
                                            <li>Honda chain cleaner and lube Specially formulated for all Honda Motorcycle.</li>
                                            <li>Effectively cleans and lubricates, removing dirt and mud to ensure optimal performance and longevity.</li>
                                            <li>Prevents corrosion, extending the lifespan of your chain and sprockets, allowing for a smoother ride.</li>
                                            <li>The specialized oil formula penetrates deeply into chain components, providing an even and durable lubrication layer to minimize friction.</li>
                                            <li>Convenient spray design for effortless application without disassembly, making maintenance quick and hassle-free.</li>
                                            <li>Size 400ml.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1350</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">

                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img class='speard' src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/21Picture.jpg" alt="Lights" style="height: 135%;">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                    <!-------------------new model added---------------->

                                    <h3>RADIATOR COOLANT</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Benefits/ Features:</h5>
                                        <ul>
                                            <li>Honda coolant water for CBR bikes. </li>
                                            <li>Specifically designed for Honda motorcycles.</li>
                                            <li>Better cooling performance, helps maintain engine temperature.</li>
                                            <li>High-quality lubricant and solvent.</li>
                                            <li>No additional water is required.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>0.5L BDT 260 (+Vat)</span></h4>
                                            <h4>Retail Price :<span>1.0L BDT 480 (+Vat)</span></h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">-->
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/23Picture.png" alt="Lights" style=" height: 100%; margin-top: 30px">
                                                <div class="caption">

                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/22Picture.png" alt="Lights" style=" height: 110%">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                &nbsp;
                                                <div class="caption">

                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="box-01" style="width: 100%;margin-left: 20px;">
                                            <table style="height: 100%;width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th>Part number</th>
                                                        <th>Size</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2">Premix Anti-corrosion Coolant</td>
                                                        <td>08CLAM9910NT1</td>
                                                        <td>0.5L</td>
                                                    </tr>
                                                    <tr>
                                                        <td>08CLAM9911NT8</td>
                                                        <td>1.0L</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                    <!-------------------new model added---------------->

                                    <h3>BRAKE FLUID DOT-3</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: 08270-99902</h6>
                                        <p></p>
                                        <h5>Benefits/ Features:</h5>
                                        <ul>
                                            <li>Specially designed for Honda motorcycle.</li>
                                            <li>Provides reliable hydraulic pressure for efficient braking.</li>
                                            <li>Maintains lubricity and fluidity across various driving conditions, ensuring reliable braking.</li>
                                            <li>Can be easily topped off during maintenance and is compatible with most brake systems designed for DOT 3 fluid.</li>
                                            <li>Made from premium components to provide superior protection and performance compared to generic fluids.</li>
                                            <li>Ensures consistent braking performance, crucial for motorcycle safety.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 235</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">

                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/24Picture.png" alt="Lights" style="height: 100%;">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                    <!-------------------new model added---------------->
                                    <h3>CUSHION OIL</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No.: 08307COMA00</h6>
                                        <p></p>
                                        <h5>Benefits/ Features:</h5>
                                        <ul>
                                            <li>Specially Designed for Honda.</li>
                                            <li>Enhanced Suspension Performance.</li>
                                            <li>Temperature Resistance.</li>
                                            <li>Reduced Friction.</li>
                                            <li>Protection Against Corrosion.</li>
                                            <li>Improved Ride Comfort.</li>
                                            <li>High Viscosity Index</li>
                                            <li>Anti-Foaming Agents</li>
                                            <li>Long-Lasting Performance</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 560</span>(+ Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box-01">
                                            <div class="thumbnail-stn">

                                                <div class="caption">
                                                    <!--<p>Pearl Black </p>-->
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-stn">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/25Picture.png" alt="Lights" style="height: 100%;">
                                                <!--                                                <img src="--><?php //echo Router::url('/', true); 
                                                                                                                    ?><!--assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">-->
                                                <div class="caption">
                                                    <!--<p>Space Silver</p>-->
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                    <!-------------------new model added---------------->



                                    <!--<h3>3D Emblem | Dream NEO</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    <p><strong>WING EMBLEM, R</strong><br>-->
                                    <!--        Part No. : 86111-K23-D00</p>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 870</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/emblem_dream_neo_r.jpg"-->
                                    <!--         alt="3D Emblem | Dream NEO" style="width:60%; height:auto;">-->
                                    <!--</div>-->



                                    <!--<h3>3D Emblem | Dream NEO</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    <p><strong>WING EMBLEM, L</strong><br>-->
                                    <!--        Part No. : 86121-K23-D00</p>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 870</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->

                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/emblem_dream_neo_r.jpg"-->
                                    <!--         alt="3D Emblem | Dream NEO" style="width:60%; height:auto;">-->
                                    <!--</div>-->
                                    <!--<h3>Rubber Key Ring</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    <p><strong>ALL</strong><br>-->
                                    <!--        Part No. : ACC06-KEY-000</p>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 40</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/key_ring.png"-->
                                    <!--         alt="Rubber Key Ring" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                </div>
                            </div>
                        </div>




                        <div class="tab-pane" id="4a">
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">

                                    <!-------------------new model added---------------->

                                    <h3>WINTER JACKET</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>100% Polyester Taffeta Fabric</li>
                                            <li>High-quality padding</li>
                                            <li>Both side usable</li>
                                            <li>Exclusively designed with Honda Logo</li>
                                            <li>Reverse zipper</li>
                                            <li>Two zippered pocket</li>
                                            <li>Color: Black</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1,600 </span>(Including Vat)</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">


                                        <div class="box-01">
                                            <div class="thumbnail-jkt">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Jacket-Front.png" alt="Lights" style="width:95%; margin-left: 20px; margin-top:12px">
                                            </div>

                                            <div class="jkt-content">
                                                <p style="font-size: 16px; text-align: center; line-height: 22px; margin: 0 0 5px;">Front</p>
                                            </div>

                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-jkt">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Jacket Back.png" alt="Lights" style="width:90%; height:265px; margin-left: 10px;">
                                                &nbsp;
                                            </div>
                                            <div class="jkt-content">
                                                <p style="font-size: 16px; text-align: center; line-height: 22px; margin: 0 0 5px;">Back</p>
                                            </div>

                                        </div>



                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Part number</th>
                                                        <th>Size</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!--<td>Monsoon Grey</td>-->
                                                        <!--<td>SP1LL-HEL-901MGEX </td>-->

                                                    </tr>
                                                    <tr>
                                                        <td>ACC07-JAC-00M</td>
                                                        <td>M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ACC07-JAC-00L</td>
                                                        <td>L</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ACC07-JAC-0XL</td>
                                                        <td>XL</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ACC07-JAC-2XL</td>
                                                        <td>2XL</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Measurement (Inch)</th>
                                                        <th>M</th>
                                                        <th>L</th>
                                                        <th>XL</th>
                                                        <th>2XL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Length</td>
                                                        <td>27</td>
                                                        <td>28</td>
                                                        <td>29</td>
                                                        <td>30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chest</td>
                                                        <td>42</td>
                                                        <td>45</td>
                                                        <td>48</td>
                                                        <td>51</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sleeve</td>
                                                        <td>22.5</td>
                                                        <td>23</td>
                                                        <td>23.5</td>
                                                        <td>24</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                    <!-------------------new model added---------------->
                                    <h3>RUBBER KEY RING</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : ACC06-KEY-000</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Made from durable, flexible rubber.</li>
                                            <li>Features the iconic Honda logo prominently, showcasing brand loyalty.</li>
                                            <li>Equipped with a sturdy metal keyring that easily attaches to keys, bags, or other accessories.</li>
                                            <li>Allows for bending without breaking, enhancing durability.</li>
                                        </ul>
                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 40</span>(+ Vat)</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/26Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div> <br><br><br><br><br><br><br><br><br><br><br><br>


                                    <!-------------------new model added---------------->

                                    <h3>GRIP COVER (BLUE COLOR)</h3>
                                    <div class="col-sm-6">

                                        <p>Part No. : SP100-GRC-905</p><br>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip.</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo.</li>
                                        </ul>


                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 185</span>(+ Vat)</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/27Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <!-------------------new model added---------------->

                                    <h3>GRIP COVER TYPE1 SET L & R</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : SP100-GRC-901</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip.</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 185</span>(+ Vat)</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/28Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <!-------------------new model added---------------->

                                    <h3>GRIP COVER TYPE2 SET L & R</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : SP100-GRC-902</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip.</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo.</li>
                                        </ul>


                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 185</span>(+ Vat)</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/29Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <!-------------------new model added---------------->

                                    <h3>GRIP COVER TYPE3 SET L & R</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : SP100-GRC-903</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip.</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 185</span>(+ Vat)</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/30Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <!-------------------new model added---------------->

                                    <h3>BIKE BODY COVER (ALL MODEL)</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : ACC01-HBC-000</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Protection from UV Rays.</li>
                                            <li>Provide superior water resistance</li>
                                            <li>Keep bike cooler and dust free</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 550</span>(+ Vat)</h4>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/31Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <!-------------------new model added---------------->

                                    <h3>TANK COVER - BLACK</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : SP000-TCR-900</h6>
                                        <p></p>
                                        <h5>Specification</h5>
                                        <ul>
                                            <li>Sufficient capacity to carry small items such as books, driving license, and other essentials.</li>
                                            <li>Water-resistant to lightly protect contents from rain and spills.</li>
                                            <li>Simple installation and removal</li>
                                            <li>Design with Honda logo for better look.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 676</span>(+ Vat)</h4>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/32Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <!-------------------new model added---------------->

                                    <h3>SEAT COVER-PREMIUM</h3>
                                    <div class="col-sm-6">
                                        <h6>Part No. : 08F80-K55-711</h6>
                                        <p>
                                        <h5>Specification</h5>
                                        </p>
                                        <ul>
                                            <li>Protect seat from dust & dirt</li>
                                            <li>Design with Honda logo for better look</li>
                                            <li>Reinforced double stitching throughout the cover to ensure enhanced durability and longer life.</li>
                                        </ul>

                                        <div class="pri-chart">
                                            <h4>Retail Price :<span>BDT 1300</span>(+ Vat)</h4>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/33Picture.png"
                                            alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div><br><br><br><br><br><br><br><br><br><br><br><br>

                                    <!-------------------new model added---------------->

                                    <!--<h3>Honda Jacket</h3>-->
                                    <!--<div class="col-sm-4">-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Fabric 100% Nylon and wind prof.</li>-->
                                    <!--        <li>Sporty design</li>-->
                                    <!--        <li>High quality Inner mass</li>-->
                                    <!--        <li>Velcro locks in sleeves</li>-->
                                    <!--        <li>Waist adjusting push lock</li>-->
                                    <!--        <li>Pocket with safety zipper</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 1,600</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-4">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/jacket_front.png"-->
                                    <!--         alt="Jacket Front">-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-4">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/jacket_back.png"-->
                                    <!--         alt="Jacket Back">-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6"></div>-->
                                    <!--<div class="col-sm-6" style="text-align: center;"><h5>Size: L & M</h5></div>-->


                                    <!--<h3>Reflector set (MIRROR)</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : 08306-COM-M00ZA</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Reflective mirror stripes gives more stylish look to the vehicle</li>-->
                                    <!--        <li>Brand name “Honda” print with reflective ink</li>-->
                                    <!--        <li>High adhesive strength for better bonding</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 83.74</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture1.jpg"-->
                                    <!--         alt="Reflector set (MIRROR)" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>LOCK-KIT HELMET SINGLE BLACK</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP100-HLK-900BK</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Toughened lock with break off bolt</li>-->
                                    <!--        <li>Unique design to lock single helmet</li>-->
                                    <!--        <li>Durable even in long run</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 570</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture2.png"-->
                                    <!--         alt="LOCK-KIT HELMET SINGLE BLACK" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>END STEERING HANDLE SET (RED)</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP300-ESH-903</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Match with body color that enhance look of vehicle</li>-->
                                    <!--        <li>Easy to install</li>-->
                                    <!--        <li>PU paint with lacquering for long life</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 170</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture3.jpg"-->
                                    <!--         alt="END STEERING HANDLE SET (RED)" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>END STEERING HANDLE SET (BLUE)</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP300-ESH-904</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Match with body color that enhance look of vehicle</li>-->
                                    <!--        <li>Easy to install</li>-->
                                    <!--        <li>PU paint with lacquering for long life</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 170</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture4.jpg"-->
                                    <!--         alt="END STEERING HANDLE SET (BLUE)" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>BIKE BODY COVER (ALL MODEL)</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : ACC01-HBC-000</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Protection from UV Rays</li>-->
                                    <!--        <li>Provide superior water resistance</li>-->
                                    <!--        <li>Keep bike cooler and dust free</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 550</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/bikecover.png"-->
                                    <!--         alt="BIKE BODY COVER (TRIGGER, SHINE, LIVO, DREAM NEO)"-->
                                    <!--         style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>GRIP COVER TYPE1 SET L&R</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP100-GRC-901</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Premium look with better grip</li>-->
                                    <!--        <li>Superior fit & finish</li>-->
                                    <!--        <li>Exclusively designed with Honda Logo</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 185</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture6.png"-->
                                    <!--         alt="GRIP COVER TYPE1 SET L&R" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>GRIP COVER TYPE2 SET L&R</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP100-GRC-902</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Premium look with better grip</li>-->
                                    <!--        <li>Superior fit & finish</li>-->
                                    <!--        <li>Exclusively designed with Honda Logo</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 185</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture7.png"-->
                                    <!--         alt="GRIP COVER TYPE2 SET L&R" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>GRIP COVER TYPE3 SET L&R</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP100-GRC-903</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Premium look with better grip</li>-->
                                    <!--        <li>Superior fit & finish</li>-->
                                    <!--        <li>Exclusively designed with Honda Logo</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 185</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture8.png"-->
                                    <!--         alt="GRIP COVER TYPE3 SET L&R" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>GRIP COVER BLACK&RED</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP100-GRC-904</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Premium look with better grip</li>-->
                                    <!--        <li>Superior fit & finish</li>-->
                                    <!--        <li>Exclusively designed with Honda Logo</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 160</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture10.png"-->
                                    <!--         alt="GRIP COVER BLACK&RED" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>GRIP COVER (BLUE COLOR)</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP100-GRC-905</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Premium look with better grip</li>-->
                                    <!--        <li>Superior fit & finish</li>-->
                                    <!--        <li>Exclusively designed with Honda Logo</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 185</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture11.png"-->
                                    <!--         alt="GRIP COVER (BLUE COLOR)" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>TANK COVER - BLACK</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : SP000-TCR-900</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Enough space for carrying small items i.e Books, DL etc</li>-->
                                    <!--        <li>Superior fit and finish</li>-->
                                    <!--        <li>Design with Honda logo for better look</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 676</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture12.jpg"-->
                                    <!--         alt="TANK COVER - BLACK" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>SEAT COVER - MESH WITH RAIN COVER</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : 08303-K55-G00ZA</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>High density mesh for better heat dissipation</li>-->
                                    <!--        <li>Rain cover made with water resistant material</li>-->
                                    <!--        <li>Double stitching to ensure better life</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 950</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture13.jpg"-->
                                    <!--         alt="SEAT COVER - MESH WITH RAIN COVER" style="width:60%; height:auto;">-->
                                    <!--</div>-->

                                    <!--<h3>SEAT COVER-PREMIUM</h3>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <p></p>-->
                                    <!--    Part No. : 08F80-K55-711</p>-->
                                    <!--    <p></p><h5>Specification</h5>-->
                                    <!--    <ul>-->
                                    <!--        <li>Protect seat from any dust & dirts</li>-->
                                    <!--        <li>Design with Honda logo for better look</li>-->
                                    <!--        <li>Double stitching to ensure better life</li>-->
                                    <!--    </ul>-->
                                    <!--    <p></p>-->
                                    <!--    <p>-->
                                    <!--    </p><h4>Retail Price</h4>-->
                                    <!--    <h5>BDT 1300</h5>-->
                                    <!--    <h5>(+ Vat)</h5>-->
                                    <!--    <p></p>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--    <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture14.jpg"-->
                                    <!--         alt="SEAT COVER-PREMIUM" style="width:60%; height:auto;">-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="productEnquiry text-center">
        <div class="row">
            <div class="bticon col-md-3 col-xs-6 col-sm-6 pull-right">
                <div class="bticon-box">
                    <a href="<?php echo Router::url('/', true); ?>dealer-network/dealer-locator">
                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/dealer-locator.png">
                        <span>Dealer & Service Location</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>