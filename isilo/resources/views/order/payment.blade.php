@extends('layouts.app')

@section('content')
<div class="container">
    <div>
    <h1 class="row justify-content-center text-black">Pilih Metode Pembayaran?</h1>
    </div>
    <br>
<form action="{{route('order.payment.update',$order->id)}}">
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" value="BCA" name="payment" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <img src="https://www.freepnglogos.com/uploads/logo-bca-png/bank-central-asia-logo-bank-central-asia-bca-format-cdr-png-gudril-1.png" alt="" width="200px">
              </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" value="BRI" name="payment" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <img src="https://assets.pikiran-rakyat.com/crop/0x195:837x748/x/photo/2020/08/31/1352129040.jpg" alt="" width="200px">
              </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" value="mandiri" name="payment" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <img src="https://cdn.worldvectorlogo.com/logos/bank-mandiri.svg" alt="" width="200px">
              </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" value="BNI" name="payment" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/BNI-512.png" alt="" width="200px">
              </div>
        </div>
    </div>
    <p class="text-center">
        Transfer pembayaran ke nomor virtual account yang diberikan dan pembayaran akan terkonfirmasi secara otomatis
    </p>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary ">lanjut Pembayaran</button>
    </div>
</form>
  
    
   
      
</div>
@endsection