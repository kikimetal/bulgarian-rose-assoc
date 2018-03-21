<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(ACTIVITY_DINNER01); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>

            <section id="dinner01">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Dinner</p>
                        <h1><span class="inb">バラの騎士と</span><span class="inb">女神の晩餐会</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">
                    <p>2012年6月26日、ブルガリア大使館と「バラの騎士と女神の会」の後援のもと、ザ・キャピタルホテル東急にて、チャリティーパーティー「バラの騎士と女神の晩餐会」を開催し、約200名の方にご参加いただきました。
                    <span class="q">バラの騎士</span>の著名なシェフ達が一品ずつを受け持ったフルコース料理は、シェフ共作のスペシャルオードブルから始まりました。華やかなバラの香りに包まれた会場で、カリスマシェフ達がそれぞれに趣向を凝らした斬新なバラの料理を、ゲストの皆様にお楽しみただきました。
                    饗宴の最後にはチャリティーオークションを開催し、シェフ達7名の直筆サイン入りリチャード・ジノリのプレートが登場すると、会場は大いに盛り上がりを見せました。オークションの売上げ参加費の一部は、大使館を通して東日本大震災への寄付金にあてられました。</p>

                    <h3>MENU</h3>
                    <div class="dinner-menu">
                        <p>バラの騎士6人のシェフの饗宴　スペシャルオードブル</p>

                        <p><b>ザ・キャピタルホテル東急　総料理長　加藤 完十郎</b><br>
                            <span class="q">インカの目覚め</span>の冷製スープとフォアグラプリン バラと柑橘類のマーマレード添え</p>

                        <p><b>リストランテ　アルポルト　オーナーシェフ　片岡 護</b><br>
                            スパゲティーラグーディマーレ　～バラの風味いっぱいの海の幸煮込みソース～</p>

                        <p><b>Wakiya一笑美茶樓　オーナーシェフ　脇屋 友詞</b><br>
                            鮑と鮑ごはんの岩塩包み焼き ブルガリアンローズのお楽しみ</p>

                        <p><b>オーベルジュ　オー・ミラドー　オーナーシェフ　勝又 登</b><br>
                            ローズの衣をまとった仔羊のロースト</p>

                        <p><b>銀座あさみ　総料理長　浅見 健二</b><br>
                            バラの香りの御飯　“鯛茶漬け”</p>

                        <p><b>賀茂鶴株式会社　佛蘭西屋　取締役総料理長　藤原 修二</b><br>
                            ローズバター　／　ホテルベーカリーの焼き立てパン</p>

                        <p><b>Toshi Yoroizuka　オーナーシェフ　鎧塚 俊彦</b><br>
                            “ロザレ”</p>

                        <p><b>パティスリー＆ダイニング　アンファンス　オーナーシェフ　野田有作・野田真作</b><br>
                            ブルガリアンローズショコラ</p>
                    </div>
                    
                    <?php HTML::btn_return_activity(); ?>
                </div><!-- .section-body -->
            </section>

        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
