<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Throwable;

class CategoryController extends HomeController
{
    public function index(): View|Application
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.category.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category-title' => 'required|min:3',
        ]);

        try {
            Category::create([
                'title' => $request->input('category-title'),
            ]);

            return redirect()->route('category.index');
        } catch (Throwable $e) {
            report($e);
            return redirect()->back();
        }
    }

    public function edit(Category $category): Factory|View|Application
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'category-title' => 'required',
        ]);

        try {
            $category->update([
                'title' => $request->input('category-title'),
            ]);

            return redirect()->route('category.index');
        } catch (Throwable $e) {
            report($e);
            return redirect()->back();
        }
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->toActive();
        return redirect()->back();
    }
}
