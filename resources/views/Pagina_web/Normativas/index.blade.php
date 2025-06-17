@extends('Administrador.Layout.app_pagina_web')
@section('css')
<style>
.breadcrumb-area {
    background-image: url(./Imagenes/banner.jpg);
    background-attachment: scroll;
}

.flex {
    display: flex !important;
}

.jcontent_end {
    justify-content: end;
}

.w2em {
    width: 2em;
}

.pdf {
    color: #f44336 !important;
    font-size: 35px !important;
}

.jcontent_end {
    justify-content: center !important;
}
</style>

<!-- imgaen 1920x300 px-->

@endsection


@section('content')
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-center">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-heading">

                        <h2>NORMATIVAS</h2>

                    </div>

                    <ol class="breadcrumb-list">
                        <li></li>
                        <li class="active">Inicio/Normativas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>

<section id="post-section" class="post-section av-py-default-100 blog-page">
    <div class="av-container width-t-100-n">
        <div class="av-columns-area wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div id="av-primary-content" class="av-column-12 wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="rt-container-fluid rt-tpg-container tpg-shortcode-main-wrapper rt-img-holder(height: 230px;)"
                    id="rt-tpg-container-985975327" data-layout="layout1" data-grid-style="even" data-desktop-col="3"
                    data-tab-col="2" data-mobile-col="1" data-sc-id="874">
                </div>
                <div data-title="Loading ..." class="rt-row rt-content-loader layout1 tpg-even ">
                    <div class="rt-col-md-12 rt-col-sm-6 rt-col-xs-12 even-grid-item rt-grid-item margin-b-no"
                        data-id="1943">
                        <div class="rt-holder ">
                            <div class="rt-detail">
                                <div class="post-meta-user  "><span class="date"><i class="far fa-calendar-alt"></i>A
                                        continuación se muestra un listado de las normativas de Movilidad EP.</span>
                                </div>
                                <div class="tpg-excerpt">
                                    <table class="responsive">
                                        <tbody>
                                            <tr>
                                                <td width="80%">
                                                    <span>Código legal municipal</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank" href="/normativas/codigo_legal_municipal.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="80%">
                                                    <span>Código Orgánico de Organización Territorial, COOTAD</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="https://www.defensa.gob.ec/wp-content/uploads/downloads/2016/01/dic15_CODIGO-ORGANICO-DE-ORGANIZACION-TERRITORIAL-COOTAD.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="80%">
                                                    <span>Constitución de la República del Ecuador</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="https://www.oas.org/juridico/pdfs/mesicic4_ecu_const.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="80%">
                                                    <span>Ley Orgánica de Transporte Terrestre, Tránsito y Seguridad
                                                        Vial.</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="/normativas/LEY-ORGANICA-DE-TRANSPORTE-TERESTRE-TRANSITO-Y-SEGURIDAD-VIAL.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="80%">
                                                    <span>Ordenanza que regula la ocupación del espacio público en el
                                                        cantón </span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="https://manta.gob.ec/db/municipio/Ordenanzas/2020/ORDENANZA%20021-2020%20SUSTITUTIVA%20DE%20LA%20ORDENANZA%20QUE%20REGULA%20EL%20USO%20DEL%20ESPACIO%20PUBLICO%20COVID-19%20%281%29.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="80%">
                                                    <span>Ley Orgánica de Empresas Públicas, LOEP</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="/normativas/Ley-Orgánica-de-Empresas-Públicas-LOEP.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="80%">
                                                    <span>Ley Orgánica del Servicio Público</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank" href="/normativas/Losep _Actualizado.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="80%">
                                                    <span>Reglamento a la Ley Orgánica del Servicio Público</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank" href="/normativas/REGLAMENTO_LOSEP 1.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="80%">
                                                    <span>Acuerdo ministerial 013-2022 MTOP</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="/normativas/ACUERDO MINISTERIAL 013-2022 MTOP.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="80%">
                                                    <span>Resolución Administrativa 016-2024</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="/normativas/RESOLUCION 016-2024 - INSTRUCTIVO COMPLEMENTARIO LETRA G ART. 73 DEL REGLAMENTO PLAN CARRERA_ABB_3 (1) (1).pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="80%">
                                                    <span>Plan de Movilidad</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank" href="/normativas/Plan de Movilidad Manta.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="80%">
                                                    <span>Diagnostico P Movilidad C Manta</span>
                                                </td>
                                                <td class="flex jcontent_end">
                                                    <a target="_blank"
                                                        href="/normativas/Diagnostico P Movilidad C Manta.pdf">
                                                        <i class="fa fa-file-pdf-o pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

@section('js')

@endsection