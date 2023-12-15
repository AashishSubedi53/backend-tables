<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function blog(){
        $blog = Blog::all();
        $categories = BlogCategory::all();
        return view('blog.index',[
            'blogs'=>$blog,
            'categories'=>$categories
        ]);
    }

    public function composeBlog(Request $request){
        $categories = BlogCategory::all();
        return view('blog.compose',[
            'categories'=>$categories
        ]);
    }

    public function insertBlog(Request $request){
        $data = $request->all();
        Blog::create($data);
        return redirect()->back();


    }

    public function editBlog($id){
        $categories = BlogCategory::all();
        $blog = Blog::find($id);
        return view('blog.edit',[
            'blog'=> $blog,
            'categories'=>$categories
        ]);
    }

    public function updateBlog($id, Request $request){
        $data = $request->all();
        // dd($data);
        $blog = Blog::find($id);
        $blog->update($data);

        return redirect('blog');

    }

    public function deleteBlog($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back();

    }



    public function blogCategory(){
        $blogCategories = BlogCategory::all();
        return view('blogCategory.index',[
            'blogCategories'=> $blogCategories
        ]);
    }

    public function addBlogCategory(){
        return view('blogCategory.add');
        
    }

    public function insertBlogCategory(Request $request){
        $data = $request->all();
        BlogCategory::create($data);
        return redirect()->back();

    }

    public function editBlogCategory($id){
        $cat = BlogCategory::find($id);
        return view('blogCategory.edit',[
            'cat'=>$cat
        ]);

    }

    public function updateBlogCategory($id, Request $request){
        $data = $request->all();
        $categories = BlogCategory::find($id);
        $categories->update($data);
        return redirect('blogCategory');

    }

    public function deleteBlogCategory($id){
        $blogCategory = BlogCategory::find($id);
        $blogCategory->delete();
        return redirect()->back();

    }


}
