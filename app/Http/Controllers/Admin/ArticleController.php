<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\ArticleType;
use App\Models\Photo;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('photo')->orderBy('created_at', 'DESC')
                    ->paginate(20)
                    ->appends(request()->query());    
        return view('admin/articles/index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article_types = ArticleType::all();
        return view('admin/articles/new', ['article_types' => $article_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('article');

        $validator = Validator::make($param, [
            'name' => 'required',
            'article_type_id' => 'required'
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

        Article::create($param);

        return response()->json(['redirect' => route('admin.articles.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article_types = ArticleType::all();
        $data =  [
            'article_types' => $article_types,
            'article' => $article
        ];
        return view('admin/articles/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $param = $request->input('article');

        $validator = Validator::make($param, [
            'name' => 'required',
            'article_type_id' => 'required'
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

        $article->update($param);

        return response()->json(['message' => "Thành công"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(['id' => $article->id]);
    }
}
