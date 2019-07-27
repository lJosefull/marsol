 
<style type="text/css">

</style>
 <div class="row" style="background:#00927f;height:auto;">
   <div class="col m6 l3 hide-on-small-only">
      <h1 class="title-nav"><span class="span-nav">{{ trans('welcome.ATTENTION') }}:</span>  (5) 369-0999 - (5) 369-4460 </h1>
   </div>
   <div class="col m6 l3 ">
     <h1 class="title-nav "><span class="span-nav">WHATSAPP : </span>+57 (319) 760-1810</h1>
   </div>
   <div class="col m6 l3 hide-on-small-only ">
     <h1 class="title-nav " style="margin-top: 4px;"><span class="span-nav" style="margin-right: 10px;">{{ trans('welcome.NETWORKS') }}:</span> <i class="fab fa-facebook" style="font-size: 20px;margin-right: 10px;"></i><i class="fab fa-instagram" style="font-size: 20px;margin-right: 10px;"></i> <i class="fas fa-play" style="font-size: 20px;margin-right: 10px;"></i>  </h1>
   </div>
   <div class="col m6 l3 hide-on-small-only">

     <h1 class="title-nav " style="margin-left: 30%;">
@if(session('lang')=='es')

<span class="span-nav">ESPAÑOL  |</span> <a style="text-decoration: none; color: #fff" href="{{ url('lang', ['en']) }}">
<span> INGLÉS</span></a></h1>
@elseif(session('lang')=='en')
<a style="text-decoration: none; color: #fff" href="{{ url('lang', ['es']) }}"><span>SPANISH |</span> </a>
<span class="span-nav">ENGLISH</span></h1>
@else
<span class="span-nav">ESPAÑOL  |</span> <a style="text-decoration: none; color: #fff" href="{{ url('lang', ['en']) }}">
<span> INGLÉS</span></a></h1>

@endif
     
   </div>
 </div>

 <div class="row hide-on-small-only">
    <div class="col m6 l3">
      <div class="col l1"></div>
      <div class="col l10"><a href="{{url('home')}}"><img class="logo responsive-img" src="{{asset('image/logo.png')}}" alt="logo"></a></div>
      <div class="col l1"></div>
      
   </div>
   <div class="col m6 l7">
    <nav class="navmenu" style="">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="">
        <li><a class="menu" href="{{url('home')}}">{{ trans('welcome.START') }}</a></li>
        <li><a class="menu" href="{{url('About-us')}}">{{ trans('welcome.About-us') }}</a></li>
         <li><a class="menu" href="{{url('About-us')}}">{{ trans('welcome.RESERVE-TICKETS') }}</a></li>
        <li><a class="menu" href="{{url('Destinations')}}">{{ trans('welcome.Destinations') }}</a></li>
        <li><a  class="menu" href="#">{{ trans('welcome.OUR-SERVICES') }}</a></li>
        <li><a class="menu"href="#">{{ trans('welcome.CONTACT') }}</a></li>

      </ul>
    </div>
  </nav>
   </div>
   <div class="col m6 l2" >
     
    <img class="logo responsive-img" src="{{asset('image/Grupo 89@2x.png')}}" alt="logo" style="margin-top: 24px;">
 
   </div>
 </div>
 <div class="col s12 hide-on-med-and-up" style="height: 100px;">
 <nav class="hide-on-med-and-up navmenu" style="margin-top: -20px;">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img class="logo responsive-img" src="{{asset('image/logo.png')}}" alt="logo"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger menu"><i class="material-icons">menu</i></a>
     
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a class="menu" href="#">{{ trans('welcome.START') }}</a></li>
        <li><a class="menu" href="{{url('About-us')}}">{{ trans('welcome.About-us') }}</a></li>
         <li><a class="menu" href="{{url('About-us')}}">{{ trans('welcome.RESERVE-TICKETS') }}</a></li>
        <li><a class="menu" href="{{url('Destinations')}}">{{ trans('welcome.Destinations') }}</a></li>
        <li><a  class="menu" href="#">{{ trans('welcome.OUR-SERVICES') }}</a></li>
        <li><a class="menu"href="#">{{ trans('welcome.CONTACT') }}</a></li>

  </ul>
  </div>