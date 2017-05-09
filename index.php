<?php
include('lib/Producto.php');
include ('lib/ConsultaProductos.php');

$oProducto1=new Producto();
$oProducto1->nombre='Nuevo Producto 001';
$oProducto1->codigo='001';

$oProducto2=new Producto("Nuevo producto 002",100000,"002");
$oProducto3=new Producto("Nuevo producto 003",250000,"003");

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
        $aProductos2=new ConsultaProductos();
        foreach ($aProductos2->Lista() as $oPro){
            echo "/Codigo: ".$oPro->codigo." /NOMBRE: ".$oPro->nombre." /PRECIO: ".$oPro->precio." /USD: ".$oPro->totalUSD();
            echo "<br>";
            
        }
        
        ?>
    </body>
</html>
