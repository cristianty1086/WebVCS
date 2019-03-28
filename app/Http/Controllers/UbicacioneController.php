<?php

namespace vcsweb\Http\Controllers;

use Illuminate\Http\Request;

class UbicacioneController extends Controller
{
    // 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ci = new UbicacioneController();
        
        $ci->username = $request->direccion;
        $ci->passwd = $request->referencia;
        $ci->modelo = $request->escena; 
        $ci->save();
                 
        //return view('paginas.lista_camaras.index',['camaras'=>$camaras]);
    }


}
