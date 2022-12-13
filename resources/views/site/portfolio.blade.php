@extends('layouts.site')

@section('title', 'Portfolio')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container px-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Portfolio: {{ $portfolio->id }}</h2>
                </div>
            </div>
        </section>

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container px-5">

                <div class="row gy-4">
                    <div class="col-lg-7">
                        <img src="{{ asset('/frontend/assets/img/portfolio/' . $portfolio->img) }}" alt="Portfolio" class="w-100">
                        <div class="portfolio-description">
                            <h2>{{ $portfolio->title }}</h2>
                            <p>{!! $portfolio->text !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: @foreach($portfolio->categories as $category) @if ($category->id !== 1) <span>{{ $category->title . ',' }}</span> @endif @endforeach</li>
                                <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                                <li><strong>Project date</strong>: {{ date('d F, Y', strtotime($portfolio->created_date)) }}</li>
                                <li><strong>Project URL</strong>: <a href="https://{{ $portfolio->url }}">{{ $portfolio->url }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
