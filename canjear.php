<?php

$codigo = $_POST['codigo'];
$con = new mysqli('localhost','weobox','26390042Po','visor-promo');
if($con->connect_error){
    die("Error en conexión con base de datos: \n". $con->connect_error);
} else{
}

$sql = "SELECT * FROM codigo WHERE codigo = $codigo";
$res = $con->query($sql);
$valor = "";

if($res === true){
    if($result->num_rows > 0){
    
        $row = $result->fetch_assoc();
        $valor = $row['descripción'];
    
    } else {
        $valor = "El código que haz intentado canjear ha sido utilizado o no existe";
    }
}else{
    $valor = "Ha ocurrido un error";
}

$con->close();

header("Location:resultado.php?valor=".$valor);


?>