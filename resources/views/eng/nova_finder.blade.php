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

    <div class="subpage product">

        <div class="subpage-top-wrap">
            <div class="subpage-top-nav col-group">
                <a href="{{route("client.index")}}" class="subpage-top-nav-item">
                    <i class="xi-home icon"></i>
                </a>
                <i class="xi-angle-right-min icon"></i>
                <a href="{{route("client.nova_vision")}}" class="subpage-top-nav-item">
                    PRODUCT
                </a>
                <i class="xi-angle-right-min icon"></i>
                <a href="{{route("client.nova_finder")}}" class="subpage-top-nav-item">
                    NOVA FINDER
                </a>
            </div>

            <h2 class="subpage-top-title">
                NOVA FINDER
            </h2>
        </div>

        <div class="subpage-tab-wrap col-group">
            <a href="{{route("client.nova_vision")}}" class="subpage-tab">
                NOVA VISION
            </a>
            <a href="{{route("client.nova_finder")}}" class="subpage-tab active">
                NOVA FINDER
            </a>
        </div>

        <div class="subpage-wrap">
            <div class="section section-top">
                <div class="subpage-title-wrap center row-group">
                    <img src="/images/nova_products_logo.svg" alt="" class="logo">
                    <h3 class="title">
                        Automatic Egg Laying Count System <br>
                        NOVA FINDER
                    </h3>
                    <p class="txt">
                        NOVA FINDER is an automated system that detects non-laying hens and mortality by measuring egg
                        production per cage.
                    </p>
                </div>

                <div class="section-top-wrap">
                    <div class="container w1440">
                        <img src="/images/nova_finder_top.png" alt="" class="img">
                        <div class="txt-wrap row-group">
                            <div class="txt-group row-group">
                                <p class="title">
                                    AI Egg Laying Counting
                                </p>
                                <p class="txt">
                                    Deep learning model to calculate the production <br>
                                    in each cage
                                </p>
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    RGB Camera for Egg Detection
                                </p>
                                <p class="txt">
                                    2D RGB camera for detecting eggs <br>
                                    and checking egg conditions
                                </p>
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    Monitoring for <br class="mb"> Non-Laying Detection
                                </p>
                                <p class="txt">
                                    Monitoring the location of non-laying hens <br>
                                    or dead poultry
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container w1440">
                    <div class="section-top-txt-wrap">
                        <div class="section-top-txt-group row-group">
                            <p class="section-top-bg-txt">
                                FINDER
                            </p>
                            <div class="section-top-txt">
                                <strong>Intelligent Smart Farm Based on the Detection <br>
                                    of Non-laying Hens and Dead Poultry</strong>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/images/nova_finder_top_02_eng.png" alt="" class="pc">
                            <img src="/images/nova_finder_top_02_m_eng.png" alt="" class="mb">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container w1440">
                    <div class="subpage-title-wrap center bt main row-group">
                        <p class="sub-title">
                            SYSTEM
                        </p>
                        <h3 class="title">
                            NOVA FINDER SYSTEM
                        </h3>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">01</p>
                            <h3 class="title">
                                AI Algorithm for Counting Egg Laying
                            </h3>
                            <p class="txt">
                                <i class="xi-check-circle-o icon"></i>
                                The deep learning algorithm accurately detects and identifies which numbered cage
                                hundreds of eggs came from.
                            </p>
                        </div>

                        <div class="sub-section-container row-group border">
                            <div class="sub-section-wrap">
                                <p class="sub-section-title">
                                    <i class="xi-plus-square icon"></i>
                                    Video recording to measure the quantity of eggs laid
                                </p>
                                <div class="img-box">
                                    <img src="/images/nova_finder_sec_01_01.png" alt="">
                                </div>
                            </div>

                            <div class="sub-section-container col-group">
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        Speed of the egg collection belt
                                    </p>
                                    <img src="/images/nova_finder_sec_01_02.png" alt="">
                                    <p class="sub-section-txt">
                                        Belt detection
                                    </p>
                                </div>
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        Egg-camera distance
                                    </p>
                                    <img src="/images/nova_finder_sec_01_03.png" alt="">
                                    <p class="sub-section-txt">
                                        Egg detection
                                    </p>
                                </div>
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        Egg-laying quantity per cage
                                    </p>
                                    <img src="/images/nova_finder_sec_01_04.png" alt="">
                                    <p class="sub-section-txt">
                                        Egg count per cage
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">02</p>
                            <h3 class="title">
                                Monitoring System for Detection of Non-laying and Dead Hens
                            </h3>
                            <p class="txt">
                                <i class="xi-check-circle-o icon"></i>
                                The early detection of non-laying and dead hens results in lower labor <br>
                                and feed costs and higher productivity, providing multiple benefits for farm management.
                            </p>
                        </div>
                        <div class="sub-section-container col-group border">
                            <div class="img-box">
                                <img src="/images/nova_finder_sec_02_01.png" alt="">
                            </div>
                            <div class="img-box">
                                <img src="/images/nova_finder_sec_02_02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        @include('eng.components.footer')
    </div>
    <div id="top_menu">
        @include('client.components.top_menu')
    </div>

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

</html>
