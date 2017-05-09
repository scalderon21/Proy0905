<?php
//include 'Producto';

class ConsultaProductos{
    
    public function Conexion(){
        $miconn= new mysqli("localhost","root","avaras08","ventas");
        if($miconn->connect_errno){
            return "Fallo conneccion";
            
        }
        
    }
    
    public function Lista(){
        $sql="SELECT * FROM producto";
        /*Uso del metodo conexion*/
        $resultado = $this->Conexion()->query($sql);
        /*Obtencion de los elementos*/
        $i=0;
        while($fila = $resultado->fetch_assoc()){
            $oProducto = new Producto($fila("nombre"),$fila("precio"),$fila("codigo"));
            $aProductos[$i] = $oProducto;
        }
        return $aProductos;
    }
    
}
