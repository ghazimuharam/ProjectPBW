# Vilection
---

### How to use

Clone this Repository
```console
foo@bar:~$ git clone https://github.com/ghazimuharam/ProjectPBW.git
```
Navigate to the directory
```console
foo@bar:~$ cd ProjectPBW
```
Run Composer install
```console
foo@bar:~/ProjectPBW$ composer install
```
Create new .env file with example .env.example
```console
foo@bar:~$ cp .env.example .env
```
Generate new key for Laravel Application
```console
foo@bar:~$ php artisan key:generate
```
Run migration and db Seed
```console
foo@bar:~$ php artisan migrate
foo@bar:~$ php artisan db:seed --class=AdminSeeder
```

Run the laravel app
```console
foo@bar:~$ php artisan serve
```
Navigate to admin panel and login with
- Username: admin
- Password: admin
