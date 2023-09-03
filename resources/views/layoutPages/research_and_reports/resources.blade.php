@php
    use Illuminate\Support\Facades\DB;
    $tabFiveFirst = DB::table('tab_five_firsts')->orderBy('id',"desc")->paginate(12);
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Research')

@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <div class="main-header">
            <header class="container">
                <div class="main-header-content">
                    <h1 class="main-header-title">Research &amp; reports</h1>
                </div>
            </header>
        </div>

        <div class="views-element-container">
            <div>
                <section class="cards-outer section">
                    <div class="container">
                        <div class="cards">
                            @foreach($tabFiveFirst as $c)
                            <article>
                                <div class="card  has-image">
                                    <div class="card-image">
                                        <p class="card-featured">Featured</p>
                                        <picture>
                                            <source srcset="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                                            <source srcset="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                                            <source srcset="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                                            <source srcset="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                                            <source srcset="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                                            <img loading="lazy" src="{{asset('upload/tabFive/tabFiveFirst')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                                        </picture>
                                    </div>

                                    <div class="card-wrap">
                                        <div class="card-wrap-inner">
                                            <header class="card-header">
                                                <div class="card-separator">&nbsp;</div>
                                                <span class="card-header-date">
                                                    <time datetime="{{$c->updated_at}}">{{ Carbon\Carbon::parse($c->updated_at)->format('Y-m-d') }}</time>
                                                </span>
                                                <h2 class="card-header-title">
                                                    <a href="javascript:void(0)" class="card-link">
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

                <footer class="pagination-outer">
                    <div class="container">
                        {{ $tabFiveFirst->links('vendor.pagination.custom') }}
                    </div>
                </footer>

            </div>
        </div>
    </main>
@endsection
