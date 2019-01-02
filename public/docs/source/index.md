---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_252941a151d9381a497ff9f4fcd7c736 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/meeting" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
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
                "href": "api\/v1\/meeting\/3",
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
                "href": "api\/v1\/meeting\/4",
                "method": "GET"
            }
        },
        {
            "id": 5,
            "title": "Meet Inspire API",
            "description": "Meeting and interview",
            "time": "2018-12-14 00:00:00",
            "created_at": "2019-01-02 14:43:55",
            "updated_at": "2019-01-02 14:43:55",
            "view_meeting": {
                "href": "api\/v1\/meeting\/5",
                "method": "GET"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/meeting`


<!-- END_252941a151d9381a497ff9f4fcd7c736 -->

<!-- START_b5e43f5a2b64e1e585fb72d907fab038 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/meeting" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`POST api/v1/meeting`


<!-- END_b5e43f5a2b64e1e585fb72d907fab038 -->

<!-- START_465fce8173591ce7fdcbfbb4c1692ba3 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/meeting/{meeting}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting/{meeting}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Meeting information showed !",
    "meeting": {
        "id": 5,
        "title": "Meet Inspire API",
        "description": "Meeting and interview",
        "time": "2018-12-14 00:00:00",
        "created_at": "2019-01-02 14:43:55",
        "updated_at": "2019-01-02 14:43:55",
        "view_meetings": {
            "href": "api\/v1\/meeting",
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
```

### HTTP Request
`GET api/v1/meeting/{meeting}`


<!-- END_465fce8173591ce7fdcbfbb4c1692ba3 -->

<!-- START_4c6db41d11a63735a162460a8eb0bfbc -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/meeting/{meeting}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting/{meeting}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`PUT api/v1/meeting/{meeting}`

`PATCH api/v1/meeting/{meeting}`


<!-- END_4c6db41d11a63735a162460a8eb0bfbc -->

<!-- START_47918cf37e12dec2d31daaeb06093ab4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/meeting/{meeting}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting/{meeting}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`DELETE api/v1/meeting/{meeting}`


<!-- END_47918cf37e12dec2d31daaeb06093ab4 -->

<!-- START_9558eeb57f005a63ca416dc694e272d4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/meeting/registration" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting/registration");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`POST api/v1/meeting/registration`


<!-- END_9558eeb57f005a63ca416dc694e272d4 -->

<!-- START_a501ebc203ec737f7ceac2d61b3ad845 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/meeting/registration/{registration}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/meeting/registration/{registration}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`DELETE api/v1/meeting/registration/{registration}`


<!-- END_a501ebc203ec737f7ceac2d61b3ad845 -->

<!-- START_7fef01e7235c89049ebe3685de4bff17 -->
## api/v1/user/register
> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/register" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/user/register");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/user/register`


<!-- END_7fef01e7235c89049ebe3685de4bff17 -->

<!-- START_f6b3e0e5b4d98fabc68a75699fa2abfc -->
## api/v1/user/signin
> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/signin" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/user/signin");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "error": "Unauthorized"
}
```

### HTTP Request
`POST api/v1/user/signin`


<!-- END_f6b3e0e5b4d98fabc68a75699fa2abfc -->

<!-- START_eb01513bcbe152fb4e4f1c9d53778d0b -->
## api/v1/user/signout
> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/signout" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/user/signout");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`POST api/v1/user/signout`


<!-- END_eb01513bcbe152fb4e4f1c9d53778d0b -->


