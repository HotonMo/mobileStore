<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;

class BrandController extends Controller
{
  // Get brands
  public function GetBrands(){
    $brands= brand::All();
    return view('brands',['brands'=>$brands]);
 }


  //  Add brands
  public function AddBrand(Request $request){
    $data = brand::create([
        'brand_name' => $request->brand_name,
        'brand_logo' => $request->brand_logo
    ]);
    $data->save();
    return redirect('add-brand-view') ->with('jsAlert', 'updated succesfully');
 }


  // Delete brands
  public function DeleteBrands($id){
   $find = brand::find($id);
   $find->delete();
    return redirect()->route('add-brand-view');
 }


  //Edit brands
  public function EditBrands($id){
   $item=brand::where('id', $id)
   ->first();

   return view('dashbord.edit_brand',['item'=>$item]);
 }


  //Update brands
  public function UpdateBrands(Request $request){
   $item = brand::find($request->id);
   $item->brand_name = $request->new_brand_name;
   $item->brand_logo = $request->new_brand_logo;
   $item->save();
    return redirect()->route('add-brand-view');
 }

}
