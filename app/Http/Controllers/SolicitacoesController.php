<?php

namespace App\Http\Controllers;

use App\Models\solicitacoes;
use App\Models\freelancers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SolicitacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitacao = DB::table('solicitacoes')->join('freelancers', 'freelancers.id', '=', 'solicitacoes.free_id')
                                                ->join('users', 'users.id', '=', 'freelancers.user_id')
                                                ->where('solicitacoes.nome_s', Auth::user()->name)
                                                ->get();

        return view('solicitacao.sol-mostrar', compact('solicitacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mostrar = DB::table('freelancers')->join('users', 'users.id', '=', 'freelancers.user_id')
                                           ->where('user_id', '<>', Auth::user()->id)
                                           ->select('freelancers.id', 'freelancers.especialidade', 'users.name')
                                            ->get();
        return view('solicitacao.sol-criar', compact('mostrar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('INSERT INTO solicitacoes(free_id, nome_s, descricao, created_at, updated_at) VALUES (?,?,?,CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)',[$request->free_id, $request->nome_s, $request->descricao]);
        // if(solicitacoes::where('nome_s', $request->nome_s))
        // // Redireciona de volta com uma mensagem de erro
        //     solicitacoes::create([
        //         "free_id" => $request->free_id,
        //         "nome_s" => $request->nome_s,
        //         "descricao" => $request->descricao
        //     ]);

        return redirect()
                        ->route('solicitacao.sol-mostrar')
                        ->with('success', 'Solicitação enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solicitacoes  $solicitacoes
     * @return \Illuminate\Http\Response
     */
    public function show(solicitacoes $solicitacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solicitacoes  $solicitacoes
     * @return \Illuminate\Http\Response
     */
    public function edit(solicitacoes $solicitacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solicitacoes  $solicitacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solicitacoes $solicitacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solicitacoes  $solicitacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitacoes $solicitacoes)
    {
        //
    }
}
