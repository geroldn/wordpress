# You can change this to a different version of Wordpress available at
# https://hub.docker.com/_/wordpress
FROM wordpress:5.3.2-apache

RUN apt-get update && apt-get install -y magic-wormhole

# Overwrite wp-config.php to set WP_HOME and WP_SITEURL
COPY wp-config.php /tmp/wp-config.php
COPY pl_entrypoint.sh /pl_entrypoint.sh
RUN chmod +x /pl_entrypoint.sh

RUN usermod -s /bin/bash www-data
RUN chown www-data:www-data /var/www
USER www-data:www-data

ENTRYPOINT ["/pl_entrypoint.sh"]

