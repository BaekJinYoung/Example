<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0">

    <title>NOVA</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link href="https://font.elice.io/EliceDigitalBaeum.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- aos -->
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <!-- //chart -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css"> <!-- fullpage -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> <!-- swiper -->
    <script src="/js/jquery.fullPage.js"></script> <!-- fullpage -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- aos -->

    <style>
        .pop-parent {
            display: none;
        }
    </style>
</head>

<body>
<div id="wrap">

    <div id="header" class="white">
        @include('client.components.header')
    </div>

    <div class="index-wrap fullpage-wrapper" id="fullpage">
        <div class="section index-main fp-section active fp-table fp-completely">
            <div class="fp-tableCell">
                <div class="scroll-icon col-group">
                    <span>SCROLL</span>
                    <div class="scroll-icon-img">
                        <div class="scroll-icon-core"></div>
                    </div>
                </div>

                <div
                    class="swiper index-main-slide swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                    <div
                        class="swiper-pagination index-pagination swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet"></span>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach($banners as $key => $banner)
                            <div class="swiper-slide">
                                <img src="{{asset('storage/'.$banner->image)}}" alt="" class="bg-img pc">
                                <img src="{{asset('storage/'.$banner->mobile_image)}}" alt="" class="bg-img mb">
                                <div class="txt-box pc">
                                    <p class="sub-title">
                                        {{$banner->subtitle}}
                                    </p>
                                    <h2 class="title">
                                        {{$banner->title}}
                                    </h2>
                                    <p class="txt">
                                        {{$banner->details}}
                                    </p>
                                    <a href="{{route("client.about")}}" class="more-btn col-group">
                                        ttt
                                        <i class="xi-arrow-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="section index-product">
            <div class="swiper index-product-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="index-product-item col-group">
                            <div class="img-box">
                                <img src="/images/index_product_rotate_1.png" alt="" class="rotate-1">
                                <img src="/images/index_product_rotate_2.png" alt="" class="rotate-2">
                                <img src="/images/index_product_bg_1.png" alt="" class="bg-img">
                            </div>
                            <div class="index-product-group row-group">
                                <div class="index-title-wrap row-group">
                                    <p class="num">01</p>
                                    <p class="sub-title">
                                        된 거 맞아?
                                    </p>
                                    <h3 class="title">
                                        VISION
                                    </h3>
                                </div>

                                <div class="txt-box row-group">
                                    <p class="title">
                                        스마트 축산 체중 예측 시스템
                                    </p>
                                    <div class="txt-group row-group">
                                        <div class="txt-item col-group">
                                            <i class="xi-check icon"></i>
                                            <p class="txt">
                                                3D 스테레오비전 카메라
                                            </p>
                                        </div>
                                        <div class="txt-item col-group">
                                            <i class="xi-check icon"></i>
                                            <p class="txt">
                                                AI 체중예측 알고리즘
                                            </p>
                                        </div>
                                        <div class="txt-item col-group">
                                            <i class="xi-check icon"></i>
                                            <p class="txt">
                                                증체량 모니터링 시스템
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{route("client.nova_vision")}}" class="more-btn col-group">
                                    LEARN MORE
                                    <i class="xi-arrow-right icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="index-product-item col-group">
                            <div class="img-box">
                                <img src="/images/index_product_rotate_1.png" alt="" class="rotate-1">
                                <img src="/images/index_product_rotate_2.png" alt="" class="rotate-2">
                                <img src="/images/index_product_bg_2.png" alt="" class="bg-img">
                            </div>
                            <div class="index-product-group row-group">
                                <div class="index-title-wrap row-group">
                                    <p class="num">02</p>
                                    <p class="sub-title">
                                        NOVA
                                    </p>
                                    <h3 class="title">
                                        FINDER
                                    </h3>
                                </div>

                                <div class="txt-box row-group">
                                    <p class="title">
                                        산란수 자동 측정 시스템
                                    </p>
                                    <div class="txt-group row-group">
                                        <div class="txt-item col-group">
                                            <i class="xi-check icon"></i>
                                            <p class="txt">
                                                달걀 검출을 위한 RGB 카메라
                                            </p>
                                        </div>
                                        <div class="txt-item col-group">
                                            <i class="xi-check icon"></i>
                                            <p class="txt">
                                                산란수 측정 AI 알고리즘
                                            </p>
                                        </div>
                                        <div class="txt-item col-group">
                                            <i class="xi-check icon"></i>
                                            <p class="txt">
                                                과산계 검출 모니터링 시스템
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{route("client.nova_finder")}}" class="more-btn col-group">
                                    LEARN MORE
                                    <i class="xi-arrow-right icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index-product-btn-wrap col-group">
                    <i class="xi-angle-left-thin index-product-btn index-product-btn-prev"></i>
                    <i class="xi-angle-right-thin index-product-btn index-product-btn-next"></i>
                </div>
            </div>
        </div>
        <div class="section index-video">
            <div class="container w1200">
                @if($youtubes->isNotEmpty())
                    <div class="video-container" id="video">
                        <iframe id="youtube-iframe-{{ $youtubes->first()->id }}"
                                width="560" height="315"
                                src="https://www.youtube.com/embed/{{ $youtubes->first()->video_id }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen data-autoplay></iframe>
                    </div>
                @endif
            </div>
        </div>
        <div class="section index-why">
            <div class="container 1680">
                <div class="index-title-wrap center row-group">
                    <p class="sub-title">
                        노바의 차별점
                    </p>
                    <h3 class="title">
                        WHY NOVA?
                    </h3>
                    <p class="txt">
                        3D 컴퓨터비전 기반 인공지능 기술을 통해 가축 체중을 비접촉으로 측정하고, 출하시기, 건강상태, 사료 소비량 등을 결정하여 농장의 생산성을 높입니다. <br>
                        산란수 자동측정 시스템으로 과산계나 폐사체를 조기 검출하여 사료비를 절감하고 질병 발생을 예방합니다.
                    </p>
                </div>

                <div class="index-why-list col-group">
                    <div class="index-why-item row-group">
                        <span class="num">01</span>
                        <img src="/images/index_why_01.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                손쉬운 사용
                            </p>
                            <p class="txt">
                                스마트폰 또는 태블릿에서 <br>
                                실시간 모니터링이 가능
                            </p>
                        </div>
                    </div>
                    <div class="index-why-item row-group">
                        <span class="num">02</span>
                        <img src="/images/index_why_02.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                저렴한 도입비용
                            </p>
                            <p class="txt">
                                자체 개발된 3차원 영상 카메라로 <br>
                                제작단가를 낮추고, <br>
                                초기 도입비용이 없는 월정액 도입
                            </p>
                        </div>
                    </div>
                    <div class="index-why-item row-group">
                        <span class="num">03</span>
                        <img src="/images/index_why_03.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                사료비 절감
                            </p>
                            <p class="txt">
                                가축의 성장정도에 따른 <br>
                                사료 소비량 컨트롤
                            </p>
                        </div>
                    </div>
                    <div class="index-why-item row-group">
                        <span class="num">04</span>
                        <img src="/images/index_why_04.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                노동력 감소
                            </p>
                            <p class="txt">
                                고노동 및 고인력이 필요한 축산업에 <br>
                                비접촉 무노동 가능
                            </p>
                        </div>
                    </div>
                    <div class="index-why-item row-group">
                        <span class="num">05</span>
                        <img src="/images/index_why_05.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                실시간 모니터링
                            </p>
                            <p class="txt">
                                시간 통계 및 변화 과정을 <br>
                                수치 및 그래프로 분석 및 가시화
                            </p>
                        </div>
                    </div>
                    <div class="index-why-item row-group">
                        <span class="num">06</span>
                        <img src="/images/index_why_06.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                정밀사양관리
                            </p>
                            <p class="txt">
                                가축의 건강과 생산성을 개선 시키는 <br>
                                생장관리 시스템 제공
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="section index-effect">
            <div class="container w1280">
                <div class="index-title-wrap center row-group">
                    <p class="sub-title">
                        기대효과
                    </p>
                    <h3 class="title">
                        NOVA EFFECTS
                    </h3>
                    <p class="txt">
                        고령화된 농업인의 노동력을 감소하고, 사료 소비량 결정, 출하시점 제공 등 농장 운영에 다양한 이점을 제공합니다. <br>
                        과산계 및 폐사체 조기 선별로, 노동력 및 사료비를 절감하고 생산성을 향상시킵니다.
                    </p>
                </div>

                <div class="index-effect-list col-group">
                    <div class="index-effect-item row-group">
                        <img src="/images/index_effect_01.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                사료 소비 감소
                            </p>
                            <div class="percent col-group">
                                10%
                                <img src="/images/index_effect_arrow_down.png" alt="" class="arrow">
                            </div>
                            <p class="txt">
                                가축성장 데이터에 기반한 <br>
                                최적의 사료소비량 결정
                            </p>
                        </div>
                    </div>
                    <div class="index-effect-item row-group">
                        <img src="/images/index_effect_02.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                노동력 절감
                            </p>
                            <div class="percent col-group">
                                30%
                                <img src="/images/index_effect_arrow_down.png" alt="" class="arrow">
                            </div>
                            <p class="txt">
                                체중측정 및 과산계 선별에 소요되는 노동력 감소, <br>
                                각종 기능을 통한 노동 효율 증가
                            </p>
                        </div>
                    </div>
                    <div class="index-effect-item row-group">
                        <img src="/images/index_effect_03.svg" alt="" class="img">
                        <div class="txt-group row-group">
                            <p class="title">
                                생산성 향상
                            </p>
                            <div class="percent col-group">
                                35%
                                <img src="/images/index_effect_arrow_up.png" alt="" class="arrow">
                            </div>
                            <p class="txt">
                                스트레스로 인한 폐사를 줄이고, <br>
                                사료 및 인건비 감소에 따른 생산성 증대
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="section index-history">
            <div class="container w1680">
                <div class="index-title-wrap row-group">
                    <p class="sub-title">
                        HISTORY
                    </p>
                    <h3 class="title">
                        축산에 가치를 더하는 기업 <span class="color">NOVA</span>가 <br>
                        <strong>걸어온 길</strong>을 소개합니다.
                    </h3>
                </div>
            </div>

            <div class="index-history-wrap">
                <div class="container w1680">
                    <div class="swiper index-history-slide">
                        <div class="swiper-wrapper">
                            @foreach($historiesByYearAndMonth as $year => $months)
                                <div class="swiper-slide">
                                    <div class="index-history-year">
                                        20<span class="color">{{ substr($year, 2) }}</span>
                                    </div>

                                        <div class="index-history-group row-group">
                                            @foreach($months as $month => $histories)
                                            <div class="index-history-item col-group">
                                                <p class="month">
                                                    {{ $month }}.
                                                </p>
                                                <div class="txt-group row-group">
                                                    @foreach($histories as $history)
                                                    <p class="txt">
                                                        {{$history->details}}<br>
                                                    </p>
                                                    @endforeach
                                                </div>

                                            </div>
                                            @endforeach
                                        </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="index-history-btn-wrap col-group">
                            <i class="xi-angle-left-thin index-history-btn index-history-btn-prev"></i>
                            <i class="xi-angle-right-thin index-history-btn index-history-btn-next"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="section fp-auto-height">
            <div id="footer">
                @include('client.components.footer')
            </div>
        </div>
    </div>

    <div id="top_menu">
        @include('client.components.top_menu')
    </div>

    @if($popups->isNotEmpty())
        <div class="pop-parent" id="popParent">
            <div class="pop">
                <div class="swiper-container">
                    <div class="swiper popupSwiper">
                        <div class="swiper-wrapper">
                            @foreach($popups as $key => $popup)
                                <a href="{{$popup->link}}" class="swiper-slide" target="_blank">
                                    <div class="m-ratioBox-wrap">
                                        <div class="m-ratioBox">
                                            <img src="{{asset('storage/'.$popup->image)}}" alt="">
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-control">
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="pop-btns">
                        <input type="checkbox" name="oneday" id="oneday_check">
                        <label for="oneday_check" onclick="nonePopupOneDay()">
                            <span class="icon"></span> 오늘하루 보지 않기
                        </label>

                        <button class="btn-toggle">
                            <i class="xi-angle-up" style="color:#fff;"></i>
                        </button>

                        <button class="btn-close" onclick="nonePopup()">
                            <i class="xi-close" style="color:#fff;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script>

        function setCookie(name, value, exp) {
            var date = new Date();
            date.setTime(date.getTime() + exp * 24 * 60 * 60 * 1000);
            document.cookie = name + '=' + value + ';expires=' + date.toUTCString() + ';path=/';
        }

        // 오늘 하루 보지 않기 클릭 시
        function nonePopupOneDay() {
            setCookie('popup', 'none', 1); /* popup=none, 1일 뒤 만료됨 */
            document.getElementById('popParent').style.display = "none"; // 팝업 div를 없애준다.
        }

        function getCookie(name) {
            var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return value != null ? value[2] : null;
        }

        window.onload = function () {
            if (getCookie('popup') == null) { // 쿠키에 popup이 없다면
                document.getElementById('popParent').style.display = "block"; // 팝업 display를 block으로 바꿔서 팝업창을 보여준다.
            }
        }


    </script>
</div>

<script>
    function nonePopup() {
        document.getElementById('popParent').style.display = "none";
    }

    //popup
    var popupSwiper = new Swiper(".popupSwiper", {
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        loop: true,
    });

    $(".pop-parent .btn-toggle").click(function () {
        $(".pop-parent").toggleClass("active");
    });

    //풀페이지 플러그인
    $('#fullpage').fullpage({
        autoScrolling: true,
        scrollHorizontally: true,
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['HOME', 'PRODUCTS', 'MEDIA', 'WHY NOVA', 'NOVA EFFECT', 'HISTORY', ''],
        showActiveTooltip: true,
        responsiveWidth: 1025,
        scrollBar: true,
        scrollOverflow: true,

        onLeave: function (anchorLink, index) {
            if (index == 1) { //최상단 메인배너
                $('#header').addClass('white');
            } else {
                $('#header').removeClass('white');
            }
        }
    });


    //메인배너 슬라이드
    var Mainwiper = new Swiper('.index-main-slide', {
        pagination: {
            el: '.index-pagination',
            clickable: false,
            renderBullet: function (index, className) {
                if (index >= 9) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                } else {
                    return '<span class="' + className + '">0' + (index + 1) + "</span>";
                }
            },
        },
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        speed: 2000,
        parallax: true,
        watchOverflow: true,
        loop: true,
    });

    //product 슬라이드
    var Mainwiper = new Swiper('.index-product-slide', {
        navigation: {
            nextEl: ".index-product-btn-next",
            prevEl: ".index-product-btn-prev",
        },
        effect: "fade",
        speed: 800,
        parallax: true,
        watchOverflow: true,
    });

    //history 슬라이드
    var Mainwiper = new Swiper('.index-history-slide', {
        navigation: {
            nextEl: ".index-history-btn-next",
            prevEl: ".index-history-btn-prev",
        },
        autoHeight: true,
        slidesPerView: 1,
        speed: 800,
        breakpoints: {
            1681: {
                slidesPerView: 3,
            },
            769: {
                slidesPerView: 2,
            }
        }
    });


</script>
</body>
</html>
