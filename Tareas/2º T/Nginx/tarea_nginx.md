# Instalación y Configuración Básica de Nginx

## Requisitos Previos

- Asegúrate de tener acceso a un servidor con un sistema operativo compatible (como Ubuntu, Debian, CentOS, etc.).
- Acceso a la terminal con privilegios de sudo.

## Pasos para Instalar Nginx

### 1. Actualizar el Sistema

- Antes de instalar Nginx, es recomendable actualizar el sistema:

    ```bash
    sudo apt update
    sudo apt upgrade
    ```

### 2. Instalar Nginx

- Ejecuta el siguiente comando para instalar Nginx:

    ```bash
    sudo apt install nginx
    ```

### 3. Iniciar y Habilitar Nginx

- Inicia el servicio de Nginx:

    ```bash
    sudo systemctl start nginx
    ```

- Habilita Nginx para que se inicie automáticamente al arrancar el sistema:

    ```bash
    sudo systemctl enable nginx
    ```

### 4. Verificar la Instalación

- Abre tu navegador y visita la dirección IP de tu servidor o `http://localhost`. Deberías ver la página de bienvenida de Nginx.

### 5. Configuración Básica de Nginx

- La configuración principal de Nginx se encuentra en el archivo `/etc/nginx/nginx.conf`. Puedes editarlo con el siguiente comando:

    ```bash
    sudo nano /etc/nginx/nginx.conf
    ```

- Asegúrate de que la sección `http` contenga las configuraciones básicas necesarias. Un ejemplo de configuración básica es:

    ```nginx
    http {
        include       mime.types;
        default_type  application/octet-stream;

        sendfile        on;
        keepalive_timeout  65;

        server {
            listen       80;
            server_name  localhost;

            location / {
                root   /var/www/html;
                index  index.html index.htm;
            }

            error_page  404 /404.html;
            location = /404.html {
                internal;
            }
        }
    }
    ```

- Guarda y cierra el archivo.

### 6. Probar la Configuración de Nginx

- Verifica la configuración de Nginx para errores de sintaxis:

    ```bash
    sudo nginx -t
    ```

- Si no hay errores, recarga Nginx para aplicar los cambios:

    ```bash
    sudo systemctl reload nginx
    ```

### 7. Ajustar el Firewall (si es necesario)

- Si estás utilizando un firewall, asegúrate de permitir el tráfico HTTP y HTTPS:

    ```bash
    sudo ufw allow 'Nginx Full'
    ```

### 8. Probar la Configuración

- Abre tu navegador y visita:

    ```plaintext
    http://tu_dominio_o_IP
    ```

- Deberías ver la página de inicio de Nginx.

## Conclusión

Has instalado y configurado correctamente Nginx en tu servidor. Ahora puedes comenzar a alojar tus aplicaciones web y personalizar la configuración según tus necesidades.