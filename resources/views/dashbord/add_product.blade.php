@extends('layouts.dashbord')

@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <h1 class="alert text-center"> Add Product</h1>
                    <form action="{{route('add-product')}}" method="post">
                        @csrf
                        <label for="product_name" class="p-2"> Insert product name</label>
                        <input type="text" class="form-control form-control-sm " name="product_name" id="product_name">

                        <label for="color" class="p-2"> Insert product color</label>
                        <input type="text" class="form-control form-control-sm " name="color" id="color">

                        <label for="model" class="p-2"> Insert product model</label>
                        <input type="text" class="form-control form-control-sm " name="model" id="model">

                        <label for="price" class="p-2"> Insert product price</label>
                        <input type="text" class="form-control form-control-sm " name="price" id="price">

                        <label for="image" class="p-2"> Insert product image - link - </label>
                        <input type="text" class="form-control form-control-sm " name="image" id="image">

                        <label for="brand_logo" class="p-2"> Category </label>
                        <select class="form-select" aria-label="Default select example" name="category" id="category">
                            <option value= "Phone" id="category">Phone</option>
                            <option value= "Tablet" id="category">Tablet</option>
                            <option value= "Labtop" id="category">Labtop</option>
                            <option value= "Headphones" id="category">Airbuds</option>
                            </select>

                        <label for="brand_id" class="p-2"> choose brand</label>
                        <select class="form-select" aria-label="Default select example" name="brand_id" id="brand_id">
                        @foreach($brands as $row)
                        <option  value={{$row->id}} >{{$row->brand_name}}</option>
                        @endforeach
                        </select>


                        <div class="row">
                        <div class="text-center">
                        <button class="btn btn-secondary mt-2" type="submit" > Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center">
             <thead>
                <tr>
                    <th> Product name</th>
                    <th> Color </th>
                    <th> model </th>
                    <th> Price </th>
                    <th> Category </th>
                    <th> Image </th>
                    <th colspan="2"> </th>
                </tr>
             </thead>
             <tbody>
                @foreach($product as $row)
                <tr>
                    <td>{{$row->product_name}}</td>
                    <td>{{$row->color}}</td>
                    <td>{{$row->model}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->category}}</td>
                    <td><img src="{{$row->image}}" width="100" ></td>
                    <td><a href="{{route('edit-product', ['id'=> $row->id])}}"> <i class="fa-solid fa-pen-to-square  text-success"></i></a></td> 
                    <td><a href="{{route('delete-product', ['id'=> $row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>    
                </tr>
                @endforeach
             </tbody>
            </table>
        </div>
    </div>
</div>






@if(Session::has('jsAlert'))

<script type="text/javascript" >
    
    Swal.fire({
  title: "saved",
  text: "Your work has been saved",
  icon: "success"
});
</script>

@endif



@endsection