#!/bin/bash
echo "-----------------------------------------------------------------------------------------------"
echo " 💣This command will remove your Migration PHP files , drop the database, and recreate it"
echo "-----------------------------------------------------------------------------------------------"
read -r -p "Are you sure you want to do this? [y/N] " response
echo ""
if [[ "$response" =~ ^[Yy]$ ]]
then
echo "rebuilding database ..."
php bin/console doctrine:schema:drop -n -q --force --full-database
rm migrations/*.php
php bin/console make:migration
php bin/console doctrine:migrations:migrate -n -q
# php bin/console doctrine:fixtures:load
fi
