@php
    use Illuminate\Support\Facades\DB;
    $tabOneSubThreeHeader = DB::table('tab_one_sub_three_headers')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubThreeFirst = DB::table('tab_one_sub_three_firsts')->orderBy('id',"desc")->take(2)->get();
    $tabOneSubThreeSecond = DB::table('tab_one_sub_three_seconds')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubThreeThird = DB::table('tab_one_sub_three_thirds')->orderBy('id',"desc")->take(1)->get();

    $datetime1 = new DateTime("01-01-2007");
    $datetime2 = new DateTime(now());
    $difference = $datetime1->diff($datetime2);

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Technical specialist')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabOneSubThreeHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source
                            srcset="{{asset('upload/headers/tabOneSubThreeHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubThreeHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubThreeHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubThreeHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source
                            srcset="{{asset('upload/headers/tabOneSubThreeHeader')}}/{{{$c->image}}} 1x"
                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy"
                            src="{{asset('upload/headers/tabOneSubThreeHeader')}}/{{{$c->image}}}"
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
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('focus-women') }}"class="sidebar-nav-item-link subnav_element">Focus on women and girls</a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('global-network') }}" class="sidebar-nav-item-link subnav_element">Global network</a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('technical-specialists') }}" class="sidebar-nav-item-link subnav_element">Technical specialists</a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('years-ssawo') }}" class="sidebar-nav-item-link subnav_element">{{ $difference->y }} years of SSAWO</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                @foreach($tabOneSubThreeFirst as $c)
                <article class="article">
                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy"
                                            src="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst')}}/{{{ $c->image }}}"
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
                    @foreach($tabOneSubThreeThird as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeThird')}}/{{{ $c->image }}} 1x"
                                    media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeThird')}}/{{{ $c->image }}} 1x"
                                    media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeThird')}}/{{{ $c->image }}} 1x"
                                    media="all and (min-width: 960px)" type="image/webp" width="1280"
                                    height="453" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeThird')}}/{{{ $c->image }}} 1x"
                                    media="all and (min-width: 700px)" type="image/webp" width="960"
                                    height="530" />
                                <source
                                    srcset="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeThird')}}/{{{ $c->image }}} 1x"
                                    media="all and (min-width: 560px)" type="image/webp" width="700"
                                    height="400" />
                                <img loading="lazy"
                                    src="{{asset('upload/tabOne/tabOneSubThree/tabOneSubThreeThird')}}/{{{ $c->image }}}"
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
                                    {{-- <a href="{{ route('impact-data') }}" class="button" ">Find out more</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>


            <section class="wysiwyg section">
                <div class="container">
                    @foreach($tabOneSubThreeSecond as $c)
                    <div class="content">
                        <h2>{{$c->title}}  </h2>
                        <p>
                            {{$c->description}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </section>


            {{-- <section class="section">
                <header class="section-header container">
                    <h2 class="section-header-title">Monitoring our work</h2>
                    <p class="section-header-summary"></p>
                </header>

                <div class="container">
                    <div class="cards">
                        <article>
                            <div class="card ">
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ route('resources') }}" class="card-link" >Research and reports</a>
                                            </h2>
                                        </header>

                                        <div class="card-summary">
                                            <p>
                                                Read how CARE International analyzes our program and impact data to monitor our progress towards achieving the Global Goals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="card ">
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ url('accountability-and-transparency') }}" class="card-link" >Accountability and transparency</a>
                                            </h2>
                                        </header>

                                        <div class="card-summary">
                                            <p>
                                                CARE International is committed to meeting international standards of quality and accountability for all our partners, people, and communities we work with.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="card ">
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ route('what-we-do') }}" class="card-link" >What we do</a>
                                            </h2>
                                        </header>
                                        <div class="card-summary">
                                            <p>
                                                We tackle the underlying causes of poverty and social injustice to deliver lasting change in the lives of poor and vulnerable communities.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section> --}}
        </div>
    </main>
@endsection
