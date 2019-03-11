#!/bin/bash

cd ..

echo "--- CUSTOM MODULES ---"
phpcs --standard=DrupalPractice,Drupal --colors --report=summary --extensions=php,module,inc,install,test,profile,theme,css,info,txt,md ./modules/custom &
PID=$!
i=1
sp="/-\|"
echo -n ' '
while [ -d /proc/$PID ]
do
  printf "\b${sp:i++%${#sp}:1}"
done

echo "--- CUSTOM THEMES ---"
phpcs --standard=DrupalPractice,Drupal --colors --report=summary --extensions=php,module,inc,install,test,profile,theme,css,info,txt,md ./themes/custom &
PID=$!
i=1
sp="/-\|"
echo -n ' '
while [ -d /proc/$PID ]
do
  printf "\b${sp:i++%${#sp}:1}"
done
