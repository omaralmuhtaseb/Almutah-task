<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    /* * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $order = Order::create(['user_id' =>auth()->id()]);
        return OrderProduct::create(array_merge($request->validated(),['order_id'=>$order->id])) ?
            response()->json(['message' => 'success'], 201) : response()->json(['message' => 'failed'], 400);
    }

}
