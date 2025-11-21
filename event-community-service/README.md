## Event & Community Service

A Laravel 11 starter that exposes fully validated REST APIs and Tailwind-powered web CRUD for managing Events and Communities, including media upload support via `storage/app/public`.

### Features

- Event & Community entities with dedicated models, migrations, factories-ready structure.
- JSON API (index/store/show/update/destroy) that returns unified payloads through `App\Traits\ApiResponse`.
- File uploads for event images and community logos stored under `storage/app/public/events` and `storage/app/public/communities` (run `php artisan storage:link`).
- Web CRUD (index/create/edit/delete) rendered with `resources/views/layouts/tailwind-app.blade.php` + Tailwind UI components.
- Request validation layers (`Store*/Update*Request`) shared between API and web.

### API Routes

```
GET    /api/events
POST   /api/events
GET    /api/events/{id}
POST   /api/events/{id}
DELETE /api/events/{id}

GET    /api/communities
POST   /api/communities
GET    /api/communities/{id}
POST   /api/communities/{id}
DELETE /api/communities/{id}
```

All responses follow:

```json
{
	"status": true,
	"message": "...",
	"data": { }
}
```

### Web Routes

```
Route::resource('events', EventController::class);
Route::resource('communities', CommunityController::class);
```

The root path `/` redirects to the events index page.

### Installation Commands

```
composer create-project laravel/laravel event-community-service
cd event-community-service
composer install
npm install
npm run build
php artisan migrate
php artisan storage:link
php artisan serve
```

### Local Development

1. Copy `.env.example` to `.env`, configure your database, and run `php artisan key:generate` if needed.
2. Run the migration/seed steps listed above.
3. Start Vite (`npm run dev`) for hot module reloads during UI work; run `npm run build` for production assets.
4. Access APIs under `http://localhost:8000/api/...` and the Tailwind CRUD UI under `http://localhost:8000/events`.

### Testing & QA

- Add feature tests for Event & Community controllers (API + web) before deploying to higher environments.
- Use `php artisan test` to execute the suite.

### License

Released under the MIT license. Feel free to adapt and extend.
