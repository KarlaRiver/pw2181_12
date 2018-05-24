<?php
include 'conexiones.php';
function buscarusario(){
    $respuesta = false;
    $usuario=$_POST["usuario"];
    
    //Conectarnos al servidor de la BD.
    $con=conecta();
    $consulta="select usuario,clave,nombre from usuarios where usuario= '".$usuario."' limit 1";
    $resConsulta=mysqli_query($con,$consulta);
    $nombre="";
    $clave="";

    if(mysqli_num_rows($resConsulta) > 0){
        $respuesta = true;
        while($regConsulta=mysql_fetch_array($resConsulta)){
            $nombre = $regConsulta["nombre"];
            $clave = $regConsulta["clave"];
        }
    }
    //Array asociativo
    $salidaJSON = array('respuesta' => $respuesta ,
                        'nombre'   => $nombre,
                        'clave'    => $clave);
    print json_encode($salidaJSON);
}
$opc=$_POST["opc"];
switch ($opc) {
    case 'buscarUsuario':
         buscarusuario();
        break;
        
    default:
         # code...
        break;
}
?>