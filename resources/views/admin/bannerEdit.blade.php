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
                    배너 등록
                </h2>
            </div>
            <form action="{{route("admin.bannerUpdate", $banner)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="title" class="form-input" id="title" value="{{$banner->title}}" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="mobile_title" class="form-input" id="mobile_title" value="{{$banner->mobile_title}}" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            부제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="subtitle" class="form-input" id="subtitle" value="{{$banner->subtitle}}" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 부제목
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="mobile_subtitle" class="form-input" id="mobile_subtitle" value="{{$banner->mobile_subtitle}}" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="details" class="form-input" id="details" value="{{$banner->details}}" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 내용
                            <span class="red">*</span>
                        </p>
                        <input type="text" name="mobile_details" class="form-input" id="mobile_details" value="{{$banner->mobile_details}}" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            PC 이미지
                            <span class="red">*</span>
                        </p>
                        <div class="file-upload-wrap">
                            <!-- <input type='file' id='popup_file' accept="image/*" name="image"> -->
                            <input type='file' id='pc_file_upload' accept="image/*" name="image">
                            <label for="pc_file_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                800*800px 비율 고해상도 사진 등록
                            </span>

                            <div class="file-preview" id="image">
                                <p class="file-name"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 이미지
                            <span class="red">*</span>
                        </p>
                        <div class="file-upload-wrap">
                            <!-- <input type='file' id='popup_file' accept="image/*" name="image"> -->
                            <input type='file' id='mb_file_upload' accept="image/*" name="mobile_image">
                            <label for="mb_file_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                800*800px 비율 고해상도 사진 등록
                            </span>

                            <div class="file-preview" id="mobile_image">
                                <p class="file-name"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-btn-wrap col-group">
                    <a href="{{route("admin.bannerIndex")}}" class="form-prev-btn">
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
