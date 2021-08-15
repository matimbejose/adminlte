<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudante;

class EstudanteController extends Controller
{
    
    public function index() {
       return view('Estudante.index');
    }

    public function showEstudantes() {
        return response()->json(['estudantes'=> Estudante::all()]);
    }

    public function create() {
        return view('Estudante.create');

    }

}
