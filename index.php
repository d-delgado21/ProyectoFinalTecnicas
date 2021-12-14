<?php
require_once 'nav1.php';
require_once 'Estilo.php';
?>

<div class="container ">
    <div class="row">
        <div class="col-md-10 mx-auto mt-5">


            <h1 class="jumbotron">Sistema farmacia</h1>
            <div class="card-body">

                <br><br>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th> Añadir cliente</th>
                            <th>Vender articulos</th>
                            <th>Ver ventas </th>

                            </th>
                        </tr>
                        <tr>
                            <th>
                                <button class="btn btn-outline-primary" onClick="location.href='AñadirCliente.php'">Añadir</button>
                            </th>
                            <th>
                                <button class="btn btn-outline-primary" onClick="location.href='AñadirVenta.php'">Vender</button>
                            </th>
                            <th>
                                <button class="btn btn-outline-primary " onClick="location.href='Ver.php'">Ver</button>
                            </th>


                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>