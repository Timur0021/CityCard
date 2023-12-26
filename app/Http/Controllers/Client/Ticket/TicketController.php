<?php

namespace App\Http\Controllers\Client\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\TiketRequest;
use App\Models\City;
use App\Models\CreditCard;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\Transport;
use App\Models\TypeTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all();
        return view('client.ticket.ticket', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transport = Transport::all();
        $type = TypeTiket::all();
        $city = City::all();
        return view('client.ticket.create', compact('transport', 'type', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TiketRequest $request)
    {
        $data = $request->validated();
        Ticket::create($data);
        return redirect()->route('client.ticket.ticket');
    }


    public function post(Request $request)
    {
        $card = CreditCard::find($request->input('card_number_id ', 1));
        $type = Ticket::find($request->input('ticket_price'));
        $orderAmount = $request->input('amount', $type) / 1;

        DB::transaction(function () use ($card, $orderAmount) {

            Order::create([
                'card_number_id' => $card->id,
                'amount' => $orderAmount,
            ]);
            $card->balance = $card->balance - $orderAmount;
            $card->save();
        });
        return redirect()->route('client.home');
    }
}
