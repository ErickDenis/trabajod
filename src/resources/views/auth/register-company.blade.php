@extends('adminlte::auth.register')

@section('auth_body')

    <form method="POST" action="{{ route('register.company.submit') }}">
        @csrf

        <div class="row">
            <label for="email">Correo electrónico</label>
            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="row">
            <label for="password">Contraseña</label>
            <input class="form-control" id="password" type="password" name="password" required>
        </div>

        <div class="row">
            <label for="password_confirmation">Confirmar contraseña</label>
            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <div class="row">
            <label for="name_of_company">Nombre de la empresa</label>
            <input class="form-control" id="name_of_company" type="text" name="name_of_company" value="{{ old('name_of_company') }}" required>
        </div>

        <div class="row">
            <label for="descripcion">Descripcion</label>
            <input class="form-control" id="descripcion" type="text" name="descripcion" value="{{ old('descripcion') }}">
        </div>

        <div class="row">
            <label for="path_of_photo">Foto</label>
            <input class="form-control" id="path_of_photo" type="text" name="path_of_photo" value="{{ old('path_of_photo') }}">
        </div>

        <div class="row">
            <label for="address">Dirreccion</label>
            <input class="form-control" id="address" type="text" name="address" value="{{ old('address') }}">
        </div>
        <div class="row" style="padding-top: 10px;">
            <button class="btn btn-block btn-flat btn-primary" type="submit">Registrar</button>
        </div>
    </form>
@endsection