# Laravel template

## Stack

- PHP 8.1
- ECMAScript 6
- Node 16
- Laravel 10
- Vue 3
- Tailwind 3

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

### Browser with Laravel Dusk

    php artisan pest:dusk

