<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processos;
use Illuminate\Contracts\Validation\Validator;

class ProcessosController extends Controller
{
    public function index()
    {
    
        return Processos::all();
    }

    public function store(Request $request)
    {   
        $request -> validate([
            'numero' => 'required|max:10|min:10',
            'localAbertura' => 'required',
            'localParado' => 'required',
            'tempoAbertura' => 'required',
            'tempoParado' => 'required',
        ]);

        $processos = Processos::create([
            'numero' => $request -> input('numero'),
            'localAbertura' => $request -> input('localAbertura'),
            'localParado' => $request -> input('localParado'),
            'tempoAbertura' => $request -> input('tempoAbertura'),
            'tempoParado' => $request -> input('tempoParado'),
        ]);
       
        return $processos ;
    }

    public function show(Request $request, Processos $processo)
    {   
        // $request -> input('numero');
        // $processos -> numero = $request;
        // dump($request);
        // return $processos ;
        return $processo;
    }

    public function update(Request $request, Processos $processos)
    {
        $request -> validate([
            'numero' => 'required|max:10|min:10'
        ]);
        
        $processo -> numero = $request -> input ('numero');

        $processo -> save();

        return $processo ;
    }

    public function destroy(Processos $processos)
    {
        
        $processos -> delete() ;
        return response() -> json(['sucess' => true]);
    }
}