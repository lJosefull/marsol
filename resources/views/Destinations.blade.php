@extends('template.layout')
@section('content')
 @component('components.Destinations.banner',[
    ])
@endcomponent
    
 @component('components.Destinations.content',[
        'Routes'=>$Routes,
        'Destinations'=>$Destinations
    ])
@endcomponent

 @component('components.Destinations.newslatter',[
    ])
@endcomponent


@stop

