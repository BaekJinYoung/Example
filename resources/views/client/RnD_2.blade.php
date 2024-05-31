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
                    논문현황
                </a>
            </div>

            <h2 class="subpage-top-title">
                논문현황
            </h2>
        </div>

        <div class="subpage-tab-wrap col-group">
            <a href="{{route("client.RnD_1")}}" class="subpage-tab">
                R&D역량
            </a>
            <a href="{{route("client.RnD_2")}}" class="subpage-tab active">
                논문현황
            </a>
            <a href="{{route("client.RnD_3")}}" class="subpage-tab">
                특허 및 인증현황
            </a>
        </div>

        <div class="subpage-wrap">
            <div class="container w1440">
                <div class="subpage-title-wrap center bt row-group">
                    <h3 class="title">
                        논문현황
                    </h3>
                </div>

                    <div class="thesis-list row-group">
                        @foreach($notices as $key => $notice)
                        <div class="thesis-item">
                            <div class="thesis-title-wrap col-group">
                                <p class="thesis-title">{{$notice->title}}</p>
                                <i class="xi-angle-down thesis-more-btn"></i>
                            </div>
                            <div class="thesis-detail-wrap">
                                <p class="thesis-txt">{{$notice->summary}}</p>
                                <div class="thesis-detail-list row-group">
                                    <div class="thesis-detail-item col-group">
                                        <p class="item-title">
                                            저자 :
                                        </p>
                                        <p class="item-txt">{{$notice->writer}}</p>
                                    </div>
                                    <div class="thesis-detail-item col-group">
                                        <p class="item-title">
                                            발행정보 :
                                        </p>
                                        <p class="item-txt">{{$notice->information}}</p>
                                    </div>
                                    <div class="thesis-detail-item col-group">
                                        <p class="item-title">
                                            발행날짜 :
                                        </p>
                                        <p class="item-txt">{{date('Y-m-d', strtotime($notice->date))}}</p>
                                    </div>
                                </div>
                                <a href="{{$notice->url}}" class="thesis-btn col-group">
                                    <i class="xi-link icon"></i>
                                    논문보기
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                <div id="pagination"></div>
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
    $('.thesis-title-wrap').click(function () {
        $(this).closest('.thesis-item').toggleClass('active');
        $(this).next('.thesis-detail-wrap').slideToggle(300);
    });


</script>

</html>
