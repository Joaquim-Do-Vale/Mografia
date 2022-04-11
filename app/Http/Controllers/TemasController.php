<?php

namespace App\Http\Controllers;

use App\Models\temas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = DB::table('temas')->join('users', 'users.id', '=', 'temas.user_id')->where('temas.user_id', Auth::user()->id)->get();
        return view('temas.show', compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temas.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(temas::where('tema_d', $request->nome))
            // Redireciona de volta com uma mensagem de erro
        temas::create([
            "tema_d" => $request->tema_d,
            "user_id" => Auth::user()->id
        ]);
            return redirect()
                        ->route('temas.show')
                        ->with('success', 'Tema inserido com sucesso!');

            return redirect()
                    ->route('temas.show')
                    ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function show(temas $temas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function edit(temas $temas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, temas $temas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function destroy(temas $temas)
    {
        //
    }
}
