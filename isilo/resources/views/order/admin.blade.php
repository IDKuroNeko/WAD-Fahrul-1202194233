@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead style="width: 100%">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Metode Pesanan</th>
                    <th scope="col">Pengiriman</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Status</th>
                    <th scope="col">Bukti Bayar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders_admin as $order)
                  <tr>
                      <td>#</td>
                      <td>
                        @if(isset($order->product->image))
                        <img src="{{asset('images/'.$order->product->image)}}" alt="" width="100px" height="auto">
                        @endif
                      </td>
                    <td>{{$order->category}}</td>
                    <td>{{$order->method_order}}</td>
                    <td>{{$order->shipping}}</td>
                    <td>{{$order->payment}}</td>
                    <td><span class="badge {{ $order->status == 'Belum Lunas' ? 'bg-primary' :'bg-success'}}">{{$order->status}}</span></td></td>
                    <td>
                      @if(isset($order->order_image))
                        <img src="{{asset('images/'.$order->order_image)}}" alt="" width="100px">
                      @endif
                    </td>
                    <td>
                        <form action="{{route('order.confirmation',$order->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="Lunas">
                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </form>
                       
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection