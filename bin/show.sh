#!/bin/bash

SCRIPT=${1:-"nullsafe"}

printf "\n\n-------- $SCRIPT Description -----------\n\n"
cat /app/examples/$SCRIPT.txt

for i in {1..9}; do
  FILENAME="${SCRIPT}_${i}"
  if test -f "/app/examples/$FILENAME.php"; then
    printf "\n\n-------- desc -----------\n\n"
    cat /app/examples/$FILENAME.txt
    printf "\n\n-------- code -----------\n\n"
    clish -f /app/examples/$FILENAME.php
    printf "\n\n------- output ----------\n\n"
    php -f /app/examples/$FILENAME.php
    printf "\n\n-------------------------\n\n"
  fi
done
printf "\n\n----------------------------------------\n\n"