<?php

namespace App\Http\Controllers;

use App\Models\Puntaje;
use Illuminate\Http\Request;

/**
 * Class PuntajeController
 * @package App\Http\Controllers
 */
class PuntajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntajes = Puntaje::paginate();

        return view('puntaje.index', compact('puntajes'))
            ->with('i', (request()->input('page', 1) - 1) * $puntajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puntaje = new Puntaje();
        return view('puntaje.create', compact('puntaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Puntaje::$rules);

        $puntaje = Puntaje::create($request->all());

        return redirect()->route('puntajes.index')
            ->with('success', 'Puntaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puntaje = Puntaje::find($id);

        return view('puntaje.show', compact('puntaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puntaje = Puntaje::find($id);

        return view('puntaje.edit', compact('puntaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Puntaje $puntaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puntaje $puntaje)
    {
        request()->validate(Puntaje::$rules);

        $puntaje->update($request->all());

        return redirect()->route('puntajes.index')
            ->with('success', 'Puntaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $puntaje = Puntaje::find($id)->delete();

        return redirect()->route('puntajes.index')
            ->with('success', 'Puntaje deleted successfully');
    }
}
