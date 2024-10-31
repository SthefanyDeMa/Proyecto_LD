<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        // Obtener los planes desde la base de datos
        $planes = Plan::all();

        // Pasar los planes a la vista
        return view('planes.index', compact('planes'));
    }
}
