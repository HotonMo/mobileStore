@extends('layouts.dashbord')
@section('content')
    
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            <h1 class="alert text-center"> Products list</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Product ID</th>
                                <th> Product name</th>
                                <th> Color</th>
                                <th> Model</th>
                                <th> Price</th>
                                <th> Category</th>
                                <th> Brand</th>
                                <th> Image </th>
                            </tr>
            
                        </thead>
                        <tbody>
                            @if ($data != null)
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->product_name}}</td>
                                    <td>{{$row->color}}</td>
                                    <td>{{$row->model}}</td>
                                    <td>{{$row->price}}</td>
                                    <td>{{$row->category}}</td>
                                    <td>{{$row->brand_name}}</td>
                                    <td><img src="{{$row->image}}" width="100"></td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection