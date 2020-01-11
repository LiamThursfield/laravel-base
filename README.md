# App Readme

## Project Setup

### Install dependencies
* `composer install`
* `yarn`
* `yarn dev`

### Set up .env
* `cp .env.example .env`
* `php artisan key:generate`
* Update App Name

### Migrations
* `php artisan migrate`


## Key Differences to Laravel Core Setup
* Adds Authentication
* Uses App\Model for User model
* Refactors Home to Admin for logged in user panel