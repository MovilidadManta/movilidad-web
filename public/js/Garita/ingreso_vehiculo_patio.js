const btnAgregarIngresoVehiculoPatio = document.getElementById('btn_add_ingreso_vehiculo_patio');
const btnDeleteIngresoVehiculoPatio = document.getElementById('btn_delete_ingreso_vehiculo_patio');

const containerInventarioVehiculo = document.getElementById('container_items_iventario_vehiculo');
const containerDocumentosVehiculo = document.getElementById('container_items_documentos_vehiculo');

//controles formulario ingresar o modificar inventario de vehiculo
const id_ingreso_vehiculo_patio = document.getElementById("id_modal_agregar_ingreso_vehiculo_patio");
const txt_articulo = document.getElementById("txt_articulo_modal_agregar_ingreso_vehiculo_patio");
const txt_numeral = document.getElementById("txt_numeral_modal_agregar_ingreso_vehiculo_patio");
const txt_literal = document.getElementById("txt_literal_modal_agregar_ingreso_vehiculo_patio");
const txt_resolucion = document.getElementById("txt_resolucion_modal_agregar_ingreso_vehiculo_patio");
const txt_autoridad = document.getElementById("txt_autoridad_modal_agregar_ingreso_vehiculo_patio");
const txt_oficio = document.getElementById("txt_oficio_modal_agregar_ingreso_vehiculo_patio");

const txt_cedula_conductor = document.getElementById("txt_cedula_pasaporte_conductor_modal_agregar_ingreso_vehiculo_patio");
const txt_nombre_conductor = document.getElementById("txt_nombre_conductor_modal_agregar_ingreso_vehiculo_patio");
const txt_tipo_licencia_conductor = document.getElementById("tipo_licencia_conductor_modal_agregar_ingreso_vehiculo_patio");

const txt_placa_vehiculo = document.getElementById("txt_placa_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_tipo_placa_vehiculo = document.getElementById("tipo_placa_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_marca_vehiculo = document.getElementById("txt_marca_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_modelo_vehiculo = document.getElementById("txt_modelo_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_color1_vehiculo = document.getElementById("txt_color1_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_ramv_vehiculo = document.getElementById("txt_ramv_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_chasis_vehiculo = document.getElementById("txt_chasis_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_motor_vehiculo = document.getElementById("txt_motor_vehiculo_modal_agregar_ingreso_vehiculo_patio");
const txt_servicio_vehiculo = document.getElementById("tipo_servicio_vehiculo_modal_agregar_ingreso_vehiculo_patio");

const select_medio_ingreso = document.getElementById("select_medio_ingreso_modal_agregar_ingreso_vehiculo_patio");
const txt_medio_ingreso_empresa = document.getElementById("txt_medio_ingreso_empresa_modal_agregar_ingreso_vehiculo_patio");
const txt_medio_ingreso_datos_translado = document.getElementById("txt_medio_ingreso_datos_translado_modal_agregar_ingreso_vehiculo_patio");
const label_medio_ingreso_empresa = document.getElementById("label_medio_ingreso_empresa_modal_agregar_ingreso_vehiculo_patio");
const label_medio_ingreso_datos_translado = document.getElementById("label_medio_ingreso_datos_translado_modal_agregar_ingreso_vehiculo_patio");
const badge_medio_ingreso_empresa = document.getElementById("badge_medio_ingreso_empresa_modal_agregar_ingreso_vehiculo_patio");
const badge_medio_ingreso_datos_translado = document.getElementById("badge_medio_ingreso_datos_translado_modal_agregar_ingreso_vehiculo_patio");
/*
const txtTitulo = document.getElementById("txt_titulo-modal_agregar_inventario_vehiculo");
const txtDescripcion = document.getElementById("txt_descripcion-modal_agregar_inventario_vehiculo");
*/
const btnGuardarIngresoVehiculoPatio = document.getElementById('btn_guardar_ingreso_vehiculo_patio-modal_agregar_ingreso_vehiculo_patio');
const TextSaveIngresoVehiculoPatio = document.getElementById('text_save_ingreso_vehiculo_patio-modal_agregar_ingreso_vehiculo_patio');
let accionFormulario = "ADD";
let idIngresoVehiculoPatioToDelete = 0;
let cont_checkbox = 1;
let cont_input_documento = 1;
let id_inventario_vehiculo = 17;
let tipo_ingreso_vehicular = 3;
const iframePDF = document.getElementById('iframe_visor_pdf');
const containerViewPDF = document.getElementById('modal_view_pdf');
//---------------------------------------------------------------------

$(document).ready(function () {

    getIngresoVehiculoPatio();

    setInputValidations('txt_articulo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_numeral_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_literal_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_resolucion_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_autoridad_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_oficio_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);

    setInputValidations('txt_cedula_pasaporte_conductor_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_nombre_conductor_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('tipo_licencia_conductor_modal_agregar_ingreso_vehiculo_patio', [], [
        {
            function: function (item) {
                return item.value == -1;
            },
            message: "Debe buscar y seleccionar un Tipo de Licencia"
        }
    ]);

    setInputValidations('txt_placa_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('tipo_placa_vehiculo_modal_agregar_ingreso_vehiculo_patio', [], [
        {
            function: function (item) {
                return item.value == -1;
            },
            message: "Debe buscar y seleccionar un Tipo de Vehiculo"
        }
    ]);
    setInputValidations('txt_marca_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_modelo_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_color1_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_ramv_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_chasis_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_motor_vehiculo_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('tipo_servicio_vehiculo_modal_agregar_ingreso_vehiculo_patio', [], [
        {
            function: function (item) {
                return item.value == -1;
            },
            message: "Debe buscar y seleccionar un Tipo de Servicio"
        }
    ]);

    setInputValidations('select_medio_ingreso_modal_agregar_ingreso_vehiculo_patio', [], [
        {
            function: function (item) {
                return item.value == -1;
            },
            message: "Debe buscar y seleccionar un Medio de ingreso"
        }
    ]);

    setInputValidations('txt_medio_ingreso_empresa_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);
    setInputValidations('txt_medio_ingreso_datos_translado_modal_agregar_ingreso_vehiculo_patio', ['notEmpty'], []);

    let allInputsModal = document.querySelectorAll('#form_modal_agregar_ingreso_vehiculo_patio input[id$="_modal_agregar_ingreso_vehiculo_patio"]');

    allInputsModal.forEach(e => {
        if (e.which === 13) {
            e.preventDefault();
        }
    });

    getIventarioVehiculo(id_inventario_vehiculo);

    getDocumentosVehiculo(tipo_ingreso_vehicular);

    containerViewPDF.style.zIndex = 99999;

});

function getDocumentosVehiculo(tipo_ingreso_vehicular) {
    $.ajax({
        url: `/garita/ingreso_vehiculo_patio/get_documentos_vehiculo/${tipo_ingreso_vehicular}`,
        type: "GET",
        dataType: "json",
        success: function (response) {
            containerDocumentosVehiculo.innerHTML = "";
            console.log(response);
            response.forEach(i => {
                containerDocumentosVehiculo.innerHTML += `
                <input type="file" data-sec="${cont_input_documento}" id="file_pdf_documento-${cont_input_documento}" data-name="${i.d_nombre}" data-es_requerido="${i.d_es_requerido}" data-id="${i.d_id}" name="file_pdf" accept=".pdf" style="display: none;">
                <div id="pdf_preview-${cont_input_documento}" data-sec="${cont_input_documento}" class="pdf_preview" data-div_notloaded="${cont_input_documento}">
                    <i class="pdf_preview--icon fa fa-file-pdf-o" aria-hidden="true"></i>
                    <p class="pdf_preview--text">${i.d_nombre}</p>
                    <span class="badge bg-danger" data-sec="${cont_input_documento}" style="display: none;">Falta cargar documento</span>
                </div>
                <div class="card h-100 card_unidad_productora text-center card_medio_almacenamiento" style="display: none;" data-div_loaded="${cont_input_documento}">
                    <img class="card-img-top w-100 card_unidad_productora__img border_dashed" src="/imagenes_garita/pdf-upload.svg" alt="PDF IMAGEN">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h4 class="card-title mb-3">${i.d_nombre}</h4>
                        <a class="btn btn-primary mb-2"
                        data-btn_view="${cont_input_documento}"
                        href="#"><i class="fa fa-eye"></i> Ver PDF</a>
                        <a class="btn btn-danger"
                        data-btn_delete="${cont_input_documento}"
                        href="#"><i class="fa fa-trash"></i> Borrar PDF</a>
                    </div>
                </div>
                `;
                cont_input_documento++;
            });

            const list_files_documentos = containerDocumentosVehiculo.querySelectorAll("div[id^='pdf_preview-']");
            list_files_documentos.forEach(e => {
                setFunctionSubirDocumentoVehiculo(e)
            });

        }
    });
}

function setFunctionSubirDocumentoVehiculo(element) {
    const inputDocument = containerDocumentosVehiculo.querySelector(`input[id='file_pdf_documento-${element.dataset.sec}']`);
    const divLoaded = containerDocumentosVehiculo.querySelector(`div[data-div_loaded="${element.dataset.sec}"]`);
    const divNotLoaded = containerDocumentosVehiculo.querySelector(`div[data-div_notloaded="${element.dataset.sec}"]`);
    const btnViewPDF = divLoaded.querySelector('a[data-btn_view]');
    const btnDeletePDF = divLoaded.querySelector('a[data-btn_delete]');

    console.log(containerDocumentosVehiculo);

    inputDocument.addEventListener('change', (event) => {
        let file = event.target.files[0];
        if (file && file.type === "application/pdf") {
            divLoaded.style.display = 'block';
            divNotLoaded.style.display = 'none';
            /*
            
            */
        } else {
            alert("Por favor, seleccione un archivo PDF.");
        }
    });

    element.addEventListener('click', () => {
        inputDocument.click();
    });

    btnViewPDF.addEventListener('click', () => {
        let file = inputDocument.files[0];
        let reader = new FileReader();
        reader.onload = function (event) {
            iframePDF.src = URL.createObjectURL(new Blob([event.target.result], { type: 'application/pdf' }));
            $("#modal_view_pdf").modal("show");
            iframePDF.style.display = 'block';
        };
        reader.readAsArrayBuffer(file);
    });

    btnDeletePDF.addEventListener('click', () => {
        inputDocument.value = "";

        divLoaded.style.display = 'none';
        divNotLoaded.style.display = 'flex';
    });
}

function getIventarioVehiculo(TipoInventario) {
    $.ajax({
        url: `/garita/ingreso_vehiculo_patio/get_inventario_vehiculo/${TipoInventario}`,
        type: "GET",
        dataType: "json",
        success: function (response) {
            containerInventarioVehiculo.innerHTML = '';
            response.forEach(i => {
                if (i.ivd_tipo == 1) {
                    containerInventarioVehiculo.innerHTML += `
                <p>${i.ivd_title}</p>
                `;
                    containerInventarioVehiculo.innerHTML += `
                    <div class="checkbox-wrapper-1">
                        <input id="example-${cont_checkbox}" data-name="${i.ivd_title}" class="substituted" data-id="${i.ivd_id}" type="checkbox" value="1" aria-hidden="true" />
                        <label for="example-${cont_checkbox}"></label>
                    </div>
                   `;
                    cont_checkbox++;
                }
                if (i.ivd_tipo == 2) {
                    containerInventarioVehiculo.innerHTML += `
                <p>${i.ivd_title}</p>
                `;
                    containerInventarioVehiculo.innerHTML += `
                    <i>
                       <input data-name="${i.ivd_title}" data-id="${i.ivd_id}" type="number" value="1" />
                    </i>
                   `;
                }
                if (i.ivd_tipo == 3) {
                    containerInventarioVehiculo.innerHTML += `
                <p class="margin-10">${i.ivd_title}</p>
                `;
                    containerInventarioVehiculo.innerHTML += `
                    <p class="item_full_width">
                       <input class="form-control" data-name="${i.ivd_title}" data-id="${i.ivd_id}" type="text" value="" />
                    </p>
                   `;
                }
            });
        }
    });
}

select_medio_ingreso.addEventListener('change', e => {

    txt_medio_ingreso_empresa.value = "";
    txt_medio_ingreso_datos_translado.value = "";
    txt_medio_ingreso_empresa.style.display = "none";
    txt_medio_ingreso_datos_translado.style.display = "none";
    label_medio_ingreso_empresa.style.display = "none";
    label_medio_ingreso_datos_translado.style.display = "none";
    badge_medio_ingreso_empresa.style.display = "none";
    badge_medio_ingreso_datos_translado.style.display = "none";

    if (e.target.value > 0) {
        txt_medio_ingreso_empresa.style.display = "block";
        txt_medio_ingreso_datos_translado.style.display = "block";
        label_medio_ingreso_empresa.style.display = "block";
        label_medio_ingreso_datos_translado.style.display = "block";
        if (badge_medio_ingreso_empresa.innerText.trim() != "") {
            badge_medio_ingreso_empresa.style.display = "inline-block";
        }

        if (badge_medio_ingreso_datos_translado.innerText.trim() != "") {
            badge_medio_ingreso_datos_translado.style.display = "inline-block";
        }
    }
});

btnAgregarIngresoVehiculoPatio.addEventListener('click', () => {
    /*
    txtTitulo.value = "";
    txtDescripcion.value = "";
    txtDetalleTitulo.value = "";
    SelectDetalleTipo.value = 1;
    */
    accionFormulario = "ADD";
    $("#modal_agregar_ingreso_vehiculo_patio").modal("show");
});

function getIngresoVehiculoPatio() {
    $("#global-loader").addClass("block");
    $("#global-loader").removeClass("none");
    $.ajax({
        url: '/garita/ingreso_vehiculo_patio/list',
        type: "GET",
        dataType: "json",
        success: function (response) {
            let html = configureTableHtml("table_ingreso_patio_vehiculo",
                ['#', 'PLACA', 'DESCRIPCION', 'OPCIONES'
                ],
                ['ivp_id', 'ivp_vehiculo_placa', 'ivp_descripcion',
                    {
                        align: 'center',
                        class: 'color-td',
                        functionValue: function (item) {
                            return `
                            <button type="button" class="tam-btn btn btn-warning btn-modal-editar" Onclick ='show_mod_ingreso_vehiculo_patio(${item.ivp_id})'><i class="fa fa-edit tam-icono"></i></button>
                            <button type="button" class="tam-btn btn btn-danger btn-modal-eliminar" Onclick ="show_delete_ingreso_vehiculo_patio(${item.ivp_id})"><i class="fa fa-trash tam-icono"></i></button>
                            `;
                        }
                    },
                ], response
            );

            $("#div_table_ingreso_vehiculo_patio").html(html);

            $("#table_ingreso_patio_vehiculo").DataTable({
                "order": [[0, 'desc']]
            });

            $("#global-loader").removeClass("block");
            $("#global-loader").addClass("none");
        }
    });
}

btnGuardarIngresoVehiculoPatio.addEventListener('click', () => {
    let errores = '';
    let detalle_inventario_vehiculo = [];

    errores += txt_articulo.validateInput();
    errores += txt_numeral.validateInput();
    errores += txt_literal.validateInput();
    errores += txt_resolucion.validateInput();
    errores += txt_autoridad.validateInput();
    errores += txt_oficio.validateInput();

    errores += txt_cedula_conductor.validateInput();
    errores += txt_nombre_conductor.validateInput();
    errores += txt_tipo_licencia_conductor.validateInput();

    errores += txt_placa_vehiculo.validateInput();
    errores += txt_tipo_placa_vehiculo.validateInput();
    errores += txt_marca_vehiculo.validateInput();
    errores += txt_modelo_vehiculo.validateInput();
    errores += txt_color1_vehiculo.validateInput();
    errores += txt_ramv_vehiculo.validateInput();
    errores += txt_chasis_vehiculo.validateInput();
    errores += txt_motor_vehiculo.validateInput();
    errores += txt_servicio_vehiculo.validateInput();

    errores += select_medio_ingreso.validateInput();

    if (select_medio_ingreso.value > 0) {
        errores += txt_medio_ingreso_empresa.validateInput();
        errores += txt_medio_ingreso_datos_translado.validateInput();
        badge_medio_ingreso_empresa.style.display = "inline-block";
        badge_medio_ingreso_datos_translado.style.display = "inline-block";
    }

    const listInputDocumentos = containerDocumentosVehiculo.querySelectorAll("input[type='file'][id^='file_pdf_documento-']");

    listInputDocumentos.forEach(i => {
        const badge = containerDocumentosVehiculo.querySelector(`span[data-sec="${i.dataset.sec}"]`);
        badge.style.display = "none";
        if (i.value == "" && i.dataset.es_requerido == "true") {
            errores += `No se ha cargado el documento de ${i.dataset.name}`;
            badge.style.display = "inline-block";
        }
    });

    const items = containerInventarioVehiculo.querySelectorAll('input');

    let orden_conteo = 1;
    items.forEach(i => {

        if (i.type == "checkbox") {
            detalle_inventario_vehiculo.push({
                iv_id: id_inventario_vehiculo,
                iv_title: i.dataset.name,
                iv_tipo: 1,
                iv_valor: i.checked,
                iv_orden: orden_conteo
            });
        }


        if (i.type == "number") {
            detalle_inventario_vehiculo.push({
                iv_id: id_inventario_vehiculo,
                iv_title: i.dataset.name,
                iv_tipo: 2,
                iv_valor: i.value,
                iv_orden: orden_conteo
            });
        }

        if (i.type == "text") {
            detalle_inventario_vehiculo.push({
                iv_id: id_inventario_vehiculo,
                iv_title: i.dataset.name,
                iv_tipo: 3,
                iv_valor: i.value,
                iv_orden: orden_conteo
            });
        }

        orden_conteo++;

    });

    if (errores.trim() != "") {
        notif({
            type: "warning",
            msg: "<b>Aviso: </b>No se puede ingresar el vehiculo al patio",
            position: "right",
            autohide: true,
            zindex: 99999
        });
    }
    else {
        $(`#${TextSaveIngresoVehiculoPatio.id}`).html("Guardando...");
        const token = $("#csrf_token_modal_agregar_ingreso_vehiculo_patio").val();
        const datos = new FormData($("#form_modal_agregar_ingreso_vehiculo_patio")[0]);
        datos.append('detalle_inventario_vehiculo', JSON.stringify(detalle_inventario_vehiculo));

        listInputDocumentos.forEach((i, k) => {
            const file = i.files[0];
            const documentoId = i.getAttribute('data-id');

            if (file) {
                // Enviar el archivo con su ID asociado (usamos array para que Laravel lo interprete)
                datos.append(`documentos[${k}][file]`, file);
                datos.append(`documentos[${k}][id]`, documentoId);
            }
        });

        if (accionFormulario == "ADD") {
            $.ajax({
                url: '/garita/ingreso_vehiculo_patio/store',
                type: 'POST',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': token },
                contentType: false,
                processData: false,
                data: datos,
                success: function (response) {
                    if (response.respuesta == "true") {
                        $(`#${TextSaveIngresoVehiculoPatio.id}`).html("Guardar");
                        notif({
                            type: "success",
                            msg: "<b>Aviso: </b>Se ha guardado con éxito el vehiculo en el patio",
                            position: "right",
                            autohide: true,
                            zindex: 99999
                        });
                        getIngresoVehiculoPatio();
                        $("#modal_agregar_ingreso_vehiculo_patio").modal("hide");
                    }
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 0) {
                    alert('Not connect: Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found [404]');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error [500]. Intente nuevamente');
                } else if (textStatus === 'timeout') {
                    alert('Time out error.');
                } else if (textStatus === 'abort') {
                    alert('Ajax request aborted.');
                }
            });
        }

        if (accionFormulario == "MOD") {
            $.ajax({
                url: '/garita/ingreso_vehiculo_patio/update',
                type: 'POST',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': token },
                contentType: false,
                processData: false,
                data: datos,
                success: function (response) {
                    if (response.respuesta == "true") {
                        $(`#${TextSaveIngresoVehiculoPatio.id}`).html("Guardar");
                        notif({
                            type: "success",
                            msg: "<b>Aviso: </b>Se ha modificado con éxito el vehiculo en el patio",
                            position: "right",
                            autohide: true,
                            zindex: 99999
                        });
                        getIngresoVehiculoPatio();
                        $("#modal_agregar_ingreso_vehiculo_patio").modal("hide");
                    }
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 0) {
                    alert('Not connect: Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found [404]');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error [500]. Intente nuevamente');
                } else if (textStatus === 'timeout') {
                    alert('Time out error.');
                } else if (textStatus === 'abort') {
                    alert('Ajax request aborted.');
                }
            });
        }
    }
});

function show_mod_ingreso_vehiculo_patio(ivp_id) {

    $.ajax({
        url: `/garita/ingreso_vehiculo_patio/get/${ivp_id}`,
        type: "GET",
        dataType: "json",
        success: function (response) {
            id_ingreso_vehiculo_patio.value = ivp_id;
            /*
            txtTitulo.value = iv_title;
            txtDescripcion.value = iv_descripcion;*/
            accionFormulario = "MOD";

            $("#modal_agregar_ingreso_vehiculo_patio").modal("show");
        }
    });


}

function show_delete_ingreso_vehiculo_patio(id) {
    idIngresoVehiculoPatioToDelete = id;
    $("#modal_confirm_delete_ingreso_vehiculo_patio").modal("show");
}

btnDeleteIngresoVehiculoPatio.addEventListener('click', function () {
    let id = idIngresoVehiculoPatioToDelete;
    let token = $("#csrf-token-modal_confirm_delete_ingreso_vehiculo_patio").val();
    $.ajax({
        url: `/garita/ingreso_vehiculo_patio/delete/${id}`,
        type: 'POST',
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN': token },
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.respuesta == "true") {
                notif({
                    msg: "<b>Correcto:</b> Ingreso al patio eliminado!",
                    type: "success",
                    zindex: 99999
                });
                idIngresoVehiculoPatioToDelete = 0;
                $("#modal_confirm_delete_ingreso_vehiculo_patio").modal('hide');
                getIngresoVehiculoPatio();
            } else {
                notif({
                    type: "warning",
                    msg: "<b>Aviso: </b>No se ha podido eliminar el ingreso al patio!",
                    position: "right",
                    autohide: false,
                    zindex: 99999
                });
                $("#modal_confirm_delete_ingreso_vehiculo_patio").modal('hide');
            }
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        if (jqXHR.status === 0) {
            alert('Not connect: Verify Network.');
        } else if (jqXHR.status == 404) {
            alert('Requested page not found [404]');
        } else if (jqXHR.status == 500) {
            alert('Internal Server Error [500]. Intente nuevamente');
        } else if (textStatus === 'timeout') {
            alert('Time out error.');
        } else if (textStatus === 'abort') {
            alert('Ajax request aborted.');
        }
    });
});