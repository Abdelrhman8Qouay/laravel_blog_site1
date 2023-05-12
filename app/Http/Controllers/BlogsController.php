<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to get helper to make the slug
use Illuminate\Support\Str;

use Illuminate\Http\RedirectResponse;

use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blogs.index')->with('blogs', Blog::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:5048',
            'content' => 'required'
        ]);

        $slug = Str::slug($request->title,"-");

        $newImgName = uniqid(). "-$slug.".$request->image->extension();
        $request->image->move(public_path('images/postImgs'), $newImgName);

        $Blog = new Blog([
            // 'user_id' => $request->get('user_id'),
            // 'title' => $request->get('title'),
            // 'status' => $request->get('status'),
            // 'subject' => $request->get('subject'),
            'TITLE_BLOG' => $request->title,
            'DESC_BLOG' => $request->desc,
            'POST_CONTENT_BLOG' => $request->content,
            'SLUG_BLOG' => $slug,
            'MAIN_IMG_BLOG' => $newImgName,
            'USER_ID' => auth()->user()->id,
        ]);

        if($Blog->save()) {
            return redirect('/blogs')->with('flash_success', 'Success Create New Post.');
        } else {
            return redirect('/blogs')->with('flash_error', 'Error: Can not Create a New Post.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
