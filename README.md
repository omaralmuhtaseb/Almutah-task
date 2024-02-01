#Requirements
-PHP 8.1

-Composer (https://getcomposer.org/)

-mysql

#Getting Started and run

git clone git@github.com:omaralmuhtaseb/Almutah-task.git

cd Almutah-task

run composer install

copy .env.example .env

run php artisan key:generate

configure the database connection in .env file 

DB_CONNECTION=mysql

DB_HOST=your_database_host

DB_PORT=your_database_port

DB_DATABASE=your_database_name

DB_USERNAME=your_database_username

DB_PASSWORD=your_database_password

<br>

Run the following commands:

php artisan migrate

php artisan db:seed

php artisan serve

<br>
Use these credentials to login to the dashboard :

Email :admin@almutah.com
Password : password

To use the Api's , please import the postman collection , 
Register using register Api , and login 
Use create new order , products list Api's

