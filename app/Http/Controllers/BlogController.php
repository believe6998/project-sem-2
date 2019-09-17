<?php

namespace App\Http\Controllers;

use App\Blog;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
{
    $this->middleware('auth');
}

    public function index()
    {
        $blog = Blog::latest()->paginate(4);
        return view('admin/blog')->with(['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/form-blog');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(Request $request)
    {

        $blog = new Blog();
        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        $blog->content = $request->contentcheck;
        $files = $request->file('thumbnail');
        $image_url = '';
        foreach ($files as $file) {
            $img = $file->getRealPath();
            Cloudder::upload($img, null);
            $image_url .= Cloudder::show(Cloudder::getPublicId());
        }
        $blog->thumbnail = $image_url;

        $blog->save();


        //dd($userImage);


        return redirect('admin/blog');
    }


    /**
     * Display the specified resource.
     *
     * @param $id
     * @return void
     */
    public function show($id)
    {
         $blog = Blog::find($id);
         if ($blog == null) {
             return view('error.404');
         }
         return view('admin/detail-blog')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin/form-update-blog')->with('blog', $blog);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Blog::findOrFail($id);
        $obj->title = $request->input('title');
        $obj->detail = $request->input('detail');
        $obj->content = $request->input('contentcheck');
        $files = $request->file('thumbnail');
        $image_url = '';
        foreach ($files as $file) {
            $img = $file->getRealPath();
            Cloudder::upload($img, null);
            $image_url .= Cloudder::show(Cloudder::getPublicId());
        }
        $obj->thumbnail = $image_url;
        $obj->save();
        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('admin/blog');

    }

}
