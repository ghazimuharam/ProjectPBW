@extends('layout.main')

@section('title','Welcome To Web Based Election')
<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('assets/split/split/images/favicon.png') }}" sizes="32x32">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('assets/split/split/assets/css/split.css') }}" type="text/css" media="screen" />

@section('content')

    <body id="fullsingle" class="page-template-page-fullsingle-split">
    <div class="fs-split">
	<!-- Image Side -->
	<div class="split-image"></div>

	<!-- Content Side -->
	<div class="split-content">
		<div class="split-content-vertically-center">
			<div class="split-intro">
				<h1>{{ $website->title }}</h1>
				<span class="tagline">{{ $website->tagline }}</span>
			</div>

			<div class="split-bio">
			    <p><a href="{{ url('/vote/login') }}">Enter Election Portal</a></p>
			    <p><a href="{{ url('/admin/login') }}">Enter Admin Portal</a></p>
            </div>

			<div class="split-credit">
                <p>&copy;2020 <a href="{{ url('/') }}">{{ $website->title }}</a></p>
            </div>
        </div>
    </div>

@endsection
