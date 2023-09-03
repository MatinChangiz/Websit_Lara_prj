@php
    use Illuminate\Support\Facades\DB;
    $missionAndVisionHeader = DB::table('mission_and_vision_headers')->orderBy('id',"desc")->take(1)->get();
    $missionAndVisionFirst = DB::table('mission_and_vision_firsts')->orderBy('id',"desc")->get();
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Mission And Vision')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($missionAndVisionHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source
                            srcset=" {{asset('upload/headers/missionAndVisionHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset=" {{asset('upload/headers/missionAndVisionHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset=" {{asset('upload/headers/missionAndVisionHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source
                            srcset=" {{asset('upload/headers/missionAndVisionHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source
                            srcset=" {{asset('upload/headers/missionAndVisionHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy"
                            src=" {{asset('upload/headers/missionAndVisionHeader')}}/{{{$c->image}}} "
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

                <article class="article">
                    <div class="content">
                        @foreach($missionAndVisionFirst as $c)
                        <h2>{{$c->title}}</h2>
                        <p>{{$c->description}} </p>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection
