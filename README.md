Clone the project in local directory Example: C:\xampp\htdocs\Laravel_Projects\

Run the ff commands in terminal to make vendor folder (without these commands there would be vendor autoload missing error). The third command makes it possible to upload photos.

composer update
composer install
php artisan storage:link
.env file is removed from gitignore:

The following changes are made in the .env file:

Database connection values:

DB_DATABASE=tweety_db

DB_USERNAME=root

DB_PASSWORD=

Added values:

FILESYSTEM_DRIVER=public




