
# Laravel REST API with Passport

## Installation
Clone the repo locally:
```
git clone https://github.com/arif04cuet/laravel-rest-api.git rest-api

cd rest-api

composer install

cp .env.example .env

php artisan key:generate
```
Edit .env and set your database connection details.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rest-api
DB_USERNAME=root
DB_PASSWORD=root
```
Run database migrations:
```
php artisan migrate
```

Install Passport
```
php artisan passport:install
```

Run the Server
```
php artisan serve
```

Available End Points

```
POST /login
POST /register
GET  /logout
PUT  /user

```

