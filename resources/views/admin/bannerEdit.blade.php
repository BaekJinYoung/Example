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
                    메인 배너 수정
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
                        <textarea rows="2" name="title" placeholder="제목을 작성해주세요.">{{'title', old($banner->title)}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="mobile_title" id="mobile_title"
                                  placeholder="MOBILE 제목을 작성해주세요.">{{old('mobile_title', $banner->mobile_title)}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            부제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="subtitle" id="subtitle"
                                  placeholder="부제목을 작성해주세요.">{{old('subtitle', $banner->subtitle)}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 부제목
                            <span class="red">*</span>
                        </p>
                        <textarea rows="2" name="mobile_subtitle" id="mobile_subtitle"
                                  placeholder="MOBILE 부제목을 작성해주세요.">{{old('mobile_subtitle', $banner->mobile_subtitle)}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            내용
                            <span class="red">*</span>
                        </p>
                        <textarea rows="3" name="details" id="details"
                                  placeholder="내용을 작성해주세요.">{{old('details', $banner->details)}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 내용
                            <span class="red">*</span>
                        </p>
                        <textarea rows="3" name="mobile_details" id="mobile_details"
                                  placeholder="MOBILE 내용을 작성해주세요.">{{old('mobile_details', $banner->mobile_details)}}</textarea>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            PC 이미지
                            <span class="red">*</span>
                        </p>
                        <div class="file-upload-wrap">
                            <input type='file' id='pc_file_upload' accept="image/*" name="image"
                                   onchange="displayFileName(this, 'fileName')">
                            <label for="pc_file_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                800*800px 비율 고해상도 사진 등록
                            </span>
                            <div class="file-preview">
                                <p class="file-name" id="fileName">{{$banner->image_name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-item row-group">
                        <p class="item-default">
                            MOBILE 이미지
                            <span class="red">*</span>
                        </p>
                        <div class="file-upload-wrap">
                            <input type='file' id='mb_file_upload' accept="image/*" name="mobile_image"
                                   onchange="displayFileName(this, 'mobile_fileName')">
                            <label for="mb_file_upload" class="file-upload-btn">
                                파일 업로드
                            </label>
                            <span class="guide-txt">
                                800*800px 비율 고해상도 사진 등록
                            </span>
                            <div class="file-preview">
                                <p class="file-name" id="mobile_fileName">{{$banner->mobile_image_name}}</p>
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
<script>
    function displayFileName(input, fileNameElementId) {
        var fileName = input.files[0].name;
        document.getElementById(fileNameElementId).textContent = fileName;
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
