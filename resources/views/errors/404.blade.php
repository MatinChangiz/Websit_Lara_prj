@extends('layouts/masters')
@section('content')

<main id="main" role="main" class="main clearfix">
	<a id="main-content" tabindex="-1"></a>

	<div data-drupal-messages-fallback class="hidden"></div>

	<section class="hero-outer full solid section">
		<div class="hero">
			<header class="hero-info">
				<div class="hero-inner">
					<h1 class="hero-title">Page not found (404)</h1>
					<div class="hero-split">
						<div class="hero-summary">
							<p>
                  				<p>We can't seem to find what you're looking for.</p>
							</p>
						</div>
					</div>
				</div>
			</header>
		</div>
	</section>

	<div class="components has-dashboard">
		<section class="wysiwyg section">
			<div class="container">
				<div class="content">
					<h3>What to do next</h3>

					<ul>
						<li>
							<a href="{{url('/search')}}">Try searching for what you're looking for</a>
						</li>
						<li>
							<a href="{{url('/sitemap')}}">Take a look at our sitemap</a>
						</li>
						<li>
							<a href="{{url('/news')}}">News</a>
						</li>
					</ul>

					<p>If you still can't find what you're looking for, please email us. </p>
				</div>
			</div>
		</section>
	</div>
</main>
























<!-- <main id="main" role="main" class="main clearfix">
	<a id="main-content" tabindex="-1"></a>

	<div data-drupal-messages-fallback class="hidden"></div>

	<section class="hero-outer full solid section">
		<div class="hero">
			<header class="hero-info">
				<div class="hero-inner">
					<h1 class="hero-title">Page not found (404)</h1>
					<div class="hero-split">
						<div class="hero-summary">
							<p>
                  				<p>We can't seem to find what you're looking for.</p>
							</p>
						</div>
					</div>
				</div>
			</header>
		</div>
	</section>

	<div class="components has-dashboard">
		<section class="wysiwyg section">
			<div class="container">
				<div class="content">
					<h3>What to do next</h3>
					<ul>
						<li>
							<a href="/search">Try searching for what you're looking for</a>
						</li>
						<li>
							<a href="/sitemap">Take a look at our sitemap</a>
						</li>
						<li>
							<a href="/news">News</a>
						</li>
					</ul>

					<p>If you still can't find what you're looking for, please email us. </p>
           		</div>
			</div>
		</section>
	</div>
</main> -->







@endsection
