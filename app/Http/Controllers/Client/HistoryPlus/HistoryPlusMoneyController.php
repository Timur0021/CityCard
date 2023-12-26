<?php

namespace App\Http\Controllers\Client\HistoryPlus;

use App\Http\Controllers\Controller;
use App\Models\AddMoney;
use Illuminate\Http\Request;

class HistoryPlusMoneyController extends Controller
{
    public function index()
    {
        $addMoneyHistory = AddMoney::all();
        return view('client.history_plus_money.history', compact('addMoneyHistory'));
    }
}
