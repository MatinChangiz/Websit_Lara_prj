@php
    use Illuminate\Support\Facades\DB;
    $tabFourSubOneFirst = DB::table('tab_four_sub_one_firsts')->orderBy('id',"desc")->paginate(12);
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Impact Stories')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <div class="main-header">
            <header class="container">
                <div class="main-header-content">
                    <h1 class="main-header-title">Impact stories</h1>
                    <div class="main-header-summary">
                        <p>
                            Read stories showcasing the human impact of SSAWO&#039;s work around the world.
                        </p>
                    </div>
                </div>
            </header>
        </div>

        <div class="views-element-container">
            <div class="js-view-dom-id-0713dffd471c4960105241f5d852622c75d803a675b59e8336e8a2730e36912b">
                <section class="cards-outer section">
                    <div class="container">
                        <div class="cards">
                            @foreach($tabFourSubOneFirst as $c)
                            <article>
                                <div class="card  has-image">
                                    <div class="card-image">
                                        <p class="card-featured">Featured</p>
                                        <picture>
                                            <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                            <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                            <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                            <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                            <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                            <img loading="lazy" src="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                                        </picture>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-wrap-inner">
                                            <header class="card-header">
                                                <div class="card-separator">&nbsp;</div>
                                                <span class="card-header-date">
                                                    <time datetime="{{$c->updated_at}}">{{ Carbon\Carbon::parse($c->updated_at)->format('Y-m-d') }}</time>
                                                </span>
                                                <h2 class="card-header-title">
                                                    <a href="javascript:void(0)" class="card-link">
                                                        {{$c->title}}
                                                    </a>
                                                </h2>
                                            </header>
                                            <div class="card-summary">
                                                <p>
                                                    {{$c->description}}
                                                </p>
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
                        {{ $tabFourSubOneFirst->links('vendor.pagination.custom') }}
                    </div>
                </footer>
            </div>
        </div>
    </main>
@endsection
