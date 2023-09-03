@php
    use Illuminate\Support\Facades\DB;
    $tabFourHeader = DB::table('tab_four_headers')->orderBy('id',"desc")->take(1)->get();
    $tabFourFirst = DB::table('tab_four_firsts')->orderBy('id',"desc")->take(10)->get();
    $tabFourSubOneFirst = DB::table('tab_four_sub_one_firsts')->orderBy('id',"desc")->take(3)->get();
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Impact Data')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabFourHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source srcset="{{asset('upload/headers/tabFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/headers/tabFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/headers/tabFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                        <source srcset="{{asset('upload/headers/tabFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                        <source srcset="{{asset('upload/headers/tabFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                        <img loading="lazy" src="{{asset('upload/headers/tabFourHeader')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                    </picture>
                    SSAWO Kabul
                    <figcaption>SSAWO {{$c->title}}</figcaption>
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
                                        <a href="{{ route('stories') }}" class="sidebar-nav-item-link subnav_element">Impact stories</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                @foreach($tabFourFirst as $c)
                <article class="article">
                    <div class="content">
                        <h2>{{$c->title}}</h2>
                        <p>
                            {{$c->description1}}
                        </p>
                    </div>

                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source srcset="{{asset('upload/tabFour/tabFourFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                                        <source srcset="{{asset('upload/tabFour/tabFourFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                                        <source srcset="{{asset('upload/tabFour/tabFourFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                                        <source srcset="{{asset('upload/tabFour/tabFourFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                                        <source srcset="{{asset('upload/tabFour/tabFourFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                                        <img loading="lazy" src="{{asset('upload/tabFour/tabFourFirst')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                                    </picture>
                                </figure>
                            </div>
                        </div>
                    </section>

                    <div class="content">

                        <p>
                            {{$c->description2}}
                        </p>
                    </div>
                    <div class="content"></div>
                </article>

                @endforeach
            </div>
        </div>

        <section class="section">
            <header class="section-header container">
                <h2 class="section-header-title">The story of our impact</h2>
                {{-- <p class="section-header-summary">

                </p> --}}
            </header>

            <div class="container">
                <div class="cards">
                    @foreach($tabFourSubOneFirst as $c)
                    <article>
                        <div class="card  has-image">
                            <div class="card-image">
                                <picture>
                                    <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                                    <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                                    <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                                    <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                                    <source srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                                    <img loading="lazy" src="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                                </picture>
                            </div>
                            <div class="card-wrap">
                                <div class="card-wrap-inner">
                                    <header class="card-header">
                                        <h2 class="card-header-title">
                                            <a href="javascript:void(0)" class="card-link" >{{$c->title}}</a>
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
    </main>
@endsection
