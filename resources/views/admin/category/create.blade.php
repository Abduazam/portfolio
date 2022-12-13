@extends('layouts.back')

@section('title', 'Create category')

@section('content')
    <div class="col-12 bg-white p-0">
        <!-- Normal Form -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Category</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category-title">Category title</label>
                        <input type="text" class="form-control" id="category-title" name="category-title" placeholder="Enter title.." required>
                        @error('category-title')
                            <div class="alert alert-danger mt-2 small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
