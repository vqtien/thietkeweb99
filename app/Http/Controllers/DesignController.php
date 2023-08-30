<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Technology;
use App\Models\WebsiteType;
use App\Models\Price;
use App\Models\Article;

class DesignController extends Controller
{
    

    public function design(){
        $prices         = Price::orderBy('id', 'ASC')
                            ->limit(4)
                            ->get();
        $articles       = Article::with('photo')
                            ->orderBy('id', 'ASC')
                            ->limit(4)
                            ->get();
        $data = [
            'prices'    => $prices,
            'articles'  => $articles
        ];
        return view('designs/design', $data);
    }

    public function designCompany(){
        
        $articles       = Article::with('photo')
                            ->orderBy('id', 'ASC')
                            ->limit(4)
                            ->get();
        $data = [
            'articles'  => $articles
        ];
        return view('designs/company', $data);
    }

    public function designLanding(){
       $prices         = Price::orderBy('id', 'ASC')
                            ->limit(4)
                            ->get();
        $articles       = Article::with('photo')
                            ->orderBy('id', 'ASC')
                            ->limit(4)
                            ->get();
        $data = [
            'prices'    => $prices,
            'articles'  => $articles
        ];
        return view('designs/landing', $data);
    }

    public function designEcommerce(){
        
        $articles       = Article::with('photo')
                            ->orderBy('id', 'ASC')
                            ->limit(4)
                            ->get();
        $data = [
            'articles'  => $articles
        ];
        return view('designs/ecommerce', $data);
    }

}
