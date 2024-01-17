<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Estas son mis bebidas";
/*
        $bebidas = [
            ["Cerveza",2.99, "alcohol"],
            ["Vino",4.00, "alcohol"],
            ["Copa",5.99, "alcohol"]
        ];
*/

        $bebidas = Bebida::all();
    
        return view('bebidas/index',
        ['mensaje' => $mensaje, 'bebidas' => $bebidas]);

      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bebidas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $plato = new Bebida;
            $plato -> nombre = $request -> input('nombre');
            $plato -> precio = $request -> input('precio');
            $plato -> tipo = $request -> input('tipo');
            $plato -> save();
    
    
            return redirect('bebidas');
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bebida = Bebida::find($id);
        return view('bebidas/show', ['bebida'=>$bebida]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bebida = Bebida::find($id);
        return view('bebidas/edit', ['bebida'=>$bebida]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bebida = Bebida::find($id);

        $bebida->nombre = $request->input('nombre');
        $bebida->precio = $request->input('precio');
        $bebida->tipo = $request->input('tipo');
        $bebida->save();
        return redirect('bebidas');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
