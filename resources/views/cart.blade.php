<style>
    .avatar-lg {
        height: 5rem;
        width: 5rem;
    }
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    
    }
    
    </style>
    
    @extends('layouts.app')
    
    @section('content')
    @php
        $price = 0;
        $totalqty = 0;
    @endphp
    
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                @foreach ($data as $row)
                <div class="card border shadow-none">
                    <div class="card-body">
    
                        <div class="d-flex align-items-start border-bottom pb-3">
                            <div class="m-4">
                                <img src="{{$row -> image}}" alt="" class="avatar-lg rounded">
                            </div>
                            <div class="flex-grow-1 align-self-center overflow-hidden">
                                <div>
                                    <h5 class="text-truncate font-size-18 text-dark">{{$row -> product_name}} </h5>
                                    <p class="mb-0 mt-1"> Color  : <span class="fw-medium">{{$row -> color}}</span></p>
                                </div>
                            </div>
                        </div>
    
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2"> Price </p>
                                        <h5 class="mb-0 mt-2"><span class="text-muted me-2"></span>SAR {{$row -> price}}</h5>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2"> Quantity</p>
                                    
                                           
                                        <div class="d-inline-flex">
                                            <a href="{{route('addcart',['id' => $row->id])}}" class="btn btn-rounded mx-1 btn-secondary"> + </a>
                                              <input class="form-control form-control-md w-xl" type="number" value={{$row -> qty}} min="1" max="10"/>
                                              @if ($row -> qty >1)
                                              <a href="{{route('removecart' ,['did' => $row->id])}}"class="btn btn-rounded mx-1 btn-secondary"> - </a>
                                              @else
                                              <a href="{{route('deletecart' ,['did' => $row->id])}}"class="btn btn-rounded mx-1 btn-secondary btn-danger"><i class="fa-solid fa-trash pt-1 ligtbeige"></i> </a>
                                              @endif
                                             
                                        </div>
                                  
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2"> Total</p>
                                        <h5>SAR {{$row -> price * $row -> qty}}</h5>
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <!-- end card -->
                @php 
                
                $price += $row->price * $row->qty;
                $totalqty += $row->qty   
                @endphp
                 
                @endforeach
                {{Session::put('cartCount', $totalqty)}}
    
                <div class="row my-4">
                    <div class="col-sm-6">
                        <a href="{{route('main')}}" class="btn btn-link text-muted text-decoration-none">
                            <i class="mdi mdi-arrow-left me-1"></i> Continue shopping</a>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2 mt-sm-0">
                            <a href="{{route('invoice')}}" class="btn btn-purble btn-lg">
                                <i class="mdi mdi-cart-outline me-1"></i> Check out</a>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div>
    
            <div class="col-xl-4">
                <div class="mt-5 mt-lg-0">
                    <div class="card border shadow-none">
                        <div class="card-header bg-transparent border-bottom py-3 px-4">
                            <h5 class="font-size-16 mb-0"> Summary</h5>
                        </div>
                        <div class="card-body p-4 pt-2">
    
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>no. of products: </td>
                                            <td class="text-end">{{{Session::get('cartCount')}}}</td>
                                        </tr>

                                        <tr>
                                            <td>SubTotal: </td>
                                            <td class="text-end">{{$price}}</td>
                                        </tr>

                                        <tr>
                                            <td>Tax(15%): </td>
                                            <td class="text-end">{{$price*0.15}}</td>
                                        </tr>
                                    
                                        <tr class="bg-light">
                                            <th>Total  :</th>
                                            <td class="text-end">
                                                <span class="fw-bold"> SAR
                                                    {{$price + $price*0.15}}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        
    </div>
    
    
    
    @endsection
    