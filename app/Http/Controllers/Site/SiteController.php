<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class SiteController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('site.index');
    }

    public function resume(): Factory|View|Application
    {
        return view('site.resume');
    }

    public function projects(): Factory|View|Application
    {
        $categories = Category::where('status', 1)->get();
        $portfolios = Portfolio::where('status', 1)->get();
        return view('site.projects', compact(['categories', 'portfolios']));
    }

    public function portfolio($id) : Factory|View|Application
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('site.portfolio', compact('portfolio'));
    }
}
