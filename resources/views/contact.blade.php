@extends('template.layout')
@section('content')
 @component('components.contact.banner',[
    ])
@endcomponent
    
 @component('components.contact.content',[
        'Routes'=>$Routes,
        'Destinations'=>$Destinations
    ])
@endcomponent

 @component('components.about_us.maps',[
    ])
@endcomponent


@stop