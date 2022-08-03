<?php

namespace App\Http\Controllers;


use App\Models\Feature;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products = DB::table('products')
            ->join('categories','categories.category_id','=','products.category_id')
            ->join('brands','brands.brand_id','=','products.brands_id')
            ->where('products.type',$request->query('type'))->get();
       return view('Products.products_list',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->query('type');

        $categories = DB::table('categories')->where('type',$type)->get();
        $brand = DB::table('brands')->where('brand_type',$type)->get();

        return view('Products.create',['categories'=>$categories,'brands'=>$brand]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $Editproducts = DB::table('products')->where('product_id',$id)->get();
        $type = $Editproducts[0]->type;
        $categories = DB::table('categories')->where('type',$type)->get();
        $brand = DB::table('brands')->where('brand_type',$type)->get();



      return view('Products.edit',['brands'=>$brand,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }

    public function drafts(Request $request){


      $validate = $request->validate([
        'name'=>'required|unique:products,name',
        'description'=>'required',
        'brands'=>'required',
        'categories'=>'required',
      ]);

      $productId = DB::table('products')->insertGetId([
          'name'=>$request->name,
          'description'=>$request->description,
          'status'=>'draft',
          'brands_id'=>$request->brands,
          'category_id'=>$request->categories,
          'type'=>$request->type,
      ]);

        $features = DB::table('features')->insert([
            'products_id'=>$productId,
            'platform' => $request->platform,
            'front_camera'=>$request->front_camera,
            'main_camera'=>$request->main_camera,
            'display'=>$request->display,
            'battery'=> $request->battery,
            'ram'=>$request->ram,
            'storage'=>$request->storage,
        ]);



    }
}
