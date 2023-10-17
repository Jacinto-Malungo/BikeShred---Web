<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aluguels = Aluguel::all();

        return view('admin.alugueres.index', ['aluguels' => $aluguels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluguel $aluguel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluguel $aluguel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluguel $aluguel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluguel $aluguel)
    {
        //
    }
}
