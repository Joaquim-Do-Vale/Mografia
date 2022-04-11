<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\solicitacoes;
use App\Models\temas;
use App\Models\User;

class NotificacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notificacao = DB::select('SELECT * FROM solicitacoes WHERE free_id  = ?');
        $notificacao = DB::table('solicitacoes')
                            ->join('freelancers', 'freelancers.id', '=', 'solicitacoes.free_id')
                            ->join('users', 'users.id', '=', 'freelancers.user_id')
                            ->select('solicitacoes.nome_s', 'solicitacoes.descricao', 'solicitacoes.created_at')
                            ->where('freelancers.user_id', Auth::user()->id)
                            ->get();
        return view('notificacao.not-mostar', compact('notificacao'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $tema = $this->objTemas->find($id);
        $tema = DB::select('select * from temas where id_temas = 1 limit 1');
        return view('temas.show', compact('tema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function relatorio()
    {
        $relatorio = solicitacoes::all();
        $pdf = PDF::loadView("relatorio.app", compact('relatorio'));
        return $pdf->setPaper('a4')->stream('relatorio');
    }
}
