@php
    use Illuminate\Support\Facades\DB;
    $ourLeadersHeader = DB::table('our_leaders_headers')->orderBy('id',"desc")->take(1)->get();
    $ourLeadersFirst = DB::table('our_leaders_firsts')->orderBy('id',"desc")->take(1)->get();
    $ourLeadersSecond = DB::table('our_leaders_seconds')->orderBy('id',"asc")->get();
    $ourLeadersThird = DB::table('our_leaders_thirds')->orderBy('id',"asc")->get();

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Our Leaders')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($ourLeadersHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source
                            srcset=" {{asset('upload/headers/ourLeadersHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset=" {{asset('upload/headers/ourLeadersHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset=" {{asset('upload/headers/ourLeadersHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source
                            srcset=" {{asset('upload/headers/ourLeadersHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source
                            srcset=" {{asset('upload/headers/ourLeadersHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy"
                            src=" {{asset('upload/headers/ourLeadersHeader')}}/{{{$c->image}}}"
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
                        <h2 class="sidebar-title">
                            In this section
                        </h2>
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
                                    <li class="sidebar-nav-item current" role="tab">
                                        <a href="{{ url('mission-and-vision') }}"
                                            class="sidebar-nav-item-link subnav_element">Mission and vision</a>
                                    </li>
                                    <li class="sidebar-nav-item current" role="tab">
                                        <a href="{{ url('our-leaders') }}" class="sidebar-nav-item-link subnav_element">Our leaders</a>
                                    </li>
                                    <li class="sidebar-nav-item current" role="tab">
                                        <a href="{{ route('contact') }}"
                                            class="sidebar-nav-item-link subnav_element">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>


                @foreach($ourLeadersFirst as $c)
                <article class="article">
                    <div class="content">
                        <h2>Our Executive Director</h2>
                        <h3>{{$c->title}}</h3>
                    </div>
                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="1280"
                                            height="720" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="1280"
                                            height="720" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="820"
                                            height="461" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="750"
                                            height="422" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="450"
                                            height="253" />
                                        <img loading="lazy"
                                            src=" {{asset('upload/ourLeaders/ourLeadersFirst')}}/{{{$c->image}}}"
                                            width="450" height="253"
                                            alt=""
                                            typeof="foaf:Image" />
                                    </picture>
                                </figure>

                            </div>
                        </div>
                    </section>
                    <div class="content">
                        <h4>About {{$c->title}}</h4>
                        <p>
                            {{$c->description}}
                        </p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

        <div class="components has-dashboard">
            <section class="profile-outer  section">
                <header class="section-header container">
                    <h2 class="section-header-title">
                        Supervisory
                    </h2>
                    <p class="section-header-summary"></p>
                </header>
                <div class="container">
                    <div class="profile">
                        @foreach($ourLeadersSecond as $c)
                        <div class="profile-element">
                            <div class="profile-item" data-overlay="{{$c->title}}">
                                <div class="profile-image">
                                    <picture>
                                        <source
                                            srcset="{{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset="{{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset="{{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset="{{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset="{{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="600"
                                            height="492" />
                                        <img loading="lazy"
                                            src="{{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}}"
                                            width="390" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>

                                <div class="profile-wrap">
                                    <h3 class="profile-name">{{$c->title}}</h3>
                                    <h4 class="profile-title">{{$c->position}}</h4>
                                </div>
                            </div>

                            <div class="profile-summary" id="{{$c->title}}">
                                <span class="profile-summary-close">
                                    <svg aria-hidden="true" class="icon">
                                        <use xlink:href="{{ asset('assets/images/img/svg/icons.svg#close') }}" />close
                                    </svg>
                                </span>

                                <div class="profile-summary-inner">
                                    <div class="profile-image">
                                        <picture>
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 1440px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 1280px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 960px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 700px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 560px)" type="image/webp" width="600"
                                                height="492" />
                                            <img loading="lazy"
                                                src=" {{asset('upload/ourLeaders/ourLeadersSecond')}}/{{{$c->image}}}"
                                                width="390" height="320" alt="" typeof="foaf:Image" />
                                        </picture>
                                    </div>

                                    <h3 class="profile-name">{{$c->title}}</h3>
                                    <h4 class="profile-title">{{$c->position}}</h4>
                                    {{-- <ul class="profile-meta">
                                    </ul> --}}

                                    <div class="profile-summary-copy">
                                        <p>
                                            {{$c->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="profile-overlay"></div>
            </section>




            <section class="profile-outer  section">
                <header class="section-header container">
                    <h2 class="section-header-title">
                        Our Key Personnel
                    </h2>
                    <p class="section-header-summary"></p>
                </header>
                <div class="container">
                    <div class="profile">
                        @foreach($ourLeadersThird as $c)
                        <div class="profile-element">
                            <div class="profile-item" data-overlay="{{$c->title}}">
                                <div class="profile-image">
                                    <picture>
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="390"
                                            height="320" />
                                        <source
                                            srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="600"
                                            height="492" />
                                        <img loading="lazy"
                                            src=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}}"
                                            width="390" height="320" alt="Portrait of Allison Burden"
                                            typeof="foaf:Image" />

                                    </picture>
                                </div>

                                <div class="profile-wrap">
                                    <h3 class="profile-name">{{$c->title}}</h3>
                                    <h4 class="profile-title">{{$c->position}}</h4>
                                </div>
                            </div>

                            <div class="profile-summary" id="{{$c->title}}">
                                <span class="profile-summary-close">
                                    <svg aria-hidden="true" class="icon">
                                        <use xlink:href="{{ asset('assets/images/img/svg/icons.svg#close') }}" />close
                                    </svg>
                                </span>
                                <div class="profile-summary-inner">
                                    <div class="profile-image">
                                        <picture>
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 1440px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 1280px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 960px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset=" {{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 700px)" type="image/webp" width="390"
                                                height="320" />
                                            <source
                                                srcset="{{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}} 1x"
                                                media="all and (min-width: 560px)" type="image/webp" width="600"
                                                height="492" />
                                            <img loading="lazy"
                                                src="{{asset('upload/ourLeaders/ourLeadersThird')}}/{{{$c->image}}}"
                                                width="390" height="320" alt="{{$c->title}}"
                                                typeof="foaf:Image" />

                                        </picture>
                                    </div>

                                    <h3 class="profile-name">{{$c->title}}</h3>

                                    <h4 class="profile-title">{{$c->position}}</h4>
                                    {{-- <ul class="profile-meta">
                                        <li class="profile-meta-item">
                                            <a href="#"
                                                class="twitter profile-meta-item-link">
                                                <svg aria-hidden="true" class="icon">
                                                    <use xlink:href="{{ asset('assets/images/img/svg/icons.svg#twitter') }}" />
                                                    Twitter
                                                </svg>
                                                <span
                                                    class="profile-meta-item-text visually-hidden">
                                                </span>
                                            </a>
                                        </li>
                                    </ul> --}}

                                    <div class="profile-summary-copy">
                                        <p>
                                            {{$c->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="profile-overlay"></div>
            </section>
        </div>
    </main>
@endsection
