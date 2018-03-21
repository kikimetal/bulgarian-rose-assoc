<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(STUDY); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="study">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Study</p>
                        <h1>学術調査研究</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>

                <div class="section-body" data-aos="fade-up">
                    <p>
                        ブルガリアンローズ文化協会では、ブルガリアンローズに関する調査・研究を支援しています。<br>
                        その一環として、さまざまな組織や研究機関が行っている調査・研究結果をご紹介します。
                    </p>
                </div>
            </section>
        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
