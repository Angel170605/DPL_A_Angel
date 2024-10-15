<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Formularios para usuarios</title>
    <link rel="stylesheet" href='users_admin.css'>
</head>
<body>
    <h1>Gestión usuarios</h1>
        <div class="forms">

            <!-- Formulario de registro -->
        <div class="formu register">
            <h2>Registro de usuario</h2>
            <form action="insert.php" method="post" target="_blank">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <input type="submit" value="Crear">
            </form>
        </div>

            <!-- Formulario de eliminación -->
        <div class="formu delete">
            <h2>Eliminar usuario</h2>
            <form action="delete.php" method="post" target="_blank">
                <label for="id">ID del usuario:</label>
                <input type="number" id="id" name="id"><br><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <input type="submit" value="Eliminar">
            </form>
        </div>

            <!-- Formulario de modificación -->
        <div class="formu modify">
            <h2>Modificar usuario</h2>
            <form action="modify.php" method="post" target="_blank">
                <label for="id">ID del usuario:</label>
                <input type="number" id="id" name="id"><br><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <input type="submit" value="Modificar">
            </form>
        </div>
        </div>

</body>
</html>



