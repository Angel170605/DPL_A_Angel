# TAREA SEGURIDAD XAMPP

## 1. INICIAMOS XAMPP DESDE LA TERMINAL:

```  sudo /opt/lampp/manager-linux-x64.run ```

![1](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/1.png)

## 2. ENCENDER LAS CONEXIONES

> Xampp -> Manage Servers -> Start All

![2](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/2.png)

## 3. ENTRAR EN EL PANEL DE CONTROL

> En el navegador, ponemos **localhost** en la barra de búsuqeda

![3](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/3.png)

> Y vamos al apartado de **phpMyAdmin** -> **Cuentas de usuarios** 

![4](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/4.png)

## 4. CAMBIAR CONTRASEÑA DE ROOT

> Accedemos a la configuración de la cuenta del usuario **root** 

![5](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/5.png)

> Entramos en **Cambiar contraseña**, y la cambiamos

![6](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/6.png)

![7](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/7.png)

## 5. CAMBIAR LA CONFIGURIACIÓN EN EL ARCHIVO LOCAL

> Accedemos al archivo desde teminal. 

- Abrimos el directorio **cd ../../opt/lampp/phpmyadmin**

- Modificamos el archivo con **sudo nano config.inc.php**

- Buscamos la línea **$cfg['Servers'][$i]['password'] = '';**:

![8](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/8.png)

- Añadimos la contraseña entre las commillas:

![9](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/9.png)

> Listo, ya nuestro usuario **root** tiene **contraseña**

## 6. CREAR UN NUEVO USUARIO

> Volvemos al panel de control, poniendo **localhost** en la barra de búsqueda y yendo a **phpMyAdmin**.

![4](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/4.png)

> Ahora nos dirigimos al apartado de **Nuevo** y le damos a **Agregar Usuario**

![10](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/10.png)

> Paso seguido añadimos el nombre de usuario y la contraseña:

![11](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/11.png)

> A continuación, le crearemos las bases de datos:

![12](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/12.png)

> *Opcional: También podemos otorgarle todos o algunos de los permisos*

## 7. VOLVER A CAMBIAR LA CONFIGURACIÓN EN EL ARCHIVO LOCAL

> Una vez más, accedemos al archivo local desde teminal.:

- Abrimos el directorio **cd ../../opt/lampp/phpmyadmin**

- Modificamos el archivo con **sudo nano config.inc.php**

![8](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/8.png)

- Buscamos la línea **$cfg['Servers'][$i]['auth_type'] = 'config';**:

![13](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/13.png)

- Y cambiamos **config** por **http**:

![14](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/14.png)

![15](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea_seguridad_xamp/15.png)




