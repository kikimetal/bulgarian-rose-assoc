<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(SUPPORTER); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="supporter">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Supporter</p>
                        <h1>協力団体一覧</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>

                <div class="section-body" data-aos="fade-up">
                    <p>ブルガリアンローズ文化協会は、活動趣旨にご賛同いただきました企業団体の皆様から、さまざまな形でご支援・ご協力をいただいています。</p>
                    <div class="list">
                        <p>駐日ブルガリア共和国大使館</p>
                        <p>有限会社メイリリィ</p>
                        <p>株式会社アルビオン</p>
                        <p>城南信用金庫</p>
                        <p>HANAEMI 株式会社</p>
                        <p>株式会社美肌ネイル</p>
                        <p>株式会社ほんの木</p>
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
