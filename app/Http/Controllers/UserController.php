<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    /* Constructor para proteccion de enlaces:: middleware */

   /*  public function __construct()
    {
        $this->middleware('can:alumno.index')->only('index');
        $this->middleware('can:alumno.create')->only('create','store');
        $this->middleware('can:alumno.edit')->only('edit','update');
   
    } */

    public function index(Request $request)
    {
        $busqueda=$request->get('busqueda');
        $usuario = User::where('name','like','%'.$busqueda.'%')->get();
        $user= User::all();
        return view('usuarios.index',compact('usuario','busqueda'));
    }
   
   
    public function showLogin()
    {
        return view('login');
    }

    public function verificalogin(Request $request)
    {
        /* return dd($request->all()); */
        $data = request()->validate(
            [
                'name' => 'required',
                'password' => 'required'
            ],
            [
                'name.required' => 'Ingrese Usuario',
                'password.required' => 'Ingrese contraseña',
            ]
        );
        if (Auth::attempt($data)) {
            $con = 'OK';
        }
        $name = $request->get('name');
        $query = User::where('name', '=', $name)->get();
        if ($query->count() != 0) {
            $hashp = $query[0]->password;
            $password = $request->get('password');
            if (password_verify($password, $hashp)) {
                return redirect()->route('home');
            } else {
                return back()->withErrors(['password' => 'Contraseña no válida'])
                    ->withInput(request(['name', 'password']));
            }
        } else {
            return back()->withErrors(['name' => 'Usuario no válido'])
                ->withInput(request(['name']));
        }
    }

    public function edit(User $usuario)
    {     
        $role = Role::all();
        /* $usuario = User::findOrFail($usuario); */
        return view('usuarios.edit',compact('usuario','role'));
    }

    public function update(Request $request, User $usuario)
    {
        $usuario -> roles()->sync($request->role);
        return redirect()->route('usuarios.edit',$usuario)->with('info','Roles asignados correctamente');
    }

  

    public function destroy($id)
    {
        $usuario=User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('datos','Registro Eliminado...!');
    }
    
    public function salir()
    {
        Auth::logout();
        return view('login');
    }
}
