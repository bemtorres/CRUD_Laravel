<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class MensajeContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mensajes = DB::table('mensaje')->get();
        return view('mensajes.index',compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensajes.create'); 
        // dirigue solo a la vista para crear el mensaje
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // metodo que guar el mensaje
        // return "guardar y redireccionar";

        DB::table('mensaje')->insert([
            "nombre" => $request->input('nombre'),
            "correo" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "telefono" => $request->input('telefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('mensaje.index');
        // return $request->all();
        // return $request->input('nombre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $m = DB::table('mensaje')->where('id',$id)->first();
        return view('mensajes.show', compact('m'));
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
        $m = DB::table('mensaje')->where('id',$id)->first();

        return view('mensajes.edit', compact('m'));
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
        DB::table('mensaje')->where('id',$id)->update([
            "nombre" => $request->input('nombre'),
            "correo" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "telefono" => $request->input('telefono'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('mensaje.index');
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
        DB::table('mensaje')->where('id', $id)->delete();

        return redirect()->route('mensaje.index');
    }
}
