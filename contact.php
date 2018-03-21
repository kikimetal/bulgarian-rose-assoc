<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(CONTACT); ?>
    <body class="footer">
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="contact">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Contact</p>
                        <h1>お問い合わせ</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>

                <div class="section-body" data-aos="fade-up">
                    <p>
                        ブルガリアンローズ文化協会へのお問い合わせはメール、もしくはお電話にて承っています。
                        お電話でのお問い合わせは、営業時間内（平日10:00～17:00）に限り承ります。
                        また、お問い合わせ内容により、ご回答にお時間を頂戴する場合や、ご回答を差し上げられない場合がございます。
                        <br><br>
                        なお、当協会での個人情報の取り扱いについては、<a href="privacypolicy.php"><span class="q">個人情報保護方針</span></a>をご確認ください。</p>

                    <h4>お問い合わせ先</h4>

                    <div class="box">お電話: <a href="tel:0455304847">045-530-4847</a><br>
                        メール: <a href="mailto:info&#64;bulgarian-rose.or.jp">info&#64;bulgarian-rose.or.jp</a>
                    </div>
                </div>
            </section>
        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
