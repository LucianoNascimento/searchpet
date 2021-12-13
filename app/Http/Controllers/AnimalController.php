<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->file('imagem_animal')->getClientOriginalName();
        $extensao = $request->file('imagem_animal')->getClientOriginalExtension();

        try {
            $animal = new Animal();
            $animal->usuario_id = 1;
            $animal->nome_animal = $request->input('nome_animal');
            $animal->sexo_animal = $request->sexo_animal;
            $animal->cor_do_animal = $request->input('cor_do_animal');
            $animal->raca_animal = $request->input('raca_animal');
            $animal->porte_animal = $request->input('porte_animal');
            $animal->imagem_animal = $nome;
            $request->file('imagem_animal')->storeAs('animais',$nome);
            $animal->save();
            Log::info("Animal $animal->nome_animal foi cadastrado por com sucesso");
            return response()->json('Cadastro realizado com sucesso',200);
        } catch (Throwable $e) {

            $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
