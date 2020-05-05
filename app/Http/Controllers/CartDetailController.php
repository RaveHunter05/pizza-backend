<?php

namespace App\Http\Controllers;

use App\Cart_Detail;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cart_Detail::all();
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
        $cartDetail = Cart_Detail::create($request->all());

        return response()->json($cartDetail, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_Detail $cart_Detail)
    {
        return $cart_Detail;
    }

    public function carts_details($cart){
        $carts=Cart_Detail::where('cart_id', $cart)->leftJoin('products', 'cart__details.product_id', '=', 'products.id')->get();

        return response()->json([$carts, 200]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_Detail $cart_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart_Detail $cart_Detail)
    {
        $cart_Detail->update($request->all());

        return response()->json($cart_Detail, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_Detail $cart_Detail)
    {
        //
    }
}
