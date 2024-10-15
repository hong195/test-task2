# PHP Dockerized Test 2 Application

## Требования

- Docker
- Docker Compose

## Установка

### 1. Клонирование репозитория

Для начала клонируйте репозиторий на ваш локальный компьютер:

```bash
git clone https://github.com/hong195/test-task2.git
```

### 2. Запуск Docker Compose

Перейдите в директорию проекта и выполните команды:

```docker compose -f /docker/docker-compose.yml up -d```

### 3. Установка зависимостей

Для установки зависимостей выполните команду:

```docker exec -it php_app composer install```

### 4. Запуск

http://localhost:8080/


