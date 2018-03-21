<?php
require_once "util/award_result.define.php";
$permit = true;
// 存在し、数値型であること
if(!empty($_GET["n"]) && is_numeric($_GET["n"])){
    // 2以上 && 結果の配列の長さがMAX
    if($_GET["n"] >= 2 && $_GET["n"] < count(AWARD_RESULT)){
        // コード入力対策
        $n = htmlspecialchars($_GET["n"]);
        // 少数とか変なの入れてきたら整数に変換
        $n = intval($n);
    }else{
        $permit = false;
    }
}else{
    $permit = false;
}
// それら以外は全てアワードへジャンプ
if($permit === false){
    header('location: /activity-award.php');
    exit();
}
?>
<?php require_once "util/html.class.php"; ?>
<!DOCTYPE html>
<html lang="ja">
    <?php HTML::head(ACTIVITY_AWARD_RESULT); ?>
    <body>
        <?php HTML::loader(); ?>
        <?php HTML::header(); ?>
        <?php HTML::nav_menu(); ?>
        <!--*************************** content ********************************-->
        <main>

            <?php HTML::section_award_result($n); ?>

        </main>
        <!--*************************** /content ********************************-->
        <?php HTML::nav_share(); ?>
        <?php HTML::footer(); ?>
        <?php HTML::script(); ?>
    </body>
</html>
