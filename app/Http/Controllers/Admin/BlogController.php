<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\BlogType;
use App\Models\Photo;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('photo')->orderBy('created_at', 'DESC')
                    ->paginate(20)
                    ->appends(request()->query());    
        return view('admin/blogs/index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_types = BlogType::all();
        return view('admin/blogs/new', ['blog_types' => $blog_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('blog');

        $validator = Validator::make($param, [
            'name' => 'required',
            'blog_type_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        if ($request->file('image'))
        {
            $photo = Photo::upload($request, 'image');
            if($photo)
                $param['photo_id'] = $photo->id;
        }

        $param['slug']     = make_permalink($param['name']);

        Blog::create($param);

        return redirect()->to(route('admin.blogs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog_types = BlogType::all();
        $data =  [
            'blog_types' => $blog_types,
            'blog' => $blog
        ];
        return view('admin/blogs/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $param = $request->input('blog');

        $validator = Validator::make($param, [
            'name' => 'required',
            'blog_type_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        if ($request->file('image'))
        {
            $photo = Photo::upload($request, 'image');
            if($photo)
                $param['photo_id'] = $photo->id;
        }

        $param['slug']     = make_permalink($param['name']);

        $blog->update($param);

        return response()->json(['message' => "Thành công"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(['id' => $blog->id]);
    }
}
