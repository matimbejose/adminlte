<?php

namespace App\Http\Controllers;
use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudantesController extends Controller
{
    public function index() {
        $estudante = Estudante::get();
        return view('estudantes.list', ['estudantes'=> '$estudantes']);
    }
}
