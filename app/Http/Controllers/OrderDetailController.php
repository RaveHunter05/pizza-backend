<?php

namespace App\Http\Controllers;

use App\Order_Detail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order_Detail::all();
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
        $order_Detail = Order_Detail::create($request->all());

        return response()->json($order_Detail, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Order_Detail $order_Detail)
    {
        return $order_Detail;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_Detail $order_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_Detail $order_Detail)
    {
        $order_Detail->update($request->all());

        return response()->json($order_Detail, 200);
    }

    public function order_details($order){
        $orders=Order_Detail::where('order_id', $order)
        ->leftJoin('products', 'order__details.product_id', '=', 'products.id')
        ->get();

        return response()->json([$orders, 200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_Detail $order_Detail)
    {
        //
    }
}
