<div class="modal" id="{{$idModalIngresoVehiculoPatio}}">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h1 class="modal-title">Agregar/Modificar Ingreso Vehiculo Patio</h1>
                <button
                    aria-label="Close"
                    class="close"
                    data-bs-dismiss="modal"
                    type="button"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input
                    type="hidden"
                    name="csrf-token"
                    value="{{csrf_token()}}"
                    id="csrf_token_{{$idModalIngresoVehiculoPatio}}"
                >
                <form
                    class="form"
                    novalidate
                    id="form_{{$idModalIngresoVehiculoPatio}}"
                    method="POST"
                >
                    <input type="hidden" name="id" id="id_{{$idModalIngresoVehiculoPatio}}">
                    <div class="example">
                        <div class="panel panel-primary tabs-style-3">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab_datos_generales" class="active"
                                                data-bs-toggle="tab"><i class="fa fa-cube"></i> Datos Generales</a></li>
                                        <li><a href="#tab_inventario_vehiculos" data-bs-toggle="tab"><i
                                                    class="fas fa-car-alt"></i> Inventario del vehículo</a></li>
                                        <li><a href="#tab_documentos_vehiculos" data-bs-toggle="tab"><i
                                                    class="fab fa-wpforms"></i> Documentos Requeridos</a></li>
                                        <li><a href="#tab14" data-bs-toggle="tab"><i
                                                    class="fa fa-user"></i> Responsable del Ingreso del vehiculo</a></li>
                                        <li><a href="#tab15" data-bs-toggle="tab"><i
                                                        class="fa fa-user"></i> Responsable devolución del vehiculo</a></li>
                                        <li><a href="#tab16" data-bs-toggle="tab"><i
                                                            class="fa fa-window-restore"></i> Evidencias Golpes, Raspones, etc</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_datos_generales">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="panel-group1" id="accordion_datos_generales">
                                                    <div class="panel panel-default  mb-4">
                                                        <div class="panel-heading1 bg-primary ">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion_datos_generales" href="#collapse_motivo_ingreso" aria-expanded="true"><i class="fe fe-arrow-right me-2"></i>Motivo de ingreso</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_motivo_ingreso" class="panel-collapse collapse show" role="tabpanel" aria-expanded="false" style="">
                                                            <div class="panel-body border">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Artículo</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_articulo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_articulo" 
                                                                        placeholder="Artículo"
                                                                        data-label='Artículo'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_articulo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Númeral</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_numeral_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_numeral" 
                                                                        placeholder="Númeral"
                                                                        data-label='Númeral'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_numeral_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Literal</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_literal_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_literal" 
                                                                        placeholder="Númeral"
                                                                        data-label='Númeral'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_literal_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Resolución</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_resolucion_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_resolucion" 
                                                                        placeholder="Resolución"
                                                                        data-label='Resolución'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_resolucion_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Autoridad</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_autoridad_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_autoridad" 
                                                                        placeholder="Autoridad"
                                                                        data-label='Autoridad'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_autoridad_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Oficio</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_oficio_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_oficio" 
                                                                        placeholder="Oficio"
                                                                        data-label='Oficio'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_oficio_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default mb-0">
                                                        <div class="panel-heading1  bg-primary">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle mb-0" data-bs-toggle="collapse" data-bs-parent="#accordion_datos_generales" href="#collapse_conductor" aria-expanded="true"><i class="fe fe-arrow-right me-2"></i>Conductor</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_conductor" class="panel-collapse collapse show" role="tabpanel" aria-expanded="false" style="">
                                                            <div class="panel-body border">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Cédula o Pasaporte</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_cedula_pasaporte_conductor_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_conductor_identificacion" 
                                                                        placeholder="Cédula o Pasaporte"
                                                                        data-label='Cédula o Pasaporte'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_cedula_pasaporte_conductor_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Nombre</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_nombre_conductor_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_conductor_nombres" 
                                                                        placeholder="Nombre"
                                                                        data-label='Nombre'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_nombre_conductor_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Tipo de Licencia</strong>
                                                                        <select name="ivp_conductor_tipo_licencia" id="tipo_licencia_conductor_{{$idModalIngresoVehiculoPatio}}" class="form-control">
                                                                            <option value="-1">SELECCIONE</option>
                                                                            <option value="0">SIN LICENCIA</option>
                                                                            <option value="1">A</option>
                                                                            <option value="2">A1</option>
                                                                            <option value="3">B</option>
                                                                            <option value="4">C</option>
                                                                            <option value="5">D</option>
                                                                            <option value="6">D1</option>
                                                                            <option value="7">E</option>
                                                                            <option value="8">E1</option>
                                                                            <option value="9">F</option>
                                                                            <option value="10">G</option>
                                                                        </select>
                                                                        <span class="badge bg-danger" data-for="tipo_licencia_conductor_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default mb-0">
                                                        <div class="panel-heading1  bg-primary">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle mb-0" data-bs-toggle="collapse" data-bs-parent="#accordion_datos_generales" href="#collapse_vehiculo" aria-expanded="true"><i class="fe fe-arrow-right me-2"></i>Vehículo</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_vehiculo" class="panel-collapse collapse show" role="tabpanel" aria-expanded="false" style="">
                                                            <div class="panel-body border">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>PLACA</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_placa_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_placa" 
                                                                        placeholder="Placa"
                                                                        data-label='Placa'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_placa_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Tipo de Vehículo</strong>
                                                                        <select name="ivp_vehiculo_tipo" id="tipo_placa_vehiculo_{{$idModalIngresoVehiculoPatio}}" class="form-control">
                                                                            <option value="-1">SELECCIONE</option>
                                                                            <option value="0">MOTOCICLETAS</option>
                                                                            <option value="1">LIVIANO</option>
                                                                            <option value="2">SEMIPESADO</option>
                                                                            <option value="3">PESADO</option>
                                                                        </select>
                                                                        <span class="badge bg-danger" data-for="tipo_placa_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Marca</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_marca_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_marca" 
                                                                        placeholder="Marca"
                                                                        data-label='Marca'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_marca_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Modelo</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_modelo_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_modelo" 
                                                                        placeholder="Modelo"
                                                                        data-label='Modelo'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_modelo_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Color 1</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_color1_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_color1" 
                                                                        placeholder="Color 1"
                                                                        data-label='Color 1'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_color1_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>RAMV</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_ramv_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_ramv" 
                                                                        placeholder="RAMV"
                                                                        data-label='RAMV'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_ramv_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong># Chasis</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_chasis_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_chasis" 
                                                                        placeholder="# Chasis"
                                                                        data-label='# Chasis'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_chasis_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Motor</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_motor_vehiculo_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_vehiculo_motor" 
                                                                        placeholder="# Motor"
                                                                        data-label='# Motor'
                                                                        style="text-transform: uppercase;">
                                                                        <span class="badge bg-danger" data-for="txt_motor_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Servicio</strong>
                                                                        <select name="ivp_vehiculo_servicio" id="tipo_servicio_vehiculo_{{$idModalIngresoVehiculoPatio}}" class="form-control">
                                                                            <option value="-1">SELECCIONE</option>
                                                                            <option value="0">PARTICULAR</option>
                                                                            <option value="1">PUBLICO</option>
                                                                            <option value="2">ESTADO</option>
                                                                        </select>
                                                                        <span class="badge bg-danger" data-for="tipo_servicio_vehiculo_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default mb-0">
                                                        <div class="panel-heading1  bg-primary">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle mb-0" data-bs-toggle="collapse" data-bs-parent="#accordion_datos_generales" href="#collapse_datos_ingreso" aria-expanded="true"><i class="fe fe-arrow-right me-2"></i>Medio de Ingreso</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse_datos_ingreso" class="panel-collapse collapse show" role="tabpanel" aria-expanded="false" style="">
                                                            <div class="panel-body border">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong>Tipo de Vehículo</strong>
                                                                        <select name="ivp_medio_ingreso" id="select_medio_ingreso_{{$idModalIngresoVehiculoPatio}}" class="form-control">
                                                                            <option value="-1">SELECCIONE</option>
                                                                            <option value="0">PERSONAL</option>
                                                                            <option value="1">GRÚA INSTITUCIONAL</option>
                                                                            <option value="2">GRÚA PARTICULAR</option>
                                                                        </select>
                                                                        <span class="badge bg-danger" data-for="select_medio_ingreso_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong id="label_medio_ingreso_empresa_{{$idModalIngresoVehiculoPatio}}" style="display: none">EMPRESA</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_medio_ingreso_empresa_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_medio_ingreso_empresa" 
                                                                        placeholder="Empresa"
                                                                        data-label='Empresa'
                                                                        style="text-transform: uppercase; display: none;">
                                                                        <span id="badge_medio_ingreso_empresa_{{$idModalIngresoVehiculoPatio}}" class="badge bg-danger" data-for="txt_medio_ingreso_empresa_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                                                        <strong id="label_medio_ingreso_datos_translado_{{$idModalIngresoVehiculoPatio}}" style="display: none">DATOS DE TRASLADO</strong>
                                                                        <input class="form-control pd-r-80" type="text" id="txt_medio_ingreso_datos_translado_{{$idModalIngresoVehiculoPatio}}" 
                                                                        name="ivp_medio_ingreso_datos_translado" 
                                                                        placeholder="Datos de Traslado"
                                                                        data-label='Datos de Traslado'
                                                                        style="text-transform: uppercase; display: none;">
                                                                        <span id="badge_medio_ingreso_datos_translado_{{$idModalIngresoVehiculoPatio}}" class="badge bg-danger" data-for="txt_medio_ingreso_datos_translado_{{$idModalIngresoVehiculoPatio}}"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_inventario_vehiculos">
                                        <div id="container_items_iventario_vehiculo" class="container_inventario_vehiculo">

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_documentos_vehiculos">
                                        <div id="container_items_documentos_vehiculo" class="container-cards">
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab14">
                                        <p>On the other hand, we denounce with righteous indignation and
                                            dislike men who are so beguiled and demoralized by the
                                            charms of pleasure of the moment, so blinded by desire</p>
                                        <p class="mb-0">Nam libero tempore, cum soluta nobis est
                                            eligendi optio cumque nihil impedit quo minus id quod maxime
                                            placeat facere possimus, omnis voluptas assumenda est, omnis
                                            dolor repellendus. Temporibus autem quibusdam et aut
                                            officiis debitis aut rerum necessitatibus </p>
                                    </div>
                                    <div class="tab-pane" id="tab15">
                                        <p>On the other hand, we denounce with righteous indignation and
                                            dislike men who are so beguiled and demoralized by the
                                            charms of pleasure of the moment, so blinded by desire</p>
                                        <p class="mb-0">Nam libero tempore, cum soluta nobis est
                                            eligendi optio cumque nihil impedit quo minus id quod maxime
                                            placeat facere possimus, omnis voluptas assumenda est, omnis
                                            dolor repellendus. Temporibus autem quibusdam et aut
                                            officiis debitis aut rerum necessitatibus </p>
                                    </div>
                                    <div class="tab-pane" id="tab16">
                                        <p>On the other hand, we denounce with righteous indignation and
                                            dislike men who are so beguiled and demoralized by the
                                            charms of pleasure of the moment, so blinded by desire</p>
                                        <p class="mb-0">Nam libero tempore, cum soluta nobis est
                                            eligendi optio cumque nihil impedit quo minus id quod maxime
                                            placeat facere possimus, omnis voluptas assumenda est, omnis
                                            dolor repellendus. Temporibus autem quibusdam et aut
                                            officiis debitis aut rerum necessitatibus </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success-gradient btn-movi" id="btn_guardar_ingreso_vehiculo_patio-{{$idModalIngresoVehiculoPatio}}" type="button"><i class="fa fa-save"></i> <span id="text_save_ingreso_vehiculo_patio-{{$idModalIngresoVehiculoPatio}}">Guardar</span></button>
                <button class="btn ripple btn-dark-gradient" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-times"></i> Salir
                </button>
            </div>
        </div>
    </div>
</div>