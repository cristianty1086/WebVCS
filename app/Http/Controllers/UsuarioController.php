<?php

namespace vcsweb\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use vcsweb\User;
use vcsweb\role;

class UsuarioController extends Controller
{

    /**
     * Show the application camaras ip.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function usuarios()
    {
        $id = Auth::id(); 
        $usuarios = User::all();
        $out = [];
        foreach ($usuarios as $usuario) {
            $role = role::where('id',$usuario->role_id)->first();
            $item = $usuario;
            $item['role'] = $role;
            $out[] = $item;
        }

        return view('admin.paginas.usuarios.index',['usuarios'=>$out]); 
    }

}
