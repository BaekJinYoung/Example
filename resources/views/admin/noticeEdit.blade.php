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
                    논문현황 수정
                </h2>
            </div>
            <form action="{{route("admin.noticeUpdate", $notice)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="title" class="form-input" id="title" placeholder="제목을 작성해주세요."
                               value="{{$notice->title}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="details" class="form-input" id="details" placeholder="내용을 작성해주세요."
                               value="{{$notice->details}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            한줄요약
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="summary" class="form-input" id="summary" placeholder="한줄요약을 작성해주세요."
                               value="{{$notice->summary}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            저자
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="writer" class="form-input" id="writer" placeholder="저자를 작성해주세요."
                               value="{{$notice->writer}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            발행정보
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="information" class="form-input" id="information"
                               placeholder="발행정보를 작성해주세요." value="{{$notice->information}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            발행일자
                            <span class="red">*</span>
                        </p>
                        <input type="date" class="form-input w-560" name="registered_at" id="date"
                               value="{{date('Y-m-d', strtotime($notice->date))}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            논문 URL
                        </p>
                        <input type="text" name="url" class="form-input" id="url"
                               placeholder="논문 URL을 작성해주세요." value="{{$notice->url}}">
                    </div>
                </div>
                <div class="form-btn-wrap col-group">
                    <a href="{{route("admin.noticeIndex")}}" class="form-prev-btn">
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
