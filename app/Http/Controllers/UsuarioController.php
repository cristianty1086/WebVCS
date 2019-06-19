<?php

namespace vcsweb\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use vcsweb\User;
use vcsweb\Role;
use vcsweb\UserRol;

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
            $userRole = UserRol::where('user_id',$usuario->id)->first();
            $role = Role::where('id',$userRole->role_id)->first();
            $item = $usuario;
            $item['role'] = $role;
            $out[] = $item;
        }

        return view('admin.paginas.usuarios.index',['usuarios'=>$out]); 
    }

    public function store(Request $request)
    {
        $user = new User();
        
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email; 
        $user->save();
             
        UserRol::create([
            'user_id' => $user->id,
            'role_id' => $request['rol'],
        ]);

        return redirect('/usuarios'); 
    }

    public function nuevo_usuario()
    { 
        $roles = Role::all(); 
 
        return view('admin.paginas.usuarios.create',['roles'=>$roles]);
    }

}
