#! /bin/sh
echo "extension = memcached.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini
echo "extension = memcache.so" >> ~/.phpenv/versions/$(phpenv version-name)/etc/php.ini