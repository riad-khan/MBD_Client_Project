<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = array();

        $sub_categories = DB::table('sub_categories')->join('categories','categories.category_id','=','sub_categories.parent_category')
            ->select('sub_categories.subcategory_id','sub_categories.subcategory_name','categories.category_name','sub_categories.created_at')
            ->get();


   return view('SubCategory.subcategories',['subCategories'=>$sub_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();


        return view('SubCategory.create',['categories'=>$categories]);
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
            'subcategory_name'=>'required|unique:sub_categories',
            'description'=>'required',
            'category_id'=>'required',
        ]);

        $subCategory = SubCategory::create([
            'parent_category'=>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,
            'description'=> $request->description,
            'created_at'=>Carbon::now()
        ]);
        return redirect()->route('view.sub-category');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_category = DB::table('sub_categories')->where('subcategory_id',$id)->first();
        $categories = Category::all();
        return view('SubCategory.edit',['category'=>$sub_category],['parent_Category'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'subcategory_name'=>'required|unique:sub_categories',
            'description'=>'required',
            'category_id'=>'required',
        ]);
        $category = DB::table('sub_categories')->where('subcategory_id',$id)->update([
            'parent_category'=>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,
            'description'=> $request->description,
            'updated_at'=>Carbon::now()
        ]);


        return redirect()->route('view.sub-category')->with('success','category updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = DB::table('sub_categories')->where('subcategory_id',$id)->delete();
        return redirect()->back()->with('success','deleted successfully');
    }
}
