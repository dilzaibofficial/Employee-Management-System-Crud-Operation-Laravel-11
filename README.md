<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Employee Management System

## Description
A simple Laravel-based Employee Management System that performs CRUD operations (Create, Read, Update, and Delete) to manage employee records. It provides a web interface to manage employee details including name, email, position, and salary.

## Features
- Create, read, update, and delete employee records.
- Input fields include name, email, position, and salary.
- Bootstrap 5 used for responsive and styled UI.
- Validations for required fields and email uniqueness.
- User-friendly interface for managing employees.

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/Employee-Management-System.git

Navigate to the project directory:
cd Employee-Management-System

Install dependencies:
composer install

Set up the environment: Copy the .env.example file to .env:
cp .env.example .env

Generate application key:
php artisan key:generate


Set up the database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=employee_crud
DB_USERNAME=root
DB_PASSWORD=


php artisan migrate


php artisan serve


Technologies Used
Laravel 8.x (PHP framework)
Bootstrap 5 (for UI styling)
MySQL (for database)


License
This project is licensed under the MIT License - see the LICENSE file for details.

Contributing
If you'd like to contribute, feel free to fork the repository and submit a pull request with your improvements.

Author
DIL ZAIB - github.com/dilzaibofficial



### Steps to Push to GitHub:
1. **Initialize Git Repository:**
   In the root folder of your Laravel project, run the following commands to initialize a Git repository (if not done already):

   ```bash
   git init


git remote add origin https://github.com/your-username/Employee-Management-System.git


git add .
git commit -m "Initial commit"
git push -u origin master

