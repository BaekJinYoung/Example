<div class="header-wrap">
    <img src="{{ asset('images/nova_products_logo.svg') }}" alt="" class="header-logo">

    <div class="translation_wrap">
        <a href="{{ route('client.lang.ko') }}">
            <img src="{{ asset('images/kr-on.png') }}" alt="Korean">
        </a>
        <a href="{{ route('client.lang.en') }}">
            <img src="{{ asset('images/en-off.png') }}" alt="English">
        </a>
    </div>

    <div class="menu-wrap row-group">
        <div class="gnb">
            <div class="gnb-item">
                <div class="item-default">
                    홈페이지 관리
                    <i class="xi-angle-down-thin"></i>
                </div>
                <div class="sub-gnb row-group">
                    <a href="{{route("admin.popupIndex")}}" class="sub-gnb-item">
                        메인 팝업
                    </a>
                </div>
                <div class="sub-gnb row-group">
                    <a href="{{route("admin.bannerIndex")}}" class="sub-gnb-item">
                        메인 배너
                    </a>
                </div>
                <div class="sub-gnb row-group">
                    <a href="{{route("admin.youtubeIndex")}}" class="sub-gnb-item">
                        메인 Youtube
                    </a>
                </div>
            </div>
            <div class="gnb-item">
                <div class="item-default">
                    COMPANY
                    <i class="xi-angle-down-thin"></i>
                </div>
                <div class="sub-gnb row-group">
                    <a href="{{route("admin.historyIndex")}}" class="sub-gnb-item">
                        회사소개
                    </a>
                </div>
            </div>
            <div class="gnb-item">
                <div class="item-default">
                    R&D
                    <i class="xi-angle-down-thin"></i>
                </div>
                <div class="sub-gnb row-group">
                    <a href="{{route("admin.noticeIndex")}}" class="sub-gnb-item">
                        논문 현황
                    </a>
                </div>
                <div class="sub-gnb row-group">
                    <a href="{{route("admin.patentIndex")}}" class="sub-gnb-item">
                        특허 및 인증현황
                    </a>
                </div>
            </div>
        </div>

        <div class="header-btm">
            <div class="coworkerweb_logo_Wrap">
                <img src="{{ asset('images/coworkerweb_logo.svg') }}" alt="">
            </div>
            <p class="copy-txt">
                Copyright 2023 NOVA Inc. All rights reserved.
            </p>
        </div>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="xi-log-out"></i>
                로그아웃
            </button>
        </form>
    </div>
</div>

<script>
    $('.gnb-item').click(function () {
        $(this).toggleClass('active');
    });

    document.getElementById('languageForm').addEventListener('submit', function(event) {
        event.preventDefault();
        this.submit();
    });
</script>
</script>
