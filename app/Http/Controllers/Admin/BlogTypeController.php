<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\BlogType;
use Illuminate\Http\Request;

class BlogTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_types = BlogType::all();
        return view('admin/blog_types/index', ['blog_types' => $blog_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blog_types/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('blog_type');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $param['slug']     = make_permalink($param['name']);

        BlogType::create($param);

        return response()->json(['redirect' =>route('admin.blog-types.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogType  $blogType
     * @return \Illuminate\Http\Response
     */
    public function show(BlogType $blogType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogType  $blogType
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogType $blogType)
    {
        return view('admin/blog_types/edit', ['blog_type' => $blogType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogType  $blogType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogType $blogType)
    {
        $param = $request->input('blog_type');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $param['slug']     = make_permalink($param['name']);

        $blogType->update($param);

        return response()->json(['redirect' =>route('admin.blog-types.index')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogType  $blogType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogType $blogType)
    {
        $blogType->delete();
        return response()->json(['id' => $blogType->id]);
    }
}
