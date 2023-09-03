@php
    use Illuminate\Support\Facades\DB;
    $tabTwoHeader = DB::table('tab_two_headers')->orderBy('id',"desc")->take(1)->get();
    $tabTwoFirst = DB::table('tab_two_firsts')->orderBy('id',"desc")->take(2)->get();
    $tabTwoSecond = DB::table('tab_two_seconds')->orderBy('id',"desc")->take(1)->get();
    $tabTwoThird = DB::table('tab_two_thirds')->orderBy('id',"desc")->take(1)->get();
    $fights = DB::table('fight_poverties')->orderBy('id',"asc")->paginate(9);

@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | What we do')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($tabTwoHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source
                            srcset="{{asset('upload/headers/tabTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/tabTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680" />
                        <source
                            srcset="{{asset('upload/headers/tabTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453" />
                        <source
                            srcset="{{asset('upload/headers/tabTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530" />
                        <source
                            srcset="{{asset('upload/headers/tabTwoHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400" />
                        <img loading="lazy"
                            src="{{asset('upload/headers/tabTwoHeader')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
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
                                    @foreach ($fights as $c)
                                    <li class="sidebar-nav-item current" role="tab">
                                        <a href="{{ url('fight', $c->id) }}"
                                            class="sidebar-nav-item-link subnav_element">
                                            {{ $c->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>

                @foreach($tabTwoFirst as $c)
                <article class="article">
                    <div class="content">
                        <h2>{{$c->title}}</h2>
                        <p>
                            {{$c->description}}
                        </p>
                    </div>
                    <section class="media-block-outer  left none has-image section">
                        <div class="container">
                            <div class="media-block">
                                <figure class="media-block-element">
                                    <picture>
                                        <source srcset="{{asset('upload/tabTwo/tabTwoFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720" />
                                        <source srcset="{{asset('upload/tabTwo/tabTwoFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720" />
                                        <source srcset="{{asset('upload/tabTwo/tabTwoFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461" />
                                        <source srcset="{{asset('upload/tabTwo/tabTwoFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422" />
                                        <source srcset="{{asset('upload/tabTwo/tabTwoFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253" />
                                        <img loading="lazy" src="{{asset('upload/tabTwo/tabTwoFirst')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                                    </picture>
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
            <section class="section">
                @foreach($tabTwoSecond as $c)
                <header class="section-header container">
                    <h2 class="section-header-title">{{$c->title}}</h2>
                    <p class="section-header-summary">
                        {{$c->description}}
                    </p>
                </header>
                @endforeach

                <div class="container">
                    <div class="cards">
                        @foreach($fights as $c)
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <picture>
                                        <source
                                            srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="390" height="320" />
                                        <source
                                            srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="600" height="492" />
                                        <img loading="lazy"
                                            src="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}}" width="390" height="320" alt=" {{$c->description}}" typeof="foaf:Image" />
                                    </picture>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link">{{$c->title}}</a>
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
                    {{ $fights->links('vendor.pagination.custom') }}
                </div>
            </footer>




            {{-- last content --}}

            <section class="media-block-outer   left has-image section">
                <div class="container">
                    @foreach($tabTwoThird as $c)
                    <div class="media-block">
                        <figure class="media-block-element">
                            <picture>
                                <source
                                    srcset="{{asset('upload/tabTwo/tabTwoThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720" />
                                <source
                                    srcset="{{asset('upload/tabTwo/tabTwoThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720" />
                                <source
                                    srcset="{{asset('upload/tabTwo/tabTwoThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461" />
                                <source
                                    srcset="{{asset('upload/tabTwo/tabTwoThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422" />
                                <source
                                    srcset="{{asset('upload/tabTwo/tabTwoThird')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253" />
                                <img loading="lazy"
                                    src="{{asset('upload/tabTwo/tabTwoThird')}}/{{{$c->image}}}" width="450" height="253" alt="{{$c->description}}" typeof="foaf:Image" />
                            </picture>
                        </figure>
                        <div class="media-block-info">
                            <div class="container">
                                <div class="media-block-content">
                                    <h2 class="media-block-title">{{$c->title}}</h2>

                                    <p>
                                        {{$c->description}}
                                    </p>

                                    {{-- <a href="resources/care-vision-2030.html" class="button" ">Read our Vision 2030 strategy</a> --}}
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
