<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0"/>

    <title>NOVA</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link href="https://font.elice.io/EliceDigitalBaeum.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- aos -->
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <!-- //chart -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> <!-- swiper -->
    <script src="/js/jquery.fullPage.js"></script> <!-- fullpage -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- aos -->
    <script src="/js/script.js"></script>
</head>


<body>
<div id="wrap">

    <div id="header" class="white">
        @include('eng.components.header')
    </div>

    <div class="subpage contact">

        <div class="subpage-top-wrap">
            <div class="subpage-top-nav col-group">
                <a href="{{route("client.index")}}" class="subpage-top-nav-item">
                    <i class="xi-home icon"></i>
                </a>
                <i class="xi-angle-right-min icon"></i>
                <a href="{{route("client.contact")}}" class="subpage-top-nav-item">
                    CONTACT
                </a>
            </div>

            <h2 class="subpage-top-title">
                CONTACT
            </h2>
        </div>

        <div class="container w1440">
            <div class="contact-wrap">
                <h2 class="contact-title col-group">
                    <img src="/images/icon_contact.svg" alt="">
                    NOVA Inc.
                </h2>

                <div class="contact-list row-group">
                    <div class="contact-item col-group">
                        <p class="item-title">
                            Address
                        </p>
                        <p class="item-txt">
                            Engineering Building 4, Room 4, <br>
                            567 Baekje-daero, Deokjin-gu, Jeonju-si, Jeollabuk-do, Republic of Korea
                        </p>
                    </div>
                    <div class="contact-item col-group">
                        <p class="item-title">
                            Contact
                        </p>
                        <p class="item-txt">
                            +82-63-270-2372
                        </p>
                    </div>
                    <div class="contact-item col-group">
                        <p class="item-title">
                            Email
                        </p>
                        <p class="item-txt">
                            hjun@jbnu.edu
                        </p>
                    </div>
                </div>

                <div id="daumRoughmapContainer1704690768907"
                     class="root_daum_roughmap root_daum_roughmap_landing"></div>
            </div>
        </div>

    </div>

    <div id="footer">@include('eng.components.footer')</div>
    <div id="top_menu">@include('client.components.top_menu')</div>

</div>
</body>


<script>

    //스크롤시 헤더 변화
    $(document).scroll(function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > 0) {
            $('#header').addClass('active');
        } else {
            $('#header').removeClass('active');
        }
    });

</script>

<!-- * 카카오맵 - 지도퍼가기 -->
<script charset="UTF-8" class="daum_roughmap_loader_script"
        src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
<script charset="UTF-8">
    new daum.roughmap.Lander({
        "timestamp": "1704690768907",
        "key": "2hjyt",
    }).render();
</script>

</html>
