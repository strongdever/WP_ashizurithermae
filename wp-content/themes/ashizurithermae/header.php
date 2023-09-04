<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" style="margin-top: 0 !important;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="" />
    <meta name="description" content="アシズリテルメは高知県足摺岬に四国へ旅する人々のためのリトリートホテルです。アシズリテルメでは、プライベートサウナや天然温泉、シェフ厳選の高知の魅力的な素材を詰め込んだお食事をお楽しみ頂けます。ホテル敷地内にはグランピングも併設しています。また、ご予約は当サイトが最もお得です。" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="施設 - ASHIZURI THERMAE | アシズリテルメ【公式】" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo HOME; ?>" />
    <meta property="og:image" content="<?php echo T_DIRE_URI; ?>/assets/img/OGP.png" />
    <meta property="og:site_name" content="ASHIZURI THERMAE | アシズリテルメ【公式】" />
    <meta property="og:description" content="アシズリテルメは高知県足摺岬に四国へ旅する人々のためのリトリートホテルです。アシズリテルメではプライベートサウナや天然温泉、シェフ厳選の高知の魅力的な素材を詰め込んだお食事をお楽しみ頂けます。ホテル敷地内にはグランピングも併設しています。四国足摺岬にお越しの際はぜひお立ち寄りください。" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="施設 - ASHIZURI THERMAE | アシズリテルメ【公式】" />
    <meta name="twitter:description" content="アシズリテルメは高知県足摺岬に四国へ旅する人々のためのリトリートホテルです。アシズリテルメではプライベートサウナや天然温泉、シェフ厳選の高知の魅力的な素材を詰め込んだお食事をお楽しみ頂けます。ホテル敷地内にはグランピングも併設しています。四国足摺岬にお越しの際はぜひお立ち寄りください。" />
	<meta name="twitter:image" content="<?php echo T_DIRE_URI; ?>/assets/img/OGP.png" />

    <!-- Webpage Title -->
    <title>
    <?php 
        if(is_front_page() || is_home()){
            echo get_bloginfo('name');
        } else{
            wp_title('|',true,'right'); echo bloginfo('name'); 
        }
    ?>
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-566HQZS');</script>
<!-- End Google Tag Manager -->
</head>

<?php 
  global $post;
  
    if( $post->post_type != "page" ) {
        $post_slug = $post->post_type;
    } else {
        $post_slug = $post->post_name;
    }

    if( is_category() ) {
        $nav_last_category = get_queried_object();
        $post_slug = $nav_last_category->slug;
    }
    if( is_single() ) {
        $nav_last_category = [];
        $nav_query_categories = get_the_category();
        if(!empty($nav_query_categories)) {
            $nav_last_category = $nav_query_categories[0];
        }
        if (!empty($nav_last_category)) {
            $post_slug = $nav_last_category->slug;
        }
    }
?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-566HQZS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header-wrapper">
            <h1 class="header-logo">
                <a href="<?php echo HOME; ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.svg" alt="<?php echo bloginfo('name'); ?>">
                </a>
            </h1>
            <nav class="header-nav">
                <ul class="nav-menu">
                    <li>
                        <a href="<?php echo HOME; ?>" class="menu-link<?php echo (is_front_page()) ? ' active' : ''; ?>">
                            <span>TOP</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'facility/'; ?>" class="menu-link<?php echo ($post_slug == 'facility') ? ' active' : ''; ?>">
                            <span>施設</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'room/'; ?>" class="menu-link<?php echo ($post_slug == 'room') ? ' active' : ''; ?>">
                            <span>客室</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'food/'; ?>" class="menu-link<?php echo ($post_slug == 'food') ? ' active' : ''; ?>">
                            <span>お食事</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'faq/'; ?>" class="menu-link<?php echo ($post_slug == 'faq') ? ' active' : ''; ?>">
                            <span>よくある質問</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . '#news'; ?>" class="news-link menu-link">
                            <span>お知らせ</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan" class="menu-link" target="_blank">
                            <span>プラン一覧</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.914" height="10.914" viewBox="0 0 10.914 10.914">
                                <path id="Path_1" data-name="Path 1" d="M12.139,21.536l9.5-9.5" transform="translate(-11.431 -11.328)" fill="none" stroke="#fbfbfb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_2" data-name="Path 2" d="M22.038,20.121V12.036" transform="translate(-11.831 -11.328)" fill="none" stroke="#fbfbfb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_3" data-name="Path 3" d="M13.553,12.036h8.086" transform="translate(-11.431 -11.328)" fill="none" stroke="#fbfbfb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://dotglamping-ashizurimisaki.com/" class="menu-link" target="_blank">
                            <span>グランピング</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.914" height="10.914" viewBox="0 0 10.914 10.914">
                                <path id="Path_1" data-name="Path 1" d="M12.139,21.536l9.5-9.5" transform="translate(-11.431 -11.328)" fill="none" stroke="#fbfbfb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_2" data-name="Path 2" d="M22.038,20.121V12.036" transform="translate(-11.831 -11.328)" fill="none" stroke="#fbfbfb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_3" data-name="Path 3" d="M13.553,12.036h8.086" transform="translate(-11.431 -11.328)" fill="none" stroke="#fbfbfb" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ashizuri.thermae/" class="instgram-link" target="_blank">
                            <i class="fa-brands fa-instagram fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <header class="header-fixed">
        <div class="header-wrapper">
            <h2 class="header-logo">
                <a href="<?php echo HOME; ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/fixed-logo.svg" alt="<?php echo bloginfo('name'); ?>">
                </a>
            </h2>
            <nav class="header-nav">
                <ul class="nav-menu">
                <li>
                        <a href="<?php echo HOME; ?>" class="menu-link<?php echo (is_front_page()) ? ' active' : ''; ?>">
                            <span>TOP</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'facility/'; ?>" class="menu-link<?php echo ($post_slug == 'facility') ? ' active' : ''; ?>">
                            <span>施設</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'room/'; ?>" class="menu-link<?php echo ($post_slug == 'room') ? ' active' : ''; ?>">
                            <span>客室</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'food/'; ?>" class="menu-link<?php echo ($post_slug == 'food') ? ' active' : ''; ?>">
                            <span>お食事</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'faq/'; ?>" class="menu-link<?php echo ($post_slug == 'faq') ? ' active' : ''; ?>">
                            <span>よくある質問</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . '#news'; ?>" class="news-link menu-link">
                            <span>お知らせ</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan" class="menu-link" target="_blank">
                            <span>プラン一覧</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.914" height="10.914" viewBox="0 0 10.914 10.914">
                                <path id="Path_1" data-name="Path 1" d="M12.139,21.536l9.5-9.5" transform="translate(-11.431 -11.328)" fill="none" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_2" data-name="Path 2" d="M22.038,20.121V12.036" transform="translate(-11.831 -11.328)" fill="none" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_3" data-name="Path 3" d="M13.553,12.036h8.086" transform="translate(-11.431 -11.328)" fill="none" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://dotglamping-ashizurimisaki.com/" class="menu-link" target="_blank">
                            <span>グランピング</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.914" height="10.914" viewBox="0 0 10.914 10.914">
                                <path id="Path_1" data-name="Path 1" d="M12.139,21.536l9.5-9.5" transform="translate(-11.431 -11.328)" fill="none" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_2" data-name="Path 2" d="M22.038,20.121V12.036" transform="translate(-11.831 -11.328)" fill="none" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                <path id="Path_3" data-name="Path 3" d="M13.553,12.036h8.086" transform="translate(-11.431 -11.328)" fill="none" stroke="#3E3A39" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ashizuri.thermae/" class="instgram-link" target="_blank">
                            <i class="fa-brands fa-instagram fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <div id="mobile-nav">
        <button class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="<?php echo HOME; ?>" class="menu-link">
                        <span>TOP</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'facility/'; ?>" class="menu-link">
                        <span>施設</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'room/'; ?>" class="menu-link">
                        <span>客室</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'food/'; ?>" class="menu-link">
                        <span>お食事</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'faq/'; ?>" class="menu-link">
                        <span>よくある質問</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . '#news'; ?>" class="menu-link">
                        <span>お知らせ</span>
                    </a>
                </li>
                <li>
                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan" class="menu-link" target="_blank">
                        <span>プラン一覧</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.914" height="10.914" viewBox="0 0 10.914 10.914">
                            <path id="Path_1" data-name="Path 1" d="M12.139,21.536l9.5-9.5" transform="translate(-11.431 -11.328)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_2" data-name="Path 2" d="M22.038,20.121V12.036" transform="translate(-11.831 -11.328)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_3" data-name="Path 3" d="M13.553,12.036h8.086" transform="translate(-11.431 -11.328)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://dotglamping-ashizurimisaki.com/" class="menu-link" target="_blank">
                        <span>グランピング</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.914" height="10.914" viewBox="0 0 10.914 10.914">
                            <path id="Path_1" data-name="Path 1" d="M12.139,21.536l9.5-9.5" transform="translate(-11.431 -11.328)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_2" data-name="Path 2" d="M22.038,20.121V12.036" transform="translate(-11.831 -11.328)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_3" data-name="Path 3" d="M13.553,12.036h8.086" transform="translate(-11.431 -11.328)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <ul class="search-action">
                <li>
                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan" class="btn" target="_blank">
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
                    <a href="https://reserve.489ban.net/client/ashizurithermae/0/plan" class="btn" target="_blank">
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
            <p class="mobile-info"><a href="tel:0880-88-0301"><i class="fa fa-phone fa-fw"></i>0880-88-0301</a><br><a href="mailto:booking@ashizurithermae.com"><i class="fa fa-envelope-o fa-fw"></i>booking@ashizurithermae.com</a><br><a target="_blank" rel="noopener" href="https://www.instagram.com/ashizuri.thermae/"><i class="fab fa-instagram fa-fw"></i>ashizuri.thermae</a><br><a href="https://goo.gl/maps/QPEtpuhp1kUQDAuC9" target="_blank"><i class="fa fa-location-dot fa-fw"></i>高知県土佐清水市足摺岬字東畑1433-3</a></p>
        </nav>
    </div>