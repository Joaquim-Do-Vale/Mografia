<?php

namespace App\Http\Controllers;

use App\Models\freelancers;
use App\Models\solicitacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FreelancersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $free = DB::table('freelancers')->join('users', 'users.id', '=', 'freelancers.user_id')->get();
        return view('freelancer.free-mostrar', compact('free'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freelancer.free-criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(freelancers::where('nome', $request->nome))

            freelancers::create([
                "especialidade" => $request->nome,
                "user_id" => Auth::user()->id
            ]);

            return redirect()
                            ->route('freelancer.free-mostrar')
                            ->with('success', 'Freelancer inserido com sucesso!');
        // Redireciona de volta com uma mensagem de erro
        return redirect()
        ->route('freelancer.free-mostrar')
        ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function show(freelancers $freelancers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function edit(freelancers $freelancers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, freelancers $freelancers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function destroy(freelancers $freelancers)
    {
        //
    }
}
