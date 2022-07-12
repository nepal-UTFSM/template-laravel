#! /bin/bash

cp .env.example .env
cp public/.htaccess.example public/.htaccess

chmod a+w -R ./bootstrap/
chmod a+w -R ./storage/

composer install --no-ansi --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
npm i --only=prod

php artisan key:generate
php artisan migrate:fresh
php artisan storage:link --relative

npm run prod
