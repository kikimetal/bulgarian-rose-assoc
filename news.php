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
            margin-bottom: 0.8em;
          }
          #news .news-content:not(:last-child){
            margin-bottom: 45px;
          }
          #news .news-content p{
            font-size: 1rem;
            line-height: 1.9;
            margin-top: 0.9em;
            margin-bottom: 0.9em;
          }
          #news .news-content img.pure-rose{
            max-width: 100%;
            border-radius: 6px;
            user-select: none;
            pointer-events: none;
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

                    <!-- ここからニュースコンテンツ -->
                    <div class="news-content">
                      <h3 class="update-title">
                        <span class="update-date">2018 / 03 / 21</span><br>
                        ローズのおもてなしの一杯 「ピュアローズ」をホテルニューグランドと共創。
                        『ガーデンネックレス横浜2018』の開催スタートとなる3月24日より先行販売。
                      </h3>

                      <img class="pure-rose" src="/img/news/pure-rose.jpg" alt="ホテルニューグランドのピュアローズの画像">

                      <p>
                        ブルガリアンローズ文化協会は、ローズを通じて大切な誰かに ”いつもありがとう”を伝えあう文化を共創していきたいとの想いから 6 月 2 日を「ローズの日」として日本記念日協会に登録しました。
                      </p>
                      <p>
                        その記念として、2018 年 5 月中旬~6 月末のバラが咲き誇る季節の期間限定キャンペーンとして横濱愛にあふれる匠が活躍するレストランやバーと「ローズのおもてなし特別プラン」を共創し、
                        お食事プランのチケットやお飲み物プランのチケットを販売してまいります。プランでは、華やかな香りが楽しめるブルガリアンローズウォーターをつかったデザート等の一品、またはブルガリアンローズウォーターをつかったカクテルやソフトドリンクで、バラを五感でお楽しみいただけます。
                      </p>
                      <p>
                        ローズは、横浜市の市花でもあります。
                        『ガーデンネックレス横浜 2018』が 3 月 24 日より開 催され、横濱はたくさんの花や緑で彩られ、5 月はたくさんの薔薇で華やかに彩られていきます。ローズを通じて大切な誰かに ”いつもありがとう”を伝えあう文化を共創していく旗手として、
                        ホテルニューグランドの『シーガーディアンII』で 3 月 24 日より先行販売することになりました(ローズ1本とブルガリアンローズウォーターのミニボトルの特典がある「ローズのおもてなし特別プラン」については、5月中旬からの販売となります)。
                      </p>
                      <p>
                         古くはクレオパトラが愛し、西洋東洋を問わず王侯貴族に愛されてきたブルガリアローズウォーター。美容だけでなく健康によい「食すバラ」を、一流のシェフやバーテンダーの皆様が紡ぎだす新しいローズの世界の中で、どうぞお楽しみください。
                      </p>
                    </div>
                    <!-- ここまで -->

                    <!-- ここからニュースコンテンツ -->
                    <div class="news-content">
                      <h3 class="update-title">
                        <span class="update-date">2017 / 05 / 29</span><br>
                        ウェブサイト開設のお知らせ。
                      </h3>
                      <p>
                        このたび、一般社団法人ブルガリアンローズ文化協会の公式ウェブサイトを開設いたしました。<br>
                        当ウェブサイトには協会概要をはじめ、活動内容やブルガリアンローズに関する情報が掲載されています。ブルガリアンローズを愛好する皆様に有益な情報を発信できるよう、ウェブサイトの充実に努めてまいりますので、ぜひご覧ください。
                      </p>
                    </div>
                    <!-- ここまで -->

                </div>
            </section>
        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
