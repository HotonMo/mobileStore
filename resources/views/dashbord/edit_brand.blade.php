@extends('layouts.dashbord')

@section('content')
    
<div class="container">
    <div class="row  d-flex justify-content-center">
        <h1 class="alert text-center"> Edit Brand data</h1>
        <div class="col">
            <div class="card">
                <div class="card-body  d-flex justify-content-center">
                    <form action="{{route('update-brand')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="brand_name"> Brand name</label>
                        <input class="form-control form-control-sm" type="text" name="new_brand_name" id="new_brand_name" value="{{$item->brand_name}}">
                        <label for="brand_logo"> Brand icon</label>
                        <input class="form-control form-control-sm" type="text" name="new_brand_logo" id="new_brand_logo" value="{{$item->brand_logo}}">

                        <div class="text-center">
                            <button class="btn btn-secondary mt-2" type="submit" >Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection