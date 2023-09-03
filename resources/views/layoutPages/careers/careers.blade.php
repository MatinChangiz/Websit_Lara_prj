@php
    use Illuminate\Support\Facades\DB;
    $careerHeader = DB::table('career_headers')->orderBy('id',"desc")->take(1)->get();
    $careerFirst = DB::table('career_firsts')->orderBy('id',"desc")->get();
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Career Jobs.')

@section('style')

<style>
.infoJob {
  position: relative;
  width: 100%;
}

.infoLink {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(43, 32, 32, 1);
  border: 2px solid #e36f1e;
  overflow: auto;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.infoJob:hover .overlay {
    height: 250px;
    z-index: 2000;
}

.text {
  color: #fafafa;
  font-size: 16px;
  overflow: hidden;
  padding: 5px;
  word-break: break-all;
}
</style>

@endsection


@section('content')
    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="hero-outer full solid has-image section">
            @foreach($careerHeader as $c)
            <div class="hero">
                <figure class="hero-image">
                    <picture>
                        <source srcset="{{asset('upload/headers/careerHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/headers/careerHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                        <source srcset="{{asset('upload/headers/careerHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                        <source srcset="{{asset('upload/headers/careerHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                        <source srcset="{{asset('upload/headers/careerHeader')}}/{{{$c->image}}} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                        <img loading="lazy" src="{{asset('upload/headers/careerHeader')}}/{{{$c->image}}}" width="450" height="253" alt="" typeof="foaf:Image" />
                    </picture>

                    <figcaption>SSAWO / {{$c->title}}</figcaption>
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
                @foreach($careerFirst as $c)
                <article class="article">
                    <div class="content">
                        <h2>Open positions at SSAWO</h2>
                        <h3>
                            <a href="javascript:void(0)">
                                {{$c->title}}
                            </a>
                        </h3>

                        <p>
                            <strong>Location</strong>:{{$c->location}} <br /> <strong>Apply by</strong>: {{ \Carbon\Carbon::createFromFormat('Y-m-d', $c->applyBy)->format('d F Y')}}
                        </p>

                        <div class="infoJob">
                            <a class="button infoLink" href="javascript:void(0)">
                                Read more
                            </a>
                            <div class="overlay">
                              <div class="text">
                                {{$c->description}}
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="content"></div>
                </article>
                @endforeach
            </div>
        </div>
        {{-- <div class="components has-dashboard"></div> --}}
    </main>
@endsection
