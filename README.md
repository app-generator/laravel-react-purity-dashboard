# [React Laravel Purity Dashboard](https://appseed.us/product/laravel-react-purity-dashboard)

Open-source full-stack seed project that uses a `React UI` powered by a simple `Laravel API Server`. **[Laravel React Purity](https://appseed.us/product/laravel-react-purity-dashboard)** sample can be used to bootstrap fast a new project using a tested `development-ready` stack or simply for eLearning purposes by beginners. For newcomers, **React** is a popular Javascript library for coding user interfaces baked by Facebook and **Laravel** is a leading web framework written in PHP. 

<br />

> Features

- Innovative **Chakra UI** Design - Creafted by [Creative-Tim](https://bit.ly/3fKQZaL)
- React, Redux, Redux-persist
- Authentication: JWT Login/Register/Logout
- Full-stack ready using **[Laravel API Server](https://github.com/app-generator/api-server-laravel)** (open-source project)
  - Simple, intuitive codebase - can be extended with ease.
  - Stack: PHP 7.4+ / Laravel 8 / Doctrine
  - Authentication via [JWT Auth](https://github.com/tymondesigns/jwt-auth) a dedicated library for Laravel and Lumen
  
<br />

> Links

- [React Laravel Purity Dashboard](https://appseed.us/product/laravel-react-purity-dashboard) - product page
- [React Laravel Purity Dashboard](https://laravel-react-purity-dashboard.appseed-srv1.com/#/auth/signin) - LIVE Demo
- LIVE [Support](https://appseed.us/support) via [Discord](https://discord.gg/fZC6hup) - provided by AppSeed

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

### Step #1 - Start the Laravel API 

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

### Step #2 - Compile & start the React UI

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

> Change the port exposed by the Laravel API

```bash
$ php -S localhost:5001 server.php
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

> React Laravel Purity Dashboard - User 

![React Laravel Purity Dashboard - User.](https://user-images.githubusercontent.com/51070104/141836783-7ae01bb4-4505-4d14-990d-be49a12a8cea.png)

<br />

> React Laravel Purity Dashboard - Billing

![React Laravel Purity Dashboard - Billing.](https://user-images.githubusercontent.com/51070104/141836831-2d5c61a4-889b-4c4c-903b-98c2f7c8bdd8.png)

<br />

> React Laravel Purity Dashboard - RTL Support

![React Laravel Purity Dashboard - RTL Support.](https://user-images.githubusercontent.com/51070104/141836894-d0339a57-4584-45ed-bd83-53cb0eaa8485.png)

<br />

## Links & Resources

- Ask for [Support](https://appseed.us/support) on [Discord](https://discord.gg/fZC6hup)
- See for [React Starters](https://appseed.us/apps/react) - index provided by AppSeed

<br />

---
**[React Laravel Purity Dashboard](https://appseed.us/product/laravel-react-purity-dashboard)** - Open-source full-stack seed project provided by **AppSeed [App Generator](https://appseed.us/)**
