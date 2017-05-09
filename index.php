<?php
include('lib/Producto.php');

$oProducto=new Producto();

$oProducto->nombre='Nuevo Producto';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $oProducto->nombre;
        
        
        ?>
    </body>
</html>
