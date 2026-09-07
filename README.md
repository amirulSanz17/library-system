# Library System

## Description

Simple Library Information System built using Laravel.

## Requirements

* PHP
* Composer
* MySQL
* Laravel

## Installation

1. Clone repository

```bash
git clone https://github.com/username/library-system.git
```

2. Masuk ke folder project

```bash
cd library-system
```

3. Install dependencies

```bash
composer install
```

4. Buat file `.env`

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Atur database pada file `.env`

```env
DB_CONNECTION=mysql
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=
```

7. Jalankan migration

```bash
php artisan migrate
```

8. Jalankan server

```bash
php artisan serve
```

Buka browser dan akses:
`http://127.0.0.1:8000`

## Author

Amirul Ichsandina
