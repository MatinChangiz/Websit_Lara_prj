@php
    use Illuminate\Support\Facades\DB;
    $fights = DB::table('fight_poverties')->get();
    $indexHeader = DB::table('index_headers')->orderBy('id',"desc")->take(1)->get();
    $indexFirst = DB::table('index_firsts')->orderBy('id',"desc")->take(1)->get();
    $indexSecond = DB::table('index_seconds')->orderBy('id',"desc")->take(1)->get();
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | SSAWO works to fight poverty and achieve social justice.')

@section('content')

<main id="main" role="main" class="main main-homepage clearfix">
    <a id="main-content" tabindex="-1"></a>
    <div data-drupal-messages-fallback class="hidden"></div>
    <section class="hero-outer full split secondary has-image section">
        <div class="hero">
            @foreach($indexHeader as $c)
			<figure class="hero-image">
                <picture>
                    <source srcset="{{asset('upload/headers/indexHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1920" height="680"/>
                    <source srcset="{{asset('upload/headers/indexHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1920" height="680"/>
                    <source srcset="{{asset('upload/headers/indexHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="1280" height="453"/>
                    <source srcset="{{asset('upload/headers/indexHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="960" height="530"/>
                    <source srcset="{{asset('upload/headers/indexHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="700" height="400"/>
                    <img loading="lazy" src="{{asset('upload/headers/indexHeader')}}/{{{$c->image}}}" width="560" height="320" alt="" typeof="foaf:Image" />
                </picture>
            </figure>

			<header class="hero-info">
				<div class="hero-inner">
					<h2 class="hero-title"> {{$c->title}}</h2>
                    <div class="hero-split">
						<div class="hero-summary">
							<p>
                                {{$c->description}}
                            </p>
						</div>

                        <a href="{{ url('about') }}" class="button " >More about our fight</a>
					</div>
				</div>
			</header>
            @endforeach
		</div>
	</section>

    <section class="cards-outer light section">
        <header class="section-header container">
            <h2 class="section-header-title">How we fight addiction and gender Violance</h2>
            <p class="section-header-summary"></p>
        </header>

        <div class="container">
            <div class="cards">
                @foreach($fights as $c)
                <article>
                    <div class="card  has-image has-category">
                        <div class="card-image">
                            <picture>
                                <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="600" height="492"/>
                                <img loading="lazy" src="{{asset('upload/tabTwo/fight')}}/{{{$c->image}}}" width="390" height="320" alt="{{$c->description}}" typeof="foaf:Image" />
                            </picture>
                        </div>

                        <div class="card-wrap">
                            <div class="card-wrap-inner">
                                <header class="card-header">
                                    <div class="card-category">
                                        <div class="card-category-icon">
                                            <img src="{{asset('upload/tabTwo/fight/icon')}}/{{{$c->imageicon}}}" height="26px" width="33px">
                                        </div>
                                    </div>

                                    <h2 class="card-header-title">
                                        <a href="{{ url('fight', $c->id) }}" class="card-link" >{{$c->title}}</a>
                                    </h2>
                                </header>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

	<section class="media-block-outer dark has-image section">
        <div class="container">
            @foreach($indexFirst as $c)
		    <div class="media-block">
                <figure class="media-block-element">
                    <picture>
                        <source srcset="{{asset('upload/mainPage/indexFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/mainPage/indexFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/mainPage/indexFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                        <source srcset="{{asset('upload/mainPage/indexFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                        <source srcset="{{asset('upload/mainPage/indexFirst')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                        <img loading="lazy" src="{{asset('upload/mainPage/indexFirst')}}/{{{$c->image}}}" width="450" height="253" alt="{{$c->description}}" typeof="foaf:Image" />
                    </picture>
                </figure>

                <div class="media-block-info">
                    <div class="container">
                        <div class="media-block-content">
                            <h2 class="media-block-title"> {{$c->title}}</h2>
                            <p>
                                {{$c->description}}
                            </p>

                            {{-- <a href="javascript:void(0)" class="button" >Read about our COVID-19 response</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
	    </div>
    </section>

    <section class="statistic-outer light section">
        <header class="section-header container">
			<h2 class="section-header-title">A peacful, developed and free drug & violence Afghanistan</h2>
            <p class="section-header-summary">
                We seek to implement gender-responsive, nationaly-led and economic-efficient programs around Afghanistan.
            </p>
        </header>

        <div class="container">
			<ul class="statistic">
				<li class="statistic-item">
					<div class="statistic-value">
						<span class="statistic-value-number">61%</span>
					</div>
					<div class="statistic-summary">
						<p>of the direct participants of our programs are women and girls.</p>
					</div>
				</li>
				<li class="statistic-item">
					<div class="statistic-value">
						<span class="statistic-value-number">97%</span>
					</div>
                    <div class="statistic-summary">
						<p>of our staff members are from the country where they work.</p>
					</div>
                </li>
                <li class="statistic-item">
                    <div class="statistic-value">
						<span class="statistic-value-number">89%</span>
					</div>
                    <div class="statistic-summary">
						<p>of all our funds go directly to program services.</p>
					</div>
				</li>
			</ul>
	    </div>

		<footer class="section-footer">
			<div class="container">
				<a href="{{ url('impact-data') }}" class="button" >Explore the data</a>
			</div>
		</footer>
	</section>

    <section class="cards-outer section">
        <header class="section-header container">
			<h2 class="section-header-title">Latest News</h2>
        </header>

		<div class="container">
            <div class="cards">
                @foreach($presses as $c)
                <article>

                    <div class="card  has-image">
                        <div class="card-image">
                            <picture>
                                <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="390" height="320"/>
                                <source srcset="{{asset('upload')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="600" height="492"/>
                                <img loading="lazy" src="{{asset('upload')}}/{{{$c->image}}}" width="390" height="320" alt="" typeof="foaf:Image" />
                            </picture>
                        </div>

                        <div class="card-wrap">
                            <div class="card-wrap-inner">
                                <header class="card-header">
                                    <span class="metalabel">
                                        <a href="javascript:void(0)">Press release</a>
                                    </span>

                                    <span class="card-header-date">
                                        <time datetime="{{$c->updated_at}}">{{$c->updated_at->format('Y-m-d')}}</time>
                                    </span>

                                    <h2 class="card-header-title">
                                        <a href="javascript:void(0)" class="card-link" >{{$c->title}}</a>
                                    </h2>
                                </header>

                                <div class="card-summary">
                                    <p>{{$c->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach

            </div>
        </div>

        <footer class="section-footer">
			<div class="container">
				<a href="{{ url('news') }}" class="button" >Read more</a>
			</div>
		</footer>
	</section>

	<section class="media-block-outer dark right full has-image section">
        <div class="container">
		    <div class="media-block">
                @foreach($indexSecond as $c)
                <figure class="media-block-element">
                    <picture>
                        <source srcset="{{asset('upload/mainPage/indexSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/mainPage/indexSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/mainPage/indexSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                        <source srcset="{{asset('upload/mainPage/indexSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                        <source srcset="{{asset('upload/mainPage/indexSecond')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                        <img loading="lazy" src="{{asset('upload/mainPage/indexSecond')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                    </picture>
                </figure>
                <div class="media-block-info">
                    <div class="container">
                        <div class="media-block-content">
                            <h2 class="media-block-title">{{$c->title}}</h2>
                            <p>
                                {{$c->description}}
                            </p>
                            {{-- <a href="resources/care-vision-2030.html" class="button" ">Read CARE 2030 Goals</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>


@endsection
