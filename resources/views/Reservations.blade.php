@extends('template.layout')
@section('content')
 @component('components.Reservations.banner',[
    ])
@endcomponent
    
 @component('components.Reservations.content',[
    ])
@endcomponent
@component('components.Reservations.carousel',[
    ])
@endcomponent
 @component('components.home.newslatter',[
    ])
@endcomponent


@stop
