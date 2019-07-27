<style>	
		.title-logos{
		object-fit: contain;
  font-family: Roboto;
  font-size: 20px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: -0.2px;
  text-align: center;
  color: #7b7b7b;
  margin-top:29px;	
		}
	.fondo-logos{
		background: #fff;
		    border-bottom: 15px solid #f9e633;
		    border-radius: 8px;
		        margin-top: 23px;
		        width: 100%;
		        margin-right: 10px;
		        

		        

	}
	.ver-mas{
		font-family: Roboto;
  font-size: 12px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.67;
  letter-spacing: 0.18px;
  text-align: center;
  color: #66beb2;
	}
	.vl {
  border-left: 3px solid #f4f4f4;
  height: 120px;
  margin-top: 38px;
}
.rutas{
	object-fit: contain;
  font-family: Roboto;
  font-size: 50px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.2;
  letter-spacing: normal;
  text-align: left;
  color: #00927f;
}
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 100%;
  height: 600px;
  margin-bottom:-42px;
}

/* Style the buttons inside the tab */
/*.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;

  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  font-size: 20px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: -0.2px;
  text-align: left;
  color: #7b7b7b;
 
}*/

/* Change background color of buttons on hover */
/*.tab button:hover {
  background-color: #ddd;
}

 Create an active/current "tab button" class 

*/
/* Style the tab content  aqui estas llamando una clase y abajo un id  activo esta bien asi porq creo q este deberia ser un id entonc */
.activo {
  background-color: #ccc; 
}
.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 100%;
  border-left: none;
  height: auto;
}
.title-destino{
  font-family: Roboto;
  font-size: 30px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.3;
  letter-spacing: -0.3px;
  text-align: left;
  color: #66beb2;
}
.sub-tilte{
  object-fit: contain;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 500;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.33;
  letter-spacing: 0.23px;
  text-align: left;
  color: #ffffff;
}
.salida{
  object-fit: contain;
  font-family: Roboto;
  font-size: 15px;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.67;
  letter-spacing: -0.15px;
  text-align: left;
  color: #7b7b7b;
  font-weight: bold;
  color: #33a899;

}
.destino{
  object-fit: contain;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.67;
  letter-spacing: -0.15px;
  text-align: left;
  color: #7b7b7b;

}
.destinations{
   font-family: Roboto;
  font-size: 20px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: -0.2px;
  text-align: left;
  color: #7b7b7b;
  cursor: pointer;
}

</style>

<div class="container-full" style="    margin-top: -20px;" >

<div class="row">
  
    <div class="col s12 m4 l4" style="margin-left:-11px;">
        <div class="tab">
          <div class="row">
            <div class="col s1 m1 l2"></div>
            <div  class="col s12 m6 l9">
               @foreach($Routes as $Route)
               <!-- Route click al div obtengo el data-id y con eso hago la consulta -->
               <!-- este div  -->

               <div id="{{$Route->id}}"  data-id="{{$Route->id}}" class="tabs-route Route" >
          <h3 class="tablinks  destinations" data-id="{{$Route->id}}"  id="defaultOpen" ><i class="material-icons" style="color: #33a899;">location_on</i>{{$Route->slug}}</h3>
          <div style="    border-width: 1px;
    border-style: dashed;
    border-color: #33a899;"></div>
    </div>
          @endforeach
            </div>
            <div class="col s1 m1 l1" ></div>
          </div>
         
          
        </div>

    </div>
    <div class="col s12 m8 l8">
        
        <div id="" class="tabcontent">
          <h3 class="title-destino">Barranquilla-Cartagena</h3>
           <div class="row" style="margin-left: 0px;">
            <div id="img" class="col s12 m9 l10">
            
            </div>
            <div class="col  m3 l2"></div>
          </div>

          
          <div class="row sub-tilte-route" style="margin-left: 10px;">
            
            
          </div>
          <div class="row" style="margin-left: 10px;">
            <div class="col s12 m9 l10" style=" max-width: 785px;">
                <table class="striped" style="width: 102%;">
                  <tbody id="tbody">
                   
                    
                  </tbody>
                </table>
            </div>
            <div class="col  m3 l2"></div>
          </div>
         
        </div>
   <div class="row">
     <div class="col s4 m4 l4"></div>
     <div class="col s4 m4 l4"> <div class="preloader-wrapper big">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
       </div>
     <div class="col s4 m4 l4"></div>
   </div>     



    </div>

</div>

</div>



<script type="text/javascript">
 
 //funcion que ejecuto al abrir la pagina  ajax 
$(document).ready(function() {

   

     $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
    }); 
//mando un metodo post
        var id=1;
        $.ajax({

           type:'post',
           url:'routeone',
          dataType:'json',
           data:{id:id},
           success:function(data){
              $( ".preloader-wrapper" ).removeClass('activo');

            var img = $('<img id="Destinationimg" class="responsive-img">'); //Equivalent: $(document.createElement('img'))
img.attr('src',data.img);
img.appendTo('#img');
  $('#tbody').empty();
            $("title-destino").text(data.name);
              $(".sub-tilte-route").append('<div class="col s12 m9 l10"style="background:#33a899;height:45px; max-width: 785px;"><p class="sub-tilte">Rutas y horarios '+data.name+' </p></div><div class="col  m3 l2"></div>');
          
            $('#tbody').empty();
          

             


// lunes, 26 de diciembre de 2050 9 a. m.
     $.each(data.route, function(index,route){


               var fecha = new Date(route.T_salida);
var fecha_ent = new Date(route.T_entrada);
              var options = { day: "numeric", weekday: "long", year: "numeric", month: "long", hour: "numeric",minute:"numeric", hour12:"false"};
              fecha.toLocaleDateString("es-ES", options)



      $('#tbody').append('<tr><td class="salida"> <i class="material-icons">directions_bus</i> Entrada: </td><td class="destino">'+  fecha_ent.toLocaleDateString("es-ES", options)
+'</td> <td class="salida"> <i class="material-icons">directions_bus</i> Salida: </td><td class="destino">'+ fecha.toLocaleDateString("es-ES", options)+' </td></tr>');
 

            });
           },
           error:function(data){

           console.log("no funciona");

           }


        });
});



 
  $(document).on('click', '.Route', function(event) {


          event.preventDefault();
         

       $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    }); 
    var id = $(this).data('id');
             //color class
             //$( this ).addClass('activo');
             //color class fin
        //limpiar
        $('.title-destino').empty();
        $('.sub-tilte-route').empty();
        $('#tbody').empty();
        //fin limpiar
//preloader
  $( ".preloader-wrapper" ).addClass('active');
        $.ajax({

           type:'post',
           url:'route',
          dataType:'json',
           data:{id:id},
           success:function(data){

//este codigo es de la tabla 
          
              $( ".preloader-wrapper" ).removeClass('active');
              $("title-destino").text(data.name);
              //comienzo tabla
              $(".sub-tilte-route").append('<div class="col s12 m9 l10"style="background:#33a899;height:45px; max-width: 785px;"><p class="sub-tilte">Rutas y horarios '+data.name+' </p></div><div class="col  m3 l2"></div>');

              //fin de tabla 
              //nombre de la ruta
              $(".title-destino").text(data.name);
              //find nombre de la ruta
    
              $(".sub-tilte-route").append('<p class="sub-tilte">Rutas y horarios '+data.name+' </p>');

              $('#Destinationimg').attr('src',data.img);


// lunes, 26 de diciembre de 2050 9 a. m.
     $.each(data.route, function(index,route){

//formato de fecha simple para que se vea de la manera que me lo piden en el diseño asi : lunes, 26 de diciembre de 2050 9 a. m.
               var fecha = new Date(route.T_salida);
    var fecha_ent = new Date(route.T_entrada);
              var options = { day: "numeric", weekday: "long", year: "numeric", month: "long", hour: "numeric",minute:"numeric", hour12:"false"};
              fecha.toLocaleDateString("es-ES", options)



      $('#tbody').append('<tr><td class="salida"> <i class="material-icons">directions_bus</i> Entrada: </td><td class="destino">'+  fecha_ent.toLocaleDateString("es-ES", options)
+'</td> <td class="salida"> <i class="material-icons">directions_bus</i> Salida: </td><td class="destino">'+ fecha.toLocaleDateString("es-ES", options)+' </td></tr>');
 

            });
           },
           error:function(data){

           console.log("no funciona");

           }


        });

        });

</script>