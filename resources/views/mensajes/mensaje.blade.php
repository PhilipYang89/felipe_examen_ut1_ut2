<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <h1>Personaliza tu mensaje!</h1>
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('mensajes.mostrar') }}" method="POST">
        <label for="mensaje">Mensaje:</label>
        <input type="text" id="mensaje" name="mensaje" value="{{ old('mensaje') }}" required><br><br>

        <label for="subrayado">Subrayado:</label>
        <input type="checkbox" id="subrayado" name="subrayado"><br><br>

        <label for="negrita">Negrita:</label>
        <input type="checkbox" id="negrita" name="negrita"><br><br>

        <button type="submit">Enviar Mensaje</button>
    </form>
</body>
</html>