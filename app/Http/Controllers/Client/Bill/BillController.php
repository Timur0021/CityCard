<?php

namespace App\Http\Controllers\Client\Bill;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderHistory = Order::all();
        return view('client.bill.bill', compact('orderHistory'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $bill)
    {
        return view('client.bill.show', compact('bill'));
    }
}
