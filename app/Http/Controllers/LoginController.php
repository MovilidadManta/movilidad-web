<?php

namespace App\Http\Controllers;


use  Session;
use  Redirect;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session::get('usuario')) {
            return redirect('/home');
        } else {
            return view("Administrador.Login.login");
        }
    }



    public function index2()
    {
        if (session::get('usuario')) {
            return redirect('/home');
        } else {
            return view("Administrador.Login.login2");
        }
    }

    public function index3()
    {
        if (session::get('usuario')) {
            return redirect('/home');
        } else {
            return view("Administrador.Login.login3");
        }
    }

    public function iniciar_sesion(Request $request)
    {
        $ip = request()->ip();
        $user = $request->input('txt-usuario');

        $sql = DB::connection('pgsql')->Select('select public.proce_login_usuario(?,?)', [$user, $ip]);
        foreach ($sql as $r) {
            $clave = $r->proce_login_usuario;
        }

        if ($clave != '0') {
            if (Hash::check($request->input('txt-clave'), $clave)) {
                $datos_usuarios = DB::connection('pgsql')->table("public.view_usuarios")->where("correo", "=", $user)->orWhere('emp_cedula', $user)->get();

                if(count($datos_usuarios) == 0){
                    return response()->json(["usuario" => false]);
                }

                foreach ($datos_usuarios as $usuario) {
                    $request->session()->put('usuario', $usuario->correo);
                    $request->session()->put('tipo_usuario', $usuario->tipo_usuario);
                    $request->session()->put('id_users', $usuario->usu_id);
                    $request->session()->put('tipo_usuario', $usuario->tipo_usuario);
                    $request->session()->put('ruta_foto', $usuario->emp_ruta_foto);
                    $request->session()->put('nombres', $usuario->emp_nombre);
                    $request->session()->put('apellidos', $usuario->emp_apellido);
                    $request->session()->put('id_jefatura', $usuario->emp_id_perfil);
                    $request->session()->put('id_departamento', $usuario->emp_id_departamento);
                    $request->session()->put('id_empleado', $usuario->cod_empleado);
                    $request->session()->put('id_cedula', $usuario->emp_cedula);
                    $request->session()->put('id_proyecto', env('APP_ID_PROYECTO', '2'));
                }
                return response()->json(["respuesta" => true, 'id_jefatura' => Session::get('id_jefatura')]);
            } else {
                return response()->json(["clave" => false]);
            }
        } else {
            return response()->json(["usuario" => false]);
        }
    }

    public function cerrar_sesion()
    {
        Session::flush();
        return Redirect::to('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = DB::table('view_usuarios')->get();
        return $consulta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$ip = request()->ip();
        $user = $request->input('txt-usuario');

        $sql = DB::Select('select public.proce_login_usuario(?,?)', [$user, $ip]);
        foreach ($sql as $r) {
            $clave = $r->proce_login_usuario;
        }

        if ($clave != '0') {
            if (Hash::check($request->input('txt-clave'), $clave)) {
                $datos_usuarios = DB::table("public.view_usuarios")->where("correo", "=", $user)->get();
                foreach ($datos_usuarios as $usuario) {
                    $request->session()->put('usuario', $usuario->correo);
                    $request->session()->put('tipo_usuario', $usuario->tipo_usuario);
                    $request->session()->put('id_users', $usuario->usu_id);
                    $request->session()->put('nombre', $usuario->emp_nombre);
                    $request->session()->put('apellido', $usuario->emp_apellido);
                    $request->session()->put('id_jefatura', $usuario->emp_id_perfil);
                }
                return response()->json(["respuesta" => true]);
            } else {
                return response()->json(["clave" => false]);
            }
        } else {
            return response()->json(["usuario" => false]);
        }*/
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
        //
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
    }

    public function reset()
    {
        $t_empleados = DB::connection('pgsql')->select("select * from view_total_empleados");
        $t_usuarios = DB::connection('pgsql')->select("select * from view_total_usuarios");
        $t_menu = DB::connection('pgsql')->table("public.view_menu")->get();
        $t_menu_empleado = DB::connection('pgsql')->select("select * from public.view_menu_empleado where emp_id = " . session::get('id_empleado') . "");
        $t_sub_menu_empleado = DB::connection('pgsql')->table("public.view_sub_menu_empleado")->where("emp_id", "=", session::get('id_empleado'))->get();

        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        //DB::connection('pgsql')->table("public.view_usuarios")->where("correo", "=", $user)->get();
        return view('Administrador.ReinicioC.index', compact('t_empleados', 't_usuarios', 'menus_'));
    }

    public function cambiar(Request $r)
    {
        $datos_usuarios = DB::connection('pgsql')->table("public.view_usuarios")->where("correo", "=", Session::get('usuario'))->get();
        $clave_ = "";
        $id_usu = "";
        foreach ($datos_usuarios as $u) {
            $clave_ = $u->contraseña;
            $id_usu = $u->usu_id;
        }
        //return $clave_;
        if (Hash::check($r->contrasena, $clave_)) {
            $ip = request()->ip();
            $user = session::get('id_users');

            $json[] = [
                'id_usuario' => $id_usu,
                'clave' => Hash::make($r->new_contrasena)
            ];
            $jsoninsert = json_encode($json);
            $sql = DB::Select('select public.procedimiento_modificar_clave_datos_usuario_id(?,?,?)', [$jsoninsert, $ip, $user]);
            foreach ($sql as $s) {
                $id = $s->procedimiento_modificar_clave_datos_usuario_id;
            }
            if ($sql != "[]") {
                return response()->json(['respuesta' => true, "data" => $id, "sql" => $sql]);
            } else {
                return response()->json(["respuesta" => false]);
            }
            //   return response()->json(["clave" => true]);
        } else {
            return response()->json(["clave" => false]);
        }
    }
}
