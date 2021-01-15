<!doctype html>
<html>
    <head>
        <title>Nuevo Mensaje</title>
    </head>
    <body>
        <p>Correo: {{ $mensaje['email'] }}</p>
        <p>Nombre: {{ $mensaje['name'] }}</p>
        <p>Mensaje: {{ $mensaje['mensaje'] }}</p>
    </body>
</html>