<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thicktags
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="title" id="title" placeholder="Enter Title..." />
            </div>
            <div class="form-group">
                <input type="text" name="author" id="author" placeholder="Enter an Author..." />
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-4 col-md-4 col-sm-4">
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-info btn-block" />
                </div>
            </div>
        </form>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
