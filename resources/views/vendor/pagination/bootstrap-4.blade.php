@if ($paginator->hasPages())
    <nav class="navigation pagination mar-10 justify-content-center">
        <div class="nav-links">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="prev page-numbers"><i class="fas fa-angle-left"></i></a>
            @else
                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="page-numbers current" href="#">{{$page}}</a>
                        @else
                            <a class="page-numbers" href="{{ $url }}">{{$page}}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
            @else
                <a class="next page-numbers"><i class="fas fa-angle-right"></i></a>
            @endif
        </div>
    </nav>
@endif
