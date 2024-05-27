<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0" />

    <title>NOVA</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link href="https://font.elice.io/EliceDigitalBaeum.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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

        <div class="subpage about">

            <div class="subpage-top-wrap">
                <div class="subpage-top-nav col-group">
                    <a href="{{route("client.index")}}" class="subpage-top-nav-item">
                        <i class="xi-home icon"></i>
                    </a>
                    <i class="xi-angle-right-min icon"></i>
                    <a href="{{route("client.about")}}" class="subpage-top-nav-item">
                        COMPANY
                    </a>
                    <i class="xi-angle-right-min icon"></i>
                    <a href="{{route("client.about")}}" class="subpage-top-nav-item">
                        About NOVA
                    </a>
                </div>

                <h2 class="subpage-top-title">
                    About NOVA
                </h2>
            </div>

            <div class="subpage-tab-wrap col-group">
                <a href="{{route("client.about")}}" class="subpage-tab active">
                    About NOVA
                </a>
                <a href="{{route("client.greeting")}}" class="subpage-tab">
                    Greeting
                </a>
            </div>

            <div class="subpage-wrap">
                <div class="section">
                    <div class="subpage-title-wrap center row-group">
                        <p class="sub-title">
                            ABOUT NOVA
                        </p>
                        <h3 class="title">
                            Smart Farm Solution through Core <br>
                            Digital Transformation(DX) Technologies <br>
                            <span class="color">NOVA</span> is contributing to innovative technological <br>
                            advancements in livestock farming.
                        </h3>
                        <p class="txt">
                            NOVA is revolutionizing the livestock industry by incorporating advanced Digital Transformation(DX) technologies. <br>
                            We are excited about how our technology will revolutionize the livestock industry.
                        </p>
                    </div>
                    <div class="banner-txt">
                        <p>
                            By utilizing technologies such as <span class="color">artificial intelligence, cloud, and digital twins,</span> <br>
                            and providing optimal solutions in the livestock field, <br>
                            We aim to improve the efficiency and competitiveness of the livestock industry.
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div class="subpage-title-wrap center row-group">
                        <p class="sub-title">
                            VISION
                        </p>
                        <h3 class="title">
                            <span class="color">NOVA</span> , A Company Adding Value to Agriculture
                        </h3>
                        <p class="txt">
                            NOVA plans to offer solutions in agro-biotechnology and healthcare, <br>
                            starting with a smart livestock weight prediction system.
                        </p>
                    </div>

                    <div class="vision-step-list col-group">
                        <div class="vision-step-item">
                            <div class="txt-group row-group">
                                <p class="title color">
                                    STEP 1
                                </p>
                                <img src="/images/vision_step_01.svg" alt="" class="img">
                                <p class="txt">
                                    The commercialization <br>
                                    of the NOVA system
                                </p>
                            </div>
                        </div>
                        <div class="vision-step-item">
                            <div class="txt-group row-group">
                                <p class="title color">
                                    STEP 2
                                </p>
                                <img src="/images/vision_step_02.svg" alt="" class="img">
                                <p class="txt">
                                    Expanding into the fields of <br>
                                    Argo-biotechnology <br>
                                    and healthcare
                                </p>
                            </div>
                        </div>
                        <div class="vision-step-item">
                            <div class="txt-group row-group">
                                <p class="title color">
                                    STEP 3
                                </p>
                                <img src="/images/vision_step_03.svg" alt="" class="img">
                                <p class="txt">
                                    Growth for Argo in Biotechnology <br>
                                    and Healthcare Company
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="subpage-title-wrap center row-group">
                        <p class="sub-title">
                            CI
                        </p>
                        <h3 class="title">
                            NOVA IDENTITY
                        </h3>
                        <p class="txt">
                            NOVA's logo is a modified combination of the letters 'N' and 'V', representing the company's dedication to technology research. <br>
                            These two letters symbolize NOVA's values and mission to innovate the livestock industry.  <br>
                            The color orange is used in the logo to convey the company's energetic and  <br>
                            innovative approach to research and development, reflecting a dynamic and progressive corporate image.
                        </p>
                    </div>
                    <div class="container w1440">
                        <img src="/images/about_ci.png" alt="">
                    </div>
                </div>
                <div class="section">
                    <div class="subpage-title-wrap center row-group">
                        <p class="sub-title">
                            HISTORY
                        </p>
                        <h3 class="title">
                            We are constantly striving to have a positive impact <br>
                            on the industry
                        </h3>
                    </div>

                    <div class="container w1440">
                        <div class="about-history">
                            <div class="about-history-tab-list col-group">
                                <div class="about-history-tab active" data-tab="his_2024">
                                    2024
                                </div>
                                <div class="about-history-tab" data-tab="his_2023">
                                    2023
                                </div>
                                <div class="about-history-tab" data-tab="his_2022">
                                    2022
                                </div>
                            </div>

                            <div class="about-history-container active" id="his_2024">
                                <div class="about-history-wrap col-group">
                                    <div class="img-box">
                                        <img src="/images/mainbanner.jpg" alt="">
                                    </div>
                                    <div class="about-history-group row-group">
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2024.01
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    Consumer Electronics Show(CES) in Las Vegas 박람회 참가
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2024.01
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    스마트팜다부처패키지사업(농촌진흥청) 4차년도 수행
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-history-container" id="his_2023">
                                <div class="about-history-wrap col-group">
                                    <div class="img-box">
                                        <img src="/images/mainbanner.jpg" alt="">
                                    </div>
                                    <div class="about-history-group row-group">
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.11
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    '딥러닝 컴퓨터비전 기반 가축의 체중을 측정하기 위한 시스템 및 그 방법' PCT 출원
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.10
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    '3D 모양 색인을 활용한 달걀 성별 감지 방법 및 장치' 특허 출원
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.07
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    Korea Innovation Center Washington DC(KIC DC) Tech Frontier 우수탐색팀 수상
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.06
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    European Symposium on Poultry Nutrition(ESPN) 참가
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.05
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    실험실특화 창업중심대학사업(창업진흥원) 선정
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.04
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    4월 공공기술기반 시장연계 창업탐색 지원사업 선정
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.03
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    Consumer Electronics Show(CES) 시제품 제작지원사업 선정
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2023.01
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    스마트팜다부처패키지사업(농촌진흥청) 3차년도 수행
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-history-container" id="his_2022">
                                <div class="about-history-wrap col-group">
                                    <div class="img-box">
                                        <img src="/images/mainbanner.jpg" alt="">
                                    </div>
                                    <div class="about-history-group row-group">
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2022.12
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    주식회사 노바 법인 설립
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2022.11
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    '딥러닝 컴퓨터비전 기반 가축의 체중을 측정하기 위한 시스템 및 그 방법' 특허 출원
                                                </p>
                                                <p class="txt">
                                                    '비접촉방식 가금 평균체중 측정 장치 및 방법' 특허 출원
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2022.08
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    '케이지별 산란 수 측정시스템' 특허 출원
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2022.05
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    실험실 특화형 창업선도대학사업(교육부·과기정통부) 선정
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-history-item col-group">
                                            <p class="month">
                                                2022.01
                                            </p>
                                            <div class="txt-group row-group">
                                                <p class="txt">
                                                    스마트팜다부처패키지사업(농촌진흥청) 2차년도 수행
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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

    //tab
    $('.about-history-tab').click(function(){
        $('.about-history-tab').removeClass('active');
        $(this).addClass('active');

        data_tab = $(this).attr('data-tab');
        $('.about-history-container').removeClass('active');
        $('.about-history-container#'+data_tab).addClass('active');
    });


</script>

</html>
