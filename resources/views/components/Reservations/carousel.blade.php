<style>
  .columna {
  width:12.5%;
  float:right ;
}
@media only screen and (max-width: 610px) {
  .desktop{
     display: none;
  }
}
  .horizontal{
  display: flex;
  justify-content: center;

}
.vertical{
  display: flex;
  flex-direction: column;
  justify-content: center;
  vertical-align: middle;
}
.content {
  max-width: 100%;
  margin: 0 auto;

}

.slick-slide .slick-slide-content {
  text-align: center;
  margin: 0px; 
  padding: 10px 10px;

}

.slick-slide .slick-slide-content img {
  display: inline-block;
  width: 307px !important;
}

.slick-slide .slick-slide-content p {
  margin: 0;
}

.slick-prev {
  left: 0;
}
.slick-next {
  right: 0;
}

/* Button Play/Pause */
.carousel-wrapper {
  position: relative;
}

.slick-control {
  position: absolute;
  bottom: 0;
  right: 0;
}

.slick-control button {
  width: 25px;
  height: 23px;
  border: 1px solid transparent;
  padding: 0;
}


.custom-dots .slick-active .dot {
  background-color: #E0001A;
}

.custom-dots .dot {
  width: 25px;
  height: 15px;
  display: inline-block;
  border: 1px solid #E0001A;
  margin-left: 5px;
}

.custom-dots .dot:hover {
  cursor: pointer;
  background-color: #E0001A;
}

.custom-dots .dot span {
  display: none;
}

.slick-next::before,
.slick-prev::before {
  color: #E0001A;
}

.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus {
  outline: -webkit-focus-ring-color auto 5px;
}
.carrousel-home:hover{
    -webkit-transform: scale(1.1);
    transform: scale(1.1)
}
.logos{
  font-family: Roboto-Bold;
  font-size: 20px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: -0.2px;
  text-align: center;
  color: #7b7b7b;
}
.title-carousel{
  font-family: Roboto-Bold;
  font-size: 20px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  line-height: 1;
  letter-spacing: 0.3px;
  text-align: center;
  color: #ffffff;


}
.title-carousel{
  display: none;
}
.title-carousel:hover{
display: block;
}
</style>

 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<div class="row">
  <div class="col s12 m12 l12">
    <img class="responsive-img"  src="{{asset('image/line.png')}}" alt="banner" style="margin-top: 60px;margin-bottom: 30px;">
  </div>
  
</div>
<div class="container-full" style="width: 98%;">


  <div class="carousel-wrapper">
  <div class="slick-carousel" role="region" aria-roledescription="carrousel">
    
     <div class="slick-slide-content" style="width: 307px !important;">
      
        <div>
         <img class="carrousel-home" src="{{asset('image/22ab64_d09febdaa0f543628e5a9b790d2dd3d0_mv2.png')}}" alt="banner"  style="width: 307px !important;height: 450px;">
         <h4 class="title-carousel">mensaje de pruebas</h4>
        </div>
       
     
    </div>
     <div class="slick-slide-content" style="width: 307px !important;">
      
        <div>
         <img class="carrousel-home" src="{{asset('image/7164069495_7f5c2503b1_b.png')}}" alt="banner"  style="width: 307px !important;height: 450px;" >
          <h4 class="title-carousel">mensaje de pruebas</h4>
        </div>
       
     
    </div>
    <div class="slick-slide-content" style="width: 307px !important;">
     
        <div>
         <img class="carrousel-home" src="{{asset('image/la_ventana_al_mundo_barranquilla.png')}}" alt="banner"  style="width: 307px !important;height: 450px;" >
          <h4 class="title-carousel">mensaje de pruebas</h4>
        </div>
       
      
    </div>
   
    <div class="slick-slide-content" style="width: 307px !important;">
      
        <div>
         <img class="carrousel-home" src="{{asset('image/Cartagena.png')}}" alt="banner"  style="width: 307px !important;height: 450px;" >
          <h4 class="title-carousel">mensaje de pruebas</h4>
        </div>
       
      
    </div>
     <div class="slick-slide-content" style="width: 307px !important;">
     
       <div>
         <img class="carrousel-home" src="{{asset('image/22ab64_d09febdaa0f543628e5a9b790d2dd3d0_mv2.png')}}" alt="banner"  style="width: 307px !important;height: 450px;" >
          <h4 class="title-carousel">mensaje de pruebas</h4>
        </div>
       
     
    </div>
     <div class="slick-slide-content" style="width: 307px !important;">
      
        <div>
         <img class="carrousel-home" src="{{asset('image/7164069495_7f5c2503b1_b.png')}}" alt="banner"  style="width: 307px !important;height: 450px;" >
          <h6 class="title-carousel">Santa Marta</h6>
        </div>
       
     
    </div>
    

  </div>
  
 </div>
</div>
<!-- <div class="container" style="margin-top: 100px;">
  <div class="row">
    <div class="col s6 m3 l3">
      <img class="responsive-img" src="{{asset('image/calidad.png')}}" alt="banner" style="margin-left: auto;margin-right: auto;display: block; ">
      <h2 class="logos">CALIDAD</h2>
    </div>
    <div class="col s6 m3 l3">
      <img class="responsive-img" src="{{asset('image/comodidad.png')}}" alt="banner" style="margin-left: auto;margin-right: auto;display: block; ">
      <h2 class="logos">COMODIDAD</h2>
    </div>
    <div class="col s6 m3 l3">
      <img class="responsive-img" src="{{asset('image/destinos.png')}}" alt="banner" style="margin-left: auto;margin-right: auto;display: block; ">
      <h2 class="logos">SEGURIDAD</h2>
    </div>
    <div class="col s6 m3 l3">
      <img class="responsive-img" src="{{asset('image/seguridad.png')}}" alt="banner" style="margin-left: auto;margin-right: auto;display: block; ">
      <h2 class="logos">COBERTURA</h2>
    </div>
  </div>
</div> -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<script type="text/javascript">
  $('.slick-carousel').slick({
  dots: false,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,    
  autoplay: true,
  autoplaySpeed: 1000,
  prevArrow: '<button class="slick-prev" aria-label="Actualité précédente" type="button">Précédent</button>',
  nextArrow: '<button class="slick-next" aria-label="Actualité suivante" type="button">Suivant</button>',
  dotsClass: 'custom-dots',
  customPaging: function (slider, i) {
    var slideNumber = (i + 1),
    totalSlides = slider.slideCount;
    return '<a class="dot" href="#" role="tab" title="' + slideNumber + ' page sur ' + totalSlides + '"><span class="string" aria-hidden="true">' + slideNumber + '/' + totalSlides + '</span></a>';
          },
  responsive: [
   {
      breakpoint: 1264,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
     {
      breakpoint: 974,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// $('.slick-control__button--play').on('click', function() {
//   $('.slick-carousel').slick('slickPause');
//   $('.slick-control').removeClass('slick-control--play').addClass('slick-control--pause');
// });
// $('.slick-control__button--pause').on('click', function() {
//   $('.slick-carousel').slick('slickPlay');
//   $('.slick-control').removeClass('slick-control--pause').addClass('slick-control--play');
// });

// Correctif suivant retours RGAA
$(".slick-slide").removeAttr("role");
$(".custom-dots").attr("aria-label", "Choix d'un groupe d'actualités à afficher");
$('.custom-dots li').attr("aria-selected", "false");
$('.custom-dots li.slick-active').attr("aria-selected", "true");

$('.slick-carousel').on('afterChange', function(slick, currentSlide){
  $('.custom-dots li').attr("aria-selected", "false");
  $('.custom-dots li.slick-active').attr("aria-selected", "true");
});
</script>