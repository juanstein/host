<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOST</title>

    <!-- Bootstrap Core  -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/stylemobile.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?PHP include_once('header.php');?>

                <div class="content">
                  <div>
                  <div class="sessiontitle uppercase grey">
                      <h2> Completá tus datos para comenzar</h2>
                  </div>
                    <div class="username grey">
                      <label>Nombre</label>
                      <input type="text" placeholder="Nombre">
                    </div>
                    <div class="username grey">
                      <label>Apellido</label>
                      <input type="text" placeholder="Apellido">
                    </div>
                    <div class="username grey">
                      <label>Correo electronico</label>
                      <input type="email" placeholder="Email">
                    </div>
                    <div class="username grey">
                      <label>Password</label>
                      <input class="passwordregs" type="password" placeholder="Password">
                    </div>
                    <div class="username grey">
                      <label>Confirmar Password</label>
                      <input class="confirmpassregs" type="confimar password" placeholder="Password">
                    </div>
                    <div class="regslinks">
                      <p> Conectar vía </p>
                      <button type="button" class="btn btn-primary facebook"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-success linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-warning google"><i class="fa fa-google" aria-hidden="true"></i></button>
                    </div>             
                  </div>
                  <div class="modal-footer">
                    <button type="submit"><i class="fa fa-arrow-right registerarrow" aria-hidden="true"></i></button>
                  </div>
                </div>


    <!-- jQuery -->
    <script   src="js/jquery-2.1.1.js"></script>

    <!--javascript customize-->
    <script src="js/main.js"></script>

    <!-- Bootstrap Core CDN -->
    <script src="js/bootstrap.min.js" ></script>

</body>
</html>