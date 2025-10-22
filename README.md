# Laravel, Inertia, Vue Task

## 📋 Overview

This project demonstrates a **Laravel 12**, **Vue 3**, and **Inertia.js** based application implementing **role-based authentication** without using any external packages.  
It includes a responsive login page (based on the provided Figma design) and a restricted dashboard accessible only by users with the appropriate role and permission.

---

## 🚀 Features

- Laravel 12 with Inertia.js & Vue 3 integration
- Custom Role and Permission system (no external packages)
- Role-based middleware protection
- Responsive and minimal UI design
- Seeder for creating sample users, roles, and permissions

---

## 🛠️ Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/ahsanranga72/laravel-inertia-vue-task.git
cd laravel-inertia-vue-task
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Environment setup

Copy `.env.example` and update necessary credentials:

```bash
cp .env.example .env
```

Then set your **database** and **app URL**.

### 4. Generate app key and migrate database

```bash
php artisan key:generate
php artisan migrate --seed
```

The seeder creates:
- Admin User → `admin@example.com` / `12345678`
- Employee User → `employee@example.com` / `12345678`

### 5. Run Vite and Laravel server

```bash
npm run dev
php artisan serve
```

Visit: [http://localhost:8000](http://localhost:8000)

---

## 👤 Role-Based Authentication

### Roles:
- **Admin**: Has full access to the dashboard.
- **Employee**: Limited access (restricted from dashboard).

### Permission Logic:
Only users with the **`dashboard.view`** permission can access the Dashboard route.  
The middleware checks if the authenticated user has the required permission before rendering the view.

If unauthorized, an error message or access denied page is shown.

---

## 🧩 Seeder Example

The seeder `RolesAndUsersSeeder` automatically sets up roles, permissions, and demo users:

```php
$adminRole = Role::firstOrCreate(['slug' => 'admin'], [
    'name' => 'Admin',
    'description' => 'Administrator'
]);

$employeeRole = Role::firstOrCreate(['slug' => 'employee'], [
    'name' => 'Employee',
    'description' => 'Employee role'
]);

$dashboardPerm = Permission::firstOrCreate(['slug' => 'dashboard.view'], [
    'name' => 'View Dashboard',
    'description' => 'Access to dashboard'
]);

$adminRole->permissions()->syncWithoutDetaching([$dashboardPerm->id]);
```

---

## 🧠 Optimization Techniques

- Utilized **Eager Loading** in model relationships to minimize database queries.  
- Ensured **efficient database design** by normalizing role and permission relationships.  
- Used **middleware checks** for lightweight role-permission validation.  
- Avoided **N+1 query issues** through optimized query structure in role and permission loading.

---

## 📡 API Documentation (Task 2)

### Authentication Routes

| Method | Endpoint | Description |
|--------|-----------|-------------|
| GET | `/signin` | Returns signin page |
| POST | `/signin` | Authenticate user |
| POST | `/signout` | Logout authenticated user |

### Dashboard Access

| Method | Endpoint | Description | Permission Required |
|--------|-----------|-------------|----------------------|
| GET | `/dashboard` | Returns dashboard page | `dashboard.view` |

---

## 🧭 Deployment Steps

1. Push project to your public GitHub repository.  
2. Set up your production `.env` file.  
3. Run the following commands:

```bash
composer install --optimize-autoloader --no-dev
php artisan migrate --force
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

4. Serve via your preferred web server (Nginx / Apache).

---

## 👨‍💻 Credentials for Testing

| Role | Email | Password |
|------|--------|-----------|
| Admin | admin@example.com | 12345678 |
| Employee | employee@example.com | 12345678 |

---

## 📦 Tech Stack

- **Laravel 12**
- **Vue 3**
- **Inertia.js**
- **Vite**
- **Tailwind CSS**

---

## 🏁 Conclusion

This project demonstrates the implementation of a **clean and scalable role-based access system** with **modern Laravel + Vue integration**, adhering to best coding and optimization practices.
