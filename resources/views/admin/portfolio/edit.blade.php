@extends('layouts.back')

@section('title', 'Create portfolio')

@section('content')
    <div class="col-12 bg-white p-0">
        <!-- Normal Form -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Portfolio</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('portfolio.update', ['portfolio' => $portfolio->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <div class="col-4">
                            <label for="title">Title</label>
                            <input type="text" class="form-control form-control" id="title" name="title" value="{{ $portfolio->title }}" required>
                        </div>
                        <div class="col-4">
                            <div class="form-group row">
                                <label class="col-12" for="category_id">Categories</label>
                                <div class="col-12">
                                    <select class="js-select2 form-control" id="category_id"
                                            name="category_id[]"
                                            data-placeholder="Choose category.." multiple>
                                        @forelse($categories as $category)
                                            <?php
                                                $arr = [];
                                                foreach ($portfolio->categories as $chosenCategory)
                                                {
                                                    $arr[] = $chosenCategory->id;
                                                }
                                            ?>
                                            <option value="{{ $category->id }}" {{ in_array($category->id, $arr) ? 'selected' : '' }}>{{ $category->title }}</option>
                                        @empty
                                            <option value="1">All</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="client">Client</label>
                            <input type="text" class="form-control form-control" id="client" name="client" placeholder="Enter client.." value="{{ $portfolio->client }}" required>
                        </div>
                        <div class="col-4">
                            <label for="url">Url</label>
                            <input type="text" class="form-control form-control" id="url" name="url" placeholder="Enter url.." value="{{ $portfolio->url }}" required>
                        </div>
                        <div class="col-4">
                            <label for="created_date">Created date</label>
                            <div class="form-group">
                                <input type="text" class="js-flatpickr daily-date form-control bg-white"
                                       id="created_date" name="created_date" placeholder="Yil-oy-kun"
                                        value="{{ $portfolio->created_date }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group row">
                                <label class="col-12">Image</label>
                                <div class="col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img"
                                               name="img" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="img">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <label for="text">Text</label>
                            <textarea class="js-simplemde" id="text" name="text">{{ $portfolio->text }}</textarea>
                        </div>
                        @if(isset($portfolio->img))
                        <div class="col-4">
                            <label for="">Current image</label>
                            <img src="{{ asset('/frontend/assets/img/portfolio/' . $portfolio->img) }}" alt="Portfolio" class="w-100">
                        </div>
                        @endif
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
