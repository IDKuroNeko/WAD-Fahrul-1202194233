@extends('layouts.app')

@section('content')
<div class="container">
    <div>
    <h1 class="row justify-content-center text-black">Pilih Metode Pesanan?</h1>
    </div>
    <div class="row">
        <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
            <div class="col-md-4">
              <div class="card">
                <img
                  src="https://image.freepik.com/free-vector/designer-concept-illustration_114360-676.jpg"
                  class="card-img-top"
                  alt="Hollywood Sign on The Hill"
                />
                <div class="card-body">
                  <h5 class="card-title">Desain Sendiri</h5>
                  <p class="card-text">
                    Sudah memiliki desain
siap cetak
                  </p>
                  <form action="{{route('order.update',session()->get('id'))}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="method_order" value="sendiri">
                    <button class="btn btn-primary">Pilih</button>
                 </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img
                  src="https://image.freepik.com/free-vector/designer-girl-concept-illustration_114360-4455.jpg"
                  class="card-img-top"
                  alt="Palm Springs Road"
                />
                <div class="card-body">
                  <h5 class="card-title">Jasa Desainer</h5>
                  <p class="card-text">
                    Menggunakan jasa desainer
dari ISILO
                  </p>
                  <form action="{{route('order.update',session()->get('id'))}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="method_order" value="jasa">
                    <button class="btn btn-primary">Pilih</button>
                 </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection