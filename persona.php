<?php

 class persona{

 protected $nombre;
 protected $apellido;
 protected $fecha_nacimiento;


 function __construct($nom,$ape,$fech){
 $this->nombre = $nom;
 $this->apellido = $ape;
 $this->fecha_nacimiento = $fech;
 } 

 private function calcular_edad($fech)
 {
	list($dia,$mes,$anio) = explode("/",$fech);
        return(date("md") < $mes.$dia ? date("Y")-$anio-1 : date("Y")-$anio);
 }

 public function imprime_caracteristicas()
 {
 	echo "Nombre: " . $this->nombre . "<br>";
 	echo "Apellido: " . $this->apellido . "<br>";
 	echo "Edad: " . $this->calcular_edad($this->fecha_nacimiento) . "<br>";
 }

 }
 ?>