<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::get();
        return view('admin.content.order.index', ["orders"=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Order();

        $item->save();
        notify()->success('A new order has been created.');
        return redirect()->route("admin.order");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Order::find($id);
        return view("admin.content.order.edit", ["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Order::find($id);
        $item->delete();
        return redirect()->route("admin.order");
    }
}
