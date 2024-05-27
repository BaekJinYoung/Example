<div class="header-wrap col-group">

    <a href="{{route("client.index")}}" class="logo">
        <h1 class="logo-img"></h1>
    </a>

    <div class="header-gnb-wrap col-group">
        <div class="header-gnb">
            COMPANY
            <div class="header-sub-gnb-wrap row-group">
                <a href="{{route("client.about")}}" class="header-sub-gnb">
                    About NOVA
                </a>
                <a href="{{route("client.greeting")}}" class="header-sub-gnb">
                    Greeting
                </a>
            </div>
        </div>
        <div class="header-gnb">
            R&D
            <div class="header-sub-gnb-wrap row-group">
                <a href="{{route("client.RnD_1")}}" class="header-sub-gnb">
                    R&D Capabilities
                </a>
                <a href="{{route("client.RnD_2")}}" class="header-sub-gnb">
                    Publications
                </a>
                <a href="{{route("client.RnD_3")}}" class="header-sub-gnb">
                    Patents & <br> Certifications
                </a>
            </div>
        </div>
        <div class="header-gnb">
            PRODUCTS
            <div class="header-sub-gnb-wrap row-group">
                <a href="{{route("client.nova_vision")}}" class="header-sub-gnb">
                    NOVA VISION
                </a>
                <a href="{{route("client.nova_finder")}}" class="header-sub-gnb">
                    NOVA FINDER
                </a>
            </div>
        </div>
        <div class="header-gnb">
            CONTACT
            <div class="header-sub-gnb-wrap row-group">
                <a href="{{route("client.contact")}}" class="header-sub-gnb">
                    CONTACT
                </a>
            </div>
        </div>
    </div>

    <div class="translate-btn-wrap col-group">
        <a href="{{ route('client.lang.ko') }}" class="translate-btn {{ session('locale') == 'ko' ? 'active' : '' }}">
            KOR
        </a>
        <a href="{{ route('client.lang.en') }}" class="translate-btn {{ session('locale') == 'en' ? 'active' : '' }}">
            ENG
        </a>
    </div>

    <i class="toggle-bar xi-bars"></i>
</div>

<div class="site-map">
    <i class="close-btn xi-close-thin"></i>
    <div class="gnb row-group">
        <div class="gnb-menu-wrap row-group">
            <div class="gnb-menu">
                COMPANY
            </div>
            <div class="sub-gnb row-group">
                <a href="{{route("client.about")}}" class="sub-gnb-menu">
                    About NOVA
                </a>
                <a href="{{route("client.greeting")}}" class="sub-gnb-menu">
                    Greeting
                </a>
            </div>
        </div>
        <div class="gnb-menu-wrap row-group">
            <div class="gnb-menu">
                R&D
            </div>
            <div class="sub-gnb row-group">
                <a href="{{route("client.RnD_1")}}" class="sub-gnb-menu">
                    R&D Capabilities
                </a>
                <a href="{{route("client.RnD_2")}}" class="sub-gnb-menu">
                    Publications
                </a>
                <a href="{{route("client.RnD_3")}}" class="sub-gnb-menu ls">
                    Patents & Certifications
                </a>
            </div>
        </div>
        <div class="gnb-menu-wrap row-group">
            <div class="gnb-menu">
                PRODUCTS
            </div>
            <div class="sub-gnb row-group">
                <a href="{{route("client.nova_vision")}}" class="sub-gnb-menu">
                    NOVA VISION
                </a>
                <a href="{{route("client.nova_finder")}}" class="sub-gnb-menu">
                    VOVA FINDER
                </a>
            </div>
        </div>
        <div class="gnb-menu-wrap row-group">
            <div class="gnb-menu">
                CONTACT
            </div>
            <div class="sub-gnb row-group">
                <a href="{{route("client.contact")}}" class="sub-gnb-menu">
                    CONTACT
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    //사이트맵 열고닫기
    $('.toggle-bar').click(function () {
        $('#header').addClass('sitemap');
    });
    $('.close-btn').click(function () {
        $('#header').removeClass('sitemap');
    });

    //사이트맵 하위메뉴
    $('.gnb-menu').click(function(){
        $(this).parent('.gnb-menu-wrap').toggleClass('active');
    });

    //헤더 호버시
    $('.header-gnb').mouseover(function () {
        $('#header').addClass('hover');
    });
    $('.header-gnb').mouseleave(function () {
        $('#header').removeClass('hover');
    });

</script>
