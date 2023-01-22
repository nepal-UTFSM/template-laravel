# Laravel template

## Stack

- PHP 8.1
- ECMAScript 6
- Node 16
- Laravel 9
- Vue 3
- Tailwind

## Packages

- PHP:
    - bensampo/laravel-enum: Enum implementation for Laravel
    - doctrine/dbal: Database abstraction layer
    - filament/filament: Admin panel. Example included
    - guzzlehttp/guzzle: HTTP client
    - laravel/fortify: Authentication
    - laravel/framework: Framework
    - laravel/scout: Search
    - laravel/telescope: Debugging
    - laravel/tinker: Tinker
    - maatwebsite/excel: Excel abstraction
    - propaganistas/laravel-phone: Phone number validation
    - rap2hpoutre/laravel-log-viewer: Log viewer at /admin/logs
    - sentry/sentry-laravel: Sentry integration
    - spatie/laravel-activitylog: Activity log
    - spatie/laravel-robots-middleware: Robots middleware
    - spatie/laravel-settings: Settings
    - spatie/laravel-sitemap: Sitemap generator
    - spatie/schema-org: Schema.org implementation
    - teamtnt/laravel-scout-tntsearch-driver: TNTSearch driver for Laravel Scout
    - teamtnt/tntsearch: Full text search engine
    - vinkla/hashids: Hashids implementation for routes 


## Linters

All linters are installed as dev dependencies.
All linters are runned on integration workflow through reviewdog.

### PHP

- phpstan with larastan rules
  - [vscode extesion](https://marketplace.visualstudio.com/items?itemName=swordev.phpstan)

- php-cs-fixer
  - [vscode extesion](https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer)

- php code sniffer
  - [vscode extesion](https://marketplace.visualstudio.com/items?itemName=shevaua.phpcs)

### JS

- eslint
  - [vscode extesion](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## Testing

### PHP with Pest

    php artisan test

- [ ] code coverage
- [ ] action

### Browser with Laravel Dusk

    php artisan pest:dusk

- [ ] action
