<!DOCTYPE html>
<html>
<head>
    <title>Roles</title>
</head>
<body>
    <h1>Selecciona tu tipo</h1>
    <form action="/accion" method="post">
        @csrf
        <button type="submit" name="role" value="administrador">Administrador</button>
        <button type="submit" name="role" value="usuario">Usuario Normal</button>
    </form>
</body>
</html>
