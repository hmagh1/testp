#!/bin/bash

while ! mysqladmin ping -h"mysql_sgbd" --silent; do
    echo "⏳ En attente de MySQL..."
    sleep 2
done

exec apache2-foreground
