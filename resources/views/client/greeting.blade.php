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

        <div id="header" class="white">@include('client.components.header')</div>

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
                    <a href="{{route("client.greeting")}}" class="subpage-top-nav-item">
                        인사말
                    </a>
                </div>

                <h2 class="subpage-top-title">
                    인사말
                </h2>
            </div>

            <div class="subpage-tab-wrap col-group">
                <a href="{{route("client.about")}}" class="subpage-tab">
                    회사소개
                </a>
                <a href="{{route("client.greeting")}}" class="subpage-tab active">
                    인사말
                </a>
            </div>

            <div class="subpage-wrap">
                <div class="section container w1440">
                    <div class="greeting-wrap">
                        <div class="subpage-title-wrap row-group">
                            <p class="sub-title">
                                CEO GREETING
                            </p>
                            <h3 class="title">
                                4차 산업혁명의 핵심기술을 활용한 스마트 사양관리 <br>
                                <strong>
                                    <span class="color">축산에 가치</span>를 더하는 기업 <span class="color">NOVA</span>
                                </strong>

                            </h3>
                            <p class="txt">
                                주식회사 노바 대표이사
                                <strong>
                                    전 형 민
                                </strong>
                            </p>
                        </div>
                        <img src="/images/ceo.png" alt="" class="ceo-img">
                    </div>

                    <div class="greeting-txt">
                        축산업계는 현재 많은 도전에 직면해 있으며, 동시에 새로운 기회도 맞이하고 있습니다. <br>
                        전통적인 방식만으로는 이러한 도전들을 극복하기 어려운 점을 인식하고, NOVA는 혁신적인 솔루션을 제공하고자 합니다. <br>
                        <br>
                        저희 NOVA는 인공지능, 클라우드, 디지털트윈 등의 디지털 트랜스포메이션(DX) 핵심기술 축산업의 미래를 재정립하고 있습니다. <br>
                        저희가 개발한 스마트 축산 기술은 농장 운영의 자동화를 가능하게 하여, 인력 부족 및 고령화 문제에 대한 지속 가능한 대안을 제공합니다. <br>
                        첨단 카메라 시스템과 정교한 데이터 분석을 통해, 가축의 건강과 성장을 실시간으로 모니터링하고 있습니다. <br>
                        이를 통해 농장주들은 보다 효율적이고 효과적인 관리를 할 수 있게 되었습니다. <br>
                        <br>
                        NOVA의 목표는 축산업의 단순한 자동화를 넘어서, 사료 효율성을 극대화하고, 출하 시점을 최적화하며, 질병 예방을 통해 동물 복지를 향상시키는 데 있습니다. <br>
                        저희의 혁신적인 기술을 통해, 농장주는 시간과 자원을 절약하고, 생산성을 높이며, 지속 가능한 축산을 실현할 수 있습니다. <br>
                        <br>
                        저희는 이러한 변화가 단순한 가능성이 아닌, 이미 현실이 되었다고 확신합니다. <br>
                        앞으로도 NOVA는 지속 가능하고 지능적인 축산을 위한 여정에 여러분과 함께 할 것입니다. <br>
                        저희 기술이 축산업의 미래를 어떻게 변화시킬지 기대하시기 바랍니다. <br>
                        축산업의 새로운 지평을 여는 NOVA의 스마트팜 기술에 대한 여러분의 지지와 선택이 미래를 만들어갑니다. <br>
                        <br>
                        감사합니다.
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

    //tab
    $('.about-history-tab').click(function () {
        $('.about-history-tab').removeClass('active');
        $(this).addClass('active');

        data_tab = $(this).attr('data-tab');
        $('.about-history-container').removeClass('active');
        $('.about-history-container#' + data_tab).addClass('active');
    });


</script>

</html>
