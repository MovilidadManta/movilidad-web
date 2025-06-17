﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
</head>
<style>
.color-activar {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<body>
    <div>
        <table border="1" cellpadding="2" cellspacing="2" style="100%">
            <tr>
                <td style="background: white;" width="100%" colspan="2">
                    <h2 align="center"><img align="center" width="70px" height="70px" ;
                            src="https://web.movilidadmanta.gob.ec/wp-content/uploads/2022/06/LOGO-PAGINA-WEB.png"></h2>
                </td>
            </tr>
            <tr>
                <td align="left" width="100%">
                    <br>Tengo a bien solicitar la creación de usuarios en los sistemas internos del siguiente servidor:

                    <table>
                        <tr>
                            <td><strong>CI:</strong></td>
                            <td>{{$cedula}}</td>
                        </tr>
                        <tr>
                            <td><strong>Apellidos y Nombres:</strong></td>
                            <td>{{$nombres}}</td>
                        </tr>
                        <tr>
                            <td><strong>Teléfono:</strong></td>
                            <td>{{$telefono}}</td>
                        </tr>
                        <tr>
                            <td><strong>Título:</strong></td>
                            <td>{{$titulo}}</td>
                        </tr>
                        <tr>
                            <td><strong>Dirección:</strong></td>
                            <td>{{$direccion}}</td>
                        </tr>
                        <tr>
                            <td><strong>Jefatura:</strong></td>
                            <td>{{$jefatura}}</td>
                        </tr>
                        <tr>
                            <td><strong>Cargo:</strong></td>
                            <td>{{$cargo}}</td>
                        </tr>

                    </table>
                    <br>Segura de contar con su gentil y pronta atención me suscribo.
                    <br>
                    <h5>Nota: No responda a este correo electrónico. Si tiene alguna duda, póngase en contacto con
                        nosotros mediante el correo tics@movilidadmanta.gob.ec</h5>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>