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

    <div id="header" class="white">@include('client.components.header')</div>

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
                        산란수 자동 측정 시스템 <br>
                        NOVA FINDER
                    </h3>
                    <p class="txt">
                        케이지 별 산란수를 측정하여 과산계 및 폐사체를 자동으로 검출하는 시스템입니다.
                    </p>
                </div>

                <div class="section-top-wrap">
                    <div class="container w1440">
                        <img src="/images/nova_finder_top.png" alt="" class="img">
                        <div class="txt-wrap row-group">
                            <div class="txt-group row-group">
                                <p class="title">
                                    산란수 측정 AI 알고리즘
                                </p>
                                <p class="txt">
                                    케이지 별 달걀 생산량 산출 딥러닝 알고리즘
                                </p>
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    달걀 검출을 위한 RGB 카메라
                                </p>
                                <p class="txt">
                                    2D 영상카메라를 활용한 <br>
                                    케이지 별 달걀 검출 및 달걀 상태 체크
                                </p>
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    과산계 검출 모니터링 시스템
                                </p>
                                <p class="txt">
                                    케이지 별 과산계 또는 폐사체 모니터링
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
                                <strong>과산계 및 폐사체 검출을 통한 <br class="mb">스마트 농장 관리 실현</strong>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/images/nova_finder_top_02.png" alt="" class="pc">
                            <img src="/images/nova_finder_top_02_m.png" alt="" class="mb">
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
                            NOVA FINDER: 시스템 체계
                        </h3>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">01</p>
                            <h3 class="title">
                                산란수 측정 AI 알고리즘
                            </h3>
                            <p class="txt">
                                <i class="xi-check-circle-o icon"></i>
                                산란수 측정 딥러닝 알고리즘은 수백개의 달걀을 검출하고, 검출된 달걀이 몇 번째 케이지에서 생산되었는지를 정확하게 계산합니다.
                            </p>
                        </div>

                        <div class="sub-section-container row-group border">
                            <div class="sub-section-wrap">
                                <p class="sub-section-title">
                                    <i class="xi-plus-square icon"></i>
                                    산란수 측정을 위한 영상촬영
                                </p>
                                <div class="img-box">
                                    <img src="/images/nova_finder_sec_01_01.png" alt="">
                                </div>
                            </div>

                            <div class="sub-section-container col-group">
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        집란벨트 속도 계산
                                    </p>
                                    <img src="/images/nova_finder_sec_01_02.png" alt="">
                                    <p class="sub-section-txt">
                                        띠 검출
                                    </p>
                                </div>
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        달걀-카메라 거리 계산
                                    </p>
                                    <img src="/images/nova_finder_sec_01_03.png" alt="">
                                    <p class="sub-section-txt">
                                        달걀 검출
                                    </p>
                                </div>
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        케이지 별 산란수 계산
                                    </p>
                                    <img src="/images/nova_finder_sec_01_04.png" alt="">
                                    <p class="sub-section-txt">
                                        케이지별 달걀 수
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">02</p>
                            <h3 class="title">
                                과산계 검출 <br class="mb"> 모니터링 시스템
                            </h3>
                            <p class="txt">
                                <i class="xi-check-circle-o icon"></i>
                                과산계 및 폐사체를 조기 검출할 수 있어 노동력 및 사료비를 절감하고, 생산성을 향상시키는 등 농장 운영에 다양한 이점을 제공합니다.
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

    <div id="footer">@include('client.components.footer')</div>
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

</html>
