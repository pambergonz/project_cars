<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cars app

Getting started
To use this app for first time you should follow the steps below:

1- Clone the repository
git clone https://github.com/pambergonz/project_cars.git

2- Switch to the repository folder,
cd project_cars

3-Install all the dependencies using composer
composer install


4- Create an empty database for our application

5-Copy the example.env file and make the required configuration changes in the .env file, it is important to properly connect the database of the app with database credentials.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cars_db
DB_USERNAME=root
DB_PASSWORD=

6-You may have to generate a new application key.
php artisan key:generate

7-Start the local development server. If you change the .env file  after starting the server you will have to restart it.  
php artisan serve

Now the server has started running at http://localhost:8000
8-Run the database migrations.
php artisan migrate


9-Run the seeders factories to check that the migrations and the database is properly set up.
php artisan db:seed


App info
The models connects our app with the database.
All models have related routes with get, post, put and delete methods.
The app contains two CRUDs related to models:
Car Brands
Car Models
Admin users can create, edit and delete Car Brands and Models. Operator users are able only to view them.
