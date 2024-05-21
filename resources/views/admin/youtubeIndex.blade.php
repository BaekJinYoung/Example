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
                        Youtube
                    </h2>
                    <div class="top-btn-wrap">
                        <a href="{{route("admin.youtubeCreate")}}" class="top-btn">
                            등록
                        </a>
                    </div>
                </div>
            </div>

            <div class="board-wrap col-group">
                @if($youtubes->isEmpty())
                    <div class="null-txt">
                        등록된 게시물이 없습니다.
                    </div>
                @else
                    @foreach($youtubes as $key => $youtube)
                    <div class="board-item">
                        <div class="video-box">
                            <iframe src=""
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="txt-box row-group">
                            <div class="btn-wrap col-group">
                                <a href="{{route("admin.youtubeEdit", $youtube->id)}}" class="btn">
                                    수정
                                </a>
                                <form action="" method="post">
                                    <button type="submit" class="btn del-btn">
                                        삭제
                                    </button>
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
