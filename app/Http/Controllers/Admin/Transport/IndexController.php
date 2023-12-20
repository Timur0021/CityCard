<?php

namespace App\Http\Controllers\Admin\Transport;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transport\TransportCreateRequest;
use App\Http\Requests\Transport\TransportUpdateRequest;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transports = Transport::all();
        return view('admin.transport.transport', compact('transports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransportCreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image/transport', $data['image']);
        Transport::firstOrCreate($data);
        return redirect()->route('home.trantsport.transport');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transport $transport)
    {
        return view('admin.transport.show', compact('transport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transport $transport)
    {
        return view('admin.transport.edit', compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransportUpdateRequest $request, Transport $transport)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image/transport', $data['image']);
        $transport->update($data);
        return redirect()->route('home.trantsport.transport.show', compact('transport'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transport $transport)
    {
        $transport->delete();
        return redirect()->route('home.trantsport.transport');
    }
}
