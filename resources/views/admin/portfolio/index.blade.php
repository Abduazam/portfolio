@extends('layouts.back')

@section('title', 'Portfolios')

@section('content')
    <div class="col-12 bg-white p-0">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Portfolios</h3>
                <div class="block-options">
                    <a href="{{ route('portfolio.create') }}" class="btn btn-success">Add</a>
                </div>
            </div>
            <div class="block-content">
                @if(count($portfolios) > 0)
                    <table class="table table-bordered table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Link</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <th class="text-center" scope="row">{{ $portfolio->id }}</th>
                                <td>{{ substr($portfolio->title, 0, 30) }}</td>
                                <td>
                                    @forelse($portfolio->categories as $category)
                                        <span>{{ $category->title }}, </span>
                                    @empty
                                        <span>Nothing</span>
                                    @endforelse
                                </td>
                                <td><a href="https://{{ $portfolio->url }}" target="_blank">{{ $portfolio->url }}</a></td>
                                <td class="d-none d-sm-table-cell">
                                    @if($portfolio->status === 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" type="button" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('portfolio.show', ['portfolio' => $portfolio->id]) }}" type="button" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Show">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <form action="{{ route('portfolio.destroy', ['portfolio' => $portfolio->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-secondary" style="border-radius-top-left: 0;">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center mb-3">Portfolios are empty!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
