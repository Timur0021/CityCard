<?php

namespace App\Http\Controllers\Client\CreditCard\AddMoney;

use App\Http\Controllers\Controller;
use App\Models\AddMoney;
use App\Models\CreditCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = CreditCard::all();
        return view('client.credit_card.add_money.money', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $number = CreditCard::find($request->input('card_number_id', 1));
        $balanceAmount = $request->input('amount') * 1;

        DB::transaction(function () use ($number, $balanceAmount, $request) {
            AddMoney::create([
                'card_number_id' => $number->id,
                'amount' => $balanceAmount,
                'description' => $request->input('description')
            ]);
            $number->balance = $number->balance + $balanceAmount;
            $number->save();
        });
        return redirect()->route('client.card.card');
    }
}
