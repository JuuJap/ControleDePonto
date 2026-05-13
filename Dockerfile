FROM webdevops/php-apache:8.2

WORKDIR /app

COPY . /app/public

EXPOSE 80
