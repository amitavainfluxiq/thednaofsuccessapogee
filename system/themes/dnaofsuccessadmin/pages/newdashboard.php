<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 8/23/16
 * Time: 12:18 PM
 */
?>

<div class="container-fluid top_banner_block">
    <div class="container">
        <div class="topbanner_textblock">



            <?php
            $toplogo = '<a href="javascript:void(0)"><img src="system/themes/dnaofsuccessadmin/images/thedna_logo.png"  alt="#" class="toplogo"/></a>';
            echo $AI->get_defaulted_dynamic_area('toplogo',$toplogo);
            ?>

            <h1> <?php
                $topbanner_h1_text = 'DNA of Success <span>masters</span><br />Courses';
                echo $AI->get_defaulted_dynamic_area('topbanner_h1_text',$topbanner_h1_text);
                ?>

            </h1>
            <h3>
                <?php
                $topbanner_h3_text = 'Identify your personal barriers and destroy them. Never give <br />
                them power over you again.';
                echo $AI->get_defaulted_dynamic_area('topbanner_h3_text',$topbanner_h3_text);
                ?>

            </h3>
        </div>
    </div>
</div>

<div class="container-fluid body_block1">
    <div class="container">
        <div class="welcomecon">

            <h1>
                <?php
                $welcomecon_block_h1_text = 'Welcome';
                echo $AI->get_defaulted_dynamic_area('welcomecon_block_h1_text',$welcomecon_block_h1_text);
                ?>
            </h1>
            <h2>

                <?php
                $welcomecon_block_h2_text = '  Please pay attention to the following basic instructions!';
                echo $AI->get_defaulted_dynamic_area('welcomecon_block_h2_text',$welcomecon_block_h2_text);
                ?>


            </h2>
            <h3>

                <?php
                $welcomecon_block_h3_text = '  Now that you are a member and have access to the incredible <span>DNA of Success</span> Master Course we want to
                give you some quick guidance on how to use the Success Portal most effectively. Please review the following.';
                echo $AI->get_defaulted_dynamic_area('welcomecon_block_h3_text',$welcomecon_block_h3_text);
                ?>

            </h3>

        </div>

        <div class="lessons_con">
            <img src="system/themes/dnaofsuccessadmin/images/demoimg.png"  alt="#"/>
        </div>

        <div class="clearfix"></div>
    </div>


    <div class="container-fluid body_block_list">
        <div class="container">
            <ul>
                <li><img src="system/themes/dnaofsuccessadmin/images/l1.png"  alt="#"/>
               <?php
                    $welcomecon_li_text1 = '   You should have received along with the welcome email with your log in credentials a
                    custom invitation from <span>GoToWebinar</span> for all of the live Webinars with Jack that you purchased. Please make sure you save those emails, the dates and times of the webinars. These are actually live with Jack directly and you do not want to miss these occasions! Mark your calendars!';
                    echo $AI->get_defaulted_dynamic_area('welcomecon_li_text1',$welcomecon_li_text1);
                    ?>

                </li>

                <li><img src="system/themes/dnaofsuccessadmin/images/l2.png"  alt="#"/>
                    <?php
                    $welcomecon_li_text2 = ' You will be receiving your book materials in the mail within the next few business days. Each of the lessons that we have include some reading from the book materials. You are absolutely welcome to start browsing the materials and download the bonus <span>PFDs</span> from the media library now, but we highly suggest that you wait for your book materials to arrive before you begin. ';
                    echo $AI->get_defaulted_dynamic_area('welcomecon_li_text2',$welcomecon_li_text2);
                    ?>

                </li>



                <li><img src="system/themes/dnaofsuccessadmin/images/l3.png"  alt="#"/>
                    <?php
                    $welcomecon_li_text3 = '  This is a 12-week program made to completely shift your mindset to the exact potential in discovering your core desires and unleashing your unstoppable conquering force. Each lesson is the representation of one full week. We highly suggest that you focus on the first week and work with the materials. Really allow the week’s lesson to sink deeply into your consciousness.';
                    echo $AI->get_defaulted_dynamic_area('welcomecon_li_text3',$welcomecon_li_text3);
                    ?>

                </li>


                <li><img src="system/themes/dnaofsuccessadmin/images/l4.png"  alt="#"/>
                    <?php
                    $welcomecon_li_text4 = 'Make it a practice to put aside at least 1 hour a day to review the materials again and further develop your strategy for integrating the lesson into your daily life.';
                    echo $AI->get_defaulted_dynamic_area('welcomecon_li_text4',$welcomecon_li_text4);
                    ?>

                </li>



                <li><img src="system/themes/dnaofsuccessadmin/images/l5.png"  alt="#"/>
                    <?php
                    $welcomecon_li_text5 = ' Always, even after you finish the course materials, come back often to see what else we
                    have for you! We are constantly putting in new materials, videos, audios and chances to participate with Jack live through webinars and in person.';
                    echo $AI->get_defaulted_dynamic_area('welcomecon_li_text5',$welcomecon_li_text5);
                    ?>

                </li>






            </ul>
        </div>
    </div>
</div>

<div class="container-fluid body_block3">
<div class="container">

<h1>
    <?php
    $block3_h1_text = 'Here are some quick links to get you going right now!';
    echo $AI->get_defaulted_dynamic_area('block3_h1_text',$block3_h1_text);
    ?>

</h1>

<div class="blockbtn1"> <?php
                $blockbtn1_text = '<a href="javascript:void(0)"><span><label>  Go to the DNA of Success Master Course Now!  </label></span>  </a>';
                echo $AI->get_defaulted_dynamic_area('blockbtn1_text',$blockbtn1_text);
                ?>
           </div>



<div class="blockbtn2">
       <?php
                $blockbtn2_text = '<a href="javascript:void(0)"><span><label> Go to the Bonus Materials and get<br/>free downloads Now! </label> </span></a>';
                echo $AI->get_defaulted_dynamic_area('blockbtn2_text',$blockbtn2_text);
                ?>

            </div>


<div class="clearfix"></div>

<div class="blockbtn3">
   <?php
                $blockbtn3_text = '<a href="javascript:void(0)"><span><label> Check out the latest in the Member\'s only<br/>DNA of Success Weekly Blog! </label></span>  </a>';
                echo $AI->get_defaulted_dynamic_area('blockbtn3_text',$blockbtn3_text);
                ?>

            </div>

<div class="blockbtn4">



                <?php
                $blockbtn4_text = '<a href="javascript:void(0)"><span><label> Visit our Facebook fan page to stay up to date on a<br/>daily with inspiration directly from Jack! </label> </span> </a>';
                echo $AI->get_defaulted_dynamic_area('blockbtn4_text',$blockbtn4_text);
                ?>

            </div>

<div class="clearfix"></div>

<div class="blockbtn5">
     <?php
                $blockbtn5_text = '  <a href="javascript:void(0)" ><span><label> Go to our Shopping Cart for more incredible items from the DNA of Success Master Course now!  </label></span> </a>';
                echo $AI->get_defaulted_dynamic_area('blockbtn5_text',$blockbtn5_text);
                ?>

           </div>

<div class="blockbtn6">

                <?php
                $blockbtn6_text = ' <a href="javascript:void(0)"><span><label> Want to become a mentor for others and make money with the DNA of Success Master Course? <br/>
                Click here to learn how to upgrade now!</label></span>
    </a>';
                echo $AI->get_defaulted_dynamic_area('blockbtn6_text',$blockbtn6_text);
                ?>

            </div>

<div class="clearfix"></div>


<div class="block3_text1">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left" valign="middle" class="tdimg">

                <?php
                $block3_img1 = '<img src="system/themes/dnaofsuccessadmin/images/img1.jpg"  alt=""/>';
                echo $AI->get_defaulted_dynamic_area('block3_img1',$block3_img1);
                ?>

            </td>

            <td align="left" valign="middle" class="tdtext">
  <?php
                $block3_text1 = 'Please come back often and read through the following to stay inspired and motivated to keep on the path of Success with the DNA of Success Master Course!';
                echo $AI->get_defaulted_dynamic_area('block3_text1',$block3_text1);
                ?>
            </td>
        </tr>
    </table>


    <div class="clearfix"></div>

</div>


<div class="banner_text-block1">
    <h2>
  <?php
        $block3_banner1_text = 'What is Your Life Missing?';
        echo $AI->get_defaulted_dynamic_area('block3_banner1_text',$block3_banner1_text);
        ?>

    </h2>
    <div class="clearfix"></div>
</div>

<div class="banner_textblock-contain">
    <div class="text_block_btn">


        <a class="btn btn-primary  " data-toggle="collapse" href="#collapseExamplea" aria-expanded="true" aria-controls="collapseExamplea"> +</a>



        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>



        <div class="text_part collapse in" id="collapseExamplea" aria-expanded="true">

     <?php
            $text_part1 = ' Something has been missing in your life. There is a disconnect between who you are and what you do, what you want and what you have, or what you set out to achieve and what you actually achieve.<br />
        <br />
  Congratulations on your decision to become a Member of the Jack Zufelt <span>DNA of Success</span> Program! Something has been missing in your life. There has been a disconnect between who you are and what you do, what you want and what you have, or what you set out to achieve and what you actually achieve. But now you will learn how to switch on your Success and achieve your innermost dreams. This is an exciting time for you!';
            echo $AI->get_defaulted_dynamic_area('text_part1',$text_part1);
            ?>



    </div>



    <div class="clearfix"></div>

</div>




<div class="banner_text-block2">
    <h2>
  <?php
        $block3_banner2_text = 'You have discovered the <br />source of SUCCESS!';
        echo $AI->get_defaulted_dynamic_area('block3_banner2_text',$block3_banner2_text);
        ?>


    </h2>
    <div class="clearfix"></div>
</div>


<div class="banner_textblock-contain">
    <div class="text_block_btn">
        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExampleb" aria-expanded="false" aria-controls="collapseExampleb"> +</a>
        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>

    <div class="text_part collapse" id="collapseExampleb">

   <?php
        $text_part2 = 'There is a better way to achieve the success you want—a way that is simple and easy to understand because it is a fundamental part of you. This is the DNA of all success. As a DNA of Success Member we have provided a unique platform of initiatives for you in which you can learn to unlock the <span>DNA of Success</span> and accomplish your true desires. <br />
        <br />
  When you truly want something, you\'ll amaze yourself at what you will do to get it—nothing will stop you once you uncover your Core Desires and tap into your Conquering Force. All this is achieved through an intensive online course with all new material, a course booklet, informative webinars, newsletters, and course materials.';
        echo $AI->get_defaulted_dynamic_area('text_part2',$text_part2);
        ?>

    </div>



    <div class="clearfix"></div>

</div>

<div class="banner_text-block3">
    <h2>

        <?php
        $block3_banner3_text = 'Search No More!';
        echo $AI->get_defaulted_dynamic_area('block3_banner3_text',$block3_banner3_text);
        ?>

    </h2>
    <div class="clearfix"></div>
</div>

<div class="banner_textblock-contain">
    <div class="text_block_btn">
        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExamplec" aria-expanded="false" aria-controls="collapseExamplec"> +</a>
        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>

    <div class="text_part collapse" id="collapseExamplec">
         <?php
        $text_part3 = 'It is a joy to tell you that your search for the key to success is over. Within this course is the answer. If you open your mind, your heart, and your soul to the truths you will be presented with, you will achieve more than you ever thought possible.<br />
        <br />


        The root of success does not come from an outside source - it comes from within you. Everyone has the potential to succeed within them. You already have what you need to succeed!
        <br />
        <br />

        As a Member in this program you will benefit from the exceptional skill, education, and credentials of Jack Zufelt in the form of the course. The Jack Zufelt <span>DNA of Success</span> Program is designed to help teach you the <span>DNA of Success</span> strategy and discover your Core Desires.
        <br />
        <br />

        By participating in this course you will become familiar with the best practices to achieve your own success. You will discover meaningful career opportunities, personal developments, and characteristics that will allow you to achieve your dreams and live your best life!
';
        echo $AI->get_defaulted_dynamic_area('text_part3',$text_part3);
        ?>



    </div>



    <div class="clearfix"></div>

</div>




<div class="banner_text-block4">
    <h2>
        <?php
        $block3_banner4_text = 'Who can benefit from the Jack <br /> Zufelt DNA of Success Program?';
        echo $AI->get_defaulted_dynamic_area('block3_banner4_text',$block3_banner4_text);
        ?>


    </h2>
    <div class="clearfix"></div>
</div>

<div class="banner_textblock-contain">
    <div class="text_block_btn">
        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExampled" aria-expanded="false" aria-controls="collapseExampled"> +</a>
        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>

    <div class="text_part collapse" id="collapseExampled">

        <?php
        $text_part4 = ' As a mentor you may be asked who exactly can benefit from the Jack Zufelt <span>DNA of Success</span> Program. In reality, anyone and everyone can benefit from this amazing program we offer. Do you or anyone you know struggle with a professional or personal issue?
        <br />
        <br />

        The objective of this course and the program as a whole is to gain insight into and understanding of your own power to realize your success in many areas of your life. You will be provided with all the support and resources to properly learn the DNA of Success so you may pursue your professional or personal development.
        <br />
        <br />

        The Jack Zufelt <span>DNA of Success</span> Program offers insights and direct, clear ways to handle all that life can throw at you. As a Member you can learn new skills, new perspectives, and find solutions.

';
        echo $AI->get_defaulted_dynamic_area('text_part4',$text_part4);
        ?>



    </div>



    <div class="clearfix"></div>

</div>




<div class="banner_text-block5">
    <h2>
 <?php
        $block3_banner5_text = 'Realize Your Potential!';
        echo $AI->get_defaulted_dynamic_area('block3_banner5_text',$block3_banner5_text);
        ?>

    </h2>
    <div class="clearfix"></div>
</div>

<div class="banner_textblock-contain">
    <div class="text_block_btn">
        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExamplee" aria-expanded="false" aria-controls="collapseExamplee"> +</a>
        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>

    <div class="text_part collapse" id="collapseExamplee">



        <?php
        $text_part5 = '  As potential, current, or future leaders in your field, the DNA of Success Program offers more than just academic preparation. Equipped with the DNA of Success training program, you will be able to navigate to your highest possible success. You will be able to succeed in any personal and professional development and gain knowledge, expertise, and experience.
        <label>You may seek help in many areas of life such as:</label>

        <ul class="ulone">
            <li>Professional Relationships</li>
            <li>Love Relationships</li>
            <li>Career Promotion</li>
            <li>Spiritual </li>
            <li>Career Path</li>
        </ul>

';
        echo $AI->get_defaulted_dynamic_area('text_part5',$text_part5);
        ?>


        <div class="clearfix"></div>
    </div>



    <div class="clearfix"></div>

</div>



<div class="banner_text-block6">
    <h2>

        <?php
        $block3_banner6_text = 'The DNA of Success System';
        echo $AI->get_defaulted_dynamic_area('block3_banner6_text',$block3_banner6_text);
        ?>

    </h2>
    <div class="clearfix"></div>
</div>


<div class="banner_textblock-contain">
    <div class="text_block_btn">
        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExamplef" aria-expanded="false" aria-controls="collapseExamplef"> +</a>
        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>

    <div class="text_part collapse" id="collapseExamplef">



        <?php
        $text_part6 = '   Over the course of the next several weeks you will receive weekly lessons that contain reading material, activities, and challenges that you can apply in your daily life. All of which is geared to help you shift your personal paradigm and help you to achieve your ultimate success.

        <label>Some key benefits include:</label>

        <ul>
            <li>Exposure to new ideas and ways of thinking</li>

            <li>Advice on developing strengths and overcoming weaknesses</li>

            <li>Guidance on professional and/or personal development and advancement</li>

            <li>The opportunity to develop new skills and gain new knowledge</li>

            <li>Opportunity to reflect on own goals and practices</li>

            <li>Develop a culture of personal and professional growth</li>

            <li>Share successful behaviors and attitudes </li>

            <li>Enhance leadership skills</li>

            <li>Improve everyday morale, performance, and motivation </li>
        </ul>

        With the DNA of Success System, you will learn how to identify your true goals with actionable steps to take to achieve them!
';
        echo $AI->get_defaulted_dynamic_area('text_part6',$text_part6);
        ?>





        <div class="clearfix"></div>
    </div>



    <div class="clearfix"></div>

</div>


<div class="banner_text-block7">
    <h2>
        <?php
        $block3_banner7_text = 'Are You Ready For Success?';
        echo $AI->get_defaulted_dynamic_area('block3_banner7_text',$block3_banner7_text);
        ?>

    </h2>
    <div class="clearfix"></div>
</div>

<div class="banner_textblock-contain">
    <div class="text_block_btn">
        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExampleg" aria-expanded="false" aria-controls="collapseExampleg"> +</a>
        <div class="clearfix"></div>

        <div class="textdevider"></div>

    </div>

    <div class="text_part collapse" id="collapseExampleg">


        <?php
        $text_part7 = '   Once you have discovered your Core Desires you have an important choice to make: will you open the door to your success?<br />
        <br />


        Become aware of the power within you to make things happen when you are aligned with <span>your Core Desires!</span><br />
        <br />

        As you learn to live more from your heart, you will discover the Conquering Force. As you work more from your heart, you will unleash the Conquering Force in your behalf. Let your heart-set, rather than your mind-set, be your constant guide. Let your heart rule your head.<br />
        <br />

        Your ability to create success and happiness lies within you! Once you successfully complete this course you will finally be able to live a life that is <span>full of joy and satisfaction</span>

';
        echo $AI->get_defaulted_dynamic_area('text_part7',$text_part7);
        ?>

        <div class="clearfix"></div>
    </div>



    <div class="clearfix"></div>

</div>


<div class="buttom_text4">
    <?php
    $buttom_text4 = 'Discover the Most Successful You!';
    echo $AI->get_defaulted_dynamic_area('buttom_text4',$buttom_text4);
    ?>

</div>

<div class="blockbtn1">

 <?php
    $buttom4_blockbtn1 = '<a href="javascript:void(0)"><span><label>Go to the DNA of Success Master Course Now! </label></span>  </a>';
    echo $AI->get_defaulted_dynamic_area('buttom4_blockbtn1',$buttom4_blockbtn1);
    ?>

</div>
<div class="blockbtn2">
 <?php
    $buttom4_blockbtn2 = '<a href="javascript:void(0)"><span><label>Go to the Bonus Materials and get<br/>free downloads Now!</label></span>  </a>';
    echo $AI->get_defaulted_dynamic_area('buttom4_blockbtn2',$buttom4_blockbtn2);
    ?>

</div>


<div class="clearfix"></div>

<div class="blockbtn7">
<?php
    $buttom4_blockbtn3 = '<a href="javascript:void(0)"><span><label>Go to our Shopping Cart for more incredible items from the DNA of Success Master Course now!</label></span>  </a>';
    echo $AI->get_defaulted_dynamic_area('buttom4_blockbtn3',$buttom4_blockbtn3);
    ?>

</div>

</div>

</div>