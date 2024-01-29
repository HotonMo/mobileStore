<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use Illuminate\support\Facades\DB;

class ProductController extends Controller
{
    // Get product
  public function GetProduct($category = null){
  
    if ($category != null){
      $data= DB::table('brands')
     ->join('products','brands.id','=','products.brand_id')
      ->where('products.category', $category)
      ->get();
      }else{
        $data= DB::table('brands')
        ->join('products','brands.id','=','products.brand_id')
        ->get();
      }

    
    return view('products',['product' => $data]);
 }


  //  Add product
  public function AddProduct(Request $request){
    $data=product::create([
        'product_name' => $request->product_name,
        'color' => $request->color,
        'model' => $request->model,
        'price' => $request->price,
        'image' => $request->image,
        'category' => $request->category,
        'brand_id' => $request->brand_id
    ]);
    $data->save();
    return redirect('add-product-view') ->with('jsAlert', 'updated succesfully');
 }


  // Delete product
  public function DeleteProduct($id){
   $find = product::find($id);
   $find->delete();
    return redirect()->route('add-product-view');
 }


  //Edit product
  public function EditProduct($id){
   $item=product::where('id', $id)
   ->first();
   $brands = brand::All();
   return view('dashbord.edit_product',['item'=>$item, 'brands' => $brands]);
 }


  //Update product
  public function UpdateProduct(Request $request){
   $item = product::find($request->id);
   $item->product_name = $request->product_name;
   $item->color = $request->color;
   $item->model = $request->model;
   $item->price = $request->price;
   $item->image = $request->image;
   $item->category = $request->category;
   $item->brand_id = $request->brand_id;
   $item->save();
   
   return redirect()->route('add-product-view');
 }
}
