<?php
require_once("Articulo.php");
require_once("Libro.php");
//Herencia de Libro
class Ebook extends Libro implements Articulo{

    //Abtstracción
    //Abstracción encontrar características (atributos) de una entidad de la realidad

     //ENCAPSULAMIENTO
    //Atributos con modificadores de acceso
    protected $formato;
    public function __construct  ($titulo,$autor,$noPaginas,$ISBN,$precio,$formato){
        
        parent::__construct($titulo,$autor,$noPaginas,$ISBN,$precio);
        $this->formato = $formato;
    
       }


    
    //implementación de la interfaz (Polimorfismo)
    public function entrega(){
        echo"El libro será enviado a su correo";
    }
    //Metodos
    public function getPrecio(){
        return $this -> precio;
    }

    public function getTitulo(){
        return $this -> titulo;
    }
    public function getISBN(){
        return $this -> ISBN;
    }
    public function getAutor(){
        return $this -> autor;
    }

    public function getnoPaginas(){
        return $this -> noPaginas;
    }
    public function getformato(){
        return $this -> formato;
    }

    }

?>