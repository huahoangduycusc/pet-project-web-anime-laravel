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
        $articlePinSmall = Article::pin()->latest()->take(4)->skip(4)->get();
        $articlesNormal = Article::normal()->latest()->take(4)->get();
        $articleVideoPin = Article::video()->latest()->take(4)->get();
        $articleVideo = Article::video()->latest()->take(10)->get();
        $articleToday = TrackingArticle::today()->mostview()->take(5)->get(); // article most view today
        $articleWeek = TrackingArticle::week() // most view in week (monday to sunday)
        ->groupBy('articleID')
        ->orderBy('sum(views)','DESC')
        ->selectRaw('articleID,sum(views)')->take(10)->get();
        $articleMonth = TrackingArticle::month()
        ->groupBy('articleID')
        ->orderBy('sum(views)','DESC')
        ->selectRaw('articleID, sum(views)')->get();
        $categories = Category::latest('categoryID')->get();
        return view('index',
        compact('articlesPin','articlePinSmall','articlesNormal','articleToday','categories','articleWeek','articleMonth','articleVideoPin','articleVideo'));
    }
}
