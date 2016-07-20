<!--/*------------------------footer block--------------------------*/-->
<div class="container-fluid foooter_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foooter_section_col">
            <div class="foot_menu">

                <?php
                $footermenu = '
                <a href="javascript:void(0);" >Home</a>
                <a href="javascript:void(0);">Products</a>
                <a href="javascript:void(0);">The Whole Story</a>
                <a href="javascript:void(0);">Mentor Program</a>
                <a href="javascript:void(0);">Success Genetics</a>
                <a href="javascript:void(0);">About Jack Zufelt</a>
                <a href="javascript:void(0);">Contact Us</a>';
                echo $AI->get_defaulted_dynamic_area('footermenu',$footermenu);
                ?>

                <div class="clearfix"></div>
            </div>
            <?php
            $footerlogo = ' <a href="javascript:void(0);"><img src="system/themes/dnaofsuccess/images/foot_logo.png" alt="#" class="foot_logo"></a>';
            echo $AI->get_defaulted_dynamic_area('footerlogo',$footerlogo);
            ?>



                <?php
                $footercopyright = '    <p>&copy; 2016 The dna  of success. All rights reserved. </p>';
                echo $AI->get_defaulted_dynamic_area('footercopyright',$footercopyright);
                ?>


        </div>
    </div>
</div>

