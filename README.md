# vue-inertia-posts
Laravel + Vue(Inertia) CRUD with Breeze User Authentication for User Posts

1. Download vue-inertia-posts
2. Copy folder to Laravel projects folder
3. Copy vue-inertia-posts\\.env.example to vue-inertia-posts\\.env
4. Update .env MAIL_X values to preferred SMTP settings
5. CLI: cd vue-inertia-posts
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE vue_inertia_posts"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve
12. npm run dev

http://localhost:8000

User Logins
-----------
admin@admin.com  |  password
<br>
editor@edit.com  |  password
