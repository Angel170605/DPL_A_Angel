# CREACIÓN Y MANDEJO DE BASES DE DATOS EN XAMPP:

## 1. INCIAR XAMPP:

- Usar el comando ```sudo /opt/lampp/manager-linux-x64.run``` para inciar Xampp:

![1](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/1.png)

- Iniciar los servidores:


![2](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/2.png)

## 2. CREACIÓN DE LA BASE DE DATOS:

- Buscamos **localhost** en el navegador y accedemos a **phpMyAdmin** > **Bases de datos**:


![3](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/3.png)

- Le ponemos un nombre a la nueva base de datos y le damos a **Crear**.

## 3. CREACIÓN DE TABLAS EN LA BASE DE DATOS:

- Una vez creada la base de datos, pasaremos a crear su primera tabla. Para ello, le asignamos un nombre, número de columnas, y le damos a **Crear**:

![4](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/4.png)

- Hecho esto, añadimos los nombres de las columnas, los tipos de sus datos, y demás atributos qu eveamos necesarios:

![5](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/5.png)

## 4. CONEXIÓN DE LA BASE DE DATOS

Ya solo falta conectar nuestra base de datos con el servidor php. Para ello tendremos que:

1. Crear el archivo de conexión:

   - Crea el archivo `conexion.php` en el directorio `../../opt/lampp/htdocs`. 
   
![6](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/6.png)
   
![7](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_bases_de_datos_xampp/7.png)

Y de esta forma, ya la base de datos está conectada con el servidor php.

