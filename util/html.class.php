<?php
require_once "page_meta.define.php";
date_default_timezone_set("Asia/Tokyo");

class HTML{
    public static function head($page){
        foreach ($page as $key => $value) {
            $page[$key] = htmlspecialchars($value);
        }
        if(!empty($page["title"])){
            $page["title"] .= " | ";
        }
        if(!empty($page["addKeywords"])){
            $page["addKeywords"] .= ",";
        }
        ?>
        <head>
            <meta charset="utf-8">
            <title><?= $page["title"] . MAIN_TITLE ?></title>
            <meta name="description" content="<?= $page["description"] ?>">
            <meta name="keywords" content="<?= $page["addKeywords"] . BASE_KEYWORDS ?>">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

            <meta http-equiv="Content-Script-Type" content="text/javascript">
            <meta http-equiv="Content-Style-Type" content="text/css">

            <link rel="stylesheet" href="css/myreset.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/myimagehover.css">
            <link rel="stylesheet" href="css/my_imagehover_setting.css">
            <link rel="stylesheet" href="css/mystyle.css">
            <link rel="stylesheet" href="css/my-dot-layout.css">
            <link rel="stylesheet" href="css/my-radius-layout.css">
            <link rel="stylesheet" href="aos-master/dist/aos.css">

            <script src="js/section-head-img-setting.js"></script>
        </head>
        <?php
    }
    public static function loader(){
        ?>
        <div id="loader" class="loading">
            <div class="loader-item rose" id="p5"></div>
            <p class="loader-item text"><span></span><span></span><span></span></p>
        </div>
        <script src="js/p5.min.js"></script>
        <script src="js/myp5.js"></script>
        <?php
    }
    public static function header(){
        ?>
        <header>
            <div id="title"><a href="http://www.bulgarian-rose.or.jp">Bulgarian Rose Cultural Association</a></div>
            <span id="menu-btn" class="menu-opener">
                <div id="rose-icon"></div>
                <span class="my-bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="menu-text">MENU</span>
            </span>
        </header>
        <?php
    }
    public static function nav_share(){
        ?>
        <nav id="share" data-aos="fade-up">
            <a class="share-btn twitter" href="http://twitter.com/share?url=http://www.bulgarian-rose.or.jp&text=ブルガリアンローズ文化協会&hashtags=ローズの日">
                <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a class="share-btn facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://www.bulgarian-rose.or.jp">
                <i class="fa fa-facebook fa-2x"></i>
            </a>
            <a class="share-btn line" href="http://line.me/R/msg/text/?ブルガリアンローズ文化協会http://www.bulgarian-rose.or.jp">
                LINE
            </a>
            <script>
                (function(){
                    var x, y, w, h;
                    w = 640;
                    h = 480;
                    x = (screen.width - w) / 2;
                    y = (screen.height - h) / 2;
                    var shareBtn = document.getElementsByClassName("share-btn");
                    for (var i = 0; i < shareBtn.length; i++) {
                        shareBtn[i].addEventListener("click",function(e){
                            e.preventDefault();
                            window.open(this.href, "Share Window", "screenX="+x+",screenY="+y+",left="+x+",top="+y+",width="+w+",height="+h+",personalbar=0, toolbar=0, scrollbars=1, sizable=1");
                        });
                    }
                })();
            </script>
        </nav>
        <?php
    }
    public static function nav_menu(){
        ?>
        <nav id="menu">
            <a href="http://www.bulgarian-rose.or.jp" class="menu-item large-nav-menu-top">
                <span class="title-jp"><span>一般社団法人</span> <span>ブルガリアンローズ文化協会</span></span>
                <span class="title-en">Bulgarian Rose Cultural Association</span>
            </a>
            <div class="menu-item menu-top">
                <span>MENU</span>
                <span class="close-btn menu-closer"><i class="fa fa-reply"></i><span class="close-text">Close</span></span>
            </div>
            <figure class="menu-item menu-item-mobile-small home imghvr-zoom-in">
                <div class="img">
                    <h1>Home</h1>
                </div>
                <figcaption>
                    <a href="http://www.bulgarian-rose.or.jp">トップページ</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small news imghvr-zoom-in">
                <div class="img">
                    <h1>News</h1>
                </div>
                <figcaption>
                    <a href="news.php">ニュース</a>
                </figcaption>
            </figure>
            <figure class="menu-item about imghvr-zoom-in">
                <div class="img">
                    <h1>About</h1>
                </div>
                <figcaption>
                    <a href="about.php#about">協会について</a>
                    <a href="about.php#message01">理事長挨拶</a>
                    <a href="about.php#history">沿革</a>
                    <a href="about.php#message02">大使からのメッセージ</a>
                    <a href="about.php#outline">協会概要</a>
                    <a href="about.php#contribution">ご寄付のお願い</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small knight imghvr-zoom-in">
                <div class="img">
                    <h1>Knight</h1>
                </div>
                <figcaption>
                    <a href="knight.php">バラの騎士と女神の会</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small roseday imghvr-zoom-in">
                <div class="img">
                    <h1>Rose Day</h1>
                </div>
                <figcaption>
                    <a href="roseday.php">「ローズの日」</a>
                </figcaption>
            </figure>
            <figure class="menu-item activity imghvr-zoom-in">
                <div class="img">
                    <h1>Activity</h1>
                </div>
                <figcaption>
                    <a href="activity.php">活動内容</a>
                    <a href="activity-meeting.php">「ローズの日」の集い</a>
                    <a href="activity-dinner01.php">バラの騎士と女神の晩餐会</a>
                    <a href="activity-dinner02.php">薔薇の晩餐会</a>
                    <a href="activity-award.php">ローズウォーターレシピアワード</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small bulgarianrose imghvr-zoom-in">
                <div class="img">
                    <h1>Bulgarian Rose</h1>
                </div>
                <figcaption>
                    <a href="bulgarianrose.php">ブルガリアンローズ</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small study imghvr-zoom-in">
                <div class="img">
                    <h1>Study</h1>
                </div>
                <figcaption>
                    <a href="study.php">学術調査研究</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small publication imghvr-zoom-in">
                <div class="img">
                    <h1>Publication</h1>
                </div>
                <figcaption>
                    <a href="publication.php">発行物・関連書籍</a>
                </figcaption>
            </figure>
            <figure class="menu-item menu-item-mobile-small supporter imghvr-zoom-in">
                <div class="img">
                    <h1>Supporter</h1>
                </div>
                <figcaption>
                    <a href="supporter.php">協力団体一覧</a>
                </figcaption>
            </figure>
            <div class="menu-item menu-closer">
                <h1><i class="fa fa-reply"></i><span class="close-text">Close</span></h1>
            </div>
        </nav>
        <?php
    }
    public static function footer(){
        ?>
        <footer>
            <div id="sitemap-title">
                <p>Bulgarian Rose Cultural Association</p>
                <div class="pc">
                    <h1>Site Map</h1>
                </div>
                <div class="mobile">
                    <h1>MENU</h1>
                </div>
            </div>

            <div id="sitemap-mobile">
                <div class="sitemap-item">
                    <a href="http://www.bulgarian-rose.or.jp"><span class="en">Home</span><span class="jp">トップ</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="news.php"><span class="en">News</span><span class="jp">ニュース</span></a>
                </div>

                <div class="sitemap-item" id="sitemap-about">
                    <a><span class="en">About</span><span class="jp">協会について</span><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i></a>
                </div>
                <div class="sitemap-item">
                    <a href="about.php" class="sitemap-about-item"><span class="en">About</span><span class="jp">協会について</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="about.php#message01" class="sitemap-about-item"><span class="en">Message</span><span class="jp">理事長挨拶</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="about.php#message02" class="sitemap-about-item"><span class="en">Message</span><span class="jp">大使からのメッセージ</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="about.php#history" class="sitemap-about-item"><span class="en">History</span><span class="jp">沿革</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="about.php#outline" class="sitemap-about-item"><span class="en">Outline</span><span class="jp">協会概要</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="about.php#contribution" class="sitemap-about-item"><span class="en">Contribution</span><span class="jp">ご寄付のお願い</span></a>
                </div>

                <div class="sitemap-item">
                    <a href="knight.php"><span class="en">Knight</span><span class="jp">薔薇の騎士と女神の会</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="roseday.php"><span class="en">Rose Day</span><span class="jp">ローズの日</span></a>
                </div>

                <div class="sitemap-item" id="sitemap-activity">
                    <a><span class="en">Activity</span><span class="jp">活動内容</span><i class="fa fa-plus-square-o"></i><i class="fa fa-minus-square-o"></i></a>
                </div>
                <div class="sitemap-item">
                    <a href="activity.php" class="sitemap-activity-item"><span class="en">Activity</span><span class="jp">活動内容</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="activity-meeting.php" class="sitemap-activity-item"><span class="en">Meeting</span><span class="jp">「ローズの日」の集い</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="activity-dinner01.php" class="sitemap-activity-item"><span class="en">Dinner</span><span class="jp">バラの騎士と女神の晩餐会</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="activity-dinner02.php" class="sitemap-activity-item"><span class="en">Dinner</span><span class="jp">薔薇の晩餐会</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="activity-award.php" class="sitemap-activity-item"><span class="en">Award</span><span class="jp">ローズウォーターレシピアワード</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="bulgarianrose.php"><span class="en">Bulgarian Rose</span><span class="jp">ブルガリアンローズ</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="study.php"><span class="en">Study</span><span class="jp">学術調査研究</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="publication.php"><span class="en">Publication</span><span class="jp">発行物 / 関連書籍</span></a>
                </div>
                <div class="sitemap-item">
                    <a href="supporter.php"><span class="en">Supporter</span><span class="jp">協力団体一覧</span></a>
                </div>
            </div>

            <div id="sitemap-pc">
                <div class="container">
                    <div class="sitemap-item">
                        <a href="http://www.bulgarian-rose.or.jp">ブルガリアンローズ文化協会</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="news.php">ニュース</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="knight.php">薔薇の騎士と女神の会</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="roseday.php">ローズの日</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="bulgarianrose.php">ブルガリアンローズ</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="study.php">学術調査研究</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="publication.php">発行物 / 関連書籍</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="supporter.php">協力団体一覧</a>
                    </div>
                </div>

                <div class="container">
                    <div class="sitemap-item">
                        <a href="about.php">協会について</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="about.php#message01">理事長挨拶</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="about.php#message02">大使からのメッセージ</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="about.php#history">沿革</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="about.php#outline">協会概要</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="about.php#contribution">ご寄付のお願い</a>
                    </div>
                </div>

                <div class="container">
                    <div class="sitemap-item">
                        <a href="activity.php">活動内容</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="activity-meeting.php">「ローズの日」の集い</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="activity-dinner01.php">バラの騎士と女神の晩餐会</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="activity-dinner02.php">薔薇の晩餐会</a>
                    </div>
                    <div class="sitemap-item">
                        <a href="activity-award.php">ローズウォーターレシピアワード</a>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up">
                <span id="to-top"></span>
            </div>
            <div class="link">
                <a href="contact.php">お問い合わせ</a>
                <a href="termsofuse.php">利用規約</a>
                <a href="privacypolicy.php">個人情報保護方針</a>
            </div>
            <div class="address">
                <p>当サイトは<span class="pc">W3CによるWeb標準に則した</span>モダンブラウザでの閲覧を推奨致します。</p>
                <address>Copyright 2015 - <?= date("Y"); ?> &copy;Bulgarian Rose Cultual Association <br class="mobile">All Rights Reserved.</address>
            </div>
        </footer>
        <?php
    }
    public static function script(){
        ?>
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/myscript.js"></script>
        <script src="aos-master/dist/aos.js"></script>
        <script>AOS.init({ offset: 120, duration: 900});</script>
        <?php
    }
    public static function btn_return_activity(){
        ?>
        <div class="link">
            <a href="activity.php">活動内容へ戻る</a>
        </div>
        <?php
    }

    public static function section_award_result($n){
        ?>
        <section id="award-result<?= $n ?>">
            <div class="section-head reverse">
                <div class="section-head-title" data-aos="fade-up">
                    <p>Award No.<?= AWARD_RESULT[$n]["info"]["number"] ?></p>
                    <h1><span class="inb">第<?= AWARD_RESULT[$n]["info"]["number"] ?>回</span><span class="inb">ローズウォーター</span><span class="inb">レシピアワード</span></h1>
                </div>
                <div class="section-head-img" data-aos="fade-up"></div>
            </div>
            <div class="section-body" data-aos="fade-up">

                <h3><?= AWARD_RESULT[$n]["info"]["year"] ?>年 第<?= AWARD_RESULT[$n]["info"]["number"] ?>回ローズウォーターレシピアワード 最終審査結果</h3>
                <p><?= AWARD_RESULT[$n]["info"]["year"] ?>年<?= AWARD_RESULT[$n]["info"]["month"] ?>月<?= AWARD_RESULT[$n]["info"]["day"] ?>日 <?= AWARD_RESULT[$n]["info"]["place"] ?></p>

                <div class="container">
                    <div class="name">
                        <b>金賞</b><b><?= AWARD_RESULT[$n]["gold"]["name"] ?></b><span><?= AWARD_RESULT[$n]["gold"]["school"] ?></span>
                    </div>
                    <div class="dish">
                        <?= AWARD_RESULT[$n]["gold"]["dish"] ?>
                    </div>
                </div>
                <div class="container">
                    <div class="name">
                        <b>銀賞</b><b><?= AWARD_RESULT[$n]["silver"]["name"] ?></b><span><?= AWARD_RESULT[$n]["silver"]["school"] ?></span>
                    </div>
                    <div class="dish">
                        <?= AWARD_RESULT[$n]["silver"]["dish"] ?>
                    </div>
                </div>
                <div class="container">
                    <div class="name">
                        <b>銅賞</b><b><?= AWARD_RESULT[$n]["bronze"]["name"] ?></b><span><?= AWARD_RESULT[$n]["bronze"]["school"] ?></span>
                    </div>
                    <div class="dish">
                        <?= AWARD_RESULT[$n]["bronze"]["dish"] ?>
                    </div>
                </div>
                <?php foreach (AWARD_RESULT[$n]["excellence"] as $value): ?>
                    <div class="container">
                        <div class="name">
                            <b>優秀賞</b><b><?= $value["name"] ?></b><span><?= $value["school"] ?></span>
                        </div>
                        <div class="dish">
                            <?= $value["dish"] ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="link">
                    <a href="activity-award.php">結果一覧に戻る</a>
                </div>
            </div>
        </section>
        <?php
    }

}
