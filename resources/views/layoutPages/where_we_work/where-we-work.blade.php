@php
    use Illuminate\Support\Facades\DB;
    $tabThreeFirst = DB::table('tab_three_firsts')->orderBy('id',"asc")->take(35)->get();
@endphp

@extends('layouts/masters')

@section('title', 'SSAWO | Where we work')

@section('content')

    <main id="main" role="main" class="main clearfix">
        <a id="main-content" tabindex="-1"></a>
        <div data-drupal-messages-fallback class="hidden"></div>
        <section class="cards-outer two-col section">
            <div class="container">
                <div class="cards">
                    @foreach($tabThreeFirst as $c)
                    <article>
                        <div class="card  has-image">
                            <div class="card-image">
                                <img srcset="{{asset('upload/tabThree/tabThreeFirst')}}/{{{$c->image}}} 960w, {{asset('upload/tabThree/tabThreeFirst')}}/{{{$c->image}}} 560w, {{asset('upload/tabThree/tabThreeFirst')}}/{{{$c->image}}} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{asset('upload/tabThree/tabThreeFirst')}}/{{{$c->image}}}" alt="" height="" width="">
                            </div>
                            <div class="card-wrap">
                                <div class="card-wrap-inner">
                                    <header class="card-header">
                                        <h2 class="card-header-title">
                                            {{$c->title}}
                                        </h2>
                                    </header>
                                    <div class="card-countries">
                                        <ul>
                                            <li><a href="">{{$c->description}}</a></li>
                                        </ul>
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

