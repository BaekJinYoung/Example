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
                <a href="{{route("client.RnD_2")}}" class="subpage-top-nav-item">
                    Publications
                </a>
            </div>

            <h2 class="subpage-top-title">
                Publications
            </h2>
        </div>

        <div class="subpage-tab-wrap col-group">
            <a href="{{route("client.RnD_1")}}" class="subpage-tab">
                R&D Capabilities
            </a>
            <a href="{{route("client.RnD_2")}}" class="subpage-tab active">
                Publications
            </a>
            <a href="{{route("client.RnD_3")}}" class="subpage-tab">
                Patents & Certifications
            </a>
        </div>

        <div class="subpage-wrap">
            <div class="container w1440">
                <div class="subpage-title-wrap center bt row-group">
                    <h3 class="title">
                        Publications
                    </h3>
                </div>

                <div class="thesis-list row-group">
                    <div class="thesis-item">
                        <div class="thesis-title-wrap col-group">
                            <p class="thesis-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. </p>
                            <i class="xi-angle-down thesis-more-btn"></i>
                        </div>
                        <div class="thesis-detail-wrap">
                            <p class="thesis-txt">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="thesis-detail-list row-group">
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Authors :
                                    </p>
                                    <p class="item-txt">
                                        NOVA Kim
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Publisher :
                                    </p>
                                    <p class="item-txt">
                                        2023 SEP 09;18(6):1234.
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Published Date :
                                    </p>
                                    <p class="item-txt">
                                        2018-09-18
                                    </p>
                                </div>
                            </div>
                            <a href="" class="thesis-btn col-group">
                                <i class="xi-link icon"></i>
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="thesis-item">
                        <div class="thesis-title-wrap col-group">
                            <p class="thesis-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. </p>
                            <i class="xi-angle-down thesis-more-btn"></i>
                        </div>
                        <div class="thesis-detail-wrap">
                            <p class="thesis-txt">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="thesis-detail-list row-group">
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Authors :
                                    </p>
                                    <p class="item-txt">
                                        NOVA Kim
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Publisher :
                                    </p>
                                    <p class="item-txt">
                                        2023 SEP 09;18(6):1234.
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Published Date :
                                    </p>
                                    <p class="item-txt">
                                        2018-09-18
                                    </p>
                                </div>
                            </div>
                            <a href="" class="thesis-btn col-group">
                                <i class="xi-link icon"></i>
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="thesis-item">
                        <div class="thesis-title-wrap col-group">
                            <p class="thesis-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. </p>
                            <i class="xi-angle-down thesis-more-btn"></i>
                        </div>
                        <div class="thesis-detail-wrap">
                            <p class="thesis-txt">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="thesis-detail-list row-group">
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Authors :
                                    </p>
                                    <p class="item-txt">
                                        NOVA Kim
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Publisher :
                                    </p>
                                    <p class="item-txt">
                                        2023 SEP 09;18(6):1234.
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Published Date :
                                    </p>
                                    <p class="item-txt">
                                        2018-09-18
                                    </p>
                                </div>
                            </div>
                            <a href="" class="thesis-btn col-group">
                                <i class="xi-link icon"></i>
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="thesis-item">
                        <div class="thesis-title-wrap col-group">
                            <p class="thesis-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. </p>
                            <i class="xi-angle-down thesis-more-btn"></i>
                        </div>
                        <div class="thesis-detail-wrap">
                            <p class="thesis-txt">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="thesis-detail-list row-group">
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Authors :
                                    </p>
                                    <p class="item-txt">
                                        NOVA Kim
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Publisher :
                                    </p>
                                    <p class="item-txt">
                                        2023 SEP 09;18(6):1234.
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Published Date :
                                    </p>
                                    <p class="item-txt">
                                        2018-09-18
                                    </p>
                                </div>
                            </div>
                            <a href="" class="thesis-btn col-group">
                                <i class="xi-link icon"></i>
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="thesis-item">
                        <div class="thesis-title-wrap col-group">
                            <p class="thesis-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. </p>
                            <i class="xi-angle-down thesis-more-btn"></i>
                        </div>
                        <div class="thesis-detail-wrap">
                            <p class="thesis-txt">ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="thesis-detail-list row-group">
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Authors :
                                    </p>
                                    <p class="item-txt">
                                        NOVA Kim
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Publisher :
                                    </p>
                                    <p class="item-txt">
                                        2023 SEP 09;18(6):1234.
                                    </p>
                                </div>
                                <div class="thesis-detail-item col-group">
                                    <p class="item-title">
                                        Published Date :
                                    </p>
                                    <p class="item-txt">
                                        2018-09-18
                                    </p>
                                </div>
                            </div>
                            <a href="" class="thesis-btn col-group">
                                <i class="xi-link icon"></i>
                                Read More
                            </a>
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
    $('.thesis-title-wrap').click(function () {
        $(this).closest('.thesis-item').toggleClass('active');
        $(this).next('.thesis-detail-wrap').slideToggle(300);
    });


</script>

</html>
