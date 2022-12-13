@extends('layouts.back')

@section('title', 'Dashboard')

@section('content')
    <div class="row invisible" data-toggle="appear">
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="{{ route('category.index') }}">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-layers fa-2x text-primary-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="700" data-to="{{ $categories }}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Categories</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="{{ route('portfolio.index') }}">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-docs fa-2x text-earth-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-earth"><span data-toggle="countTo" data-speed="1000" data-to="{{ $portfolios }}">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Portfolios</div>
                </div>
            </a>
        </div>
    </div>
@endsection
