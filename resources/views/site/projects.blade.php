@extends('layouts.site')

@section('title', 'Projects')

@section('content')
    <main id="main">
        
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container px-5">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>You can see my done projects!</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            @foreach($categories as $category)
                                @if ($category->id === 1)
                                    <li data-filter="*">{{ $category->title }}</li>
                                @else
                                    <li data-filter=".filter-{{ $category->title }}">{{ $category->title }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @if(count($portfolios) > 0)
                        @foreach($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item @foreach($portfolio->categories as $category) {{ 'filter-' . $category->title }} @endforeach">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/frontend/assets/img/portfolio/' . $portfolio->img) }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('/frontend/assets/img/portfolio/' . $portfolio->img) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->title }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio', ['portfolio' => $portfolio->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p>No any portfolios yet!</p>
                    @endif
                </div>
            </div>
        </section>
    </main>

@endsection
