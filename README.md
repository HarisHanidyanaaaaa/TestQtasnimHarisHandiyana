# TestQtasnimHarisHandiyana
TestQtasnimHarisHandiyana

*Requirements

    PHP 8.0 or higher
    Node JS 14 or higher


     ** Make sure you already have composer**


    Installation

This might take awhile but I'm pretty sure this is worth it. So let's get started.

    Clone the repository

    https://github.com/harishanidyanaaaaa/TestQtasnimHarisHandiyana.git

    ** if you don't have bootstrap 5 installed:
    composer require laravel/ui
    php artisan ui bootstrap
    npm install bootstrap-icons
    npm install npm run build


## copy .env.example rename to .env

*Configure your database in .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testpenjualan
DB_USERNAME=root
DB_PASSWORD=

    Run migrations and initial seeder

    php artisan migrate:fresh --seed

    or more save import manual database.sql = (testpenjualan.sql on folder database)


**run application :
   open yor terminal on this application / this folder 
    typing php artisan serve

   

    Open your browser and go to localhost:8000 or other laravel ports and now you ready to build your apps!
