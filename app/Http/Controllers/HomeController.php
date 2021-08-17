<?php

namespace App\Http\Controllers;

use App\Article;
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
        $articlesNormal = Article::normal()->get();
        return view('index',compact('articlesPin','articlesNormal'));
    }
}
