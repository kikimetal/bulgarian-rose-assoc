;(function(){
    // "use strict";
    var sectionID = [
        "focus-roseday",
        "focus-roseday-large-img",
        "focus-bulgarianrose",
        "focus-bulgarianrose-large-img",
        "about",
        "message01",
        "message02",
        "history",
        "outline",
        "contribution",
        "activity",
        "award",
        "award-result2",
        "award-result3",
        "award-result4",
        "award-result5",
        "award-result6",
        "dinner01",
        "dinner02",
        "meeting",
        "news",
        "bulgarianrose",
        "knight",
        "publication",
        "roseday",
        "study",
        "supporter",
        "contact",
        "termsofuse",
        "privacypolicy",
    ];
    window.onload = function(){
        for (var i = 0; i < sectionID.length; i++) {
            // section#id が存在するか確認 ない場合skip
            var section = document.getElementById(sectionID[i]);
            if(!section) continue;
            // その section の中の class="section-head-img" を取得 ない場合skip
            var simg = section.getElementsByClassName("section-head-img");
            if(!simg[0]) continue;
            simg = simg[0];
            // 入れ込む画像のURLを生成
            var url = window.location.origin;
            var imgUrl = url + "/img/section/" + sectionID[i] + ".jpg";
            // #id と同名の .jpg ファイルの存在を確認 なければ(404:NotFound) skip
            var xhr = new XMLHttpRequest();
            xhr.open("HEAD", imgUrl, false);
            xhr.send(null);
            var status = xhr.status;
            if(status === 404) sectionID[i] = "default";
            // 画像設定の上書き
            // simg[0].style.backgroundImage = "linear-gradient(rgba(30,30,0,0.2),rgba(30,30,0,0.2)), url(\"../img/section/" + sectionID[i] + ".jpg\")";
            simg.style.backgroundImage = "url(\"../img/section/" + sectionID[i] + ".jpg\")";
        }
    }
})();
