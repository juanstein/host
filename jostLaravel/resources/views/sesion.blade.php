@extends('layouts.master')
@section('content')
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
            <div class="session_forget_password">
                <a href="forget_password.php">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
        <div class="footersession">
            <button type="submit" class="btn btn-primary sessionbutton">Acceder</button>
        </div>
    </form>
</header>
@endsection