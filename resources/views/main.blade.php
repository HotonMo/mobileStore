@extends('layouts.app')

@section('content')

<div class="container">
    <h2> Brands </h2>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        @foreach ($brands as $row)
            <div class="col text-center">
                
                    <div >
                        <a href="{{route('main',['id' => $row->id])}}" class="text-decoration-none">
                        <div>
                            <div style="height:100px">
                                <img src="{{$row->brand_logo}}" weidth='100%' height='100%' object-fit="scale-down">
                            </div>
                            
                            <h4>{{$row->brand_name}}</h4>
                        </div>
                    </a>
                    </div>
                
            </div>
        @endforeach
    </div>
</div>


<div class="container my-5">
    <h2> Categories </h2>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center ">

        <div class="col text-center">
            <a href="{{route('show-products',['category' => 'Phone' ])}}" class="text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-mobile-screen-button fa-3x "></i>
                        <h4> Phones </h4>
                    </div>
                </div>
            </a>
        </div>

            <div class="col text-center">
                <a href="{{route('show-products',['category' => 'Tablet' ])}}" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-tablet-screen-button fa-3x"></i>
                            <h4> Tablets </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col text-center">
                <a href="{{route('show-products',['category' => 'Labtop' ])}}" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-laptop fa-3x" ></i>
                            <h4> Labtops </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col text-center">
                <a href="{{route('show-products',['category' => 'Headphones' ])}}" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-headphones fa-3x"></i>
                            <h4> Headphones </h4>
                        </div>
                    </div>
                </a>
            </div>

         
            

    </div>
</div>

<div class="container ">
    <h2> All Products </h2>
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
