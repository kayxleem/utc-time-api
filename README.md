### UTC Time API

# Requirements
  - PHP 8.1 and above
  - Composer

Clone the Repository on target machine:


    git clone https://github.com/kayxleem/utc-time-api.git 
    cd utc-time-api

Install dependencies (if you have `composer` locally):

    composer install

    or 

    composer update

generate your laravel key

    php artisan key:generate

## optional 

Run Test

    php artisan test

## Usage

The API should be available at http://localhost:3000/api (You can change the APP_PORT in .env file) if you are using artisan serve.

## End Points

Read

    GET /api?slack_name=slack_name&track=track_name
