<?php

namespace App\Http\Controllers;

use App\Models\Cotiza;
use Illuminate\Http\Request;

/**
 * Class CotizaController
 * @package App\Http\Controllers
 */
class CotizaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $cotizas = Cotiza::paginate();
        
        return view('cotiza.index', compact('cotizas'))
            ->with('i', (request()->input('page', 1) - 1) * $cotizas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cotiza = new Cotiza();
        return view('cotiza.create', compact('cotiza'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'Nombres' => 'required',
            'Correo' => 'required|email',
            'Numero' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',
            'Servicio' => 'required',
            'Terreno' => 'required',
            'Presupuesto' => 'required',
            'Tiempo' => 'required',
            'Mensaje' => 'required',
        ]);
        
        request()->validate(Cotiza::$rules);

        $cotiza = Cotiza::create($request->all());

        return redirect()->route('cotizas.create')
            ->with('success', 'Cotiza created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotiza = Cotiza::find($id);

        return view('cotiza.show', compact('cotiza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotiza = Cotiza::find($id);

        return view('cotiza.edit', compact('cotiza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cotiza $cotiza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotiza $cotiza)
    {
        request()->validate(Cotiza::$rules);

        $cotiza->update($request->all());

        return redirect()->route('cotizas.index')
            ->with('success', 'Cotiza updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cotiza = Cotiza::find($id)->delete();

        return redirect()->route('cotizas.index')
            ->with('success', 'Cotiza deleted successfully');
    }
}
