<?php
include 'conexiones.php';
function borrarusuario(){
    $respuesta = false;
    $usuario=$_POST["usuario"];
    
    //Conectarnos al servidor de la BD.
    $con=conecta();
    $consulta=sprintf("delete from usuarios where usuario =%s",$usuario);
    mysqli_query($con,$consulta);
    if(mysqli_affected_rows($con)>0){
        $respuesta = true;
    }
    //Array asociativo
    $salidaJSON = array('respuesta' => $respuesta);
    print json_encode($salidaJSON);
}
$opc=$_POST["opc"];
switch ($opc) {
    case 'borrarUsuario':
         borrarusuario();
        break;
        
    default:
         # code...
        break;
}
?>