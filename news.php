<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(NEWS); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="news">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>News</p>
                        <h1>ニュース</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">
                    <h3>2017 / 05 / 29 ウェブサイト開設のお知らせ</h3>
                    <p>
                        このたび、一般社団法人ブルガリアンローズ文化協会の公式ウェブサイトを開設いたしました。<br>
                        当ウェブサイトには協会概要をはじめ、活動内容やブルガリアンローズに関する情報が掲載されています。ブルガリアンローズを愛好する皆様に有益な情報を発信できるよう、ウェブサイトの充実に努めてまいりますので、ぜひご覧ください。
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
