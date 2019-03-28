<?php

namespace vcsweb\Http\Controllers;

use Illuminate\Http\Request;
use vcsweb\CamarasIp;
use vcsweb\Ubicacione;

class CamarasIpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camaras = CamarasIp::all();                
        return view('paginas.lista_camaras.index',['camaras'=>$camaras]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paginas.lista_camaras.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ci = new CamarasIpController();
        
        $ci->username = $request->username;
        $ci->passwd = $request->passwd;
        $ci->modelo = $request->modelo;
        $ci->url = $request->url;
        $ci->idubicacion = $request->idubicacion;
        $ci->estado =1;     
        $ci->save();
        
        $camaras = CamarasIp::all();           
        return view('paginas.lista_camaras.index',['camaras'=>$camaras]);
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
        return view('paginas.lista_camaras.show',['camara'=>CamarasIp::findOrFail($id)]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('paginas.lista_camaras.show',['camara'=>CamarasIp::findOrFail($id)]);
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
        $ci = CamarasIpController::findOrFail($id);
        
        $ci->username = $request->username;
        $ci->passwd = $request->passwd;
        $ci->modelo = $request->modelo;
        $ci->url = $request->url;
        $ci->idubicacion = $request->idubicacion;
        $ci->estado = $request->estado;     
        $ci->update();
        
        $camaras = CamarasIp::all();
        return view('paginas.lista_camaras.index',['camaras'=>$camaras]);
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
        $ci = CamarasIpController::findOrFail($id);
        $ci->estado = 0;
        $ci->update();
        
        $camaras = CamarasIp::all();
        return view('paginas.lista_camaras.index',['camaras'=>$camaras]);
    }
    
    /**
     * Show the application camaras ip.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function camaras_ip()
    {
        $camaras = CamarasIp::orderBy('idcamara','desc')->get();
        $out = [];
        foreach ($camaras as $camara) {
            $ubicacion = Ubicacione::where('idubicacion',$camara->idubicacion)->first();
            $item = $camara;
            $item['ubicacion'] = $ubicacion;
            $out[] = $item;
        }
 
        return view('admin.paginas.lista_camaras.index',['camarasip'=>$out]);
    }

    /**
     * Show the application camaras ip.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nueva_camaras_ip()
    {
        $camaras = CamarasIp::orderBy('idcamara','desc')->get();
        $out = [];
        foreach ($camaras as $camara) {
            $ubicacion = Ubicacione::where('idubicacion',$camara->idubicacion)->first();
            $item = $camara;
            $item['ubicacion'] = $ubicacion;
            $out[] = $item;
        }
 
        return view('admin.paginas.lista_camaras.create',['camarasip'=>$out]);
    }


    /**
     * Show the application camaras ip.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function post_camara($request)
    {
        $ci = new UbicacioneController();
        
        $ci->username = $request->direccion;
        $ci->passwd = $request->referencia;
        $ci->modelo = $request->escena; 
        $ci->save();

        $nc = new CamarasIpController();
        
        $nc->username = $request->username;
        $nc->passwd = $request->passwd;
        $nc->modelo = $request->modelo;
        $nc->url = $request->url;
        $nc->idubicacion = $ci->idubicacion;
        $nc->estado =1;     
        $nc->save();
         
        return view('admin.paginas.lista_camaras.create',['camarasip'=>$out]);
    }

}
