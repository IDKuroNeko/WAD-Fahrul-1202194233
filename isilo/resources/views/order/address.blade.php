@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-title"><h3>Form Alamat</h3> </div>
            <br>
            <form action="{{route('order.address.update', $order->id)}}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example1" name="first_name" class="form-control" required/>
                      <label class="form-label" for="form6Example1">Nama Depan</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example2" name="last_name" class="form-control" required/>
                      <label class="form-label" for="form6Example2">Nama Belakang</label>
                    </div>
                  </div>
                </div>
              
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form6Example1" name="telp" class="form-control" required/>
                        <label class="form-label" for="form6Example1">No Hp</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form6Example2" name="alt_telp" class="form-control" required/>
                        <label class="form-label" for="form6Example2">No Lainya</label>
                      </div>
                    </div>
                  </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form6Example4" name="address" class="form-control" required/>
                  <label class="form-label" for="form6Example4">Alamat</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form6Example5" name="province" class="form-control" required/>
                  <label class="form-label" for="form6Example5">Provinsi</label>
                </div>
              
                <!-- Number input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form6Example6" name="district" class="form-control" required/>
                  <label class="form-label" for="form6Example6">Kecamatan</label>
                </div>
                <!-- Number input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example6" name="zip" class="form-control" required/>
                    <label class="form-label" for="form6Example6">Kode Pos</label>
                  </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection