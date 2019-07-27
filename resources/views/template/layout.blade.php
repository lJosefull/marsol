<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="content-language" content="es"/>
    <meta name="author" content="Antonio rodriguez <ajrodriguez1196@gmail.com> And Steven Orrego <steven0.14@hotmail.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}"/>
<link rel="icon" type="image/vnd.microsoft.icon" href="{{secure_asset(asset('image/icono-marsol.ico'))}}">


	<title>MarSol</title>
    <style>
         @font-face {
        font-family: Roboto-Medium;
        src: url(/fonts/Roboto-Medium.ttf);
        }
         @font-face {
        font-family: Roboto-Bold;
        src: url(/fonts/Roboto-Bold.ttf);
        }
         @font-face {
        font-family: Roboto-Regular;
        src: url(/fonts/Roboto-Regular.ttf);
        }
    </style>
</head>
<body>
@include('components.header')
@yield('content')
@include('components.footer')

<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
</script>

	

</body>
</html>