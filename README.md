## Project Name

CSV File import-export in laravel

## Create Project

composer create-project laravel/laravel CSVFILE-PRACTICE

## Install package

composer require maatwebsite/excel
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config

## Run Migration

1.php artisan migrate

## Use Command

1.php artisan serve
2.php artisan tinker
3.User::factory()->count(20)->create()
