# FeelBetter
The website provides consultation, education and meditation with therapists or experts in the field of mental health disorders. This project was built using a framework called [Laravel](https://laravel.com/) 

## About Us
Group 227 from class SI-44-02, Information Systems Study Program, Telkom University. Consists of 6 members which include:
| Nama | NIM | Role |
| ------ | ------ | ------ |
| [Yohanes Nico Kristiawan](https://www.instagram.com/yohanes_nick/) | 1202204074 | Project Manager |
| [Ignatius Chris Surya](https://www.instagram.com/ignchrist/) | 1202200002 | Programmer |
| [Eriko Putra Jayanto](https://www.instagram.com/erikoputraj/) | 1202200209 | Programmer |
| [Muhammad Rafly Hamka](https://www.instagram.com/hamka_rafly/) | 1202204136 | Programmer |
| [Resti Pradita Utami](https://www.instagram.com/resttam23/) | 1202204242 | Programmer |
| [Riski Alfika Sari](https://www.instagram.com/riskialff/) | 1202200023 | Analyst |

# Repository Structure

This repository is structured as follows:

- `app/Http/Controllers/`: contains the `AdminController` class for handling all the CRUD operations on the admin page.
- `resources/views/back-end/`: contains the views and templates for developing the admin back-end section.
- `resources/views/front-end/`: contains the views and templates for developing the front-end pages for the users.
- `resources/views/layout/`: contains the views and templates for the admin dashboard page layout.

## Installation
# Prequisites
- Composer
- PHP >= 8
- XAMPP or MAMP

## Running the application
Copy the command on your terminal or git bash
- Clone project from github

   ```sh
   git clone https://github.com/SI-RPL-2023/SI4402_227_FeelBetter.git 

- Copy the .env.example file to .env

   ```sh
   cp .env.example .env

- Change the database name in the .env file

   ```sh
   DB_PORT=your_mysql_port
   DB_DATABASE=your_database_name

- Install Composer

   ```sh
   composer install

- Generate Key

   ```sh
   php artisan key:generate

- Migrate Database

   ```sh
   php artisan migrate
   
- Link Storage

   ```sh
   php artisan storage:link

- Run the server

   ```sh
    php artisan serve
