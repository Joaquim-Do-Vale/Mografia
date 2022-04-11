<?php

namespace App\Http\Controllers;

use App\Models\titulos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TitulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulos = DB::table('temas')
                        ->join('users', 'users.id', '=', 'temas.user_id')
                        ->join('titulos', 'titulos.user_id', '=', 'users.id')
                        ->where('temas.user_id', Auth::user()->id)
                        ->get();

        return view('titulos.titulos-mostrar', compact('titulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projeto = DB::table('projectos')
                        ->join('titulos', 'projectos.id', '=', 'titulos.proj_id')
                        ->join('temas', 'temas.id', '=', 'projectos.tem_id')
                        // ->where('temas.user_id', Auth::user()->id)
                        ->get();
                        dd($projeto);
        $temas = DB::table('temas')->join('users', 'users.id', '=', 'temas.user_id')->where('temas.user_id', Auth::user()->id)->get();
        return view('titulos.titulos-criar', compact('temas', 'projeto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(titulos::where('titulo_d', $request->nome))
            // Redireciona de volta com uma mensagem de erro
            //Ele não pega o valor da chave estrangeira do proj_id
        titulos::create([
            "proj_id" => $request->proj_id,
            "user_id" => $request->user_id,
            "titulo_d" => $request->titulo_d
        ]);
            return redirect()
                        ->route('titulos.titulos-mostrar')
                        ->with('success', 'Tema inserido com sucesso!');

            return redirect()
                    ->route('titulos.titulos-mostrar')
                    ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function show(titulos $titulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function edit(titulos $titulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, titulos $titulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function destroy(titulos $titulos)
    {
        //
    }
}
