<?php
include('lib/Producto.php');

$oProducto=new Producto();

$oProducto->nombre='Nuevo Producto';
$oProducto->codigo='001';

$aProductos[]
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $oProducto->codigo." ".$oProducto->nombre;
        
        
        ?>
    </body>
</html>
