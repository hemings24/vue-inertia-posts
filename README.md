# vue-inertia-posts
Laravel + Vue(Inertia) CRUD for User Posts

1. Download vue-inertia-posts
2. Copy folder to Laravel projects folder
3. Copy vue-inertia-posts\\.env.example to vue-inertia-posts\\.env
4. Update .env APP_URL=http://localhost to APP_URL=http://localhost:8000
5. CLI: cd vue-inertia-posts
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE vue_inertia_posts"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve
12. npm run dev

http://localhost:8000/posts

User Logins
-----------
editor@edit.com  |  password
