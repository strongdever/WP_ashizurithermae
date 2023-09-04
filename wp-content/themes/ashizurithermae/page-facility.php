<?php
/*
Template Name: Facility Page
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
                <?= img_srcset('facility/first-image', 'webp', false, "pc"); ?>
                <?= img_srcset('facility/first-image-sp', 'webp', false, "sp"); ?>
            </figure>
        </section>

        <section class="pageintro" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <h3 class="title">施設紹介</h3>
                <p class="desc">建築家 團紀彦が手がけた<br class="sp">20年以上の歴史<br class="sp">を持つ宿泊施設を全面リニューアルし、<br>体験価値をあげて生まれ変わった<br class="sp">アシズリテルメ。<br>施設内では「自然の肌触り」を<br class="sp">感じられるオブジェや植栽、<br class="sp">施設内から太平洋の絶景を<br class="sp">一望できる設計により<br>リトリート（Retreat）を<br class="sp">あらゆる面で体現します。</p>
            </div>
        </section>

        <section class="facility-banner">
            <div class="container">
                <div class="content-in">
                    <ul class="banner-list" data-aos="fade-up" data-aos-delay="450">
                        <li>
                            <a href="#facility1" class="banner scrollto">
                                <figure class="back">
                                    <?= img_srcset('facility/banner1'); ?>
                                </figure>
                                <div class="wrap">
                                    <h4 class="title">
                                        <span>天然温泉</span>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/arrow-down.png" alt="">
                                    </h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#facility2" class="banner scrollto">
                                <figure class="back">
                                    <?= img_srcset('facility/banner2'); ?>
                                </figure>
                                <div class="wrap">
                                    <h4 class="title">
                                        <span>サウナ</span>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/arrow-down.png" alt="">
                                    </h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#facility3" class="banner scrollto">
                                <figure class="back">
                                    <?= img_srcset('facility/banner3'); ?>
                                </figure>
                                <div class="wrap">
                                    <h4 class="title">
                                        <span>レストラン</span>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/arrow-down.png" alt="">
                                    </h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#facility4" class="banner scrollto">
                                <figure class="back">
                                    <?= img_srcset('facility/banner4'); ?>
                                </figure>
                                <div class="wrap">
                                    <h4 class="title">
                                        <span>日本酒バー</span>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/arrow-down.png" alt="">
                                    </h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#facility5" class="banner scrollto">
                                <figure class="back">
                                    <?= img_srcset('facility/banner5'); ?>
                                </figure>
                                <div class="wrap">
                                    <h4 class="title">
                                        <span>夕日</span>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/arrow-down.png" alt="">
                                    </h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#facility6" class="banner scrollto">
                                <figure class="back">
                                    <?= img_srcset('facility/banner6'); ?>
                                </figure>
                                <div class="wrap">
                                    <h4 class="title">
                                        <span>星空</span>
                                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/arrow-down.png" alt="">
                                    </h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="facility-list">
            <div class="container">
                <div class="content-in">
                    <ul class="pickup-block-list">
                        <li>
                            <div id="facility1" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('facility/facility1-1', 'webp', false, "target1"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target1">
                                        <?= img_srcset('facility/facility1-1'); ?>
                                        <?= img_srcset('facility/facility1-2'); ?>
                                        <?= img_srcset('facility/facility1-3'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">天然温泉</h3>
                                    <p class="desc">1200年前に弘法大師が疲れを癒していたという言い伝えがある、あしずり温泉郷。豊かな大地より湧き出した天然のラドン温泉でゆっくりと旅の疲れを癒してください。<br><br>シャンプー、リンス、ボディーソープがございます。タオルなどのアメニティはお部屋よりお持ちください。<br>大浴場を出た後のリラクゼーションスペースにはアイスクリーム（無料）とマッサージチェア（有料）をご用意しております。<br><br>ご利用時間：15:00～24:00、翌6:00～9:00<br>泉質：単純弱放射能冷鉱泉</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="facility2" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('facility/facility2-1', 'webp', false, "target2"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target2">
                                        <?= img_srcset('facility/facility2-1'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">サウナ</h3>
                                    <p class="desc">満天の星空、絶景の太平洋の水平線、静寂に包まれた空間で「整う」を体験し、リトリート（Retreat）を満喫して頂けます。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="facility3" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('facility/facility3-1', 'webp', false, "target3"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target3">
                                        <?= img_srcset('facility/facility3-1'); ?>
                                        <?= img_srcset('facility/facility3-2'); ?>
                                        <?= img_srcset('facility/facility3-3'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">レストラン</h3>
                                    <p class="desc">仏手柑や柚子などに代表される柑橘をはじめ、様々な特産品に溢れる高知。季節に合わせ地元の旬の食材を専属シェフが厳選し、高知を感じていただけるコース料理に仕立てております。ゆったりとした時間の中で自然の恵みを感じると共に、日々の喧騒を忘れ、食事と大切な人との会話を楽しめる空間をご提供します。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="facility4" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('facility/facility4-1', 'webp', false, "target4"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target4">
                                        <?= img_srcset('facility/facility4-1'); ?>
                                        <?= img_srcset('facility/facility4-2'); ?>
                                        <?= img_srcset('facility/facility4-3'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">日本酒バー</h3>
                                    <p class="desc">当館の日本酒バーは、常時６０種類以上の日本酒をご用意。<br>高知県ならではお酒【宇宙深海酒】や【cel24シリーズ】もございます。<br><br>【宇宙深海酒】は大変珍しい日本酒で、ロケットに乗せ宇宙で培養させた酵母を、地球に持って帰ってきた後にさらに深海を旅させた酵母を宇宙深海酵母と呼びます。その宇宙深海酵母を高知の酒米『吟の夢』『風鳴子』で醸したお酒だけが【宇宙深海酒】を名乗れます。<br><br>【cel24シリーズ】も非常におすすめのお酒です。CEL24酵母とは高知県で開発された酵母の種類で、香り高い、口当たりが柔らかい、程よい酸味がありながら甘いという特徴があります。日本酒が苦手な方や白ワイン好きの方におすすめしたいお酒です。<br><br>もちろん県外物の日本酒も高知、四国では流通が殆どない銘柄も取りそろえているため、四国在住の方もお楽しみいただけるラインナップとなっております。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="facility5" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('facility/facility5-1', 'webp', false, "target5"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target5">
                                        <?= img_srcset('facility/facility5-1'); ?>
                                        <?= img_srcset('facility/facility5-2'); ?>
                                        <?= img_srcset('facility/facility5-3'); ?>
                                        <?= img_srcset('facility/facility5-4'); ?>
                                        <?= img_srcset('facility/facility5-5'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">夕陽</h3>
                                    <p class="desc">夕陽と共に太平洋と足摺半島の壮大な自然の景色を、展望台や和室の窓、広々とした洋室のテラスからご堪能いただけます。<br><br>穏やかな静寂に包まれながら、夕陽に輝く大自然の風景を眺める贅沢な時間と空間を、ぜひご体験ください。<br><br>さらに展望台に設置されているゼログラビティチェアは、別世界へと誘う特別な要素となっています。<br><br>四季折々に変化する太平洋と空の時間軸は、皆様の心に残る素敵な思い出となることを心から願っております。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="facility6" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('facility/facility6-1', 'webp', false, "target6"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target6">
                                        <?= img_srcset('facility/facility6-1'); ?>
                                        <?= img_srcset('facility/facility6-2'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">星空</h3>
                                    <p class="desc">当館は足摺半島の高台に位置しており、豊かな自然環境が息づく場所。<br>テラスから眺める高知足摺の星空は、まさに究極のスターゲイジング体験です。<br>高知足摺の星空は、日本トップクラスの星空指数。ぜひ一度ご覧いただきたい特別な絶景です。星々が無数に降り注ぐ様子はまさに圧巻でしょう。<br>展望台のゼログラビティチェアでは寝そべりながら満天の星空をゆったりと楽しむことができます。また毛布の貸し出しも行っておりますので、心地よい風に包まれながら星空をお楽しみいただけます。</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="facility-gallery">
            <div class="container">
                <div class="content-in">
                    <article class="gallery">
                        <?= img_srcset('facility/gallery1', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery2', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery3', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery4', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery5', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery6', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery7', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('facility/gallery8', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                    </article>
                </div>
            </div>
        </section>
		
	</main>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
