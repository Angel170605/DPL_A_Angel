# Guía paso a paso para trabajar con GitHub y Visual Studio en Linux

## 1. Crear una cuenta en GitHub
1. Entrar a [GitHub](https://github.com).
2. Darle a **Sign up**.
3. Seguir las instrucciones para crear tu cuenta.

![1](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/1.png)

## 2. Crear un repositorio llamado "banco"
1. Iniciar sesión en tu cuenta de GitHub.
2. En la esquina superior derecha, hay que pulsar el icono **+** y seleccionar **New repository**.
3. Llamar el repositorio `banco` y darle a **Create repository**.

![2](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/2.png)

## 3. Clonar el repositorio desde la línea de comandos
1. Abre una terminal.
2. Ejecuta el siguiente comando, reemplazando `Angel170605` con tu nombre de usuario de GitHub:
    ```bash
    git clone https://github.com/Angel170605/banco.git
    ```

![3](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/3.png)

## 4. En otra carpeta, crea un proyecto llamado "banco"
1. Buscar la ruta en la que crear el proyecto:
    ```bash
    cd /ruta/a/la/carpeta
    ```
2. Crea una nueva carpeta para el proyecto:
    ```bash
    mkdir banco
    cd banco
    ```

![4](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/4.png)

## 5. Copiar la carpeta del proyecto del banco a la carpeta en la que has clonado el repositorio
1. Volver a la carpeta donde está el repositorio **banco**:
    ```bash
    cd /ruta/al/repositorio/banco
    ```
2. Copia los archivos del proyecto a esta carpeta:
    ```bash
    cp -r /ruta/a/proyecto_banco/* .
    ```

![5](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/5.png)

## 6. Hacer un commit y push desde Visual Studio
1. Abrir la carpeta del repositorio clonado en Visual Studio desde la terminal:
    ```bash
    code /ruta/a/tu/repositorio/banco
    ```
2. En Visual Studio Code, abrir una nueva terminal **Terminal -> New Terminal** o **[Ctrl + Shift + `]**.

![6](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/6.png)


3. Añade los archivos al control de versiones:
    ```bash
    git add .
    ```
4. Haz un commit:
    ```bash
    git commit -m "Añadir proyecto banco"
    ```
5. Haz push al repositorio:
    ```bash
    git push
    ```

![7](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/7.png)

## 7. Borrar del disco duro todo el código del banco
1. Volver a la carpeta del proyecto:
    ```bash
    cd /ruta/a/proyecto_banco
    ```
2. Borra la carpeta del proyecto:
    ```bash
    rm -rf proyecto_banco
    ```

![8](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/8.png)

## 8. Clonar el proyecto del banco de GitHub a local
1. Abre una terminal.
2. Ejecuta el siguiente comando:
    ```bash
    git clone https://github.com/Angel170605/banco.git
    ```

![9](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/9.png)

## 9. Hacer una modificación del código y subirlo a GitHub
1. Navega a la carpeta del repositorio clonado:
    ```bash
    cd banco
    ```
2. Abre el archivo que deseas modificar en tu editor de texto favorito y realiza los cambios.
3. Guarda los cambios y añade los archivos al control de versiones:
    ```bash
    git add .
    ```
4. Haz un commit con los cambios:
    ```bash
    git commit -m "Realizar cambios en el proyecto banco"
    ```
5. Haz push al repositorio:
    ```bash
    git push origin main
    ```

![10](https://github.com/Angel170605/DPL_A_Angel/blob/main/IMGS/tarea1_3/10.png)
