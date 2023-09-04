<?php
/*
Template Name: Faq Page
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
                <?= img_srcset('faq/first-image', 'webp', false, "pc"); ?>
                <?= img_srcset('faq/first-image-sp', 'webp', false, "sp"); ?>
            </figure>
        </section>

        <section class="page-faq">
            <div class="container">
                <div class="content-in">
                    <h3 class="faq-title" data-aos="fade-up" data-aos-delay="150">よくある質問</h3>
                    <ul class="faq-block-list">
                        <li class="faq-block" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="block-title">ご予約に関するご質問</h4>
                            <ul class="faq-list">
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.お部屋は全室オーシャンビューですか？</h5>
                                        <p class="answer">A.一部パーシャルオーシャンビューです（オーシャンビュールーム、グランドプレミアオーシャンビュールーム、プレミアオーシャンビュールーム）。プレミアルームからは海はご覧いただけません。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.バスで行く予定ですが、足摺岬までの送迎はお願いできますか？</h5>
                                        <p class="answer">A.足摺岬周辺（足摺岬バスセンター～足摺岬まで）でしたら可能でございます。お時間により対応できない場合もございますので、詳しくはお問合せください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.喫煙ルームはありますか？　館内で煙草が吸える場所はありますか？</h5>
                                        <p class="answer">A.ホテル館内に喫煙ルームは設けてなく、全館禁煙です。<br>屋外に喫煙場所を設置しておりますので、場所はフロントへお尋ねください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.自転車をお部屋に持ち込む事はできますか？</h5>
                                        <p class="answer">A. お断りしております。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.チェックインが遅くなっても大丈夫ですか？</h5>
                                        <p class="answer">A.18時を超える場合は事前に必ずご連絡ください。<br>チェックイン時間を過ぎてもご連絡がない場合は無断キャンセルとみなします。ご夕食を予約していた場合、お客様の都合により遅くご到着される場合はご夕食代のキャンセル料を頂戴しております。<br>またご到着時間によっては大浴場等使えなくなりますのでご了承下さい。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.バイク置き場はありますか？</h5>
                                        <p class="answer">A.お車と同じ駐車場になります。屋根のついた駐車場はございません。</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="faq-block" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="block-title">滞在に関するご質問</h4>
                            <ul class="faq-list">
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.チェックイン時間/チェックアウト時間は何時ですか？</h5>
                                        <p class="answer">A.チェックイン時間：15〜18時<br>チェックアウト時間：〜10時</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.お部屋はバリアフリーになっていますか？</h5>
                                        <p class="answer">A.なっておりません。洋室はエレベーター、グランドプレミアオーシャンビュールームは階段のご利用なしで行くことができます。<br>しかしお部屋の入り口、ユニットバス、お手洗いには等段差がございますので、あらかじめご了承ください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.大浴場は男湯女湯と場所が入れ変わりますか？</h5>
                                        <p class="answer">A.入れ替わりません。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.カラオケができる場所はありますか？</h5>
                                        <p class="answer">A.ございません</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.館内は館内着、スリッパ履きで大丈夫ですか？</h5>
                                        <p class="answer">A.かまいません。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.お部屋に加湿器はありますか？</h5>
                                        <p class="answer">A.ございます。数に限りがございますので、お問合せください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.館内に製氷機はありますか？</h5>
                                        <p class="answer">A.製氷機はございませんが、フロントにお申し出いただければ無料でお持ちいたします。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.星空を見るポイントはどこがお勧めですか？</h5>
                                        <p class="answer">A.屋上に上がっていただきますと、まわりが暗いので星空が見やすくなっております。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.近くにコンビニはありますか？</h5>
                                        <p class="answer">A.お車で約20分ほど離れた場所にございます。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.お部屋のお風呂も温泉ですか？</h5>
                                        <p class="answer">A.お部屋は温泉ではございません。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.売店等で買った物や、荷物を送る事はできますか？</h5>
                                        <p class="answer">A.宅急便にてお送りする事が可能です。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.土佐清水の人気のあるお土産は何ですか？</h5>
                                        <p class="answer">A.宗田節を使った商品が人気です。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.建物は建って何年になりますか？</h5>
                                        <p class="answer">A.平成10年の6月にオープンしておりますので、23年になります。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.チェックアウトを過ぎた場合はどうなりますか？</h5>
                                        <p class="answer">A.10時を過ぎた場合は15分ごとにレイトチェックアウト代を徴収いたします。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.ペットは一緒に泊まれますか？</h5>
                                        <p class="answer">A.大変申し訳ございません。現在はペットとのご宿泊は受け付けておりません。</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="faq-block" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="block-title">食事に関するご質問</h4>
                            <ul class="faq-list">
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.サプライズにてバースデイケーキを食後にレストランにて出してもらえる事は可能ですか？</h5>
                                        <p class="answer">A.レストランでケーキはお出しできかねますが、お部屋へお持ちすることは可能です。詳細はお問合せくださいませ。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.友人は宿泊はしないのですが、食事のみ追加で頼み一緒に食事する事は可能ですか？</h5>
                                        <p class="answer">A.レストランのお席の状況によりますが、お受けしておりますのでお問い合わせください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.釣って来た魚を調理して出してもらえますか？</h5>
                                        <p class="answer">A.お持ち込みの食材の調理については、衛生管理上お断りさせていただいております。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.夕食時に買ってきたお酒をレストランに持ち込む事は可能ですか？</h5>
                                        <p class="answer">A.可能ですが、持ち込み料が発生いたします。詳しくはお問合せください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.予約なしでも当日食事を取る事は可能ですか？</h5>
                                        <p class="answer">A. 当日の食材の用意によりますので、お問い合わせください。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.アレルギー対応のお食事を用意してもらえますか？</h5>
                                        <p class="answer">A.アレルギーに関しましては7大アレルゲン（乳製品、卵、小麦、そば、エビ、カニ、落花生）のみ対応させていただきます。なお代替メニューのご提供はメイン料理に限らせていただき、嗜好につきましては対応いたしかねますので、予めご了承ください。また、重篤なアレルギーの場合は対応しかねる場合もございます。お問い合わせください。</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="faq-block" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="block-title">アクセスに関するご質問</h4>
                            <ul class="faq-list">
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.土佐清水から足摺岬へ行く道が３本ありますが、どの道がお勧めですか？</h5>
                                        <p class="answer">A.中ノ浜、松尾方面を通って来る道が早いですし、道も綺麗ですのでお勧めとなっております。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.道後へ行くのですが、宿毛までは海岸沿いか四万十市を通る道が良いか、お勧めは？</h5>
                                        <p class="answer">A.時間的に変わりませんので、お越しの際四万十市を通って来たのであれば、竜串・大月町を通る道ですと、海岸沿いを走る道で走りやすくお勧めです。</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="faq-block" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="block-title">観光に関するご質問</h4>
                            <ul class="faq-list">
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.近くに海水浴場はありますか？</h5>
                                        <p class="answer">A.ここから一番近い海水浴場は竜串にございます、桜浜でございます。お車で40分ほどかかります。</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="faq-item">
                                        <h5 class="question">Q.竜串までは車で何分位かかりますか？</h5>
                                        <p class="answer">A.約40分です。</p>
                                    </div>
                                </li>
                            </ul>
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
