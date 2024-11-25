# Usa la imagen oficial de Nginx
FROM nginx:latest

# Copia los archivos de tu sitio a la carpeta predeterminada de Nginx
COPY ./html /usr/share/nginx/html
WORKDIR /usr/share/nginx/html

# Exponer el puerto 80
EXPOSE 80