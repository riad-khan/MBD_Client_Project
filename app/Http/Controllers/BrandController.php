<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = DB::table('brands')
            ->join('sub_categories','sub_categories.subcategory_id','=','brands.subcategory_id')
            ->join('categories','categories.category_id','=','brands.category_id')
            ->get();



      return view ('Brand.brands',['brands'=>$brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub_category = SubCategory::all();
        $category = Category::all();



   return view('Brand.create',['categories'=>$category],['sub_categories'=>$sub_category]);
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
            'brand_name' => 'required|unique:brands|max:255',
            'description'=> 'required',
            'subcategory_id'=>'required',
            'category_id'=> 'required',
            'images'=>'required',
        ]);
        $image = $request->file('images');
        $randomName_gen = hexdec(uniqid());
        $image_extesion = strtolower($image->getClientOriginalExtension());
        $image_name = $randomName_gen . '.' . $image_extesion;
        $upload_dir = 'images/Mobile/brands/';
        $final_name = $upload_dir . $image_name;
        $image->move($upload_dir, $image_name);

        Brand::create([
           'brand_name' => $request->brand_name,
           'description' => $request->description,
            'subcategory_id'=> $request->subcategory_id,
            'category_id'=> $request->category_id,
            'brand_image'=> $final_name,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('view.brands')->with('success','Brand Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {

        return view('Brand.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
