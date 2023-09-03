@extends('layouts/masters')
@section('content')

{{-- <main id="main" role="main" class="main clearfix">
    <a id="main-content" tabindex="-1"></a>
    <div data-drupal-messages-fallback class="hidden"></div>
    <section class="hero-outer has-image section">
        @if($fight)
        <div class="hero">
            <figure class="hero-image">
                <picture>
                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Bangladesh_crisis%20response%20refugees%20from%20Myanmar_RS42093.JPGfdc2.webp') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Bangladesh_crisis%20response%20refugees%20from%20Myanmar_RS42093.JPGfdc2.webp') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Bangladesh_crisis%20response%20refugees%20from%20Myanmar_RS42093.JPGfdc2.webp') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Bangladesh_crisis%20response%20refugees%20from%20Myanmar_RS42093.JPGfdc2.webp') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Bangladesh_crisis%20response%20refugees%20from%20Myanmar_RS42093.JPGfdc2.webp') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                    <img loading="lazy" src="{{ asset('assets/images/files/styles/media_block_small/Bangladesh_crisis%20response%20refugees%20from%20Myanmar_RS42093.JPGfdc2.webp') }}" width="450" height="253" alt="" typeof="foaf:Image" />
                </picture>
                <figcaption>SSAWO / Josh Estey</figcaption>
            </figure>

            <header class="hero-info">
                <div class="hero-inner">
                    <span class="hero-programme">Program</span>
                    <div class="hero-title-with-icon">
                        <span class="hero-title-icon">
                            <img src="{{ asset('assets/images/img/svg/gender.svg') }}" height="26px" width="33px">
                        </span>
                        <h1 class="hero-title">{{ $fight->title }}</h1>
                    </div>
                    <div class="hero-split">
                        <div class="hero-summary">
                            <p>Gender equality is an indispensable tool for lasting and deep social transformation. CARE International works towards this purpose in everything we do.</p>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        @endif
    </section>

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
                            <li class="sidebar-meta-block tags">
                                <h2 class="sidebar-meta-block-title">Tagged</h2>
                                <a href="{{ url('gender-equality') }}" class="sidebar-meta-block-tag">Gender Equality</a>
                            </li>
                            <li class="sidebar-meta-block">
                                <h2 class="sidebar-meta-block-title">Programs</h2>
                                <ul class="sidebar-programmes">
                                    <a href="javascript:void(0)" class="sidebar-programme">
                                        <div class="sidebar-programme-icon">
                                            <img src="{{ asset('assets/images/img/svg/medical.svg') }}">
                                        </div>
                                        <div class="sidebar-programme-text">
                                            <span>Ending gender-based violence in emergencies</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="sidebar-programme">
                                        <div class="sidebar-programme-icon">
                                            <img src="{{ asset('assets/images/img/svg/medical.svg') }}">
                                        </div>
                                        <div class="sidebar-programme-text">
                                            <span>Shelter in emergencies</span>
                                        </div>
                                    </a>
                                </ul>
                            </li>
                            <li class="sidebar-meta-block share">
                                <h2 class="sidebar-meta-block-title">Share article</h2>
                                <a href="javascript:void(0)" class="sidebar-meta-share-button facebook " aria-label="Share on facebook" target="_blank">
                                    <svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#facebook') }}"/>
                                        <span class="visually-hidden">facebook</span>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="sidebar-meta-share-button twitter " aria-label="Share on twitter" target="_blank">
                                    <svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#twitter') }}"/>
                                        <span class="visually-hidden">twitter</span>
                                    </svg>
                                </a>
                                <a href="{{ route('crisis-response') }}" class="sidebar-meta-share-button link  js-copy-button" data-clipboard-text="{{ route('crisis-response') }}" aria-label="Copy link" target="_blank">
                                    <svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#link') }}"/>
                                        <span class="visually-hidden">link</span>
                                    </svg>
                                </a>
                                <p class="copy-confirmation">Copied</p>
                            </li>
                            <li class="sidebar-meta-block sidebar-button">
                                <a href="{{ route('what-we-do') }}"  class="button">See all programs</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <div class="article">
                <div class="content">
                    <h2><strong>An unprecedented need for humanitarian aid</strong></h2>
                        <p>
                            The number of people in need of humanitarian assistance globally is at unprecedented levels,
                            exacerbated by the climate emergency, conflict and the ongoing  Up to 811 million people in the world are currently facing food insecurity
                             and  over 1% of the global population is now displaced.
                        </p>
                        <p>
                            Women and girls are disproportionately affected by crises, and in ways that differ to men. Despite this,
                             they are typically left out of humanitarian coordination, assessments, decision-making, and planning procedures.
                              Our experience tells us that women are frequently the frontline responders within their communities when a
                              crisis strikes, and they possess valuable knowledge, influence and expertise on what is needed.
                              This is why CARE International has a special focus on understanding and addressing the power and gender
                              imbalances that affect women and girls in crisis situations and prioritizes working with women’s
                              organizations to lead the response.
                        </p>
                </div>
                <section class="media-block-outer  left light has-image section">
                    <div class="container">
                        <div class="media-block">
                            <figure class="media-block-element">
                                <picture>
                                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Venezuela_crisis%20response%20refugees_RS51472.jpgfb3b.webp') }} 1x" media="all and (min-width: 1440px)" type="image/webp" width="1280" height="720"/>
                                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Venezuela_crisis%20response%20refugees_RS51472.jpgfb3b.webp') }} 1x" media="all and (min-width: 1280px)" type="image/webp" width="1280" height="720"/>
                                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Venezuela_crisis%20response%20refugees_RS51472.jpgfb3b.webp') }} 1x" media="all and (min-width: 960px)" type="image/webp" width="820" height="461"/>
                                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Venezuela_crisis%20response%20refugees_RS51472.jpgfb3b.webp') }} 1x" media="all and (min-width: 700px)" type="image/webp" width="750" height="422"/>
                                    <source srcset="{{ asset('assets/images/files/styles/media_block_small/Venezuela_crisis%20response%20refugees_RS51472.jpgfb3b.webp') }} 1x" media="all and (min-width: 560px)" type="image/webp" width="450" height="253"/>
                                    <img loading="lazy" src="{{ asset('assets/images/files/styles/media_block_small/Venezuela_crisis%20response%20refugees_RS51472.jpgfb3b.webp') }}" width="450" height="253" alt="A Venezuelan woman looks at the camera while holding a small child in her arms. The baby is wearing a light pink and white striped hoodie onesie." typeof="foaf:Image" />
                                </picture>
                            </figure>
                        </div>
                    </div>
                </section>
            </div>
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
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <img srcset="{{ asset('assets/images/files/styles/pic/Somalia_Dry drought land.png') }} 960w, {{ asset('assets/images/files/styles/pic/Somalia_Dry drought land.png') }} 560w, {{ asset('assets/images/files/styles/pic/Somalia_Dry drought land.png') }} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{ asset('assets/images/files/styles/pic/Somalia_Dry drought land.png') }}" alt="Related news" height="" width="">
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <div class="card-separator">&nbsp;</div>
                                            <span class="card-header-date">
                                                <time datetime="2023-02-09">9th February 2023</time>
                                            </span>
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >
                                                    Ongoing drought in the Horn of Africa severely impacts women
                                                </a>
                                            </h2>
                                        </header>
                                        <div class="card-summary">
                                            <p>
                                                While the ongoing drought in the Horn of Africa continues to worsen,
                                                an influx of refugees continue to arrive from Somalia to Kenya.
                                                Most of these are women and children who must seek refuge on the outskirts of Dadaab as
                                                resources are limited.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <img srcset="{{ asset('assets/images/files/styles/pic/Ukraine_People using torches in the dark.png') }} 960w, {{ asset('assets/images/files/styles/pic/Ukraine_People using torches in the dark.png') }} 560w, {{ asset('assets/images/files/styles/pic/Ukraine_People using torches in the dark.png') }} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{ asset('assets/images/files/styles/pic/Ukraine_People using torches in the dark.png') }}" alt="Related stories" height="" width="">
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <div class="card-separator">&nbsp;</div>
                                            <span class="card-header-date">
                                                <time datetime="2023-01-17">17th January 2023</time>
                                            </span>
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >
                                                    Ukraine: &quot;Better to have no electricity than bombs and being shot at&quot;
                                                </a>
                                            </h2>
                                        </header>
                                        <div class="card-summary">
                                            <p>
                                                With about 50% of energy infrastructure destroyed, power outages
                                                have become a daily occurrence in Ukraine. Some areas have planned
                                                 power cuts in order to not overload the systems.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                        <article>
                            <div class="card  has-image">
                                <div class="card-image">
                                    <img srcset="{{ asset('assets/images/files/styles/pic/Yemen_Neighbourhood in rubble.png') }} 960w, {{ asset('assets/images/files/styles/pic/Yemen_Neighbourhood in rubble.png') }} 560w, {{ asset('assets/images/files/styles/pic/Yemen_Neighbourhood in rubble.png') }} 320w" sizes="(min-width: 1280px) 608px, (min-width: 960px) 50vw, 100vw" src="{{ asset('assets/images/files/styles/pic/Yemen_Neighbourhood in rubble.png') }}" alt="Related resources" height="" width="">
                                </div>
                                <div class="card-wrap">
                                    <div class="card-wrap-inner">
                                        <header class="card-header">
                                            <div class="card-separator">&nbsp;</div>
                                            <span class="card-header-date">
                                                <time datetime="2023-01-30">30th January 2023</time>
                                            </span>
                                            <h2 class="card-header-title">
                                                <a href="javascript:void(0)" class="card-link" >CARE Yemen Factsheet 2022: 8 years in crisis</a>
                                            </h2>
                                        </header>
                                        <div class="card-summary">
                                            <p>
                                                The war in Yemen is approaching its eighth year and the country remains one of
                                                the world’s largest humanitarian crises. In 2022, 23.5 million people
                                                (66 percent of the population) were estimated to need humanitarian assistance;
                                                with 17.9 million people being inacute need.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main> --}}


{{-- <h1>hello</h1> --}}

@endsection
