<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato; // Esto es para poder usar el modelo
use DB;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Estos son mis platos";
        /*
        $platos = [
            ["Tortilla de patatas",4.95,"Racion"],
            ["Chuletillas de cordero",9.95,"Racion"],
            ["Ensaladilla rusa",3.5,"Tapa"]
        ];
        */
        $platos = Plato::all();
            // Lo que enviamos es la clave, lo segundo es el valor
        return view('platos/index',
        ['mensaje' => $mensaje, 'platos' => $platos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('platos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Esto crea un nuevo plato y los valores que nosotros hemos metido
    {
        $plato = new Plato;
        $plato->nombre = $request->input('nombre');
        $plato->precio = $request->input('precio');
        $plato->tipo_plato_id = $request->input('tipo');
        $plato->save();

        return redirect('platos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //Muestra un plato
    {
        $plato = Plato::find($id);
        return view('platos/show', ['plato'=>$plato]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //Enviamos informacion de ese plato y la editamos
    {
        $plato = Plato::find($id);
        return view('platos/edit', ['plato'=>$plato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plato = Plato::find($id);

        $plato->nombre = $request->input('nombre');
        $plato->precio = $request->input('precio');
        $plato->tipo_plato_id = $request->input('tipo');
        $plato->save();

        return redirect('platos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('platos')->where('id',"=",$id)->delete();
        return redirect('platos');
    }
}
