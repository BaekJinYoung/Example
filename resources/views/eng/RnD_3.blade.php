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

        <div class="subpage rnd thesis">

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
                    <a href="{{route("client.RnD_3")}}" class="subpage-top-nav-item">
                        Patents & Certifications
                    </a>
                </div>

                <h2 class="subpage-top-title">
                    Patents & Certifications
                </h2>
            </div>

            <div class="subpage-tab-wrap col-group">
                <a href="{{route("client.RnD_1")}}" class="subpage-tab">
                    R&D Capabilities
                </a>
                <a href="{{route("client.RnD_2")}}" class="subpage-tab">
                    Publications
                </a>
                <a href="{{route("client.RnD_3")}}" class="subpage-tab active">
                    Patents & Certifications
                </a>
            </div>

            <div class="subpage-wrap">
                <div class="container w1440">
                    <div class="subpage-title-wrap center bt row-group">
                        <h3 class="title">
                            Patents & Certifications
                        </h3>
                    </div>

                    <div class="patent-list col-group">
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                        <div class="patent-item">
                            <div class="img-container">
                                <img src="/images/patent_sample.jpg" alt="">
                            </div>
                            <div class="txt-group row-group">
                                <p class="title">
                                    NOVA VISION 특허증
                                </p>
                                <p class="txt">
                                    [제 10-1235678 호]
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="pagination"></div>
                </div>
            </div>
        </div>

        <div id="footer">
            @include('eng.components.footer')
        </div>
        <div id="top_menu">
            @include('client.components.top_menu')
        </div>

        <!-- 이미지 클릭시 나타나는 팝업 -->
        <div id="img_view_wrap">
            <div class="img-wrap">
                <div class="img-box">
                    <img src="" alt="" id="img_view">
                    <div class="close-btn">
                        <i class="xi-close-thin"></i>
                    </div>
                </div>
            </div>
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

    //이미지 클릭시 나타나는 팝업
    $('.patent-item').click(function () {
        var imgSrc = $(this).find('img').attr('src');
        $('#img_view').attr('src', imgSrc);

        $('#img_view_wrap').fadeIn();
    });

    $('#img_view_wrap').click(function (event) {
        if (!$(event.target).closest('#img_view').length) {
            $('#img_view_wrap').fadeOut();
        }
    });
</script>

</html>
