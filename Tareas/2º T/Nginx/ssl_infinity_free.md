# Instalación de un Certificado SSL en InfinityFree

## Paso 1: Obtener un Certificado SSL
1. **Generar un Certificado SSL**: Puedes utilizar servicios como [Let's Encrypt](https://letsencrypt.org/) o [ZeroSSL](https://zerossl.com/) para obtener un certificado SSL gratuito. Sigue las instrucciones en sus sitios web para generar un certificado.
2. **Descargar el Certificado**: Una vez que hayas generado el certificado, descarga los archivos necesarios, que generalmente incluyen:
   - El certificado (archivo `.crt`).
   - La clave privada (archivo `.key`).
   - Un archivo de cadena de certificados (opcional, pero recomendado).

## Paso 2: Acceder a tu Panel de Control de InfinityFree
1. Inicia sesión en tu cuenta de InfinityFree.
2. Dirígete al panel de control de tu cuenta.

## Paso 3: Ir a la sección de SSL
1. En el panel de control, busca la opción **"SSL Certificates"** o **"Certificados SSL"**. Esto puede variar según la interfaz de InfinityFree.
2. Haz clic en esta opción para acceder a la sección de gestión de certificados SSL.

## Paso 4: Instalar el Certificado SSL
1. **Subir el Certificado**: En la sección de SSL, deberías ver campos para ingresar tu certificado y clave privada.
   - **Certificado**: Copia y pega el contenido de tu archivo `.crt` en el campo correspondiente.
   - **Clave Privada**: Copia y pega el contenido de tu archivo `.key` en el campo correspondiente.
   - **Cadena de Certificados**: Si tienes un archivo de cadena de certificados, pégalo en el campo correspondiente (si está disponible).

2. **Guardar Cambios**: Después de ingresar todos los datos, asegúrate de guardar los cambios.

## Paso 5: Verificar la Instalación
1. Una vez que hayas instalado el certificado, espera unos minutos para que los cambios se propaguen.
2. Abre tu navegador y visita tu sitio web utilizando `https://tudominio.com` (reemplaza `tudominio.com` con tu dominio real).
3. Verifica que el candado de seguridad aparezca en la barra de direcciones, lo que indica que el certificado SSL está instalado correctamente.

## Paso 6: Configurar Redirección a HTTPS (Opcional)
Para asegurarte de que todos los visitantes utilicen HTTPS, puedes configurar una redirección:
1. Accede al **Administrador de Archivos** en tu panel de control.
2. Busca el archivo `.htaccess` en la raíz de tu sitio web. Si no existe, créalo.
3. Agrega las siguientes líneas al archivo `.htaccess`:
   ```apache
   RewriteEngine On
   RewriteCond %{HTTPS} off
   RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

## Conclusión
¡Felicidades! Has instalado un certificado SSL en tu sitio web de InfinityFree. Ahora tu sitio es más seguro y los visitantes pueden navegar con confianza.
