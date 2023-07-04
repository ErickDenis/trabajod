@extends('adminlte::auth.register')

@section('auth_body')

    <form method="POST" action="{{ route('register.postulant.submit') }}">
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
            <label for="name">Nombre Completo</label>
            <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="row">
            <label for="last_name">Apellido Completo</label>
            <input class="form-control" id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
        </div>
        
        <div class="row">
            <label for="birthdate">Fecha de Nacimiento</label>
            <input class="form-control" type="date" id="birthdate" name="birthdate" pattern="\d{2}/\d{2}/\d{4}" placeholder="dd/mm/yyyy" required>
        </div>

        <div class="row" style="padding-top: 10px;">
            <button class="btn btn-block btn-flat btn-primary" type="submit">Registrar</button>
        </div>
    </form>
@endsection