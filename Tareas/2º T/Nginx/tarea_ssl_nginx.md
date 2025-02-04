# Instalación certificado SSL en host virtuales de Nginx con certificado auto-firmado

## Paso 1: Instalar OpenSSL
Asegúrate de tener OpenSSL instalado en tu sistema. Puedes instalarlo con el siguiente comando:
```bash
sudo apt update
sudo apt install openssl
```

## Paso 2: Crear un certificado SSL auto-firmado
Genera un certificado y una clave privada con el siguiente comando:
```bash
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
```
Durante este proceso, se te pedirá que ingreses información como el país, la ciudad, el nombre de la organización, etc. Asegúrate de completar estos campos según tus necesidades.

## Paso 3: Configurar Nginx para usar el certificado SSL
Edita el archivo de configuración de tu host virtual de Nginx. Por ejemplo, si tu archivo de configuración se llama `example.com`, puedes abrirlo con:
```bash
sudo nano /etc/nginx/sites-available/example.com
```

Agrega la siguiente configuración dentro del bloque `server` para habilitar SSL:
```nginx
server {
    listen 443 ssl;
    server_name example.com;  # Cambia esto por tu dominio

    ssl_certificate /etc/ssl/certs/nginx-selfsigned.crt;
    ssl_certificate_key /etc/ssl/private/nginx-selfsigned.key;

    location / {
        # Tu configuración de ubicación aquí
    }
}
```

## Paso 4: Redirigir tráfico HTTP a HTTPS
Para redirigir el tráfico HTTP a HTTPS, agrega otro bloque `server` en el mismo archivo de configuración:
```nginx
server {
    listen 80;
    server_name example.com;  # Cambia esto por tu dominio

    return 301 https://$host$request_uri;
}
```

## Paso 5: Probar la configuración de Nginx
Antes de reiniciar Nginx, es una buena práctica probar la configuración para asegurarte de que no haya errores:
```bash
sudo nginx -t
```

## Paso 6: Reiniciar Nginx
Si la prueba de configuración fue exitosa, reinicia Nginx para aplicar los cambios:
```bash
sudo systemctl restart nginx
```

## Paso 7: Verificar la instalación
Abre tu navegador y visita `https://example.com` (cambia `example.com` por tu dominio). Deberías ver un aviso de seguridad debido a que el certificado es auto-firmado. Puedes proceder a aceptar el riesgo y continuar.

¡Y eso es todo! Has instalado un certificado SSL auto-firmado en Nginx en Ubuntu.
