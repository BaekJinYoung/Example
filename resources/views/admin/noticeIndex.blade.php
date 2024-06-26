<!DOCTYPE html>
<html lang="ko">
@include('admin.components.head')
<body>
<div id="wrap">
    <div class="admin-container">
        <header id="header">
            @include('admin.components.snb')
        </header>
        <div class="admin-wrap table-wrap">
            <div class="title-wrap col-group">
                <div class="main-title-wrap col-group">
                    <h2 class="main-title">
                        논문현황
                    </h2>
                    <div class="top-btn-wrap">
                        <a href="{{route("admin.noticeCreate")}}" class="top-btn">
                            등록
                        </a>
                    </div>
                </div>
                <div class="filter_wrap">
                    <div class="filter_input_wrap">
                        <select id="pageCount" onchange="updatePageCount()">
                            <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>1페이지에 10개까지</option>
                            <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>1페이지에 20개까지</option>
                            <option value="30" {{ $perPage == 30 ? 'selected' : '' }}>1페이지에 30개까지</option>
                        </select>
                        <form action="{{route("admin.noticeIndex")}}" method="get">
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
            <table class="admin-table">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead class="admin-thead">
                <tr class="admin-tr">
                    <th class="admin-th">제목</th>
                    <th class="admin-th">저자</th>
                    <th class="admin-th">발행정보</th>
                    <th class="admin-th">발행일자</th>
                    <th class="admin-th">관리</th>
                </tr>
                </thead>
                <tbody class="admin-tbody">
                @if($notices->isEmpty())
                    <tr>
                        <td colspan="9">
                            <p class="null-txt">
                                등록된 게시물이 없습니다.
                            </p>
                        </td>
                    </tr>
                @else
                    @foreach($notices as $key => $notice)
                        <tr class="admin-tr">
                            <td class="admin-td">{{$notice->title}}</td>
                            <td class="admin-td">{{$notice->writer}}</td>
                            <td class="admin-td">{{$notice->information}}</td>
                            <td class="admin-td">{{date('Y-m-d', strtotime($notice->date))}}</td>
                            <td class="admin-td">
                                <div class="btn-wrap col-group">
                                    <a href="{{route("admin.noticeEdit", $notice->id)}}" class="btn">
                                        상세
                                    </a>
                                    <form action="{{route("admin.noticeDelete", $notice->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn del-btn">
                                            삭제
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            @include('admin.components.pagination', ['paginator' => $notices])
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
