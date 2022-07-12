#! /bin/bash

result=0
trap 'result=1' ERR
find . -path ./vendor -prune -o -path ./storage -prune -o -type f -name '*.php' -exec php -l {} 2>&1 >/dev/null \; > phplint.txt
cat phplint.txt | sed -r "s|PHP ([[:graph:][:space:]]*) in ([[:graph:]]*) on line ([[:digit:]]*)|::error file=\2,line=\3,col=0::\1|m"

./vendor/bin/phpstan --memory-limit=1G --no-progress --error-format=github

./vendor/bin/phpcs app/ --report=emacs > phpcs.txt
cat phpcs.txt | sed -r "s|([[:graph:]]*):([[:digit:]]*):([[:digit:]]*): ([[:graph:][:space:]]*)|::error file=\1,line=\2,col=\3::\4|m"

./node_modules/.bin/eslint "./resources/**/*.{js,vue}" --format unix > eslint.txt
cat eslint.txt | sed -r "s|([[:graph:]]*):([[:digit:]]*):([[:digit:]]*): ([[:graph:][:space:]]*)|::error file=\1,line=\2,col=\3::\4|m"

rm phpcs.txt eslint.txt phplint.txt
exit "$result"
