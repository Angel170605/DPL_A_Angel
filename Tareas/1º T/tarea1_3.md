# Guía paso a paso para trabajar con GitHub y Visual Studio en Linux

## 1. Crear una cuenta en GitHub
1. Ve a GitHub.
2. Haz clic en **Sign up**.
3. Sigue las instrucciones para crear tu cuenta.

## 2. Crear un repositorio llamado "banco"
1. Inicia sesión en tu cuenta de GitHub.
2. Haz clic en el icono **+** en la esquina superior derecha y selecciona **New repository**.
3. Nombra el repositorio `banco` y haz clic en **Create repository**.

## 3. Clonar el repositorio desde la línea de comandos
1. Abre una terminal.
2. Ejecuta el siguiente comando, reemplazando `<tu-usuario>` con tu nombre de usuario de GitHub:
    ```bash
    git clone https://github.com/<tu-usuario>/banco.git
    ```

## 4. En otra carpeta, crea un proyecto llamado "banco"
1. Navega a la ubicación donde quieres crear el proyecto:
    ```bash
    cd /ruta/a/tu/carpeta
    ```
2. Crea una nueva carpeta para el proyecto:
    ```bash
    mkdir banco
    cd banco
    ```
3. Inicializa un nuevo proyecto (esto puede variar según el tipo de proyecto, aquí un ejemplo con Node.js):
    ```bash
    npm init -y
    ```

## 5. Copiar la carpeta del proyecto del banco a la carpeta en la que has clonado el repositorio
1. Navega a la carpeta donde clonaste el repositorio:
    ```bash
    cd /ruta/a/tu/repositorio/banco
    ```
2. Copia los archivos del proyecto a esta carpeta:
    ```bash
    cp -r /ruta/a/tu/proyecto/banco/* .
    ```

## 6. Hacer un commit y push desde Visual Studio
1. Abre Visual Studio Code.
2. Abre la carpeta del repositorio clonado:
    ```bash
    code /ruta/a/tu/repositorio/banco
    ```
3. En Visual Studio Code, abre la pestaña de **Source Control**.
4. Añade los archivos al control de versiones:
    ```bash
    git add .
    ```
5. Haz un commit:
    ```bash
    git commit -m "Añadir proyecto banco"
    ```
6. Haz push al repositorio:
    ```bash
    git push origin main
    ```

## 7. Borrar del disco duro todo el código del banco
1. Navega a la carpeta del proyecto:
    ```bash
    cd /ruta/a/tu/proyecto
    ```
2. Borra la carpeta del proyecto:
    ```bash
    rm -rf banco
    ```

## 8. Clonar el proyecto del banco de GitHub a local
1. Abre una terminal.
2. Ejecuta el siguiente comando, reemplazando `<tu-usuario>` con tu nombre de usuario de GitHub:
    ```bash
    git clone https://github.com/<tu-usuario>/banco.git
    ```

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
