@extends('layouts.app')

@section('content')
<div class="container">
    <h3>List Product</h3>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img
              src="https://i.ytimg.com/vi/v6zo5fK0mFs/maxresdefault.jpg"
              class="card-img-top"
              alt="Palm Springs Road"
            />
            <div class="card-body">
              <h5 class="card-title">Banner</h5>
              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="category" value="Banner">
                <button class="btn btn-primary">Pesan Sekarang</button>
             </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img
              src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2020/05/brosur.jpg"
              class="card-img-top"
              alt="Los Angeles Skyscrapers"
            />
            <div class="card-body">
              <h5 class="card-title">Brosur</h5>
              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="category" value="Brosur">
                <button class="btn btn-primary">Pesan Sekarang</button>
             </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img
              src="https://makintahu.com/wp-content/uploads/2021/09/Isi-Kartu-Nama-Desain-Bisnis-Profesional-Makintahu.com_.jpg"
              class="card-img-top"
              alt="Skyscrapers"
            />
            <div class="card-body">
              <h5 class="card-title">Kartu Nama</h5>
              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="category" value="Kartu Nama">
                <button class="btn btn-primary">Pesan Sekarang</button>
             </form>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img
              src="https://www.islampos.com/wp-content/uploads/2018/03/kartu-undangan-.jpg"
              class="card-img-top"
              alt="Palm Springs Road"
            />
            <div class="card-body">
              <h5 class="card-title">Kartu Undangan</h5>
              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="category" value="Kartu Undangan">
                <button class="btn btn-primary">Pesan Sekarang</button>
             </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img
              src="https://percetakandimensi.co.id/wp-content/uploads/2020/04/merancang-desain-dan-layout-template-halaman-buku-tahunan-sekolah-1.jpg"
              class="card-img-top"
              alt="Los Angeles Skyscrapers"
            />
            <div class="card-body">
              <h5 class="card-title">Buku Tahunan</h5>
              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="category" value="Buku Tahunan">
                <button class="btn btn-primary">Pesan Sekarang</button>
             </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMpiy3sNUwkJZ-m3GCTWH73CKhymTvN_UVHg&usqp=CAU"
              class="card-img-top"
              alt="Skyscrapers"
            />
            <div class="card-body">
              <h5 class="card-title">Poster</h5>
              <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="category" value="Poster">
                <button class="btn btn-primary">Pesan Sekarang</button>
             </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection