# React Laravel Purity Dashboard

Open-source full-stack seed project that uses a `React UI` powered by a simple `Laravel API Server`. **Laravel React Purity** sample can be used to bootstrap fast a new project using a tested `development-ready` stack or simply for eLearning purposes by beginners. For newcomers, **React** is a popular Javascript library for coding user interfaces baked by Facebook and Laravel is a leading web framework written in PHP. 

> Links

- [React Laravel Purity Dashboard](https://appseed.us/product/laravel-react-purity-dashboard) - product page
- [React Laravel Purity Dashboard](https://laravel-react-purity-dashboard.appseed-srv1.com) - LIVE Demo
- LIVE [Support](https://react-flask-authentication.appseed-srv1.com/) via [Discord](https://discord.gg/fZC6hup) - provided by AppSeed

<br />

![React Laravel Purity Dashboard - Open-source full-stack seed project crafted by Creative-Tim and AppSeed.](https://user-images.githubusercontent.com/51070104/137163880-b117bb7b-daab-45dc-ae88-956cbe966d02.gif)

<br />

## General Information

The product is built using a `two-tier` pattern where the React frontend is decoupled logically and physically from the API backend. In order to use the product in a local environment, a few simple steps are required: 

- `Compile and start` the **Laravel API Backend**
  - be default the server starts on port `5000`
- `Compile and start` the **React UI**
  - UI will start on port `3000` and expects a running backend on port `5000`
- `Configuration` (Optional)
  - Change the API port
  - Configure the API port used by the React UI to communicate with the backend 

<br />

## How to use the product

### Start the Laravel API 

```bash
$ cd laravel-api
$ 
$ # Install Modules
$ composer install
$ cp .env.example .env 
$ php artisan key:generate
$
$ # Generate a `secret` key used by JWT Authentication Flow
$ php artisan jwt:secret
$ 
$ # Set up the database
$ touch database/database.sqlite
$ php artisan migrate
$
$ # Start the server
$ php -S localhost:5000 server.php
```

<br />

![Laravel API Server - Open-source Seed project.](https://user-images.githubusercontent.com/51070104/141784950-b63f71bb-192e-4851-af6b-1b7a99226c9f.jpg)

<br />

### Troubleshooting

To have a successful compilation of this product, make sure you have the following PHP extensions installed and enabled:

- `php-xml` - required by Php-Unit
- `php7.4-sqlite` - The SQLite driver required by Laravel ORM

```bash
$ # Php XML - required by Php Unit
$ sudo apt install php-xml php-cli php-mbstring php7.4-sqlite
```

<br />

### Compile & start the React UI

```bash
$ cd react-ui
$
$ # Install Modules
$ yarn
$
$ # Start for development (LIVE Reload)
$ yarn start 
```

<br />

### Configuration (Optional)

> Change the port exposed by the Flask API

```bash
$ flask run --port 5001
```

Now, the API can be accessed on port `5001`

<br />

> Update the API port used by the React Frontend

**API Server URL** - `src/config/constant.js` 

```javascript
const config = {
    ...
    API_SERVER: 'http://localhost:5000/api/'  // <-- The magic line
};
```

<br />

## API

For a fast set up, use this POSTMAN file: [api_sample](https://github.com/app-generator/api-unified-definition/blob/main/api.postman_collection.json)

> **Register** - `api/users/register` (**POST** request)

```
POST api/users/register
Content-Type: application/json

{
    "username":"test",
    "password":"pass", 
    "email":"test@appseed.us"
}
```

<br />

> **Login** - `api/users/login` (**POST** request)

```
POST /api/users/login
Content-Type: application/json

{
    "password":"pass", 
    "email":"test@appseed.us"
}
```

<br />

> **Logout** - `api/users/logout` (**POST** request)

```
POST api/users/logout
Content-Type: application/json
authorization: JWT_TOKEN (returned by Login request)

{
    "token":"JWT_TOKEN"
}
```

<br />

## Product UI

> React Laravel Purity Dashboard - Login 

![React Laravel Purity Dashboard - Login.](https://user-images.githubusercontent.com/51070104/141444378-763ca3fb-c18c-4558-9730-b42a341a7b22.jpg)

<br />

> React Laravel Purity Dashboard - Icons

![React Laravel Purity Dashboard - Icons.](https://user-images.githubusercontent.com/51070104/141444472-8c966396-69dc-46c3-835e-b64329fdbf7d.jpg)

<br />

> React Laravel Purity Dashboard - Colors

![React Laravel Purity Dashboard - Colors.](https://user-images.githubusercontent.com/51070104/141444532-46a3bcd0-841b-4725-aa82-122569cd678a.jpg)

<br />

## Links & Resources

- Ask for [Support](https://appseed.us/support) on [Discord](https://discord.gg/fZC6hup)
- See for [React Starters](https://appseed.us/apps/react) - index provided by AppSeed

<br />

---
**React Laravel Purity Dashboard** - Open-source full-stack seed project provided by **AppSeed [App Generator](https://appseed.us/)**
