<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public  function  getSingleBlogPage(Blog $blog)
    {
        $blogs = Blog::all();
        return view('blog-single',compact('blog','blogs'));
    }

    public function getBlogsForBlogPage()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }


    public function getBlogs(){

        $blogs = Blog::all();
        return view('admin-dashboard.blogs',compact('blogs'));
    }
    /**
     * add a Testimony to the database.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return View $view
     */
    public function addBlog(Request $request)
    {

        //validate new employee and store details to db
        $request->validate([
            'blog_title' => ['required', 'string', 'max:255'],
            'blog_category' => ['required', 'string', 'max:255'],
            'blog_description' => ['required'],
        ]);

        $data = $request->all();

        //upload testimony image
        if(($request->hasfile('blog_picture')) && ($request->blog_picture != null))
        {

            $name = $request->blog_picture->getClientOriginalName();
            $request->blog_picture->move(public_path().'/blog-pictures/', $name);

            Blog::create([
                'title' => $data['blog_title'],
                'category' => $data['blog_category'],
                'description' => $data['blog_description'],
                'picture_url' => $name
            ]);

            session()->flash('success','Blog Added Successfully');
            return redirect()->back();

        }
        else
        {

            //if no image was selected revert to default image
            Blog::create([
                'title' => $data['blog_title'],
                'description' => $data['blog_description'],
                'picture_url' => 'default_testimony_image.png'
            ]);

            session()->flash('success','Blog Added Successfully');
            return redirect()->back();


        }



    }


    public function deleteBlog(Blog $blog){
        $blog->delete();
        session()->flash('success','Blog Deleted Successfully');
        return redirect()->back();
    }
}
