# You can change this to a different version of Wordpress available at
# https://hub.docker.com/_/wordpress
FROM wordpress:5.3.2-apache

RUN apt-get update && apt-get install -y magic-wormhole

# Overwrite wp-config.php to set WP_HOME and WP_SITEURL
COPY wp-config.php /var/www/html/wp-config.php

RUN echo "PLAZUNO TEST:"
RUN printf "%s\n" "<?php" \
  "define('WP_HOME', 'https://yourdomain.com/docs');" \
  "define('WP_SITEURL', 'https://yourdomain.com/docs');" \
  "require_once('/var/www/html/wp-config-sample.php');" \
  > /var/www/html/wp-config.php

RUN usermod -s /bin/bash www-data
RUN chown www-data:www-data /var/www
USER www-data:www-data


