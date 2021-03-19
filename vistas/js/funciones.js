
// FUNCION PARA CARGA LA WEB MUESTRE LISTADO DE PRODUCTOS.
$(document).ready(function() {
    productos();
    
  
  });
  
  
  
  function productos() {
    listarproductos();
    tituloProductos();
    listarServicios();
    
  }

    
 

function tituloProductos(){

  for( var i = 0; i<tituloProducto.length; i++){
  $('#tituloProductos').append(
    '   <h2 >'  + tituloProducto[i].titulo.toUpperCase() +  '  </h2>' +

    '  <p class="lead text-muted text-center ">'+ tituloProducto[i].subtitulo.toUpperCase()  + ' </p>' 

)
}
    }



  function listarproductos() {
    for (var i = 0; i < BaseDeDatos.length; i++) {
         $('#mostrarProductos').append(
             '<div class="col-lg-3 col-sm-3 col-xs-3  mb-4">' +
             '<div class="card border border-dark">' +
             ' <div class="card-header bg-white  p-4">'+
             
             '<h4 class="card-title">' +
             '<a href="#" style="text-decoration:none;color:black">' + BaseDeDatos[i].nombre + '</a>' +
             '</h4>' +
             '<p class="card-text dark">' + '<del class="font-weight-bold"> $ ' + BaseDeDatos[i].precioA + '</del>'+' '+ BaseDeDatos[i].porcentaje_descuento +'</p>' +
             '<h2  class="display-5 font-weight-bold">$ ' + BaseDeDatos[i].precio + '</h2>' +
             
             
             
             
             '</div>'+
             '<div class="card-body">' +
             
             '<p class="card-text dark font-weight-bold">' + BaseDeDatos[i].descripcion + '</p>' +
             '<ul class="list-unstyled">'+'<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_1+'</small>'+'</li> ' + 
            
             '<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_2+'</small>'+'</li> ' 
             +'<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_3+'</small>'+'</li> ' 
             +'<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_4+'</small>'+'</li> ' 
             +'<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_5+'</small>'+'</li> ' 
             +'<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_6+'</small>'+'</li> ' 
             +'<li class="mb-2">'+'<small>'+BaseDeDatos[i].descripcion_7+'</small>'+'</li> ' +
             
             
             
             
             '</ul>' +
             '</div>' +
             '<div class="card-footer bg-light  p-4 text-center">' +
             ' <a id="btnBlack" href="pagar.php" class="btn btn-danger d-block mb-3">Contratar <i class="icon ion-md-arrow-forward  ml-2"></i></a>' +
             '<small class="text-muted">*Si tiene dudas contactenos.</small>'+
             '</div>' +
             '</div >' +
             '</div >'
         )
     }
    
 }
  
      
  
       
 function listarServicios() {
  for (var i = 0; i < servicios.length; i++) {
       $('#mostrarServicios').append(
           '<div class="col-lg-4 col-sm-3 col-xs-3  mb-4 py-4">' +
           
          
          
           ' <div class="text-center">'+
           ' <img  " src="' + servicios[i].icono + '" >'    +
           '</div>'+'<hr>'+
           '<div class=""  py-4">' +
           '<h3 class="card-title text-center">' +  servicios[i].titulo  +'</h3>' +
         
           '<p class="card-text dark">'  + servicios[i].parrafo + 
           
           
    

           '</div>' +
           '</div >' 
       )
   }
  
}
