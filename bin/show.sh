#!/bin/bash

SCRIPT=${1:-"nullsafe"}

for i in {1..9}; do
  FILENAME="${SCRIPT}_${i}"
  if test -f "/app/examples/$FILENAME.txt"; then
    printf "\n\n-------- desc -----------\n\n"
    cat /app/examples/$FILENAME.txt
    printf "\n\n-------- code -----------\n\n"
    clish -f /app/examples/$FILENAME.php
    printf "\n\n------- output ----------\n\n"
    php -f /app/examples/$FILENAME.php
    printf "\n\n-------------------------\n\n"
  fi
done
