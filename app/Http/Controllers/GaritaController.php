<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;
use DateTime;
use File;
use Storage;

use Carbon\Carbon;
use Mpdf\Mpdf;
use App\Helpers\GuidHelper;
use App\Helpers\ExcelHelper;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PHPExcel_Cell_DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class GaritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function IndexTipoVehiculo()
    {
        $id_empleado = session::get('id_empleado');
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        return view('Administrador.Garita.Tipo_de_vehiculo.index', compact('menus_'));
    }

    public function get_lista_tipo_vehiculo()
    {
        $tiposVehiculos = DB::Select("SELECT * FROM garita.view_tbl_conf_tipo_vehiculo ORDER BY tv_id");
        DB::disconnect();
        return $tiposVehiculos;
    }

    public function store_tipo_vehiculo(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'nombre' => strtoupper($request->input('nombre')),
            'valor' => $request->input('valor'),
            'observacion' => strtoupper($request->input('observacion')) ?? '',
            'estado' => boolval($request->input('estado')),
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_registrar_tbl_conf_tipo_vehiculo(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_tbl_conf_tipo_vehiculo;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function update_tipo_vehiculo(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'id' => $request->input('id'),
            'nombre' => strtoupper($request->input('nombre')),
            'valor' => $request->input('valor'),
            'observacion' => strtoupper($request->input('observacion')) ?? '',
            'estado' => boolval($request->input('estado')),
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_modificar_tbl_conf_tipo_vehiculo(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_modificar_tbl_conf_tipo_vehiculo;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function delete_tipo_vehiculo($id, Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'id' => $id
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_eliminar_tbl_conf_tipo_vehiculo(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_eliminar_tbl_conf_tipo_vehiculo;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function IndexTipoIngresoVehicular()
    {
        $id_empleado = session::get('id_empleado');
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        return view('Administrador.Garita.Tipo_de_ingreso_vehicular.index', compact('menus_'));
    }

    public function get_lista_tipo_ingreso_vehicular()
    {
        $TiposIngreso = DB::Select("SELECT * FROM garita.view_tbl_conf_tipo_ingreso_vehicular ORDER BY tiv_id");
        DB::disconnect();
        return $TiposIngreso;
    }

    public function store_tipo_ingreso_vehicular(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'nombre' => strtoupper($request->input('nombre')),
            'dias_retencion' => $request->input('dias_retencion'),
            'observacion' => strtoupper($request->input('observacion')) ?? '',
            'estado' => boolval($request->input('estado')),
            'campos' => $request->input('campos')
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_registrar_tbl_conf_tipo_ingreso_vehicular(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_tbl_conf_tipo_ingreso_vehicular;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function update_tipo_ingreso_vehicular(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'id' => $request->input('id'),
            'nombre' => strtoupper($request->input('nombre')),
            'dias_retencion' => $request->input('dias_retencion'),
            'observacion' => strtoupper($request->input('observacion')) ?? '',
            'estado' => boolval($request->input('estado')),
            'campos' => $request->input('campos')
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_modificar_tbl_tipo_ingreso_vehicular(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_modificar_tbl_tipo_ingreso_vehicular;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function delete_tipo_ingreso_vehicular($id, Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'id' => $id
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_eliminar_tbl_conf_tipo_ingreso_vehicular(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_eliminar_tbl_conf_tipo_ingreso_vehicular;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function IndexDocumentosRequeridos()
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        return view('Administrador.Garita.Documentos_requeridos.index', compact('menus_'));
    }

    public function get_lista_documentos_requeridos()
    {
        $DocumentosRequerido = DB::Select("SELECT * FROM garita.view_tbl_documentos_requeridos ORDER BY d_id");
        DB::disconnect();
        return $DocumentosRequerido;
    }

    public function store_documento_requerido(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'nombre' => strtoupper($request->input('nombre')),
            'observacion' => strtoupper($request->input('observacion')) ?? '',
            'es_requerido' => boolval($request->input('es_requerido')),
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_registrar_tbl_documentos_requeridos(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_tbl_documentos_requeridos;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function update_documento_requerido(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'id' => $request->input('id'),
            'nombre' => strtoupper($request->input('nombre')),
            'observacion' => strtoupper($request->input('observacion')) ?? '',
            'es_requerido' => boolval($request->input('es_requerido')),
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_modificar_tbl_documentos_requeridos(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_modificar_tbl_documentos_requeridos;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function delete_documento_requerido($id)
    {
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'id' => $id
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_eliminar_tbl_documentos_requeridos(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_eliminar_tbl_documentos_requeridos;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function IndexConfInventarioVehiculo()
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        return view('Administrador.Garita.Inventario_vehiculo.index', compact('menus_'));
    }

    public function get_ConfInventarioVehiculo()
    {
        $inventario_vehiculos = DB::Select("SELECT * FROM garita.view_tbl_inventario_vehiculo_ingreso");
        DB::disconnect();
        return $inventario_vehiculos;
    }

    public function storeConfInventarioVehiculo(Request $request)
    {
        $date = Carbon::now();
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'iv_title' => strtoupper($request->input('txt_titulo')),
            'iv_descripcion' => strtoupper($request->input('txt_descripcion')),
            'detalle_inventario' => $request->input('detalle_inventario')
        ];


        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_registrar_tbl_inventario_vehiculo_ingreso(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_tbl_inventario_vehiculo_ingreso;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function updateConfInventarioVehiculo(Request $request)
    {
        $date = Carbon::now();
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'iv_id' => $request->input('id'),
            'iv_title' => strtoupper($request->input('txt_titulo')),
            'iv_descripcion' => strtoupper($request->input('txt_descripcion')),
            'detalle_inventario' => $request->input('detalle_inventario')
        ];

        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_modificar_tbl_inventario_vehiculo_ingreso(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_modificar_tbl_inventario_vehiculo_ingreso;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function destroyConfInventarioVehiculo($id)
    {
        $ip = request()->ip();
        $user = session::get('id_users');
        $json[] = [
            'iv_id' => $id
        ];

        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_eliminar_tbl_inventario_vehiculo_ingreso(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_eliminar_tbl_inventario_vehiculo_ingreso;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function IndexIngresoVehiculoPatio()
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        return view('Administrador.Garita.Ingreso_vehiculo_patio.index', compact('menus_'));
    }

    public function get_IngresoVehiculoPatio()
    {
        $ingreso_patio_vehiculos = DB::Select("SELECT * FROM garita.view_tbl_ingreso_vehiculo_patio");
        DB::disconnect();
        return $ingreso_patio_vehiculos;
    }

    public function get_one_IngresoVehiculoPatio($id)
    {
        $data = DB::Select("SELECT * FROM garita.view_tbl_ingreso_vehiculo_patio WHERE ivp_id = {$id}");
        DB::disconnect();
        return $data[0];
    }

    public function get_DetalleInventarioVehiculo($iv_id)
    {
        $inventario_vehiculos = DB::Select("SELECT * FROM garita.tbl_inventario_vehiculo_ingreso_detalle WHERE iv_id = {$iv_id} ORDER BY ivd_orden, ivd_orden");
        DB::disconnect();
        return $inventario_vehiculos;
    }

    public function get_detalle_documentos_vehiculo($tiv_id)
    {
        $DocumentosVehiculos = DB::Select("SELECT uiv.div_id, d.d_id, d.d_nombre, d.d_es_requerido, d.d_observacion
                                    FROM garita.tbl_documentos_ingreso_vehicular AS uiv
                                    INNER JOIN garita.tbl_documentos_requeridos AS d ON uiv.d_id = d.d_id
                                    WHERE d.d_estado = TRUE
                                    AND tiv_id = 3");
        DB::disconnect();
        return $DocumentosVehiculos;
    }

    public function storeIngresoVehiculoPatio(Request $request)
    {
        $date = Carbon::now();
        $ip = request()->ip();
        $user = session::get('id_users');



        //----------- No pasa
        /*
        $data = json_decode($request->input('detalle_inventario_vehiculo'), true);

        // Responder con los datos recibidos (para verificar)
        header('Content-Type: application/json');
        return response()->json([
            'mensaje' => 'Datos recibidos correctamente',
            'datos' => $data
        ]);
        */
        //-------

        return $this->storeDocumentsVehiculoPatio_documentos($request->documentos, 1);

        $json[] = [
            'tiv_id' => '1', //Por ahora 1 que es ordenanza
            'ivp_descripcion' => '', //Por ahora vacio
            'ivp_articulo' => strtoupper($request->input('ivp_articulo')),
            'ivp_numeral' => strtoupper($request->input('ivp_numeral')),
            'ivp_literal' => strtoupper($request->input('ivp_literal')),
            'ivp_resolucion' => strtoupper($request->input('ivp_resolucion')),
            'ivp_autoridad' => strtoupper($request->input('ivp_autoridad')),
            'ivp_oficio' => strtoupper($request->input('ivp_oficio')),

            'ivp_conductor_identificacion' => strtoupper($request->input('ivp_conductor_identificacion')),
            'ivp_conductor_nombres' => strtoupper($request->input('ivp_conductor_nombres')),
            'ivp_conductor_tipo_licencia' => $request->input('ivp_conductor_tipo_licencia'),

            'ivp_vehiculo_placa' => strtoupper($request->input('ivp_vehiculo_placa')),
            'ivp_vehiculo_tipo' => $request->input('ivp_vehiculo_tipo'),
            'ivp_vehiculo_marca' => strtoupper($request->input('ivp_vehiculo_marca')),
            'ivp_vehiculo_modelo' => strtoupper($request->input('ivp_vehiculo_modelo')),
            'ivp_vehiculo_color1' => strtoupper($request->input('ivp_vehiculo_color1')),
            'ivp_vehiculo_ramv' => strtoupper($request->input('ivp_vehiculo_ramv')),
            'ivp_vehiculo_chasis' => strtoupper($request->input('ivp_vehiculo_chasis')),
            'ivp_vehiculo_motor' => strtoupper($request->input('ivp_vehiculo_motor')),
            'ivp_vehiculo_servicio' => $request->input('ivp_vehiculo_servicio'),

            'ivp_medio_ingreso' => $request->input('ivp_medio_ingreso'),
            'ivp_medio_ingreso_empresa' => strtoupper($request->input('ivp_medio_ingreso_empresa')),
            'ivp_medio_ingreso_datos_translado' => strtoupper($request->input('ivp_medio_ingreso_datos_translado')),

            'ivp_agente_retiene_cedula' => '', //Vacio por ahora
            'ivp_agente_retiene_nombre' => '', //Vacio por ahora
            'ivp_agente_retiene_email' => '', //Vacio por ahora

            'ivp_agente_ingresa_cedula' => '', //Vacio por ahora
            'ivp_agente_ingresa_nombre' => '', //Vacio por ahora

            'ivp_responsable_cedula' => '', //Vacio por ahora
            'ivp_responsable_nombre' => '', //Vacio por ahora
            'ivp_responsable_email' => '', //Vacio por ahora

            'ivp_agente_devuelve_cedula' => '', //Vacio por ahora
            'ivp_agente_devuelve_nombre' => '', //Vacio por ahora

            'ivp_responsable_retira_cedula' => '', //Vacio por ahora
            'ivp_responsable_retira_nombre' => '', //Vacio por ahora

            'ivp_control_ingreso' => 1, //Por ahora 1

            'detalle_inventario_vehiculos' => $request->input('detalle_inventario_vehiculo'), //Json vacio
            'detalle_documentos' => $this->storeDocumentsVehiculoPatio_documentos($request->documentos, 1), //Json vacio
            //'detalle_evidencias_vehiculos' => '[]', //Json vacio

        ];


        $jsoninsert = json_encode($json);
        $sql = DB::Select('select garita.procedimiento_registrar_tbl_ingreso_vehiculo_patio(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_tbl_ingreso_vehiculo_patio;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    function  storeDocumentsVehiculoPatio_documentos($documentos, $tiv_id){
        $jsonResultado = []; // Aquí guardaremos los datos para armar el JSON

        foreach ($documentos as $doc) {

            $guid = GuidHelper::GUIDv4();
            $archivo = $doc['file'];
            $nombrearchivo = $guid . '.' . $archivo->getClientOriginalExtension();
            $nuevaruta = public_path('/archivos_documentos_vehiculo/' . $nombrearchivo);
            copy($archivo->getRealPath(), $nuevaruta);
            Storage::disk('ftp_movilidad')->put('/ftpGarita/documentos_vehiculo/' . $nombrearchivo , File::get($nuevaruta));

            $documento_id = $doc['id'];

             // Añadir al array
            $jsonResultado[] = [
                'tiv_id' => $tiv_id,
                'd_id' => $documento_id,
                'ivd_archivo_original' => $archivo->getClientOriginalName(),
                'ivd_archivo_generado' => $nombrearchivo
            ];
        }
        // Al final puedes:
        return json_encode($jsonResultado);
    }
    
}