<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleType;
use App\Models\Article;
class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles       = Article::with('photo')
                            ->orderBy('created_at', 'DESC')
                            ->paginate(10)
                            ->appends(request()->query());

        $article_types  = ArticleType::all();

        $hot_articles = Article::with('photo')
                            ->orderBy('created_at', 'DESC')
                            ->limit(4)->get();

        $data = [
            'articles'      => $articles,
            'article_types' => $article_types,
            'hot_articles'  => $hot_articles,
        ];

        return view('articles/index', $data);
    }

     //
    public function category($slug)
    {
        $article_types  = ArticleType::all();
        $category   = $article_types->where('slug', $slug)->first();
        $articles   = Article::with('photo')
                            ->orderBy('created_at', 'DESC')
                            ->where('article_type_id', $category->id)
                            ->paginate(10)
                            ->appends(request()->query());

        $hot_articles = Article::with('photo')
                            ->orderBy('created_at', 'DESC')
                            ->limit(4)->get();
                                               
        $data = [
            'articles'      => $articles,
            'article_types' => $article_types,
            'category'      => $category,
            'hot_articles'  => $hot_articles,
        ];

        return view('articles/category', $data);
    }

    public function show($slug){
        $article    = Article::with('photo')
                            ->where('slug', $slug)
                            ->first();

        $article_types  = ArticleType::all();

        $hot_articles = Article::with('photo')
                            ->orderBy('created_at', 'DESC')
                            ->limit(4)->get();

        $data = [
            'article'      => $article,
            'article_types' => $article_types,
            'hot_articles'  => $hot_articles,
        ];

        return view('articles/show', $data);
    }
}
