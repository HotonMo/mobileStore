<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\brand;
// use App\Models\product;

class MainController extends Controller
{
    public function MainView($id = null){
        $brands= brand::All();
        if ($id !=null){
        $data= DB::table('brands')
        ->join('products','brands.id','=','products.brand_id')
        ->where('products.brand_id', $id)
        ->get();
        }else{
             $data= DB::table('brands')
            ->join('products','brands.id','=','products.brand_id')
            ->get();
        }

        return view('main',['brands'=>$brands, 'product' => $data]);
    }
}
