<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudante;
use auth;

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

    public function edit($id) {
        return view('Estudante.edit')->with('estudante', Estudante::find($id));
    }

    public function store(Request $request) {

        //senas obrigatorias
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required',
            'celular' => 'required'
        ]);

        $estudante = Estudante::create([
            'created_by' => auth::id(),
            'name' => $request->name,
            'email'=> $request->email,
            'celular' => $request->celular

        ]);

        if($estudante) {
            return response()->json(['sucess' => 'Adicionado com suceso']); 
        }

       
    }

    public function destroy($id) {
        //estamos a encotara o file e  estamos a evocar a funcao delete
        $estudante = Estudante::find($id)->delete();

        if($estudante) {
            return response()->json(['sucess'=>'Removido com sucesso']);
        }
    }


}
