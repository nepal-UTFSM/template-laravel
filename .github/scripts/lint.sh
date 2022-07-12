#! /bin/bash

find . -path ./vendor -prune -o -path ./storage -prune -o -type f -name '*.php' -exec php -l {} 2>&1 >/dev/null \; | sed -r "s|PHP ([[:graph:][:space:]]*) in ([[:graph:]]*) on line ([[:digit:]]*)|::error file=\2,line=\3,col=0::\1|m"
./vendor/bin/phpstan --memory-limit=1G --no-progress --error-format=github
./vendor/bin/phpcs app/ --report=emacs | sed -r "s|([[:graph:]]*):([[:digit:]]*):([[:digit:]]*): ([[:graph:][:space:]]*)|::error file=\1,line=\2,col=\3::\4|m"

./node_modules/.bin/eslint "./resources/**/*.{js,vue}" --format unix | sed -r "s|([[:graph:]]*):([[:digit:]]*):([[:digit:]]*): ([[:graph:][:space:]]*)|::error file=\1,line=\2,col=\3::\4|m"
