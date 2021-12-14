<?php
        require_once 'nav2.php';
        require_once 'Estilo.php';
      
        require_once 'datos_factura.php';

       if (!isset($_POST["getId_factura"])) {
           $listadoDatos = DatosFactura::listarTodos();
       }
?>

<body>
            <div class="container col-md-10 mx-auto mt-5">
            <form class="form-inline" method="POST">
                
            </form>
            <div class="container col-md-10 mx-auto mt-5">
        <h4>Registro de facturas</h4>
        <div>
        <table class="table table-hover">
        <table class="table table-hover">
        </div>
          <table class="table table-hover">
          <table class="table table-hover">
          <table class="table table-hover">
          <table class="table table-hover">
          <tr class="table-active">
          <th scope="row">Id</th>
          <th scope="row">Cliente</th>
          <th scope="row">Producto</th>
          <th scope="row">Cantidad</th>
          <th scope="row">Precio</th>
          <th scope="row">Total</th>
          <th style="width:80px;">
          
          <th scope="row"></th>
          </div>
     </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listadoDatos as $key => $dato) :
                ?>
                  
                        <td><?= $dato->getId_factura() ?></td>
                        <td><?= $dato->getNombre_cliente() ?></td>
                        <td><?= $dato->getProductName() ?></td>
                        <td><?= $dato->getQuantity() ?></td>
                        <td><?= $dato->getPrice() ?></td>
                        <td><?= $dato->getTotalAftertax() ?></td>
                        <td>
                        <button class="btn btn-secondary" onclick="location.href='./pdf.php?'">Imprimir</button>
                        <button class="btn btn-danger" onclick="location.href='./borrar.php?nombre_cliente=<?= $dato->getNombre_cliente() ?>'">Borrar</button>

                        </td>
                   </tr>
                <?php

                endforeach;
                ?>
            </tbody>
        </table>
    </div>
 