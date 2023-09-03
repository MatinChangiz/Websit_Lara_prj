@php
    use Illuminate\Support\Facades\DB;
    $tabOneSubTwoHeader = DB::table('tab_one_sub_two_headers')->orderBy('id',"desc")->take(1)->get();
    $tabOneSubTwoFirst = DB::table('tab_one_sub_two_firsts')->orderBy('id',"desc")->take(2)->get();
    $tabOneSubTwoSecond = DB::table('tab_one_sub_two_seconds')->orderBy('id',"desc")->take(1)->get();

    $datetime1 = new DateTime("01-01-2007");
    $datetime2 = new DateTime(now());
    $difference = $datetime1->diff($datetime2);

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Global network')

@section('content')

    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabOneSubTwoHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source srcset="{{asset('upload/headers/tabOneSubTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source srcset="{{asset('upload/headers/tabOneSubTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source srcset="{{asset('upload/headers/tabOneSubTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source srcset="{{asset('upload/headers/tabOneSubTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source srcset="{{asset('upload/headers/tabOneSubTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy" src="{{asset('upload/headers/tabOneSubTwoHeader')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
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
                                        <a href="{{ route('focus-women') }}" class="sidebar-nav-item-link subnav_element">
                                            Focus on women and girls
                                        </a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('global-network') }}" class="sidebar-nav-item-link subnav_element">
                                            Global network
                                        </a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('technical-specialists') }}" class="sidebar-nav-item-link subnav_element">
                                            Technical specialists
                                        </a>
                                    </li>
                                    <li class="sidebar-nav-item" role="tab">
                                        <a href="{{ route('years-ssawo') }}" class="sidebar-nav-item-link subnav_element">
                                            {{ $difference->y }} years of SSAWO
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                @foreach($tabOneSubTwoFirst as $c)
                <article class="article">
                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source
                                            srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst')}}/{{{$c->image}}} 1x"
                                            media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy"
                                            src="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst')}}/{{{ $c->image }}}"
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
            <section class="media-block-outer  dark left has-image section">
                <div class="container">
                    @foreach($tabOneSubTwoSecond as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                <source srcset="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                <img loading="lazy" src="{{asset('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                            </picture>
                        </figure>

                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}}</h2>
                                    <p>
                                       {{$c->description}}
                                    </p>
                                    {{-- <a href="{{ route('where-we-work') }}" class="button" ">See our locations</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- <section class="wysiwyg section">
                <div class="container">
                    <div class="content">
                        <h2>SSAWO Secretariat </h2>
                        <p>
                            <a href="{{ route('where-we-work') }}" title="">The SSAWO Secretariat</a> coordinates and supports the CARE network to achieve common impact goals and shared global priorities. It leads CARE International’s humanitarian coordination and represents the confederation at the United Nations, the European Union, and other global forums. 
                        </p>
                    </div>
                </div>
            </section> --}}

            <section class="section">
                <div class="container">
                    <div class="cards">
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
                                                <a href="{{ url('what-we-do') }}" class="card-link" >What we do</a>
                                            </h2>
                                        </header>
                                        <div class="card-summary">
                                            <p>
                                                We tackle the underlying causes of addiction and gender violence to make the lasting changes in the lives of addicted and vulnerable communities.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/img/pictures/governance.jpg') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/governance.jpg') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/governance.jpg') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{ asset('assets/images/img/pictures/governance.jpg') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{ asset('assets/images/img/pictures/governance.jpg') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{ asset('assets/images/img/pictures/governance.jpg') }}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>

                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="{{ url('governance') }}" class="card-link" >Governance</a>
                                            </h2>
                                        </header>
                                        <div class="card-summary">
                                            <p>
                                                The SSAWO organization is supervized by several governance and leadership bodies, all regulated by a common Code.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source srcset="{{ asset('assets/images/img/pictures/ourleaders.jpg') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/ourleaders.jpg') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                                        <source srcset="{{ asset('assets/images/img/pictures/ourleaders.jpg') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                                        <source srcset="{{ asset('assets/images/img/pictures/ourleaders.jpg') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                                        <source srcset="{{ asset('assets/images/img/pictures/ourleaders.jpg') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                                        <img loading="lazy" src="{{ asset('assets/images/img/pictures/ourleaders.jpg') }}" width="560" height="320" alt="" typeof="foaf:Image" />
                                    </picture>
                                </div>
                                    <div class="card-wrap">
                                        <div class="card-wrap-inner">
                                            <header class="card-header">
                                                <h2 class="card-header-title">
                                                    <a href="{{ url('our-leaders') }}" class="card-link" >Our leaders</a>
                                                </h2>
                                            </header>
                                            <div class="card-summary">
                                                <p>
                                                    Find information about SSAWO&#039;s Executive Director and Supervisory Board.
                                                </p>
                                            </div>
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
