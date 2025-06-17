#!/bin/bash

echo ">> Copying wp-config.php into mounted /var/www/html..."
cp /tmp_wp-config.php /var/www/html/wp-config.php

# Then exec the original command (starts Apache)
/usr/local/bin/docker-entrypoint.sh apache2-foreground

