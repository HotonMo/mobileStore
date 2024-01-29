@extends('layouts.dashbord')

@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <h1 class="alert text-center"> Add Brand</h1>
                    <form action="{{route('add-brand')}}" method="post">
                        @csrf
                        <label for="brand_name" class="p-2"> Insert brand name</label>
                        <input type="text" class="form-control form-control-sm " name="brand_name" id="brand_name">

                        <label for="brand_logo" class="p-2"> Insert brand logo - Link- </label>
                        <input type="text" class="form-control form-control-sm " name="brand_logo" id="brand_logo">

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
                    <th>Brand name</th>
                    <th> Icon</th>
                    <th colspan="2"></th>
                </tr>
             </thead>
             <tbody>
                @foreach($brands as $row)
                <tr>
                    <td>{{$row->brand_name}}</td>
                    <td><img src="{{$row->brand_logo}}" width="100" ></td>
                    <td><a href="{{route('edit-brand', ['id'=> $row->id])}}"> <i class="fa-solid fa-pen-to-square  text-success"></i></a></td> 
                    <td><a href="{{route('delete-brand', ['id'=> $row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>    
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