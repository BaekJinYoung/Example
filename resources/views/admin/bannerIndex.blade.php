<!DOCTYPE html>
<html lang="ko">
@include('admin.components.head')
<body>
<div id="wrap">
    <div class="admin-container">
        <header id="header">
            @include('admin.components.snb')
        </header>

        <div class="admin-wrap admin_photo_gallery">

            <div class="title-wrap col-group">
                <div class="main-title-wrap col-group">
                    <h2 class="main-title">
                        메인 배너
                    </h2>
                    <div class="top-btn-wrap">
                        <a href="{{route("admin.bannerCreate")}}" class="top-btn">
                            등록
                        </a>
                    </div>
                </div>
            </div>

            <div class="item_list item_list_2">
                @if($banners->isEmpty())
                    <div class="null-txt">
                        등록한 게시물이 없습니다.
                    </div>
                @else
                    @foreach($banners as $key => $banner)
                    <ul class="item_list_ul">
                        <li>
                            <div class="img_wrap">
                                <img src="{{asset('storage/'.$banner->image)}}" alt="">
                            </div>
                            <div class="img_wrap">
                                <img src="{{asset('storage/'.$banner->mobile_image)}}" alt="">
                            </div>
                            <div class="item_txt_wrap">
                                <p class="title_p">{{$banner->title}}</p>
                                <p class="title_p">{{$banner->mobile_title}}</p>
                                <p class="subtitle_p">{{$banner->subtitle}}</p>
                                <div class="btn-wrap col-group">
                                    <a href="{{route("admin.bannerEdit", $banner->id)}}" class="btn">
                                        수정
                                    </a>
                                    <form action="{{route("admin.bannerDelete", $banner->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn del-btn">
                                            삭제
                                        </button>
                                    </form>
                                </div>
                                <div class="order_btn_wrap">
                                    <form action="{{route("admin.bannerMove", ['banner' => $banner->id, 'direction' => 'up'])}}" method="post">
                                        @csrf
                                        <button type="submit"><i class="xi-arrow-up"></i></button>
                                    </form>
                                    <form action="{{route("admin.bannerMove", ['banner' => $banner->id, 'direction' => 'down'])}}" method="post">
                                        @csrf
                                        <button type="submit"><i class="xi-arrow-down"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
