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
      <a class="navbar-brand" href="index.php"><img class="logo" src="img/compass.png"></a>
    </div>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="containerform">
        <form class="form-position body_searchform" method="get" action="jost_search.php">
          <img class="textcenter" src="img/glass.png">
          <input type="text" name="location" class="location-border body_searchform_bar" placeholder="Buscar">
          </input>
        </form>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="host"><a href="host.php">¿Querés Hostear?</a></li>
        <li class="openhelp"><a href="ayuda.php" class="helpmobile"><img src="img/faq.png">Ayuda</a><a class="helpdesktop"><img src="img/faq.png"></a></li>
        <li class="opensession"><a href="sesion.php" class="sessionmobile"><img src="img/user.png">Iniciar sesión</a><a class="sessiondesktop"><img src="img/user.png"></a></li>
        
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
                  <a href="#session" class="active textcenter"><img src="img/user.png">Sesión</a>
                </li>
        <!-- REGISTRATION PART-->
                <li class="col-md-6 no-padding register_tab">
                  <a href="#register" class="normal textcenter"><img src="img/file.png">Registro</a>
                </li>
              </ul>
          <!-- SESSION PART-->
              <div class="session_content col-md-10 col-md-offset-1 show" id="session">
                <form method="GET" action="">
                  <div class="modal-body session_body">
                    <div class="session_title uppercase textcenter">
                      <h1>Iniciar sesión</h1>
                    </div>
                    <div class="session_username">
                      <label>Nombre de usuario</label>
                      <input type="email" placeholder="email">
                    </div>
                    <div class="session_password">
                      <label>Password</label><br>
                      <input type="password" placeholder="password">
                    </div>
                    <div class="session_forget_password">
                      <a href="forget_password.php">¿Olvidaste tu contraseña?</a>
                    </div>
                  </div>
                  <div class="session_footer">
                    <button type="submit" class="btn btn-primary session_button">Inicia sesión</button>
                  </div>
                </form>
              </div>
          <!-- REGISTRATION PART-->
              <div class="regs_content col-md-12 hide" id="register">
                <div class="modal-body regs_body">
                  <div class="regs_title uppercase textcenter">
                    <h1>¿No estás registrado aún?</h1>
                  </div>
                  <div class="regs_username">
                    <label>Nombre</label>
                    <input type="text" placeholder="Nombre">
                  </div>
                  <div class="regs_username">
                    <label>Apellido</label>
                    <input type="text" placeholder="Apellido">
                  </div>
                  <div class="regs_username">
                    <label>Correo electronico</label>
                    <input type="email" placeholder="Email">
                  </div>
                  <div class="regs_username">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                  </div>
                  <div class="regs_username">
                    <label>Confirmar Password</label>
                    <input type="confimar password" placeholder="Password">
                  </div>          
                </div>
                <div class="regs_footer">
                  <button type="submit" class="btn btn-primary regs_button">Registrarse</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>