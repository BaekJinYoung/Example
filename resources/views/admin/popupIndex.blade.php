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
                        팝업
                    </h2>
                    <div class="top-btn-wrap">
                        <a href="{{route("admin.popupCreate")}}" class="top-btn">
                            등록
                        </a>
                    </div>
                </div>
            </div>

            <div class="board-wrap col-group">
                @if($popups->isEmpty())
                    <div class="null-txt">
                        등록된 팝업이 없습니다.
                    </div>
                @else
                    @foreach($popups as $key => $popup)
                    <div class="board-item">

                        <div class="img-box">
                            <img src="{{asset('storage/'.$popup->image)}}" alt="">
                        </div>
                        <div class="txt-box row-group">
                            <p class="title">{{$popup->title}}
                            </p>
                            <p class="date col-group">
                                <a href="{{$popup->link}}" class="btn" target="_blank">링크</a>
                            </p>
                            <div class="btn-wrap col-group">
                                <a href="{{route("admin.popupEdit", $popup->id)}}" class="btn">
                                    수정
                                </a>
                                <form action="{{route("admin.popupDelete", $popup->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn del-btn">
                                        삭제
                                    </button>
                                </form>
                            </div>
                            <div class="order_btn_wrap">
                                <form action="" method="post">
                                    <button type="submit"><i class="xi-arrow-left"></i></button>
                                </form>
                                <form action="" method="post">
                                    <button type="submit"><i class="xi-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
