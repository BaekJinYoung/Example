<!DOCTYPE html>
<html lang="ko">
@include('admin.components.head')
<body>
<div id="wrap">
    <div class="admin-container">
        <header id="header">
            @include('admin.components.snb')
        </header>

        <div class="admin-wrap">

            <div class="title-wrap col-group">
                <h2 class="main-title">
                    Youtube 수정
                </h2>
            </div>
            <form action="{{route("admin.youtubeUpdate", $youtube)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            유튜브 링크
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="link" class="form-input"
                               placeholder="https://www.youtube.com/watch?v=" value="{{$youtube->link}}">
                    </div>
                </div>

            <div class="form-btn-wrap col-group">
                <a href="{{route("admin.youtubeIndex")}}" class="form-prev-btn">
                    목록으로
                </a>
                <button class="form-submit-btn" type="submit">
                    수정
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
