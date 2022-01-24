@extends('layouts.app')

@section('content')
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                <div class="col-lg-7">
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Shopping cart</p>
                    </div>
                  </div>
  
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="{{ asset('images/' . $order->product->image) }}"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 205px;">
                          </div>
                          <div class="ms-3">
                            <h5>{{$order->category}}</h5>
                            <p class="small mb-0">Bahan : {{$order->product->material}}</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">1</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">{{$order->price}}</h5>
                          </div>
                          <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
                <div class="col-lg-5">
  
                  <div class="card rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Checkout details</h5>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Total</p>
                        <p class="mb-2">{{$order->price}}</p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Biaya Pengiriman</p>
                        <p class="mb-2">Gratis</p>
                      </div>
                      
                      <form action="{{route('order.payment',$order->id)}}">
                        <button type="submit" class="btn btn-primary">
                            <div class="d-flex justify-content-between">
                              <span>Checkout</span>
                            </div>
                          </button>
                      </form>
                      
  
                    </div>
                  </div>
  
                </div>
  
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection