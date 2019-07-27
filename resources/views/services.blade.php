@extends('template.layout')
@section('content')
 @component('components.services.banner',[
 'banner_imgs'=>$banner_imgs,
 'Destinations'=>$Destinations,
    ])
@endcomponent
    
 @component('components.services.content',[
 'banner_imgs'=>$banner_imgs,
 'Destinations'=>$Destinations,
    ])
@endcomponent

 @component('components.about_us.maps',[
    ])
@endcomponent


@stop
