# Ynmodata Assessment Task

An Assessment Task for Ynmodata Company .

## Author

This project was executed by the duo of :

-   [Mohamed Naser](https://www.linkedin.com/in/mohamednaseramein/)

## Used Tools

-   Laravel
-   Passport Package
-   MarkDown Syntax

## Done Work

-   [x] Implement bearer authentication to CRUD APIs.
-   [x] Create DB seeds.
-   [x] Implement RESTful CRUD API to manage films.

## Requirements

The Below Componants Is Required Before Setup:

-   PHP >= 7.2.5
-   BCMath PHP Extension
-   Ctype PHP Extension
-   Fileinfo PHP extension
-   JSON PHP Extension
-   Mbstring PHP Extension
-   PDO PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension

## Setup

1- Open your git bash and cd to the location you'd like to put your files the run the command below.

```console
git clone git@github.com:mohamednaser/ynmodata-assessment-task.git
```

2- Install Composer Dependancies

```console
composer install
```

3- Change .env file contents for DB_DATABASE, DB_USERNAME, DB_PASSWORD variables

4- Run Database Migrations files

```console
php artisan migrate
```

5- Run Live Server

```console
php artisan serve
```

## Important Note

PostMan Should Set Accept header with application/json
![example](./public/images/accept_applicationjson.png)

## PostMan Collection

You Will Find link for PostMan Collection [Here](https://www.getpostman.com/collections/d388f6dc3311c7063376)

## Live Version

Live version [TBA].

## ScreenShots

### Register

![example](./public/images/registeration.png)

### unauthorized response in wrong token

![example](./public/images/unauthorized.png)

### Add New Movie

![example](./public/images/add-movi.png)

### List Movies

![example](./public/images/list-movies.png)

### Get Movie Details

![example](./public/images/get-movie-details.png)

### Delete Movie 
![example](./public/images/delete_movie.png)
