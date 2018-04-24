var inicia = function(){
    //JSON = JavaScript Object Notation
    
     var nuevo = function(){
        $.ajax({
            url: 'https://randomuser.me/api/',
            dataType: 'json',
            success: function(data) {
                $("#nombre").html(data.results[0].name.first+" "+data.results[0].name.last);
             //console.log(data);
             //Para la foto;D
                $("#foto").attr("src",data.results[0].picture.large)
            }
          });
     }
     $("#nuevo").on("click",nuevo);
}

$(document).ready(inicia);

