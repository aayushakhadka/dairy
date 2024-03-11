<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $payments = Payment::orderBy('id', 'asc');

        if ($request->query('order')) {
            $payments = $payments->where('order_id', $request->query('order'));
        }



        $payments = $payments->get();

        $orders = Order::all();
        return view('payments.index', compact('payments', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders=Order::all();
        return view('/payments/create',compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Payment::create($request->except('order_id') + [
            'order_id' => Auth::id()
        ]);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $payment = Payment::find($id);
        $orders =Order::all();
        return view('payments.edit', compact('payment','orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect('/payments');
    }
}

