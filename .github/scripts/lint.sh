#! /bin/bash

find . -path ./vendor -prune -o -path ./storage -prune -o -type f -name '*.php' -exec php -l {} 2>&1 >/dev/null \; | sed -r "s|PHP ([[:graph:][:space:]]*) in ([[:graph:]]*) on line ([[:digit:]]*)|::error file=\2,line=\3,col=0::\1|m"
#cat a.txt | sed -r "s|PHP ([[:graph:][:space:]]*) in ([[:graph:]]*) on line ([[:digit:]]*)|::error file=\2,line=\3,col=0::\1|g"
./vendor/bin/phpstan --memory-limit=1G --no-progress --error-format=github

