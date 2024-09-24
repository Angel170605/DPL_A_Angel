# Métodos de Paso de Variables de Formularios: GET y POST

Los formularios en HTML pueden enviar datos al servidor utilizando principalmente dos métodos: GET y POST. Depende del uso de l apágina web, puede ser más conveniente el uso de uno u otro. Veamos sus diferencias:

## 1. Método GET

El método GET envía los datos del formulario como parte de la URL. Esto significa que los datos son visibles en la barra de direcciones del navegador. Es útil para búsquedas y cuando se desea que los datos sean accesibles a través de un enlace.

### Pasos para usar el método GET:

1. Crear un formulario HTML.
2. Establecer el **atributo method** del formulario a **GET**.
3. Incluir los campos de entrada necesarios.
4. Al enviar el formulario, los datos se adjuntan a la URL.

### Ejemplo de formulario con el método GET:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario GET</title>
</head>
<body>
    <form action="procesar_get.php" method="get"> 
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

## 2. Método POST

El método POST envía los datos del formulario en el cuerpo de la solicitud HTTP, lo que significa que no son visibles en la URL. Es más seguro para enviar información sensible y se utiliza comúnmente para enviar datos que cambian el estado del servidor.

### Pasos para usar POST:

1. Crear un formulario HTML.
2. Establecer el **atributo method** del formulario a **POST**.
3. Incluir los campos de entrada necesarios.
4. Al enviar el formulario, los datos se envían en el cuerpo de la solicitud.

### Ejemplo de formulario POST:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario POST</title>
</head>
<body>
    <form action="procesar_post.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

´´´
