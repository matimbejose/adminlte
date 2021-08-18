<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudante;
use Auth;

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

    public function store(Request $request) {

        //senas obrigatorias
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'celular' => 'required'
        ]);
        $estudante = Estudante::create([
            'created_by' -> Auth::id(),
            'name' -> $request->name,
            'email'-> $request->email,
            'celular'-> $request->celular

        ]);

        if($estudante) {
            return response()->json(['sucess' => 'Adicionado com suceso']); 
        }

       
    }

}
