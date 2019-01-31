<html>
    <head>
        <title>Aria|@yield('title')</title>
        <link href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">          
        <!-- <link href="{{asset('bootstrap-4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">           -->
        <link href="{{asset('css/mainLayout.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/header_aria_webPage.css')}}" rel="stylesheet/less" media="screen">   
        <link href="{{asset('css/welcomeContent_aria_webPage.css')}}" rel="stylesheet" media="screen">               
        <link href="{{asset('css/footer_aria_webPage.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/estilosGenerales.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/landing_page.css')}}" rel="stylesheet" media="screen">                 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link rel="stylesheet/less" type="text/css" href="{{asset('css/styles-less.css')}}" />         -->
        
        <!-- Custom styles for this template -->
        <!-- <link rel="stylesheet" href="{{asset('css/custom.css')}}" > -->
        <!-- Helper Styles -->
        <!-- <link rel="stylesheet" href="{{asset('css/loaders.css')}}" >
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}" >
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/nivo-lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('css/nivo_themes/default/default.css')}}"> -->
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
        <script src="{{asset('js/landing_page.js')}}"></script>
        <script src="{{asset('bootstrap-3.3.7/js/bootstrap.js')}}"></script>  
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
        <script src="{{asset('js/less-3.9.0.min.js')}}" type="text/javascript"></script>           
    </body>
</html>