<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(PUBLICATION); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="publication">
                <div class="section-head center">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Publication</p>
                        <h1>発行物・関連書籍</h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">

                    <h3>Newsletter「ROSE DOLINA」</h3>
                    <div class="publication-table">
                        <img src="img/publication/dolina01.jpg" alt="ニュースレターローズドリナの画像">
                        <div class="description">
                            <h1>Rose Dolina Vol.1</h1>
                            発行日: 2017年6月2日<br>
                            <a href="pdf/dolina01.pdf">PDFで見る</a>
                        </div>
                    </div>
                    <p>「ROSE DOLINA (ローズドリナ) 」では、ブルガリアンローズ文化協会のさまざまな取り組みを紹介しています。</p>

                    <h3>関連書籍</h3>
                    <div class="publication-table">
                        <img src="img/publication/inochi.jpg" alt="書籍、命を紡ぐバラの画像">
                        <div class="description">
                            <h1>命をつむぐバラ</h1>
                            発行日: 2013年6月2日<br>
                            著者: 山下文江（ブルガリアンローズ文化協会 理事長）<br>
                            出版社: ハースト婦人画報社<br>
                            定価: 本体1,500円
                        </div>
                    </div>
                    <p>「ローズを飲まないなんてもったいない！」。バラには心身をよみがえらせ、命を吹き込むような偉大なパワーが秘められています。各分野の医師が絶賛したローズの力の検証結果、またローズに魅せられたシェフたちによる「食べるローズ」の料理やレシピを紹介。「健やかに美しく」を実現させる、ローズの知られざる魅力が明らかになる1冊です。</p>
                </div>
            </section>
        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
