@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Metode Pesanan</th>
                    <th scope="col">Pengiriman</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Bukti Bayar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
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
                    <td>{{$order->price}}</td>
                    <td>
                      <span class="badge {{ $order->status == 'Belum Lunas' ? 'bg-primary' :'bg-success'}}">{{$order->status}}</span></td>
                      <td>
                        @if(isset($order->order_image))
                            <img src="{{asset('images/'.$order->order_image)}}" alt="" width="100px">
                        @endif
                    </td>
                    <td>
                        <a href="{{route('order.show', $order->id)}}" class="btn btn-primary">Bayar</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection