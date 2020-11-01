#!/bin/bash

SCRIPT=${1:-"nullsafe"}

printf "\n\n-------- desc -----------\n\n"
cat /app/examples/$SCRIPT.txt
printf "\n\n-------- code -----------\n\n"
clish -f /app/examples/$SCRIPT.php
printf "\n\n------- output ----------\n\n"
php -f /app/examples/$SCRIPT.php
printf "\n\n-------------------------\n\n"
