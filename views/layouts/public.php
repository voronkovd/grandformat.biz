<?php
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <!--[if lt IE 7 ]>
    <html class="ie ie6" lang="en"> <![endif]-->
    <!--[if IE 7 ]>
    <html class="ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]>
    <html class="ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html lang="ru"> <!--<![endif]-->
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
        <title><?= Html::encode($this->title) ?></title>
        <?= Html::csrfMetaTags() ?>
        <script>!function () {
                function e(e, t, n) {
                    e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
                }

                function t(e) {
                    return window.localStorage && localStorage.font_css_cache && localStorage.font_css_cache_file === e
                }

                function n() {
                    if (window.localStorage && window.XMLHttpRequest)if (t(o))a(localStorage.font_css_cache); else {
                        var n = new XMLHttpRequest;
                        n.open("GET", o, !0), e(n, "load", function () {
                            4 === n.readyState && (a(n.responseText), localStorage.font_css_cache = n.responseText, localStorage.font_css_cache_file = o)
                        }), n.send()
                    } else {
                        var c = document.createElement("link");
                        c.href = o, c.rel = "stylesheet", c.type = "text/css", document.getElementsByTagName("head")[0].appendChild(c), document.cookie = "font_css_cache"
                    }
                }

                function a(e) {
                    var t = document.createElement("style");
                    t.innerHTML = e, document.getElementsByTagName("head")[0].appendChild(t)
                }

                var o = "_fonts.min.css";
                window.localStorage && localStorage.font_css_cache || document.cookie.indexOf("font_css_cache") > -1 ? n() : e(window, "load", n)
            }();</script>
        <noscript>
            <link rel="stylesheet" href="/_header.min.css?ver=0.1">
            <link rel="stylesheet" href="/_main.min.css?ver=0.3">
        </noscript>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap-grid.min.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
        <link rel="stylesheet" href="/libs/font-awesome-4.2.0/css/font-awesome.min.css">
        <script>
            var ms = document.createElement("link");
            ms.rel = "stylesheet";
            ms.href = "/libs/animate/animate.css";
            document.getElementsByTagName("head")[0].appendChild(ms);
            //Header Styles (compress & paste to header after release)
            var ms = document.createElement("link");
            ms.rel = "stylesheet";
            ms.href = "/_header.min.css";
            document.getElementsByTagName("head")[0].appendChild(ms);
            //User Styles + Media Queries
            var ms = document.createElement("link");
            ms.rel = "stylesheet";
            ms.href = "/_main.min.css";
            document.getElementsByTagName("head")[0].appendChild(ms);
        </script>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    <footer class="main_footer">
        <div class="container">
            <div class="footer-container">
            &#169; Copyright 2011 - <?= date('Y'); ?>
                </div>
        </div>
    </footer>
    <div class="hidden"></div>
    <!--[if lt IE 9]>
    <script src="/libs/html5shiv/es5-shim.min.js"></script>
    <script src="/libs/html5shiv/html5shiv.min.js"></script>
    <script src="/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="/libs/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Load Scripts -->
    <script>var scr = {
            "scripts": [
                {"src": "/libs/bootstrap/js/bootstrap.min.js", "async": false},
                {"src": "/libs/modernizr/modernizr.js", "async": false},
                {"src": "/libs/jquery/jquery-1.11.2.min.js", "async": false},
                {"src": "/libs/waypoints/waypoints.min.js", "async": false},
                {"src": "/libs/animate/animate-css.js", "async": false},
                {"src": "/libs/plugins-scroll/plugins-scroll.js", "async": false},
                {"src": "/js/common.js", "async": false}
            ]
        };
        !function (t, n, r) {
            "use strict";
            var c = function (t) {
                if ("[object Array]" !== Object.prototype.toString.call(t))return !1;
                for (var r = 0; r < t.length; r++) {
                    var c = n.createElement("script"), e = t[r];
                    c.src = e.src, c.async = e.async, n.body.appendChild(c)
                }
                return !0
            };
            t.addEventListener ? t.addEventListener("load", function () {
                c(r.scripts);
            }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
                c(r.scripts)
            }) : t.onload = function () {
                c(r.scripts)
            }
        }(window, document, scr);
    </script>
    <script>
        function scroll_send_section (){
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){
                location.href='#send-section';
            }else {
                var destination = $('#send-section').offset().top;
                $('body').animate({scrollTop: destination - 100}, 1100);
            }
            return false;
        }
    </script>
    </body>
    </html>
<?php $this->endPage() ?>
