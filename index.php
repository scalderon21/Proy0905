<?php
include('lib/Producto.php');

$oProducto1=new Producto();
$oProducto1->nombre='Nuevo Producto 1';
$oProducto1->codigo='001';

$oProducto2=new Producto("Nuevo producto 002",0,"002");
$oProducto3=new Producto("Nuevo producto 003",0,"003");

$aProductos[0]=$oProducto1;
$aProductos[1]=$oProducto2;
$aProductos[2]=$oProducto3;


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($aProductos as $oPro){
            echo $oPro->codigo." ".$oPro->nombre;
            echo "<br>";
            
        }
        
        ?>
    </body>
</html>
