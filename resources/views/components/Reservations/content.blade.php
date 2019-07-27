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
</style>
<div class="container-full" >
<div class="container" style="width: 95%;margin-top: 122px;">	
</div>
<div class="row">
	<div class="col s12 m5 l6">
		<img class="" src="{{asset('image/image2.png')}}" alt="banner" style="float: right;margin-top: 30px;">
	</div>
	<div class="col s1 m1 l1 vl" style="width: 2%">
		
	</div>
	<div class="col s12 m5 l5">
		<h3 class="rutas">{{ trans('welcome.route') }} <br>{{ trans('welcome.Featured') }}</h3>
	</div>

</div>
</div>