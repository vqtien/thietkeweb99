<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\ArticleType;
use Illuminate\Http\Request;

class ArticleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_types = ArticleType::all();
        return view('admin/article_types/index', ['article_types' => $article_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/article_types/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('article_type');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $param['slug']     = make_permalink($param['name']);

        ArticleType::create($param);

        return response()->json(['redirect' =>route('admin.article-types.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleType $articleType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleType $articleType)
    {
        return view('admin/article_types/edit', ['article_type' => $articleType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleType $articleType)
    {
        $param = $request->input('article_type');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $param['slug']     = make_permalink($param['name']);

        $articleType->update($param);

        return response()->json(['redirect' =>route('admin.article-types.index')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleType  $articleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleType $articleType)
    {
        $articleType->delete();
        return response()->json(['id' => $articleType->id]);
    }
}
