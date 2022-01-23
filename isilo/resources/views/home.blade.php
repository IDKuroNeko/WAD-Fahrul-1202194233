@extends('layouts.app')

@section('content')
<div class="container">
  @if($message = Session::get('success'))
  <div class="alert alert-success" role="alert" data-mdb-color="success">
    {{$message}}
  </div>
  @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div
  id="carouselExampleCrossfade"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCrossfade"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="http://www.buringprint.com/uploads/promos/thumb__948x38098d52-whatsapp-image-2018-11-29-at-09.41.19-(1).jpeg"
        class="d-block w-100"
        alt="Wild Landscape"
      />
    </div>
    <div class="carousel-item">
      <img
        src="https://blog.deprintz.com/wp-content/uploads/2019/06/WhatsApp-Image-2019-06-18-at-09.58.56.jpeg"
        class="d-block w-100"
        alt="Camera"
      />
    </div>
    <div class="carousel-item">
      <img
        src="https://jasalogo.id/wp-content/uploads/2020/04/jasa-desain-corel-draw.png"
        class="d-block w-100"
        alt="Exotic Fruits"
      />
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselExampleCrossfade"
    data-mdb-slide="prev"
  >
  <i class="bi bi-arrow-left"></i>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselExampleCrossfade"
    data-mdb-slide="next"
  >
  <i class="bi bi-arrow-right"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>Latest Product</h3>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($products as $product)
        <div class="col">
          <div class="card">
            <img
              src="{{asset('images/'.$product->image)}}"
              class="card-img-top"
              alt="Skyscrapers"
            />
            <div class="card-body">
            </div>
          </div>
        </div>
        @endforeach
      </div>
</div>
<br>
@endsection
