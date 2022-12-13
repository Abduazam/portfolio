<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CategoryPortfolio;
use App\Models\Portfolio;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Factory;
use Throwable;

class PortfolioController extends HomeController
{
    public function index(): View|Application
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create(): Factory|View|Application
    {
        $categories = Category::where('id', '>', 1)->get();
        return view('admin.portfolio.create', compact('categories'));
    }

    public function store(PortfolioRequest $request): Factory|View|Application|RedirectResponse
    {
        try {
            $params = $request->validated();

            $newImageName = null;
            if (isset($request->img)) {
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('frontend/assets/img/portfolio'), $newImageName);
            }

            $portfolio = new Portfolio();
            $portfolio->title = $params['title'];
            $portfolio->img = $newImageName;
            $portfolio->text = $params['text'];
            $portfolio->client = $params['client'];
            $portfolio->url = $params['url'];
            $portfolio->created_date = $params['created_date'];
            $portfolio->save();

            $arr = $params['category_id'];
            array_unshift($arr, 1);

            foreach ($arr as $id)
            {
                $cat_port = new CategoryPortfolio();
                $cat_port->category_id = $id;
                $cat_port->portfolio_id = $portfolio->id;
                $cat_port->save();
            }

            return redirect()->route('portfolio.index');
        } catch (Throwable $e) {
            report($e);

            $categories = Category::where('id', '>', 1)->get();
            return view('admin.portfolio.create', compact('categories'));
        }
    }

    public function show(Portfolio $portfolio): Factory|View|Application
    {
        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio): Factory|View|Application
    {
        $categories = Category::where('id', '>', 1)->get();
        return view('admin.portfolio.edit', compact(['categories', 'portfolio']));
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio): Factory|View|Application|RedirectResponse
    {
        try {
            $newImageName = $portfolio->img;
            $file = 'frontend/assets/img/portfolio/' . $newImageName;
            if (isset($request->img)) {
                if($newImageName !== null && file_exists($file)){
                    unlink($file);
                }
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('frontend/assets/img/portfolio'), $newImageName);
            }

            $params = $request->validated();

            $portfolio->title = $params['title'];
            $portfolio->img = $newImageName;
            $portfolio->text = $params['text'];
            $portfolio->client = $params['client'];
            $portfolio->url = $params['url'];
            $portfolio->created_date = $params['created_date'];
            $portfolio->save();

            CategoryPortfolio::where('portfolio_id', $portfolio->id)->delete();

            $arr = $params['category_id'];
            array_unshift($arr, 1);

            foreach ($arr as $id)
            {
                $cat_port = new CategoryPortfolio();
                $cat_port->category_id = $id;
                $cat_port->portfolio_id = $portfolio->id;
                $cat_port->save();
            }

            return redirect()->route('portfolio.show', compact('portfolio'));
        } catch (Throwable $e) {
            report($e);

            $categories = Category::where('id', '>', 1)->get();
            return view('admin.portfolio.update', compact(['categories', 'portfolio']));
        }
    }

    public function destroy(Portfolio $portfolio): RedirectResponse
    {
        $portfolio->toActive();
        return redirect()->back();
    }
}
