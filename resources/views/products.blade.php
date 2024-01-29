@extends('layouts.app')
@section('content')

<div class="container "> 
    <h2> {{$product[0]-> category}} list </h2>
    <div class="row bg-white">
        @foreach ($product as $row)
        
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center my-3 ">
            <div class=" d-flex justify-content-center "> 
                
                <div style="height:200px" >
                    <img src= {{$row -> image}} alt="" weidth='100%' height='100%' object-fit="scale-down" >
                </div>
              
                
            </div>
            <div class="pt-2 d-flex align-items-center justify-content-center">  <img src= {{$row -> brand_logo}} width="10%" class= "mr-1" >  {{$row -> product_name}} {{$row -> model}} </div>
           <div>{{$row -> color}}</div>
           <p class="fw-bold">SAR {{$row -> price}}</p>
           <a href ="{{route('addtocart', ['id' => $row -> id])}}" type="button" class="btn btn-purble"> Add to cart <i class="fas fa-shopping-bag "></i></a>
        </div>

        @endforeach
        
    </div>
</div>


@endsection