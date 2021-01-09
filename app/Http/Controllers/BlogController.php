<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function singlePost(Post $post)
    {
        return view('blog.single_blog', compact('post'));
    }
    public function getAllBlogs()
    {
        $posts = Post::paginate('9');
        return view('blog.blogs', compact('posts'));
    }
    public function cretaeBlogForm()
    {
        return view('blog.create_blog');
    }
    public function cretaeBlog(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|unique:posts',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg',

        ]);
        try {
            if ($request->file('thumbnail')) {

                $image = $request->file('thumbnail');

                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'assets/backend/blog/images';
                $image->move($destinationPath, $name);

            }
            $blog = new Post;
            $blog->title = $request->title;
            $blog->user_id = Auth::user()->id;
            $blog->description = $request->description;
            $blog->slug = Str::slug($blog->title, '-');
            $blog->thumbnail = $destinationPath . '/' . $name;
            if ($blog->save()) {
                return redirect()->back()->with('message', 'Blog Created Successfully');
            }

        } catch (Exception $e) {
            return redirect()->back();
        }

    }
    public function manageBlogs()
    {
        $blogs = Post::where('user_id', Auth::user()->id)->paginate('9');
        return view('blog.manage_blogs', compact('blogs'));

    }

    public function editBlogForm($id)
    {
        $blog = Post::find($id);
        return view('blog.edit_blog', compact('blog'));
    }

    public function editBlog(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'


        ]);
        try {
            if ($request->file('thumbnail')) {

                $image = $request->file('thumbnail');

                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'assets/backend/blog/images';
                $image->move($destinationPath, $name);

                $post = Post::where('id', $request->blog_id)
                ->where('user_id',Auth::user()->id)
                    ->update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'thumbnail' => $destinationPath . '/' . $name,
                    ]);

            } else {
                $post = Post::where('id', $request->blog_id)
                ->where('user_id',Auth::user()->id)
                    ->update([
                        'title' => $request->title,
                        'description' => $request->description,
                    ]);
            }

            if ($post) {
                return redirect()->back()->with('message', 'Blog Updated Successfully');
            }

        } catch (Exception $e) {
            return redirect()->back();
        }

    }
    public function deleteBlog($id){
        try{
            if(Post::find($id)->delete()){
                return redirect()->back()->with('message','Blog Has Been Deleted Successfully');
            }
        }catch(Exception $e){
            return redirect()->back();
        }


    }
}
