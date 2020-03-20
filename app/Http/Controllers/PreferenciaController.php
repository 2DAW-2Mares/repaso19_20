<?php

namespace App\Http\Controllers;

use App\Preferencia;
use App\Ciclo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misPreferencias = Auth::user()->preferencias;
        $misModulosCodigo = $misPreferencias->pluck('modulo_codigo');
        return view('preferencias.index')
            ->with([
                'preferencias' => $misPreferencias,
                'ciclos' => Ciclo::all(),
                'misModulosCodigo' => $misModulosCodigo->all(),
                'preferenciasPorModulo' => Preferencia::porModulo(),
            ]);
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
        $preferencia = new Preferencia();
        $preferencia->user_id = Auth::id();
        $preferencia->modulo_codigo = $request->input('modulo_codigo');
        $preferencia->save();
        return redirect('/preferencias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function show(Preferencia $preferencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Preferencia $preferencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preferencia $preferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preferencia  $preferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preferencia $preferencia)
    {
        if($preferencia->user_id == Auth::id()) {
            $preferencia->delete();
        }
        return redirect('/preferencias');
    }
}
