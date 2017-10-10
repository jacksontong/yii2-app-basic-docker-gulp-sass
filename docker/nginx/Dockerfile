FROM nginx:1.11.10

LABEL maintainer="tongtoan2704@gmail.com"
RUN mkdir -p /var/www

COPY default.conf /etc/nginx/conf.d/default.conf
COPY . /var/www