<?php

namespace App\Http\Controllers\Admin\TypeTicket;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeTicket\TypeTicketCreateRequest;
use App\Http\Requests\TypeTicket\TypeTicketUpdateRequest;
use App\Models\TypeTiket;
use Illuminate\Http\Request;

class TypeTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeTicket = TypeTiket::all();
        return view('admin.type_ticket.type', compact('typeTicket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type_ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeTicketCreateRequest $request)
    {
        $data = $request->validated();
        TypeTiket::firstOrCreate($data);
        return redirect()->route('home.type.type');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeTiket $type)
    {
        return view('admin.type_ticket.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeTiket $type)
    {
        return view('admin.type_ticket.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeTicketUpdateRequest $request, TypeTiket $type)
    {
        $data = $request->validated();
        $type->update($data);
        return redirect()->route('home.type.type.show', compact('type'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeTiket $type)
    {
        $type->delete();
        return redirect()->route('home.type.type');
    }
}
