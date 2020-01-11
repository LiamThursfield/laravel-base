# Readme

## Key Differences to Laravel Core Setup
* Adds Authentication
* Refactors `App\User` to `App\Model\User`
* Refactors `Home` to `Admin` e.g. for logged in view

## Project Setup

### Install dependencies
* `composer install`
* `yarn`
* `yarn dev`

### Set up .env
* `cp .env.example .env`
* `php artisan key:generate`

### Migrations
* `php artisan migrate`