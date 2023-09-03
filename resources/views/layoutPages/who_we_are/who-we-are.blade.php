@php
    use Illuminate\Support\Facades\DB;
    $tabOneHeader = DB::table('tab_one_headers')->orderBy('id',"desc")->take(1)->get();
    $tabOneFirst = DB::table('tab_one_firsts')->orderBy('id',"desc")->take(2)->get();
    $tabOneSecond = DB::table('tab_one_seconds')->orderBy('id',"desc")->take(1)->get();
    $tabOneThird = DB::table('tab_one_thirds')->orderBy('id',"desc")->take(1)->get();

    $datetime1 = new DateTime("01-01-2007");
    $datetime2 = new DateTime(now());
    $difference = $datetime1->diff($datetime2);

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Who we are')

@section('content')

    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabOneHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source srcset="{{asset('upload/headers/tabOneHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source srcset="{{asset('upload/headers/tabOneHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source srcset="{{asset('upload/headers/tabOneHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source srcset="{{asset('upload/headers/tabOneHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source srcset="{{asset('upload/headers/tabOneHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy" src="{{asset('upload/headers/tabOneHeader')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                    </picture>
                </figure>
                <header class="hero-info">
                    <div class="hero-inner">
                        <h1 class="hero-title">{{$c->title}}</h1>
                        <div class="hero-split">
                            <div class="hero-summary">
                                <p>
                                <section>
                                    <header>
                                        <p>
                                            {{$c->description}}
                                        </p>
                                    </header>
                                </section>
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
                        <h2 class="sidebar-title">In this section</h2>
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
                                            class="sidebar-nav-item-link subnav_element">
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


                @foreach($tabOneFirst as $c)
                <article class="article">
                    <div class="content">
                        <p>
                            {{$c->description}}
                        </p>
                    </div>
                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source srcset="{{asset('upload/tabOne/tabOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720" />
                                        <source srcset="{{asset('upload/tabOne/tabOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720" />
                                        <source srcset="{{asset('upload/tabOne/tabOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461" />
                                        <source srcset="{{asset('upload/tabOne/tabOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422" />
                                        <source srcset="{{asset('upload/tabOne/tabOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253" />
                                        <img loading="lazy" src="{{asset('upload/tabOne/tabOneFirst')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                                    </picture>
                                    <p class="media-block-overlay-caption">
                                        {{$c->title}}
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <p style="width:100%; height:30px;"></p>
                    </section>
                </article>

                @endforeach

            </div>
        </div>
        <div class="components has-dashboard">
            <section class="media-block-outer   left has-image section">
                <div class="container">
                    @foreach($tabOneSecond as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source srcset="{{asset('upload/tabOne/tabOneSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720" />
                                <source srcset="{{asset('upload/tabOne/tabOneSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720" />
                                <source srcset="{{asset('upload/tabOne/tabOneSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461" />
                                <source srcset="{{asset('upload/tabOne/tabOneSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422" />
                                <source srcset="{{asset('upload/tabOne/tabOneSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253" />
                                <img loading="lazy" src="{{asset('upload/tabOne/tabOneSecond')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                            </picture>
                        </figure>
                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}}</h2>
                                    <p>
                                        {{$c->description}}
                                    </p>
                                    {{-- <a href="about-us/mission-and-vision.html"
                                        class="button" ">Learn more about our mission</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <section class="media-block-outer  dark right has-image section">
                <div class="container">
                    @foreach($tabOneThird as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source srcset="{{asset('upload/tabOne/tabOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720" />
                                <source srcset="{{asset('upload/tabOne/tabOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720" />
                                <source srcset="{{asset('upload/tabOne/tabOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461" />
                                <source srcset="{{asset('upload/tabOne/tabOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422" />
                                <source srcset="{{asset('upload/tabOne/tabOneThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253" />
                                <img loading="lazy" src="{{asset('upload/tabOne/tabOneThird')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                            </picture>
                        </figure>
                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}}</h2>
                                    <p>
                                        {{$c->description}}
                                    </p>
                                    {{-- <a href="resources/care-vision-2030.html" class="button" ">Read
                                            our
                                            Vision 2030 strategy</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
