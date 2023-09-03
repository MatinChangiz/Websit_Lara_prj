@php
    use Illuminate\Support\Facades\DB;
    $tabOneSubOneHeader = DB::table('tab_one_sub_one_headers')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubOneFirst = DB::table('tab_one_sub_one_firsts')->orderBy('id',"desc")->take(2)->get();
    $tabOneSubOneSecond = DB::table('tab_one_sub_one_seconds')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubOneThird = DB::table('tab_one_sub_one_thirds')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubOneFourth = DB::table('tab_one_sub_one_fourths')->orderBy('id',"desc")->paginate(6);

    $datetime1 = new DateTime("01-01-2007");
    $datetime2 = new DateTime(now());
    $difference = $datetime1->diff($datetime2);

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Our Focus on women and girls')

@section('content')

    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabOneSubOneHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source
                            srcset="{{asset('upload/headers/tabOneSubOneHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubOneHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubOneHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubOneHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubOneHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy"
                            src="{{asset('upload/headers/tabOneSubOneHeader')}}/{{{$c->image}}}"
                            width="560" height="320" alt="" typeof="foaf:Image" />
                    </picture>
                </figure>

                <header class="hero-info">
                    <div class="hero-inner">
                        <h1 class="hero-title">
                            {{$c->title}}
                        </h1>
                        <div class="hero-split">
                            <div class="hero-summary">
                                <p>
                                    <p>
                                        {{$c->description}}
                                    </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            @endforeach
        </section>

        <div class="main-section" id="content">
            <div class="container">
                <aside class="sidebar">
                    <div class="sidebar-block">
                        <h2 class="sidebar-title"> In this section </h2>
                        <button for="sidebar-open" id="sidebar-show-button" class="sidebar-show-button accordion-trigger"
                            aria-controls="sidebar" aria-expanded="false">
                            <span class="visually-hidden">Show sidebar</span>
                            <svg aria-hidden="true" class="icon">
                                <use xlink:href="{{ asset('assets/images/img/svg/icons.svg#arrow-down') }}" />
                            </svg>
                        </button>

                        <div class="sidebar-inner" aria-expanded="false" id="sidebar">
                            <nav class="sidebar-nav">
                                <ul class="sidebar-nav-list" role="tablist">
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('focus-women') }}"
                                            class="sidebar-nav-item-link subnav_element current">
                                            Focus on women and girls
                                        </a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('global-network') }}"
                                            class="sidebar-nav-item-link subnav_element">
                                            Global network
                                        </a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('technical-specialists') }}"
                                            class="sidebar-nav-item-link subnav_element">
                                            Technical specialists
                                        </a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('years-ssawo') }}"
                                            class="sidebar-nav-item-link subnav_element">
                                            {{ $difference->y }} years of SSAWO
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                @foreach($tabOneSubOneFirst as $c)
                <article class="article">
                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy"
                                            src="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneFirst')}}/{{{$c->image}}}"
                                            width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </figure>
                            </div>
                        </div>
                    </section>

                    <div class="content">
                        <h2> {{$c->title}}</h2>
                        <p>
                            {{$c->description}}
                        </p>

                    </div>
                </article>
                @endforeach
            </div>
        </div>

        <div class="components has-dashboard">
            <section class="media-block-outer   left has-image section">
                <div class="container">
                    @foreach($tabOneSubOneSecond as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}} 1x"
                                    media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}} 1x"
                                    media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}} 1x"
                                    media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}} 1x"
                                    media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}} 1x"
                                    media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                <img loading="lazy"
                                    src="{{asset('upload/tabOne/tabOneSubOne/tabOneSubOneSecond')}}/{{{$c->image}}}"
                                    width="560" height="320" alt="" typeof="foaf:Image" />
                            </picture>
                        </figure>

                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}}</h2>
                                    <p>
                                       {{$c->description}}
                                    </p>
                                    {{-- <a href="resources/rapid-gender-analysis-syria.html" class="button" ">Read the RGA</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <section class="media-block-outer  dark left has-image section">
                <div class="container">
                    @foreach($tabOneSubOneThird as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                <img loading="lazy" src="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneThird')}}/{{{$c->image }}}" width="560" height="320" alt="" typeof="foaf:Image" />
                            </picture>
                        </figure>

                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}} </h2>
                                    <p>
                                        {{$c->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </section>

            <section class="section">
                <header class="section-header container">
                    <h2 class="section-header-title">Stories about our focus on women and girls</h2>
                    <p class="section-header-summary">Read recent news and stories about our work to achieve gender equality.</p>
                </header>

                <div class="container">
                    <div class="cards">
                        @foreach($tabOneSubOneFourth as $c)
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{ asset('upload/tabOne/tabOneSubOne/tabOneSubOneFourth')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>

                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
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
                    {{ $tabOneSubOneFourth->links('vendor.pagination.custom') }}
                </div>
            </footer>
        </div>
    </main>
@endsection
