<style>
	 .banner-newsllater{
          width: 100%;
          height: 309px;
          max-height: 309px;
          background-repeat:no-repeat;
          -o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
            background-image: url({{asset('image/BANNER-MARSOL-MAI.png')}});
            
        }
        .title-newsllater{
        	font-family: Roboto-Regular;
  font-size: 30px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.3;
  letter-spacing: normal;
  text-align: left;
  color: #f7e000;
  margin-top: 100px;
        }
        .vl {
  border-left: 3px solid #f4f4f4;
  height: 120px;
  margin-top: 12px;
}
</style>
<div class="container-full banner-newsllater">
	<div class="row">
		<div class="col l2"></div>

		<div class="col s12 m6 l4">
			<h5 class="title-newsllater">{{ trans('welcome.newslatter') }}
			</h5>
		</div>
		<div class="col s12 m6 l4">
			<div class="row" style=" margin-top: 73px;background: #fff;    max-height: 143px; ">
				<div class="row">
					<div class="col s10 m10 l8">
						<div class="col s12 m12 l12" style="height: 71px;">
					<div class="input-field col s12">
			          <input id="name" type="text" class="validate news" placeholder="{{ trans('welcome.name') }}" style="border-bottom: 1px solid transparent;">
			          
			        </div>
				</div>
				<div class="col s12 m12 l12" style="background-color: #f4f4f4; height: 2px;margin-left: 20px;"></div>
				<div class="col s12 m12 l12">
					<div class="input-field col s12">
			          <input id="email" type="email" class="validate news" placeholder="{{ trans('welcome.Email') }}" style="border-bottom: 1px solid transparent;">
			          
			        </div>
				</div>
					</div>
					<div class="col s2 m2 l4">
						<div class="col s1 m1 l1 vl" style="width: 2%;margin-left:10px;"></div>
		
						<div class="col s10 m10 l8">
							<img  class="responsive-img"  id="newsllater-click" src="{{asset('image/icons8-play.png')}}" alt="banner" style="margin-top: 60px; cursor: pointer; ">
						</div>

					</div>
				</div>
				
			</div>
		</div>
		<div class="col l2"></div>
	</div>

</div>
<script type="text/javascript">
$(document).on('keypress','.news',function(e){

 
        var code = (e.keyCode ? e.keyCode : e.which);
        if(code==13){
          Verificacion();
        }
    });


	$(document).on('click','#newsllater-click',function(){
		

 Verificacion();

   


            
        });

    

function Verificacion(){
   var success ="{{ trans('welcome.success') }}";
  var error ="{{ trans('welcome.error') }}";
  var check ="{{ trans('welcome.check') }}";
  var Gracias ="{{ trans('welcome.Thank') }}";
var name="{{ trans('welcome.name') }}";
var mensajes="{{trans('welcome.mensajes') }}";
var mensajes1="{{trans('welcome.mensajes1') }}";
var mensajes2="{{trans('welcome.mensajes2') }}";
var mensajes3="{{trans('welcome.mensajes3') }}";
var mensajes4="{{trans('welcome.mensajes4') }}";
var mensajes5="{{trans('welcome.mensajes5') }}";
var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

 if($("#name").val().length >10 ) {

      if(regex.test($('#email').val().trim())) {
       
postData();
 

    }else{
swal("correo", "Verifique el correo", "info");




    }

    }else if($("#name").val().length ==0 ) {

  swal(name,mensajes5,error);
    }else if($("#name").val().length >0 ) {

swal(check,mensajes,error);
    }

}

function postData() {
  var Gracias ="{{ trans('welcome.Thank') }}";
  var success ="{{ trans('welcome.success') }}";
  var error ="{{ trans('welcome.error') }}";
  var mensajes1="{{trans('welcome.mensajes1')}}";
var mensajes2="{{trans('welcome.mensajes2') }}";
var mensajes3="{{trans('welcome.mensajes3') }}";
var mensajes4="{{trans('welcome.mensajes4') }}";
  var check ="{{ trans('welcome.check') }}";
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    }); 
  var name=  $("#name").val();
  var email =   $('#email').val();
 
   
    
        $.ajax({

           type:'post',
           url:'newsletter',
          dataType:'json',
           data:{email:email,name:name},
           success:function(data){

            if (data.verificar>0) {
              swal(check,mensajes2, success);

            }else{
               $("#name").val('');
               $('#email').val('');
 
swal(Gracias, mensajes3, success);

            }
         

           },
           error:function(data){
swal(error, mensajes4, error);

           }


        });
};

 


</script>


