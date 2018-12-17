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
  <br />3. Install Postman


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
  <br />9. Test
  <br />php artisan serve


## Testing API
The way to test the API (using Postman)
<br />1. Run the development server
<br />php artisan serve
<br />
<br />2. API can be accessed at
<br />127.0.0.1:8000/
<br />
<br />3. open Postman
<br />
<br />4. Request test
<br />a. Create a new meeting
<br />a.1 Header
<br />a.2 Body
<br />a.3 Params
<br />a.4 Method
<br />a.5. Response
<br />b. Update a meeting
<br />b.1 Header
<br />b.2 Body
<br />b.3 Params
<br />b.4 Method
<br />b.5. Response
<br />c. Delete a meeting
<br />c.1 Header
<br />c.2 Body
<br />c.3 Params
<br />c.4 Method
<br />c.5. Response
<br />d. Register a user to a meeting
<br />d.1 Header
<br />d.2 Body
<br />d.3 Params
<br />d.4 Method
<br />d.5. Response
<br />e. Remove users from a meeting
<br />e.1 Header
<br />e.2 Body
<br />e.3 Params
<br />e.4 Method
<br />e.5. Response
<br />f. Create a new user
<br />f.1 Header
<br />f.2 Body
<br />f.3 Params
<br />f.4 Method
<br />f.5. Response
<br />g. Login user
<br />g.1 Header
<br />g.2 Body
<br />g.3 Params
<br />g.4 Method
<br />g.5. Response
<br />h. Logout user
<br />h.1 Header
<br />h.2 Body
<br />h.3 Params
<br />h.4 Method
<br />h.5. Response
<br />i. Get list of meetings
<br />i.1 Header
<br />i.2 Body
<br />i.3 Params
<br />i.4 Method
<br />i.5. Response
<br />j. Get a meeting details
<br />j.1 Header
<br />j.2 Body
<br />j.3 Params
<br />j.4 Method
<br />j.5. Response




## Installation
## Installation
