## Project overview
- Authentication for Admin and user
- Crud operation of products controlled by Admin
- Mail sender to Mailtrap upon registration of user
- Reset password using Mailtrap

## Prerequisites

- PHP >= 8.2
- Composer
- MySQL (or another database supported by Laravel)
- Node.js & Npm
- Inertia.js
- Vue.js 3

## Installation Steps

### 1. Clone the Repository

```bash
https://github.com/Rubaiyat90/Inertia-vue.git
```

Copy the `.env.example` file to `.env` and update the Database and Mailtrap configuration:

```bash
cp .env.example .env
```

### 2. Install Composer Dependencies

```bash
composer install
```

### 3. Generate an Application Key

```bash
php artisan key:generate
```

### 4. Run Migrations and Seeds

```bash
php artisan migrate --seed
```

### 5. Install Node.js Dependencies

```bash
npm install
```

### 6. Build Front-End Assets

```bash
npm dev
```

### 7. Serve the Application

```bash
php artisan serve
```
## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
