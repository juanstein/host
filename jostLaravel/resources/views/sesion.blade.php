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

<?PHP include_once('header.php'); ?>


<header id="header">
      <div class="header-darkener"></div>
    <form method="GET" class="content-sesion" action="">
        <div class="body">
            <div class="username">
                <label>Nombre de usuario</label>
                <input type="email" placeholder="email">
            </div>
            <div class="password">
                <label>Password</label>
                <input type="password" placeholder="password">
            </div>
        </div>
        <div class="footersession">
            <button type="submit" class="btn btn-primary sessionbutton">Acceder</button>
        </div>
    </form>
</header>


    <!-- jQuery -->
    <script   src="js/jquery-2.1.1.js"></script>

    <!--javascript customize-->
    <script src="js/main.js"></script>

    <!-- Bootstrap Core CDN -->
    <script src="js/bootstrap.min.js" ></script>

</body>
</html>
