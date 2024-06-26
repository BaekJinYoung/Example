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
                <a href="{{route("client.nova_vision")}}" class="subpage-top-nav-item">
                    NOVA VISION
                </a>
            </div>

            <h2 class="subpage-top-title">
                NOVA VISION
            </h2>
        </div>

        <div class="subpage-tab-wrap col-group">
            <a href="{{route("client.nova_vision")}}" class="subpage-tab active">
                NOVA VISION
            </a>
            <a href="{{route("client.nova_finder")}}" class="subpage-tab">
                NOVA FINDER
            </a>
        </div>

        <div class="subpage-wrap">
            <div class="section section-top">
                <div class="subpage-title-wrap center row-group">
                    <img src="/images/nova_products_logo.svg" alt="" class="logo">
                    <h3 class="title">
                        스마트 축산 체중예측 시스템 <br>
                        NOVA VISION
                    </h3>
                    <p class="txt">
                        3D 컴퓨터비전 기반 인공지능 기술로 <br class="mb">가축 체중을 비접촉으로 측정하여 <br class="mb">생산비와 노동력을 줄이며 생산력을 높입니다.
                    </p>
                </div>

                <div class="section-top-wrap">
                    <div class="container w1440">
                        <img src="/images/nova_vision_top.png" alt="" class="img">
                        <div class="txt-wrap row-group">
                            <div class="txt-group row-group">
                                <p class="title">
                                    AI 체중예측 알고리즘
                                </p>
                                <p class="txt">
                                    가축의 체형정보를 정확하게 계산하고 <br>
                                    개체체중을 예측할 수 있는 딥러닝 알고리즘
                                </p>
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    3D 스트레오비전 카메라
                                </p>
                                <p class="txt">
                                    3D 컴퓨터비전 기반 인공지능 기술로 <br>
                                    가축의 3차원 체형정보를 정밀하게 추출
                                </p>
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    증체량 모니터링 시스템
                                </p>
                                <p class="txt">
                                    농장주는 가축의 성장을 실시간으로 모니터링하며 <br>
                                    정밀하게 농장을 관리
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container w1440">
                    <div class="section-top-txt-wrap">
                        <div class="section-top-txt-group row-group">
                            <p class="section-top-bg-txt">
                                VISION
                            </p>
                            <div class="section-top-txt">
                                <strong>체중측정</strong>을 바탕으로 스마트 농장 관리 실현
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/images/nova_vision_top_02.png" alt="" class="pc">
                            <img src="/images/nova_vision_top_02_m.png" alt="" class="mb">
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
                            NOVA VISION: 시스템 체계
                        </h3>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">01</p>
                            <h3 class="title">
                                3D 스트레오비전 카메라
                            </h3>
                            <p class="txt">
                                <i class="xi-check-circle-o icon"></i>
                                NOVA VISION 카메라는 3D 스트레오비전 기술이 탑재되어 가축의 체형 (3D 표면적, 체장, 흉폭, 후폭 등) 을 매우 정확하게 측정합니다.
                            </p>
                        </div>

                        <div class="sub-section-wrap">
                            <img src="/images/nova_vision_sec_01.png" alt="">
                        </div>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">02</p>
                            <h3 class="title">
                                AI 체중예측 알고리즘
                            </h3>
                            <div class="txt-group row-group">
                                <p class="txt">
                                    <i class="xi-check-circle-o icon"></i>
                                    체중예측 딥러닝 네트워크는 가축의 체형정보로부터 개별(양돈)체중 및 그룹(닭)의 평균 체중을 매우 정확하게 예측합니다.
                                </p>
                            </div>
                        </div>

                        <div class="sub-section-container row-group border">
                            <div class="sub-section-wrap">
                                <p class="sub-section-title">
                                    <i class="xi-plus-square icon"></i>
                                    Deep Neural Network for Weight Prediction
                                </p>
                                <div class="img-box">
                                    <img src="/images/nova_vision_sec_02_01.png" alt="">
                                </div>
                            </div>
                            <div class="sub-section-wrap">
                                <p class="sub-section-title">
                                    <i class="xi-plus-square icon"></i>
                                    체중 예측 결과
                                </p>
                                <div class="img-group col-group">
                                    <div class="img-box">
                                        <img src="/images/nova_vision_sec_02_02.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="/images/nova_vision_sec_02_03.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sub-section">
                        <div class="subpage-title-wrap center sub row-group">
                            <p class="num color">03</p>
                            <h3 class="title">
                                증체량 모니터링 시스템
                            </h3>
                            <p class="txt">
                                <i class="xi-check-circle-o icon"></i>
                                농장주는 가축의 성장을 실시간으로 모니터링하며, 농장을 정밀하게 관리할 수 있습니다.
                            </p>
                        </div>

                        <div class="sub-section-container col-group border">
                            <div class="img-box">
                                <p class="sub-section-title">
                                    <i class="xi-plus-square icon"></i>
                                    실시간 모니터링
                                </p>
                                <img src="/images/nova_vision_sec_03_01.png" alt="">
                            </div>
                            <div class="img-box">
                                <p class="sub-section-title">
                                    <i class="xi-plus-square icon"></i>
                                    증체량 분석
                                </p>
                                <img src="/images/nova_vision_sec_03_02.png" alt="">
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
