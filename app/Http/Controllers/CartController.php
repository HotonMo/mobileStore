<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
 public function ShowCart(){
        $data= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->get();
       return view('cart', ['data' => $data]);
 }

 public function AddtoCart($id){
    if(!DB::table('carts')->where('product_id', $id)->exists()){
        DB::table('carts')->insert(['product_id' => $id, 'qty' => 1]);
    }else{ 
    $counter = DB::table('carts')->where('product_id', $id)->value('qty');
    $counter+=1;
    DB::table('carts')->where('product_id', $id)->update(array('product_id' => $id, 'qty' => $counter)); 
    }

    return redirect('main');
 }

 public function AddCart($id){
    $counter = DB::table('carts')->where('product_id', $id)->value('qty');
    $counter+=1;
    DB::table('carts')->where('product_id', $id)->update(array('product_id' => $id, 'qty' => $counter)); 
    return redirect('cart');
 }
 
 public function RemoveCart($did){
   $counter = DB::table('carts')->where('product_id', $did)->value('qty');
   $counter-=1;
   DB::table('carts')->where('product_id', $did)->update(array('product_id' => $did, 'qty' => $counter)); 
   return redirect('cart');
 }

 public function DeleteItemCart($id){
   $find = DB::table('carts')->where('product_id', $id);
   $find->delete();
    return redirect()->route('cart');
 }

 public function Invoice(){
    $data= DB::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->get();
   return view('invoice', ['data' => $data]);
 }

 public function ResetCart(){
    DB::table('carts')->delete();
    Session::put('cartCount', 0);
    return redirect('main');
 }


}
