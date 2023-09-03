@php
    use Illuminate\Support\Facades\DB;
    $aboutUsHeader = DB::table('about_us_headers')->orderBy('id',"desc")->take(1)->get();
    $aboutUsFirst = DB::table('about_us_firsts')->orderBy('id',"desc")->take(2)->get();
    $aboutUs = DB::table('about_us')->orderBy('id',"desc")->get();
@endphp
@extends('layouts/masters')

@section('title', 'SSAWO | About Us')

@section('style')
    <link rel="stylesheet" media="all"
        href="{{ asset('assets/css/css_JQyZ9StD4-4I5jikYtL8icbvn1b-f6xMTWUzpXDhKlc.css') }}" />
@endsection

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($aboutUsHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source
                            srcset="{{asset('upload/headers/aboutUsHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/aboutUsHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/aboutUsHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source
                            srcset="{{asset('upload/headers/aboutUsHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source
                            srcset="{{asset('upload/headers/aboutUsHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy"
                            src="{{asset('upload/headers/aboutUsHeader')}}/{{{$c->image}}}"
                            width="560" height="320" alt="" typeof="foaf:Image" />
                    </picture>
                </figure>

                <header class="hero-info">
                    <div class="hero-inner">
                        <h1 class="hero-title">{{$c->title}}</h1>
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

                @foreach($aboutUsFirst as $c)
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
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUsFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUsFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUsFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="820" height="461" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUsFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="750" height="422" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUsFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="450" height="253" />
                                        <img loading="lazy"
                                            src="{{asset('upload/aboutUs/aboutUsFirst')}}/{{{$c->image}}}"
                                            width="450" height="253" alt="" typeof="foaf:Image" />
                                    </picture>

                                    <p class="media-block-overlay-caption">
                                        {{$c->title}}
                                    </p>
                                </figure>
                            </div>
                        </div>
                    </section>
                    <div class="content"></div>
                </article>
                @endforeach
            </div>
        </div>

        <div class="components has-dashboard">
            <section class="section">
                <header class="section-header container">
                    <h2 class="section-header-title">Learn more about us</h2>
                    <p class="section-header-summary"></p>
                </header>

                <div class="container">
                    <div class="cards">
                        @foreach($aboutUs as $c)
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUs')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUs')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUs')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUs')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/aboutUs/aboutUs')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="600" height="492" />
                                        <img loading="lazy"
                                            src="{{asset('upload/aboutUs/aboutUs')}}/{{{$c->image}}}"
                                            width="390" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link"> {{$c->title}}</a>
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
        </div>
    </main>
@endsection
