<?php
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
                <?php the_post_thumbnail("full"); ?>
            </figure>
        </section>

        <section class="page-news" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <div class="content-in">
                    <h3 class="news-label">お知らせ</h3>
                    <div class="news-wrap">
                        <h4 class="title"><?php the_title(); ?></h4>
                        <div class="content">
							<?php the_content(); ?>
                        </div>
                    </div>
                    <ul class="news-actions">
                        <li>
                            <a href="<?= HOME . 'room/'; ?>" class="btn bg-gray">
                                <span>客室ページを見る</span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_614_843)">
                                        <path d="M5 12.5H19" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 18.5L19 12.5" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 6.5L19 12.5" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_614_843">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>                                                      
                            </a>
                        </li>
                        <li>
                            <a href="<?= HOME; ?>" class="btn bg-gray">
                                <span>トップに戻る</span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_614_843)">
                                        <path d="M5 12.5H19" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 18.5L19 12.5" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 6.5L19 12.5" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_614_843">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>                                                      
                            </a>
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
