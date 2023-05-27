<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafe House Template</title>
<!--
Cafe House Template
http://www.templatemo.com/tm-466-cafe-house
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    @include('header')

    @yield('content')

    @inlude('footer')
    <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="assets/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
   <script>
      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
        var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(13.758468,100.567481),
          scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
          calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
          map.setCenter(center);
        });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
      }
      $(document).ready(function(){
        loadGoogleMap();
      });
      </script>

</body>
