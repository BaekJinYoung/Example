<!DOCTYPE html>
<html lang="ko">
@include('admin.components.head')
<body>
<div id="wrap">
    <div class="admin-container">
        <header id="header">
            @include('admin.components.snb')
        </header>
        <div class="admin-wrap admin_photo_gallery">
            <div class="title-wrap col-group">
                <div class="main-title-wrap col-group">
                    <h2 class="main-title">
                        특허 및 인증 현황
                    </h2>
                    <div class="top-btn-wrap">
                        <a href="{{route("admin.patentCreate")}}" class="top-btn">
                            등록
                        </a>
                    </div>
                </div>
                <div class="filter_wrap">
                    <div class="filter_input_wrap">
                        <select id="pageCount" onchange="updatePageCount()">
                            <option value="8" {{ $perPage == 8 ? 'selected' : '' }}>1페이지에 8개까지</option>
                            <option value="16" {{ $perPage == 16 ? 'selected' : '' }}>1페이지에 16개까지</option>
                            <option value="24" {{ $perPage == 24 ? 'selected' : '' }}>1페이지에 24개까지</option>
                        </select>
                        <form action="{{route("admin.patentIndex")}}" method="get">
                            <div class="search-wrap col-group">
                                <input type="text" name="search" class="search-input" placeholder="제목을 입력하세요" value="{{ old('search', $search) }}">
                                <button type="submit" class="search-btn">
                                    <i class="xi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="board-wrap col-group">
                @if($patents->isEmpty())
                    <div class="null-txt">
                        등록된 게시물이 없습니다.
                    </div>
                @else
                    @foreach($patents as $key => $patent)
                        <div class="board-item">
                            <div class="img-box">
                                @if($patent->image)
                                    <img src="{{asset('storage/'.$patent->image)}}" alt="">
                                @else
                                    <img src="{{asset('images/certificate.png')}}" alt="">
                                @endif
                            </div>
                            <div class="txt-box row-group">
                                <p class="title">{{$patent->title}}</p>
                                <div class="btn-wrap col-group">
                                    <a href="{{route("admin.patentEdit", $patent->id)}}" class="btn">
                                        수정
                                    </a>
                                    <form action="{{route("admin.patentDelete", $patent->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn del-btn">
                                            삭제
                                        </button>
                                    </form>
                                </div>
                                <div class="order_btn_wrap">
                                    <form
                                        action="{{route("admin.patentMove", ['patent' => $patent->id, 'direction' => 'left'])}}"
                                        method="post">
                                        @csrf
                                        <button type="submit"><i class="xi-arrow-left"></i></button>
                                    </form>
                                    <form
                                        action="{{route("admin.patentMove", ['patent' => $patent->id, 'direction' => 'right'])}}"
                                        method="post">
                                        @csrf
                                        <button type="submit"><i class="xi-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @include('admin.components.pagination', ['paginator' => $patents])
        </div>
    </div>
</div>
<script>
    function updatePageCount() {
        var pageCount = document.getElementById('pageCount').value;
        window.location.href = '?perPage=' + pageCount;
    }
</script>
</body>
</html>
