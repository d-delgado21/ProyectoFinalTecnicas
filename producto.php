<?php

include_once "db.php";
require_once 'datos_factura.php';
if (!isset($_POST["getId_factura"])) {
    $factura = DatosFactura::factura();
}
?>
</div>
<style>
table{
   width: 100%;
     border: 1px;
}
td,th{
  width: 33%;
border: 1px solid #000;
}


thead{
    font-weight: bold;

    text-align: center;
}


</style>
          <table cellspacing ="0">
          <thead>   
              <tr>
                      <th colspan="3">Factura</th>

              </tr>
          <tr>
         
          <th >Id</th>
          <th >Cliente</th>
          <th >Producto</th>
          <th >Cantidad</th>
          <th >Precio</th>
          <th >Total</th>
         
          
         
            
     </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                foreach ($factura as $key => $dato) :
                ?>
                  
                        <td><?= $dato->getId_factura() ?></td>
                        <td><?= $dato->getNombre_cliente() ?></td>
                        <td><?= $dato->getProductName() ?></td>
                        <td><?= $dato->getQuantity() ?></td>
                        <td><?= $dato->getPrice() ?></td>
                        <td><?= $dato->getTotalAftertax() ?></td>
                        </tr>
                        <td>
                        </td>
                   </tr>
                <?php

                endforeach;
                ?>
            </tbody>
        </table>
    </div>