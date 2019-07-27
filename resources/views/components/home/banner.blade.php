
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<style>
	
  .banner-home{
          width: 100%;
          height: 490px;
          max-height: 490px;
          background-repeat:no-repeat;
          -o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
            background-image: url({{asset('banner1.png')}});
            
        }
        
</style>






<div class="row banner-home">
	<!-- <img class="responsive-img" src="{{asset('banner1.png')}}" alt="banner" style="width: 100%; position: absolute;"> -->
	<div class="row" style="position: relative;">
		
		<div class="row">	
				<div class="col l4"></div>
				<div class="col l8">
					<h3 class="title-banner-home">{{ trans('welcome.CONSULT') }}</h3>
					<form class="col s12 m12 l12">
      <div class="row" style="    margin-bottom: 0px;">
        <div class="input-field col s6 m6 l3">
          
               <select id="mibuscador" class="browser-default" style="background: #fff;height: 60px;-webkit-appearance: inherit;-moz-appearance: none;appearance: none;">
          <option value="" disabled selected>{{ trans('welcome.selects') }}</option>
          @foreach($Destinations as $Destination)
           <option value="{{$Destination->id_municipio}}">{{$Destination->municipio}}</option>
          @endforeach
          </select>
           <i  class="material-icons prefix iconos-banner" style="color:#f9e633;cursor:pointer;margin-left: 72%;">location_on</i>
            
        </div>  
      
         <div class="input-field col s6 m6 l3">
          
               <select id="mibuscador" class="browser-default" style="background: #fff;height: 60px;  -webkit-appearance: inherit;">
          <option value="" disabled selected>{{ trans('welcome.selects') }}</option>
          @foreach($Destinations as $Destination)
           <option value="{{$Destination->id_municipio}}">{{$Destination->municipio}}</option>
          @endforeach
          </select>
           <i  class="material-icons prefix iconos-banner" style="color:#f9e633;cursor:pointer;margin-left: 72%;">location_on</i>
            
        </div>
        
        
        <div class="input-field col s6 m6 l3">
          <input placeholder="{{ trans('welcome.date-departure') }}"  id="input-home" type="text" class="validate input-home">
          <i  class="material-icons prefix iconos-banner" style="color:#f9e633;">event_note</i>
        </div>
        <div class="input-field col s6 m6 l3">
          <input placeholder="{{ trans('welcome.date-comeback') }}"  id="input-home" type="text" class="validate input-home">
          <i  class="material-icons prefix iconos-banner" style="color:#f9e633;">event_note</i>
        </div>
      </div>
      <div class="row">
         <div class="input-field col s6 m4 l4"></div>
         <div class="input-field col s12 m4 l4">
           <a class="waves-effect waves-light btn modal-trigger" href="#modal1" style="width: 100%;background-color: #faec66;color:#00927f;">{{ trans('welcome.button') }}</a>
         </div>
         <div class="input-field col s2 m4 l4"></div>
        
        <div id="modal1" class="modal" style="background: #fff !important;top: 0% !important;">
    <div class="modal-content">
     <div class="row" style="background: #f4f4f4;    height: 80px;margin-top: -12px;border-radius: 7px">
      
       <div class="col s1 m4 l4"></div>
       <div class="col s12 m4 l4">
          <img class="logo responsive-img" src="{{asset('image/logo.png')}}" alt="logo" style="margin-left: auto;margin-right: auto;width: 194px;height: 57px;    margin-top: 12px;">
       </div>
       <div class="col s1 m4 l4"></div>
      </div>

          <div class="row" style="margin-bottom: 0px;">
            
            <div class="col s12 m6 l6" >
              <div class="col s12 m12 l12" style="margin-bottom: 13px;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.name') }}</h4>
                </div>
                 <div class="col s12 m8 l8">
                   <input placeholder="  {{ trans('welcome.name') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;">
                 </div>
              </div>
              <div class="col s12 m12 l12">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.typeid') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                    <select  class="browser-default" style="background: #fff;height: 38px;border-radius: 6px;    border: 1px solid #f2f2f2;">
                          <option value="" disabled selected>{{ trans('welcome.typeid') }}</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                    </select>
                 </div>
              </div>
               <div class="col s12 m12 l12">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.Cel') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                   <input placeholder="  {{ trans('welcome.Cel') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;">
                 </div>
              </div>
              
            </div>
            <div class="col s12 m6 l6">
              <div class="col s12 m12 l12" style="margin-bottom: 13px;    margin-left: -6%;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.last-name') }}</h4>
                </div>
                 <div class="col s12 m8 l8">
                   <input placeholder="  {{ trans('welcome.last-name') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;">
                 </div>
              </div>
              <div class="col s12 m12 l12" style="    margin-left: -6%;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.Numberid') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                   <input placeholder="  {{ trans('welcome.Numberid') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;">
                 </div>
              </div>
               <div class="col s12 m12 l12" style="    margin-left: -6%;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.Email') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                   <input placeholder="  {{ trans('welcome.Email') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;">
                 </div>
              </div>

            </div>
          </div>

           <div class="row" style="background: #66beb2;height: 41px;margin-bottom: 0px;border-radius: 8px 8px 0 0;">
            <h4 class="resumen" style="    line-height: 30px;">{{ trans('welcome.SUMMARY') }}</h4>
          </div>
        <div class="row" style="background: #f4f4f4;    border-radius: 0 0 15px 15px;">
          <div style="height: 30px;"></div>
            
            <div class="col s12 m6 l6" >
              <div class="col s12 m12 l12" style="margin-bottom: 13px;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.origin-destiny') }}</h4>
                </div>
                 <div class="col s12 m8 l8">
                  <div class="inputWithIcon">
                   <input placeholder=" &nbsp; {{ trans('welcome.origin-destiny') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;background: #fff;padding-left: 20px;width: 92%;">
                   <i class="fas fa-map-marker-alt" style="font-size: 24px; color:#f9e633;top: 1px;"></i>
                   </div>
                 </div>
              </div>
    
               <div class="col s12 m12 l12">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.exit') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                  <div class="inputWithIcon">
                   <input placeholder=" &nbsp; {{ trans('welcome.exit') }}"  id="input-home" type="text" class="validate input-home datepicker" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;padding-left: 20px;width: 92%;">
                   <i class="material-icons prefix"  style="font-size: 24px; color:#f9e633;top: 1px;">event_note</i>
                 </div>
                 </div>
              </div>
              
            </div>
            <div class="col s12 m6 l6">
              <div class="col s12 m12 l12" style="margin-left: -6%; margin-bottom: 13px;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.destiny') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                  <div class="inputWithIcon">
                   <input placeholder="&nbsp;  {{ trans('welcome.destiny') }}"  id="input-home" type="text" class="validate input-home" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;padding-left: 20px;width: 92%;">
                   <i class="fas fa-map-marker-alt" style="font-size: 24px; color:#f9e633;top: 1px;"></i>
                 </div>
                 </div>
              </div>
               <div class="col s12 m12 l12" style="margin-left: -6%;">
                <div class="col s12 m4 l4">
                  <h4 style="text-align: right;font-size: 12pt;margin-top:10px;color:#A9A9A9;">{{ trans('welcome.came-back') }}:</h4>
                </div>
                 <div class="col s12 m8 l8">
                  <div class="inputWithIcon">
                   <input placeholder=" &nbsp; {{ trans('welcome.came-back') }}"  id="input-home" type="text" class="validate input-home datepicker" style="border: 1px solid #f2f2f2;height: 22px;border-radius: 6px;    padding:0px; height: 38px;padding-left: 20px;width: 92%;">
                   <i class="material-icons prefix"  style="font-size: 24px; color:#f9e633;top: 1px;">event_note</i>
                 </div>
                 </div>
              </div>
            </div>
             <div class="col s12 m12 l12" style="margin-bottom: 20px;">
                <div class="container" style="width: 94%;background: #E6E6E6; height: 2px;    margin-top: 22px;">
                  
                </div>
          
                
              </div>
              <div class="row">
                <div class="col s1 m3 l3"></div>
                <div class="col s1 m3 l9">
                
                      <label style="text-align: right;">
                        <input type="checkbox" class="filled-in" checked="checked" />
                        <span>Me interesa ver otras fechas que se asimilen a mi solicitud</span>
                      </label>
              </div>
              </div>

          </div>
          <div class="row">
            
             <h6 style="text-align: center;color: #B1B1B1;font-size: 11pt; ">Enviaremos via email una cotización formal con las diferentes opciones que se ajusten a su busqueda. Al enviar el formulario acepta nuestras <a href="#">politicas de privacidad</a>. Muchas gracias por elegir nuestros servicios </h6>
             <br>
             <div class="col s1 m4 l4"></div>
             <div class="col s1 m4 l4">
               <a class="btn" href="#modal1" style="background-color: #faec66;color:#00927f; margin-right: auto;margin-left: auto; width: 100%">Solicitar opciones</a>
             </div>
             <div class="col s1 m4 l4"></div>
             
          </div>
          

        
          </div>
     
    </div>
    
  </div>
      </div>
    </form>
				</div>
		</div>
    
  </div>
        
</div>

<script type="text/javascript">
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
</script>
<script type="text/javascript">
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems);

  });

</script>
<script type="text/javascript">
  $('.datepicker').datepicker({ 
            firstDay: true, 
            format: 'yyyy-mm-dd',
            i18n: {
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"],
                weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"]
            }
        });
</script>


</body>
