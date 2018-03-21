<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(ACTIVITY_DINNER02); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>

            <section id="dinner02">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Dinner</p>
                        <h1>薔薇の晩餐会</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">
                    <p>
                        2015年11月5日、ブルガリア大使館と「バラの騎士と女神の会」の後援のもと、リストランテ アルポルト西麻布店にて薔薇の晩餐会を開催し、約40名の方にご参加いただきました。
                        ブルガリアンローズウォーターは、香り付けだけなく、素材の味を引き立てる新しい調味料です。 “バラの騎士”片岡護シェフによるローズウォーターを使った極上イタリアン料理をご堪能いただき、バラの香りが漂う会場で美食と歓談を楽しむ一夜となりました。
                        大使館からはゲオルギ・ヴァシレフ大使、「バラの騎士と女神の会」からは中村孝明シェフ、脇屋友詞シェフにご参加いただき、バラの料理を楽しみながら親睦を深めました。
                    </p>

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
