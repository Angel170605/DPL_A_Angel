<div align="center">

# REDIRECCIÓN ENTRE PÁGINAS EN PHP:

</div>

## 1. CREAR EL ARCHIVO DE ORIGEN
Primero, crea el archivo PHP desde el cual deseas redirigir. Por ejemplo, `origen.php`.

```php
<?php
// Código PHP aquí
?>
```

## 2. UTILIZAR HEADER()

Dentro del archivo `origen.php`, utiliza la función **header()** para redirigir a la nueva URL. Asegúrate de que esta función se coloque antes de cualquier salida HTML.

```php
<?php
header('Location: destino.php');
exit();
?>
```
## 3. CREAR EL ARCHIVO DE DESTINO

Crea el archivo PHP al cual deseas redirigir, por ejemplo, destino.php.

```php
<?php
// Código PHP para la página de destino
?>
```

## 4. ASEGURARSE DE QUE NO HAYA SALIDA PREVIA

La función **header()** debe ser llamada antes de cualquier salida (como HTML o espacios en blanco). Si hay alguna salida previa, la redirección no funcionará.

Además, se recomienda utilizar la función **exit()** o **die()** después de **header()** con el fin de asegurar que el script se detenga después de la redirección, evitando que se ejecute cualquier código adicional.

```php
<?php
header('Location: nueva_pagina.php');
exit(); // o die();
?>
```

## 5. RESULTADO FINAL:

```php
<?php
// Redireccionar a nueva_pagina.php con un código de estado 302 (redirección temporal)
header('Location: nueva_pagina.php', true, 302);
exit();
?>
```



