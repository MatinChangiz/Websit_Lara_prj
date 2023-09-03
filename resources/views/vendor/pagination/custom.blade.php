
    <footer class="pagination-outer">
        <div class="container">
          @if ($paginator->hasPages())
            <nav class="pager" role="navigation" aria-labelledby="pagination-heading">
                <h4 id="pagination-heading" class="visually-hidden">Pagination</h4>
                <ul class="pager__items js-pager__items">
                    @if ($paginator->onFirstPage())
                        <li class="pager__item disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                    @else
                        <li class="pager__item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                                Prev</a>
                        </li>
                    @endif
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="pager__item disabled">{{ $element }}</li>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="pager__item active">
                                        <a class="page-link">{{ $page }}</a>
                                    </li>
                                @else
                                    <li class="pager__item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <li class="pager__item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                        </li>
                    @else
                        <li class="pager__item disabled">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    @endif

                </ul>
            </nav>
            @endif
        </div>
    </footer>
