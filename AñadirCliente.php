
<?php
       require_once 'nav2.php';
       require_once 'Estilo.php';     
?>

<div class="container">
    <div class="card col-sm-6 mx-auto mt-5">
        <div class="card-header">Añadir cliente</div>
        <div class="card-body">
            <h4 class="card-titlw">Digite Los Datos Solicitados</h4>

            <form action="cliente.php" method="POST" >
               
                
                <div class="form-group">

                    <label for="Cedula_cliente" class="form-label mt-4">Numero de Cédula:</label>
                    <input type="cedula" class="form-control" id="Cedula_cliente" name="Cedula_cliente" placeholder=" #########"  required >
                    
                    
                </div>
                <div class="form-group">
                    <label for="Nombre_cliente" class="form-label mt-4">Nombre Completo:</label>
                    <input type="text" class="form-control" id="Nombre_cliente" name="Nombre_cliente" placeholder=" Nombre-Apellido"  required >
                </div>

                <div class="form-group">
                    <label for="Edad_cliente" class="form-label mt-4">Edad:</label>
                    <input type="edad" class="form-control" id="Edad_cliente" name="Edad_cliente" placeholder=" ###"required >
                    
                </div>
               
                <button type="submit" class="btn btn-primary ">Añadir Datos</button>
            </form>
            <br><br><br>

        </div>    
        <div class="card-footer">
            2021
        </div>
    </div>
</div>