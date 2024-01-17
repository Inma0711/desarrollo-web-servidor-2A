<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Carta";

        $platos = [
            ["Tortilla de patatas",4.95,"Racion"],
            ["Chuletillas de cordero",9.95,"Racion"],
            ["Ensaladilla rusa",3.5,"Tapa"]
        ];

        $bebidas = [
            ["Cerveza",2.99, "alcohol"],
            ["Vino",4.00, "alcohol"],
            ["Copa",5.99, "alcohol"]
        ];

        return view('carta',
        ['mensaje' => $mensaje, 'platos' => $platos ,'bebidas' => $bebidas]);

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
