<html>
    <head>
        <title>Aria|@yield('title')</title>
        <link href="{{asset('bootstrap-3.3.7/css/bootstrap.css')}}" rel="stylesheet" media="screen">          
        <link href="{{asset('css/mainLayout.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/header_aria_webPage.css')}}" rel="stylesheet" media="screen">   
        <link href="{{asset('css/welcomeContent_aria_webPage.css')}}" rel="stylesheet" media="screen">               
        <link href="{{asset('css/footer_aria_webPage.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/estilosGenerales.css')}}" rel="stylesheet" media="screen">                 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">        
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
        <script src="{{asset('bootstrap-3.3.7/js/bootstrap.js')}}"></script>              
    </body>
</html>