<?php
require_once("Libro.php");
require_once("Ebook.php");
require_once("Instancias.php");


$boton1="";
$boton2="";

if(isset($_POST['boton1']))$boton1=$_POST['boton1'];
if(isset($_POST['boton2']))$boton2=$_POST['boton2'];

if($boton1){
echo$libro1->entrega();
}

if($boton2){
echo$libro2->entrega();
}

?>

