@php
    use Illuminate\Support\Facades\DB;
    $news = DB::table('press_models')->orderBy('id',"desc")->take(3)->get();
    // $fights = DB::table('fight_poverties')->orderBy('id',"desc")->take(1)->get();
    $tabFourSubOneFirst = DB::table('tab_four_sub_one_firsts')->orderBy('id',"desc")->take(3)->get();
    $tabFiveFirst = DB::table('tab_five_firsts')->orderBy('id',"desc")->take(3)->get();

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Crisis Response')

@section('content')

<main id="main" role="main" class="main clearfix">
    <a id="main-content" tabindex="-1"></a>
    <div data-drupal-messages-fallback class="hidden"></div>

    {{-- header --}}

    <section class="hero-outer has-image section">
        @if($fight)
        <div class="hero">
            <figure class="hero-image">
                <picture>
                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                    <img loading="lazy" src="{{asset('upload/tabTwo/fight')}}/{{{$fight->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                </picture>
                <figcaption>SSAWO / {{$fight->title}}</figcaption>
            </figure>

            <header class="hero-info">
                <div class="hero-inner">
                    <span class="hero-programme">Program</span>
                    <div class="hero-title-with-icon">
                        <span class="hero-title-icon">
                            <img src="{{asset('upload/tabTwo/fight/icon')}}/{{{$fight->imageicon}}}" height="26px" width="33px">
                        </span>
                        <h1 class="hero-title">{{$fight->title}}</h1>
                    </div>
                    <div class="hero-split">
                        <div class="hero-summary">
                            <p>
                                {{$fight->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        @endif
    </section>


    {{-- body --}}

    <div class="on-page-nav-outer">
        <div class="container">
            <nav class="on-page-nav">
                <ul class="on-page-nav-list clearfix">
                    <li class="on-page-nav-item">
                        <a href="#news" class="on-page-nav-item-link">News</a>
                    </li>
                    <li class="on-page-nav-item">
                        <a href="#stories" class="on-page-nav-item-link">Stories</a>
                    </li>
                    <li class="on-page-nav-item">
                        <a href="#resources" class="on-page-nav-item-link">Resources</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="main-section single">
        <div class="container">
            <aside class="sidebar">
                <ul class="sidebar-meta">
                    <li class="sidebar-meta-block info">
                        <ul>
                            @if ($fight)
                            <li class="sidebar-meta-block tags">
                                <h2 class="sidebar-meta-block-title">Tagged</h2>
                                <a href="{{ url('fight', $fight->id) }}" class="sidebar-meta-block-tag">{{ $fight->title }}</a>
                            </li>
                            @endif
                            <li class="sidebar-meta-block sidebar-button">
                                <a href="{{ url('what-we-do') }}"  class="button">See all programs</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>

            @if($fight)
            <div class="article">
                <div class="content">
                    <h2><strong>{{$fight->title2}}</strong></h2>
                        <p>
                            {{$fight->description2}}
                        </p>
                </div>
                <section class="media-block-outer  left light has-image section">
                    <div class="container">
                        <div class="media-block">
                            <figure class="media-block-element">
                                <picture>
                                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image2}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image2}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image2}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image2}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                                    <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$fight->image2}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                                    <img loading="lazy" src="{{asset('upload/tabTwo/fight')}}/{{{$fight->image2}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                                </picture>
                            </figure>
                        </div>
                    </div>
                </section>
                <p style="margin-top:50px; border-top:4px solid red;"></p>
            </div>
            @endif
        </div>
    </div>

    <div class="components has-dashboard">
        <div id="news">
            <section class="cards-outer section">
                <header class="section-header container">
                    <h2 class="section-header-title">Related news
                        <a href="{{ route('news') }}" class="button" >Read more</a>
                    </h2>
                </header>
                <div class="container">
                    <div class="cards">
                        @foreach($news as $c)
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <img srcset="{{asset('upload')}}/{{{$c->image}}} 960w, {{asset('upload')}}/{{{$c->image}}} 560w, {{asset('upload')}}/{{{$c->image}}} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{asset('upload')}}/{{{$c->image}}}" alt="Related news" height="" width="">
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <div class="card-separator">&nbsp;</div>
                                            <span class="card-header-date">
                                                <time datetime="{{$c->updated_at}}">{{ Carbon\Carbon::parse($c->updated_at)->format('Y-m-d') }}</time>
                                            </span>
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >
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
        </div>

        <div id="stories">
            <section class="cards-outer section">
                <header class="section-header container">
                    <h2 class="section-header-title">Related stories
                        <a href="{{ route('stories') }}" class="button" >Read more</a>
                    </h2>
                </header>
                <div class="container">
                    <div class="cards">
                        @foreach($tabFourSubOneFirst as $c)
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <img srcset="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 960w, {{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 560w, {{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{asset('upload/tabFour/tabFourSubOne/tabFourSubOneFirst')}}/{{{$c->image}}}" alt="Related stories" height="" width="">
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <div class="card-separator">&nbsp;</div>
                                            <span class="card-header-date">
                                                <time datetime="{{$c->updated_at}}">{{ Carbon\Carbon::parse($c->updated_at)->format('Y-m-d') }}</time>
                                            </span>
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >
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
        </div>

        <div id="resources">
            <section class="cards-outer section">
                <header class="section-header container">
                    <h2 class="section-header-title">Related resources
                        <a href="{{ route('resources') }}" class="button" >Read more</a>
                    </h2>
                </header>
                <div class="container">
                    <div class="cards">
                        @foreach($tabFiveFirst as $c)
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <img srcset="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 960w, {{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 560w, {{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}}" alt="Related resources" height="" width="">
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <div class="card-separator">&nbsp;</div>
                                            <span class="card-header-date">
                                                <time datetime="{{$c->updated_at}}">{{ Carbon\Carbon::parse($c->updated_at)->format('Y-m-d') }}</time>
                                            </span>
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >
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
        </div>
    </div>
</main>


@endsection
