#!/bin/bash

EXAMPLE=${1:-"nullsafe"}


reset
printf "\n\n======== ${EXAMPLE^} Description =========\n\n"

DESCRIPTION=$(<"/app/examples/$EXAMPLE/description.txt")
echo -e "\e[104m$DESCRIPTION\033[0m"
printf "\n==========================================\n\n"

for i in {1..9}; do
  FILENAME="${EXAMPLE}/example_${i}"
  if test -f "/app/examples/$FILENAME.php"; then
    printf "EXAMPLE $i"
    printf "\n\n----- description -------\n\n"
    TEST_DESCRIPTION=$(<"/app/examples/$FILENAME.txt")
    echo -e "\e[46m$TEST_DESCRIPTION\033[0m"
    printf "\n-------- code -----------\n\n"
    clish -f /app/examples/$FILENAME.php
    printf "\n\n------- output ----------\n\n"
    php -f /app/examples/$FILENAME.php
    printf "\n\n-------------------------\n\n\n\n"
  fi
done
printf "\n\n==========================================\n\n"