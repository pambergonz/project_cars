# *_Cars App_*

To use this app for the first time you should follow the steps below:

- Clone the repository git clone
```
https://github.com/pambergonz/project_cars.git
```

-  Switch to the repository folder
```
cd project_cars
```

- Install all the dependencies using composer
```
composer install
```

- Create an empty database for our application

- Copy the example.env file and make the required configuration changes in the .env file, it is important to properly connect the database of the app with database credentials.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cars_db
DB_USERNAME=root
DB_PASSWORD=
```

- You may have to generate a new application key
```
 php artisan key:generate
 ```

- Start the local development server. If you change the .env file after starting the server you will have to restart it.
```
php artisan serve
```

Now the server has started running at http://localhost:8000
- Run the database migrations.
```
php artisan migrate
```

- Run the seeders factories to check that the migrations and the database is properly set up.
```
php artisan db:seed
```

# *_App info_*

- The models connects our app with the database.
- All models have related routes with get, post, put and delete methods. 
- The app contains two CRUDs related to models: Car Brands and Car Models.
- Admin users can create, edit and delete Car Brands and Models. Operator users are able only to view them.
