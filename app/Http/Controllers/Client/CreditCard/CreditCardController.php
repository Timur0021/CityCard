<?php

namespace App\Http\Controllers\Client\CreditCard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\CreditCardRequest;
use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $card = CreditCard::all();
        return view('client.credit_card.card', compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.credit_card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreditCardRequest $request)
    {
        $data = $request->validated();
        CreditCard::firstOrCreate($data);
        return redirect()->route('client.card.card');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreditCard $cards)
    {
        $cards->delete();
        return redirect()->route('client.card.card');
    }
}
