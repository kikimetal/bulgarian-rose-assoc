// "use strict";
// menu open close
var menu_open = false;
var menu_open_permit = true;
var scrollTopWhenOpenMenu = 0;
var BREAK_POINT = [480, 768, 1024, 1600];

$(window).load(function(){

    $(".menu-opener").on("click", function(){
        if(window.innerWidth >= BREAK_POINT[2]){ return;}
        if( !menu_open_permit ){ return; }
        menu_open = true;
        $("body").addClass("menu-open header-hide");
        // save position when click to .menu-opener
        scrollTopWhenOpenMenu = $("body").scrollTop();
    });
    $(".menu-closer").on("click", function(){
        if(window.innerWidth >= BREAK_POINT[2]){ return;}
        // load position
        $("body").removeClass("menu-open").scrollTop(scrollTopWhenOpenMenu);
        menu_open = false;
        menu_open_permit = false;
        setTimeout(function(){
            menu_open_permit = true;
        },1000);
    });
    $("#menu figure figcaption a").on("click", function(){
        if (window.innerWidth >= BREAK_POINT[2]) return;
        $("body").removeClass("menu-open");
        menu_open = false;
        menu_open_permit = false;
        setTimeout(function(){
            menu_open_permit = true;
        },1000);
    });

    // loader hide
    var wait = 100;
    setTimeout(function(){
        $("#loader").addClass("loaded");
    },wait);
    wait += 2000;
    setTimeout(function(){
        $("#loader").addClass("hide-rose");
    },wait);
    wait += 600;
    setTimeout(function(){
        $("#loader").addClass("hide");
        // destroy p5 vars
        setup = null;
        draw = null;
        set_canvas_size = null;
    },wait);


    // to-top auto scroll
    $("#to-top").on("click",function(e){
        $("html, body").stop().animate({scrollTop: 0}, 1500, "swing");
        e.preventDefault();
    });

   // 発起人 open
   $("#hokki").on("click", function(){
       $(this).next().toggleClass("open");
   });

   // sitemap mobile about & activity open & close
   $("#sitemap-about").on("click", function(){
       $(this).toggleClass("open");
       $(".sitemap-about-item").toggleClass("open");
   });
   $("#sitemap-activity").on("click", function(){
       $(this).toggleClass("open");
       $(".sitemap-activity-item").toggleClass("open");
   });

});

$(window).on("load resize",function(){

    // "body" has class "home" ?
    var homeImgHeight;
    if($("body").hasClass("home")){
        homeImgHeight = $("section#focus-roseday-large-img .section-head .section-head-img").height();
    }
    // section-img height set
    $(".section-head-title").each(function(i){
        var $h = $(this).outerHeight();
        var $c = $(this).next().hasClass("section-head-img") ? $(this).next() : null;
        if(!$c) return;
        if(window.innerWidth < BREAK_POINT[0]){
            $c.height($h*2 <= 340 ? $h*2 : 340);
            homeImgHeight ? $c.height(homeImgHeight) : false;
        }else{
            $c.height($h + 12);
        }
        if(window.innerWidth < BREAK_POINT[1]) return;
        if(i%2 != 0) return;
        $(this).next().css({"order": 1});
    });


    // fumie resize
    if(window.innerWidth >= BREAK_POINT[0]){
        $("section").each(function(){
            if($(this).attr("id") != "message01") return;
            var $fumie = $(this).children(".section-head").children(".section-head-img");
            var fumieWidth = $fumie.height() * 1.3;
            $fumie.css({flex: "0 0 "+fumieWidth+"px"});
            $fumie.prev().css({flex: "0 0 calc(100% - 19px - "+fumieWidth+"px)"});
        });
    }

    // AOS delay set
    if(window.innerWidth >= BREAK_POINT[1]){
        $(".section-head-img").attr("data-aos-offset", 100);
        $(".section-body").attr("data-aos-offset", 100);
    }else{
        $(".section-head-img").removeAttr("data-aos-offset");
        $(".section-body").removeAttr("data-aos-offset");
    }
});

$(window).on("load resize scroll",function(){
    if(window.innerWidth >= BREAK_POINT[2]){ return; }
    // header show hide
    if($(window).scrollTop() <= 10){
        $("body").addClass("scroll-top");
    }else{
        $("body").removeClass("scroll-top");
    }
    // menu-btn rose spin
    var scale = 1 + -0.3 * Math.sin($(window).scrollTop());
    var rotate = 360 * Math.sin($(window).scrollTop());
    $("#rose-icon").css({"transform": "rotate("+rotate+"deg) scale("+scale+")"});
});
