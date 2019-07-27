@extends('template.layout')
@section('content')
 @component('components.about_us.banner',[
    ])
@endcomponent
    
 @component('components.about_us.content',[
        'Routes'=>$Routes,
        'Destinations'=>$Destinations
    ])
@endcomponent

 @component('components.about_us.maps',[
    ])
@endcomponent


@stop