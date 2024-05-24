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
                        Youtube
                    </h2>
                    <div class="top-btn-wrap">
                        <a href="{{route("admin.youtubeCreate")}}" class="top-btn">
                            등록
                        </a>
                    </div>
                </div>
            </div>

            <div class="board-wrap col-group">
                @if($youtubes->isEmpty())
                    <div class="null-txt">
                        등록된 게시물이 없습니다.
                    </div>
                @else

                    @foreach($youtubes as $key => $youtube)
                        <div class="board-item">
                            <div class="video-box">
                                <iframe id="youtube-iframe-{{ $youtube->id }}"
                                        width="560" height="315"
                                        src="https://www.youtube.com/embed/{{ $youtube->video_id }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                            </div>
                            <div class="txt-box row-group">
                                <div class="btn-wrap col-group">
                                    <a href="{{route("admin.youtubeEdit", $youtube->id)}}" class="btn">
                                        수정
                                    </a>
                                    <form action="{{route("admin.youtubeDelete", $youtube->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn del-btn">
                                            삭제
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    function playVideo(element, videoId) {
        const videoBox = element.parentElement;
        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1');
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
        iframe.setAttribute('allowfullscreen', 'true');
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        videoBox.innerHTML = '';
        videoBox.appendChild(iframe);
    }
</script>
</body>
</html>
