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
    <td>{_method:PATCH, title, description, time, user_id}</td>
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
    <td>Register user in a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{meetin_id, user_id}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    {
        "msg": "User registered successfully !",
        "user": {
            "id": 2,
            "name": "user02",
            "email": "user02@gmail.com",
            "email_verified_at": null,
            "created_at": "2018-12-15 21:53:41",
            "updated_at": "2018-12-15 21:53:41"
        },
        "meeting": {
            "id": 5,
            "title": "API Dead",
            "description": "??!!",
            "time": "2018-12-17 10:24:26",
            "created_at": "2018-12-17 03:11:29",
            "updated_at": "2018-12-17 03:24:26"
        },
        "unregister": {
            "href": "api/v1/meeting/registration/5",
            "method": "DELETE"
        }
    }
    </td>
  </tr>
  <tr>
    <td>Unregister users from a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{_method:DELETE}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    {
        "msg": "All users unregistered for meeting !",
        "user": "xAdmin",
        "meeting": {
            "id": 5,
            "title": "API Dead",
            "description": "??!!",
            "time": "2018-12-17 10:24:26",
            "created_at": "2018-12-17 03:11:29",
            "updated_at": "2018-12-17 03:24:26"
        },
        "register": {
            "href": "api/v1/meeting/registration/",
            "method": "POST",
            "params": "user_id, meeting_id"
        }
    }
    </td>
  </tr>
  <tr>
    <td>Delete a meeting</td>
    <td>{Accept:application/json}</td>
    <td>{_method:DELETE}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    {
        "msg": "A meeting schedule deleted successfully !",
        "create": {
            "href": "api/v1/meeting",
            "method": "POST",
            "params": "title, description, time"
        }
    }
    </td>
  </tr>
  <tr>
    <td>Create a user</td>
    <td>{Accept:application/json}</td>
    <td>{name, email, password}</td>
    <td>{}</td>
    <td>{POST}</td>
    <td>
    {
        "msg": "User created successfully !",
        "user": {
            "name": "user03",
            "email": "user03@gmail.com",
            "updated_at": "2018-12-17 01:30:59",
            "created_at": "2018-12-17 01:30:59",
            "id": 3,
            "login": {
                "href": "api/v1/user/login",
                "method": "POST",
                "params": "email, password"
            }
        }
    }
    </td>
  </tr>
  <tr>
    <td>Get list of meetings</td>
    <td>{Accept:application/json}</td>
    <td>{}</td>
    <td>{}</td>
    <td>{GET}</td>
    <td>
    {
        "msg": "List of all meetings",
        "meetings": [
            {
                "id": 3,
                "title": "Another meeting",
                "description": "Description new meeting (3)",
                "time": "2018-12-14 00:00:00",
                "created_at": "2018-12-15 02:51:21",
                "updated_at": "2018-12-15 02:51:21",
                "view_meeting": {
                    "href": "api/v1/meeting/3",
                    "method": "GET"
                }
            },
            {
                "id": 4,
                "title": "Meet me",
                "description": "Meet someone",
                "time": "2018-12-15 10:00:00",
                "created_at": "2018-12-16 22:26:45",
                "updated_at": "2018-12-16 22:26:45",
                "view_meeting": {
                    "href": "api/v1/meeting/4",
                    "method": "GET"
                }
            }
        ]
    }
    </td>
  </tr>
  <tr>
    <td>Get meeting a detail</td>
    <td>{Accept:application/json}</td>
    <td>{}</td>
    <td>{}</td>
    <td>{GET}</td>
    <td>
    {
        "msg": "Meeting information showed !",
        "meeting": {
            "id": 4,
            "title": "Meet me",
            "description": "Meet someone",
            "time": "2018-12-15 10:00:00",
            "created_at": "2018-12-16 22:26:45",
            "updated_at": "2018-12-16 22:26:45",
            "view_meetings": {
                "href": "api/v1/meeting",
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
                        "meeting_id": 4,
                        "user_id": 1
                    }
                },
                {
                    "id": 3,
                    "name": "user03",
                    "email": "user03@gmail.com",
                    "email_verified_at": null,
                    "created_at": "2018-12-17 01:30:59",
                    "updated_at": "2018-12-17 01:30:59",
                    "pivot": {
                        "meeting_id": 4,
                        "user_id": 3
                    }
                },
                {
                    "id": 2,
                    "name": "user02",
                    "email": "user02@gmail.com",
                    "email_verified_at": null,
                    "created_at": "2018-12-15 21:53:41",
                    "updated_at": "2018-12-15 21:53:41",
                    "pivot": {
                        "meeting_id": 4,
                        "user_id": 2
                    }
                }
            ]
        }
    }
    </td>
  </tr>
  <tr>
    <td>User Login</td>
    <td>{Accept:application/json}</td>
    <td>{email, password}</td>
    <td>{}</td>
    <td>{POST}</td>
    <td>
    {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC92MVwvdXNlclwvbG9naW4iLCJpYXQiOjE1NDUwMTYwODcsImV4cCI6MTU0NTAxOTY4NywibmJmIjoxNTQ1MDE2MDg3LCJqdGkiOiJIdkpoUkVKZ3ZZN3VyWFU0Iiwic3ViIjozLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.gdZUidrnrOPEmm9ULIDd8muIwEtzgUNFKcRPFpVMG28",
        "expires": 3600
    }
    </td>
  </tr>
  <tr>
    <td>User Logout</td>
    <td>{Accept:application/json}</td>
    <td>{}</td>
    <td>{token}</td>
    <td>{POST}</td>
    <td>
    {
        "message": "Successfully logged out"
    }
    </td>
  </tr>
</table>


## Installation
## Installation
