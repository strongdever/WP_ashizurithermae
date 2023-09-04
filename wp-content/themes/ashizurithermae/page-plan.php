<?php
/*
Template Name: Plan Page
*/
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

    <main id="main">

        <section class="pageindex">
            <figure class="background">
                <?= img_srcset('plan/first-image', 'webp', false, "pc"); ?>
                <?= img_srcset('plan/first-image-sp', 'webp', false, "sp"); ?>
            </figure>
        </section>

        <section class="page-plan" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <div class="content-in">
                    <h3 class="plan-title">プラン一覧</h3>
                    <?php if( have_rows('plan-list') ): ?>
                    <ul class="plan-block-list">
                        <?php while( have_rows('plan-list') ) : the_row(); ?>
                        <li>
                            <a href="<?php echo esc_url( get_sub_field('link') ); ?>" class="plan-block">
                                <figure class="thumb">
                                    <img src="<?php echo esc_attr( get_sub_field('thumb') ); ?>" alt="<?php the_sub_field('name'); ?>">
                                </figure>
                                <div class="wrap">
                                    <h4 class="title"><?php the_sub_field('name'); ?></h4>
                                    <p class="desc"><?php the_sub_field('description'); ?></p>
                                    <?php 
                                        $food_str = "";
                                        $food_arr = get_sub_field('food');
                                        if( in_array(1, $food_arr) && in_array(2, $food_arr) ) {
                                            $food_str = "食事：朝食・夕食あり";
                                        } elseif ( in_array(1, $food_arr) ) {
                                            $food_str = "食事：朝食あり・夕食なし";
                                        } elseif ( in_array(2, $food_arr) ) {
                                            $food_str = "食事：朝食なし・夕食あり";
                                        } else {
                                            $food_str = "食事：無し";
                                        }
                                    ?>
                                    <p class="food"><?php echo $food_str; ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
		
	</main>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
