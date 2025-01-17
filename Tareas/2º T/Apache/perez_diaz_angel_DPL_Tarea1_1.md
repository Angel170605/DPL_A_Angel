# Tarea 1.1: Instalación de Apache y Tomcat

## 1. ¿Cuáles son las tres capas de la arquitectura web y cuál es la función de cada una de ellas?

La arquitectura web se compone de tres capas principales:

1. **Capa de presentación (Frontend)**:
   - **Función**: Es la interfaz de usuario, donde los usuarios interactúan con la aplicación web. Se encarga de mostrar la información y recibir las entradas del usuario. Utiliza tecnologías como HTML, CSS y JavaScript.

2. **Capa de lógica de negocio (Backend)**:
   - **Función**: Procesa la lógica de la aplicación, maneja las solicitudes del usuario y se comunica con la base de datos. Esta capa se encarga de la lógica de la aplicación y puede estar construida con lenguajes como PHP, Python, Java, entre otros.

3. **Capa de datos (Base de datos)**:
   - **Función**: Almacena y gestiona los datos utilizados por la aplicación. Se encarga de la persistencia de la información y puede utilizar sistemas de gestión de bases de datos como MySQL, PostgreSQL, MongoDB, etc.

## 2. Explica en qué consiste LAMP y WISA.

- **LAMP**:
  - **Descripción**: LAMP es un acrónimo que se refiere a un conjunto de software de código abierto que se utiliza para desarrollar aplicaciones web. Consiste en:
    - **Linux**: Sistema operativo.
    - **Apache**: Servidor web.
    - **MySQL**: Sistema de gestión de bases de datos.
    - **PHP/Python/Perl**: Lenguajes de programación para la lógica de la aplicación.
  - **Función**: Proporciona un entorno completo para el desarrollo y la ejecución de aplicaciones web dinámicas.

- **WISA**:
  - **Descripción**: WISA es un acrónimo que se refiere a un conjunto de tecnologías de Microsoft para el desarrollo de aplicaciones web. Consiste en:
    - **Windows**: Sistema operativo.
    - **IIS (Internet Information Services)**: Servidor web.
    - **SQL Server**: Sistema de gestión de bases de datos.
    - **ASP.NET**: Framework para el desarrollo de aplicaciones web.
  - **Función**: Proporciona un entorno robusto y escalable para el desarrollo de aplicaciones web en plataformas de Microsoft.

## 3. Pasos para instalar y configurar Apache y Tomcat en Ubuntu 10.04 LTS

### 3.1. Instalar el servidor web Apache desde terminal.

- Abrir la terminal.
- Actualizar el índice de paquetes:
    ```bash
    apt-get update
    ```
- Instalar Apache:
    ```bash
    apt-get install apache2
    ```

### 3.2. Comprobar que está funcionando el servidor Apache desde terminal.

- Verificar el estado del servicio Apache:
    ```bash
    service apache2 status
    ```
    - Deberías ver un mensaje que indica que Apache está activo (running).

### 3.3. Comprobar que está funcionando el servidor Apache desde navegador.

- Abrir un navegador web.
- Ingresar la dirección:
    ```
    http://localhost
    ```
    - Deberías ver la página de inicio de Apache, que indica que el servidor está funcionando correctamente.

### 3.4. Cambiar el puerto por el cual está escuchando Apache pasándolo al puerto 82.

- Editar el archivo de configuración de Apache:
    ```bash
    nano /etc/apache2/ports.conf
    ```
- Cambiar la línea que dice `Listen 80` a `Listen 82`.
- Guardar y salir del editor (en nano, presiona `CTRL + X`, luego `Y` y `Enter`).
- Editar el archivo de configuración del sitio por defecto:
    ```bash
    nano /etc/apache2/sites-available/000-default.conf
    ```
- Cambiar la línea que dice `<VirtualHost *:80>` a `<VirtualHost *:82>`.
- Guardar y salir del editor.
- Reiniciar Apache para aplicar los cambios:
    ```bash
    service apache2 restart
    ```

### 3.5. Instalar el servidor de aplicaciones Tomcat.

- Instalar Java (requerido para Tomcat):
    ```bash
    apt-get install default-jdk
    ```
- Descargar Tomcat:
    ```bash
    cd /opt
    wget https://downloads.apache.org/tomcat
    ```