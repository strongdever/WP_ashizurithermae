<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

<main id="main">

    <section class="mainvisual" id="mainvisual">
        <div class="back-slider"></div>
        <div class="cover-title" id="cover-title">
            <h2 data-aos="fade-up" data-aos-delay="300" data-aos-anchor="#mainvisual">暮れて明ける</h2>
            <p data-aos="fade-up" data-aos-delay="300" data-aos-anchor="#mainvisual">アシズリテルメは高知県足摺岬に位置する<br>四国へ旅する人々のためのリトリートホテルです。<br><br>さまざまな旅の合間にゆっくりと<br>人生を見つめなおし再出発をする場所。<br><br>暮れに荷を下ろし、薄明を見てまた、岬を出発する。</p>
        </div>
        <ul class="cover-action" data-aos="fade-left" data-aos-delay="750" data-aos-anchor="#mainvisual">
            <li>
                <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/availability/daily?#content" class="btn" target="_blank">
                    <span>ホテルの空室検索</span>
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
                <a href="https://reserve.489ban.net/client/ashizurithermae-g/0/plan/availability/daily?#content" class="btn" target="_blank">
                    <span>グランピングの空室検索</span>
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
    </section>

    <section class="top-concept" data-aos="fade-up" data-aos-delay="150">
        <figure class="concept-photo1">
            <?= img_srcset('concept1'); ?>
        </figure>
        <figure class="concept-photo2">
            <?= img_srcset('concept2'); ?>
        </figure>
        <figure class="concept-photo3">
            <?= img_srcset('concept3'); ?>
        </figure>
        <figure class="concept-photo4">
            <?= img_srcset('concept4'); ?>
        </figure>
        <figure class="concept-photo5">
            <?= img_srcset('concept5'); ?>
        </figure>
        <div class="container">
            <div class="content-in">
                <div class="concept-panel">
                    <h3 class="title">黒潮が育んだ<small>、</small><br>自然の恵み<small>。</small></h3>
                    <p class="desc">アシズリテルメがその身を置く<br>高知県足摺岬は高さ80mの崖上に位置する<br>四国有数の観光地です<small>。</small><br><br>270度以上の大パノラマで太平洋に<small>、</small><br>沈み昇る太陽を一望できる立地<small>、</small><br><br>黒潮が生んだ造形美を堪能していただけるよう<small>、</small><br>一同心を込めたおもてなしを提供いたします<small>。</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="top-plan">
        <h3 class="plan-title">期間限定のプラン</h3>
        <div class="plan-content">
            <ul class="plan-item-list spslider">
                <li class="plan-item">
                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/detail/765227" target="_blank">
                        <figure class="thumb">
                            <?= img_srcset('plan1'); ?>
                        </figure>
                    </a>
                </li>
                <li class="plan-item">
                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/detail/634616" target="_blank">
                        <figure class="thumb">
                        <?= img_srcset('plan2'); ?>
                        </figure>
                    </a>
                </li>
                <li class="plan-item">
                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/detail/703357" target="_blank">
                        <figure class="thumb">
                        <?= img_srcset('plan3'); ?>
                        </figure>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="top-property">
        <div class="property-main">
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1500">
                <?= img_srcset('property1-1'); ?>
            </figure>
        </div>
        <div class="property-photos">
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="200" data-aos-duration="1500">
                <?= img_srcset('property1-2'); ?>
            </figure>
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                <?= img_srcset('property1-3'); ?>
            </figure>
        </div>
        <div class="property-panel" data-aos="fade-up" data-aos-delay="600">
            <h3 class="title">夕陽・星空</h3>
            <p class="desc">四国最南端に位置するアシズリテルメでは、270度以上の大パノラマで夕日と星空による時の移ろいをご堪能いただけます。ビルや街明かりなどが一切ない天然の自然環境のため空気が澄んでおり、水平線に沈む夕陽や数え切れないほどの星たちを肉眼で見ることができます。</p>
            <a href="<?= HOME . 'facility#facility5'; ?>" class="btn">
                <span>夕陽・星空を体感する</span>
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
        </div>
    </section>

    <section class="top-property type2">
        <div class="property-main">
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1500">
                <?= img_srcset('property2-1'); ?>
            </figure>
        </div>
        <div class="property-photos">
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                <?= img_srcset('property2-2'); ?>
            </figure>
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="200"data-aos-duration="1500">
                <?= img_srcset('property2-3'); ?>
            </figure>
        </div>
        <div class="property-panel" data-aos="fade-up" data-aos-delay="600">
            <h3 class="title">天然温泉・サウナ</h3>
            <p class="desc">1200年前に弘法大師が疲れを癒していたという言い伝えがある、あしずり温泉郷。豊かな大地より湧き出した天然のラドン温泉でゆっくりと旅の疲れを癒してください。</p>
            <a href="<?= HOME . 'facility#facility1'; ?>" class="btn">
                <span>温泉・サウナについて</span>
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
        </div>
    </section>

    <section class="top-property">
        <div class="property-main">
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1500">
                <?= img_srcset('property3-1'); ?>
            </figure>
        </div>
        <div class="property-photos">
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="200" data-aos-duration="1500">
                <?= img_srcset('property3-2'); ?>
            </figure>
            <figure class="property-photo" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                <?= img_srcset('property3-3'); ?>
            </figure>
        </div>
        <div class="property-panel" data-aos="fade-up" data-aos-delay="600">
            <h3 class="title">お部屋</h3>
            <p class="desc">洋室は、西側から東側まで、段々と変化するインテリアになっており、何度来ても毎回異なる時の移ろいを感じ、その時だけの特別な体験ができます。絶景を楽しむためだけに設計された和室では、「床に寝転び、空を眺める」という、当たり前のようで特別な体験をしていただけます。</p>
            <a href="<?= HOME . 'room/'; ?>" class="btn">
                <span>各お部屋の紹介</span>
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
        </div>
    </section>

    <section class="top-foods">
        <div class="container">
            <ul class="food-card-list">
                <li>
                    <div class="food-card-item" data-aos="fade-up" data-aos-delay="150">
                        <figure class="thumb">
                            <?= img_srcset('food1'); ?>
                        </figure>
                        <div class="wrap">
                            <h4 class="title">お食事</h4>
                            <p class="desc">カツオ、金目鯛、川エビ、オクラなどなど様々な名産に溢れる高知。季節に合わせ地元の旬の食材を専属シェフが厳選し、高知を感じていただけるコース料理に仕立てております。ゆったりとした時間の中で自然の恵みを感じると共に、日々の喧騒を忘れ、食事と大切な人との会話を楽しめる空間をご提供します。</p>
                            <a href="<?= HOME . 'food/'; ?>" class="btn">
                                <span>コースメニューを見る</span>
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
                        </div>
                    </div>
                </li>
                <li>
                    <div class="food-card-item" data-aos="fade-up" data-aos-delay="150">
                        <figure class="thumb">
                            <?= img_srcset('food2'); ?>
                        </figure>
                        <div class="wrap">
                            <h4 class="title">日本酒バー</h4>
                            <p class="desc">日本酒の名産地として名高い土佐の酒をお楽しみいただくため、様々な地酒をご用意しております。<br>高知の日本酒は、研究を重ねられた酒米・酵母に加え、一級河川である四万十川、仁淀川の清流を仕込み水として使われていることが多く国内でも高い評価を得ています。あの坂本龍馬も愛した土佐の酒をお楽しみください。</p>
                            <a href="<?= HOME . 'facility#facility4'; ?>" class="btn">
                                <span>日本酒バーについて</span>
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
                        </div>
                    </div>
                </li>
                <li>
                    <div class="food-card-item" data-aos="fade-up" data-aos-delay="150">
                        <figure class="thumb">
                            <?= img_srcset('food3'); ?>
                        </figure>
                        <div class="wrap">
                            <h4 class="title">施設</h4>
                            <p class="desc">建築家 團紀彦が手がけた20年以上の歴史を持つ宿泊施設を全面リニューアルし、体験価値をあげて生まれ変わったアシズリテルメ。施設内では「自然の肌触り」を感じられるオブジェや植栽、施設内から絶景を一望できる設計によりリトリート（Retreat）をあらゆる面で体現します。</p>
                            <a href="<?= HOME . 'facility/'; ?>" class="btn">
                                <span>施設でできること</span>
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
                        </div>
                    </div>
                </li>
                <li>
                    <div class="food-card-item" data-aos="fade-up" data-aos-delay="150">
                        <figure class="thumb">
                            <?= img_srcset('food4'); ?>
                        </figure>
                        <div class="wrap">
                            <h4 class="title">Dot Glamping アシズリテルメ</h4>
                            <p class="desc">絶景ポイントに特設のウッドデッキをしつらえグランピングタイプのお部屋もご用意。全室内から雄大に広がる太平洋と緑豊かな山々を望むことができます。足摺の豊かな自然をもっとも快適かつ自然な形でお楽しみいただけます。時の流れや空の変化をよりダイレクトにご体感いただけます。</p>
                            <a href="https://dotglamping-ashizurimisaki.com/" class="btn out-link" target="_blank">
                                <span>グランピング特設サイト</span>
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
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <?php
    $news_args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        'orderby' => 'post_date',
        'order' => "DESC",
    ];
    $news_query = new WP_Query( $news_args );
    ?>
    <?php if( $news_query->have_posts() ) : ?>  
    <section class="top-news">
        <div class="container" data-aos="fade-up" data-aos-delay="150">
            <div id="news" class="content-in clearfix">
                <h3 class="news-title">お知らせ</h3>
                <div class="news-list-wrap">
                    <ul class="news-item-list">
                        <?php while( $news_query->have_posts() ) : $news_query->the_post(); ?>
                        <li>
                            <div class="news-item">
                                <time class="date"><?php the_time("Y年m月d日"); ?></time>
                                <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="top-message" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <div class="content-in">
                <div class="message-box">
                    <p class="text">四国を旅する人々へ”リトリート”と”エモい”<br class="sp">体験を創り出すホテルを目指して。<br><br>その想いからスタートしたアシズリテルメは<br class="sp">産声から2年目の今、<br class="sp">新たなステージへ皆様を誘います。<br><br>旅路に立ち止まり、静寂と大自然に<br class="sp">囲まれながらゆっくりとした時間を過ごす。<br class="sp">太平洋の水平線に沈む夕日と満天の星空に<br class="sp">包まれて眠り、丸みを帯びた水平線から<br class="sp">現れる朝陽で目覚める。<br><br>素敵なご滞在と体験を皆様に「お約束する」<br class="sp">ことを最大の使命と捉えるアシズリテルメは、<br>様々なコンテンツと<br class="sp">最高のパーソナルサービスをご用意して<br class="sp">皆様のお越しをお待ちしております。</p>
                    <div class="sign">
                        <p>アシズリテルメ総支配人</p>
                        <?= img_srcset('message-sign'); ?>
                    </div>
                    <figure class="logo">
                        <?= img_srcset('message-logo'); ?>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section class="top-traffic" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <h3 class="traffic-title">交通案内</h3>
            <div class="tranffic-content clearfix">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13425.810649755236!2d133.006915!3d32.727169!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354f3291b6d94cd7%3A0x8b19d396e942056e!2z44Ki44K344K644Oq44OG44Or44Oh!5e0!3m2!1sja!2sjp!4v1685063061538!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="wrap">
                    <ul class="texts">
                        <li>
                            <h5>住所</h5>
                            <p>〒787-0315<br>高知県土佐清水市足摺岬字東畑1433-3<br>※ホテル・グランピング共に同じ住所となっております</p>
                        </li>
                        <li>
                            <h5>交通アクセス</h5>
                            <p>中村駅から車で1時間</p>
                        </li>
                        <li>
                            <h5>駐車場</h5>
                            <p>ご予約なしでご利用いただけます</p>
                        </li>
                    </ul>
                    <a href="https://goo.gl/maps/QPEtpuhp1kUQDAuC9" class="btn gray-btn out-link" target="_blank">
                        <span>Google Map</span>
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
                </div>
            </div>
        </div>
    </section>

    <section class="top-tourist" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <h3 class="tourist-title">周辺観光情報</h3>
            <div class="tourist-content">
                <ul class="tourist-block-list spslider">
                    <li class="spslide-item">
                        <div class="tourist-block-item">
                            <figure class="thumb">
                                <?= img_srcset('tourist1'); ?>
                            </figure>
                            <div class="wrap">
                                <h4 class="title">足摺岬</h4>
                                <p class="desc">四国最南端の地として知られる足摺岬。黒潮が生んだ断崖は80mもの高さを誇ります。<br>足摺半島南東端に位置し周囲はウバメガシ・ツバキ・ビロウ等の亜熱帯植物が密生。沖合いはカツオの好漁場となっています。</p>
                            </div>
                        </div>
                    </li>
                    <li class="spslide-item">
                        <div class="tourist-block-item">
                            <figure class="thumb">
                                <?= img_srcset('tourist2'); ?>
                            </figure>
                            <div class="wrap">
                                <h4 class="title">白山洞門</h4>
                                <p class="desc">足摺岬は力強い海蝕によってたくさんの洞窟、洞門が存在しますが、白山洞門はその中でも最大です。<br>高さ16m、幅17mの大きさがあり、花崗岩洞門では日本一の規模と言われています。<br>海岸までは遊歩道を使って降りることができ、高知県の天然記念物に指定されています。</p>
                            </div>
                        </div>
                    </li>
                    <li class="spslide-item">
                        <div class="tourist-block-item">
                            <figure class="thumb">
                                <?= img_srcset('tourist3'); ?>
                            </figure>
                            <div class         <h4 class="title">青の洞窟:海老洞</h4>
                                <p class="desc">SNSなどで度々話題をうむ神秘のスポット。海水と真水が混じり合った透き通った青い海底を望むことができ、ガイドブックにも載っていない穴場スポットとなっています。季節にもよりますが午前8-10時に洞窟内に陽が差し込むので、映える写真を撮りたい方はお早めに。</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>