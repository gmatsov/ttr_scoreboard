## About Ticket to Ride scoreboard

Ticket to Ride scoreboard is small CRUD app for create Ticket to Ride games and  show chart stats about them.

# Technologies

1. PHP >= 7.4 (http://php.net)
2. MySQL >= 5.6 (http://mysql.com)
3. Laravel >= 8.0 (http://laravel.com)

# Installation

### Setup

1. `cp .env.example .env`
2. `composer install`
3. `php artisan key:generate`
4. `npm install`

### For development environment

1. Don't forget to set __database__
2. Run and seed all migrations - `php artisan migrate:fresh --seed`
    1. Or only run them with `php artisan migrate`
    2. Or only seed them with `php artisan db:seed` if you already migrated them (won't work if they are not migrated)
___

### For production environment

1. Don't forget to __set the environment__ with `APP_ENV=production` in `.env` file
1. Don't forget to __turn off debug mode__ with `APP_DEBUG=false` in `.env` file
1. Run all migrations - `php artisan migrate:fresh`
