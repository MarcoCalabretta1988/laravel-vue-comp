<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $status_filter = $request->query('status_filter');
        // $category_filter = $request->query('category_filter');

        // $query = Post::orderBy('updated_at', 'DESC');

        // if ($status_filter) {
        //     $value = $status_filter === 'published';
        //     $query->where('is_published', $value);
        // }

        // if ($category_filter) {
        //     $query->where('category_id', $category_filter);
        // }

        // $posts = $query->paginate(10);
        // $categories = Category::all();

        // return view('admin.posts.index', compact('posts',  'categories',  'status_filter', 'category_filter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
