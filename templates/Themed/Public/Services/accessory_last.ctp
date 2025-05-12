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
    .pro-wed-siz{
        width: 300px;
    }
    .pri-chart{
        margin-top: 10%;
    }
    .pri-chart span{
        font-size: 26px;
        font-weight: 500;
    }
    .box-02{
        width: 99%;
        float: left;
        display: grid;
        padding: 0px;
        margin: 5px;
    }


    .box-01{
        width: 48%;
        float: left;
        display: grid;
        padding: 0px;
        margin: 5px;
    }
    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        .box-01{
            width: 100%;
            float: left;
        }
    }


</style>
<div class="" style="display:inline-block; width:100%;">
    <link href="<?php echo Router::url('/', true); ?>assets/public/css/about.css" rel="stylesheet">
    <section class="micro-sec network-sec">
        <div class="network-header">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"><h5>Services</h5></div>
            <ul class="menu-network col-md-8 col-sm-12 col-xs-12">
                <li><a href="<?php echo Router::url('/', true); ?>services/honda-service">Honda Service</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/maintenance">Maintenance</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/warranty">Warranty</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/genuine-parts">Genuine Parts</a></li>
                <li><a href="<?php echo Router::url('/', true); ?>services/engine-oil">Engine Oil</a></li>
                <li><a class="menu-network-active" href="<?php echo Router::url('/', true); ?>services/accessory">Accessory</a></li>
                <!--                <li><a href="--><?php //echo Router::url('/', true); ?><!--services/owners-manual">Owner's manual</a></li>-->
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
                        <li id="li2"><a href="#2a" data-toggle="tab">Leg Guard</a></li>
                        <li id="li3"><a href="#3a" data-toggle="tab">Appearance</a></li>
                        <li id="li4"><a href="#4a" data-toggle="tab">Apparel</a></li>
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
<!--                                        <img src="--><?php //echo Router::url('/', true); ?><!--assets/public/images/accessory/marshal.jpg" alt="MARSHAL" style="width:60%; height:auto;">-->
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
<!--                                        <img src="--><?php //echo Router::url('/', true); ?><!--assets/public/images/accessory/unisex.jpg" alt="UNISEX" style="width:60%; height:auto;">-->
<!--                                    </div>-->
<!--                                    <!--<h3>HELMET FULL FACE (L-RED)</h3>-->
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
<!--                                        <img src="--><?php ///*echo Router::url('/', true); */?><!--assets/public/images/accessory/Full_face_large_red.png" alt="HELMET FULL FACE (L-RED)" style="width:60%; height:auto;">-->
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
<!--                                        <img src="--><?php ///*echo Router::url('/', true); */?><!--assets/public/images/accessory/Full_face_large_black.png" alt="HELMET- FULL FACE LARGE (BASIC BLACK)" style="width:60%; height:auto;">-->
<!--                                    </div>-->-->
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
<!--                                        <img src="--><?php //echo Router::url('/', true); ?><!--assets/public/images/accessory/Half_face_large_black.png.jpg" alt="HELMET- HALF FACE LARGE (BASIC BLACK)" style="width:60%; height:auto;">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">
                                    <h3>CUB</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>QUICK RELEASE VISOR</li>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>UV RESISTANT PAINT</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>
                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,080</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/1.HALF FACE Monsoon Grey (SP1LL-HEL-901MGEX).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Monsoon Grey</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/2.HALF FACE Pearl Black (SP1LL-HEL-901PB).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Pearl Black </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Monsoon Grey</td>
                                                    <td>SP1LL-HEL-901MGEX </td>

                                                </tr>
                                                <tr>
                                                    <td>Pearl Black</td>
                                                    <td>SP1LL-HEL-901PB
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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


                                    <!--  -->

                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>SILICON HARD COATED</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>UICK RELEASE VISOR</li>

                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 1,350</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/3.HALF FACE Basic Black 9SPHFX-HEL-100BKEX).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Basic-Black</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Basic-Black</td>
                                                    <td>SPHFX-HEL-100BKEX</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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

                                    <!--  -->
                                    <h3>MARSHAL</h3>
                                    <div class="col-sm-5">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>REPLACEABLE INTERIORS</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>INTERIOR AIR-MESH FABRIC TO KEEP COOL</li>
                                            <li>HI-IMPACT ABS</li>
                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,080</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-7">

                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/4.HALF FACE Marshall Silver (SP4LL-HEL-900SLEX).png" alt="Lights">
                                                <div class="caption">
                                                    <p>MARSHALL-Silver</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/5.HALF FACE Marshall Black (SP4LL-HEL-900BK).png" alt="Lights" >
                                                <div class="caption">
                                                    <p>MARSHALL-Black</p>
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
                                                    <td>MARSHALL-Silver</td>
                                                    <td>SP4LL-HEL-900SLEX </td>

                                                </tr>
                                                <tr>
                                                    <td>MARSHALL-Black</td>
                                                    <td>SP4LL-HEL-900BK</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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
                                                    <td>1100g</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------------- -->
                                    <h3>CHILD HELMET</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>INTERNATIONAL WINDOW STANDARD </li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>UNIQUE DESIGN</li>
                                            <li>QUICK RELEASE VISOR</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>

                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,250</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/6.HALF FACE for child-Light Blue (SP13M-HEL-900WT).png" alt="Lights" >
                                                <div class="caption">
                                                    <p>Light Blue </p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Light Blue</td>
                                                    <td>SP13M-HEL-900WT</td>

                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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
                                                    <td>560</td>
                                                    <td>900g</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------------------------- -->
                                    <h3>ECONOMICAL</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>SCRATCH RESISTANT VISOR</li>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li>QUICK RELEASE VISOR</li>
                                            <li>REGULATED DENSITY EPS</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>

                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 1,620</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/7.HALF FACE Deep Blue (SPHFX-LHEL-100BL).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Deep Blue</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/8.HALF FACE Pearl Red (SPHFL-HEL-100RD).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Pearl Red</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Deep Blue </td>
                                                    <td>SSPHFX-LHEL-100BL</td>

                                                </tr>
                                                <tr>
                                                    <td>Pearl Red</td>
                                                    <td>SPHFL-HEL-100RD </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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


                                    <!----------------------------------------------------------  -->


                                    <h3>CUB</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>PLOYCARBONATE SILICON HARD COATED</li>
                                            <li>QUICK RELEASE VISOR<li>
                                            <li>AERODYNAMIC DESIGN</li>
                                            <li> UV RESISTANT PAINT</li>
                                            <li>QUICK RELEASE CHIN STRAP</li>
                                            <li>INTERIORS MADE WITH AIR-MESH FABRIC TO KEEP COOL</li>
                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,080</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/9.HALF FACE Space Silver (SP1XL-HEL901SS).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Space Silver</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Space Silver</td>
                                                    <td>SP1XL-HEL901SS</td>

                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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
                                    <h3>UNISEX</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>HELMET OPEN FACE
                                            <li> ATTRACTIVE BLACK & WHITE STRIPE EDITION</li>
                                            <li>POLYCARBONATE & SILICON COATED ANTI-SCRATED VISOR</li>
                                            <li>HI DENSITY EPS(THERMOCOL) FOR SAFETY</li>
                                            <li>QUICK RELEASE MICRO METRIC BUCKLE </li>
                                            <li>INTERIOR AIR-MESH FABRIC TO KEEP COOL</li>
                                            </li>ROOF WINDOW</li>

                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,400</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/10.HALF FACE Sports Red (SP15M-HEL900SREX).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Sports Red</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="box-01">
                                            <div class="thumbnail-st">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/11.HALF FACE Sports Black (SP15M-HEL900BLEX).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Black</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sports Red </td>
                                                    <td>SP15M-HEL900SREX</td>

                                                </tr>
                                                <tr>
                                                    <td> Black</td>
                                                    <td>SP15M-HEL900BLEX</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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
                                        <p></p><h5>Specification</h5>
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

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 4,600</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/12.FULL FACE CBR ORANGE WHITE (SP12B-HEL-900WTEX).png" alt="Lights" style="width:100%">
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
                                                    <td>SP12B-HEL-900WTEX </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>PRINTED HELMET WITH MOVABLE CHICK GUARD</li>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li> POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>HI-IMPACT ABS</li>
                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 2,600</span>(+ Vat)</h4></div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/13.FULL FACE  Space Black (SP3XL-HEL-900BKEX).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Black</p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table >
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
                                            <table >
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
                                    <h3>MOVABLE CHICK GUARD</h3>
                                    <div class="col-sm-6">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>PRINTED HELMET WITH MOVABLE CHICK GUARD</li>
                                            <li>OUTER SHELL MADE WITH HIGH GRADE THERMOPLASTICS</li>
                                            <li>POLYCARBONATE ANTI-SCRATCH COATED VISOR</li>
                                            <li>HI-IMPACT ABS</li>

                                        </ul>

                                        <div class="pri-chart"> <h4>Retail Price <span>BDT 3,195</span>(+ Vat)</h4></div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="box-02">
                                            <div class="thumbnail-st-s">
                                                <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/14.FULL FACE  Space Silver (SP3XL-HEL-900SSEX).png" alt="Lights" style="width:100%">
                                                <div class="caption">
                                                    <p>Space Silver </p>
                                                </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="box-01">
                                            <table >
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Part number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Space Silver</td>
                                                    <td>SP3XL-HEL-900SSEX</td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-01">
                                            <table >
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
                                    <!--  -->


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2a">
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">
                                    <h3>Dream NEO</h3>
                                    <div class="col-sm-6">
                                        <p></p><p>Part No. :&nbsp; ACC01-K23-000<br>
                                            Install FRT : 0.2</p>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 1,190</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/leg_guard_dream_neo.jpg" alt="Dream NEO" style="width:60%; height:auto;">
                                    </div>
                                    <h3>CB Trigger</h3>
                                    <div class="col-sm-6">
                                        <p></p><p>Part No. :&nbsp; ACC01-K21-000<br>
                                            Install FRT : 0.2</p>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 1,390</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/leg_guard_cb_trigger.jpg" alt="CB Trigger" style="width:60%; height:auto;">
                                    </div>
                                    <h3>CB Shine</h3>
                                    <div class="col-sm-6">
                                        <p></p><p>Part No. :&nbsp; ACC01-KTE-000<br>
                                            Install FRT : 0.2</p>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 1,290</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/leg_guard_cb_shine.jpg" alt="CB Shine" style="width:60%; height:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="3a">
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">
                                    <h3>3D Emblem | Dream NEO</h3>
                                    <div class="col-sm-6">
                                        <p></p><p><strong>WING EMBLEM, R</strong><br>
                                            Part No. : 86111-K23-D00</p>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 565</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/emblem_dream_neo_r.jpg" alt="3D Emblem | Dream NEO" style="width:60%; height:auto;">
                                    </div>
                                    <h3>3D Emblem | Dream NEO</h3>
                                    <div class="col-sm-6">
                                        <p></p><p><strong>WING EMBLEM, L</strong><br>
                                            Part No. : 86121-K23-D00</p>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 565</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/emblem_dream_neo_l.jpg" alt="3D Emblem | Dream NEO" style="width:60%; height:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="4a">
                            <div class="col-sm-12">
                                <div class="rightSidebarPro">
                                    <h3>Honda Jacket</h3>
                                    <div class="col-sm-4">
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Fabric 100% Nylon and wind prof.</li>
                                            <li>Sporty design</li>
                                            <li>High quality Inner mass</li>
                                            <li>Velcro locks in sleeves</li>
                                            <li>Waist adjusting push lock</li>
                                            <li>Pocket with safety zipper</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 1,600</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/jacket_front.png" alt="Jacket Front">
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/jacket_back.png" alt="Jacket Back">
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6" style="text-align: center;"><h5>Size: L & M</h5></div>


                                    <h3>Reflector set (MIRROR)</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : 08306-COM-M00ZA</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Reflective mirror stripes gives more stylish look to the vehicle</li>
                                            <li>Brand name “Honda” print with reflective ink</li>
                                            <li>High adhesive strength for better bonding</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 84</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture1.jpg" alt="Reflector set (MIRROR)" style="width:60%; height:auto;">
                                    </div>

                                    <h3>LOCK-KIT HELMET SINGLE BLACK</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP100-HLK-900BK</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Toughened lock with break off bolt</li>
                                            <li>Unique design to lock single helmet</li>
                                            <li>Durable even in long run</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 544</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture2.png" alt="LOCK-KIT HELMET SINGLE BLACK" style="width:60%; height:auto;">
                                    </div>

                                    <h3>END STEERING HANDLE SET (RED)</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP300-ESH-903</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Match with body color that enhance look of vehicle</li>
                                            <li>Easy to install</li>
                                            <li>PU paint with lacquering for long life</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 148</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture3.jpg" alt="END STEERING HANDLE SET (RED)" style="width:60%; height:auto;">
                                    </div>

                                    <h3>END STEERING HANDLE SET (BLUE)</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP300-ESH-904</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Match with body color that enhance look of vehicle</li>
                                            <li>Easy to install</li>
                                            <li>PU paint with lacquering for long life</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 148</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture4.jpg" alt="END STEERING HANDLE SET (BLUE)" style="width:60%; height:auto;">
                                    </div>

                                    <h3>BIKE BODY COVER (TRIGGER, SHINE, LIVO, DREAM NEO)</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP200BBC900SL</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Protection from UV Rays</li>
                                            <li>Provide superior water resistance</li>
                                            <li>Keep bike cooler and dust free</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 852</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture5.jpg" alt="BIKE BODY COVER (TRIGGER, SHINE, LIVO, DREAM NEO)" style="width:60%; height:auto;">
                                    </div>

                                    <h3>GRIP COVER TYPE1 SET L&R</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP100-GRC-901</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 150</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture6.png" alt="GRIP COVER TYPE1 SET L&R" style="width:60%; height:auto;">
                                    </div>

                                    <h3>GRIP COVER TYPE2 SET L&R</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP100-GRC-902</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 150</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture7.png" alt="GRIP COVER TYPE2 SET L&R" style="width:60%; height:auto;">
                                    </div>

                                    <h3>GRIP COVER TYPE3 SET L&R</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP100-GRC-903</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 150</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture8.png" alt="GRIP COVER TYPE3 SET L&R" style="width:60%; height:auto;">
                                    </div>

                                    <h3>GRIP COVER BLACK&RED</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP100GRC904</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 160</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture10.png" alt="GRIP COVER BLACK&RED" style="width:60%; height:auto;">
                                    </div>

                                    <h3>GRIP COVER (BLUE COLOR)</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP100-GRC-905</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Premium look with better grip</li>
                                            <li>Superior fit & finish</li>
                                            <li>Exclusively designed with Honda Logo</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 134</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture11.png" alt="GRIP COVER (BLUE COLOR)" style="width:60%; height:auto;">
                                    </div>

                                    <h3>TANK COVER - BLACK</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : SP000-TCR-900</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Enough space for carrying small items i.e Books, DL etc</li>
                                            <li>Superior fit and finish</li>
                                            <li>Design with Honda logo for better look</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 498</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture12.jpg" alt="TANK COVER - BLACK" style="width:60%; height:auto;">
                                    </div>

                                    <h3>SEAT COVER - MESH WITH RAIN COVER</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : 08303-K55-G00ZA</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>High density mesh for better heat dissipation</li>
                                            <li>Rain cover made with water resistant material</li>
                                            <li>Double stitching to ensure better life</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 948</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture13.jpg" alt="SEAT COVER - MESH WITH RAIN COVER" style="width:60%; height:auto;">
                                    </div>

                                    <h3>SEAT COVER-PREMIUM</h3>
                                    <div class="col-sm-6">
                                        <p></p>
                                        Part No. : 08F80-K55-711</p>
                                        <p></p><h5>Specification</h5>
                                        <ul>
                                            <li>Protect seat from any dust & dirts</li>
                                            <li>Design with Honda logo for better look</li>
                                            <li>Double stitching to ensure better life</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                        </p><h4>Retail Price</h4>
                                        <h5>BDT 830</h5>
                                        <h5>(+ Vat)</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo Router::url('/', true); ?>assets/public/images/accessory/Picture14.jpg" alt="SEAT COVER-PREMIUM" style="width:60%; height:auto;">
                                    </div>
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