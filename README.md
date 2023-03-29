# FeelBetter
Website menyediakan konsultasi,edukasi dan meditasi dengan para terapis atau ahli dalam bidang gangguan kesehatan mental.Project ini dibangun menggunakan framework yang bernama [Laravel](https://laravel.com/) 

## About Us
Grup 227 dari kelas SI-44-02, Program Studi Sistem Informasi, Telkom University. Terdiri dari 6 member yang meliputi :
| Nama | NIM | Role |
| ------ | ------ | ------ |
| [Yohanes Nico Kristiawan](https://www.instagram.com/yohanes_nick/) | 1202204074 | Project Manager |
| [Ignatius Chris Surya](https://www.instagram.com/ignchrist/) | 1202200002 | Programmer |
| [Eriko Putra Jayanto](https://www.instagram.com/erikoputraj/) | 1202200209 | Programmer |
| [Muhammad Rafly Hamka](https://www.instagram.com/hamka_rafly/) | 1202204136 | Programmer |
| [Resti Pradita Utami](https://www.instagram.com/resttam23/) | 1202204242 | Programmer |
| [Riski Alfika Sari](https://www.instagram.com/riskialff/) | 1202200023 | Analyst |

## Installation
## Prequisites
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
