<?php
    require_once 'nav2.php';
    require_once 'Estilo.php';
    require_once 'Datos_cliente.php';

    if (!isset($_POST["getNombre_cliente"])) {
        $cliente = DatosCliente::nombre();
    }
?>

<div class="container content-invoice">

<div class="load-animate animated fadeInUp">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <h2 class="title">Ventas </h2>
    	
</div>		    		
</div>
    
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<form action="factura.php"  method="POST" >
    <table class="table table-bordered table-hover" id="invoiceItem">	
        <tr>
            <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
            
            <th width="15%">Cliente</th>
            <th width="20%">Nombre Producto</th>
            <th width="15%">Cantidad</th>
            <th width="15%">Precio</th>							
            <th width="15%">Total</th>	
        </tr>							
        <tr>
            <td><input class="itemRow" type="checkbox"></td>

            <td><select type="text" name="nombre_cliente" id="nombre_cliente_1" class="form-control" autocomplete="off">
        <option value="0">Seleccione</option>
        <?php

foreach ($cliente as $key => $dato) :
    
    echo '<option value="'.$dato->getNombre_cliente().'">'.$dato->getNombre_cliente().'</option>';
    
   endforeach;
         ?>
      </select></td>
            
            <td><input type="text" name="productName" id="productName_1" class="form-control" autocomplete="off"></td>			
            <td><input type="number" name="quantity" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
            <td><input type="number" name="price" id="price_1" class="form-control price" autocomplete="off"></td>
            <td><input type="number" name="total" id="total_1" class="form-control total" autocomplete="off"></td>
        </tr>						
    </table>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    
</div>
</div>
<div class="row">	
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    <h3>Notas: </h3>
    <div class="form-group">
        <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Notas"></textarea>
    </div>
    <br>
    <div class="form-group">
        
    <button type="submit" class="btn btn-primary ">Añadir Datos</button>				
    </div>
    
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <span class="form-inline">
        <div class="form-group">
            <label>Subtotal: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal" readonly>
            </div>
        </div>
        <div class="form-group">
            <label>Tasa Impuesto: &nbsp;</label>
            <div class="input-group">
                <input value="13" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tasa de Impuestos" readonly>
                <div class="input-group-addon" >%</div>
            </div>
        </div>
        <div class="form-group">
            <label>Monto Inpuesto: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Monto de Impuesto" readonly>
            </div>
        </div>							
        <div class="form-group">
            <label>Total: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total" readonly>
            </div>
    
        </div>
    </span>
</div>
</div>
<div class="clearfix"></div>		      	
</div>
	
