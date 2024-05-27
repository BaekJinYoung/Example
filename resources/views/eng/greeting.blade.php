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
                    <a href="{{route("client.greeting")}}" class="subpage-top-nav-item">
                        Greeting
                    </a>
                </div>

                <h2 class="subpage-top-title">
                    Greeting
                </h2>
            </div>

            <div class="subpage-tab-wrap col-group">
                <a href="{{route("client.about")}}" class="subpage-tab">
                    About NOVA
                </a>
                <a href="{{route("client.greeting")}}" class="subpage-tab active">
                    Greeting
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
                                Smart Farm Solution through Core Technologies <br>
                                of the Fourth Industrial Revolution. <br>
                                <strong>
                                    <span class="color">NOVA, A Company Adding Value <br>
                                        to Agriculture</span>
                                </strong>

                            </h3>
                            <p class="txt">
                                <strong>
                                    Hyungmin Jun
                                </strong>
                                CEO of NOVA Inc.
                            </p>
                        </div>
                        <img src="/images/ceo.png" alt="" class="ceo-img">
                    </div>

                    <div class="greeting-txt">
                        The livestock industry is facing several challenges, but also new opportunities. To overcome these challenges, NOVA provides innovative solutions. <br>
                        We redefine the future of livestock farming by utilizing digital transformation (DX) technologies such as artificial intelligence, cloud computing, and digital twins.<br>
                        Our smart livestock technology automates farm operations and provides a sustainable alternative to labor shortage and an aging workforce. <br>
                        We monitor livestock health and growth in real time using advanced camera systems and data analysis, allowing farm owners to manage more efficiently and effectively.<br>
                        <br>
                        Our goal is not only to automate livestock farming,<br>
                        but also to maximize feed efficiency, optimize shipment timing, and improve animal welfare through disease prevention.<br>
                        Our technology helps farm owners save time and resources, increase productivity, and achieve sustainable livestock farming.<br>
                        <br>
                        At NOVA, we are confident that the change is already a reality. <br>
                        We will continue to join you on the journey towards sustainable and intelligent livestock farming.<br>
                        Your support and choice for NOVA's smart farm technology will shape the future.<br>
                        <br>
                        Thank you.
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
