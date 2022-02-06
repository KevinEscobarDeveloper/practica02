<?php 
require_once("Articulo.php");

//clase
//Definición de las caracteristicas de nuestra entidad "libro"
    class Libro implements Articulo{

        //Abtstracción
        //Abstracción encontrar características (atributos) de una entidad de la realidad

        //ENCAPSULAMIENTO
        //Atributos con modificadores de acceso
        protected $titulo;
        protected $autor;
        protected $noPaginas;
        protected $ISBN;
        protected $precio; 

        //constructor para generar la instancia
   public function __construct($titulo,$autor,$noPaginas,$ISBN,$precio){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->noPaginas = $noPaginas;
    $this->ISBN = $ISBN;
    $this->precio = $precio;

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

    //implmenetación de la interfaz (polimorfismo)
    public function entrega(){
        echo"El libro será enviado a su domicilio";
    }
}
?>