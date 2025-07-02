#!/bin/sh
set -e

host="mysql_sgbd"
until mysqladmin ping -h "$host" --silent; do
  echo "⏳ En attente de MySQL..."
  sleep 2
done

exec apache2-foreground
