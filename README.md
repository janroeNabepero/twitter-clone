Place the folder in xampp directory Example: C:\xampp\htdocs\Laravel_Projects\

Run the ff commands in terminal to make vendor folder (without these commands there would be vendor autoload missing error). 
The third command makes it possible to upload photos.

```
composer update
composer install
php artisan storage:link
```

.env file is removed from gitignore:

edits in .env file:

set database connection values

DB_DATABASE=tweety_db

DB_USERNAME=root

DB_PASSWORD=

added values

FILESYSTEM_DRIVER=public
