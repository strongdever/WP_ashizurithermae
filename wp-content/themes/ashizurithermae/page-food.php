<?php
/*
Template Name: Food Page
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
                <?= img_srcset('food/first-image', 'webp', false, "pc"); ?>
                <?= img_srcset('food/first-image-sp', 'webp', false, "sp"); ?>
            </figure>
        </section>

        <section class="pageintro" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <h3 class="title">お食事</h3>
                <p class="desc">様々な名産に溢れる高知。<br>季節に合わせ地元の旬の食材を<br class="sp">専属シェフが厳選し、<br>高知を感じていただける<br class="sp">コース料理に仕立てております。<br>ゆったりとした時間の中で<br class="sp">自然の恵みを感じると共に、<br class="sp">日々の喧騒を忘れ、<br>食事と大切な人との会話を楽しめる<br class="sp">空間をご提供します。</p>
            </div>
        </section>

        <section class="food-list">
            <div class="container">
                <div class="content-in">
                    <ul class="pickup-block-list">
                        <li>
                            <div id="food1" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('food/food1-1', 'webp', false, "target1"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target1">
                                        <?= img_srcset('food/food1-1'); ?>
                                        <?= img_srcset('food/food1-2'); ?>
                                        <?= img_srcset('food/food1-3'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">ご夕食</h3>
                                    <p class="desc">高知ならではの季節に合わせた春夏秋冬ごとのコース料理をご提供します。<br>その季節にしか味わえない地元の食材活かしたコース料理をお楽しみください。<br><br>連泊いただけるお客様には季節ごとに2パターンのお食事をご用意しております。<br><br>ゆったりとした時間の中で自然の恵みを感じると共に、日々の喧騒を忘れ、食事と大切な人との会話を楽しめる空間をご提供します。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="food2" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('food/food2-1', 'webp', false, "target2"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target2">
                                        <?= img_srcset('food/food2-1'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">ご朝食</h3>
                                    <p class="desc">テルメの朝食は和朝食をご用意。<br>地元の食材にこだわったお食事となっています。<br><br>高知県三原村のお米にはじまり、高知卵の土佐ジロー、季節の魚のお造り、宗田鰹のお醤油などなど。<br>様々な高知の食材で朝食をご準備させていただきます。<br><br>連泊の方には高知の食材を使った洋朝食もご提供させていただきます。</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
		
	</main>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
