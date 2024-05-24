@php use Carbon\Carbon; @endphp
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
                    연혁 수정
                </h2>
            </div>
            <form action="{{route("admin.historyUpdate", $history)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            메인노출
                            <span class="red">*</span>
                        </p>
                        <div class="radio-wrap">
                            <div class="label-wrap col-group">
                                <label for="radio_item_1" class="radio-item">
                                    <input type="radio" name="main" id="radio_item_1" value="1"
                                           class="form-radio" {{ !$history->main=="0" ? 'checked' : '' }}>
                                    <div class="checked-item col-group">
                                        <span class="radio-icon"></span>
                                        노출
                                    </div>
                                </label>
                                <label for="radio_item_2" class="radio-item">
                                    <input type="radio" name="main" id="radio_item_2" value="0"
                                           class="form-radio" {{ !$history->main=="1" ? 'checked' : '' }}>
                                    <div class="checked-item col-group">
                                        <span class="radio-icon"></span>
                                        노출안함
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            진행 일자
                            <span class="red">*</span>
                        </p>
                        <input type="month" class="form-input w-560" name="registered_at"
                               value="{{date('Y-m', strtotime($history->date))}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                            <span class="red">*</span>
                        </p>
                        <textarea rows="5" name="content" placeholder="내용을 작성해주세요.">{{$history->details}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            이미지
                        </p>
                        <div class="file-upload-wrap">
                            <input type='file' id='image_upload' accept="image/*" name="image" onchange="displayFileName(this, 'fileName')">
                            <label for="image_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                620px*470px 비율 고해상도 사진 등록
                            </span>
                            <div class='file-preview-wrap col-group'>
                                <div class="file-preview" id="image" style="display: none">
                                    <p class="file-name" id="fileName">{{$history->image_name}}</p>
                                    <button type="button" class="file-del-btn" name="image">
                                        <i class="xi-close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-btn-wrap col-group">
                    <a href="{{route("admin.historyIndex")}}" class="form-prev-btn">
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
<script>
    function displayFileName(input, fileNameElementId) {
        var fileName = input.files[0].name;
        document.getElementById(fileNameElementId).textContent = fileName;
    }
</script>
</body>
</html>
