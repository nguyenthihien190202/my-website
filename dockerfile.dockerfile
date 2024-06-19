# Use the official WordPress image
FROM wordpress:latest

# Copy custom nginx configuration to container
COPY nginx.conf /etc/nginx/nginx.conf

# Copy custom wp-config.php to WordPress installation
COPY wp-config.php /var/www/html/wp-config.php

# Set permissions for wp-config.php (optional, adjust as needed)
RUN chown www-data:www-data /var/www/html/wp-config.php && \
    chmod 640 /var/www/html/wp-config.php
