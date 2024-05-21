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
                    특허 및 인증 현황 수정
                </h2>
            </div>
            <form action="{{route("admin.patentUpdate", $patent)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="title" class="form-input" placeholder="제목을 입력하세요" value="{{$patent->title}}">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            이미지

                        </p>
                        <div class="file-upload-wrap">
                            <input type='file' id='image_upload' accept="image/*" name="image" value="{{$patent->image}}">
                            <label for="image_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                320*440px 비율 고해상도 사진 등록
                            </span>
                                <div class="file-preview" id="image">
                                    <p class="file-name"></p>
                                    <button type="button" class="file-del-btn" name="image">
                                        <i class="xi-close"></i>
                                    </button>
                                </div>
                        </div>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            특허번호 or 발급번호
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="number" class="form-input" placeholder="특허번호 또는 발급번호를 입력하세요" value="{{$patent->number}}">
                    </div>
                </div>

            <div class="form-btn-wrap col-group">
                <a href="{{route("admin.patentIndex")}}" class="form-prev-btn">
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
