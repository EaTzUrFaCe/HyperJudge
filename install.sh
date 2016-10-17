#!/bin/bash

# Web Server Configuration
a2enmod rewrite
patch /etc/apache2/apache2.conf `dirname $0`/scripts/apache2.conf.patch
patch /etc/php/7.0/apache2/php.ini `dirname $0`/scripts/php.ini.patch
service apache2 restart



# Keep at End
rm -rf /var/www/html/scripts
