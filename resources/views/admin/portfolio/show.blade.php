@extends('layouts.back')

@section('title', 'Portfolios')

@section('content')
    <div class="col-12 bg-white p-0">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Portfolio: {{ $portfolio->id }}</h3>
                <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" type="button" class="btn btn-warning mr-2">Edit</a>
                <form action="{{ route('portfolio.destroy', ['portfolio' => $portfolio->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="border-radius-top-left: 0;">Delete</button>
                </form>
            </div>
            <div class="block-content">
                <table class="table table-bordered table-vcenter">
                    <tr>
                        <th class="text-uppercase col-2">Title</th>
                        <td>{{ $portfolio->title }}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Category</th>
                        <td>
                            @forelse($portfolio->categories as $category)
                                <span>{{ $category->title }}, </span>
                            @empty
                                <span>Nothing</span>
                            @endforelse
                        </td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Client</th>
                        <td>{{ $portfolio->client }}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Link</th>
                        <td><a href="https://{{ $portfolio->url }}">{{ $portfolio->url }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Image</th>
                        <td><img src="{{ @asset('/frontend/assets/img/portfolio/' . $portfolio->img) }}" class="w-25" alt="Portfolio"></td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Text</th>
                        <td>{!! $portfolio->text !!}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Date</th>
                        <td>{{ $portfolio->created_date }}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase">Status</th>
                        <td>
                            @if($portfolio->status === 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
