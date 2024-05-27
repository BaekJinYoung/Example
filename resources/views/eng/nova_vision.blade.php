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
                            Livestock Weight Prediction System <br>
                            NOVA VISION
                        </h3>
                        <p class="txt">
                            NOVA VISION uses AI-powered 3D computer vision to measure livestock weight non-invasively, <br>
                            reducing production costs and labor while increasing productivity.
                        </p>
                    </div>

                    <div class="section-top-wrap">
                        <div class="container w1440">
                            <img src="/images/nova_vision_top.png" alt="" class="img">
                            <div class="txt-wrap row-group">
                                <div class="txt-group row-group">
                                    <p class="title">
                                        AI Weight Prediction
                                    </p>
                                    <p class="txt">
                                        A deep learning model to predict weight
                                    </p>
                                </div>
                                <div class="txt-group row-group">
                                    <p class="title">
                                        3D Stereo Vision Camera
                                    </p>
                                    <p class="txt">
                                        Stereo vision technology to measure <br>
                                        the 3D body shape of livestock
                                    </p>
                                </div>
                                <div class="txt-group row-group">
                                    <p class="title">
                                        Monitoring for Weight Gain
                                    </p>
                                    <p class="txt">
                                        Real-time monitoring to track <br>
                                        the growth of livestock
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
                                    Intelligent Smart Farm Based on <strong>Weight Measurement</strong>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="/images/nova_vision_top_02_eng.png" alt="" class="pc">
                                <img src="/images/nova_vision_top_02_m_eng.png" alt="" class="mb">
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
                                NOVA VISION SYSTEM
                            </h3>
                        </div>

                        <div class="sub-section">
                            <div class="subpage-title-wrap center sub row-group">
                                <p class="num color">01</p>
                                <h3 class="title">
                                    3D Stereo Vision Camera
                                </h3>
                                <p class="txt">
                                    <i class="xi-check-circle-o icon"></i>
                                    The NOVA VISION camera, with stereo vision technology, accurately measures the 3D body shape of livestock.
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
                                    AI Weight Prediction
                                </h3>
                                <div class="txt-group row-group">
                                    <p class="txt">
                                        <i class="xi-check-circle-o icon"></i>
                                        A deep learning model is trained on 3D body shapes of livestock for weight prediction.Weight Prediction Results
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
                                        Results of weight prediction
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
                                    Monitoring for Weight Gain
                                </h3>
                                <p class="txt">
                                    <i class="xi-check-circle-o icon"></i>
                                    Farm owners can monitor the growth of livestock in real-time and precisely manage their farms.
                                </p>
                            </div>

                            <div class="sub-section-container col-group border">
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        Real-time monitoring
                                    </p>
                                    <img src="/images/nova_vision_sec_03_01.png" alt="">
                                </div>
                                <div class="img-box">
                                    <p class="sub-section-title">
                                        <i class="xi-plus-square icon"></i>
                                        Weight gain analysis
                                    </p>
                                    <img src="/images/nova_vision_sec_03_02.png" alt="">
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
