<?php

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>

	<section class="pageindex">
        <div class="pageindex_wrapper">
            <div class="container">
                <h3 class="pageindex-title">
                    <span>新着情報</span>
                    <strong>新着情報</strong>
                </h3>
            </div>
        </div>
    </section>

    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?php echo HOME; ?>">TOP</a></li>
                <li>新着情報</li>
            </ol>
        </div>
    </section>

	<main id="main">

		<?php
			$args = [
				'post_type' => 'post',
				'post_status' => 'publish',
				'paged' => $paged,
				'posts_per_page' => 12,
				'orderby' => 'post_date',
				'order' => "DESC",
			];
		?>

	  	<?php $custom_query = new WP_Query( $args ); ?>

	  	<section class="inner-page">
	        <div class="container">
	            <h3 class="section-title">新着情報</h3>
				<?php if( $custom_query->have_posts() ) : ?>
		            <ul class="news-block-list">
						<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			                <li>
								<div class="news-item">
		                            <div class="thumb">
		                                <a href="<?php the_permalink(); ?>" class="image">
		                                    <?php if( has_post_thumbnail() ): ?>
		                                        <?php the_post_thumbnail("small"); ?>
		                                    <?php else: ?>
		                                        <img src="<?php echo catch_that_image(); ?>" width="150" height="100" alt="<?php the_title(); ?>">
		                                    <?php endif; ?>
		                                </a>
		                            </div>
		                            <div class="content">
		                                <time class="date"><?php the_time("Y.m.d"); ?></time>
		                                <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		                            </div>
		                        </div>
			                </li>
		                <?php endwhile; ?>
		            </ul>
					<div class="wp-pagination">
						<?php if(function_exists('wp_pagenavi')) : ?>
							<?php wp_pagenavi(array('query' => $custom_query)); ?>
						<?php endif; ?>
		            </div>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
	        </div>
	    </section>

		<section id="contact" class="section-contact-banner">
	        <div class="container">
	            <?php get_template_part('template', 'parts/banner'); ?>
	        </div>
	    </section>

	</main>

<?php get_footer();?>