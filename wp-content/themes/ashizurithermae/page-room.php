<?php
/*
Template Name: Room Page
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
                <?= img_srcset('room/first-image', 'webp', false, "pc"); ?>
                <?= img_srcset('room/first-image-sp', 'webp', false, "sp"); ?>
            </figure>
        </section>

        <section class="pageintro" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <h3 class="title">客室一覧</h3>
                <p class="desc">洋室は、西側から東側まで、<br class="sp">段々と変化するインテリアになっており、<br>何度来ても毎回異なる<br class="sp">時の移ろいを感じ、<br class="sp">その時だけの特別な体験ができます。<br>絶景を楽しむためだけに<br class="sp">設計された和室では、<br class="sp">「床に寝転び、空を眺める」という、<br>当たり前のようで特別な体験を<br class="sp">していただけます。</p>
            </div>
        </section>

        <section class="room-list">
            <div class="container">
                <div class="content-in">
                    <ul class="pickup-block-list">
                        <li>
                            <div id="room1" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room1-1', 'webp', false, "target1"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target1">
                                        <?= img_srcset('room/room1-1'); ?>
                                        <?= img_srcset('room/room1-2'); ?>
                                        <?= img_srcset('room/room1-3'); ?>
                                        <?= img_srcset('room/room1-4'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">デラックスルーム貸切サウナ付き</h3>
                                    <p class="desc">シングルベッド2台とセミダブルベッド2台のお部屋をご用意しております。さらに特別なお部屋としてテラスにはサウナが完備されています。お部屋内には広々としたリビングスペースもあり、グループやご家族と一緒に快適なアウトドアとホテルの両方をお楽しみいただけます。この完全プライベートサウナは、思い出に残る滞在を演出します。<br><br>ミクロネシアチェアやゴリラックスのサウナグッズも完備しており、リラックスしながらお過ごしいただけます。さらに高知のアイスクリームを整いながらお召し上がりいただけます。夜にはライトアップがあるため夜間にもサウナをご利用いただけます。ぜひ快適なサウナ体験をお楽しみください。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/room/21963/stay" class="dark-btn" target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="room2" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room2-1', 'webp', false, "target2"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target2">
                                        <?= img_srcset('room/room2-1'); ?>
                                        <?= img_srcset('room/room2-2'); ?>
                                        <?= img_srcset('room/room2-3'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">ジャグジー付きオーシャンビュールーム</h3>
                                    <p class="desc">時の移ろいや目の前に広がる海と潮の香りを感じながらプライベートのジャグジーをお楽しみいただける唯一のお部屋。ゆっくりと流れる時間を感じながら、大切な方との特別なひとときを味わえます。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/room/21962/stay" class="dark-btn" target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="room3" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room3-1', 'webp', false, "target3"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target3">
                                        <?= img_srcset('room/room3-1'); ?>
                                        <?= img_srcset('room/room3-2'); ?>
                                        <?= img_srcset('room/room3-3'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">グランドプレミア<br>オーシャンビュールーム</h3>
                                    <p class="desc">スイートルームの中でも一番広く、快適にお過ごしいただけるお部屋です。広大な太平洋を望むことはもちろん、真っ赤に染まる夕日を、完全プライベートで眺めることができきる唯一の場所。空や海を楽しみながら、時の移ろいを感じる時間は、大切な方との特別な思い出になるでしょう。<br><br>※2名様用と３名様用のお部屋をご用意しております。画像は2名様用のお部屋になります。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/room/21966/stay" class="dark-btn" target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="room4" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room4-1', 'webp', false, "target4"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target4">
                                        <?= img_srcset('room/room4-1'); ?>
                                        <?= img_srcset('room/room4-2'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">プレミアオーシャンビュールーム</h3>
                                    <p class="desc">セミダブルベッドを2台ご用意したオーシャンビュースイートルーム。目の前に広がる真っ青な海と、真っ赤に染まる夕空を眺めながら、ゆっくりと時の流れを感じることができるでしょう。岬に見える波しぶきから雄大な自然を肌で感じる、そんな特別な体験をお部屋の中で味わえます。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/room/21965/stay" class="dark-btn" target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="room5" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room5-1', 'webp', false, "target5"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target5">
                                        <?= img_srcset('room/room5-1'); ?>
                                        <?= img_srcset('room/room5-2'); ?>
                                        <?= img_srcset('room/room5-3'); ?>
                                        <?= img_srcset('room/room5-4'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">プレミアルーム</h3>
                                    <p class="desc">ベッドに寝転がれば目の前には空だけが広がり、テラスに出れば潮の香りと海の音を感じます。夕暮れ空も朝焼け空も、プライベート空間で味わえる特別な時間。五感をフルに使い、足摺岬の雄大な自然をお楽しみください。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/room/21964/stay" class="dark-btn" target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="room6" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room6-1', 'webp', false, "target6"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target6">
                                        <?= img_srcset('room/room6-1'); ?>
                                        <?= img_srcset('room/room6-2'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">オーシャンビュールーム</h3>
                                    <p class="desc">白に包まれたお部屋は、無駄のないシンプルな空間だからこそ味わえる洗練された時間が流れます。テラスには青い空や星空を眺めることのできるデッキチェアをご用意しております。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan/room/21961/stay" class="dark-btn" target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="room7" class="pickup-block-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="photos">
                                    <div class="pickup">
                                        <?= img_srcset('room/room7-1', 'webp', false, "target7"); ?>
                                    </div>
                                    <div class="thumbs picker" data-target="target7">
                                        <?= img_srcset('room/room7-1'); ?>
                                        <?= img_srcset('room/room7-2'); ?>
                                        <?= img_srcset('room/room7-3'); ?>
                                        <?= img_srcset('room/room7-4'); ?>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <h3 class="title">ドームテント</h3>
                                    <p class="desc">アシズリテルメの中でも一番の絶景ポイントに位置するグランピング。<br>全室から広大な太平洋と緑豊かな山々を望むことができます。足摺の豊かな自然のもとで、たまには時の流れ・空の変化を感じてみるのはいかがでしょうか。<br>4つのどのテントからでもオーシャンビューを楽しんで頂けます。</p>
                                    <a href="https://reserve.489ban.net/client/ashizurithermae-g/0/plan/availability/room/#content" class="dark-btn"  target="_blank">
                                        <span>空室検索</span>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_86_771)">
                                                <path d="M14.9997 4.6665H4.99967C4.0792 4.6665 3.33301 5.4127 3.33301 6.33317V16.3332C3.33301 17.2536 4.0792 17.9998 4.99967 17.9998H14.9997C15.9202 17.9998 16.6663 17.2536 16.6663 16.3332V6.33317C16.6663 5.4127 15.9202 4.6665 14.9997 4.6665Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.333 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66699 3V6.33333" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.33301 9.6665H16.6663" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.33366 13H6.66699V14.6667H8.33366V13Z" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_86_771">
                                                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </section>

        <section class="room-gallery">
            <div class="container">
                <div class="content-in">
                    <article class="gallery">
                        <?= img_srcset('room/gallery1', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery2', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery3', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery4', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '100', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery5', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery6', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery7', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
                        <?= img_srcset('room/gallery8', 'webp', false, "lightbox", true, ['data-aos' => 'fade-in', 'data-aos-delay' => '200', 'data-aos-duration' => '1500']); ?>
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
