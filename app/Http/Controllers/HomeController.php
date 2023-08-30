<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Technology;
use App\Models\WebsiteType;
use App\Models\Price;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $customers      = Customer::with('photo')->get();
        $technologies   = Technology::orderBy('sorted', 'ASC')
                                ->limit(5)
                                ->get();
        $website_types  = WebsiteType::orderBy('sorted', 'ASC')
                                ->limit(6)
                                ->get();
        $articles       = Article::with('photo')
                                ->orderBy('id', 'ASC')
                                ->limit(4)
                                ->get();
        $data = [
            'customers'     => $customers,
            'technologies'  => $technologies,
            'website_types' => $website_types,
            'articles'      => $articles,
        ];
        return view('home/index', $data);
    }

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
        return view('home/design', $data);
    }

    public function price(){
        $prices = Price::with('properties')
                    ->orderBy('id', 'ASC')
                    ->limit(4)
                    ->get();
        $data = [
            'prices' => $prices
        ];
        return view('home/price', $data);
    }

}
