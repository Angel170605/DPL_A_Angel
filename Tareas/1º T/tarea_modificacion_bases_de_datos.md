# 1. INSERTAR REGISTROS EN LA BASE DE DATOS

## 1. INCIAR XAMPP:

- Usar el comando ```sudo /opt/lampp/manager-linux-x64.run``` para inciar Xampp:

![1](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/1.png)

- Iniciar los servidores:


![2](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/2.png)

## INSERCIÓN DE REGISTROS:

- Entramos a la ruta adecuada: ```cd ../../opt/lampp/phpmyadmin```

![1](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/1.png)

- Creamos el fichero **insert.php** usando ```sudo nano insert.php```

![2](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/2.png)

- Y escribimos el siguiente código:

```php
<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "micontraseña", "prueba");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// SQL para insertar un nuevo registro
$sql = "INSERT INTO users (nombre, email) VALUES ('Lamine', 'lamine@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
```

![3](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/3.png)

De esta forma, si escribimos ```http://localhost/insert.php``` en el buscador, se ejecutará el código php y se insertarán los registros en la base de datos.

![4](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/4.png)

# 2. MODIFICAR REGISTROS EN BASES DE DATOS

- En el mismo directorio del apartado anterior, creamos el fichero **modify.php** usando ```sudo nano modify.php```

![5](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/5.png)

- Y escribimos el siguiente código:

```php
<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "micontraseña", "prueba");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// SQL para actualizar un registro
$sql = "UPDATE users SET email='raphinha@example.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error actualizando el registro: " . $conn->error;
}

$conn->close();
?>
```

![6](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/6.png)

De esta forma, si escribimos ```http://localhost/modify.php``` en el buscador, se ejecutará el código php y se modificarán los registros en la base de datos.

![7](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/7.png)

# 3. LEER REGISTROS EN BASE DE DATOS

- En el mismo directorio del apartado anterior, creamos el fichero **read.php** usando ```sudo nano read.php```

![8](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/8.png)

- Y escribimos el siguiente código:

```php
<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "micontraseña", "prueba");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// SQL para seleccionar registros
$sql = "SELECT id, nombre, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
```

![9](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/9.png)

De esta forma, si escribimos ```http://localhost/read.php``` en el buscador, se ejecutará el código php y se mostrarán los registros en la base de datos.

![10](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/10.png)

# 4. ELIMINAR REGISTROS EN BASES DE DATOS

- En el mismo directorio del apartado anterior, creamos el fichero **delete.php** usando ```sudo nano delete.php```

![11](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/11.png)

- Y escribimos el siguiente código:

```php
<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "micontraseña", "prueba");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// SQL para borrar un registro
$sql = "DELETE FROM users WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Registro borrado exitosamente";
} else {
    echo "Error borrando el registro: " . $conn->error;
}

$conn->close();
?>
```

![12](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/12.png)

De esta forma, si escribimos ```http://localhost/modify.php``` en el buscador, se ejecutará el código php y se eliminarán los registros correspondientes en la base de datos.

![13](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_modificacion_bases_de_datos/13.png)
