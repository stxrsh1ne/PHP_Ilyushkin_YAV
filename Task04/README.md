# Игра "Простое ли число"


## Установка через Github

1. Клонируйте репозиторий:
   ```sh
   git clone https://github.com/stxrsh1ne/PHP_Ilyushkin_YAV.git
   ```
2. Перейдите в папку проекта:
   ```sh
   cd logic
   ```
3. Скопируйте файл конфигурации среды:
   ```sh
   cp .env.example .env
   ```
4. Установите зависимости через Composer:
   ```sh
   composer install
   ```
5. Сгенерируйте ключ приложения Laravel:
   ```sh
   php artisan key:generate
   ```
6. Запустите миграции базы данных:
   ```sh
   php artisan migrate
   ```

---
## Как запустить игру

Запустите сервер разработки в терминале:
```sh
php artisan serve
```

Перейдите по адресу: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Требования
- PHP 8.0+
- Composer
- Laravel 9+
