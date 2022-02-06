<?php
require_once("Libro.php");
require_once("Ebook.php");
require_once("Instancias.php");
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Kevin Alberto Escobar Martínez</title>
  </head>
  <body>
    <nav id="Nav"> 
        <h1>Libreria</h1>
    </nav>
    <h2>
    
    <div id="table">
        <table>
        <tr>
            <td>
            <?php
            echo"Libro 1";
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro1->getTitulo();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro1->getAutor();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro1->getnoPaginas();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro1->getISBN();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro1->getPrecio();
            ?>
            </td>
            </tr>
        </table>
        <div>      
        <form  action="Compra.php" method="post"  target="ventana">
         <input type="submit" name="boton1" value="Comprar">
        </form>
        <iframe name="ventana" src="Compra.php">
        </iframe>
        <table>
        <tr>
            <td>
            <?php
            echo"Libro 2";
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro2->getTitulo();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro2->getAutor();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro2->getnoPaginas();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro2->getISBN();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro2->getPrecio();
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php
            echo$libro2->getformato();
            ?>
            </td>
        </table>
        <form  action="Compra.php" method="post"  target="ventana2">
         <input type="submit" name="boton2" value="Comprar">
        </form>
        <iframe name="ventana2" src="Compra.php">
        </iframe>
        </Tabla>
        <h2>Alumno: Kevin Alberto Escobar</h2>
  </body>
</html>

