<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('articleID','DESC')->paginate(10);
        return view('admin.article.index',compact('articles'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','=',0)->orderBy('categoryID','DESC')->get();
        return view('admin.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateRequest();
        $article = new Article();
        $article->categoryID = $request->category;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->tags = $request->tags;
        $article->userID = Auth::user()->id;
        $article->priority = $request->priority;
        $article->save();
        $this->storeImages($article);
        return redirect()->action([ArticleController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findorFail($id);
        return view('client.article.view',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('categoryID','DESC')->get();
        $article = Article::findOrFail($id);
        return view('admin.article.edit',compact('categories','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest();
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->categoryID = $request->category;
        $article->tags = $request->tags;
        $article->priority = $request->priority;
        $article->update();
        $this->storeImages($article);
        return redirect()->action([ArticleController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        Storage::disk('public')->delete($article->thumbnail);
        $article->delete();
        return redirect()->action([ArticleController::class,'index']);
    }

    // validate function
    private function validateRequest(){
        $message = [
            'title.required' => 'Please, enter the title',
            'description.required' => 'Please, enter description',
            'category.required' => 'Please, choose category',
            'tags.required' => 'Please, enter some tags'
        ];

        $data = request()->validate([
            'title' => 'required|min:10|max:140',
            'description' => 'required',
            'category' => 'required',
            'tags' => 'required'
        ],$message);

        if(request()->hasFile('thumbnail')){
            //dd(request()->thumbnail);
            request()->validate([
                'thumbnail' => 'file|image'
            ]);
        }
        return $data;
    }

    // store images
    private function storeImages($article){
        if(request()->hasFile('thumbnail')){
            $article->update([
                'thumbnail' => request()->thumbnail->store('articles','public')
            ]);
        }
        $image = Image::make(public_path('storage/'.$article->thumbnail))->fit(1280,720);
        $image->save();
    }
}
