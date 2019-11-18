<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // $blogs = Blog::all();
        // Paginate
        $blogs = Blog::paginate(5);
        return view('blog/home', ['blogs' => $blogs]);
    }

    // tuk menampilkan single page-nya
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog/show', ['blog' => $blog]);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        
        return redirect('blog');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        Blog::find($id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('blog');
    }

    public function trash(){
        $blogs = Blog::onlyTrashed()->get();
        return view('blog/trash', ['blogs' => $blogs]);
    }

    public function delete($id){
        Blog::find($id)->delete();
        return redirect('blog');
    }

    public function forceDelete($id)
    {
        Blog::withTrashed()->find($id)->forceDelete();
        return redirect('blog');
    }

    public function restore($id)
    {
        Blog::withTrashed()->find($id)->restore();
        return redirect('blog');
    }
}
