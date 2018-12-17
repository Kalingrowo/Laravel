<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

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
<br />
<table>
  <tr>
    <td>Test</td>
    <td>Header</td>
    <td>Body</td>
    <td>Params</td>
    <td>Method</td>
    <td>URI</td>
  </tr>
  <tr>
    <td>Create a new meeting</td>
    <td>{Accept:application/json}</td>
    <td>{title, description, time, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>api/v1/meeting</td>
  </tr>
  <tr>
    <td>Update a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{_method:PATCH, title, description, time, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>api/v1/meeting/{meeting}</td>
  </tr>
  <tr>
    <td>Delete a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{_method:DELETE}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>api/v1/meeting/{meeting}</td>
  </tr>
  <tr>
    <td>Register user in a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{meetin_id, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>api/v1/meeting/registration</td>
  </tr>
  <tr>
    <td>Unregister users from a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{_method:DELETE}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>api/v1/meeting/registration/{registration}</td>
  </tr>
  <tr>
    <td>Create a user</td>
    <td>{Accept:application/json}</td>
    <td>{name, email, password}</td>
    <td>{}</td>
    <td>{POST}</td>
    <td>api/v1/user/register</td>
  </tr>
  <tr>
    <td>Get list of meetings</td>
    <td>{Accept:application/json}</td>
    <td>{}</td>
    <td>{}</td>
    <td>{GET}</td>
    <td>api/v1/meeting</td>
  </tr>
  <tr>
    <td>Get meeting a detail</td>
    <td>{Accept:application/json}</td>
    <td>{}</td>
    <td>{}</td>
    <td>{GET}</td>
    <td>api/v1/meeting/{meeting}</td>
  </tr>
  <tr>
    <td>User Login</td>
    <td>{Accept:application/json}</td>
    <td>{email, password}</td>
    <td>{}</td>
    <td>{POST}</td>
    <td>api/v1/user/login</td>
  </tr>
  <tr>
    <td>User Logout</td>
    <td>{Accept:application/json}</td>
    <td>{}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>api/v1/user/logout</td>
  </tr>
</table>


## Installation
## Installation
