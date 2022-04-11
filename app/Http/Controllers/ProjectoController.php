<?php

namespace App\Http\Controllers;

use App\Models\projecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projecto = DB::table('projectos')
                            ->join('users', 'users.id', '=', 'projectos.user_id')
                            ->join('temas', 'projectos.tem_id', '=', 'temas.id')
                            ->where('temas.user_id', Auth::user()->id)
                            ->get();
        // dd($projecto);
        return view('projetos.projeto-mostrar', compact('projecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('solicitacoes')->join('freelancers', 'freelancers.id', '=', 'solicitacoes.free_id')->where('solicitacoes.free_id', Auth::user()->id)->get();
        $temas = DB::table('temas')->join('projectos', 'projectos.tem_id', '=', 'temas.id')->select('')->where('temas.user_id', Auth::user()->id)->get();
        // $tipo = DB::table('projetos')->get();
        // dd($user, $temas);
        return view('projetos.projeto-criar', compact('user', 'temas'));
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
     * @param  \App\Models\projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function show(projecto $projecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function edit(projecto $projecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projecto $projecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(projecto $projecto)
    {
        //
    }
}
