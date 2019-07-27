@extends('template.layout')
@section('content')
 @component('components.home.banner',[
 'banner_imgs'=>$banner_imgs,
 'Destinations'=>$Destinations,
    ])
@endcomponent
    
 @component('components.home.content',[
 'banner_imgs'=>$banner_imgs,
 'Destinations'=>$Destinations,
    ])
@endcomponent
@component('components.home.carousel',[
'banner_imgs'=>$banner_imgs,
    ])
@endcomponent
 @component('components.home.newslatter',[
 'banner_imgs'=>$banner_imgs,
    ])
@endcomponent


@stop
