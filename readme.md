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
<br />
<table>
  <tr>
    <td>Test</td>
    <td>Header</td>
    <td>Body</td>
    <td>Params</td>
    <td>Method</td>
    <td>Response</td>
  </tr>
  <tr>
    <td>Create a new meeting</td>
    <td>{Accept:application/json}</td>
    <td>{title, description, time, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    {
        "msg": "Meeting created successfully !",
        "meeting": {
            "title": "API Dead",
            "description": "??",
            "time": "2018-12-15 10:00:00",
            "updated_at": "2018-12-17 03:11:29",
            "created_at": "2018-12-17 03:11:29",
            "id": 5,
            "view_meeting": {
                "href": "api/v1/meeting/5",
                "method": "GET"
            }
        }
    }
    </td>
  </tr>
  <tr>
    <td>Update a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{title, description, time, user_id, \_method:PATCH}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    {
        "msg": "Meeting update successfully !",
        "meeting": {
            "id": 5,
            "title": "API Dead",
            "description": "??!!",
            "time": "2018-12-15 10:00:00",
            "created_at": "2018-12-17 03:11:29",
            "updated_at": "2018-12-17 03:24:26",
            "view_meeting": {
                "href": "api/v1/meeting5",
                "method": "GET"
            },
            "users": [
                {
                    "id": 1,
                    "name": "user01",
                    "email": "user01@gmail.com",
                    "email_verified_at": null,
                    "created_at": "2018-12-14 15:49:16",
                    "updated_at": "2018-12-14 15:49:16",
                    "pivot": {
                        "meeting_id": 5,
                        "user_id": 1
                    }
                }
            ]
        }
    }
    </td>
  </tr>
  <tr>
    <td>Create a new meeting</td>
    <td>{Accept:application/json}</td>
    <td>{title, description, time, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    </td>
  </tr>
  <tr>
    <td>Create a new meeting</td>
    <td>{Accept:application/json}</td>
    <td>{title, description, time, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    </td>
  </tr>
  <tr>
    <td>Create a new meeting</td>
    <td>{Accept:application/json}</td>
    <td>{title, description, time, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    </td>
  </tr>
</table>


## Installation
## Installation
