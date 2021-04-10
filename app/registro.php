<?php
include_once "Ejercicios/Ejercicio23/usuario.php";
include_once "Ejercicios/Ejercicio23/archivos.php";

echo "Ejercicio 23 pegale a postman!\n";

$destino = "Usuarios/Fotos/".$_FILES["archivo"]["name"];
// move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino);
$esImagen = getimagesize($_FILES["archivo"]["tmp_name"]);

echo $esImagen[0];
if (!move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino)) {
    echo "Imposible mover el archivo.";
}

$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$mail = $_POST["mail"];
$ID = rand(1,10000);
$fecha =new DateTime('now');

$user = new Usuario($nombre,$clave,$mail,$ID,$fecha->format('Y-m-d'));
// $user = new Usuario("franco","111","g@g.com",$ID,$fecha->format('Y-m-d'));

$ok = Archivos::GuardarJson($user,"usuarios.json");


echo $ok;
?>
