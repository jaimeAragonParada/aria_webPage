@if (Auth::guest())
  <!-- <nav class="navBarHeader navbar navbar-default " role="navigation"> -->
  <nav class="navBarHeader navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="linkLogo" href="#"><img alt="" class="imgLogo" src="{{asset('images/logoAria2.jpeg')}}"></a>
        <button type="button" class="navbar-toggle collapsed button-collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar button-collapsed"></span>
          <span class="icon-bar button-collapsed"></span>
          <span class="icon-bar button-collapsed"></span>
        </button>     
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navMenu " id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav ">
          @if($activo_head=="bienvenido")       
            <li class="active "><a href="#" class="linkHead">Bienvenido</a></li>
            <li ><a href="#conocenos" class="linkHead">Conócenos</a></li>                
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle linkHead" data-toggle="dropdown">Productos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#" class="linkHead">Marcas</a></li>
                <li class="divider"></li>
                <li><a href="#" class="linkHead">Categoría</a></li>                        
              </ul>
            </li> 
            <li ><a href="" class="linkHead">Contacto</a></li>
            <li ><a href="" class="linkHead">Ubicación</a></li>                    
          @endif
          @if($activo_head=="conocenos")        
            <li class=""><a href="/aria_webPage/public">Bienvenido</a></li>
            <li class="active"><a href="#" class="liHead">Conócenos</a></li>               
            <li class="dropdown liHead">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Marcas</a></li>
                <li class="divider"></li>
                <li><a href="#">Categoría</a></li>                            
              </ul>
            </li> 
            <li ><a href="" class="liHead">Contacto</a></li>
            <li ><a href="">Ubicación</a></li>                      
          @endif
          @if($activo_head=="contacto")        
            <li class=""><a href="/aria_webPage/public">Bienvenido</a></li>
            <li class="active"><a href="#" class="liHead">Conócenos</a></li>               
            <li class="dropdown liHead">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Marcas</a></li>
                <li class="divider"></li>
                <li><a href="#">Categoría</a></li>                            
              </ul>
            </li> 
            <li ><a href="" class="liHead">Contacto</a></li>
            <li ><a href="">Ubicación</a></li>                      
          @endif
          @if($activo_head=="ubicacion")        
            <li class=""><a href="/aria_webPage/public">Bienvenido</a></li>
            <li class="active"><a href="#" class="liHead">Conócenos</a></li>               
            <li class="dropdown liHead">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Marcas</a></li>
                <li class="divider"></li>
                <li><a href="#">Categoría</a></li>                            
              </ul>
            </li> 
            <li ><a href="" class="liHead">Contacto</a></li>
            <li ><a href="">Ubicación</a></li>                      
          @endif       
        </ul>     
        <!-- <ul class="nav navbar-nav navbar-right">        
          <li class="dropdown">
            <a href="#" class="dropdown-toggle linkHead" data-toggle="dropdown" role="button" aria-expanded="false"><b>Iniciar sesión</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
              <li>
                 <div class="row">
                    <div class="col-md-12"> 
                      <form class="form" role="form" method="POST" action="auth/login" accept-charset="UTF-8" id="">                   
                      @if($activo_menu=="computadoras")
                        <form class="form" role="form" method="POST" action="auth/login" accept-charset="UTF-8" id="">
                      @else
                        <form class="form" role="form" method="POST" action="../auth/login" accept-charset="UTF-8" id="">
                      @endif
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                             <input type="text" class="form-control" id="" name="id" value="" placeholder="Id de usuario" required>
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="" name="password" placeholder="Contraseña" required>
                            <div class="help-block text-right"><a href="#" class="textGeneral" data-toggle="modal" data-target="#resetPassModal">¿Olvido su contraseña?</a></div>                          
                          </div>
                          <div class="form-group">
                             <button type="submit" class="btn btn-primary btn-block btnGeneral">Login</button>
                          </div>
                          <div class="checkbox">
                             <label>
                             <input type="checkbox" name="remember"> Recordar mis datos
                             </label>
                          </div>
                        </form>
                    </div>
                    <div class="bottom text-center">
                      ¿Es nuevo?
                       <a href="#" class="textGeneral" data-toggle="modal" data-target="#registerModal"><b>Registrarse</b></a>
                       <a href="auth/register" class="textGeneral" data-toggle="modal" data-target=""><b>Registrarse</b></a>
                    </div>
                  </div>
              </li>
            </ul>
          </li>
        </ul> -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
@else
  @if(Auth::user()->hasRole('admin'))
    <nav class="navbar navbar-default navBarHeader" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="linkLogo" href="#"><img alt="" class="imgLogo" src="{{asset('images/logo.png')}}"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>     
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navMenu" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav ">
            @if($activo_head=="home")       
              <li class="active"><a href="#">Home</a></li>
              <li class=""><a href="usuarios">usuarios</a></li>
              <li data-toggle="" data-target=""><a href="garantias">Garantias</a></li>
              <li data-toggle="" data-target=""><a href="reparaciones">Reparaciones</a></li>        
              <!-- <li ><a href="email">Contacto</a></li>     -->
            @endif
            @if($activo_head=="usuarios")        
              <li class=""><a href="/SDO_webPage/public">Home</a></li> 
              <li class="active"><a href="#">usuarios</a></li>         
              <li data-toggle="" data-target=""><a href="garantias">Garantias</a></li>
              <li data-toggle="" data-target=""><a href="reparaciones">Reparaciones</a></li>        
              <!-- <li ><a href="email">Contacto</a></li>           -->
            @endif
            @if($activo_head=="garantias")        
              <li class=""><a href="/SDO_webPage/public">Home</a></li> 
              <li class=""><a href="usuarios">usuarios</a></li>         
              <li data-toggle="" data-target="" class="active"><a href="garantias">Garantias</a></li>
              <li class="active" data-toggle="" data-target=""><a href="reparaciones">Reparaciones</a></li>       
              <!-- <li ><a href="email">Contacto</a></li>           -->
            @endif
            @if($activo_head=="reparaciones")        
              <li class=""><a href="/SDO_webPage/public">Home</a></li>
              <li class=""><a href="usuarios">usuarios</a></li>          
              <li data-toggle="" data-target=""><a href="">Garantias</a></li>
              <li data-toggle="" data-target="" class="active"><a href="reparaciones">Reparaciones</a></li>                    
              <!-- <li class="active"><a href="#">Contacto</a></li>           -->
            @endif         
          </ul>     
          <ul class="nav navbar-nav navbar-right">            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="auth/logout">Cerra sesión</a></li>
                </ul>
            </li>          
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  @else
      <nav class="navbar navbar-default navBarHeader" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="linkLogo" href="#"><img alt="" class="imgLogo" src="{{asset('images/logo.png')}}"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>     
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navMenu" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav ">
            @if($activo_head=="home")       
              <li class="active"><a href="#">Home</a></li>
              <li data-toggle="" data-target=""><a href="#">Garantias</a></li>
              <li data-toggle="" data-target=""><a href="reparacionesUser">Reparaciones</a></li>        
              <li ><a href="email">Contacto</a></li>    
            @endif
            @if($activo_head=="garantias")        
              <li class=""><a href="/SDO_webPage/public">Home</a></li>          
              <li data-toggle="" data-target=""><a href="#">Garantias</a></li>
              <li data-toggle="" data-target=""><a href="reparacionesUser">Reparaciones</a></li>        
              <li ><a href="email">Contacto</a></li>          
            @endif
            @if($activo_head=="reparaciones")        
              <li class=""><a href="/SDO_webPage/public">Home</a></li>          
              <li data-toggle="" data-target=""><a href="#">Garantias</a></li>
              <li class="active" data-toggle="" data-target=""><a href="#">Reparaciones</a></li>       
              <li ><a href="email">Contacto</a></li>          
            @endif
            @if($activo_head=="mail")        
              <li class=""><a href="/SDO_webPage/public">Home</a></li>          
              <li data-toggle="" data-target=""><a href="#">Garantias</a></li>
              <li data-toggle="" data-target=""><a href="reparacionesUser">Reparaciones</a></li>                    
              <li class="active"><a href="#">Contacto</a></li>          
            @endif         
          </ul>     
          <ul class="nav navbar-nav navbar-right">            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="auth/logout">Cerra sesión</a></li>
                </ul>
            </li>          
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  @endif  
@endif

<!-- Star registerModal -->
<div class="modal fade windowModal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title textGeneral" id="myModalLabel">Registro</h4>
      </div>
      <div class="modal-body">
          <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('auth/register') }}" accept-charset="UTF-8" id=""> -->
            @if($activo_menu=="computadoras")
              
              <form class="form-horizontal" role="form" method="POST" action="{{ url('auth/register') }}" accept-charset="UTF-8" id="">
              
            @else
              <form class="form-horizontal" role="form" method="POST" action="{{ url('../auth/register') }}" accept-charset="UTF-8" id="">
            @endif                
        
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >

            <div class="form-group">
              <label class="col-md-4 control-label textGeneral">Nombre</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label textGeneral">Correo electrónico</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label textGeneral" >Contraseña</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password" minlength="6" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label textGeneral">Confirmar contraseña</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation" minlength="6" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary btnGeneral">
                  Registrar
                </button>
              </div>
            </div>
          </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btnGeneral" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
<!-- End registerModal -->

<!-- Star resetPassModal -->
<div class="modal fade windowModal" id="resetPassModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title textGeneral" id="myModalLabel" >Restablecer contraseña</h4>
      </div>
      <div class="modal-body">         

          <form class="form-horizontal" role="form" method="POST" action="password/email">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label textGeneral" >Correo electrónico</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="required">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary btnGeneral">
                  Aceptar
                </button>
              </div>
            </div>
          </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btnGeneral" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
<!-- End resetPassModal -->