#!/bin/bash

# Here some custom configuration is done for the root of Wordpress
# to exist in /var/www/html/docs.
# wp-config contains settings for WP_HOME and WP_SITEURL
# .htaccess redirects . to docs/index.php
#
echo ">> Copying wp-config.php into mounted /var/www/html..."
cp /tmp_wp-config.php /var/www/html/wp-config.php

# echo ">> Copying .htaccess into mounted /var/www/html..."
# cp /tmp_htaccess /var/www/html/.htaccess

echo ">> Creating .../docs and move all files into it."
cd /var/www/html
mkdir docs
for fi  in * .*
do
mv $fi docs/$fi
done

# Then exec the original command (starts Apache)
/usr/local/bin/docker-entrypoint.sh apache2-foreground

