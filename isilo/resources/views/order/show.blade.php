@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">
        Upload Bukti Bayar
    </h1>
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('order.show.update',$order->id) }}" method="post" enctype="multipart/form-data">  
          @csrf 
            @method('PUT')
          <div class="mb-4">
              <label class="form-label" for="customFile">Upload Gambar</label>
              <input type="file" class="form-control" id="image" name="order_image" required/>
            </div>
  
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" value="{{$order->category}}" name="size" disabled />
            <label class="form-label" for="form6Example3">kategori</label>
          </div>
        
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" value="{{$order->price}}" name="material" disabled />
            <label class="form-label" for="form6Example4">Harga</label>
          </div>
  
          <!-- Text input -->
          <div class="form-outline mb-4">
              <input type="text" id="form6Example4" class="form-control" value="{{$order->payment}}" name="hole_number" disabled />
              <label class="form-label" for="form6Example4">Pembayaran</label>
            </div>
        
          <!-- Submit button -->
          <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-block mb-4 ">Submit</button>
          </div>
          
        </form>
      </div>
      <div class="col-md-6">
        <img src="https://ojk.go.id/Style%20Library/ojk/img/no-preview-available.png" id="preview-image" width="500px" />
      </div>
  </div>

    


    

</div>

<script type="text/javascript">
  $('#image').change(function(){
             
             let reader = new FileReader();
             reader.onload = (e) => { 
               $('#preview-image').attr('src', e.target.result); 
             }
             reader.readAsDataURL(this.files[0]); 
           
            });
  </script>
@endsection