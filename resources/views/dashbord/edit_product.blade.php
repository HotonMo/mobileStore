@extends('layouts.dashbord')

@section('content')
    
<div class="container">
    <div class="row  d-flex justify-content-center">
        <h1 class="alert text-center"> Edit Product data</h1>
        <div class="col">
            <div class="card">
                <div class="card-body  d-flex justify-content-center">
                    <form action="{{route('update-product')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">

                        <label for="product_name" class="p-2"> Product name</label>
                        <input type="text" class="form-control form-control-sm " name="product_name" id="product_name"  value="{{$item->product_name}}">

                        <label for="color" class="p-2"> Product model</label>
                        <input type="text" class="form-control form-control-sm " name="color" id="color"  value="{{$item->color}}">

                        <label for="model" class="p-2"> Product color</label>
                        <input type="text" class="form-control form-control-sm " name="model" id="model"  value="{{$item->model}}">

                        <label for="price" class="p-2"> Product price</label>
                        <input type="text" class="form-control form-control-sm " name="price" id="price"  value="{{$item->price}}">

                        <label for="image" class="p-2"> Product image - link - </label>
                        <input type="text" class="form-control form-control-sm " name="image" id="image"  value="{{$item->image}}">

                        <label for="brand_logo" class="p-2"> Category </label>
                        <select class="form-select" aria-label="Default select example" name="category" id="category" >
                            <option value= "Phone" {{"Phone" == $item->category? 'selected':''}} id="category">Phone</option>
                            <option value= "Tablet"  {{"Tablet"  == $item->category? 'selected':''}} id="category">Tablet</option>
                            <option value= "Labtop" {{"Labtop"  == $item->category? 'selected':''}} id="category">Labtop</option>
                            <option value= "Headphones" {{"Headphones"  == $item->category? 'selected':''}} id="category">Airbuds</option>
                            </select>

                            <label for="brand_id" class="p-2"> choose brand</label>
                            <select class="form-select" aria-label="Default select example" name="brand_id" id="brand_id">
                            @foreach($brands as $row)
                            <option  value={{$row->id}}  {{$row->id == $item->brand_id? 'selected':''}}>{{$row->brand_name}}</option>
                            @endforeach
                            </select>

                        <div class="text-center">
                            <button class="btn btn-secondary mt-2" type="submit" > Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection