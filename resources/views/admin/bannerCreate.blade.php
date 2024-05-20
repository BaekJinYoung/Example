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
                    메인 배너 등록
                </h2>
            </div>
            <form enctype="multipart/form-data">
                <div class="form-wrap row-group">
                    <div class="form-item row-group">
                        <p class="item-default">
                            제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="title" placeholder="제목을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="mb_title" placeholder="MOBILE 제목을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            부제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="sub_title" placeholder="부제목을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 부제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="mb_sub_title" placeholder="MOBILE 부제목을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                            <span class="red">*</span>
                        </p>
                        <textarea rows="3" name="content" placeholder="내용을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 내용
                            <span class="red">*</span>
                        </p>
                        <textarea rows="3" name="mb_content" placeholder="MOBILE 내용을 작성해주세요."></textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            PC 이미지
                            <span class="red">*</span>
                        </p>
                        <div class="file-upload-wrap">
                            <input type='file' id='pc_file_upload' accept="image/*" name="pc_file">
                            <label for="pc_file_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                1920*980px 비율 고해상도 사진 등록
                            </span>

                            <div class="file-preview" id="pc_file">
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
                            <input type='file' id='mb_file_upload' accept="image/*" name="mb_file">
                            <label for="mb_file_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                960*2080px 비율 고해상도 사진 등록
                            </span>

                            <div class="file-preview" id="mb_file">
                                <p class="file-name"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <div class="form-btn-wrap col-group">
                <a href="{{route("admin.bannerIndex")}}" class="form-prev-btn">
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
