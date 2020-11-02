#!/bin/bash

EXAMPLE=${1:-"nullsafe"}

reset
EXAMPLE_NAME=${EXAMPLE//-/ }
HEADER="========= ${EXAMPLE_NAME^} description ========="
printf "\n\n$HEADER\n\n"

COUNT=${#HEADER}

DESCRIPTION=$(<"/app/examples/$EXAMPLE/description.txt")
echo -e "\e[96m$DESCRIPTION\033[0m"
CLOSING_LINE=$(printf "%-${COUNT}s" "=")
printf "\n${CLOSING_LINE// /=}\n\n"

for i in {1..9}; do
  FILENAME="${EXAMPLE}/example_${i}"
  if test -f "/app/examples/$FILENAME.php"; then
    printf "\n\nEXAMPLE $i"
    printf "\n\n----- description -------\n\n"
    TEST_DESCRIPTION=$(<"/app/examples/$FILENAME.txt")
    echo -e "\e[96m$TEST_DESCRIPTION\033[0m"
    printf "\n-------- code -----------\n\n"
    clish -l -f /app/examples/$FILENAME.php
    echo "--------- output ----------"
    printf "\n"
    php -f /app/examples/$FILENAME.php
    printf "\n\n-------------------------\n\n"
  fi
done
printf "\n\n==========================================\n\n"