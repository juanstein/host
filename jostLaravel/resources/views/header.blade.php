  <nav class="navbar navbar-default">
    <div class="container-fluid">

      <!-- LOGO -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img class="logo" src="img/compass.png"></a>
      </div>

      <!-- MENU -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="containerform">
          <form class="form-position body_searchform" method="get" action="jost_search.php">
            <img class="textcenter" src="img/glass.png">
            <input type="text" name="location" class="location-border body_searchform_bar" placeholder="¿Dónde querés trabajar?">
            </input>
          </form>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="host"><a href="/host">Convertite en Host</a></li>
          <li class="openhelp"><a href="ayuda.php" class="helpmobile"><img src="img/faq.png">Ayuda</a><a class="helpdesktop"><img src="img/faq.png"></a></li>

          @if (Auth::guest())
            <li class="opensession"><a href="sesion.php" class="sessionmobile"><img src="img/user.png">Iniciar sesión</a><a class="sessiondesktop"><img src="img/user.png"></a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->username }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ url('/logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
          @endif


        </ul>

        <!-- Help MODAL-->
          <div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="dialog_help modal-dialog" role="document">
              <div class="modal-content help_content">
                <ul class="modal-body">

                  <li class="questionhelp primera"><p>¿Que es JOST?<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                      <li class="questionanswer">Jost es un sitio dedicado a proveer facilidades inmobiliarias para startups bajo la modalidad de espacios de co-working.</li>
                    </ul>
                  </li>

                  <li class="questionhelp"><p>¿Como alquilar una oficina?<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                      <li class="questionanswer">En tres simples pasos podes iniciar tu negocio. Te registras en el sitio, elegis la oficina y alquilas. Facilitamos el proceso de busqueda para que hagas lo que mas te gusta hacer. </li>
                    </ul>
                  </li>

                  <li class="questionhelp"><p>Convertite en Jost<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                      <li class="questionanswer">Si te sobra un ambiente en tu casa, con Jost podes ganarte desde $1.500 pesos por mes, si lo publicas y hosteas a alguna empresa.</li>
                    </ul>
                  </li>

                  <li class="questionhelp"><p>Quienes somos<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                      <li class="questionanswer">Somos 3 alumnos de la clase de Full Stack, que solamente queremos cambiar el mundo y en el mientras tanto llenarnos de plata. </li>
                    </ul>
                  </li>

                  <li class="questionhelp quinta"><p>Contacto<i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                      <li class="questionanswer">Contactate con nosotros por cualquier duda o consulta a <span>soporte@jost.com</span></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
          </div>

          <!-- SESSION modal-->
          <div class="modal fade session" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="row">
              <div class="col-md-12 modal-content">
                <ul class="col-md-12 tabs">

          <!-- SESSION PART-->
                  <li class="col-md-6 no-padding session_tab">
                    <a href="#session" class="active textcenter"><img src="img/user.png">Login</a>
                  </li>
          <!-- REGISTRATION PART-->
                  <li class="col-md-6 no-padding register_tab">
                    <a href="#register" class="normal textcenter"><img src="img/file.png">Registro</a>
                  </li>
                </ul>
            <!-- SESSION PART-->

                <div class="session_content col-md-10 col-md-offset-1 show" id="session">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Password</label>

                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="remember"> Remember Me
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                          Login
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                          Forgot Your Password?
                        </a>
                      </div>
                    </div>
                  </form>
                </div>


            <!-- REGISTRATION PART-->




                <div class="regs_content col-md-12 hide" id="register">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                      <label for="firstname" class="col-md-4 control-label">Firstname</label>

                      <div class="col-md-6">
                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                        @if ($errors->has('firstname'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                      <label for="lastname" class="col-md-4 control-label">Lastname</label>

                      <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                        @if ($errors->has('lastname'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="username" class="col-md-4 control-label">Username</label>

                      <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Password</label>

                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                      <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                          Register
                        </button>
                      </div>
                    </div>
                  </form>
                </div>


              </div>
            </div>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
