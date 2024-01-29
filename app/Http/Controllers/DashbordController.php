<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\brand;
use App\Models\product;

class DashbordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function GetAll(){
        $data= DB::table('brands')
        ->join('products','brands.id','=','products.brand_id')
        ->get();
        return view('dashbord.controlpanel',['data' => $data]);
    }

    public function AddBrandView(){
        $brands = brand::All();
        return view('dashbord.add_brand',['brands' => $brands] );
          
    }

   public function AddProductView(){
        $products = product::All();
        $brands = brand::All();
        return view('dashbord.add_product',['product' => $products, 'brands' => $brands] ); 
               
    }



}
