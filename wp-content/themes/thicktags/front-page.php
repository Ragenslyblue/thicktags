<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thicktags
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="section_two">
    <aside class="left">
    <div class="wrapper-text">
        <div class="text-align" style="
    margin-left: -50px;
    margin-top: -100px;
">
            <h1 class="color-change-one">"Best Designed Website Series"</h1>
            <h1 class="color-change-two">Our Service Website</h1>
        </div>
    </div>
    <div class="practices-wrapper">
        <div class="wrapping-text">
            <h2>Practices for your Services Page by offering</h2>
            <h2 class="practices-one">Practices for your Services Page by offering</h2>
            <h2 class="practices-one">A few examples of it being done right.</h2>
        </div>
    </div>
</aside>
<aside class="right">
    <div class="wrap-custom">
        <div class="text-decoration">
            <h1 class="come_work">Come Work With Us</h1>
        </div>
        <div class="begin">
            <h1 class="ready">Ready to begin a new career adventure with</h1><br />
            <h1 class="ready">Thicktags. Check out our open positions to find the perfect</h1><br />
            <h1 class="ready">spot for you.Check Out now.</h1>
        </div>
        <div class="positions">
            <div class="agency"><h1>Open Positions</h1></div>
        </div>
    </div>
</aside>
</section>

<section class="section_three">
<aside class="align-images">
<div class="one-image">
    <div class="image-fit-one"><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/image1.jpg" width="639" height="320" /></div>
</div>
<div class="two-image">
    <div class="image-center-two"><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/image2.jpg" width="641" height="320" /></div>
</div>
<div class="three-image">
    <div class="image-fit-three"><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/image3.jpg" width="640" height="320" /></div>
</div>

</aside>

</section>

<section class="section_four">

<div class="wrap-image-circle">
        <div class="circle-one">
            <img src="<?php echo(get_template_directory_uri());?>/pics/images_2/circle_1.png" width="429" height="427" />
        </div>
</div>    

    <div class="web-space">
        <div class="web-development">
            <h1>Web Delopment</h1>
        </div>
    </div>
    <div class="wrap-text">
        <div class="premiere">
            <h2 class="test-one">A premier nightlife spot with retro 1970s</h2>
            <h2 class="test-two">inspired bowling, bars, and outdoor </h2>
            <h2 class="test-three">patios located in Tulsa</h2>
        </div>
    </div>

<div class="wrap-circle-two">
    <div class="circle-two">
        <img class="image-spacing" src="<?php echo(get_template_directory_uri());?>/pics/images_2/circle_2.png" width="356" height="362" />
    </div>
</div>
<div class="wraps-three">
    <div class="circle-three">
        <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/circle_3.png" width="256" height="242" />
    </div>
</div>
<div class="wrap-fourth">
    <div class="fouth-circle">
        <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/circle_4.png" width="163" height="171" />
    </div>
</div>
<div class="wrap-fifth">
    <div class="fifth-wrap">
        <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/circle_5.png" width="153" height="133" />
    </div>
</div>
    
</section>

<section class="section_five">
    <div class="wrap-content">
        <!--<div class="image-one">
            <img class="images-circle" src="pics/images_2/work-hard-data-analytics-statistics-information-business-technology_36325-2152.jpg" width="480" height="330" />
        </div>
        <div class="image-two">
            <img src="pics/images_2/group-diverse-people-having-business-meeting_53876-25060.jpg" width="481" height="330" />
        </div>
        <div class="image-three">
            <img src="pics/images_2/developing-programmer-development-website-design-coding-technologies-working-software-company-office-stock_18497-1162.jpg" width="470" height="330" />
        </div>
        <div class="image-four">
            <img src="pics/images_2/modern-glass-desk-interior-with-computer-devices-3d-rendering_117023-3331.jpg" width="332" height="330" />        
        </div>-->
        <div class="left carousel-point"></div>
        <div class="imaging-one">
            <img src="<?php echo(get_template_directory_uri()) ;?>/pics/images_2/work-hard-data-analytics-statistics-information-business-technology_36325-2152.jpg" width="480" height="330" />
        </div>
        <div class="two">
            <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/group-diverse-people-having-business-meeting_53876-25060.jpg" width="481" height="330" />
        </div>
        <div class="three">
            <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/developing-programmer-development-website-design-coding-technologies-working-software-company-office-stock_18497-1162.jpg" width="470" height="330" />
        </div>
        <div class="four">
            <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/modern-glass-desk-interior-with-computer-devices-3d-rendering_117023-3331.jpg" width="332" height="330" />
        </div>
        <div class="write">
        <div class="right carousel-writtings"></div>
        </div>
    </div>
</section>

<section class="section_six">
</section>

<section class="section_seven">
</section>

<section class="section_eight">
</section>

<section class="section_nine">
</section>

                
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
