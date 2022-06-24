# Laravel template

## Stack

- PHP 8.1
- ECMAScript 6
- Node 16
- Laravel 9
- Vue 3
- PostCSS ?

## Packages

### PHP

    "laravel/scout": "^9.4",
    "laravel/telescope": "^4.9",
    "laravel/tinker": "^2.7",
    "propaganistas/laravel-phone": "^4.3",
    "rap2hpoutre/laravel-log-viewer": "^2.2",
    "sentry/sentry-laravel": "^2.12",
    "spatie/laravel-robots-middleware": "^1.3",
    "spatie/laravel-sitemap": "^6.2",
    "spatie/schema-org": "^3.11",
    "teamtnt/tntsearch": "^2.9"

## Linters

### PHP

- phpcs (should be install globally)
- [x] [vscode](https://marketplace.visualstudio.com/items?itemName=shevaua.phpcs)
- [ ] action

```bash
composer global require squizlabs/php_codesniffer
composer global require emielmolenaar/phpcs-laravel
```

- php built-in linter
  - [x] vscode built-in plugin
  - [ ] action

- phpstan with larastan (already installed)
  - [x] [vscode](https://marketplace.visualstudio.com/items?itemName=swordev.phpstan)
  - [ ] action

- tlint?

### JS

- eslint (rules from [Potassium](https://github.com/platanus/potassium/blob/master/lib/potassium/assets/.eslintrc.json))
  - [x] vscode
  - [ ] action

- stylelint (rules from [Potassium](https://github.com/platanus/potassium/blob/master/lib/potassium/assets/.stylelintrc.json))
  - [ ] vscode
  - [ ] action

### Extra

- dotenv-lint?

## Testing

### PHP with Pest

```bash
php artisan test
```

- [ ] code coverage
- [ ] action

### Browser with Laravel Dusk

```bash
php artisan pest:dusk
```

- [ ] action

### JS with Jest

```bash
TODO
```

- [ ] code coverage
- [ ]  action

## Github Actions

### integration workflow

- [ ] Build PHP
- [ ] Build Node
- [ ] composer cache
- [ ] composer isntall
- [ ] node cache
- [ ] node install
- [ ] run linters
- [ ] run testing
