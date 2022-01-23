@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">
        Upload Desain Kamu !
    </h1>
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">  
          @csrf       
          <input type="hidden" name="order_id" value="{{session()->get('id')}}">
          <div class="mb-4">
              <label class="form-label" for="customFile">Upload Gambar</label>
              <input type="file" class="form-control" id="image" name="image" required/>
            </div>
            
            <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="no" required />
            <label class="form-label" for="form6Example3">No whatsapp</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="size" required />
            <label class="form-label" for="form6Example3">Ukuran</label>
          </div>
        
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="material" required />
            <label class="form-label" for="form6Example4">Jenis Bahan</label>
          </div>
  
          <!-- Text input -->
          <div class="form-outline mb-4">
              <input type="text" id="form6Example4" class="form-control" name="hole_number" required />
              <label class="form-label" for="form6Example4">Jumlah Lubang</label>
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