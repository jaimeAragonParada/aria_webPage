<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Aria|@yield('title')</title>
        <link href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">          
        <!-- <link href="{{asset('bootstrap-4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">           -->
        <link href="{{asset('css/mainLayout.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/header_aria_webPage.css')}}" rel="stylesheet/less" media="screen">   
        <link href="{{asset('css/welcomeContent_aria_webPage.css')}}" rel="stylesheet" media="screen">               
        <link href="{{asset('css/footer_aria_webPage.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/estilosGenerales.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/modalWindow.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/landing_page.css')}}" rel="stylesheet/less" >  
                       
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link rel="stylesheet/less" type="text/css" href="{{asset('css/styles-less.css')}}" />         -->
        
        <!-- Custom styles for this template -->
        <!-- <link href="{{asset('bootstrap-4.0.0/css/custom.css')}}" rel="stylesheet" media="screen"> -->
        <!-- Helper Styles -->
       <!--  <link href="{{asset('bootstrap-4.0.0/css/loaders.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('bootstrap-4.0.0/css/swiper.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('bootstrap-4.0.0/css/animate.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('bootstrap-4.0.0/css/nivo-lightbox.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('bootstrap-4.0.0/css/nivo_thems/default/default.css')}}" rel="stylesheet" media="screen"> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  -->
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">        -->
    </head>
    <body>
        <div id="mainContainer">
            <div id="mainHeader">
                @yield('mainHeader')
            </div>
            <div id="mainContent">
                @yield('mainContent')
            </div>
            <div id="mainFooter">
                @yield('mainFooter')
            </div>
        </div>
             
        <script src="{{asset('js/jquery.js')}}"></script>        
        <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
        <!-- <script src="{{asset('bootstrap-4.0.0/js/bootstrap.min.js')}}"></script> -->
        <!-- <script src="{{asset('bootstrap-4.0.0/js/isotope.min.js')}}"></script>        
        <script src="{{asset('bootstrap-4.0.0/js/nivo-lightbox.min.js')}}"></script>
        <script src="{{asset('bootstrap-4.0.0/js/scrollPosStyler.min.js')}}"></script> -->
        <script src="{{asset('bootstrap-4.0.0/js/swiper.min.js')}}"></script>
        <!-- <script src="{{asset('bootstrap-4.0.0/js/wow.min.js')}}"></script> -->
        <!-- <script src="{{asset('bootstrap-4.0.0/js/core.js')}}"></script> -->
        <script src="{{asset('js/landing_page.js')}}"></script>         
        <script src="{{asset('js/less-3.9.0.min.js')}}" type="text/javascript"></script>           
    </body>
</html>