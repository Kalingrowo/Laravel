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
  <br />1. Setup database tools (ex: xampp) -> Create a new database
  <br />2. Install git

## Installation
  This installation is performed using terminal. I assumed you are already known about this terminal uses.

  <br />0. Go to site folders (ex: xampp/htdocs/new-folder)

  <br />1. Clone the repository
  <br />https://github.com/Kalingrowo/Laravel-Simple-API.git
<br />
  <br />2. Switch to the repo folder
  <br />cd Meeting-Scheduler-API
<br />
  <br />3. Install the dependencies
  <br />composer install
<br />
  <br />4. Copy the example .env file (opt: rename the .env.example to .env)
  <br />cp .env.example .env
<br />
  <br />5. Configure the generated .env file  
  <br />DB_CONNECTION=mysql
  <br />DB_HOST=localhost*
  <br />DB_PORT=3306
  <br />DB_DATABASE=database_name*
  <br />DB_USERNAME=database_user*
  <br />DB_PASSWORD=database_pass*
<br />
  <br />6. Generate a new application key
  <br />php artisan key:generate
<br />
  <br />7. Generate jwt secret key
  <br />php artisan jwt:secret
<br />
  <br />8. Run the database migrations
  <br />php artisan migrate
<br />
  <br />9. Done
