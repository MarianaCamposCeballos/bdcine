<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descuentos=Descuento::all();
        return view("descuentos.index",compact("descuentos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descuentos = new Descuento();
        return view("descuentos.create",compact('descuentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Descuento::create([
          // "desc_desc"=>$request->desc_desc
        //]);
        $descuentos = Descuento::create($request->all());
        return redirect()->route("descuentos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function show(Descuento $descuento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $descuentos = Descuento::find($id);
        return view('descuentos.edit',compact('descuentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'desc_desc' => 'required',
            'porcentaje' => 'required'
        ]);
        $descuentos = Descuento::find($id);
        $descuentos-> desc_desc = $request->input('desc_desc');
        $descuentos-> porcentaje = $request->input('porcentaje');
        $descuentos->save();

        return redirect()->route('ejes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$descuento->delete();
        DB::table("descuentos")->where('id_descuento',$id)->delete();
        return redirect()->route('descuentos.index');
    }
}
