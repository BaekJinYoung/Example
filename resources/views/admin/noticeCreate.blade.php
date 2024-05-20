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
                    논문현황 등록
                </h2>
            </div>
            <form enctype="multipart/form-data">
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" class="form-input" placeholder='제목을 작성해주세요.' name="title">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                        </p>
                        <textarea rows="5" name="content" placeholder="내용을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            한줄요약
                        </p>
                        <input type="text" class="form-input" placeholder='한줄요약을 작성해주세요.' name="summary">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            저자
                            <span class="red">*</span>
                        </p>
                        <input type="text" class="form-input" placeholder='저자를 작성해주세요.' name="author">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            발행정보
                            <span class="red">*</span>
                        </p>
                        <input type="text" class="form-input" placeholder='발행정보를 작성해주세요.' name="public_info">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            발행일자
                            <span class="red">*</span>
                        </p>
                        <input type="date" class="form-input w-560" name="registered_at">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            논문 URL
                        </p>
                        <input type="text" class="form-input" placeholder='논문 URL을 작성해주세요.' name="url">
                    </div>
                </div>
            </form>
            <div class="form-btn-wrap col-group">
                <a href="{{route("admin.noticeIndex")}}" class="form-prev-btn">
                    목록으로
                </a>
                <button class="form-prev-btn" type="submit">
                    등록
                </button>
                <button class="form-submit-btn" type="submit">
                    등록 후 계속
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
