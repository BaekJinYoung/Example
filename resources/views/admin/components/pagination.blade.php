<div class="pagination col-group">
    <a href="{{ $paginator->previousPageUrl() }}" class="page-btn">
        <i class="xi-angle-left-min"></i>
    </a>
    @for ($pageNum = 1; $pageNum <= $paginator->lastPage(); $pageNum++)
        <a href="{{ $paginator->url($pageNum) }}" class="page-btn {{ $paginator->currentPage() == $pageNum ? 'active' : '' }}">
            {{ $pageNum }}
        </a>
    @endfor
    <a href="{{ $paginator->nextPageUrl() }}" class="page-btn">
        <i class="xi-angle-right-min"></i>
    </a>
</div>
