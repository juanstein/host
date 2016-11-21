@extends('layouts.master')
@section('content')
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
@endsection