<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

	<section class="pageindex">
        <div class="pageindex_wrapper">
            <div class="container">
                <h3 class="pageindex-title">
                    <span><?php the_title(); ?></span>
                    <strong><?php the_title(); ?></strong>
                </h3>
            </div>
        </div>
    </section>

    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?php echo HOME; ?>">TOP</a></li>
                <li><?php the_title(); ?></li>
            </ol>
        </div>
    </section>

	<main id="main">

		<?php the_content(); ?>

		<section id="contact" class="section-contact-banner">
	        <div class="container">
	            <?php get_template_part('template', 'parts/banner'); ?>
	        </div>
	    </section>
		
	</main>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
