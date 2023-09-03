@php
    use Illuminate\Support\Facades\DB;
    $tabOneSubFourHeader = DB::table('tab_one_sub_four_headers')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubFourFirst = DB::table('tab_one_sub_four_firsts')->orderBy('id',"desc")->take(2)->get();
    $tabOneSubFourSecond = DB::table('tab_one_sub_four_seconds')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubFourThird = DB::table('tab_one_sub_four_thirds')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubFourFourth = DB::table('tab_one_sub_four_fourths')->orderBy('id',"desc")->take(9)->get();

    $datetime1 = new DateTime("01-01-2007");
    $datetime2 = new DateTime(now());
    $difference = $datetime1->diff($datetime2);

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | '.htmlspecialchars($difference->y).' years SSAWO')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabOneSubFourHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source srcset="{{asset('upload/headers/tabOneSubFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source srcset="{{asset('upload/headers/tabOneSubFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source srcset="{{asset('upload/headers/tabOneSubFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source srcset="{{asset('upload/headers/tabOneSubFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source srcset="{{asset('upload/headers/tabOneSubFourHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy" src="{{asset('upload/headers/tabOneSubFourHeader')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
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
                                        <a href="{{ route('focus-women') }}" class="sidebar-nav-item-link subnav_element">Focus on women and girls</a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('global-network') }}" class="sidebar-nav-item-link subnav_element">Global network</a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('technical-specialists') }}" class="sidebar-nav-item-link subnav_element">Technical specialists</a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('years-ssawo') }}" class="sidebar-nav-item-link subnav_element current">{{ $difference->y }} years of SSAWO</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                <article class="article">

                    <div class="content">
                        @foreach($tabOneSubFourSecond as $c)
                        <h3>{{$c->title}}</h3>
                        <p>
                            {{$c->description}}
                        </p>
                    </div>


                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourSecond')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                    {{-- <a href="javascript:void(0)"
                                        class="media-block-element-play popup-video">
                                        <svg aria-hidden="true" class="icon">
                                            <use xlink:href="{{ asset('assets/images/img/svg/icons.svg#play') }}" />
                                        </svg>
                                        <span class="visually-hidden">Play video</span>
                                    </a> --}}
                                    <p class="media-block-overlay-caption">{{$c->title}}</p>
                                </figure>
                            </div>
                        </div>
                    </section>
                    @endforeach

                        @foreach($tabOneSubFourFirst as $c)
                        <h2> {{$c->title}}</h2>
                        <p>
                            {{$c->description}}
                        </p>
                        @endforeach

                </article>
            </div>
        </div>

        <div class="components has-dashboard">
            <section class="media-block-outer   left has-image section">
                <div class="container">
                    @foreach($tabOneSubFourFourth as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourFourth')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                <img loading="lazy" src="{{asset('upload/tabOne/tabOneSubFour/tabOneSubFourFourth')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                            </picture>
                        </figure>

                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}}</h2>
                                    <p>
                                        {{$c->description}}
                                    </p>
                                    {{-- <a href="{{ route('focus-women') }}" class="button" ">Find out more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <section class="wysiwyg section">
                <div class="container">
                    <div class="content">
                        @foreach($tabOneSubFourThird as $c)
                        <h3>{{$c->title}}</h3>
                        <p>
                            {{$c->description}}
                        </p>

                        <p style="border:1px solid red;"> </p>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="section">
                <header class="section-header container">
                    <h2 class="section-header-title">SSAWO today</h2>
                    <p class="section-header-summary"></p>
                </header>
                <div class="container">
                    <div class="cards">
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/img/pictures/missionAndvision.jpg') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/missionAndvision.jpg') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/missionAndvision.jpg') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{ asset('assets/images/img/pictures/missionAndvision.jpg') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{ asset('assets/images/img/pictures/missionAndvision.jpg') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{ asset('assets/images/img/pictures/missionAndvision.jpg') }}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>

                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ url('mission-and-vision') }}" class="card-link" >Mission and vision</a>
                                            </h2>
                                        </header>

                                        <div class="card-summary">
                                            <p>SSAWO SSAWO’s mission and vision is to address issues of drug demand reduction, the
                                                promotion of women rights, youth engagement, and peace. SSAWO gives special
                                                attention to women, female adolescent and children suffering from addiction problems,
                                                right abuses and the empowerment of women and youth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/img/pictures/whatwedo.jpg') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/whatwedo.jpg') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/whatwedo.jpg') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{ asset('assets/images/img/pictures/whatwedo.jpg') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{ asset('assets/images/img/pictures/whatwedo.jpg') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{ asset('assets/images/img/pictures/whatwedo.jpg') }}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ route('what-we-do') }}" class="card-link" >What we do</a>
                                            </h2>
                                        </header>

                                        <div class="card-summary">
                                            <p>We tackle the underlying causes of addiction and gender violence to make the lasting changes in the lives of addicted and vulnerable communities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/img/pictures/wherewework.jpg') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/wherewework.jpg') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/wherewework.jpg') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{ asset('assets/images/img/pictures/wherewework.jpg') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{ asset('assets/images/img/pictures/wherewework.jpg') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{ asset('assets/images/img/pictures/wherewework.jpg') }}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ route('where-we-work') }}" class="card-link" >Where we work</a>
                                            </h2>
                                        </header>

                                        <div class="card-summary">
                                            <p>We work in 34 provinces across Afghanistan to save lives, fight addiction, and achieve social justice.  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
