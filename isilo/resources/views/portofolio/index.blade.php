@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Portofolio</h3>
    <hr>
    <p>Berikut adalah hasil pengerjaan kami untuk klien</p>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        
          @foreach($products as $product)
          @if($product->designer != null)
        <div class="col">
            <div class="card">
              <img
                src="{{asset('images/'.$product->image)}}"
                class="card-img"
                alt=""
              />
            </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
@endsection