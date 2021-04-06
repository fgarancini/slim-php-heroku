<?php
/*
// Aplicación No 21 ( Listado CSV y array de usuarios)
// Archivo: listado.php
// método:GET
// Recibe qué listado va a retornar(ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos
// usuarios).
// En el caso de usuarios carga los datos del archivo usuarios.csv.
// se deben cargar los datos en un array de usuarios.
// Retorna los datos que contiene ese array en una lista
// <ul>
// <li>Coffee</li>
// <li>Tea</li>
// <li>Milk</li>
// </ul>
// Hacer los métodos necesarios en la clase usuario
*/
include_once "usuario.php";
include_once "archivos.php";


$listadoAMostrar = $_GET["listado"];

switch ($listadoAMostrar) {
    case 'usuarios':
        echo "usuarios\n";
        $data = Archivos::LeerCsv("usuarios.csv");
        $temp = Usuario::DibujarListado($data);
        echo $temp;
        break;
    default:
        echo "Listado inexistente";
        break;
}


// var_dump(Archivos::LeerCsv());


?>