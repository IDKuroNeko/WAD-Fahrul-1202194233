@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($products as $product)
        @if($product->designer != null)
        <div class="col">
          <div class="card">
            <img
              src="{{asset('images/'.$product->image)}}"
              class="card-img-top"
              alt="Hollywood Sign on The Hill"
            />
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-text">Designer : {{$product->designer}}</h5>
                  <h5 class="card-text">Terjual : {{$product->order}}</h5>
                </div>
                <div class="col">
              
                  <form action="{{route('order.service.update',$order->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-primary">Pilih</button>
                 </form>

                </div>
              </div>
              
            </div>
          </div>
        </div>  
        @endif
        @endforeach
      </div>
</div>
@endsection