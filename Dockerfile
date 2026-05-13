FROM webdevops/php-apache:8.2

WORKDIR /app

COPY . /app

EXPOSE 80
