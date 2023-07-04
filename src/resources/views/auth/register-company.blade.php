<!-- Formulario de registro de Empresa -->
<form method="POST" action="{{ route('register.company.submit') }}">
    @csrf

    <div>
        <label for="email">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirmar contraseña</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <label for="name_of_company">Nombre de la empresa</label>
        <input id="name_of_company" type="text" name="name_of_company" value="{{ old('name_of_company') }}" required>
    </div>

    <div>
        <label for="descripcion">Descripcion</label>
        <input id="descripcion" type="text" name="descripcion" value="{{ old('descripcion') }}">
    </div>

    <div>
        <label for="path_of_photo">Foto</label>
        <input id="path_of_photo" type="text" name="path_of_photo" value="{{ old('path_of_photo') }}">
    </div>

    <div>
        <label for="address">Dirreccion</label>
        <input id="address" type="text" name="address" value="{{ old('address') }}">
    </div>
    
    <button type="submit">Registrar</button>
</form>