# AFU Data Center

Laravel website with 30 business service pages, infrastructure pages, database-driven navigation/categories, per-page FAQs, and user/admin authentication.

## Local Setup

Requirements: PHP 8.3 or newer with Laravel-required extensions, Composer, Node.js/npm, and MySQL or SQLite.

```sh
composer install
cp .env.example .env
php artisan key:generate
```

Configure database credentials and APP_URL in .env. For SQLite, create database/database.sqlite and set DB_CONNECTION=sqlite and DB_DATABASE to its absolute path. Then:

```sh
php artisan migrate --seed
php artisan afu:admin-create admin@example.com --name="Site Administrator"
npm ci
npm run build
php artisan serve --host=127.0.0.1 --port=8010
```

The admin command privately prompts for a password and confirmation. No production user, password or database dump is committed. Default seeding installs navigation and existing FAQs without creating a predictable test-user account. Uploaded customer data and the local administrator account are not copied to a new deployment.

Admin: /admin/login. User login: /login. Registration: /register. Account: /account. Administrators can manage menus, categories, submenu pages/icons, per-page FAQs and user roles/access.

## Production

- Configure the web server document root to the project's public/ directory. Never expose the repository root.
- Set APP_ENV=production, APP_DEBUG=false, the HTTPS APP_URL and SESSION_SECURE_COOKIE=true. Preserve APP_KEY on updates.
- Configure SMTP for password-reset emails. MAIL_MAILER=log only writes messages locally; it does not deliver email.
- Allow PHP to write storage/, bootstrap/cache/ and public/menu-images/.
- Install dependencies using composer install --no-dev --optimize-autoloader, build frontend assets, back up the database, then run php artisan migrate --force and php artisan optimize.
- Seed defaults on a new deployment. Do not rerun navigation seeding to restore intentionally deleted navigation entries unless that is desired.
- All admin routes except login require auth, active and admin middleware. Public registration cannot grant admin access.

For an existing populated database, preserve .env and data and apply migrations, rather than importing a replacement SQL dump. The console command refuses to overwrite an existing account; administrators manage access through Users & Access.

## Tests

```sh
php artisan test --filter='AuthAndMenusTest|PageFaqTest'
```

These tests use an isolated SQLite in-memory database; enable pdo_sqlite in the testing PHP runtime.
