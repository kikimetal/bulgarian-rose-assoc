<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(KNIGHT); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>
            <section id="knight">
                <div class="section-head">
                    <div class="section-head-title" data-aos="fade-up">
                        <p>Knight</p>
                        <h1><span class="inb">バラの騎士と</span><span class="inb">女神の会</span></h1>
                    </div>
                    <div class="section-head-img" data-aos="fade-up"></div>
                </div>
                <div class="section-body" data-aos="fade-up">
<p>ブルガリアでは、毎年6月にブルガリアンローズの収穫を祝う「バラ祭り」が開催されます。この収穫祭では、日頃の感謝の気持ちを込めて、親しい間柄でバラの花やローズオイル、ローズウォーターを使ったお菓子や飲み物を贈る習慣があります。この素晴らしい文化を日本に広めるために、2011年5月、リュボミル・トドロフ大使に6月2日を「ローズの日」と宣言いただきました。そして、この活動にご賛同いただいた駐日ブルガリア大使および各界で活躍する方々と共に、同年6月2日に「バラの騎士と女神の会」を発足しました。</p>

<p>2012年6月には東日本大震災への義捐金を募るチャリティーパーティーとして、「バラの騎士と女神の晩餐会」を開催。また、2011年から毎年開催されている「ローズウォーターレシピアワード」では、審査員としてブルガリア大使をはじめ、“バラの騎士”の片岡護シェフ、鎧塚俊彦シェフにご参加いただき、ローズウォーター調味料の普及にご協力いただいております。
「バラの騎士と女神の会」はブルガリアの素晴らしいバラの文化と、“バラを食する文化”を発信してまいります。</p>

<style media="screen">
    section .section-body .knight-and-goddess{
        text-align: center;
        margin: 0;
        padding: 0;
    }
    .knight-and-goddess h5{
        font-size: 140%;
        border-bottom: 1px solid rgb(149, 136, 120);
        line-height: 1.6;
        margin-bottom: 2em;
    }
    .knight-and-goddess h5.knight{
        color: rgb(65, 69, 97)
    }
    .knight-and-goddess h5.goddess{
        color: rgb(113, 41, 85)
    }
    .knight-and-goddess .list{
        margin-bottom: 2.6rem;
    }
    .knight-and-goddess {
        line-height: 1.6;
    }
    .knight-and-goddess .position{
        display: block;
        font-size: 80%;
        opacity: 0.7;
    }
    .knight-and-goddess .name{
        display: block;
        margin-bottom: 0.5em;
        font-weight: bold;
    }

    .knight-and-goddess .list.hokki{
        text-align: left;
    }
    .knight-and-goddess .list.hokki .position{
        display: block;
        font-size: 80%;
        opacity: 0.7;
        font-weight: bold;
    }
    .knight-and-goddess .list.hokki .name{
        display: block;
        font-size: 75%;
        opacity: 0.7;
        font-weight: lighter;
    }
    .knight-and-goddess h5.hokki{
        font-size: 80%;
        border-bottom: 1px solid rgb(149, 136, 120);
        line-height: 1.6;
        margin-bottom: 1em;
        opacity: 0.7;
        cursor: pointer;
    }
    .knight-and-goddess h5.hokki i.fa{
        display: inline-block;
        width: 1em;
        height: 1em;
        border: 1px solid;
        border-radius: 50%;
    }
    .knight-and-goddess .list.hokki{
        height: 0;
        overflow: hidden;
    }
    .knight-and-goddess .list.hokki.open{
        height: auto;
    }
</style>

<div class="knight-and-goddess">
    <h5 class="knight">バラの騎士</h5>
    <div class="list">
        <span class="position">駐日ブルガリア共和国特命全権大使</span>
        <span class="name">ボリスラフ・コストフ</span>
        <br><br>
        <span class="position">オーベルジュ オー・ミラドー オーナーシェフ</span>
        <span class="name">勝又 登</span>
        <span class="position">リストランテ アルポルト オーナーシェフ</span>
        <span class="name">片岡 護</span>
        <span class="position">日本料理 中村孝明 総料理長</span>
        <span class="name">中村 孝明</span>
        <span class="position">Wakiya一笑美茶樓 オーナーシェフ</span>
        <span class="name">脇屋 友詞</span>
        <span class="position">Toshi Yoroizuka オーナーシェフ</span>
        <span class="name">鎧塚 俊彦</span>
        <span class="position">賀茂鶴株式会社 佛蘭西屋 取締役総料理長</span>
        <span class="name">藤原 修二</span>
        <span class="position">銀座あさみ 総料理長</span>
        <span class="name">浅見 健二</span>
        <span class="position">パティスリー＆ダイニング アンファンス <br class="mobile">オーナーパティシエ</span>
        <span class="name">野田 有作</span>
        <span class="position">パティスリー＆ダイニング アンファンス <br class="mobile">オーナーシェフ</span>
        <span class="name">野田 真作</span>
        <br><br>
        <span class="position">バーラジオ オーナーバーテンダー</span>
        <span class="name">尾崎 浩司</span>
        <span class="position">国際ソムリエ協会会長／ソムリエ</span>
        <span class="name">田崎 眞也</span>
        <br>
    </div>


    <h5 class="goddess">バラの女神</h5>
    <div class="list">
        <span class="position">今田美奈子食卓芸術サロン 主宰</span>
        <span class="name">今田 美奈子</span>
        <span class="position">フリーアナウンサー／<br class="mobile">SPEECH COMMUNICATIONS 主宰</span>
        <span class="name">山野 秀子</span>
        <span class="position">コマツガーデン代表 バラ園芸家</span>
        <span class="name">後藤 みどり</span>
        <span class="position">ブルガリアンローズ文化協会理事長／<br class="mobile">フレグランスデザイナー</span>
        <span class="name">山下 文江</span>
    </div>


    <h5 class="hokki" id="hokki">バラの騎士と女神の会 発起人 <i class="fa fa-angle-down"></i></h5>
    <div class="list hokki">
        <span class="position">バラの騎士と女神の会 会長</span>
        <span class="name">原田 博之 株式会社ソフィア・エコ・プラン 代表取締役社長</span>

        <span class="position">バラの騎士と女神</span>
        <span class="name">リュボミル・トドロフ 駐日ブルガリア共和国特命全権大使</span>
        <span class="name">上向井 三枝子 駐日ブルガリア共和国特命全権大使夫人</span>
        <span class="name">安倍 昭恵 安倍首相夫人</span>
        <br>
        <span class="name">勝又 登 オーベルジュ オー・ミラドー オーナーシェフ</span>
        <span class="name">片岡 護 リストランテ アルポルト オーナーシェフ</span>
        <span class="name">脇屋 友詞 Wakiya一笑美茶樓 オーナーシェフ</span>
        <span class="name">鎧塚 俊彦 Toshi Yoroizuka オーナーシェフ</span>
        <span class="name">藤原 修二 賀茂鶴株式会社 佛蘭西屋 取締役総料理長</span>
        <span class="name">浅見 健二 銀座あさみ 総料理長</span>
        <span class="name">野田 有作 パティスリー＆ダイニング アンファンス <br class="mobile">オーナーパティシエ</span>
        <span class="name">野田 真作 パティスリー＆ダイニング アンファンス <br class="mobile">オーナーシェフ</span>
        <br>
        <span class="name">尾崎 浩司 バーラジオ オーナーバーテンダー</span>
        <span class="name">田崎 眞也 国際ソムリエ協会会長／ソムリエ</span>
        <br>
        <span class="name">今田 美奈子 今田美奈子食卓芸術サロン 主宰</span>
        <span class="name">山野 秀子 フリーアナウンサー／SPEECH COMMUNICATIONS 主宰</span>
        <span class="name">後藤 みどり コマツガーデン代表 バラ園芸家</span>
        <span class="name">利重 由紀子 ジュエリープロデューサー</span>
        <span class="name">山下 文江 フレグランスデザイナー</span>
    </div>
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
