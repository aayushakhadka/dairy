<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        
$orders=Order::all();
return view('orders.index',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/orders/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Order::create($request->all());
        return redirect('/payments/create')->with('success','Order Submitted successfully');

    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order=Order::find($id);
        return view ('orders.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order=Order::find($id);
        $order->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $order=Order::find($id);
       $order->delete();
       return redirect('/orders');
    }

}