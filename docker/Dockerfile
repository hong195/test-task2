# Указываем базовый образ PHP с Apache
FROM php:8.1-apache

# Устанавливаем необходимые утилиты и расширения PHP
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip exif fileinfo \
    && docker-php-ext-enable exif fileinfo

# Устанавливаем Composer (если нужен для вашего проекта)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем файлы вашего приложения в контейнер
COPY . /var/www/html/

# Настройка прав на файлы
RUN chown -R www-data:www-data /var/www/html

# Указываем рабочую директорию
WORKDIR /var/www/html

# Экспонируем порт для доступа к приложению
EXPOSE 80