<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 7/19/16
 * Time: 3:51 PM
 */

global $AI;

//$AI->skin->css('system/themes/Dnaofsuccess/styles.live.css','high');
//$AI->skin->css('system/themes/emerald/styles.live.css');
$AI->skin->css('system/themes/dnaofsuccess/css/bootstrap.min.css');
$AI->skin->css('system/themes/dnaofsuccess/css/style.css');
$AI->skin->css('system/themes/dnaofsuccess/css/media.css');




$AI->skin->js('system/themes/dnaofsuccess/js/bootstrap.min.js');
//$AI->skin->js('system/themes/dnaofsuccess/js/jquery-2.2.0.min.js');

?>

<!--/*------------------------top block--------------------------*/-->

<div class="container-fluid home_top_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home_top_section_col">
            <div class="container home_top_block">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home_top_block_col">
                        <p><img src="system/themes/dnaofsuccess/images/home_star.png" alt="#">Featured on over <span>2,000</span> Television Shows and Radio Stations!</p>
                        <span class="top_logo_div">
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/cnn_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/today_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/abc_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/cbs_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/nbc_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/dateline_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/2020_logo.png" alt="#"></a>
                            <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/foxnews_logo.png" alt="#"></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="system/themes/dnaofsuccess//images/home_top_divider.png" alt="#" class="home_top_divider">

<div class="container-fluid menu_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container menu_block">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 home_banner_logo_section">
                        <a href="javascript:void(0);">

                            <?php
                            $logoheader = '<img src="system/themes/dnaofsuccess/images/logo.png" alt="#">';
                            echo $AI->get_defaulted_dynamic_area('logoheader',$logoheader);
                            ?>


                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 home_banner_menu_section">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <div class="navbar-header"><span class="menu_text">MENU</span>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li><a href="javascript:void(0);">Home</a></li>
                                        <li><a href="javascript:void(0);">Products</a></li>
                                        <li><a href="javascript:void(0);">The Whole Story</a></li>
                                        <li><a href="javascript:void(0);">Mentor Program</a></li>
                                        <li><a href="javascript:void(0);">Success Genetics</a></li>
                                        <li><a href="javascript:void(0);">About Jack Zufelt</a></li>
                                        <li><a href="javascript:void(0);">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--/*------------------------ end top block--------------------------*/-->