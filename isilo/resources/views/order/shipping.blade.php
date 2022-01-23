@extends('layouts.app')

@section('content')
<div class="container">
    <div>
    <h1 class="row justify-content-center text-black">Pilih Metode Pengiriman?</h1>
    </div>
    <div class="row">
        <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-4">
              <div class="card">
                <img
                  src="https://img.freepik.com/free-vector/isometric-post-terminal-queue-composition-with-outdoor-view-people-standing-line-automated-locker_1284-62310.jpg?size=338&ext=jpg"
                  class="card-img-top"
                  alt="Hollywood Sign on The Hill"
                />
                <div class="card-body">
                  <h5 class="card-title">Ambil Sendiri</h5>
                  <p class="card-text">
                    Ambil sendiri ke toko jika
pesanan sudah selesai
                  </p>
                  <form action="{{route('order.shipping.update',session()->get('id'))}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="shipping" value="sendiri">
                    <button class="btn btn-primary">Pilih</button>
                 </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img
                  src="https://img.freepik.com/free-vector/illustrated-delivery-service-with-masks-concept-pack_23-2148502130.jpg?size=338&ext=jpg"
                  class="card-img-top"
                  alt="Palm Springs Road"
                />
                <div class="card-body">
                  <h5 class="card-title">Jasa Pengiriman</h5>
                  <p class="card-text">
                    Menggunakan jasa 
pengiriman komersial
                  </p>
                  <form action="{{route('order.shipping.update',session()->get('id'))}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="shipping" value="jasa">
                    <button class="btn btn-primary">Pilih</button>
                 </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection