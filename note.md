
create folder inside the view folder
create 4 files
create.blade.php
index.blade.php
show.blade.php
edit.blade.php

create model, migration(database) and controller
php artisan make:model Task --migration --controller --resource

create route: route/web.php
use App\Http\Controllers\TaskController;
Route::resource('tasks', TaskController::class);

run the project
php artisan serve

browser
127.0.0.1:8000/tasks  :- controller -> index() -> return view('tasks.index')

php artisan migrate
php artisan migrate:fresh

php artisan migrate:fresh --seed
php artisan make:controller UserController --resource --model=User


for auth
//composer require laravel/ui
//php artisan ui bootstrap --auth
//npm install
//npm run dev
//npm run build

middleware 

prefix();

<!--  -->
1. create project
- laravel new project_name

2. create or manage folders and files inside view

3. create model, migration and controller
- php artisan make:model Task --migration --controller --resource
php artisan make:controller Backend\Setting --resource

4. add fields on migration inide database of migration

5. add field inside model

- php artisan migrate
- php artisan migrate:fresh

6. create route

7. CRUD (manage controller)
