FROM nginx:latest

COPY config/nginx.conf /etc/nginx/nginx.conf
COPY config/www /var/www/html/

RUN chmod -R 755 /var/www/html

CMD ["nginx", "-g", "daemon off;"]