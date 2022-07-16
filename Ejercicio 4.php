<?php
 
class Empleado{
 private $nombre;
 private$CodigodeEmpleado;
 private $sueldo;
 private $Puesto;
 private static $bono;

 public function Empleado($nuevonombre,$nuevocodigo,$nuevosueldo,$nuevopuesto){
    $this->nombre=$nuevonombre; 
    $this->codigo=$nuevocodigo;
    $this->sueldo=$nuevosueldo;
    $this->Puesto=$nuevopuesto;
 }

 public function generalReporte(){
    echo "Reporte generico";
 }

 public static function asignarbono($independiente){
    self::$bono= $independiente;
 }

public function getnombre(){
    return $this->nombre;
}
public function setnombre($nombre){
    $this->nombre=$nombre;
}
public function getCodigodeEmpleado(){
    return $this->CodigodeEmpleado;
}
public function setCodigodeEmpleado($CodigodeEmpleado){
    $this->CodigodeEmpleado=$CodigodeEmpleado;
}
public function getsueldo(){
    return $this->nombre;
}
public function setsueldo($sueldo){
    $this->sueldo=$sueldo;
}
public function getpuesto(){
    return $this->Puesto;
}
public function setpuesto($Puesto){
    $this->puesto=$Puesto;
}
}

?>