var inicioApp = function(){
    var Aceptar = function(){
        var usuario=$("#txtUsuario").val();
        var clave=$("#txtClave").val();
        
        var parametros="opc=validaentrada"+
                       "&usuario="+usuario+
                       "&clave="+clave+
                       "&aleatorio="+Math.random();
        $.ajax({
            cache:false,
            type: "POST",
            dataType: "json",
            url: "php/validaentrada.php",
            data: parametros,
            success: function(response){
                if(response.respuesta == true){
                    alert("Bienvenido");
                }else{
                    alert("Usuario o Clave incorrecta");
                }

            },
            error: function(xhr,ajaxOptions,throwError){
                console.log(xhr);
               
            }
        });
    }
    $("#btnAceptar").on("click",Aceptar);
}

$(document).ready(inicioApp);