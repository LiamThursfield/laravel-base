# Laravel Base App

![Header Image](/readme/header.png?raw=true)


## Key Differences to Laravel Core Setup

**Backend**
* Adds Laravel Authentication by default
* Refactors `App\User` to `App\Model\User`
* Refactors `Home` to `Admin` e.g. for logged in view
* Refactors `Welcome` to `Index` for default home page

**Frontend - Styling** 
* Removes all Bootstrap (markup and dependencies)
* Removes all Sass (files and dependencies)
* Uses Tailwind as default style framework
* Uses PostCss including:
    * PostCss Import
    * PostCss Nested
* Sets the default font to Poppins
* Converts all initial views (home, admin, auth) to use Tailwind

**Frontend - Javascript**
* Adds Vue laravel() helper function, to access Laravel data e.g. appName, csrfToken
    * Data is passed to window.Laravel
* Adds Vue route() helper function, to access all Laravel routes e.g. route('admin')
* Adds Vue user helper class, to:
    * Access logged in user's details e.g. user.name
    * Add helpers to allow e.g. user.isAuthenticated()
* Adds a <csrf-input> component for forms
* Adds Header component containing a fully responsive navigation


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


## Screenshots

### Login Screen - Desktop
----------------------------------------------

![Login Screen - Desktop](/readme/login_desktop.png?raw=true "Login Screen - Desktop")


### Login Screen - Mobile
----------------------------------------------

![Login Screen - Mobile](/readme/login_mobile.png?raw=true "Login Screen - Mobile")


### Admin Dashboard - Desktop
----------------------------------------------

![Dashboard - Desktop](/readme/dashboard_desktop.png?raw=true "Dashboard - Desktop")


### Admin Dashboard - Mobile
----------------------------------------------

![Dashboard - Mobile](/readme/dashboard_mobile.png?raw=true "Dashboard - Mobile")


### Navigation Mobile
----------------------------------------------

![Navigation - Mobile](/readme/navigation_mobile.png?raw=true "Navigation - Mobile")