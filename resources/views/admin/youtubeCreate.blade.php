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
                    Youtube 등록
                </h2>
            </div>
            <form enctype="multipart/form-data">
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            유튜브 링크
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="link" class="form-input"
                               placeholder="https://www.youtube.com/watch?v=">
                    </div>
                </div>
            </form>
            <div class="form-btn-wrap col-group">
                <a href="{{route("admin.youtubeIndex")}}" class="form-prev-btn">
                    목록으로
                </a>
                <button class="form-submit-btn" type="submit">
                    등록
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
