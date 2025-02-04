# Instalación de Certificado Let's Encrypt con Certbot en Nginx con Host Virtuales

## Paso 1: Instalar Certbot
Primero, necesitas instalar Certbot y el plugin de Nginx. Abre una terminal y ejecuta los siguientes comandos:
```bash
sudo apt update
sudo apt install certbot python3-certbot-nginx
```

## Paso 2: Configurar Nginx
Asegúrate de que tu configuración de Nginx esté correctamente configurada para tus host virtuales. Abre el archivo de configuración de tu host virtual. Por ejemplo:
```bash
sudo nano /etc/nginx/sites-available/tu_dominio
```

Asegúrate de que el bloque `server` para el puerto 80 esté configurado correctamente. Debe verse algo así:
```nginx
server {
    listen 80;
    server_name tu_dominio www.tu_dominio;  # Cambia esto por tu dominio

    location / {
        # Tu configuración de ubicación aquí
    }
}
```

## Paso 3: Probar la Configuración de Nginx
Antes de continuar, verifica que la configuración de Nginx no tenga errores:
```bash
sudo nginx -t
```
Si no hay errores, reinicia Nginx:
```bash
sudo systemctl restart nginx
```

## Paso 4: Obtener el Certificado SSL
Ahora puedes usar Certbot para obtener un certificado SSL. Ejecuta el siguiente comando:
```bash
sudo certbot --nginx -d tu_dominio -d www.tu_dominio
```
Reemplaza `tu_dominio` y `www.tu_dominio` con tu dominio real. Certbot te guiará a través del proceso y te pedirá que ingreses tu dirección de correo electrónico y aceptes los términos del servicio.

## Paso 5: Configurar Redirección a HTTPS
Durante el proceso de obtención del certificado, Certbot te preguntará si deseas redirigir todo el tráfico HTTP a HTTPS. Selecciona la opción para redirigir.

## Paso 6: Verificar la Instalación
Una vez que Certbot haya terminado, abre tu navegador y visita `https://tu_dominio` (cambia `tu_dominio` por tu dominio real). Deberías ver un candado en la barra de direcciones, lo que indica que el certificado SSL está instalado correctamente.

## Paso 7: Configurar la Renovación Automática
Let's Encrypt los certificados son válidos por 90 días, pero Certbot puede configurarse para renovarlos automáticamente. Para asegurarte de que la renovación automática esté configurada, puedes ejecutar el siguiente comando:
```bash
sudo certbot renew --dry-run
```
Esto simula el proceso de renovación y te asegura que todo esté funcionando correctamente.

## Conclusión
¡Felicidades! Has instalado un certificado SSL de Let's Encrypt en Nginx con host virtuales. Tu sitio ahora es más seguro y los visitantes pueden navegar con confianza.
