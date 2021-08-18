<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\TrackingArticle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articlesPin = Article::pin()->latest()->take(4)->get();
        $articlesNormal = Article::normal()->latest()->take(4)->get();
        $articleToday = TrackingArticle::today()->mostview()->take(5)->get();
        $categories = Category::latest('categoryID')->get();
        return view('index',compact('articlesPin','articlesNormal','articleToday','categories'));
    }
}
