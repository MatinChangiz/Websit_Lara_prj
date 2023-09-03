@extends('layouts/masters')
@section('content')

<main id="main" role="main" class="main clearfix">
    <a id="main-content" tabindex="-1"></a>



    <div data-drupal-messages-fallback class="hidden"></div>


    <div class="views-element-container">
        <div class="js-view-dom-id-054eeba5ef59ca83fcf365fcf8b78e88fbeb7782befd7f24cf39f44cdcc495e0">
            <section class="cards-outer section">
                <header class="section-header container">
                    <h2 class="section-header-title">Your Search</h2>
                </header>

                <div class="container">
                    <div class="cards">
                        @foreach($search as $c)
                        <article>

                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="390" height="320"/>
                                        <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="600" height="492"/>
                                        <img loading="lazy" src="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}}" width="390" height="320" alt="" typeof="foaf:Image" />
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
        </div>
    </div>
</main>
@endsection
