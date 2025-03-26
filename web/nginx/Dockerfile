FROM nginx:latest

# Installer Certbot et les outils SSL
RUN apt-get update && apt-get install -y certbot python3-certbot-nginx

# Copier la configuration Nginx
COPY nginx.conf /etc/nginx/nginx.conf