<!DOCTYPE html>
<html lang="ko">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
@include('admin.components.head')
<body>
<div id="wrap">
    <div class="admin-container">
        <header id="header">
            @include('admin.components.snb')
        </header>

        <div class="admin-wrap">
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
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
                               value="{{'title', old($notice->title)}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="details" class="form-input" id="details" placeholder="내용을 작성해주세요."
                               value="{{'details', old($notice->details)}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            한줄요약
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="summary" class="form-input" id="summary" placeholder="한줄요약을 작성해주세요."
                               value="{{old('summary', $notice->summary)}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            저자
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="writer" class="form-input" id="writer" placeholder="저자를 작성해주세요."
                               value="{{old('writer', $notice->writer)}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            발행정보
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="information" class="form-input" id="information"
                               placeholder="발행정보를 작성해주세요." value="{{old('information', $notice->information)}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            발행일자
                            <span class="red">*</span>
                        </p>
                        <input type="date" class="form-input w-560" name="registered_at" id="date"
                               value="{{old('registered_at', date('Y-m-d', strtotime($notice->date)))}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            논문 URL
                        </p>
                        <input type="text" name="url" class="form-input" id="url"
                               placeholder="논문 URL을 작성해주세요." value="{{old('url', $notice->url)}}">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
