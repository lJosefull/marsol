<style>
	#input-home {
  background: #fff !important;
      padding: 7px;


 }
 .title-banner-home{
 	font-family: Roboto;
  font-size: 50px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.32;
  letter-spacing: -0.5px;
  text-align: center;
  color: #ffffff;
  margin-top: 100px;

 }
 .iconos-banner{
 	 margin-left: 78%;
    margin-top: 9px;
 }
  .banner-home{
          width: 100%;
          height: 590px;
          max-height: 590px;
          background-repeat:no-repeat;
          -o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
            background-image: url({{asset('image/BANNER-MARSOL-MAIL-RESERVATIONS.png')}});
            
        }
</style>

<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}"/>
<div class="row banner-home">
	<!-- <img class="responsive-img" src="{{asset('banner1.png')}}" alt="banner" style="width: 100%; position: absolute;"> -->
	<div class="row" style="position: relative;">
		
		<div class="container">	
				
				<div class="col s12 m12 l12">
					<h3 class="title-banner-home">Consulta tu viaje aquí</h3>
					<form class="col s12 m12 l12">
      <div class="row">
        <div class="input-field col s6 m6 l3">
          <input placeholder="Ingresa tu origen" id="input-home" type="text" class="validate input-home">
          <i  class="material-icons prefix iconos-banner" style="color:#f9e633;">location_on</i>
        </div>
        <div class="input-field col s6 m6 l3">
          <input placeholder="Ingresa tu destino"  id="input-home" type="text" class="validate input-home" >
          <i  class="material-icons prefix iconos-banner" style="color:#f9e633;">location_on</i>
          
        </div>
        <div class="input-field col s6 m6 l3">
          <input placeholder="Fecha de salida"  id="input-home" type="text" class="validate input-home">
          <i  class="material-icons prefix iconos-banner" style="color:#f9e633;">event_note</i>
        </div>
        <div class="input-field col s6 m6 l3">
          <input placeholder="Regreso (opcional)"  id="input-home" type="text" class="validate input-home">
          <i  class="material-icons prefix iconos-banner" style="color:#f9e633;">event_note</i>
        </div>
      </div>
    </form>
				</div>
		</div>
    
  </div>
        
</div>
<!-- s -->