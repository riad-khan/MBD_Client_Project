<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $type = $request->query('type');

        $categories = DB::table('categories')->where('type',$type)->get();
        return view('Category.categories',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validate = $request->validate([
           'category_name'=>'required|unique:categories',
           'description'=>'required'
       ]);

      $category = Category::create([
          'category_name'=>$request->category_name,
          'description'=> $request->description,
          'type'=> $request->type,
          'created_at'=>Carbon::now()
      ]);

      return redirect()->route('view.category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->where('category_id',$id)->first();
        return view('Category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'category_name'=>'required',
            'description'=>'required'
        ]);

        $category = DB::table('categories')->where('category_id',$id)->update([
            'category_name'=>$request->category_name,
            'description'=> $request->description,
            'updated_at'=>Carbon::now()
        ]);


       return redirect()->route('view.category')->with('success','category updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleteCategory = DB::table('categories')->where('category_id',$id)->delete();
       return redirect()->back()->with('success','deleted successfully');
    }
}
