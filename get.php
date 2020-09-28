<?php
    declare(strict_types=1);//Utiliza nomenclatura a partir de la version 7 de php    //debe ser la primera siempre si queremos declararla
    ini_set('display_errors','On');

    /*
    $variable="Esto es un string";
    $etiqueta1="<h1>";
    $etiqueta2="</h1>";

    function suma_cad(string $cad1, string $cad2){
        return $cad1.$cad2;
    }

    $cadena=suma_cad($etiqueta1,$variable);
    $resultado=suma_cad($cadena,$etiqueta2);

    echo $resultado;
    -----------------------------------------------------------------------------------------------------------------------ej2
    */
    if(isset($_GET['nombre'])){
        $nombre=$_GET['nombre'];
        echo "Tu nombre es ".$nombre."<br><br>";
        var_dump($nombre."<br><br>");
    }else{
        echo "No has establecido el nombre";
    }

    var_dump($_SERVER['REQUEST_URI']);
    
