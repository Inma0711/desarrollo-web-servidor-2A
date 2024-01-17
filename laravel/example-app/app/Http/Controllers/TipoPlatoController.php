<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPlato;

class TipoPlatoController extends Controller
{
    public function index()
    {
        $tipos_platos = TipoPlato::all();
        return view('tipos_platos/index', [
            'tipos_platos' => $tipos_platos
        ]);
    }
}
