<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" id="token" content="{{ csrf_token() }}">
        <title>Laravel</title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    <body>
        
        <div id="app">
     
                @include('partials.nav')
                
                <router-view></router-view>
            
        </div>


    <script>
        window.Laravel =  <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>


        $(document).ready(function() {
          $('#myCarousel').carousel({
          interval: 10000
          })
            
            $('#myCarousel').on('slid.bs.carousel', function() {
              //alert("slid");
          });
             
        });


    </script>


    <script src="{{ URL::to('js/app.js') }}"></script>
        
    </body>
</html>
