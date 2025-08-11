<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-  [Simple, fast routing engine](https://laravel.com/docs/routing).
-  [Powerful dependency injection container](https://laravel.com/docs/container).
-  Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-  Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-  Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-  [Robust background job processing](https://laravel.com/docs/queues).
-  [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-  **[Vehikl](https://vehikl.com/)**
-  **[Tighten Co.](https://tighten.co)**
-  **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-  **[64 Robots](https://64robots.com)**
-  **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-  **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-  **[Redberry](https://redberry.international/laravel-development/)**
-  **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Special Commands for Laravel , GIT, NPM etc.

## bash Commands

npm uninstall tailwindcss
npm install -D tailwindcss@3.4.1 postcss autoprefixer
npx tailwindcss init -p

<!-- Installing Postgresql and PgAdmin -->

brew install postgresql
brew services start postgresql

<!-- Provides list of all services run by Homebrew -->

brew services list

XXXX psql postgresql
psql postgres

postgres=# \list
Short Form \l

\du
List of all DBMS users

## Below is the result:

postgres-# \list
List of databases
Name | Owner | Encoding | Collate | Ctype | Access privileges
-----------+---------+----------+---------+-------+---------------------
postgres | mustafa | UTF8 | C | C |
template0 | mustafa | UTF8 | C | C | =c/mustafa +
| | | | | mustafa=CTc/mustafa
template1 | mustafa | UTF8 | C | C | =c/mustafa +
| | | | | mustafa=CTc/mustafa
(3 rows)

postgres-# du
postgres-# \du
List of roles
Role name | Attributes | Member of
-----------+------------------------------------------------------------+-----------
mustafa | Superuser, Create role, Create DB, Replication, Bypass RLS | {}

---

To login to Postgres
psql -U mustafa -d postgres If not created Workopia

psql -U workopia_dbuser -d workopia

=========================================
I installed mysql and used the follwoing commands used instead

brew install mysql
Upgrading from MySQL <8.4 to MySQL >9.0 requires running MySQL 8.4 first:

-  brew services stop mysql
-  brew install mysql@8.4
-  brew services start mysql@8.4
-  brew services stop mysql@8.4
-  brew services start mysql

Start Service
brew services start mysql

> brew services start mysql

> brew services list
> Name Status User File
> mysql started mustafa ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist
> postgresql@14 started mustafa ~/Library/LaunchAgents/homebrew.mxcl.postgresql@14.plist

> mysql -u root

mysql> CREATE DATABASE workopia;
mysql> SHOW DATABASES;
+--------------------+
| Database |
+--------------------+
| information_schema |
| my_database |
| mysql |
| performance_schema |
| sys |
| workopia |
+--------------------+

mysql> CREATE USER 'workopia_dbuser'@'localhost' IDENTIFIED BY '123654';
mysql> GRANT ALL PRIVILEGES ON workopia.\* TO 'workopia_dbuser'@'localhost';

mysql> FLUSH PRIVILEGES;

mysql> Show Tables;

=========================================

## Laravel PHP Commands

php artisan make:component Header
php artisan make:component NavLink
php artisan make:component ButtonLink
php artisan make:component Hero
php artisan make:component TopBanner
php artisan make:component BottomBanner

php artisan tinker
Psy Shell v0.12.8 (PHP 8.4.8 — cli) by Justin Hileman

> DB::select('SELECT version()')
> = [

    {#6162
      +"version()": "9.3.0",
    },

]

> App\Models\Job::all()
> = Illuminate\Database\Eloquent\Collection {#2262

    all: [],

}

> Schema::getColumnListing('job_listings')
> = [

    "id",
    "title",
    "description",
    "created_at",
    "updated_at",

]

> $job = App\Models\Job::class
> $job::create(['title' => 'Job One', 'description' => 'This is job one'])
> = App\Models\Job {#6181

    title: "Job One",
    description: "This is job one",
    updated_at: "2025-07-26 22:30:27",
    created_at: "2025-07-26 22:30:27",
    id: 1,

}

> $job::create(['title' => 'Job 2', 'description' => 'This is job two'])  
> $job::create(['title' => 'Job 3', 'description' => 'This is job three'])
> $job::create(['title' => 'Job 4', 'description' => 'This is job four'])

> $job::find(4)
> = App\Models\Job {#6213

    id: 4,
    title: "Job 4",
    description: "This is job four",
    created_at: "2025-07-26 22:31:50",
    updated_at: "2025-07-26 22:31:50",

}
On Tinker Commandline
$job::find(1)->update(['title'=>'Job 1', 'description'=> 'This is updated job one']) 
$job::find(4)->delete()

php artisan make:migration create_job_listings_table
php artisan migrate
2025_07_26_220058_create_job_listings_table ............ 42.58ms DONE

php artisan make:model Job

<!-- Creating job listing schema for real world apps -->
php artisan make:migration add_fields_to_job_listing_table --table=job_listings

<!-- After creating the models Run these comamnds -->
>php artisan migrate
2025_08_11_190204_add_fields_to_job_listing_table .............................................. 161.76ms DONE

<!-- Creating Dummy Users using tinker -->
php artisan tinker
> \App\Models\User::factory()->create();
> \App\Models\User::factory()->unverified()->create();
> \App\Models\User::factory()->count(9)->create();

## Migration Commands

migrate - Runs all of the migrations that are in the migrations directory.
migrate:fresh - Completely drops all tables and re-runs all migrations.
migrate:install - Creates the migrations table.
migrate:refresh - Rolls back all migrations and then re-applies them.
migrate:reset - Rolls back all of the migrations that have been run.
migrate:rollback - Rolls back the last migration that was run.
migrate:status - Shows the status of the migrations.

## GIT Commands

<!-- This will set the git to last mentioned state and will do nothing for :
    1. Untracked files (files never added to Git with git add)
    2. Files listed in .gitignore
    3. New files created since the last commit
 -->

    git reset --hard

1. Remove all untracked files and directories
   <!-- -f Force    |   -d removes directories too -->

   git clean -fd

2. If you also want to remove ignored files (like node_modules):
    <!-- X removes only ignore files  -->
   git clean -fdX
3. For a dry run (see what would be deleted without actually deleting):
   <!--  -->
   git clean -fd --dry-run

## SQL (Postgres / MySQL / SQLite) Commands

<!-- All Commands run in this project will be listed here.
      Working with Database started from CH-06 PHP Laravel Course
 -->

### Alternative Approach

If you want to keep these files but return to a clean state:

#### Stash everything (including untracked files)

git stash --include-untracked

#### Now you have a clean working directory

#### Later you can apply or drop the stash as needed

git stash pop # to reapply
git stash drop # to permanently remove

# Files may need later

## App.CSS

'''js

@import 'tailwindcss';

@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/_.blade.php';
@source '../../storage/framework/views/_.php';
@source '../**/\*.blade.php';
@source '../**/\*.js';

@theme {
--font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
'Segoe UI Symbol', 'Noto Color Emoji';
}

''''
