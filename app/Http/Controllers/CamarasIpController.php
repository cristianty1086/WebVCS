<?php

namespace vcsweb\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use vcsweb\CamaraIp;
use vcsweb\Ubicacione; 
use Illuminate\Support\Facades\Auth;

class CamarasIpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camaras = CamaraIp::all();                
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($cameraId)
    {
        //
        $camara = CamaraIp::where("id", $cameraId)->first(); 
        $ubicacion = Ubicacione::where("id", $camara->ubicacion_id)->first();  
        return view('admin.paginas.lista_camaras.edit',['camaraip'=>$camara, 'ubicacion'=>$ubicacion]);
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
        
        $camaras = CamaraIp::all();           
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
        return view('paginas.lista_camaras.show',['camara'=>CamaraIp::findOrFail($id)]);
    }
     
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ci = CamaraIp::findOrFail($request->idc);
        
        $ci->username = $request->username;
        $ci->passwd = $request->passwd;
        $ci->modelo = $request->modelo;
        $ci->url = $request->url;
        $ci->ubicacion_id = $request->idubicacion;
        $ci->estado = $request->estado;     
        $ci->update();


        $ubicacion = Ubicacione::findOrFail($request->idc);
        $ubicacion->direccion = $request->direccion;
        $ubicacion->referencia = $request->referencia;
        $ubicacion->escena = $request->escena; 
        $ubicacion->update();
        
        //$camaras = CamaraIp::all();    
        return redirect('/camaras_ip');            
        //return view('admin.paginas.lista_camaras.index',['camarasip'=>$camaras]);
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
        
        $camaras = CamaraIp::all();
        return view('paginas.lista_camaras.index',['camaras'=>$camaras]);
    }
    
    /**
     * Show the application camaras ip.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function camaras_ip()
    {
        $id = Auth::id();

        $camaras = CamaraIp::where("user_id", $id)->get(); 
        $out = [];
        foreach ($camaras as $camara) {
            $ubicacion = Ubicacione::where('id',$camara->ubicacion_id)->first();
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
        $id = Auth::id();

        $camaras = CamaraIp::where("user_id", $id);
        $out = [];
        foreach ($camaras as $camara) {
            $ubicacion = Ubicacione::where('id',$camara->idubicacion)->first();
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
    public function add_camara(Request $request)
    { 
        $id = Auth::id();
        $ci = new Ubicacione();
        $ci->direccion = $request->direccion;
        $ci->referencia = $request->referencia;
        $ci->escena = $request->escena;
        $ci->save(); 

        $nc = new CamaraIp();
        $nc->user_id = $id;
        $nc->username = $request->username;
        $nc->passwd = $request->password;
        $nc->modelo = $request->modelo;
        $nc->url = $request->url;
        $nc->ubicacion_id = $ci->id;
        $nc->estado =1;     
        $nc->save();

        //return view('admin.paginas.lista_camaras.index',['camarasip'=>$nc]);
        return redirect('/camaras_ip');    
    }

 
}
