<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel-Simple-API

This project is just another simple API example using Laravel 5.7. Using jwt-auth as auth system, this project is developed in a very simple way to make others easy to learn and get the insight from it.


## Preparation
  1. Setup database tools (ex: xampp) -> Create a new database
  2. Install git

## Installation
  This installation is performed using terminal. I assumed you are already known about this terminal uses.

  0. Go to site folders (ex: xampp/htdocs/new-folder)

  1. Clone the repository
  https://github.com/Kalingrowo/Laravel-Simple-API.git

  2. Switch to the repo folder
  cd Meeting-Scheduler-API

  3. Install the dependencies
  composer install

  4. Copy the example .env file (opt: rename the .env.example to .env)
  cp .env.example .env

  5. Configure the generated .env file  
  DB_CONNECTION=mysql
  DB_HOST=localhost*
  DB_PORT=3306
  DB_DATABASE=database_name*
  DB_USERNAME=database_user*
  DB_PASSWORD=database_pass*

  6. Generate a new application key
  php artisan key:generate

  7. Generate jwt secret key
  php artisan jwt:secret

  8. Run the database migrations
  php artisan migrate

  9. Done
