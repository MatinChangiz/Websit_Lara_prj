@php
    $fights = DB::table('fight_poverties')->orderBy('id',"asc")->get();

    $datetime1 = new DateTime("01-01-2007");
    $datetime2 = new DateTime(now());
    $difference = $datetime1->diff($datetime2);
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">

<head>
<title>@yield('title')</title>

<meta charset="utf-8" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<noscript><style>form.antibot * :not(.antibot-message) { display: none !important; }</style>
</noscript><link rel="canonical" href="javascript:void(0)" />
<meta name="description" content="We put women and girls in the center because we cannot overcome poverty until all people have equal rights and opportunities." />
<link rel="icon" href="{{ asset('assets/images/logo/icon/favicon.ico') }}" />
<link rel="icon" sizes="16x16" href="{{ asset('assets/images/logo/icon/favicon-16x16.png') }}" />
<link rel="icon" sizes="32x32" href="{{ asset('assets/images/logo/icon/favicon-32x32.png') }}" />
<link rel="icon" sizes="192x192" href="{{ asset('assets/images/logo/icon/android-chrome-192x192.png') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/icon/apple-touch-icon.png') }}" />
<meta property="og:site_name" content="SSAWO" />
<meta property="og:url" content="https://www.ssawo.com" />
<meta property="og:title" content="SSAWO works to fight poverty and achieve social justice." />
<meta property="og:description" content="We put women and girls in the center because we cannot overcome poverty until all people have equal rights and opportunities." />

<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6XRF6M');</script>
<!-- End Google Tag Manager -->

<link rel="stylesheet" media="all" href="{{ asset('assets/css/css_DfIk0kDE_97QqZBJr5TF4iiP6Rt7nG3gWSu-Jh5AKCY.css') }}" />
<link rel="stylesheet" media="all" href="{{ asset('assets/css/css_oFNe4qCvXmV_lp6RTyPVEkaGSBXJ8z1oRizuDlnIEA8.css') }}" />
<link rel="stylesheet" media="print" href="{{ asset('assets/css/css_4soLQHZ37GVYa-jEeaP03qsf-3FL9bKLebrURMJApQ4.css') }}" />
@yield('style')

<style>
    .checkbox-toggle-text,
    .checkbox-toggle-on,
    .checkbox-toggle-off,
    .checkbox-toggle-toggle {
        margin: 0;
    }
</style>

</head>
<body class="path-frontpage page-node-type-homepage home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6XRF6M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
	<header class="header clearfix">
		<div class="header-inner">
			<div class="container">
				<a href="{{ url('/') }}" id="logo" class="header-logo">
					<img srcset="{{ asset('assets/images/logo/icon/logo.png') }} 1x, {{ asset('assets/images/logo/icon/logo.png 2x') }}" src="{{ asset('assets/images/logo/icon/logo.png') }}" width="40" height="40" alt="SSAWO logo" class="header-logo-image" />
                    <h1 class="visually-hidden">SSAWO</h1>
            	</a>
				<nav class="header-nav">
					<ul class="header-nav-list clearfix">
						<li class="nav-item">
							<a href="{{ url('who-we-are') }}" class="nav-item-link">{{trans('Who we are')}}</a>
							<ul class="dropdown" role="dropdown navigation">
								<li class="dropdown-item">
									<a href="{{ url('focus-women') }}" class="nav-item-link">Focus on women and girls</a>
								</li>
								<li class="dropdown-item">
									<a href="{{ url('global-network') }}" class="nav-item-link">Global network</a>
								</li>
								<li class="dropdown-item">
									<a href="{{ url('technical-specialists') }}" class="nav-item-link">Technical specialists</a>
								</li>
								<li class="dropdown-item">
									<a href="{{ url('years-ssawo') }}" class="nav-item-link">{{ $difference->y }} years of SSAWO</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{ url('what-we-do') }}" class="nav-item-link">What we do</a>
							<ul class="dropdown" role="dropdown navigation">
                                @foreach ($fights as $c)
								<li class="dropdown-item">
									<a href="{{ url('fight', $c->id) }}" class="nav-item-link">{{ $c->title }}</a>
								</li>
                                @endforeach

							</ul>
						</li>
						<li class="nav-item">
							<a href="{{ url('where-we-work') }}" class="nav-item-link">Where we work</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('impact-data') }}" class="nav-item-link">Our impact</a>
							<ul class="dropdown" role="dropdown navigation">
								<li class="dropdown-item">
									<a href="{{ url('stories') }}" class="nav-item-link">Impact stories</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{ url('resources') }}" class="nav-item-link">Research &amp; reports</a>
						</li>
					</ul>
				</nav>

				{{-- <div class="header-links clearfix">
					<a href="donate.html" class="button">Donate</a>
				</div> --}}
				<button for="rnav-open" id="rnav-button" class="menu-button" aria-controls="menu" aria-expanded="false">
					<svg aria-hidden="true" class="icon">
						<use xlink:href="{{ asset('assets/images/img/svg/icons.svg#menu') }}"/>
					</svg>
				</button>
			</div>
		</div>

		<div class="header-subnav-inner">
			<div class="container">
				<nav class="header-subnav">
					<ul class="header-subnav-list clearfix">
						<li class="subnav-item">
							<a href="{{url('about-us')}}" class="nav-item-link">About us</a>
						</li>
						<li class="subnav-item">
							<a href="{{ url('news') }}" class="nav-item-link">News</a>
						</li>
						<li class="subnav-item">
							<a href="{{ url('careers') }}" class="nav-item-link">Careers</a>
						</li>
					</ul>
				</nav>

				<form method="get" class="search" action="{{ url('/search') }}">

					 {{-- <label class="search-label visually-hidden" for="search-header">Search website</label>
					<input id="search-header" class="search-input" name="keys" type="text" placeholder="Search"> --}} 

                    <div class="gcse-search" style="height:30px; width: 100px;"></div>

					 {{-- <button class="search-button" type="submit" title="Search submit" aria-label="Search submit">
						<svg aria-hidden="true" class="search-icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#search') }}"/></svg>
					</button> --}}
				</form>

			</div>
		</div>
	</header>

	<div class="rnav-outer" aria-expanded="false">
		<div class="rnav-search">
			<form method="get" class="search" action="{{ url('/search') }}">
				{{-- <label class="search-label visually-hidden" for="search-rnav">Search website</label>
				<input id="search-rnav" class="search-input" name="keys" type="text" placeholder="Search"> --}}
				<!-- <label class="search-label visually-hidden" for="search-header">Search website</label>
					<input class="search-input" name="query" type="search" placeholder="Search">  -->

					<div class="gcse-search" style="height:30px; width: 100px;"></div>

				<!-- <button class="search-button" type="submit" title="Search submit" aria-label="Search submit">
					<svg aria-hidden="true" class="search-icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#search') }}"/></svg>
				</button> -->
			</form>
		</div>

		<nav class="rnav">
			<ul class="rnav-list" id="menu" role="tablist">
				<li class="rnav-item with-dropdown" aria-haspopup="true" role="tab">
					<a href="{{ url('who-we-are') }}" class="rnav-item-link">Who we are</a>

					<button class="rnav-arrow" aria-expanded="false">
						<svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#arrow-down') }}"/>Expand dropdown</svg>
					</button>

					<ul class="rnav-dropdown" aria-expanded="false" aria-label="Who we are submenu" role="tablist">
						<li class="rnav-item" role="tab">
							<a href="{{ url('focus-women') }}" class="rnav-item-link">Focus on women and girls</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('global-network') }}" class="rnav-item-link">Global network</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('technical-specialists') }}" class="rnav-item-link">Technical specialists</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('years-ssawo') }}" class="rnav-item-link">{{ $difference->y }} years of SSAWO</a>
						</li>
					</ul>
				</li>
				<li class="rnav-item with-dropdown" aria-haspopup="true" role="tab">
					<a href="{{ url('what-we-do') }}" class="rnav-item-link">What we do</a>

					<button class="rnav-arrow" aria-expanded="false">
						<svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#arrow-down') }}"/>Expand dropdown</svg>
					</button>

					<ul class="rnav-dropdown" aria-expanded="false" aria-label="What we do submenu" role="tablist">
						<li class="rnav-item" role="tab">
							<a href="{{ url('crisis-response') }}" class="rnav-item-link">Crisis response</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('gender-equality') }}" class="rnav-item-link">Gender equality</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('drug-and-substance-treatments') }}" class="rnav-item-link">Drug and Substance treatments</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('Right-to-health') }}" class="rnav-item-link">Right to health</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('Right-to-food-water-and-nutrition') }}" class="rnav-item-link">Right to food, water, and nutrition</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('Womens-economic-justice') }}" class="rnav-item-link">Women&#039;s economic justice</a>
						</li>
						<li class="rnav-item" role="tab">
							<a href="{{ url('Advocacy-and-campaigns') }}" class="rnav-item-link">Advocacy and campaigns</a>
						</li>
					</ul>
				</li>
				<li class="rnav-item"  role="tab">
					<a href="{{ url('where-we-work') }}" class="rnav-item-link">Where we work</a>
				</li>
				<li class="rnav-item with-dropdown" aria-haspopup="true" role="tab">
					<a href="{{ url('impact-data') }}" class="rnav-item-link">Our impact</a>

					<button class="rnav-arrow" aria-expanded="false">
						<svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#arrow-down') }}"/>Expand dropdown</svg>
					</button>

					<ul class="rnav-dropdown" aria-expanded="false" aria-label="Our impact submenu" role="tablist">
						<li class="rnav-item" role="tab">
							<a href="{{ url('stories') }}" class="rnav-item-link">Impact stories</a>
						</li>
					</ul>
				</li>
				<li class="rnav-item"  role="tab">
					<a href="{{ url('resources') }}" class="rnav-item-link">Research &amp; reports</a>
				</li>

				<ul class="rnav-secnav" role="tablist">
                    <li class="rnav-secnav-item" role="tab">
              			<a href="{{ url('about-us') }}" class="rnav-item-link">About us</a>
            		</li>
                    <li class="rnav-secnav-item" role="tab">
              			<a href="{{ url('news') }}" class="rnav-item-link">News</a>
            		</li>
                    <li class="rnav-secnav-item" role="tab">
              			<a href="{{ url('careers') }}" class="rnav-item-link">Careers</a>
            		</li>
                </ul>
			</ul>
		</nav>
	</div>


@yield('content')




















	<section class="statistic-outer primary section">
		<header class="section-header container">
			<h2 class="section-header-title">Our Nationwide Impact</h2>
			<p class="section-header-summary">Since FY2007, SSAWO’ mission is to particularly focus on addressing issues of drug demand
                reduction, the promotion of women rights, youth engagement, democracy,
                pluralism, and peace</p>
		</header>

		<div class="container">
			<ul class="statistic">
				<li class="statistic-item">
					<div class="statistic-value">
						<span class="statistic-value-number">174K</span>
					</div>
					<h3 class="statistic-title">People reached directly</h3>
				</li>
				<li class="statistic-item">
					<div class="statistic-value">
						<span class="statistic-value-number">205K</span>
					</div>
					<h3 class="statistic-title">People reached indirectly</h3>
				</li>
				<li class="statistic-item">
					<div class="statistic-value">
						<span class="statistic-value-number">50</span>
					</div>
					<h3 class="statistic-title">Projects</h3>
				</li>
				<li class="statistic-item">
					<div class="statistic-value">
						<span class="statistic-value-number">34</span>
					</div>
					<h3 class="statistic-title">Province</h3>
				</li>
			</ul>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="footer-header">
				<a href="javascript:void(0)" class="footer-logo">
					<img srcset="{{ asset('assets/images/logo/icon/logo.png') }} 1x, {{ asset('assets/images/logo/icon/logo.png 2x') }}" src="{{ asset('assets/images/logo/icon/logo.png') }}" width="40" height="40" alt="SSAWO logo" class="header-logo-image" />
				</a>

				<ul class="footer-nav social clearfix">
					<li class="footer-nav-item social">
						<a href="javascript:void(0)" class="twitter nav-item-link" aria-label="Share on twitter" target="_blank">
							<svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#twitter') }}"/>Twitter</svg>
							<span class="visually-hidden">twitter (opens in a new window)</span>
						</a>
					</li>
					<li class="footer-nav-item social">
						<a href="javascript:void(0)" class="youtube nav-item-link" aria-label="Share on youtube" target="_blank">
							<svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#youtube') }}"/>Youtube</svg>
							<span class="visually-hidden">youtube (opens in a new window)</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="footer_country">
				<div class="accordion-outer">
					<div class="accordion-item">
						<button class="accordion-button accordion-trigger" aria-expanded="false" aria-controls="accordion-panel-Visit-your-local-country-site" onclick="event.preventDefault();">
							Visit your local city site
							<div class="accordion-icon">
								<svg aria-hidden="true" class="icon"><use xlink:href="{{ asset('assets/images/img/svg/icons.svg#arrow-down') }}"/></svg>
							</div>
						</button>

						<div class="accordion-panel" aria-labelledby="accordion-button-Visit-your-local-country-site" tabindex="-1">
							<div class="accordion-description content">
								<ul class="accordion-list">
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Kabul</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Bamyan</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Herat</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Mazar-e-Sharif</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Jalalabad</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Maidan Wardak</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Ghazni</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Qandahar</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Nimroz</a>
									</li>
									<li class="accordion-list-block">
										<a href="javascript:void(0)">Farah</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-nav-outer">
				<ul class="footer-nav">
					<li class="footer-nav-item">
						<a href="{{ url('where-we-work') }}" class="nav-item-link">Where we work</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('focus-women') }}" class="nav-item-link">Focus on women and girls</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('stories') }}" class="nav-item-link">Impact stories</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('impact-data') }}" class="nav-item-link">Impact data</a>
					</li>
				</ul>

				<ul class="footer-nav">
					<li class="footer-nav-item">
						{{-- <a href="{{ url('years-ssawo') }}" class="nav-item-link">{{ $difference->y }} year of SSAWO</a> --}}
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('our-partners') }}" class="nav-item-link">Our partners</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('governance') }}" class="nav-item-link">Governance</a>
					</li>
				</ul>

				<ul class="footer-nav">
					<li class="footer-nav-item">
						<a href="{{ url('careers') }}" class="nav-item-link">Job vacancies</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('contact') }}" class="nav-item-link">Contact us</a>
					</li>
				</ul>

				<ul class="footer-nav">
					<li class="footer-nav-item">
						<a href="{{ url('privacy-policy') }}" class="nav-item-link">Privacy policy</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('accessibility') }}" class="nav-item-link">Accessibility statement</a>
					</li>
					<li class="footer-nav-item">
						<a href="{{ url('sitemap') }}" class="nav-item-link">Sitemap</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="footer-credits">
			<div class="container">
				<p>
					&copy; SSAWO<strong> 2007 - {{now()->format('Y')}}</strong>. SSAWO is a registered organization of Ministry of Economy of Afghanistan (&reg; 982)
				</p>

				<p>
					<a target="_blank" href="{{ url('/') }}"> <strong>Social Service for Afghan Women Organization (SSAWO)</strong></a>
				</p>
			</div>
		</div>
	</footer>
</div>




<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/1","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en","civiccookiecontrol_path":"modules\/contrib\/civicccookiecontrol"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"civiccookiecontrol":"{\u0022apiKey\u0022:\u002204a79844ff3bea50dd4255f798fc34e049279d2b\u0022,\u0022product\u0022:\u0022PRO\u0022,\u0022logConsent\u0022:false,\u0022consentCookieExpiry\u0022:90,\u0022encodeCookie\u0022:false,\u0022subDomains\u0022:true,\u0022notifyOnce\u0022:false,\u0022rejectButton\u0022:false,\u0022toggleType\u0022:\u0022slider\u0022,\u0022closeStyle\u0022:\u0022button\u0022,\u0022settingsStyle\u0022:\u0022button\u0022,\u0022initialState\u0022:\u0022NOTIFY\u0022,\u0022layout\u0022:\u0022SLIDEOUT\u0022,\u0022position\u0022:\u0022LEFT\u0022,\u0022theme\u0022:\u0022LIGHT\u0022,\u0022necessaryCookies\u0022:[\u0022CONSENT\u0022,\u0022CookieConsent\u0022],\u0022optionalCookies\u0022:[{\u0022name\u0022:\u0022performance\u0022,\u0022label\u0022:\u0022Performance\u0022,\u0022description\u0022:\u0022\u003Cp\u003EWe make use of analytics cookies to analyse how visitors use our website and to monitor the site\u0027s performance. This allows us to provide a continually improving experience for our users. For more information on how these cookies work please see our cookie information.\u003C\/p\u003E\\r\\n\u0022,\u0022cookies\u0022:[\u0022_ga\u0022,\u0022_ga_*\u0022,\u0022_ga_#\u0022,\u0022_gid\u0022,\u0022_gat\u0022,\u0022_gat*\u0022,\u0022collect\u0022,\u0022__utma\u0022,\u0022__utmt\u0022,\u0022__utmb\u0022,\u0022__utmc\u0022,\u0022__utmz\u0022,\u0022__utmv\u0022,\u0022_dc_gtm*\u0022,\u0022_gcl_au\u0022,\u0022_hjAbsoluteSessionInProgress\u0022,\u0022_hjid\u0022,\u0022collect\u0022,\u0022personalization_id\u0022,\u0022_hjAbsoluteSessionInProgress\u0022,\u0022_hjIncludedInPageviewSample\u0022],\u0022onAccept\u0022:\u0022function(){dataLayer.push({\\r\\n  \u0027civic_cookies_analytics\u0027: \u0027a001\u0027,\\r\\n  \u0027event\u0027: \u0027civicCookies_analyticsAccept\u0027\\r\\n});}\u0022,\u0022onRevoke\u0022:\u0022function(){dataLayer.push({\\r\\n  \u0027civic_cookies_analytics\u0027: \u0027a000\u0027,\\r\\n  \u0027event\u0027: \u0027civicCookies_analyticsDecline\u0027\\r\\n});}\u0022,\u0022recommendedState\u0022:true,\u0022lawfulBasis\u0022:\u0022consent\u0022},{\u0022name\u0022:\u0022advertising\u0022,\u0022label\u0022:\u0022Advertising\u0022,\u0022description\u0022:\u0022\u003Cp\u003EThese cookies collect information about the browsing habits associated with your device and are used by third-party providers to make advertising more relevant to you and your interests.\u003C\/p\u003E\\r\\n\u0022,\u0022cookies\u0022:[\u0022_fbp\u0022,\u0022bcookie\u0022,\u0022bscookie\u0022,\u0022fr\u0022,\u0022GPS\u0022,\u0022i\/adsct\u0022,\u0022IDE\u0022,\u0022lidc\u0022,\u0022lissc\u0022,\u0022pagead\/1p-user-list\/#\u0022,\u0022test_cookie\u0022,\u0022tr\u0022,\u0022UserMatchHistory\u0022,\u0022VISITOR_INFO1_LIVE\u0022,\u0022YSC\u0022,\u0022yt-remote-cast-installed\u0022,\u0022yt-remote-connected-devices\u0022,\u0022yt-remote-device-id\u0022],\u0022onAccept\u0022:\u0022function(){dataLayer.push({\\r\\n  \u0027civic_cookies_marketing\u0027: \u0027a001\u0027,\\r\\n  \u0027event\u0027: \u0027civicCookies_marketingAccept\u0027\\r\\n});}\u0022,\u0022onRevoke\u0022:\u0022function(){dataLayer.push({\\r\\n  \u0027civic_cookies_marketing\u0027: \u0027a000\u0027,\\r\\n  \u0027event\u0027: \u0027civicCookies_marketingDecline\u0027\\r\\n});}\u0022,\u0022recommendedState\u0022:true,\u0022lawfulBasis\u0022:\u0022consent\u0022}],\u0022excludedCountries\u0022:[],\u0022debug\u0022:false,\u0022setInnerHTML\u0022:true,\u0022mode\u0022:\u0022GDPR\u0022,\u0022acceptBehaviour\u0022:\u0022all\u0022,\u0022closeOnGlobalChange\u0022:true,\u0022notifyDismissButton\u0022:false,\u0022sameSiteCookie\u0022:true,\u0022sameSiteValue\u0022:\u0022Strict\u0022,\u0022iabCMP\u0022:false,\u0022statement\u0022:{\u0022url\u0022:\u0022https:\/\/www.care-international.org\/home\u0022},\u0022ccpaConfig\u0022:[],\u0022accessibility\u0022:{\u0022accessKey\u0022:\u0022C\u0022,\u0022overlay\u0022:true,\u0022outline\u0022:true},\u0022text\u0022:{\u0022title\u0022:\u0022This site uses cookies to store information on your computer.\u0022,\u0022intro\u0022:\u0022\u003Cp\u003ESome of these cookies are essential to make our site work and others help us to improve by giving us some insight into how the site is being used.\u003C\/p\u003E\\r\\n\u0022,\u0022acceptRecommended\u0022:\u0022Accept recommended settings\u0022,\u0022acceptSettings\u0022:\u0022Accept recommended settings\u0022,\u0022rejectSettings\u0022:\u0022I Do Not Accept\u0022,\u0022necessaryTitle\u0022:\u0022Necessary cookies\u0022,\u0022necessaryDescription\u0022:\u0022\u003Cp\u003ENecessary cookies enable core functionality. The website cannot function properly without these cookies, and can only be disabled by changing your browser preferences.\u003C\/p\u003E\\r\\n\u0022,\u0022thirdPartyTitle\u0022:\u0022Warning: Some cookies require your attention.\u0022,\u0022thirdPartyDescription\u0022:\u0022\u003Cp\u003EConsent for the following cookies could not be automatically revoked. Please follow the link(s) below to opt out manually.\u003C\/p\u003E\\r\\n\u0022,\u0022on\u0022:\u0022On\u0022,\u0022off\u0022:\u0022Off\u0022,\u0022notifyTitle\u0022:\u0022Your choice regarding cookies on this site\u0022,\u0022notifyDescription\u0022:\u0022\u003Cp\u003EWe use cookies to optimise site functionality and give you the best possible experience.\u003C\/p\u003E\\r\\n\u0022,\u0022accept\u0022:\u0022Accept recommended settings\u0022,\u0022reject\u0022:\u0022I Reject\u0022,\u0022settings\u0022:\u0022Settings\u0022,\u0022closeLabel\u0022:\u0022Save preferred settings\u0022,\u0022cornerButton\u0022:\u0022Set cookie preferences.\u0022,\u0022landmark\u0022:\u0022Cookie preferences.\u0022,\u0022showVendors\u0022:\u0022Show vendors within this category\u0022,\u0022thirdPartyCookies\u0022:\u0022This vendor may set third party cookies.\u0022,\u0022readMore\u0022:\u0022Read more\u0022},\u0022branding\u0022:{\u0022fontSizeTitle\u0022:\u0022em\u0022,\u0022fontSize\u0022:\u0022em\u0022,\u0022buttonIconWidth\u0022:\u0022px\u0022,\u0022buttonIconHeight\u0022:\u0022px\u0022,\u0022rejectText\u0022:null,\u0022rejectBackground\u0022:\u0022\u0022,\u0022closeText\u0022:\u0022\u0022,\u0022closeBackground\u0022:\u0022\u0022,\u0022notifyFontColor\u0022:\u0022\u0022,\u0022notifyBackgroundColor \u0022:\u0022\u0022},\u0022locales\u0022:[]}","user":{"uid":0,"permissionsHash":"7011c804ce4932a54d401d2c09c092519f331f9ec15d7ec4efc9cab253d7dc6c"}}</script>

{{-- <script src="{{ asset('assets/cookieControl-9.x.min.js') }}"></script> --}}

<script src="{{ asset('assets/js/js_1lb2uSJOAgH3c_YVUZqAjaBCkZqM2nrKUam5_VWxfPQ.js') }}"></script>
<script src="{{ asset('assets/js/js_P-QB-g5yPOhnjDgyKCn-NCicw84pwGEkjiDtO9HvlcM.js') }}"></script>

{{-- <script>
    function showMap() {
        var element = document.getElementsByClassName("has-dashboard");
        for (var i = 0; i < element.length; i++) {
            element[i].classList.toggle("globe-active");
        }
    }
</script> --}}

<script>

    // document.getElementById("gsc-i-id1").placeholder = "Type name here..";
    document.getElementById('gsc-i-id1').setAttribute("placeholder", "placeholder value");
</script>




<script>
    // function swapModal() {
    //   if (document.getElementById('modal-container-Reach')) {
    //     if (document.getElementById('modal-container-Reach').style.display == 'none') {
    //         document.getElementById('modal-container-Reach').style.display = 'block';
    //         document.getElementById('modal-container-Impact').style.display = 'none';
    //     }
    //     else {
    //         document.getElementById('modal-container-Reach').style.display = 'none';
    //         document.getElementById('modal-container-Impact').style.display = 'block';
    //     }
    //   }
    // }

    function showModal1() {
        (document.getElementById)('modal-container-Reach').style.display="block";
        (document.getElementById)('modal-container-Impact').style.display="none";
    }

    function showModal2() {
        (document.getElementById)('modal-container-Impact').style.display="block";
        (document.getElementById)('modal-container-Reach').style.display="none";
    }
</script>

<script>
    // https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Roles/switch_role
    document.querySelectorAll(".switch").forEach(function(theSwitch) {
    theSwitch.addEventListener("click", handleClickEvent, false);
    });

    function handleClickEvent(evt) {
    let el = evt.target;

    if (el.getAttribute("aria-checked") == "true") {
        el.setAttribute("aria-checked", "false");
    } else {
        el.setAttribute("aria-checked", "true");
    }
    }
    function goToDashboard() {
      window.location.hash = '#dashboard';
      window.location.reload(true);
    }
</script>

<script async src="https://cse.google.com/cse.js?cx=c27cb6ee5d2ab48ce">
</script>

@yield('scripts')
</body>

</html>
