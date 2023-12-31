<!DOCTYPE html>
<html>
<head>
    <title>Roles</title>
</head>
<body>
    <h1>Selecciona tu tipo</h1>
    <form action="/accion" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit" name="role" value="administrador">Administrador</button>
        <button type="submit" name="role" value="usuario">Usuario Normal</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pokemon\resources\views/roles.blade.php ENDPATH**/ ?>