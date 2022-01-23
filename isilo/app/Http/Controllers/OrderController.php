<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Address;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('order.index',compact('orders'));
    }
    public function admin_index()
    {
        $orders_admin = Order::all();
        return view('order.admin',compact('orders_admin'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->category = $request->category;
        $order->save();
        $id = $order->id;

        return redirect()->route('order.method',$id)->with('id', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.show',compact('order'));
    }

    public function show_update(Request $request,$id)
    {
        $order = Order::find($id);
        $image = $request->file('order_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $order->order_image = $imageName;
        $order->save();
        return redirect()->route('order.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->method_order = $request->method_order;
        $order->save();
        $id = $order->id;

        $products = Product::all();

        if($request->method_order == 'sendiri'){
        return redirect()->route('product.create.order',$id)->with('id', $id);
        }else{
        return view('order.service',compact('order','products'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function service_update(Request $request,$id)
    {
        $order = Order::find($id);
        $order->product_id = $request->product_id;
        $order->save();
        
        $product = Product::find($request->product_id);
        $product->order = $product->order + 1;
        $product->save();
        $id = $order->id;
        return redirect()->route('order.shipping',$id)->with('id', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shipping(Request $request, $id)
    {
        $order = Order::find($id);
        $order->shipping = $request->shipping;
        $order->save();
        $id = $order->id;

        if($request->shipping == 'sendiri'){
            return redirect()->route('order.checkout',$id);
        }else{
            return redirect()->route('order.address',$id);
        }

        
    }

    public function checkout($id)
    {
        $order = Order::find($id);
        return view('order.checkout', compact('order'));
    }

    public function payment($id)
    {
        $order = Order::find($id);
        return view('order.payment', compact('order'));
    }
    public function payment_update(Request $request,$id)
    {
        $order = Order::find($id);
        $order->payment = $request->payment;
        $order->save();
        return redirect()->route('order.index');
    }

    public function confirmation(Request $request,$id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('order.admin');
    }

    public function address($id)
    {
        $order = Order::find($id);
        return view('order.address', compact('order'));
    }

    public function address_update(Request $request,$id)
    {
        $address = new Address();
        $address->user_id = $request->user_id;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->telp = $request->telp;
        $address->alt_telp = $request->alt_telp;
        $address->address = $request->address;
        $address->province = $request->province;
        $address->district = $request->district;
        $address->zip = $request->zip;
        $address->save();
        return redirect()->route('order.checkout',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
