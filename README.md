<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/11.x/installation)

Clone the repository

    git clone https://github.com/krealif/jwd.git

Switch to the repo folder

    cd jwd

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Project Structure

In Laravel, the project structure is organized in a way that follows the MVC (Model-View-Controller) pattern, which helps to separate application logic, user interface, and data.

1. **app/Http/Controllers**: This directory contains the controller classes, which handle requests from the user, process them, and return a response.
2. **app/Models**: This directory contains the model classes, which represent the data and business logic of the application. In Laravel, models are typically used to interact with the database.
3. **database/migrations**: This folder holds migration files, which are PHP scripts that define the structure of database tables.
4. **resources/views**: This folder holds all the view files, usually written in Blade, Laravel’s templating engine.
5. **public/**: This directory is the web root, where public assets and the main entry point for the application (`index.php`) reside.
6. **routes/web.php**: This file defines all the web routes for your application (routes that are accessible via a browser and typically return views).
