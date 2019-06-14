<?php

namespace vcsweb\Http\Controllers;

use Illuminate\Http\Request;
use vcsweb\CamaraIp;
use vcsweb\MetodoAnalisi;
use vcsweb\Role;
use vcsweb\Ubicacione;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $camaras = CamaraIp::orderBy('id','desc')->get();

        return view('admin.paginas.dashboard.index',['camarasip'=>$camaras]);
    }

    /**
     * Show the application roles.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roles()
    {
        $roles = Role::all();

        return view('admin.paginas.roles.index',['roles'=>$roles]);
    }

    /**
     * Show the application videostream.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function analisis()
    {
        $camaras = CamarasIp::orderBy('idcamara','desc')->get();
        $metodos = MetodoAnalisi::orderBy('nombremetodo','desc')->get();
        return view('admin.paginas.analisis.index',['camarasip'=>$camaras, 'metodos'=>$metodos]);
    }
}
