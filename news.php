<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(NEWS); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <style media="screen">
          #news .news-content .update-date{
            display: inline-block;
            border: 1px solid rgba(50,0,0,0.3);
            border-radius: 3px;
            opacity: 0.7;
            padding: 0.2em 0.4em;
            font-size: 0.9rem;
            margin-bottom: 0.4em;
            line-height: 1;
          }
          #news .news-content .update-title{
            border-bottom: 1px solid rgba(50,0,0,0.2);
            line-height: 1.7;
            margin-bottom: 0.6em;
          }
          #news .news-content:not(:last-child){
            margin-bottom: 45px;
          }
        </style>
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

                    <div class="news-content">
                      <h3 class="update-title">
                        <span class="update-date">2017 / 05 / 29</span><br>
                        ウェブサイト開設のお知らせ
                      </h3>
                      <p>
                        このたび、一般社団法人ブルガリアンローズ文化協会の公式ウェブサイトを開設いたしました。<br>
                        当ウェブサイトには協会概要をはじめ、活動内容やブルガリアンローズに関する情報が掲載されています。ブルガリアンローズを愛好する皆様に有益な情報を発信できるよう、ウェブサイトの充実に努めてまいりますので、ぜひご覧ください。
                      </p>
                    </div>

                    <div class="news-content">
                      <h3 class="update-title">
                        <span class="update-date">2017 / 05 / 29</span><br>
                        ウェブサイト開設のお知らせ
                      </h3>
                      <p>
                        このたび、一般社団法人ブルガリアンローズ文化協会の公式ウェブサイトを開設いたしました。<br>
                        当ウェブサイトには協会概要をはじめ、活動内容やブルガリアンローズに関する情報が掲載されています。ブルガリアンローズを愛好する皆様に有益な情報を発信できるよう、ウェブサイトの充実に努めてまいりますので、ぜひご覧ください。
                      </p>
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
