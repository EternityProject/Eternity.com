#!/usr/bin/env bash
#nginx

# set up nginx server
sudo cp /var/www/.provision/nginx/nginx.conf /etc/nginx/conf/conf.d/eternity.conf
sudo service nginx reload

