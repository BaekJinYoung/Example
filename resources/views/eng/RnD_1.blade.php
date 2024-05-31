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

    <div class="subpage rnd">

        <div class="subpage-top-wrap">
            <div class="subpage-top-nav col-group">
                <a href="{{route("client.index")}}" class="subpage-top-nav-item">
                    <i class="xi-home icon"></i>
                </a>
                <i class="xi-angle-right-min icon"></i>
                <a href="{{route("client.RnD_1")}}" class="subpage-top-nav-item">
                    R&D
                </a>
                <i class="xi-angle-right-min icon"></i>
                <a href="{{route("client.RnD_1")}}" class="subpage-top-nav-item">
                    R&D Capabilities
                </a>
            </div>

            <h2 class="subpage-top-title">
                R&D Capabilities
            </h2>
        </div>

        <div class="subpage-tab-wrap col-group">
            <a href="{{route("client.RnD_1")}}" class="subpage-tab active">
                R&D Capabilities
            </a>
            <a href="{{route("client.RnD_2")}}" class="subpage-tab">
                Publications
            </a>
            <a href="{{route("client.RnD_3")}}" class="subpage-tab">
                Patents & Certifications
            </a>
        </div>

        <div class="subpage-wrap">
            <div class="section">
                <div class="container w1440">
                    <div class="subpage-title-wrap center bt row-group">
                        <h3 class="title">
                            R&D Capabilities
                        </h3>
                        <p class="txt">
                            NOVA is developing cutting-edge technologies that will shape the future beyond the livestock
                            industry.
                        </p>
                    </div>

                    <img src="/images/rnd_capa.png" alt="" class="rnd-capa pc">
                    <img src="/images/rnd_capa_m.png" alt="" class="rnd-capa mb">
                </div>
            </div>
            <div class="section">
                <div class="container w1440 col-group">
                    <div class="left">
                        <div class="subpage-title-wrap row-group">
                            <p class="sub-title">
                                DEVELOPMENT STATUS
                            </p>
                            <h3 class="title">
                                Status of <br>
                                Development
                            </h3>
                        </div>

                        <div class="rnd-dev-tab-list row-group">
                            <div class="rnd-dev-tab active" data-tab="tab_1">
                                NOVA VISION
                            </div>
                            <div class="rnd-dev-tab" data-tab="tab_2">
                                NOVA FINDER
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="rnd-dev-wrap active" id="tab_1">
                            <div class="img-box">
                                <img src="/images/rnd_dev_01.jpg" alt="">
                            </div>
                            <div class="txt-wrap">
                                <p class="title">
                                    NOVA VISION
                                </p>
                                <p class="sub-title">
                                    Smart Livestock Weight Prediction System
                                </p>
                                <div class="txt-group row-group">
                                    <p class="txt">
                                        3D Object Detection & Segmentation
                                    </p>
                                    <p class="txt">
                                        3D Geometric Representation
                                    </p>
                                    <p class="txt">
                                        Multimodal Deep Neural Network
                                    </p>
                                </div>
                                <a href="{{route("client.nova_vision")}}" class="more-btn col-group">
                                    LEARN MORE
                                    <i class="xi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="rnd-dev-wrap" id="tab_2">
                            <div class="img-box">
                                <img src="/images/rnd_dev_02.jpg" alt="">
                            </div>
                            <div class="txt-wrap">
                                <p class="title">
                                    NOVA FINDER
                                </p>
                                <p class="sub-title">
                                    Automatic Egg Laying Count System
                                </p>
                                <div class="txt-group row-group">
                                    <p class="txt">
                                        Computer Vision Algorithm
                                    </p>
                                    <p class="txt">
                                        Real-time Object Detection & Tracking
                                    </p>
                                    <p class="txt">
                                        Monitoring System Development
                                    </p>
                                </div>
                                <a href="{{route("client.nova_finder")}}" class="more-btn col-group">
                                    LEARN MORE
                                    <i class="xi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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

    //tab
    $('.rnd-dev-tab').click(function () {
        $('.rnd-dev-tab').removeClass('active');
        $(this).addClass('active');

        data_tab = $(this).attr('data-tab');
        $('.rnd-dev-wrap').removeClass('active');
        $('.rnd-dev-wrap#' + data_tab).addClass('active');
    });


</script>

</html>
