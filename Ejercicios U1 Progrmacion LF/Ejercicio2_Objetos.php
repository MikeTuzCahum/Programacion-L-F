<?php

	class Persona {

	//atributos
	public $edad;
	public $altura;
    public $peso;
	
	//constructor

	public Persona($edad, $altura, $peso){
		$this->edad =$edad;
		$this->altura =$altura;
		$this->peso =$peso;
	}
	// Sobrecarga de Constructores 
	public Persona(){

	}

	//Metodos

	//getters
	public function getEdad(){
		return $this->edad;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function getAltura(){
		return $this->altura;
	}


    //setters
	public function setEdad($value){
		$this->edad=$value;
	}

	public function setAltura($value){
		$this->altura=$value;
	}

	public function setPeso($value){
		$this->peso=$value;
	}

	//Funciones
	public function corpora(){
		return $this->peso / ($this->altura * $this->altura);

	}

}
 
?>
 <!DOCTYPE html>
<html>
<head>
<title>Ejercicio Programacion Orientado a Objetos</title>
</head>
 
<body>
 <?php
 //Instancia
$titere= new Persona();

//asignar valores a las propiedades del objeto
$titere->setEdad(28);
$titere->setAltura(1.75);
$titere->setPeso(65);

echo"<fieldset>"
echo "<br/>Nombre: ".$titere->nombre;
echo "<br/>Edad: ".$titere->edad;
echo "<br/>Altura: ".$titere->altura;
echo "<br/>Peso: ".$titere->peso;
echo "<br/>IMC: ".$titere->corporal();
echo"</fieldset>"
 
 ?>

 
</body>
</html>