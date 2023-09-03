@extends('layouts/masters')

@section('title', 'SSAWO | News')

@section('content')

<main id="main myTable" role="main" class="main clearfix">
    <a id="main-content" tabindex="-1"></a>

    <div data-drupal-messages-fallback class="hidden"></div>

    <div class="main-header">
        <header class="container">
            <div class="main-header-content">
                <h1 class="main-header-title">News</h1>
                <div class="main-header-summary">
                    <p>Read our latest news stories and press releases here.
                        <a href="javascript:void(0)">For media inquiries, contact a member of our communications team.</a>
                    </p>
                </div>
            </div>
        </header>
    </div>

    <div class="views-element-container">
        <div class="js-view-dom-id-054eeba5ef59ca83fcf365fcf8b78e88fbeb7782befd7f24cf39f44cdcc495e0">
            <section class="cards-outer section">
                <header class="section-header container">
                    <h2 class="section-header-title">Latest News</h2>
                </header>

                <div class="container">
                    <div class="cards">

                        @foreach($news as $c)
                        <article>

                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="600" height="492"/>
                                        <img loading="lazy" src="{{asset('upload')}}/{{{$c->image}}}" width="390" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>

                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <span class="metalabel">
                                                <a href="#">Press release</a>
                                            </span>

                                            <span class="card-header-date">
                                                <time datetime="{{$c->updated_at}}">{{ Carbon\Carbon::parse($c->updated_at)->format('Y-m-d') }}</time>
                                            </span>

                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >{{$c->title}}</a>
                                            </h2>
                                        </header>

                                        <div class="card-summary">
                                            <p>{{$c->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
            </section>
            <footer class="pagination-outer">
                <div class="container">
                    {{ $news->links('vendor.pagination.custom') }}
                </div>
            </footer>
        </div>
    </div>
</main>

@endsection
