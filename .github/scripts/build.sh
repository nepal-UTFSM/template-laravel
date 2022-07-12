#! /bin/bash

cp .env.integration .env
cp public/.htaccess.example public/.htaccess

chmod a+w -R ./bootstrap/
chmod a+w -R ./storage/

composer install --no-ansi --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
npm i --only=prod

php artisan storage:link --relative

npm run prod
