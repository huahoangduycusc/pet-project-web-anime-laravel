<?php

namespace App\Http\Controllers;

use App\Category;
use App\TrackingArticle;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('categoryID','DESC')->paginate(3);
        return view('admin.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view('admin.category.create',compact('category'));
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
        Category::create($data);
        return redirect('admin/category/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::latest()->get();
        $articleToday = TrackingArticle::today()->mostview()->take(5)->get(); // article most view today
        return view('client.category.view',compact('category','categories','articleToday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
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
        $data = $this->validateRequest();
        $category = Category::findOrFail($id);
        $category->categoryName = $request->categoryName;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->update();
        return back()->with('message','Update category success!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/category/list');
    }

    // validate form
    private function validateRequest(){
        $message = [
            'categoryName.required' => 'Please, enter name of category',
            'description.required' => 'Please, enter description',
            'status.required' => 'Please, choose status'
        ];

        $data = request()->validate([
            'categoryName' => 'required|max:120',
            'description' => 'required',
            'status' => 'required'
        ],$message);

        return $data;
    }
}
