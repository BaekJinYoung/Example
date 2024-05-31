<!DOCTYPE html>

<html lang="ko">
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

<body>
<div id="wrap">

    <div id="header" class="white">
        @include('client.components.header')
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
                    회사소개
                </a>
            </div>

            <h2 class="subpage-top-title">
                회사소개
            </h2>
        </div>

        <div class="subpage-tab-wrap col-group">
            <a href="{{route("client.about")}}" class="subpage-tab active">
                회사소개
            </a>
            <a href="{{route("client.greeting")}}" class="subpage-tab">
                인사말
            </a>
        </div>

        <div class="subpage-wrap">
            <div class="section">
                <div class="subpage-title-wrap center row-group">
                    <p class="sub-title">
                        ABOUT NOVA
                    </p>
                    <h3 class="title">
                        디지털 대전환(DX) 핵심기술을 <br class="mb"> 활용한 스마트 최적사양 솔루션 <br>
                        축산업의 혁신적인 기술발전을 이끄는 기업 <span class="color">NOVA</span>
                    </h3>
                    <p class="txt">
                        NOVA는 디지털 트랜스포메이션(DX) 핵심기술을 활용하여 축산업의 미래를 재정립하고 있습니다. <br>
                        저희 기술이 축산업의 미래를 어떻게 변화시킬지 기대하길 바랍니다.
                    </p>
                </div>
                <div class="banner-txt">
                    <p>
                        <span class="color">인공지능, 클라우드, 디지털트윈</span> 기술 등을 활용하여 <br>
                        축산업의 효율성과 경쟁력을 향상시키는데 일조하며 <br>
                        축산분야 최적의 솔루션을 <br class="mb">제공하는 기업으로 성장하고자 합니다.
                    </p>
                </div>
            </div>
            <div class="section">
                <div class="subpage-title-wrap center row-group">
                    <p class="sub-title">
                        VISION
                    </p>
                    <h3 class="title">
                        축산에 가치를 더하는 기업 <span class="color">NOVA</span>
                    </h3>
                    <p class="txt">
                        NOVA는 혁신적인 스마트 축산 체중 예측 시스템에서 <br>
                        농생명·바이오 및 헬스케어 분야 솔루션을 <br class="mb">제공하는 기업으로 성장하고자 합니다.
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
                                가축 체중 예측 및 <br>
                                산란수 측정 시스템 상용화
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
                                농생명·바이오 및 헬스케어 분야 <br>
                                신규 사업 진출
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
                                축산업부터 인류를 위한 <br>
                                농생명·바이오 및 <br>
                                헬스케어 기업으로의 성장
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
                        노바의 상징은 'N'과 'V'의 형태를 변형하여 <br class="mb">기술 연구에 대한 깊은 열정과 초점을 반영합니다. <br>
                        두 글자는 노바가 축산업의 혁신을 주도하는 <br class="mb">핵심 가치와 사명을 시각적으로 표현하고 있습니다. <br>
                        오렌지색은 활력 넘치는 정신과 <br class="mb">연구개발에 대한 끊임없는 추진력을 상징하며, <br class="mb">적극적이고 진취적인 이미지를 부각합니다.
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
                        노바가 걸어온 길
                    </h3>
                </div>
                <div class="container w1440">
                    <div class="about-history">
                        <div class="about-history-tab-list col-group">
                            @foreach($historiesByYear as $year => $histories)
                                <div class="about-history-tab{{ $loop->first ? ' active' : '' }}"
                                     data-tab="his_{{ $year }}">
                                    {{ $year }}
                                </div>
                            @endforeach
                        </div>
                        @foreach($historiesByYear as $year => $histories)
                            @php
                                $firstImageHistory = $histories->firstWhere('image', '!=', null);
                            @endphp
                            <div class="about-history-container{{ $loop->first ? ' active' : '' }}"
                                 id="his_{{ $year }}">
                                <div class="about-history-wrap col-group">
                                    <div class="img-box">
                                        @if($firstImageHistory)
                                            <img src="{{ asset('storage/'.$firstImageHistory->image) }}" alt="">
                                        @endif
                                    </div>
                                    <div class="about-history-group row-group">
                                        @foreach($histories as $history)
                                            <div class="about-history-item col-group">
                                                <p class="month">{{ date('Y-m', strtotime($history->date)) }}</p>
                                                <div class="txt-group row-group">
                                                    <p class="txt">{{ $history->details }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

    //tab
    $('.about-history-tab').click(function () {
        $('.about-history-tab').removeClass('active');
        $(this).addClass('active');

        data_tab = $(this).attr('data-tab');
        $('.about-history-container').removeClass('active');
        $('.about-history-container#' + data_tab).addClass('active');
    });


</script>
00
</html>
