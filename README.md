<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Название проекта

## Описание проекта и его функционал
Проект представляет собой веб-приложение для обзора и бронирования билетов на активные ивенты в парке. Он также включает в себя административную панель для управления данными о бронировании, пользователях, комментариях, фотогалерее и ивентах.

## Инструкции по установке
1. Скопируйте репозиторий с GitHub.
2. Установите Composer, следуя инструкциям на https://getcomposer.org/.
3. Установите Node.js, если он не установлен, с официального сайта https://nodejs.org/.
4. Установите Laravel, используя Composer:
    ```bash
    composer install
    ```
5. Установите зависимости Tailwind CSS:
    ```bash
    npm install
    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p
    ```
6. Создайте файл `.env` на основе `.env.example` и укажите информацию о подключении к базе данных.
7. Выполните миграции в базу данных:
    ```bash
    php artisan migrate
    ```

## Примеры использования
1. Запустите локальный сервер Laravel:
    ```bash
    php artisan serve
    ```
2. Соберите статические ресурсы Tailwind CSS:
    ```bash
    npm run dev
    ```
3. Откройте приложение в браузере.

## Список зависимостей
- Laravel
- Tailwind CSS
- Node.js

## Лицензия
[MIT license](https://opensource.org/licenses/MIT).
