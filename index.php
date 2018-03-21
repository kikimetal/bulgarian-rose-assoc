<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(HOME); ?>
    <body class="home">
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="top">
                <p>Bulgarian Rose Cultural Association</p>
                <h1><span class="inb">ブルガリアンローズ</span><span class="inb">文化協会</span></h1>
            </section>

            <section id="focus-roseday-large-img">
                <div class="section-head">
                    <div class="section-head-img" data-aos="fade-up">
                    </div>
                </div>
            </section>

            <section id="focus-roseday">
                <div class="section-head reverse">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Rose Day</p>
                        <h1>ローズの日</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">
                    <h2>
                        6月2日<br>
                        <span class="inb">「ありがとう」を贈る</span><span class="inb">ローズの日</span>
                    </h2>
                    <p><b>
                        あなたの大切な人に<br>
                        バラの贈り物で<br>
                        <span class="inb">「ありがとう」を</span><span class="inb">伝えてみませんか</span>
                    </b></p>
                    <div class="link"><a href="roseday.php">詳しくみる</a></div>
                </div>
            </section>

            <section id="focus-bulgarianrose-large-img">
                <div class="section-head">
                    <div class="section-head-img" data-aos="fade-up">
                    </div>
                </div>
            </section>

            <section id="focus-bulgarianrose">
                <div class="section-head reverse">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Bulgarian Rose</p>
                        <h1><span class="inb">ブルガリアンローズ</span><span class="inb">とは</span></h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">
                    <h2>
                        花香の女王<br>
                        「ブルガリアンローズ」
                    </h2>
                    <p><b>
                       <span class="inb">ブルガリアの春、</span><span class="inb">バラの谷に咲くダマスクローズ</span><br>
                       世界で最も香り豊かなそのバラは<br>
                       <span class="inb">「ブルガリアンローズ」</span><span class="inb">と呼ばれます</span>
                    </b></p>
                    <div class="link"><a href="bulgarianrose.php">詳しくみる</a></div>
                </div>
            </section>

        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
