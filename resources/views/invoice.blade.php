@extends('layouts.app')
@section('content')

@php
$price = 0;
$time = date('Y-m-d ')
@endphp

<div class="card">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #123-123</strong></p>
          </div>
          <div class="col-xl-3 float-end">
            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                class="fas fa-print text-primary"></i> Print</a>
            <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                class="far fa-file-pdf text-danger"></i> Export</a>
          </div>
          <hr>
        </div>
  
        <div class="container bg-white">
          <div class="col-md-12">
            <div class="text-center">
                <img src="../../images/logo2.png" alt="logo" class="rounded" width="20%" >
              <p class="pt-0">mobileStore.com</p>
            </div>
  
          </div>
  
  
          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: <span style="color:#5d9fc5 ;">{{ Auth::user()->name }} </span></li>
                <li class="text-muted"><i class="fa-solid fa-envelope px-2"></i> {{ Auth::user()->email }} </li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">ID:</span>#123-456</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">Creation Date: </span>{{$time}}</li>
                {{-- <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                    Unpaid</span></li>
              </ul> --}}
            </div>
          </div>
  
          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color:#84B0CA ;" class="text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Unit Price</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($data as $row )
                <tr>
                  <th scope="row">1</th>
                  <td>{{$row -> product_name}}</td>
                  <td>{{$row -> qty}}</td>
                  <td>{{$row -> price}}</td>
                  <td>{{$row -> price * $row -> qty}}</td>
                </tr>
                @php 
                
                $price += $row->price * $row->qty;
                
                @endphp
                  @endforeach
             
              </tbody>
  
            </table>
          </div>
          <div class="row">
            <div class="col-xl-8">
              {{-- <p class="ms-3">Add additional notes and payment information</p> --}}
  
            </div>
            <div class="col-xl-3">
              <ul class="list-unstyled">
                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>{{$price}}</li>
                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>{{$price*0.15}}</li>
              </ul>
              <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                  style="font-size: 25px;">{{$price + $price*0.15}}</span></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-10">
              <p>Thank you for your purchase</p>
            </div>
            <div class="col-xl-2">
              <a href="{{route('resetcart')}}" type="button" class="btn btn-purble text-capitalize"> Back to main</a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>

  @endsection